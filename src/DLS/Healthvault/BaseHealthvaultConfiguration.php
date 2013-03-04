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
    protected $token;
    protected $record;
    protected $thumbprint;
    protected $seed;
    protected $appAuthToken;
    
    public function __construct($application, $privateKey = NULL, $thumbprint = NULL, $baseUrl = NULL, $marshallingService = NULL, $seed = NULL, $appAuthtoken = NULL)
    {
        if (is_array($application) || $application instanceof ArrayAccess) 
        {
            // Populate from the "array"
            $this->setFromArray($application);
        }
        else
        {
            $this->applicationId = $application;
        
            if ( ! empty($privateKey) )
            {
                $this->setPrivateKey($privateKey); // Use the functionality this offers
            }
            
            if ( ! empty($thumbprint) )
            {
                $this->thumbprint = $thumbprint;
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
    
            if ( ! empty($seed) ) {
                $this->setSeed($seed);
            } else  {
                $this->getSeed(); // Sets a default seed if not set
            }
            
            if ( ! empty($appAuthtoken) ) {
                $this->appAuthToken = $appAuthtoken;
            }
        }
        
        $this->checkConfiguration();
    }
    
    protected function updateSecrets() {
        $this->sharedSecret = hash($this->getSharedSecretHash(), $this->seed);
        $this->secretDigest = hash_hmac($this->getSecretDigestHash(), $this->sharedSecret, $this->sharedSecret);
    }
    
    public function getSeed() {
        if ( empty ($this->seed) ) {
            $this->setSeed(uniqid(rand(0,1), TRUE)); 
        }
    	
        return $this->seed;
    }
    
    public function setSeed($seed) {
        $this->seed = $seed;
        
        $this->updateSecrets($seed);
        
        return $this;
    }
    
    protected function setFromArray($data)
    {
        if (isset($data['applicationId']))
        {
            $this->applicationId = $data['applicationId'];
        }

        if (isset($data['privateKey']))
        {
            $this->setPrivateKey($data['privateKey']); // Use the functionality
        }
        
        if (isset($data['thumbprint']))
        {
            $this->thumbprint = $data['thumbprint'];
        }
        
        if (isset($data['baseUrl']))
        {
            $this->baseUrl = $data['baseUrl'];
        }
        
        if ( ! empty($data['marshallingService']) && ($data['marshallingService'] instanceof XMLMarshallingService || $data['marshallingService'] instanceof Marshaller))
        {
            $this->marshallingService = $data['marshallingService'];
        }
        
        if (isset($data['seed']))
        {
            $this->setSeed($data['seed']);
        }
        
        if (isset($data['appAuthToken']))
        {
            $this->appAuthToken = $data['appAuthToken'];
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
            throw new InvalidConfigurationException('You must specify the private key for the application');
        }
        
        if ( empty ($this->thumbprint) )
        {
            throw new InvalidConfigurationException('You must specify the application thumbprint');
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
        if ( empty ($this->marshallingService)) {
            $this->marshallingService = $this->getDefaultMarshallingService();;
        }

        return $this->marshallingService;
    }
    
    protected function getDefaultMarshallingService()
    {
    	$OXMConfiguration = new \Doctrine\OXM\Configuration();
    	
    	$paths = array(
    		__DIR__ . '/../../com',
    		__DIR__ . '/../../org',
    	);
    	
    	$annotationDriver = $OXMConfiguration->newDefaultAnnotationDriver($paths);
    	
    	// Register the classes
    	$callable = array(get_class($annotationDriver), 'registerAnnotationClasses');
    	if (is_callable($callable)) {
	    	call_user_func($callable);
    	}
    	
    	$OXMConfiguration->setMetadataDriverImpl($annotationDriver);

    	$OXMConfiguration->setMetadataCacheImpl(/*new \Doctrine\Common\Cache\ArrayCache*/ new \Doctrine\Common\Cache\ApcCache());
    	
    	$metadataFactoryName = $OXMConfiguration->getClassMetadataFactoryName();
    	$metadataFactory = new $metadataFactoryName($OXMConfiguration);
    	
    	$marshaller = new XmlMarshaller($metadataFactory);
    	
    	$marshaller->setIndent(0); // Do not indent
    	
    	return $marshaller;
    }
    
    public function getSharedSecret($base64Encode = FALSE)
    {
        if ($base64Encode) {
    		return base64_encode($this->sharedSecret);
    	}
    	return $this->sharedSecret;
    }
    
    public function getSharedSecretHash()
    {
    	return 'SHA1';
    }
    
    public function getSecretDigest($base64Encode = FALSE)
    {
    	if ($base64Encode) {
    		return base64_encode($this->secretDigest);
    	}
    	// else
    	return $this->secretDigest;
    }
    
    public function getSecretDigestHash()
    {
    	return 'SHA1';
    }
    
    public function authenticate()
    {
    	
    }
    
    public function setPrivateKey($key)
    {
    	if (is_string($key)) {
    		// This is not a resource so must be the key itself or a filename
    		
    		$this->privateKey = NULL;
    		
    		if (substr($key, 0, 31) === '-----BEGIN RSA PRIVATE KEY-----')
    		{
    		    $keyData = $key;
    		} 
    		else
    		{
    		    // Assume it is a filename
        		$keyData = file_get_contents($key);
    
        		if ($keyData === FALSE) {
        			throw new \Exception('Unable to read the private key from the file: ' . $e->getMessage());
        		}
    		}
    		
    		$privateKey = openssl_pkey_get_private($keyData);
    		
    		if ($privateKey === FALSE) {
    			throw new \Exception('Unable to generate the private key from the data: ' . $e->getMessage());
    		}
    		
    		$this->privateKey = $privateKey;
    	} else {
    		$this->privateKey = $key;
    	}
    	
    	return $this;
    }
    
    public function getThumbprint()
    {
    	return $this->thumbprint;
    }
    
    public function setToken($token)
    {
    	$this->token = $token;
    }
    
    public function getToken()
    {
    	return $this->token;
    }
    
    public function setRecord($record)
    {
       if ( ! $record instanceof \com\microsoft\wc\types\Guid && ! is_string($record) )
       {
           return FALSE;
       }
       
       if (is_string($record)) {
       	   $record = new \com\microsoft\wc\types\Guid($record);
       }
       
       $this->record = $record;
    }
    
    public function getRecord()
    {
       return $this->record;
    }
    
    public function getAppAuthToken() {
        return $this->appAuthToken;
    }
    
    public function setAppAuthToken($appAuthToken) {
        $this->appAuthToken = $appAuthToken;
        
        return $this;
    }
}
