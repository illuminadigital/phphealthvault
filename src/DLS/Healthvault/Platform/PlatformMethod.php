<?php
namespace DLS\Healthvault\Platform;

use org\w3\www\_2001\XMLSchema\NonNegativeInteger;

//use DLS\Healthvault\Entity\Type\HMACFinalized;
use com\microsoft\wc\types\HMACFinalized;
use com\microsoft\wc\types\Stringnz;

use DLS\Healthvault\HealthvaultConfigurationInterface;

//use DLS\Healthvault\Entity\Request\MethodRequest;
//use DLS\Healthvault\Entity\Type\Header;

use com\microsoft\wc\request\Request;
use com\microsoft\wc\request\Header;

class PlatformMethod
{
    protected $configuration = NULL;
    protected $methodName = NULL;
    protected $methodVersion = 1;
    protected $requestData = NULL;
    
    protected $mustBeAuthorised = TRUE;
    
    private $libraryVersion = '0.0.0.1'; //PHPHV v0.01';
    
    public function __construct(HealthvaultConfigurationInterface $configuration)
    {
        $this->configuration = $configuration;
        
        $this->requestData = new /*Method*/Request();
        
        $this->requestData->setHeader($this->getHeader());
        //$this->requestData->setAuth($this->getAuth());
        
        try {
        	$className = $this->getInfoClassName();
        	$this->requestData->setInfo(new $className());
        } 
        catch (Exception $e)
        {
        	// Ignore
        	echo 'Loading request data failed';	
        }
    }
    
    protected function getInfoClassName()
    {
    	return sprintf('\com\microsoft\wc\methods\%s\Info', $this->methodName);
    }
    
    protected function getHeader()
    {
        //$headerObj = new Header();
        $headerObj = $this->requestData->getHeader();
        
        $headerObj->setMethod($this->getMethodName());
        
        $methodVersion = $this->getMethodVersion();
        if ( ! empty ($methodVersion)){
        	$headerObj->setMethodVersion($methodVersion);
        }
        
        $headerObj->getAppId()->setValue($this->configuration->getApplicationId());
        
        $headerObj->getVersion()->setValue($this->libraryVersion);
        
        $headerObj->setMsgTime(date('c'));
//        $headerObj->setMsgTtl(new NonNegativeInteger(36000));
        $headerObj->setMsgTtl(36000);
        
        return $headerObj;
    }
    
    protected function getMethodVersion()
    {
    	if ( ! empty($this->methodVersion) )
    	{
    		return $this->methodVersion;
    	}
    	
    	return NULL;
    }
    
    protected function getAuth()
    {
    	// $authObj = new HMACFinalized();
    	$authObj = $this->requestData->getAuth();
    	
    	return $authObj;
    }
    
    protected function buildRequest()
    {
        
    }
    
    public function execute()
    {
        $request = $this->getRequestXML();
        
        file_put_contents(tempnam(sys_get_temp_dir(), 'rq'), $request);
        
        echo $this->getUrl();
        
        $response = $this->sendRequest($request);
        
        if ( ! empty($response) )
        {
        	$unmarshaller = $this->configuration->getMarshallingService();
        
        	$responseObject = $unmarshaller->unmarshalFromString($response);
        }
        else
        {
        	$responseObject = NULL;
        }
                
        return $responseObject;
    }
    
    protected function getRequestXML()
    {
    	$marshaller = $this->configuration->getMarshallingService();
    	 
    	if ($this->mustBeAuthorised) {
	    	$info = $this->requestData->getInfo();
	    	$infoText = $this->extractPayload($marshaller->marshalToString($info));    	
	    	
	    	$infoHash = $this->getHashDigest($infoText);
	    	$header = $this->getHeader();
	    	$hash = $header->getInfoHash()->getHashData();
	    	$hash->setAlgName('SHA1');
	    	$hash->setValue($infoHash);
	    	
	    	$headerText = $this->extractPayload($marshaller->marshalToString($header));
	    	$hmacHash = $this->getAuthHash($this->configuration->getSecretDigest(), $headerText);
	    	$auth = $this->getAuth();
	    	$hmac = $auth->getHmacData();
	    	$hmac->setAlgName($hmacHash['algorithm']);
	    	$hmac->setValue($hmacHash['hash']);
    	}
	    	
    	//return $this->removeNamespaces($marshaller->marshalToString($this->requestData));
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
//    	$xml = $this->removeNamespaces($xml, TRUE);
    	
    	return preg_replace('/^.*?<([A-Za-z][^ ]+.*)>\s*(.*?)\s*<\/\1>.*$/s', '$2', $xml);
    }
    
    protected function removeNamespaces($xml, $removeAll = FALSE)
    {
    	$startPos = 0;
    	
    	if ( ! $removeAll) {
    		$matches = array();
    		if (preg_match('/(?<!\?)>/', $xml, $matches, PREG_OFFSET_CAPTURE) >= 1)
    		{
    			$startPos = $matches[0][1] +1;
    			
    			var_dump($startPos);
    		}
    	}
    	
    	$prefix = substr($xml, 0, $startPos);
    	$xml = substr($xml, $startPos);
    	
    	$xml = preg_replace('/\sxmlns:.*?=(["\']).*?\1/', '', $xml, -1);
    	
    	return $prefix . $xml;
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
    		//var_dump(sprintf('Failed to send request to %s', $this->getUrl()));
    		throw new \NetworkIOException(sprintf('Failed to send request to %s', $this->getUrl()));
    	}
    	
    	print_r($response);
    }
}
