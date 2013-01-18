<?php
namespace DLS\Healthvault\Platform;

use DLS\Healthvault\HealthvaultConfigurationInterface;

class GetThingsMethod extends PlatformMethod
{
    protected $methodName = 'GetThings';
    
    public function __construct(HealthvaultConfigurationInterface $configuration)
    {
        parent::__construct($configuration);
    }

    
    
}
