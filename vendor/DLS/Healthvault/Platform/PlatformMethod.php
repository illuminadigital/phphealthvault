<?php
namespace DLS\Healthvault\Platform;

class PlatformMethod
{
    protected $configuration = NULL;
    protected $methodName = NULL;
    protected $methodVersion = 1;
    
    public function __construct(HealthvaultConfigurationInterface $configuration)
    {
        $this->configuration = $configuration;
    }
    
    protected function getHeader()
    {
        $headerObj = new Header();
        $header->setMethod($this->methodName);
        $header->setMethodVersion($this->methodVersion);
    }
    
    protected function buildRequest()
    {
        
    }
    
    public function execute()
    {
        $request = $this->getRequestXML();
        
        $response = $this->sendRequest($request);
        
        $unmarshaller = $this->configuration->getUnmarshaller();
        
        $responseObject = $unmarshaller->unmarshal($response);
        
        return $responseObject;
    }
}
