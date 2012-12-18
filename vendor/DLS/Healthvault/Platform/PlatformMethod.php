<?php
namespace DLS\Healthvault\Platform;

class PlatformMethod
{
    protected $configuration = NULL;
    protected $methodName = NULL;
    protected $methodVersion = 1;
    protected $requestData = NULL;
    
    public function __construct(HealthvaultConfigurationInterface $configuration)
    {
        $this->configuration = $configuration;
        
        $this->requestData = new MethodRequest();
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
    
    protected function getRequestXML()
    {
    	
    }
}
