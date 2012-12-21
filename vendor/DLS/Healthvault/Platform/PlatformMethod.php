<?php
namespace DLS\Healthvault\Platform;

use DLS\Healthvault\Entity\Type\HMACFinalized;

use DLS\Healthvault\HealthvaultConfigurationInterface;

use DLS\Healthvault\Entity\Request\MethodRequest;
use DLS\Healthvault\Entity\Type\Header;

class PlatformMethod
{
    protected $configuration = NULL;
    protected $methodName = NULL;
    protected $methodVersion = 1;
    protected $version = 1;
    protected $requestData = NULL;
    
    public function __construct(HealthvaultConfigurationInterface $configuration)
    {
        $this->configuration = $configuration;
        
        $this->requestData = new MethodRequest();
        
        $this->requestData->setHeader($this->getHeader());
        $this->requestData->setAuth($this->getAuth());
    }
    
    protected function getHeader()
    {
        $headerObj = new Header();
        $headerObj->setMethod($this->methodName);
        $headerObj->setMethodVersion($this->methodVersion);
        $headerObj->setVersion($this->version);
        
        return $headerObj;
    }
    
    protected function getAuth()
    {
    	$authObj = new HMACFinalized();
    	
    	return $authObj;
    }
    
    protected function buildRequest()
    {
        
    }
    
    public function execute()
    {
        $request = $this->getRequestXML();
        
        $response = $this->sendRequest($request);
        
        $unmarshaller = $this->configuration->getMarshallingService();
        
        $responseObject = $unmarshaller->unmarshalFromString($response);
                
        return $responseObject;
    }
    
    protected function getRequestXML()
    {
    	$marshaller = $this->configuration->getMarshallingService();
    	 
    	$info = $this->requestData->getInfo();
    	$infoText = $this->extractPayload($marshaller->marshalToString($info));    	
    	
    	$infoHash = $this->getHashDigest($infoText);
    	$header = $this->requestData->getHeader();
    	$header->getHash()->setValue($infoHash);

    	$headerText = $this->extractPayload($marshaller->marshalToString($header));
    	$hmacHash = $this->getAuthHash($this->configuration->getSecretDigest(), $headerText);
    	$auth = $this->requestData->getAuth();
    	$hmac = $auth->getHmacData();
    	$hmac->setAlgorithmName($hmacHash['algorithm']);
    	$hmac->setValue($hmacHash['hash']);
    	
    	return $marshaller->marshalToString($this->requestData);
    }
    
    public function getMethodName()
    {
    	return $this->methodName;
    }

    /**
     * Returns a Base64 encoded string version of the (raw) SHA1 hash of the content
     * 
     * @param string $content
     * 
     * @return string
     */
    protected function getHashDigest($content)
    {
    	return base64_encode(hash('SHA1', $content, TRUE));
    }
    
    protected function getAuthHash($digest, $content)
    {
    	return array(
    		'algorithm' => 'HMACSHA1',
    		'hash' => base64_encode(hash_hmac('SHA1', $content, $digest, TRUE)),
    	);
    }
    
    protected function extractPayload($xml)
    {
    	return preg_replace('/^.*?<([A-Za-z][^ ]+.*)>\s*(.*?)\s*<\/\1>.*$/s', '$2', $xml);
    }
    
    protected function getUrl()
    {
    	return $this->configuration->getBasePlatformUrl() . '/platform/wildcat.ashx';
    }
    
    protected function sendRequest($requestXml)
    {
    	$conn = curl_init($this->getUrl());
    	
    	curl_setopt($conn, CURLOPT_RETURNTRANSFER, TRUE); // We want the content returned to us
    	curl_setopt($conn, CURLOPT_POST, TRUE);
    	
    	curl_setopt($conn, CURLOPT_HEADER, array(
    		'Content-Type' => 'text/xml'
    	));
    	
    	curl_setopt($conn, CURLOPT_POSTFIELDS, $requestXml);
    	
    	$response = curl_exec($conn);
    	
    	curl_close($conn);
    	
    	if ($response === FALSE)
    	{
    		var_dump(sprintf('Failed to send request to %s', $this->getUrl()));
    		//throw new \NetworkIOException(sprintf('Failed to send request to %s', $this->getUrl()));
    	}
    	
    	var_dump($this->getUrl());
    	print_r($response);
    }
}
