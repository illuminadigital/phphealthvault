<?php
namespace DLS\Healthvault;

use DLS\Healthvault\Shell\ShellMethodFactory;
use DLS\Healthvault\Platform\PlatformMethodFactory;
use DLS\Healthvault\Blob\BlobStoreFactory;

use com\microsoft\wc\thing\Thing2;

use Doctrine\OXM\Types\Type;

class Driver {
    
    /**
     * Configuration information required for the connection
     * 
     * @var HealthvaultConfiguration
     */
    private $configuration;
    
    private $shellMethodFactory;
    private $platformMethodFactory;
    private $blobStore;
    
    public function __construct(HealthvaultConfigurationInterface $configuration)
    {
        $this->configuration = $configuration;
        
        // We need to change the default "DateTime" handler for OXM to be an ISO-8601 compliant one
        Type::overrideType(Type::DATETIME, '\DLS\Types\XMLSchemaDateTimeType');
    }
    
    public function getShellMethod($methodName)
    {
        $shellMethodFactory = $this->getShellMethodFactory();
        
        return $shellMethodFactory->getShellMethod($methodName);
    }
    
    protected function getShellMethodFactory()
    {
        if ( ! isset($this->shellMethodFactory) )
        {
            $this->shellMethodFactory = new ShellMethodFactory($this->configuration);
        }
        
        return $this->shellMethodFactory;
    }
    
    public function getPlatformMethod($methodName)
    {
        $platformMethodFactory = $this->getPlatformMethodFactory();
        
        return $platformMethodFactory->getPlatformMethod($methodName);
    }
    
    protected function getPlatformMethodFactory()
    {
        if ( ! isset($this->platformMethodFactory) )
        {
            $this->platformMethodFactory = new PlatformMethodFactory($this->configuration);
        }
        
        return $this->platformMethodFactory;
    }
    
    public function getConfiguration()
    {
    	return $this->configuration;
    }
    
    public function getBlobStore(Thing2 $thing)
    {
        $blobStoreFactory = $this->getBlobStoreFactory();
        
        return $blobStoreFactory->getBlobStore($thing);
    }
    
    protected function getBlobStoreFactory() 
    {
        if ( ! isset($this->blobStoreFactory) )
        {
            $this->blobStoreFactory = new BlobStoreFactory($this->getPlatformMethodFactory());
        }
        
        return $this->blobStoreFactory;
    }
    
}