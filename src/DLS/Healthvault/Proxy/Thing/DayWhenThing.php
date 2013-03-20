<?php
namespace DLS\Healthvault\Proxy\Thing;

abstract class DayWhenThing extends WhenThing
{

    protected function setThingWhen($when)
    {
        $payload = $this->getThingPayload();
        $this->setThingDate($payload->getWhen(), $when);
        
        return $this;
    }
    
    protected function getThingWhen()
    {
        $payload = $this->getThingPayload();
        $when = $this->getThingDate($payload->getWhen());
        
        return $when;
    }
}
