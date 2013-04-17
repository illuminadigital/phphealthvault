<?php
namespace DLS\Healthvault\Platform;

use org\w3\www\_2001\XMLSchema\NonNegativeInteger;

use com\microsoft\wc\types\HMACFinalized;
use com\microsoft\wc\types\Stringnz;

use DLS\Healthvault\HealthvaultConfigurationInterface;
use DLS\Healthvault\Platform\Exceptions\AuthenticatedSessionTokenExpiredException;

use com\microsoft\wc\request\Request;
use com\microsoft\wc\request\Header;

class PlatformMethod
{
    protected $configuration = NULL;
    protected $methodName = NULL;
    protected $methodVersion = 1;
    protected $requestData = NULL;
    
    protected $mustBeAuthorised = TRUE;
    protected $mustIncludeRecord = FALSE;
    
    protected static $appAuthToken = NULL;
    
    private $libraryVersion = 'PHPHV v0.01';
    
    public function __construct(HealthvaultConfigurationInterface $configuration)
    {
        $this->configuration = $configuration;
        
        $this->requestData = new /*Method*/Request();
        
        $this->requestData->setHeader($this->getHeader());
        //$this->requestData->setAuth($this->getAuth());
        
        try {
        	$className = $this->getInfoClassName();
        	if ( ! empty($className) ) {
            	$this->requestData->setInfo(new $className());
        	}
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
        
        if ( ! $this->mustBeAuthorised) {
	        $headerObj->getAppId()->setValue($this->configuration->getApplicationId());
        }
        
        if  ( $this->mustIncludeRecord) {
            $headerObj->setRecordId($this->configuration->getRecord());
        }
 
        $headerObj->setLanguage($this->getLanguage());
        $headerObj->setCountry($this->getCountry());
        
        $headerObj->getVersion()->setValue($this->libraryVersion);
        
        $headerObj->setMsgTime(date('c')); // ISO-8601 format
        $headerObj->setMsgTtl(1800);
        
        return $headerObj;
    }
    
    protected function getLanguage()
    {
    	return 'en';
    }
    
    protected function getCountry()
    {
    	return 'US';
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

    public function execute()
    {
        $responseObject = $this->makeRequest();

        if ($responseObject && $responseObject->getStatus()->getCode() == 0) {
            $info = $responseObject->getInfo();

            return $info;
        }

        if( $responseObject ){

            switch($responseObject->getStatus()->getCode()){

                //Expired Healthvault Token Exception Handling tries to delete the token and get a new one, then retries the request. If fails throws the exception
                case 65:

                    $this->configuration->setAppAuthToken(null);

                    $this->getAuthToken();

                    $responseObject = $this->makeRequest();

                    if ($responseObject && $responseObject->getStatus()->getCode() == 0) {

                        $info = $responseObject->getInfo();

                        return $info;

                    }else{

                        if(!is_null($responseObject)){

                            throw \DLS\Healthvault\Platform\Exceptions\HealthvaultExceptionFactory::build($responseObject->getStatus()->getCode());

                        }else{

                            //FIXME: add a handler for failed connection exception. (HealthvaultException::NO_RESPONSE)
                            //throw \DLS\Healthvault\Platform\Exceptions\HealthvaultExceptionFactory::build(0);

                            return NULL;
                        }

                    }

                    break;

                default:

                    throw \DLS\Healthvault\Platform\Exceptions\HealthvaultExceptionFactory::build($responseObject->getStatus()->getCode());

                    break;
            }

        }


        //FIXME: add a handler for failed connection exception. (HealthvaultException::NO_RESPONSE)

        error_log('Error executing method');
        //error_log(print_r($request, TRUE));
        //error_log(print_r($response, TRUE));
        error_log(print_r($responseObject, TRUE));

        return NULL;
    }

    protected function makeRequest(){

        $request = $this->getRequestXML();

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
	    	$infoXml = $marshaller->marshalToString($info);
	    	$infoText = $this->extractRootElement($infoXml, 'info');    	
	    	
	    	$infoHash = $this->getHashDigest($infoText);
	    	$header = $this->getHeader();
	    	$hash = $header->getInfoHash()->getHashData();
	    	$hash->setAlgName('SHA1');
	    	$hash->setValue($infoHash);
	    	
	    	$authSession = $header->getAuthSession();
	    	$authSession->setAuthToken($this->getAuthToken());
	    	//$authSession->setUserAuthToken($this->configuration->getToken());
	    	
	    	$token = $this->configuration->getToken();
	    	$authSession->setUserAuthToken($token);
	    	
	    	$headerXml = $marshaller->marshalToString($header);
	    	$headerText = $this->extractRootElement($headerXml, 'header');
	    	$hmacHash = $this->getAuthHash($this->configuration->getSecretDigest(), $headerText);
	    	$auth = $this->getAuth();
	    	$hmac = $auth->getHmacData();
	    	$hmac->setAlgName($hmacHash['algorithm']);
	    	$hmac->setValue($hmacHash['hash']);
    	}
	    	
    	$xml = $marshaller->marshalToString($this->requestData);
    	$xml = $this->removeNamespaces($xml);
    	
    	return $xml;
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

    /**
     * Extract the payload from an XML packet.
     * 
     * This is the content within the root element.
     * 
     * @param string $xml
     * @return boolean|string The payload string or FALSE on failure
     */
    protected function extractPayload($xml)
    {
    	$xml = $this->removeNamespaces($xml, TRUE);
    	
    	$count = 0;
    	$payload = preg_replace('/^.*?<([A-Za-z][^ ]+.*?)>\s*(.*?)\s*<\/\1>.*$/s', '$2', $xml, -1, $count);
    	
    	if ($count !== 1) {
    		$payload = preg_replace('/^.*?<([A-Za-z][^ ]+.*?)\/>\s*$/s', '', $xml, -1, $count);
    	}
    	
    	if ($count !== 1) {
    		$payload = FALSE;
    	}
    	
    	return $payload;
    }
    
    /**
     * Extract the root element from an XML packet.
     * 
     * This is the content including root element. The name of this element can optionally be changed.
     * 
     * @param string $xml
     * @param string $forceName The Name to set the Root Element to
     * @return boolean|string The root element string or FALSE on failure
     */
    protected function extractRootElement($xml, $forceName = NULL)
    {
    	$xml = $this->removeNamespaces($xml, TRUE);
    	
    	$count = 0;
    	
    	if (! empty($forceName)) {
    		$replacement = '<' . $forceName .'$2</' . $forceName .'>';
    	} else {
    		$replacement = '<$1$2</$1>';
    	} 
    	
    	$rootContent = preg_replace('/^.*?<([A-Za-z][^ >]+)(.*?>\s*.*?\s*)<\/\1\s*>.*$/s', $replacement, $xml, -1, $count);

    	if ($count !== 1) {
    	    if (! empty($forceName)) {
	    		$replacement = '<' . $forceName .'/>';
	    	} else {
	    		$replacement = '$1';
	    	}
	    	 
    		$rootContent = preg_replace('/^.*?(<([A-Za-z][^ >]+.*?)\/>)\s*$/s', $replacement, $xml, -1, $count);
    	}
    	 
    	if ($count !== 1) {
    		return FALSE;
    	}
    	
    	return $rootContent;
    }
    
    protected function removeNamespaces($xml, $removeAll = FALSE)
    {
    	$startPos = 0;
    	
    	if ( ! $removeAll) {
    		$matches = array();
    		if (preg_match('/(?<!\?)>/', $xml, $matches, PREG_OFFSET_CAPTURE) >= 1)
    		{
    			$startPos = $matches[0][1] +1;
    		}
    	}
    	
    	$prefix = substr($xml, 0, $startPos);
    	$xml = substr($xml, $startPos);
    	
    	$xml = preg_replace('/\sxmlns(:.*?)?=(["\']).*?\2/', '', $xml, -1);
    	
    	return $prefix . $xml;
    }
    
    protected function getUrl()
    {
    	return $this->configuration->getBasePlatformUrl() . '/platform/wildcat.ashx';
    }
    
    protected function sendRequest($requestXml)
    {
        static $conn /*= NULL*/;
        
        if ( ! $conn ) {
        	$conn = curl_init($this->getUrl());
    	
        	curl_setopt($conn, CURLOPT_RETURNTRANSFER, TRUE); // We want the content returned to us
        	curl_setopt($conn, CURLOPT_POST, TRUE);
        	curl_setopt($conn, CURLOPT_HEADER, FALSE);
        	
        	curl_setopt($conn, CURLOPT_HTTPHEADER, array(
        		'Content-Type: text/xml'
        	));
        }
    	
    	curl_setopt($conn, CURLOPT_POSTFIELDS, $requestXml);
    	
    	$response = curl_exec($conn);
    	
    	// curl_close($conn);
    	
    	if ($response === FALSE)
    	{
    		//var_dump(sprintf('Failed to send request to %s', $this->getUrl()));
    		throw new \NetworkIOException(sprintf('Failed to send request to %s', $this->getUrl()));
    	}
    	
    	//print_r($response);
    	
    	return $response;
    }
    
    protected function getAuthToken()
    {
        $appAuthToken = $this->configuration->getAppAuthToken();
        
    	if (empty($appAuthToken)) {
	    	$driver = new \DLS\Healthvault\Driver($this->configuration);
	    	
	    	$authTokenMethod = $driver->getPlatformMethod('CreateAuthenticatedSessionToken');
	    	
	    	$authTokenResponse = $authTokenMethod->execute();
	    	
	    	if ($authTokenResponse) {
	    	    $tokens = $authTokenResponse->getToken();
	    	    $token = array_shift($tokens);
	    	    
		    	$appAuthToken = $token->getValue();
		    	
		    	$this->configuration->setAppAuthToken($appAuthToken);
	    	} 
    	}
    	
    	return $appAuthToken;
    }
}
