<?php
namespace DLS\Healthvault\Platform;

use DLS\Healthvault\HealthvaultConfigurationInterface;

use com\microsoft\wc\types\Guid;

class QueryPermissionsMethod extends PlatformMethod
{
    protected $permissionRecord = null;
    protected $mustIncludeRecord = TRUE;
    protected $methodName = 'QueryPermissions';
    protected $methodVersion = 1;

    public function __construct(HealthvaultConfigurationInterface $configuration)
    {
        $this->mustIncludeRecord = TRUE;
        parent::__construct($configuration);
    }

    public function addThingTypeId($thingId){

        $thingGuid = new Guid($thingId);

        $queryInfo = $this->requestData->getInfo()->addThingTypeId($thingGuid);

    }

    public function setRecord($recordId){

        $this->permissionRecord = $recordId;

    }

    public function getRecord(){

        if($this->permissionRecord){

            return $this->permissionRecord;

        }else{

            return parent::getRecord();

        }

    }
}
