<?php
namespace DLS\Healthvault\Platform;

use DLS\Healthvault\HealthvaultConfigurationInterface;

class GetPersonInfoMethod extends PlatformMethod
{
    protected $methodName = 'GetPersonInfo';
    
    public function __construct(HealthvaultConfigurationInterface $configuration)
    {
        parent::__construct($configuration);
        
        $this->requestData = new GetPersonInfoRequest();
    }
    
    public function setFetchGroups($state = TRUE)
    {
        $this->requestData->info->setGroupMembership((bool)$state);
    }
}
