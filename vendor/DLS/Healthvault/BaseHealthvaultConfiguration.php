<?php
namespace DLS\Healthvault;

use DLS\Healthvault\Exceptions\InvalidConfigurationException;

class BaseHealthvaultConfiguration implements HealthvaultConfigurationInterface
{
    protected $baseUrl;
    protected $applicationId;
    protected $privateKey;
    protected $marshallingService;
    
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
        
        if ( ! empty($marshallingService) && $marshallingService instanceof XMLMarshallingService)
        {
            $this->marshallingService = $marshallingService;
        } 
        else if (empty($this->marshallingService) )
        {
            // Set up the default marshalling
            
        }
        
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
        
        if ( ! empty($data['marshallingService']) && $data['marshallingService'] instanceof XMLMarshallingService)
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
            // Not available yet
            //throw new InvalidConfigurationException('You must specify a marshalling service');
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
        return $this->marshallingService;
    }
}
