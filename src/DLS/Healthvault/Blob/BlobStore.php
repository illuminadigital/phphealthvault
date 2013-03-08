<?php
namespace DLS\Healthvault\Blob;

use DLS\Healthvault\Platform\PlatformMethodFactory;
use com\microsoft\wc\thing\Thing2;

use com\microsoft\wc\thing\BlobPayloadItem;

class BlobStore
{
    /**
     * @var PlatformMethodFactory
     */
    protected $platformMethodFactory;
    
    /**
     * @var Thing
     */
    protected $thing;
    
    protected $blobs = array();
    
    public function __construct(PlatformMethodFactory $factory, Thing2 $thing) {
        $this->platformMethodFactory = $factory;
        $this->thing = $thing;
        
        $this->syncFromThing();
    }
    
    public function add($file, $name, $contentType = NULL, $skipResync = FALSE)
    {
        $handle = fopen($file);
        
        $data = $this->uploadFile($handle);
        
        if ( empty($contentType) ) {
            $finfo = finfo_open(FILEINFO_MIME_TYPE);
            $contentType = finfo_file($finfo, $file);
            finfo_close($finfo);
        }
        
        if ( empty($contentType) ) {
            $contentType = 'application/data'; // Fallback
        }
        
        $blob = new Blob($name, $data['size'], $contentType);
        $blob->setReference($data['ref']);
        
        $this->blobs[$name] = $blob;
        
        if ( ! $skipResync ) {
            $this->syncToThing($name);
        }
    }
    
    public function addMultiple(array $files)
    {
        $addedNames = array();
        
        foreach ($files as $key => $data) {
            $contentType = NULL;
            
            if (is_array($data)) {
                extract($data);
            } else {
                $name = $key;
                $file = $data;
            }
            
            $this->add($file, $name, $contentType, TRUE);
            
            $addedNames[$name] = TRUE;
        }
        
        $this->syncToThing($addedNames);
    }
    
    public function remove($name) {
        $names = (is_array($name) ? $name : array($names));
        
        foreach ($names as $thisName) {
            if ( ! isset($this->blobs[$thisName]) )
            {
                $blob = new Blob($thisName);
                
                $this->blobs[$thisName] = $blob;
            } else {
                $blob = $this->blobs[$thisName];
            }
            
            $blob->delete();
        }
        
        $this->syncToThing(array_flip($names));
    }

    public function get($name) {
        if (isset($this->blobs[$name])) {
            return $this->blobs[$name];
        } else {
            return NULL;
        }
    }
    
    public function getNames() {
        return array_keys($this->blobs);
    }
    
    protected function uploadFile($file) {
        $method = $this->platformMethodFactory->getPlatformMethod('BeginPutBlob');
        $result = $method->execute();
        
        $blobRefUrl = $result->getBlobRefUrl()->getValue();
        $chunkSize = $result->getBlockChunksize()->getValue();
        $maxBlobSize = $result->getMaxBlobSize()->getValue();
        $hashAlgorithm = $result->getBlobHashAlgorithm()->getValue();
        $hashParameters = $result->getBlobHashParameters()->getValue();
        
        $conn = curl_init($blobRefUrl);
        
        curl_setopt($conn, CURLOPT_POST, TRUE);
        curl_setopt($conn, CURLOPT_HEADER, FALSE);
        curl_setopt($conn, CURLOPT_USERAGENT, 'PHPHV');
        
        $completed = FALSE;
        
        $sentBytes = 0;
        
        $fileData = fstat($file);
        
        if ( ! $fileData || ! isset($fileData['size']) ) {
            $totalLength = '*';
        } else {
            $totalLength = $fileData['size'];
        }
        
        while (($nextChunk = fread($file, $chunkSize)) !== FALSE) {
            if (feof($file)) {
                $completed = TRUE;
            }

            $this->sendData($conn, $nextChunk, $sentBytes, $completed);
        }
        
        if ( ! $completed ) {
            $completed = TRUE;
            $this->sendData($conn, NULL, $sentBytes, $completed);
        }
        
        return array(
            'size' => $sentBytes,
            'ref' => $blobRefUrl
        );
    }
    
    protected function sendData($conn, $data, &$sentBytes, $isComplete = FALSE) {
        $chunkLength = Blob::safeStrlen($data);

        $extraHeaders = array(
            'Content-Range' => sprintf('bytes %d-%d/%s', $sentBytes, $sentBytes + $chunkLength, $totalLength),
        );
        
        if ($isComplete) {
            $extraHeaders['x-hv-blob-complete'] = 1;
        }
        
        curl_setopt($conn, CURLOPT_HTTPHEADER, $extraHeaders);
        
        curl_setopt($conn, CURLOPT_POSTFIELDS, $data);
        
        $response = curl_exec($conn);
        
        if ($response === FALSE) {
            throw new \NetworkIOException(sprintf('Failed to send request to %s', $blobRefUrl));
        }
        
        $sentBytes += $chunkLength;
        
        return TRUE;
    }
    
