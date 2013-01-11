<?php
namespace DLS\Healthvault\Shell;

use DLS\Healthvault\Shell\Exceptions\MissingParameterException;

class AppRedirectMethod extends ShellMethod
{
    protected $destinationApplicationId = NULL;
    protected $destinationTarget = NULL;
    protected $destinationTargetqs = NULL;
    
    protected $methodName = 'AppRedirect';

    public function getTargetqsParameter()
    {
        parent::getTargetqsParameter();
        
        // Our AppId parameter is that of the destination.
        $this->addParameter('appid', $this->destinationApplicationId);
        $this->addParameter('refappid', $this->configuration->getApplicationId());
        $this->addParameter('target', $this->destinationTarget);
        $this->addParameter('targetqs', $this->destinationTargetqs);
        
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
    
    public function setDestinationTargetqs($targetqs)
    {
        $this->destinationTargetqs = $targetqs;
    }
    
    public function validateParameters($throwException = TRUE)
    {
    	$missing = array();
    	
    	foreach (array('destinationApplicationId', 'destinationTarget', 'destinationTargetqs') as $property) {
	    	if (empty($this->$property))
	    	{
	    		$missing[] = $property;
	    	}
    	}
    	
    	if (empty($missing))
    	{
    		return TRUE;
    	}
    	// else
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
