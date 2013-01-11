<?php
namespace DLS\Healthvault;

interface HealthvaultConfigurationInterface {
    
    /**
     * Returns the base URL for the shell on the healthvault Instance
     * 
     * @return string URL
     */
    public function getBaseShellUrl();
    
    /**
     * Returns the base URL for the platform on the healthvault Instance
     * 
     * @return string URL
     */
    public function getBasePlatformUrl();
    
    /**
     * Returns the URL that Healthvault should be instructed to return to. This may vary with the target of the request.
     * This should only be sent to the test servers and is ignored on live. 
     * 
     * @param string $target
     * 
     * @return string|NULL
     */
    public function getReturnUrl($target);
    
    /**
     * Returns the application ID
     */
    public function getApplicationId();
    
    /**
     * Returns the certificate used to sign/encrypt the data
     */
    public function getPrivateKey();
    
    /**
     * Returns the service that marshals and unmarshals the XML
     * 
     * @return XMLMarshallingService
     */
    public function getMarshallingService();
}