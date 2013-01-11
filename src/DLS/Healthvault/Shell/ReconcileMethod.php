<?php
namespace DLS\Healthvault\Shell;

use DLS\Healthvault\Shell\Exceptions\MissingParameterException;

class ReconcileMethod extends ShellMethodWithRecordId
{
    protected $thingId;

    protected $methodName = 'Reconcile';
    
    public function getTargetqsParameter()
    {
        parent::getTargetqsParameter();
        
        $this->addParameter('thingid', $this->thingId);
        
        return $this->targetqsParameter;
    }
    
    public function setThingId($thingId)
    {
        $this->thingId = $thingId;
        
        return $this;
    }
    
    public function validateParameters($throwException = TRUE)
    {
    	if (empty($this->thingId))
    	{
    		if ($throwException) {
    			throw new MissingParameterException('The ThingId parameter is missing');
    		}
    		else
    		{
    			return array('thingId');
    		}
    	}
    	 
    	return TRUE;
    }
}
