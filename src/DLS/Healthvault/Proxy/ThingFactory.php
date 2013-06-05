<?php
namespace DLS\Healthvault\Proxy;

use DLS\Healthvault\Driver;

class ThingFactory {
    /**
     * @var \DLS\Healthvault\Driver
     */
    protected $driver;
    
    protected $things = array();
    
    protected static $factory;
    
    public function __construct(Driver $driver, $replaceFactory = FALSE)
    {
        $this->driver = $driver;
        
        if ( empty(self::$factory) || $replaceFactory) {
            self::$factory = $this;
        }
    }
    
    public function setDriver(Driver $driver)
    {
        $this->driver = $driver;
    }
    
    public function get($ids)
    {
        $single = ! is_array($ids);
        
        if ( $single )
        {
            $ids = array($ids);
        }
        
        $things = array();
        $toFetch = array();
        
        foreach ($ids as $thisId) {
            $thisId = strtolower($thisId);
            
            if ( ! empty($this->things[$thisId]) )
            {
                $theThing = $this->things[$thisId];
                
                $thingType = $theThing->getThingType();
                
                if ($thingType == NULL) {
                    $thingType = 'Undefined';
                }
                
                $things[$thingType][$thisId] = $theThing;
            } else {
                $toFetch[] = $thisId;
            }
        }
        
        if ( ! empty($toFetch) )
        {
            if (empty($this->driver)) {
                return FALSE;
            }
            
            $method = $this->driver->getPlatformMethod('GetThings');
            
            foreach ($toFetch as $thisId) 
            {
                $method->addBasicIdFilter($thisId);
            }
            
            $method->includeStreamedBlobs();
            
            $response = $method->execute();
            
            if ( empty($response) ) {
                return FALSE;
            }
            
            $proxyFactory = $this->driver->getProxyFactory();
            
            foreach ($response->getGroup() as $responseGroup) {
                foreach ($responseGroup->getThing() as $thisThing) {
                    $proxy = $proxyFactory->get($thisThing);
                    
                    $thingType = $proxy->getThingType();
                
                    if ($thingType == NULL) {
                        $thingType = 'Undefined';
                    }
                    
                    $id = strtolower($proxy->getId());
                    
                    $things[$thingType][$id] = $proxy;
                    
                    $this->things[$id] = $proxy;
                }
            }
        }
        
        return $things;
    }
    
    public static function getFactory()
    {
        if ( ! empty (self::$factory) ) {
            return self::$factory;
        }
        // else
        return NULL;
    }
}