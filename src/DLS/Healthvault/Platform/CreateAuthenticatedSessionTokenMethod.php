<?php
namespace DLS\Healthvault\Platform;

use DLS\Healthvault\Platform\PlatformMethod;

use DLS\Healthvault\HealthvaultConfigurationInterface;

use com\microsoft\wc\methods\CreateAuthenticatedSessionToken\Info;

class CreateAuthenticatedSessionTokenMethod extends PlatformMethod {
	protected $methodName = 'CreateAuthenticatedSessionToken';

	public function __construct(HealthvaultConfigurationInterface $configuration)
	{
		parent::__construct($configuration);
		
		$this->mustBeAuthorised = FALSE;
		
		$authInfo = $this->requestData->getInfo()->getAuthInfo();
		
		$authInfo->getAppId()->setValue($this->configuration->getApplicationId());
		
		$appServer = $authInfo->getCredential()->getAppServer();
		
		$appServerCredential = $appServer->getContent();
		$appServerCredential->getAppId()->setValue($this->configuration->getApplicationId());
		
		$secretData = $appServerCredential->getSharedSecret()->getHmacAlg();
		$secretData->setAlgName('HMAC' . $this->configuration->getSecretDigestHash());
		$secretData->setValue($this->configuration->getSecretDigest(TRUE));
		
		$signature = $appServer->getSig();
		$signature->setDigestMethod($this->configuration->getSecretDigestHash());
		// The value will be set later		
	}
	
	protected function getRequestXML() {
		$marshaller = $this->configuration->getMarshallingService();
		
		$appServer = $this->requestData->getInfo()->getAuthInfo()->getCredential()->getAppServer();
		
		$credential = $appServer->getContent();
		$credentialText = $this->extractRootElement($marshaller->marshalToString($credential), 'content');
		
		// Generate the signature
		$signatureText = ''; // Passed by reference
		openssl_sign($credentialText, $signatureText, $this->configuration->getPrivateKey(), OPENSSL_ALGO_SHA1);
		$signatureText = trim(base64_encode($signatureText));

		$signature = $appServer->getSig();
		$signature->setSigMethod('RSA-SHA1'); // This must agree with the openssl_sign call above
		$signature->setThumbprint($this->configuration->getThumbprint());
		$signature->setValue($signatureText);
		
		return parent::getRequestXML();
	}
}