<?php
namespace Illumina\AbpBundle\Entity;

use Illumina\PhphealthvaultBundle\Entity\BaseThing;

use com\microsoft\wc\thing\Thing;

class AnyThing extends BaseThing
{
    public static function reallySupports(Thing $thing)
    {
        return TRUE;
    }
    
    protected function getNewDataXmlContent() {
        return NULL;
    }
    
    public static function getProxy($thingId, $version = NULL) {
        $thing = new Thing();
        
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
