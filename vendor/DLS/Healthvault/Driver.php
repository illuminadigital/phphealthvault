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
    
    public function __construct(HealthvaultConfiguration $configuration)
    {
        $this->configuration = $configuration;
    }
    
    public function getShellMethod($methodName)
    {
        return ShellMethodFactory::getShellMethod($methodName);
    }
}