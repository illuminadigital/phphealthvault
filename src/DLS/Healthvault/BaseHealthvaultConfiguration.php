<?php
namespace DLS\Healthvault;

use DLS\Healthvault\Exceptions\InvalidConfigurationException;

use Doctrine\OXM\Marshaller\XmlMarshaller;
use Doctrine\OXM\Marshaller\Marshaller;

use Doctrine\OXM\Configuration;

/**
 * Provides the starting point for implementations of the configuration.
 * 
 * @author Alistair MacDonald <alistair.macdonald@digitallifesciences.co.uk>
 *
 */
class BaseHealthvaultConfiguration implements HealthvaultConfigurationInterface
{
    /**
     * The URL of the HealthVault instance to send requests to
     * 
     * @var string
     */
    protected $baseUrl;
    
    /**
     * The application ID, as defined in the HealthVault provisioning system
     * 
     * @var string
     */
    protected $applicationId;
    
    /**
     * The private key for the application, as defined in the HealthVault
     * provisioning system
     * 
     * @var string
     */
    protected $privateKey;
    
    /**
     * An implementation of the marshalling service that can serialise and deserialise the data
     * 
     * @var XMLMarshallingService
     */
    protected $marshallingService;
    
    /**
     * The shared secret
     * 
     * @var string
     */
    protected $sharedSecret;
    
    /**
     * The secret digest
     * 
     * @var string
     */
    protected $secretDigest;
    
    /**
     * The user's authentication token
     * 
     * @var string
     */
    protected $token;
    
    /**
     * The RecordId of the user's selected record
     * 
     * @var string
     */
    protected $record;
    
    /**
     * The thumbprint used to verify the application
     * 
     * @var string
     */
    protected $thumbprint;
    
    /**
     * A seed to keep the encryption random
     * 
     * @var string
     */
    protected $seed;
    
    /**
     * The token authorising the application to use HealthVault on behalf of the user
     * 
     * @var string
     */
    protected $appAuthToken;
    
    /**
     * Set up the main configration information.
     * 
     * @param mixed $application - either the application ID or an array-like entity with the values
     * @param string $privateKey
     * @param string $thumbprint
     * @param string $baseUrl
     * @param string $marshallingService
     * @param string $seed
     * @param string $appAuthtoken
     */
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
    
            if ( ! empty($seed) ) {
                $this->setSeed($seed);
            } else  {
                $this->getSeed(); // Sets a default seed if not set
            }
            
            if ( ! empty($appAuthtoken) ) {
                $this->appAuthToken = $appAuthtoken;
            }
        }
        
        if (empty($this->marshallingService) )
        {
            // Set up the default marshalling
            $this->marshallingService = $this->getDefaultMarshallingService();
        }
        
        $this->checkConfiguration();
    }
    
    /**
     * Rebuilds the secrets after the seed has changed
     */
    protected function updateSecrets() {
        $this->sharedSecret = hash($this->getSharedSecretHash(), $this->seed);
        $this->secretDigest = hash_hmac($this->getSecretDigestHash(), $this->sharedSecret, $this->sharedSecret);
    }
    
    /**
     * Retrieve the current seed for the hashing algorithms.
     * 
     * If the seed is not set then create one.
     */
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
    
    /**
     * Initialises the data from an array-like entity.
     * 
     * The keys are:
     * - applicationId
     * - privateKey (either the data resource or a filename)
     * - thumbprint
     * - baseUrl
     * - marshallingService
     * - seed
     * - appAuthToken
     * 
     * @param mixed $data
     */
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
    
    /**
     * Return an object that can be used to convert back and forth between objects and XML
     */
    public function getMarshallingService()
    {
        if ( empty ($this->marshallingService)) {
            $this->marshallingService = $this->getDefaultMarshallingService();;
        }

        return $this->marshallingService;
    }
    
    /**
     * Set up the default marshalling service. 
     * 
     * Provides the following hooks:
     * - $this->alterAnnotationPaths() - to change where to look for annotated classes
     * - ANNOTATIONDRIVER->registerAnnotationClasses() - to allow the annotations to be loaded
     * - $this->alterMetadataFactory() - to allow the metadata factory configuration to be tweaked 
     * 
     * @return \Doctrine\OXM\Marshaller\XmlMarshaller
     */
    protected function getDefaultMarshallingService()
    {
        // The OXM code has it's own configuration structure
    	$OXMConfiguration = new \Doctrine\OXM\Configuration();
    	
    	// Where can we find our annotated classes?
    	$paths = array(
    		__DIR__ . '/../../com',
    		__DIR__ . '/../../org',
    	);
    	
    	// Create a hook that allows code to add more paths to search for classes
        $pathAltererCallable = array($this, 'alterAnnotationPaths');
        if (is_callable($pathAltererCallable)) {
            /*
             * Return the updated paths as we can't use call-by-reference and arrays are
             * "weird" when it comes to non-explicit calls 
             */ 
            $paths = call_user_func($pathAltererCallable, $paths);
        }
        
        // We need something that can interpret annotations
    	$annotationDriver = $this->getAnnotationDriver($OXMConfiguration, $paths);
    	
    	// Register the classes if possible
    	$callable = array(get_class($annotationDriver), 'registerAnnotationClasses');
    	if (is_callable($callable)) {
	    	call_user_func($callable);
    	}
    	
    	// Set up the conversion of annotations to metadata
    	$OXMConfiguration->setMetadataDriverImpl($annotationDriver);

    	// ... and a cache for that metadata
    	$OXMConfiguration->setMetadataCacheImpl($this->getMetadataCacheImpl());
    	
    	// That process needs a factory for the metadata
    	$metadataFactoryName = $OXMConfiguration->getClassMetadataFactoryName();
    	$metadataFactory = new $metadataFactoryName($OXMConfiguration);
    	
    	// ... and provide a hook to configure that factory
    	$metadataFactoryAltererCallable = array($this, 'alterMetadataFactory');
    	if (is_callable($metadataFactoryAltererCallable)) {
    	    call_user_func($metadataFactoryAltererCallable, $metadataFactory); // Objects are always be reference
    	}
    	
    	$marshaller = new XmlMarshaller($metadataFactory);
    	
    	$marshaller->setIndent(0); // Do not indent
    	$marshaller->setAllowUnknownElements(TRUE); // Account for unknown elements
    	 
    	return $marshaller;
    }
    
    /**
     * Build the annotation driver
     * 
     * @param Configuration $OXMConfiguration
     * @param array $paths - where to look for annotated files
     * 
     * @return Doctrine\OXM\Mapping\Driver\AnnotationDriver
     */
    protected function getAnnotationDriver(Configuration $OXMConfiguration, array $paths) {
        $annotationDriver = $OXMConfiguration->newDefaultAnnotationDriver($paths);
        
        return $annotationDriver;
    }
    
    /**
     * Build the Cache for metadata
     * 
     * @return \Doctrine\Common\Cache\Cache
     */
    protected function getMetadataCacheImpl() {
        return new \Doctrine\Common\Cache\ArrayCache();
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
    
    /**
     * Set the private key information. 
     * 
     * This should be either a resource, a string version of the key, 
     * or the filename from which to load the key.
     * 
     * @param Resource|string $key
     * @throws \Exception
     * @return \DLS\Healthvault\BaseHealthvaultConfiguration
     */
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
    
    public function getVocabularyInterface() {
        return NULL; // FIXME: Should return a real vocabulary interface
    }
}
