<?php
namespace DLS\Healthvault\Proxy\Type;

use com\microsoft\wc\thing\Extension as hvExtension;

class ExtensionFactory {
    static protected $factory;
    
    protected $extensions = array();
    
    public function getExtension($source, $hvExtension, $proxy = NULL)
    {
        if (array_key_exists($source, $this->extensions)) {
            $className = $this->extensions[$source];
        } else {
            $className = '\\DLS\\Healthvault\\Proxy\\Type\Extension';
        }
        
        return new $className($hvExtension, $source, $proxy);
    }
    
    public function addExtensionClass($source, $class)
    {
        $this->extensions[$source] = $class;
    }
    
    static function getExtensionFactory() {
        if ( ! isset(self::$factory) ) {
            self::$factory = new ExtensionFactory(); 
        }
        
        return self::$factory; 
    }
}