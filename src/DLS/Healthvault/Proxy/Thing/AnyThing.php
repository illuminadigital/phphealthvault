<?php
namespace DLS\Healthvault\Proxy\Thing;

use com\microsoft\wc\thing\Thing2;

class AnyThing extends BaseThing
{
    public static function reallySupports(Thing2 $thing)
    {
        return TRUE;
    }
    
    protected function getNewDataXmlContent() {
        return NULL;
    }
    
    public static function getProxy($thingId, $version = NULL) {
        $thing = new Thing2();
        
        $thingKey = $thing->getThingId();
        $thingKey->setValue($thingId);
        
        if ( ! empty($version) )
        {
            $thingKey->setVersionStamp($version);
        }
        
        $thing->setThingId($thingKey);
         
        return new AnyThing($thing);
    }
    
    public function setId($id) {
        $this->id = $id;
        
        if ( $this->thing )
        {
            $this->setThingId($id);
        }
    
        return $this;
    }
}
