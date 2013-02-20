<?php
namespace DLS\Healthvault\Platform;

class RemoveThingsMethod extends PlatformMethod
{
    protected $methodName = 'RemoveThings';
    
    // This reads better
    public function includeThing($thingId, $versionId) {
        $this->addThing($thingId, $versionId);
    }
    
    public function addThing($thingId, $versionId)
    {
        $thingKey = new ThingKey();
        $thingKey->setValue($thingId);
        $thingKey->setVersionStamp($versionId);
        
        $this->requestData->getInfo()->addThingId($thingKey);
    }
}
