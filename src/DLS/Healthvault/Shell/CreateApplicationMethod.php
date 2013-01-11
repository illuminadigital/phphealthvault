<?php
namespace DLS\Healthvault\Shell;

use DLS\Healthvault\Shell\Exceptions\MissingParameterException;

class CreateApplicationMethod extends ShellMethodWithAppId
{
    protected $applicationCreationToken;
    protected $instanceName;
    
    protected $methodName = 'CreateApplication';
    
    public function getTargetqsParameter()
    {
        parent::getTargetqsParameter();
        
        $this->addParameter('appCreationToken', $this->applicationCreationToken);
        $this->addParameter('instancename', $this->instanceName);
        
        return $this->targetqsParameter;
    }
    
    public function setApplicationCreationToken($token)
    {
        $this->applicationCreationToken = $token;
        
        return $this;
    }
    
    public function setInstanceName($name)
    {
        $this->instanceName = $name;
        
        return $this;
    }
    
    public function validateParameters($throwException = TRUE)
    {
    	$missing = array();
    	
    	foreach (array('applicationCreationToken', 'instanceName') as $property)
    	{
    		if (empty($this->$property)) {
    			$missing[] = $property;
    		}
    	}
    	
    	if ( empty($missing) )
    	{
    		return TRUE;
    	}
    	else if ($throwException) 
    	{
    		throw new MissingParameterException('Required parameter(s) are missing: ' . implode(', ', $missing));
    	}
    	else
    	{
    		return $missing;
    	}
    }
}
