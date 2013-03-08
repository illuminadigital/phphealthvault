<?php
namespace DLS\Healthvault\Blob;

use DLS\Healthvault\Platform\PlatformMethodFactory;
use com\microsoft\wc\thing\Thing2;

class BlobStoreFactory
{
    /**
     * @var PlatformMethodFactory
     */
    protected $platformMethodFactory;
    
    /**
     * Array of blob stores for things
     * 
     * @var array
     */
    protected $blobStores = array();
    
    public function __construct(PlatformMethodFactory $factory)
    {
        $this->platformMethodFactory = $factory;
    }
    
    public function getBlobStore(Thing2 $thing) 
    {
        $key = spl_object_hash($thing);
       
        if ( ! isset($this->blobStores[$key]) )
        {
            $this->blobStores[$key] = new BlobStore($this->platformMethodFactory, $thing);
        } 
        
        return $this->blobStores[$key];
    }
}
