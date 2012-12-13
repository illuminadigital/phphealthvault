<?php
namespace DLS\Healthvault\Shell;

use DLS\Healthvault\HealthvaultConfigurationInterface;

class ShellMethod
{
    protected $configuration = NULL;
    protected $targetqsParameter = NULL;
    protected $methodName = NULL;
    
    public function __construct(HealthvaultConfigurationInterface $configuration)
    {
        $this->configuration = $configuration;
    }
    
    public function __toString()
    {
        return $this->getMethodUrl();
    }
    
    public function getMethodName()
    {
        return $this->methodName;
    }
    
    public function getMethodUrl()
    {
        return sprintf('%s/redirect.aspx?target=%s&targetqs=%s', 
                $this->configuration->getBaseShellUrl(),
                $this->getMethodName(),
                $this->getTargetqsParameter()
        );
    }
    
    public function getTargetqsParameter()
    {
        $this->targetqsParameter = '';
        
        $returnUrl = $this->configuration->getReturnUrl($this->methodName);
        if ( ! empty($returnUrl) )
        {
            $this->addParameter('redirect', $returnUrl);
        }
        
        return $this->targetqsParameter();
    }
    
    protected function addOptionalBooleanParameters(array $parameterData)
    {
        foreach ($parameterData as $name => $propertyName)
        {
            if (isset($this->$propertyName)) {
                $this->addBooleanParameter($name, $this->$propertyName);
            }
        }
    }
    
    protected function addOptionalCountedParameters(array $parameterData)
    {
        foreach ($parameterData as $name => $propertyName)
        {
            if (isset($this->$propertyName) && is_array($this->$propertyName)) {
                $count = 1;
                foreach ($this->$propertyName as $value)
                {
                    $this->addParameter(sprintf($name, $count), (string) $value); 
                }
            }
        }
    }
     
    protected function addOptionalParameters(array $parameterData)
    {
        foreach ($parameterData as $name => $propertyName)
        {
            if (isset($this->$propertyName)) {
                $this->addParameter($name, (string) $this->$propertyName);
            }
        }
    }
    
    protected function addParameter($name, $value)
    {
        $prefix =  ( ! empty($this->targetqsParameter) ? '&' : '' );
        $this->targetqsParameter .= sprintf('%s%s=%s', $prefix, $name, urlencode($value));
    }
    
    protected function addBooleanParameter($name, $value)
    {
        $this->addParameter($name, ($value ? 'True' : 'False'));
    }

    protected function addListParameter($name, $value)
    {
        $this->addParameter($name, is_array($value) ? implode(',', $value) : $value);
    }
}
