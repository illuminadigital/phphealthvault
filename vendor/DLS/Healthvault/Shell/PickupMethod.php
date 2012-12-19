<?php
namespace DLS\Healthvault\Shell;

use DLS\Healthvault\Shell\Exceptions\MissingParameterException;

class PickupMethod extends ShellMethod
{
    protected $packageId;
    
    protected $methodName = 'Pickup';
    
    public function getTargetqsParameter()
    {
        parent::getTargetqsParameter();
        
        $this->addParameter('packageid', $this->packageId);
        
        return $this->targetqsParameter;
    }
    
    public function setPackageId($packageId)
    {
        $this->packageId = $packageId;
    }
    
    public function validateParameters($throwException = TRUE)
    {
    	if (empty($this->packageId))
    	{
    		if ($throwException) {
    			throw new MissingParameterException('The PackageId parameter is missing');
    		}
    		else
    		{
    			return array('packageId');
    		}
    	}
    	
    	return TRUE;
    }
}
