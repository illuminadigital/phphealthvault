<?php
namespace DLS\Healthvault\Shell;
use DLS\Healthvault\Shell\Exceptions\MissingParameterException;

use DLS\Healthvault\HealthvaultConfigurationInterface;

use DLS\Healthvault\Shell\ShellMethodWithRecordId;

class ViewItemsMethod extends ShellMethodWithRecordId
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
        
        return $this->targetqsParameter;
    }
   
    public function setTypeIds(array $typeIds)
    {
        $this->typeIds = array_unique($typeIds);
        
        return $this;
    }
    
    public function addTypeId($typeId)
    {
    	if ( ! is_array($this->typeIds) || ! in_array($typeId, $this->typeIds) )
    	{
        	$this->typeIds[] = $typeId;
    	}
        
        return $this;
    }
    
    public function addTypeIds(array $typeIds)
    {
        $this->typeIds = array_unique(is_array($this->typeIds) ? array_merge($this->typeIds, $typeIds) : $typeIds);
        
        return $this;
    }
    
    public function setAllowAddItem($state)
    {
        $this->allowAddItem = $state;
        
        return $this;
    }
    
	public function validateParameters($throwException = TRUE) {
		$missing = array();
		
		if (empty($this->typeIds) || ! is_array($this->typeIds))
		{
			$missing[] = 'typeIds';
		}
		
		if (empty($this->externalRecordId))
		{
			$missing[] = 'externalRecordId';
		}
		
		if ( ! isset($this->allowAddItem) )
		{
			$missing[] = 'allowAddItem';
		}
		
		if (empty($missing))
		{
			return TRUE;
		}
		else if ($throwException)
		{
			throw new MissingParameterException('The following parameter(s) are missing: ' . implode(', ', $missing));
		}
		else
		{
			return $missing;
		}
	}

}
