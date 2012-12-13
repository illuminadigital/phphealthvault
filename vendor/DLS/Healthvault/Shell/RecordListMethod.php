<?php
namespace DLS\Healthvault\Shell;
use DLS\Healthvault\HealthvaultConfigurationInterface;

use DLS\Healthvault\Shell\ShellMethod;

class RecordListMethod extends ShellMethod
{
    protected $methodName = 'RecordList';
    
    protected $includeApplicationId = TRUE;
    protected $applicationId;
    
    public function __construct(HealthvaultConfigurationInterface $configuration)
    {
        parent::__construct($configuration);
        
        $this->applicationId = $configuration->getApplicationId();
    }
    
    public function getTargetqsParameter() {
        parent::getTargetqsParameter();
        
        if ($this->includeApplicationId)
        {
            $this->addParameter('appid', $this->applicationId);
        }
        
        return $this->targetqsParameter;
    }
    
    public function setApplicationId($applicationId)
    {
        $this->applicationId = $applicationId;
    }
    
    public function setIncludeApplicationId($state)
    {
        $this->includeApplicationId = (bool) $state;
    }
}
