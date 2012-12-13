<?php
namespace DLS\Healthvault\Shell;

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
}
