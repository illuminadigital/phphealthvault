<?php
namespace DLS\Healthvault;

use DLS\Healthvault\Exceptions\InvalidConfigurationException;

class BaseHealthvaultConfiguration implements HealthvaultConfigurationInterface
{
    protected $baseUrl;
    protected $applicationId;
    protected $privateKey;
    
    public function __construct($application, $privateKey = NULL, $baseUrl = NULL)
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
        
        $this->checkConfiguration();
    }
    
    protected function setFromArray($array)
    {
        if (isset($array['applicationId']))
        {
            $this->applicationId = $array['applicationId'];
        }

        if (isset($array['privateKey']))
        {
            $this->privateKey = $array['privateKey'];
        }
        
        if (isset($array['baseUrl']))
        {
            $this->baseUrl = $array['baseUrl'];
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
}
