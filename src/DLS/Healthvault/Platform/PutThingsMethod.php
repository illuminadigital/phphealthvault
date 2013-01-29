<?php
namespace DLS\Healthvault\Platform;

use DLS\Healthvault\HealthvaultConfigurationInterface;

use com\microsoft\wc\thing\Thing2;

class PutThingsMethod extends PlatformMethod
{
    protected $methodName = 'PutThings';
    protected $methodVersion = 2;
    protected $mustIncludeRecord = TRUE;

    public function addThing(Thing2 $thing)
    {
        $this->requestData->getInfo()->addThing($thing);
    }
}