    protected function syncToThing($names = NULL) {
        if ( empty ($names) ) {
            $names = $this->blobs;
        } else if ( ! is_array($names) ) {
            $names = array($names => TRUE);
        }
        
        $blobPayload = $this->thing->getBlobPayload();
        
        $processed = array();
        
        foreach ($blobPayload->getBlob() as $thisBlob) {
            $blobInfo = $thisBlob->getBlobInfo();
            
            $thisBlobName = $blobInfo->getName();
            
            if ( isset($names[$thisBlobName]) ) {
                // Process this entry
                
                if ($this->blobs[$thisBlobName]->isDeleted()) {
                    $thisBlob
                        ->setContentLength(0)
                        ->setBase64data(NULL)
                        ->setBlobRefUrl(NULL)
                    ;
                } else if ($this->blobs[$thisBlobName]->isNew()) {
                    $this->updateThingBlob($thisBlob, $thisBlobName);
                }
                
                $processed[$thisBlobName] = TRUE;
            }
        }
        
        foreach (array_keys($names) as $thisBlobName) {
            if ( ! isset($processed[$thisBlobName]) ) {
                // New entry
                
                $thisBlob = new BlobPayloadItem();
                
                $this->updateThingBlob($thisBlob, $thisBlobName);
                
                $blobPayload->addBlob($thisBlob);
            }
        }
    }
    
    protected function updateThingBlob(BlobPayloadItem $thisBlob, $thisBlobName) {
        $storedBlob = $this->blobs[$thisBlobName];
        $thisBlobInfo = $thisBlob->getBlobInfo();
        $thisBlobHashInfo = $thisBlobInfo->getHashInfo();
        
        if ($storedBlob->isUploaded()) {
            $thisBlob
                ->setContentLength($storedBlob->getSize())
                ->setBase64data(NULL)
                ->setBlobRefUrl($storedBlob->getReference())
            ;
        } else {
            $thisBlob
                ->setContentLength($storedBlob->getSize())
                ->setBase64data(base64_encode($storedData->getData()))
                ->setBlobRefUrl(NULL)
            ;
        }
        
        $thisBlobInfo
            ->setName($storedBlob->getName())
            ->setContentType($storedBlob->getContentType())
        ;
        
        $thisBlobHashInfo
            ->setAlgorithm($storedBlob->getHashAlgorithm())
            ->setParams($storedBlob->getHashParams())
            ->setHash($storedBlob->getHash())
        ;
    }
    
    protected function syncFromThing($removeNewItems = FALSE) {
        $blobPayload = $this->thing->getBlobPayload();

        $processed = array();
        
        foreach ($blobPayload->getBlob() as $thisBlob) {
            $blobInfo = $thisBlob->getBlobInfo();
        
            $thisBlobName = $blobInfo->getName();
        
            if (isset($this->blobs[$thisBlobName])) {
                // Resync existing
                
                $blob = $this->blobs[$thisBlobName];
                
                if ($blob->getSize() != $thisBlob->getContentLength() 
                        && ($blob->hasData() 
                                || ($thisBlob->getData() && $thisBlob->getData()->getValue())
                        )) {
                    
                    $data = $thisBlob->getData();
                    if ( ! empty($data) ) {
                        $data = base64_decode($data);
                    }
                    
                    $blob->setData($data);
                }
            } else {
                $blob = new Blob($thisBlobName, $thisBlob->getContentLength(), $thisBlobInfo->getContentType()->getValue());
                $this->blobs[$thisBlobName] = $blob;
                
                $data = $thisBlob->getData();
                if ( ! empty($data) ) {
                    $data = base64_decode($data);
                }
                
                $blob->setData($data);
            }
            
            $hashInfo = $thisBlobInfo->getHashInfo();
            
            $blob
                ->setHashAlgorithm($hashInfo->getAlgorithm()->getValue())
                ->setHashParams($hashInfo->getParams()->getValue())
                ->setHash($hashInfo->getHash()->getValue())
                ->setBlobRefUrl($thisBlob->getBlobRefUrl())
            ;
        }
        
        if ($removeNewItems) {
            foreach (array_keys($this->blobs) as $thisItem) {
                if ( ! isset($processed[$thisItem]) ) {
                    unset($this->blobs[$thisItem]);
                }
            }
        }
    }
}
