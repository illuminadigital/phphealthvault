<?php
namespace DLS\Healthvault\Platform;

use DLS\Healthvault\HealthvaultConfigurationInterface;
use DLS\Healthvault\Entity\Request\GetPersonInfoRequest;

class GetPersonInfoMethod extends PlatformMethod
{
    protected $methodName = 'GetPersonInfo';
    
    public function __construct(HealthvaultConfigurationInterface $configuration)
    {
        parent::__construct($configuration);
        
        $this->requestData->setInfo(new GetPersonInfoRequest());
    }
    
    public function setFetchGroups($state = TRUE)
    {
        $this->requestData->getInfo()->setGroupMembership( (bool)$state );
    }
}
