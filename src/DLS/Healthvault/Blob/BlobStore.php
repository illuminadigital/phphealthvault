<?php
namespace DLS\Healthvault\Blob;

use DLS\Healthvault\Blob\Exceptions\NetworkIOException;

use DLS\Healthvault\Platform\PlatformMethodFactory;
use com\microsoft\wc\thing\Thing2;

use com\microsoft\wc\thing\BlobPayloadItem;

/**
 * A store the Blobs related to a Thing. 
 * 
 * Transparently manages the blobs as far as possible, although the Thing does
 * need to be saved (with PutThing) after any changes
 * 
 * @author Alistair MacDonald <alistair.macdonald@digitallifesciences.co.uk>
 *
 */
class BlobStore implements \Iterator, \Countable, \ArrayAccess
{
    /**
     * Factory for creating methods that talk to HealthVault
     * 
     * @var \DLS\Healthvault\Platform\PlatformMethodFactory
     */
    protected $platformMethodFactory;
    
    /**
     * The Thing to which this store relates
     * 
     * @var \com\microsoft\wc\thing\Thing2
     */
    protected $thing;
    
    /**
     * The blobs that are attached to this thing
     * 
     * @var array
     */
    protected $blobs = array();
    
    /**
     * An iterator, allowing the store to be used for direct access
     * 
     * @var \Iterator
     */
    protected $iterator;
    
    public function __construct(PlatformMethodFactory $factory, Thing2 $thing) {
        $this->platformMethodFactory = $factory;
        $this->thing = $thing;
        
        $this->syncFromThing();
    }
    
    /**
     * Add a blob from a filename
     * 
     * @param string $file - the filename
     * @param string $name - the name to give the blob (must be unique in this thing)
     * @param string $contentType - the mime type of the file (optional)
     * @param boolean $skipResync - whether to immediately resync the data (internal mostly)
     * @param boolean $doUpload - whether to immediately upload the data (internal mostly)
     */
    public function add($file, $name, $contentType = NULL, $skipResync = FALSE, $doUpload = TRUE)
    {
        $handle = fopen($file);
        
        $fileData = $this->getFileData($handle);
        
        $blob->setSize($fileData['size']);
        
        if ($doUpload) {
            $data = $this->uploadFile($handle);
        }
        
        fclose($handle);
        
        if ( empty($contentType) ) {
            $contentType = Blob::determineContentType($file);
        }
        
        $blob = new Blob($name, $fileData['size'], $contentType);
        
        // $data will only have been set if the file was just uploaded 
        if (isset($data)) {
            $blob->setReference($data['ref']);
            $blob->setHashParams($data['hashParameters']);
            $blob->setHashAlgorithm($data['hashAlgorithm']);
            $blob->setUploaded();
            
            $this->updateBlobHashData($blob);
        }
        
        $this->blobs[$name] = $blob;
        
        if ( ! $skipResync && $doUpload ) {
            $this->syncToThing();
        }
    }
    
    /**
     * Adds an exsting Blob to the store for this thing
     * 
     * @param Blob $blob
     * @param boolean $skipResync - whether to immediately resync the data (internal mostly)
     * @param boolean $doUpload - whether to immediately upload the data (internal mostly)
     * 
     * @return boolean
     */
    public function addBlob(Blob $blob, $skipResync = FALSE, $doUpload = TRUE)
    {
        // Use a string URI built from the base64 data in the blob
        $fileUrl = 'data://text/plain;base64,' . base64_encode($blob->getData());
        
        $handle = fopen($fileUrl, "r");
        
        $fileData = $this->getFileData($handle);

        $blob->setSize($fileData['size']);
        
        if ($doUpload) {
            $uploadData = $this->uploadFile($handle);

            $blob->setReference($uploadData['ref']);
            $blob->setHashParams($uploadData['hashParameters']);
            $blob->setHashAlgorithm($uploadData['hashAlgorithm']);
            $blob->setUploaded();
        }

        fclose($handle);

        $contentType = $blob->getContentType();
        
        if (empty($contentType)) {
            $contentType = Blob::determineContentType($blob->getData(), TRUE);
        }
        
        $blob->setContentType($contentType);
        
        if ($doUpload) {
            // The information needs updating if we needed the upload
            $this->updateBlobHashData($blob);
        }
        
        $name = $blob->getName();
        
        $this->blobs[$name] = $blob;
        
        // Don't resync if told not to, or if we didn't upload the file
        if ( ! $skipResync && $doUpload ) {
            $this->synctoThing();
        }
        
        return TRUE;
    }
    
