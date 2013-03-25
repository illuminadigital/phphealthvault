<?php
namespace DLS\Healthvault\Blob;

use DLS\Healthvault\Platform\PlatformMethodFactory;
use com\microsoft\wc\thing\Thing2;

use com\microsoft\wc\thing\BlobPayloadItem;

class BlobStore implements \Iterator, \Countable, \ArrayAccess
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
    
    protected $iterator;
    
    public function __construct(PlatformMethodFactory $factory, Thing2 $thing) {
        $this->platformMethodFactory = $factory;
        $this->thing = $thing;
        
        $this->syncFromThing();
    }
    
    public function add($file, $name, $contentType = NULL, $skipResync = FALSE)
    {
        $handle = fopen($file);
        
        $data = $this->uploadFile($handle);
        
        fclose($handle);
        
        if ( empty($contentType) ) {
            $contentType = Blob::determineContentType($file);
        }
        
        $blob = new Blob($name, $data['size'], $contentType);
        $blob->setReference($data['ref']);
        $blob->setHashParams($data['hashParameters']);
        $blob->setHashAlgorithm($data['hashAlgorithm']);
        $blob->setUploaded();

        $this->updateBlobHashData($blob);
        
        $this->blobs[$name] = $blob;
        
        if ( ! $skipResync ) {
            $this->syncToThing();
        }
    }
    
    public function addBlob(Blob $blob, $skipResync = FALSE)
    {
        $fileUrl = 'data://text/plain;base64,' . base64_encode($blob->getData());
        
        $handle = fopen($fileUrl, "r");
        $uploadData = $this->uploadFile($handle);
        fclose($handle);

        $blob->setSize($uploadData['size']);
        $blob->setReference($uploadData['ref']);
        $blob->setHashParams($uploadData['hashParameters']);
        $blob->setHashAlgorithm($uploadData['hashAlgorithm']);
        $blob->setUploaded();
        
        $contentType = $blob->getContentType();
        
        if (empty($contentType)) {
            $contentType = Blob::determineContentType($blob->getData(), TRUE);
        }
        
        $blob->setContentType($contentType);
        
        $this->updateBlobHashData($blob);
        
        $name = $blob->getName();
        
        $this->blobs[$name] = $blob;
        
        if ( ! $skipResync ) {
            $this->synctoThing();
        }
        
        return TRUE;
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
        
        $this->syncToThing();
        
        return TRUE;
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
        
        $this->syncToThing();
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
        
        $blobRefUrl = $result->getBlobRefUrl();
        $chunkSize = $result->getBlobChunkSize();
        $maxBlobSize = $result->getMaxBlobSize();
        $hashAlgorithm = $result->getBlobHashAlgorithm()->getValue();
        $hashParameters = $result->getBlobHashParameters();
        
        $conn = curl_init($blobRefUrl);
        
        $completed = FALSE;
        
        $sentBytes = 0;
        
        $fileData = fstat($file);
        
        if ( ! $fileData || ! isset($fileData['size']) ) {
            $totalLength = '*'; // Not documented, but in .NET code
        } else {
            $totalLength = $fileData['size'];
        }
        
        while (($nextChunk = fread($file, $chunkSize)) !== FALSE && ! $completed) {
            if (feof($file)) {
                $completed = TRUE;
            }

            $this->sendData($conn, $nextChunk, $sentBytes, $completed, $totalLength);
        }
        
        if ( ! $completed ) {
            $completed = TRUE;
            $this->sendData($conn, NULL, $sentBytes, $completed);
        }
        
        return array(
            'size' => $sentBytes,
            'ref' => $blobRefUrl,
            'hashAlgorithm' => $hashAlgorithm,
            'hashParameters' => $hashParameters,
            'chunkSize' => $chunkSize,
        );
    }
    
    protected function sendData($conn, $data, &$sentBytes, $isComplete = FALSE, $totalLength = '*') {
        $chunkLength = Blob::safeStrlen($data);

        $extraHeaders = array(
            'Expect:', // Disable the Expect logic which would mean waiting for a response before sending
            'Content-Range: ' . sprintf('bytes %d-%d/%s', $sentBytes, $sentBytes + $chunkLength, $totalLength),
        );
        
        if ($isComplete) {
            $extraHeaders[] = 'x-hv-blob-complete: 1';
        }
        
        curl_setopt($conn, CURLOPT_POST, TRUE);
        curl_setopt($conn, CURLOPT_HEADER, TRUE);
        curl_setopt($conn, CURLOPT_USERAGENT, 'PHPHV');
        curl_setopt($conn, CURLOPT_POSTFIELDS, urlencode($data));
        curl_setopt($conn, CURLOPT_HTTPHEADER, $extraHeaders);
        curl_setopt($conn, CURLOPT_RETURNTRANSFER, TRUE);
        
        $response = curl_exec($conn);
        
        if ($response === FALSE) {
            throw new \NetworkIOException('Failed to PUT data into HealthVault');
        }
                
        $sentBytes += $chunkLength;
        
        return TRUE;
    }
    
    protected function syncToThing() {
		$names = $this->blobs;
        
        $blobPayload = $this->thing->getBlobPayload();
        
        $processed = array();
        
        $blobData = $blobPayload->getBlob();
        
        foreach ($blobData as $index => $thisBlob) {
            $blobInfo = $thisBlob->getBlobInfo();
            
            $thisBlobName = $blobInfo->getName()->getValue();
            
            if ( isset($names[$thisBlobName]) ) {
                // Process this entry
                
                if ($this->blobs[$thisBlobName]->isDeleted()) {
                    $thisBlob
                        ->setContentLength(0)
                        ->setBase64data(FALSE)
                        ->setBlobRefUrl(FALSE)
                    ;
                } else if ($this->blobs[$thisBlobName]->isModified()) {
                    $this->updateThingBlob($thisBlob, $thisBlobName);
                } else {
                    // Remove unchanged items
                    unset ($blobData[$index]);
                }
                
                $processed[$thisBlobName] = TRUE;
            }
        }
        
        // Don't use the internal mechanisms as they can't cope with creating an empty array of blobs. We will deal with that later.
        
        foreach (array_keys($names) as $thisBlobName) {
            $thisBlobData = $this->blobs[$thisBlobName];
            
            if ( ! isset($processed[$thisBlobName]) && ($thisBlobData->isModified() && ! $thisBlobData->isDeleted())) {
                // New entry
                
                $thisBlob = new BlobPayloadItem();
                
                $this->updateThingBlob($thisBlob, $thisBlobName);
                
                $blobData[] = $thisBlob;
            }
        }
        
        if ( ! empty($blobData) ) {
            // Write the changes back into the payload;
            $blobPayload->setBlob($blobData);
        } else {
            $this->thing->setBlobPayload(FALSE);
        }
    }
    
    protected function updateThingBlob(BlobPayloadItem $thisBlob, $thisBlobName) {
        $storedBlob = $this->blobs[$thisBlobName];
        $thisBlobInfo = $thisBlob->getBlobInfo();
        $thisBlobHashInfo = $thisBlobInfo->getHashInfo();
        
        if ($storedBlob->isUploaded()) {
            $thisBlob->setContentLength($storedBlob->getSize());
            $thisBlob->setBlobRefUrl($storedBlob->getReference());
            $thisBlob->setBase64data(FALSE);
        } else {
            $thisBlob->setContentLength($storedBlob->getSize());
            $thisBlob->setBase64data(base64_encode($storedBlob->getData()));
            $thisBlob->setBlobRefUrl(FALSE);
        }
        
        $thisBlobInfo->setName($storedBlob->getName());
        $thisBlobInfo->setContentType($storedBlob->getContentType());
        
        $thisBlobHashInfo->setAlgorithm($storedBlob->getHashAlgorithm());
        $thisBlobHashInfo->getParams()->setBlockSize($storedBlob->getHashParams()->getBlockSize());
        $thisBlobHashInfo->setHash($storedBlob->getHash());
    }
    
    protected function syncFromThing($removeNewItems = FALSE) {
        $blobPayload = $this->thing->getBlobPayload();

        $processed = array();
        
        foreach ($blobPayload->getBlob() as $thisBlob) {
            $blobInfo = $thisBlob->getBlobInfo();
        
            $thisBlobName = $blobInfo->getName()->getValue();
        
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
                $blob = new Blob($thisBlobName, $thisBlob->getContentLength(), $blobInfo->getContentType()->getValue());
                $this->blobs[$thisBlobName] = $blob;
                
                $data = $thisBlob->getBase64data(FALSE);
                if ( is_object($data) ) {
                    $data = $data->getValue();
                    
                    if ( ! empty($data) ) {
                        $data = base64_decode($data);
                    }
                }
                $blob->setData($data);
            }
            
            $hashInfo = $blobInfo->getHashInfo();
            
            $blob
                ->setHashAlgorithm($hashInfo->getAlgorithm()->getValue())
                ->setHashParams($hashInfo->getParams()->getBlockSize())
                ->setHash($hashInfo->getHash()->getValue())
                ->setReference($thisBlob->getBlobRefUrl(FALSE))
                ->setClean(TRUE)
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
    
    protected function updateBlobHashData(Blob $blob) {
        /*
        $blob
        ->setHashAlgorithm($hashInfo->getAlgorithm()->getValue())
        ->setHashParams($hashInfo->getParams()->getBlockSize())
        ->setHash($hashInfo->getHash()->getValue())
        */
        
        $hashAlgorithm = $blob->getHashAlgorithm();
        if ( empty($hashAlgorithm) ) {
            $hashAlgorithm = $this->getHashAlgorithm();
            $blob->setHashAlgorithm($hashAlgorithm);
        }

        $hashParameters = $blob->getHashParams();
        if ( is_object($hashParameters) ) {
            $chunkSize = $hashParameters->getBlockSize();
        }
        if ( empty($chunkSize) ) {
            $chunkSize = 1 << 21; // From the .NET code
            $blob->getHashParams()->setBlockSize($chunkSize);
        }
        
        // Convert from BITS to BYTES
        $chunkSize = $chunkSize >> 3;
        
        /*
         * The procedure appears to be:
         * - Chunk the data into blocks of maximum length "block size"
         * - Foreach chunk, hash the data with the hashing algorithm.
         * - Concatenate all the hashes and then hash this with the hashing algorithm.
         * - return this final hash
         */
        
        $data = $blob->getData();
        $blobLength = Blob::safeStrlen($data);
        
        if (substr($hashAlgorithm, -5) == 'Block') {
            $hashAlgorithm = substr($hashAlgorithm, 0, -5);

            $hashData = '';
            $count = 0;
            for ($offset = 0; $offset < $blobLength; $offset += $chunkSize, $count++) {
                $chunk = substr($data, $offset, $chunkSize);
                
                $hashData .= hash($hashAlgorithm, $chunk, TRUE);
            }
            
            $hash = base64_encode(hash($hashAlgorithm, $hashData, TRUE));
        } else {
            $hash = base64_encode(hash($hashAlgorithm, $data, TRUE));
        }
        
        $blob->setHash($hash);
        
        return $this;
    }
    
    protected function getHashAlgorithm() {
        return 'SHA256';
    }
    
    public function getIterator() {
        if ( empty($this->iterator) ) {
            $this->iterator = new \ArrayIterator($this->blobs);
        }
        
        return $this->iterator;
    }

    public function current() {
        $iterator = $this->getIterator();
        
        return $iterator->current();
    }

    public function key() {
        $iterator = $this->getIterator();
        
        return $iterator->key();
    }

    public function next() {
        $iterator = $this->getIterator();
        
        return $iterator->next();
    }

    public function rewind() {
        $iterator = $this->getIterator();
        
        return $iterator->rewind();
    }

    public function valid() {
        $iterator = $this->getIterator();
        
        return $iterator->valid();
    }

    public function count() {
        return count($this->blobs);
    }
    
    /*
     * The following methods use the iterator for consistency 
     */
    public function offsetExists ( $offset ) {
        $iterator = $this->getIterator();
        
        return $iterator->offsetExists($offset);
    }
    
    public function offsetGet ( $offset ) {
        $iterator = $this->getIterator();
        
        return $iterator->offsetGet($offset);
    }
    
    public function offsetSet ( $offset, $value ) {
        $iterator = $this->getIterator();
        
        $iterator->offsetSet($offset, $value);
    }
    
    public function offsetUnset ( $offset ) {
        $iterator = $this->getIterator();
        
        $iterator->offsetUnset($offset);
    }
}
