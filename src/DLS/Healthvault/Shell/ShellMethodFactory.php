<?php
namespace DLS\Healthvault\Shell;

use DLS\Healthvault\HealthvaultConfigurationInterface;

use DLS\Healthvault\Shell\Exceptions\UnsupportedShellMethodException;
use DLS\Healthvault\Exceptions\InvalidConfigurationException;

class ShellMethodFactory {
    /**
     * @var HealthvaultConfigurationInterface
     */
    protected $configuration;

    public function __construct(HealthvaultConfigurationInterface $configuration)
    {
        $this->configuration = $configuration;
    }

    
    /**
     * Return an object implementing the given method
     * 
     * Raise an exception if the method can't be set up
     * 
     * @param string $name
     * 
     * @throws InvalidConfigurationException
     * @throws UnsupportedShellMethodException
     * 
     * @return ShellMethod
     */
    public function getShellMethod($name)
    {
        if ( ! isset($this->configuration) )
        {
            throw new InvalidConfigurationException();
        }
        
        $methodClass = sprintf('%s\\%sMethod', __NAMESPACE__, $name);
        
        if (class_exists($methodClass))
        {
            return new $methodClass($this->configuration);
        }
        else
        {
            throw new UnsupportedShellMethodException();
        }
    }
}