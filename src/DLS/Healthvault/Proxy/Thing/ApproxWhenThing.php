<?php
namespace DLS\Healthvault\Proxy\Thing;

use com\microsoft\wc\thing\Thing2;

use DLS\Healthvault\Utilities\VocabularyInterface;

use DLS\Healthvault\Proxy\Thing\BaseThing;

use Symfony\Component\Validator\Constraints as Assert;

abstract class ApproxWhenThing extends WhenThing
{
    protected function setThingWhen($when)
    {
        $payload = $this->getThingPayload();
        $this->setThingApproxDateTime($payload->getWhen(), $when);
    
        return $this;
    }
    
    protected function getThingWhen()
    {
        $payload = $this->getThingPayload();
        $when = $this->getThingApproxDateTime($payload->getWhen());
    
        return $when;
    }
}
