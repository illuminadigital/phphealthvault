<?php
namespace DLS\Healthvault\Platform;

use DLS\Healthvault\HealthvaultConfigurationInterface;

use com\microsoft\wc\thing\Thing;
use com\microsoft\wc\thing\Thing2;

use DLS\Healthvault\Utilities\ThingConverter;

class PutThingsMethod extends PlatformMethod
{
    protected $methodName = 'PutThings';
    protected $methodVersion = 2;
    protected $mustIncludeRecord = TRUE;

    public function addThing($thing)
    {
        if ($thing instanceof Thing) {
            $thing = ThingConverter::toThing2($thing);
        } elseif ( ! $thing instanceof Thing2) {
            throw new \Exception('Unsupported thing type');
        }
        
        $this->requestData->getInfo()->addThing($thing);
    }
}
