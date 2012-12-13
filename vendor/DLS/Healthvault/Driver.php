<?php
namespace DLS\Healthvault;

use DLS\Healthvault\Shell\ShellMethodFactory;

class Driver {
    
    /**
     * Configuration information required for the connection
     * 
     * @var HealthvaultConfiguration
     */
    private $configuration;
    
    private $shellMethodFactory;
    
    public function __construct(HealthvaultConfigurationInterface $configuration)
    {
        $this->configuration = $configuration;
    }
    
    public function getShellMethod($methodName)
    {
        $shellMethodFactory = $this->getShellMethodFactory();
        
        return $shellMethodFactory->getShellMethod($methodName);
    }
    
    public function getShellMethodFactory()
    {
        if ( ! isset($this->shellMethodFactory) )
        {
            $this->shellMethodFactory = new ShellMethodFactory($configuration);
        }
        
        return $this->shellMethodFactory;
    }
}