    /**
     * Convenience method for adding a number files (from filenames)
     * 
     * @param array $files - filenames to add
     * 
     * @return boolean
     */
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
            
            // We skip the resync and do it at the end
            $this->add($file, $name, $contentType, TRUE);
            
            $addedNames[$name] = TRUE;
        }
        
        // Sync all the entries in one go
        $this->syncToThing();
        
        return TRUE;
    }
    
    /**
     * Removes the named blob(s) from the store
     * 
     * @param string|array $name
     */
    public function remove($name) {
        $names = (is_array($name) ? $name : array($name));
        
        foreach ($names as $thisName) {
            if ( ! isset($this->blobs[$thisName]) )
            {
                // The blob may need to be deleted at the far end but not be present locally
                $blob = new Blob($thisName);
                
                $this->blobs[$thisName] = $blob;
            } else {
                $blob = $this->blobs[$thisName];
            }
            
            $blob->delete();
        }
        
        $this->syncToThing();
    }
    
    /**
     * Removes the blob by reference from the stoe
     * 
     * @param Blob $blob
     */
    public function removeBlob(Blob $blob) {
        $name = $blob->getName();

        return $this->remove($name);
    }

    /**
     * Retrieves a blob by name. Returns NULL if not found
     * 
     * @param string $name
     * 
     * @return Blob
     */
    public function get($name) {
        if (isset($this->blobs[$name])) {
            return $this->blobs[$name];
        } else {
            return NULL;
        }
    }
    
    /**
     * Returns the list of blob names known to this store
     *  
     * @return array
     */
    public function getNames() {
        return array_keys($this->blobs);
    }
    
    protected function getFileData($file) {
        $fileData = fstat($file);
        
        return $fileData;
    }
    
    /**
     * Uploads a file into HealthVault
     * 
     * @param FileHandle $file
     * @return array - details of the uploaded file
     */
    protected function uploadFile($file) {
        // First we need to get the URL and upload parameters 
        $method = $this->platformMethodFactory->getPlatformMethod('BeginPutBlob');
        $result = $method->execute();
        
        $blobRefUrl = $result->getBlobRefUrl(); // URL to upload to
        $chunkSize = $result->getBlobChunkSize(); // How much data to send at a time
        $maxBlobSize = $result->getMaxBlobSize(); // How large the uploaded file can be
        $hashAlgorithm = $result->getBlobHashAlgorithm()->getValue(); // The name of the hash algorithm to use as checksum
        $hashParameters = $result->getBlobHashParameters(); // The parameters for the hash algorithm

        // Open a connection to the upload URL
        $conn = curl_init($blobRefUrl);
        
        $completed = FALSE;
        
        $sentBytes = 0;
        
        $fileData = fstat($file);
        
        // We are supposed to tell the server the total size of the data we will be sending
        if ( ! $fileData || ! isset($fileData['size']) ) {
            $totalLength = '*'; // Not documented, but in .NET code
        } else {
            $totalLength = $fileData['size'];
        }

        // Loop through sending the file in blocks of the requested size 
        while (($nextChunk = fread($file, $chunkSize)) !== FALSE && ! $completed) {
            // If we now have the end of the file then we can mark the upload complete
            if (feof($file)) {
                $completed = TRUE;
            }

            $this->sendData($conn, $nextChunk, $sentBytes, $completed, $totalLength);
        }
        
        // If we hadn't got the end of the file before make sure the upload is marked as complete.
        if ( ! $completed ) {
            $completed = TRUE;
            $this->sendData($conn, NULL, $sentBytes, $completed);
        }
        
        // Send back the useful information to store in the Blob
        return array(
            'size' => $sentBytes,
            'ref' => $blobRefUrl,
            'hashAlgorithm' => $hashAlgorithm,
            'hashParameters' => $hashParameters,
            'chunkSize' => $chunkSize,
        );
    }
    
    /**
     * Write data to the HealthVault blob store URL
     * 
     * @param $conn - the curl connection 
     * @param string $data - the binary data to send
     * @param int $sentBytes - how many bytes have already been sent
     * @param boolean $isComplete - does this complete the transfer
     * @param string $totalLength - how long is the overall data block
     * 
     * @throws NetworkIOException
     * 
     * @return boolean
     */
    protected function sendData($conn, $data, &$sentBytes, $isComplete = FALSE, $totalLength = '*') {
        $chunkLength = Blob::safeStrlen($data);

        $extraHeaders = array(
            'Expect:', // Disable the Expect logic which would mean waiting for a response before sending
            'Content-Type:', // No Content Type
            'Transfer-Encoding: chunked', // Sending it in bits
        );
        
        if ($chunkLength > 0) {
            $extraHeaders[] = 'Content-Range: ' . sprintf('bytes %d-%d/%s', $sentBytes, $sentBytes + $chunkLength -1, $totalLength);
        }
        
        if ($isComplete) {
            // Send the header that tells HealthVault that the transfer is complete
            $extraHeaders[] = 'x-hv-blob-complete: 1';
        }
        
        curl_setopt($conn, CURLOPT_POST, TRUE);
        curl_setopt($conn, CURLOPT_HEADER, TRUE);
        curl_setopt($conn, CURLOPT_USERAGENT, 'PHPHV');
        curl_setopt($conn, CURLOPT_POSTFIELDS, $data);
        curl_setopt($conn, CURLOPT_HTTPHEADER, $extraHeaders);
        curl_setopt($conn, CURLOPT_RETURNTRANSFER, TRUE);
        
        $response = curl_exec($conn);
        
        if ($response === FALSE) {
            throw new NetworkIOException('Failed to PUT data into HealthVault');
        }
        
        $sentBytes += $chunkLength;
        
        return TRUE;
    }
    
    public function syncToThing() {
        // Get the blobs that the store knows about
		$names = $this->blobs;
        
        $blobPayload = $this->thing->getBlobPayload();
        
        $processed = array();
        
        // Get the blobs that the thing knows about
        $blobData = $blobPayload->getBlob();
        
        foreach ($blobData as $index => $thisBlob) {
            $blobInfo = $thisBlob->getBlobInfo();
            
            $thisBlobName = $blobInfo->getName()->getValue();
            
            if ( isset($names[$thisBlobName]) ) {
                // Both parts know the name: Process this entry
                
                if ($this->blobs[$thisBlobName]->isDeleted()) {
                    // The store thinks this is deleted
                    $thisBlob->setContentLength(0);
                    $thisBlob->setBase64data(FALSE);
                    $thisBlob->setBlobRefUrl(NULL);
                } else if ($this->blobs[$thisBlobName]->isModified()) {
                    // The store thinks this is modified
                    $this->updateThingBlob($thisBlob, $thisBlobName);
                } else {
                    // Remove unchanged items -- they shouldn't be sent back to HEalthVault
                    unset ($blobData[$index]);
                }
                
                $processed[$thisBlobName] = TRUE;
            }
        }
        
        /*
         * The generated code insists that there alway be an entry in the blobs. 
         * If our processing results in an empty array then it would cause an error. 
         * Rather than using the normal add/remove logic we do the processing ourselves
         * and look at the result to determine what to do.
         */
        
        // Go through all the blobs that the store knows about
        foreach (array_keys($names) as $thisBlobName) {
            $thisBlobData = $this->blobs[$thisBlobName];
            
            if ( ! isset($processed[$thisBlobName]) && $thisBlobData->isModified() ) {
                // This blob has changed and wasn't in the blobs that the thing knows about
                $thisBlob = new BlobPayloadItem();
                
                if ( ! $thisBlobData->isDeleted() ) {
                    // It wasn't deleted though
                    $this->updateThingBlob($thisBlob, $thisBlobName);
                } else {
                    // This was deleted
                    $thisBlobInfo = $thisBlob->getBlobInfo();
                    $thisBlobInfo->setName($thisBlobName);
                    $thisBlobInfo->getContentType($thisBlobData->getContentType());
                    $thisBlob->setContentLength(0);
                }
                                    
                $blobData[] = $thisBlob;
            }
        }
        
        /*
         * Now we can sort out what to do.
         * 
         * It's easy enough -- just prevent the wrapper from existing if there are
         * no entries!
         */
        if ( ! empty($blobData) ) {
            // Write the changes back into the payload;
            $blobPayload->setBlob($blobData);
        } else {
            $this->thing->setBlobPayload(FALSE);
        }
    }
    
    /**
     * Updates the parts of the thing that relate to this blob
     * 
     * @param BlobPayloadItem $thisBlob
     * @param string $thisBlobName
     */
    protected function updateThingBlob(BlobPayloadItem $thisBlob, $thisBlobName) {
        $storedBlob = $this->blobs[$thisBlobName];
        $thisBlobInfo = $thisBlob->getBlobInfo();
        $thisBlobHashInfo = $thisBlobInfo->getHashInfo();
        
        if ($storedBlob->isUploaded()) {
            // Uploaded blobs need to reference the upload URL
            $thisBlob->setContentLength($storedBlob->getSize());
            $thisBlob->setBlobRefUrl($storedBlob->getReference());
            $thisBlob->setBase64data(FALSE);
        } else {
            // Non-Uploaded blobs need to be included in the thing
            $thisBlob->setContentLength($storedBlob->getSize());
            $thisBlob->setBase64data(base64_encode($storedBlob->getData()));
            $thisBlob->setBlobRefUrl(NULL);
        }
        
        $thisBlobInfo->setName($storedBlob->getName());
        $thisBlobInfo->setContentType($storedBlob->getContentType());
        
        $thisBlobHashInfo->setAlgorithm($storedBlob->getHashAlgorithm());
        $hashParams = $storedBlob->getHashParams();
        if (is_object($hashParams)) {
            $thisBlobHashInfo->getParams()->setBlockSize($hashParams->getBlockSize());
        }
        $thisBlobHashInfo->setHash($storedBlob->getHash());
    }
    
    /**
     * Convert the thing datastructures into the internal ones for the store
     * 
     * @param boolean $removeNewItems - should locally added new items be removed from the store
     */
    protected function syncFromThing($removeNewItems = FALSE) {
        $blobPayload = $this->thing->getBlobPayload();

        $processed = array();
        
        foreach ($blobPayload->getBlob() as $thisBlob) {
            $blobInfo = $thisBlob->getBlobInfo();
        
            $thisBlobName = $blobInfo->getName()->getValue();
        
            if (isset($this->blobs[$thisBlobName])) {
                // Resync our existing data
                
                $blob = $this->blobs[$thisBlobName];
                
                // If the idea of size doesn't match, or we don't actually have the contemt and it is included inline then get the content
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
                // The blob store doesn't know about this blob -- yet!
                $blob = new Blob($thisBlobName, $thisBlob->getContentLength(), $blobInfo->getContentType()->getValue());
                $this->blobs[$thisBlobName] = $blob;
                
                // Get the inline data if it is provided
                $data = $thisBlob->getBase64data(FALSE);
                if ( is_object($data) ) {
                    $data = $data->getValue();
                    
                    if ( ! empty($data) ) {
                        $data = base64_decode($data);
                    }
                }
                $blob->setData($data);
            }
            
            // Then update the hash data in th blob store copy
            $hashInfo = $blobInfo->getHashInfo();
            
            $blob
                ->setHashAlgorithm($hashInfo->getAlgorithm()->getValue())
                ->setHashParams($hashInfo->getParams()->getBlockSize())
                ->setHash($hashInfo->getHash()->getValue())
                ->setReference($thisBlob->getBlobRefUrl(FALSE))
                ->setClean(TRUE)
            ;
            
            // Remember we have seen this one
            $processed[$thisBlobName] = TRUE;
        }
        
        if ($removeNewItems) {
            foreach (array_keys($this->blobs) as $thisItem) {
                if ( ! isset($processed[$thisItem]) ) {
                    unset($this->blobs[$thisItem]);
                }
            }
        }
    }
    
    /**
     * Sets up the correct information for the verification hashes
     * 
     * @param Blob $blob
     * 
     * @return \DLS\Healthvault\Blob\BlobStore
     */
    protected function updateBlobHashData(Blob $blob) {
        /*
        $blob
        ->setHashAlgorithm($hashInfo->getAlgorithm()->getValue())
        ->setHashParams($hashInfo->getParams()->getBlockSize())
        ->setHash($hashInfo->getHash()->getValue())
        */
        
        $hashAlgorithm = $blob->getHashAlgorithm();
        if ( empty($hashAlgorithm) ) {
            // Use the default algorithm
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
        
        /* 
         * Convert from BITS to BYTES
         * 
         * Yes, the data size comes back in bits but we are expected to work in bytes on the upload
         */
        $chunkSize = $chunkSize >> 3;
        
        $data = $blob->getData();
        $blobLength = Blob::safeStrlen($data);
        
        // The algorithm name can end in "Block"
        if (substr($hashAlgorithm, -5) == 'Block') {
            /*
             * The procedure appears to be:
             * - Chunk the data into blocks of maximum length "block size"
             * - Foreach chunk, hash the data with the hashing algorithm.
             * - Concatenate all the hashes and then hash this with the hashing algorithm.
             * - return this final hash
             */
        
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
    
    /* Function as an iterable */
    
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

    /* end of iterator */
    
    /* countable */
    
    public function count() {
        return count($this->blobs);
    }
    
    /* end of countable */
    
    /* array access */
    
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
    
    /* end of array access */
}
