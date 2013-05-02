<?php
namespace DLS\Healthvault\Shell;


use DLS\Healthvault\HealthvaultConfigurationInterface;
use DLS\Healthvault\Shell\AppRedirectMethod;


class ShareRecordMethod extends ShellMethodWithRecordId
{
    protected $destinationApplicationId = NULL;
    protected $methodName = 'SHARERECORD';

    public function __construct(HealthvaultConfigurationInterface $configuration)
    {
        parent::__construct($configuration);

        $this->destinationApplicationId = $this->configuration->getApplicationId();
    }

    public function getTargetqsParameter()
    {
        parent::getTargetqsParameter();

        $this->addParameter('appid', $this->destinationApplicationId);

        return $this->targetqsParameter;
    }

    public function setDestinationApplicationId($applicationId)
    {
        $this->destinationApplicationId = $applicationId;
    }

    public function setDestinationTarget($target)
    {
        $this->destinationTarget = $target;
    }

    public function validateParameters($throwException = TRUE)
    {
        $missing = array();

        if (!empty($this->destinationApplicationId))
        {
            return TRUE;
        }

        if ($throwException)
        {
            throw new MissingParameterException('Required parameter(s) are missing: ' . implode(', ', $missing));
        }
        else
        {
            return $missing;
        }
    }

}