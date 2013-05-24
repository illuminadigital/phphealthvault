<?php
namespace DLS\Healthvault\Platform;

use DLS\Healthvault\HealthvaultConfigurationInterface;

use com\microsoft\wc\types\Guid;

class GetPeopleForRecordMethod extends PlatformMethod
{

    protected $mustIncludeRecord = TRUE;
    protected $methodName = 'GetPeopleForRecord';
    protected $methodVersion = 1;

    public function __construct(HealthvaultConfigurationInterface $configuration)
    {
        $this->mustIncludeRecord = TRUE;
        parent::__construct($configuration);
    }

    protected function getInfoClassName()
    {
        return '\com\microsoft\wc\methods\response\GetPeopleForRecord\Info';
    }

}
