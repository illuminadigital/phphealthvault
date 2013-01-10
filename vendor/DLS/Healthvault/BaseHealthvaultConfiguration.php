<?php
namespace DLS\Healthvault;

use DLS\Healthvault\Exceptions\InvalidConfigurationException;

use Doctrine\OXM\Marshaller\XmlMarshaller;
use Doctrine\OXM\Marshaller\Marshaller;

class BaseHealthvaultConfiguration implements HealthvaultConfigurationInterface
{
    protected $baseUrl;
    protected $applicationId;
    protected $privateKey;
    protected $marshallingService;
    protected $sharedSecret;
    protected $secretDigest;
    
    public function __construct($application, $privateKey = NULL, $baseUrl = NULL, $marshallingService = NULL)
    {
        if (is_array($application) || $application instanceof ArrayAccess) 
        {
            // Populate from the "array"
            $this->setFromArray($application);
        }
        else
        {
            $this->applicationId = $application;
        }
        
        if ( ! empty($privateKey) )
        {
            $this->privateKey = $privateKey;
        }
        
        if ( ! empty($baseUrl) )
        {
            $this->baseUrl = $baseUrl;
        }
        
        if ( ! empty($marshallingService) && ($marshallingService instanceof XMLMarshallingService || $marshallingService instanceof Marshaller))
        {
            $this->marshallingService = $marshallingService;
        } 
        else if (empty($this->marshallingService) )
        {
            // Set up the default marshalling
            $this->marshallingService = $this->getDefaultMarshallingService();
        }

        $this->sharedSecret = hash('SHA1', uniqid(rand(0,1), TRUE));
        $this->secretDigest = hash_hmac('SHA1', $this->sharedSecret, $this->sharedSecret);
        
        $this->checkConfiguration();
    }
    
    protected function setFromArray($data)
    {
        if (isset($data['applicationId']))
        {
            $this->applicationId = $data['applicationId'];
        }

        if (isset($data['privateKey']))
        {
            $this->privateKey = $data['privateKey'];
        }
        
        if (isset($data['baseUrl']))
        {
            $this->baseUrl = $data['baseUrl'];
        }
        
        if ( ! empty($data['marshallingService']) && ($data['marshallingService'] instanceof XMLMarshallingService || $data['marshallingService'] instanceof Marshaller))
        {
            $this->marshallingService = $data['marshallingService'];
        }
    }
    
    public function checkConfiguration()
    {
        if ( empty ($this->baseUrl) )
        {
            throw new InvalidConfigurationException('You must specify the base URL');
        }
        
        if ( empty ($this->applicationId) )
        {
            throw new InvalidConfigurationException('You must specify the application ID');
        }
        
        if ( empty ($this->privateKey) )
        {
            // Not used yet
            // throw new InvalidConfigurationException('You must specify the private key for the application');
        }
        
        if ( empty ($this->marshallingService) )
        {
            throw new InvalidConfigurationException('You must specify a marshalling service');
        }
        
        return TRUE;
    }
    
    /**
     * {@InheritDoc}
     */
    public function getBaseShellUrl()
    {
        return 'https://account.' . $this->baseUrl;
    }
    
    /**
     * {@InheritDoc}
     */
    public function getBasePlatformUrl()
    {
        return 'https://platform.' . $this->baseUrl;
    }
    
    /**
     * {@InheritDoc}
     */
    public function getReturnUrl($target)
    {
        return NULL;
    }
    
    /**
     * {@InheritDoc}
     */
    public function getApplicationId()
    {
        return $this->applicationId;
    }
    
    /**
     * @see \DLS\Healthvault\HealthvaultConfigurationInterface::getPrivateKey()
     */
    public function getPrivateKey()
    {
        return $this->privateKey;
    }
    
    public function getMarshallingService()
    {
        //return $this->marshallingService;
        return $this->getDefaultMarshallingService();
    }
    
    protected function getDefaultMarshallingService()
    {
    	$OXMConfiguration = new \Doctrine\OXM\Configuration();
    	
    	$paths = array(
    		__DIR__ . '/../../com',
    	);
    	
    	$annotationDriver = $OXMConfiguration->newDefaultAnnotationDriver($paths);
    	
    	// Register the classes
    	$callable = array(get_class($annotationDriver), 'registerAnnotationClasses');
    	if (is_callable($callable)) {
	    	call_user_func($callable);
    	}
    	
    	$OXMConfiguration->setMetadataDriverImpl($annotationDriver);

    	$OXMConfiguration->setMetadataCacheImpl(new \Doctrine\Common\Cache\ArrayCache);
    	
    	$metadataFactoryName = $OXMConfiguration->getClassMetadataFactoryName();
    	$metadataFactory = new $metadataFactoryName($OXMConfiguration);
    	
    	$marshaller = new XmlMarshaller($metadataFactory);
    	
    	return $marshaller;
    }
    
    public function getSharedSecret()
    {
    	return $this->sharedSecret;
    }
    
    public function getSecretDigest()
    {
    	return $this->secretDigest;
    }
    
    public function authenticate()
    {
    	
    }
}
