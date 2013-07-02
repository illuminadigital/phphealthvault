<?php
namespace DLS\Healthvault\Shell;

use DLS\Healthvault\HealthvaultConfigurationInterface;

/**
 * Provides for basic shell methods
 * 
 * @author Alistair MacDonald <alistair.macdonald@digitallifesciences.co.uk>
 *
 */
class ShellMethod
{
    /**
     * The configuration data
     * 
     * @var HealthvaultConfigurationInterface
     */
    protected $configuration = NULL;
    
    /**
     * The generated parameters for the method
     * 
     * @var string
     */
    protected $targetqsParameter = NULL;
    
    /**
     * The name of the method
     * 
     * @var string
     */
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
    
    /**
     * Returns the URL for the shell method, using the parameters previously
     * set
     * 
     * @return string
     */
    public function getMethodUrl()
    {
        return sprintf('%s/redirect.aspx?target=%s&targetqs=%s', 
                $this->configuration->getBaseShellUrl(),
                $this->getMethodName(),
                urlencode($this->getTargetqsParameter()) // encode again
        );
    }
    
    /**
     * Build the parameter string for the method
     * 
     * @return string
     */
    public function getTargetqsParameter()
    {
        $this->targetqsParameter = '';
        
        $this->validateParameters();

        /*
         * Check to see if there an override to the return location.
         * These only work on DEV
         */ 
        $returnUrl = $this->configuration->getReturnUrl($this->methodName);

        if ( ! empty($returnUrl) )
        {
            $this->addParameter('redirect', $returnUrl);
        }
        
        return $this->targetqsParameter;
    }
    
    /**
     * Adds boolean parameters, if a value has been set.
     * 
     * The keys provide the name in the URL, the values the name in this object
     * 
     * @param array $parameterData
     */
    protected function addOptionalBooleanParameters(array $parameterData)
    {
        foreach ($parameterData as $name => $propertyName)
        {
            if (isset($this->$propertyName)) {
                $this->addBooleanParameter($name, $this->$propertyName);
            }
        }
    }
    
    /**
     * Adds array style parameters, if a value has been set
     * 
     * The keys provide the name in the URL, the values the name in this object.
     * 
     * The value index is appended to the key
     * 
     * @param array $parameterData
     */
    protected function addOptionalCountedParameters(array $parameterData)
    {
        foreach ($parameterData as $name => $propertyName)
        {
            if (isset($this->$propertyName) && is_array($this->$propertyName)) {
                $count = 1;
                foreach ($this->$propertyName as $value)
                {
                    $this->addParameter(sprintf($name, $count++), (string) $value);
                }
            }
        }
    }
     
    /**
     * Adds parameters, if a value has been set
     * 
     * The keys provide the name in the URL, the values the name in this object.
     * 
     * @param array $parameterData
     */
    protected function addOptionalParameters(array $parameterData)
    {
        foreach ($parameterData as $name => $propertyName)
        {
            if (isset($this->$propertyName)) {
                $this->addParameter($name, (string) $this->$propertyName);
            }
        }
    }
    
    /**
     * Add the name/value to the parameter string
     * 
     * @param string $name
     * @param string $value
     */
    protected function addParameter($name, $value)
    {
        $prefix =  ( ! empty($this->targetqsParameter) ? '&' : '' );
        
        // All values need to be urlencoded
        $this->targetqsParameter .= sprintf('%s%s=%s', $prefix, $name, urlencode($value));
    }

    /**
     * Convenience method for adding boolean values to the parameter string
     * 
     * @param string $name
     * @param string $value
     */
    protected function addBooleanParameter($name, $value)
    {
        $this->addParameter($name, ($value ? 'True' : 'False'));
    }

    /**
     * Convenience method for adding comma-separated entries from an array to the parameter string
     * 
     * @param string $name
     * @param mixed $value
     */
    protected function addListParameter($name, $value)
    {
        $this->addParameter($name, is_array($value) ? implode(',', $value) : $value);
    }
    
    /**
     * Entry point to allow the provided parameters to be validated at the point of URL building
     *  
     * @param string $throwException - should an exception be thrown on errors?
     * 
     * @return boolean
     */
    public function validateParameters($throwException = TRUE)
    {
    	return TRUE;
    }
}
