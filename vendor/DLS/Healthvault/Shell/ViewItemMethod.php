<?php
namespace DLS\Healthvault\Shell;
use DLS\Healthvault\Shell\ShellMethodWithRecordId;

class ViewItemMethod extends ShellMethodWithRecordId
{
    protected $methodName = 'ViewItems';
    
    protected $typeIds;
    protected $allowAddItem = FALSE;
    
    public function __construct(HealthvaultConfigurationInterface $configuration)
    {
        parent::__construct($configuration);
        
        $this->typeIds = array();
    }
    
    public function getTargetqsParameter()
    {
        parent::getTargetqsParameter();
        
        $this->addListParameter('typeid', $this->typeIds);
        
        $this->addBooleanParameter('additem', $this->allowAddItem);
        
        $this->addParameter('extrecordid', $this->externalRecordId);
        
        return $this->targetqsParameter;
    }
   
    public function setTypeIds(array $typeIds)
    {
        $this->typeIds = $typeIds;
        
        return $this;
    }
    
    public function addTypeId($typeId)
    {
        $this->typeIds[] = $typeId;
        
        return $this;
    }
    
    public function addTypeIds(array $typeIds)
    {
        $this->typeIds = array_merge($this->typeIds, $typeIds);
        
        return $this;
    }
    
    public function setAllowAddItem($state)
    {
        $this->allowAddItem = $state;
        
        return $this;
    }
}
