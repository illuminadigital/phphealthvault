<?php
namespace DLS\Healthvault\Proxy;

use DLS\Healthvault\Utilities\VocabularyInterface;
use DLS\Healthvault\Blob\BlobStoreFactory;

use com\microsoft\wc\thing\Thing2;

use DLS\Healthvault\Proxy\Thing\BaseThing;

class ProxyFactory {
    static $proxies = array();
    
    /**
     * @var \DLS\Healthvault\Utilities\VocabularyInterface
     */
    static $vocabularyInterface;
    
    /**
     * @var \DLS\Healthvault\Blob\BlobStoreFactory
     */
    static $blobStoreFactory;
    
    public function __construct(VocabularyInterface $vocabularyInterface, BlobStoreFactory $blobStoreFactory)
    {
        self::$vocabularyInterface = $vocabularyInterface;
        self::$blobStoreFactory = $blobStoreFactory;
    }
    
    public function setVocabularyInterface(VocabularyInterface $vocabularyInterface)
    {
        self::$vocabularyInterface = $vocabularyInterface;
    }

    public function setBlobStoreFactory(BlobStoreFactory $blobStoreFactory)
    {
        self::$blobStoreFactory = $blobStoreFactory;
    }
    
    public function registerProxy($id, $proxyClass)
    {
        if ( ! is_string($id) ) {
            try {
                $id = (string) $id;
            } catch (Exception $e) {
                return FALSE;
            }
        }
        
        if ( ! is_object($proxyClass) || ! $proxyClass instanceof BaseThing) {
            try {
                $proxyClassName = (string) $proxyClass;

                $proxyClass = new $proxyClassName();
            } catch (Exception $e) {
                // Don't add
                return FALSE;
            }
        }
        
        if (is_object($proxyClass) && $proxyClass instanceof BaseThing) {
            self::$proxies[$id] = get_class($proxyClass);
            
            return TRUE;
        }
        
        return FALSE;
    }
    
    public function get(Thing2 $thing)
    {
        if (empty($thing)) {
            return NULL;
        }
        
        $thingTypeId = $thing->getTypeId(); 
        if (empty($thingTypeId)) {
            return NULL;
        }
        
        $thingTypeId = $thing->getTypeId()->getValue();
        
        if ( ! empty(self::$proxies[$thingTypeId])) {
            $proxyClass = self::$proxies[$thingTypeId];
            
            return new $proxyClass($thing, self::$vocabularyInterface, self::$blobStoreFactory);
        }
        
        return NULL;
    }
}