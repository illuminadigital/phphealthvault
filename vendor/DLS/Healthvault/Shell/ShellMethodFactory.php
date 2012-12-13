<?php
namespace DLS\Healthvault\Shell;

use DLS\Healthvault\Configuration;

use DLS\Healthvault\Shell\Exceptions\UnsupportedShellMethodException;

class ShellMethodFactory {
    /**
     * @var HealthvaultConfiguration 
     */
    protected $configuration;

    public function construct(HealthvaultConfiguration $configuration)
    {
        $this->configuration = $configuration;
    }

    public static function getShellMethod($name)
    {
        $methodClass = sprintf('%s\\%sMethod', __NAMESPACE__, $name);
        
        if (class_exists($methodClass))
        {
            return new $methodClass($configuration);
        }
        else
        {
            throw new UnsupportedShellMethodException();
        }
    }
}