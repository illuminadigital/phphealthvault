<?php
namespace com\microsoft\wc\methods\AddApplication;



/**
 * @XmlNamespaces ({
 *	@XmlNamespace(url="urn:com.microsoft.wc.methods.AddApplication", prefix="")
 * })
 * @XmlEntity	(xml="info")
 */
class Info extends \com\microsoft\wc\request\Info {
	/**
	 * The element of the request that contains the method specific parameters.
	 * All requests contain the info element to pass parameters that are specific to each method. If the method does not define an info element, the method does not take any parameters.
	 */

	/**
	 * @XmlElement	(type="\com\microsoft\wc\types\CultureSpecificString255", collection="true", name="name")
	 */
	protected $name;

	/**
	 * @XmlElement	(type="\com\microsoft\wc\application\PublicKeys", name="public-keys")
	 */
	protected $publicKeys;

	/**
	 * @XmlElement	(type="\com\microsoft\wc\auth\AuthXml", name="person-online-base-auth")
	 */
	protected $personOnlineBaseAuth;

	/**
	 * @XmlElement	(type="\com\microsoft\wc\auth\AuthXml", name="person-offline-base-auth")
	 */
	protected $personOfflineBaseAuth;

	/**
	 * @XmlElement	(type="\com\microsoft\wc\types\Stringnz", name="methods")
	 */
	protected $methods;

	/**
	 * @XmlElement	(type="\com\microsoft\wc\types\Stringnz", name="action-url")
	 */
	protected $actionUrl;

	/**
	 * @XmlElement	(type="\com\microsoft\wc\types\CultureSpecificStringnz", collection="true", name="description")
	 */
	protected $description;

	/**
	 * @XmlElement	(type="\com\microsoft\wc\types\CultureSpecificStringnz", collection="true", name="auth-reason")
	 */
	protected $authReason;

	/**
	 * @XmlElement	(type="\com\microsoft\wc\types\String255", name="domain-name")
	 */
	protected $domainName;

	/**
	 * @XmlElement	(type="\com\microsoft\wc\application\AppLargeLogoInfo", name="large-logo")
	 */
	protected $largeLogo;

	/**
	 * @XmlElement	(type="\com\microsoft\wc\application\AppSmallLogoInfo", name="small-logo")
	 */
	protected $smallLogo;

	/**
	 * @XmlElement	(type="\com\microsoft\wc\application\AppPersistentTokens", name="persistent-tokens")
	 */
	protected $persistentTokens;

	/**
	 * @XmlElement	(type="\com\microsoft\wc\types\Stringnz", name="app-type")
	 */
	protected $appType;

	/**
	 * @XmlElement	(type="\com\microsoft\wc\application\StatementInfo", name="privacy-statement")
	 */
	protected $privacyStatement;

	/**
	 * @XmlElement	(type="\com\microsoft\wc\application\StatementInfo", name="terms-of-use")
	 */
	protected $termsOfUse;

	/**
	 * @XmlText	(type="boolean", name="app-auth-required")
	 */
	protected $appAuthRequired;

	/**
	 * @XmlText	(type="boolean", name="is-published")
	 */
	protected $isPublished;

	/**
	 * @XmlElement	(type="\com\microsoft\wc\application\StatementInfo", name="dtc-success-message")
	 */
	protected $dtcSuccessMessage;

	/**
	 * @XmlElement	(type="\com\microsoft\wc\application\ApplicationAttributes", name="app-attributes")
	 */
	protected $appAttributes;

	/**
	 * @XmlElement	(type="\com\microsoft\wc\types\String255nw", name="valid-ip-prefixes")
	 */
	protected $validIpPrefixes;

	/**
	 * @XmlElement	(type="\com\microsoft\wc\vocab\VocabularyAuthorizations", name="vocabulary-authorizations")
	 */
	protected $vocabularyAuthorizations;

	public function __construct($name = NULL, $publicKeys = NULL, $personOnlineBaseAuth = NULL, $personOfflineBaseAuth = NULL, $methods = NULL, $actionUrl = NULL, $description = NULL, $authReason = NULL, $domainName = NULL, $largeLogo = NULL, $smallLogo = NULL, $persistentTokens = NULL, $appType = NULL, $privacyStatement = NULL, $termsOfUse = NULL, $appAuthRequired = NULL, $isPublished = NULL, $dtcSuccessMessage = NULL, $appAttributes = NULL, $validIpPrefixes = NULL, $vocabularyAuthorizations = NULL) {
		$this->name = ($name===NULL) ? NULL : $this->validateName($name);
		$this->publicKeys = ($publicKeys===NULL) ? NULL : $this->validatePublicKeys($publicKeys);
		$this->personOnlineBaseAuth = ($personOnlineBaseAuth===NULL) ? NULL : $this->validatePersonOnlineBaseAuth($personOnlineBaseAuth);
		$this->personOfflineBaseAuth = ($personOfflineBaseAuth===NULL) ? NULL : $this->validatePersonOfflineBaseAuth($personOfflineBaseAuth);
		$this->methods = ($methods===NULL) ? NULL : $this->validateMethods($methods);
		$this->actionUrl = ($actionUrl===NULL) ? NULL : $this->validateActionUrl($actionUrl);
		$this->description = ($description===NULL) ? NULL : $this->validateDescription($description);
		$this->authReason = ($authReason===NULL) ? NULL : $this->validateAuthReason($authReason);
		$this->domainName = ($domainName===NULL) ? NULL : $this->validateDomainName($domainName);
		$this->largeLogo = ($largeLogo===NULL) ? NULL : $this->validateLargeLogo($largeLogo);
		$this->smallLogo = ($smallLogo===NULL) ? NULL : $this->validateSmallLogo($smallLogo);
		$this->persistentTokens = ($persistentTokens===NULL) ? NULL : $this->validatePersistentTokens($persistentTokens);
		$this->appType = ($appType===NULL) ? NULL : $this->validateAppType($appType);
		$this->privacyStatement = ($privacyStatement===NULL) ? NULL : $this->validatePrivacyStatement($privacyStatement);
		$this->termsOfUse = ($termsOfUse===NULL) ? NULL : $this->validateTermsOfUse($termsOfUse);
		$this->appAuthRequired = ($appAuthRequired===NULL) ? NULL : $this->validateAppAuthRequired($appAuthRequired);
		$this->isPublished = ($isPublished===NULL) ? NULL : $this->validateIsPublished($isPublished);
		$this->dtcSuccessMessage = ($dtcSuccessMessage===NULL) ? NULL : $this->validateDtcSuccessMessage($dtcSuccessMessage);
		$this->appAttributes = ($appAttributes===NULL) ? NULL : $this->validateAppAttributes($appAttributes);
		$this->validIpPrefixes = ($validIpPrefixes===NULL) ? NULL : $this->validateValidIpPrefixes($validIpPrefixes);
		$this->vocabularyAuthorizations = ($vocabularyAuthorizations===NULL) ? NULL : $this->validateVocabularyAuthorizations($vocabularyAuthorizations);
	}

	public function getName() {
		if ($this->name===NULL) {
			$this->name = $this->createName();
		}
		return $this->name;
	}
	
	protected function createName() {
		return array();
	}

	public function setName($name) {
		$this->name = $this->validateName($name);
	}

	protected function validateName($name) {
		if ( ! $name instanceof \com\microsoft\wc\types\CultureSpecificString255 ) {
			$name = new \com\microsoft\wc\types\CultureSpecificString255 ($name);
		}
		$count = count($name);
		if ($count < 1) {
			throw new \Exception(sprintf('Supplied %s array has less than the required number (%d) of entries.', 'name', 1));
		}
		foreach ($name as $entry) {
			if (!($entry instanceof CultureSpecificString255)) {
				throw new \Exception(sprintf('Supplied %s value was not %s', 'name', 'CultureSpecificString255'));
			}
		}
	
		return $name;
	}

	public function addName($name) {
		$this->name[] = $name;
	}

	public function getPublicKeys() {
		if ($this->publicKeys===NULL) {
			$this->publicKeys = $this->createPublicKeys();
		}
		return $this->publicKeys;
	}
	
	protected function createPublicKeys() {
		return new \com\microsoft\wc\application\PublicKeys();
	}

	public function setPublicKeys($publicKeys) {
		$this->publicKeys = $this->validatePublicKeys($publicKeys);
	}

	protected function validatePublicKeys($publicKeys) {
		if ( ! $publicKeys instanceof \com\microsoft\wc\application\PublicKeys ) {
			$publicKeys = new \com\microsoft\wc\application\PublicKeys ($publicKeys);
		}
	
		return $publicKeys;
	}

	public function getPersonOnlineBaseAuth() {
		if ($this->personOnlineBaseAuth===NULL) {
			$this->personOnlineBaseAuth = $this->createPersonOnlineBaseAuth();
		}
		return $this->personOnlineBaseAuth;
	}
	
	protected function createPersonOnlineBaseAuth() {
		return new \com\microsoft\wc\auth\AuthXml();
	}

	public function setPersonOnlineBaseAuth($personOnlineBaseAuth) {
		$this->personOnlineBaseAuth = $this->validatePersonOnlineBaseAuth($personOnlineBaseAuth);
	}

	protected function validatePersonOnlineBaseAuth($personOnlineBaseAuth) {
		if ( ! $personOnlineBaseAuth instanceof \com\microsoft\wc\auth\AuthXml  && ! is_null($personOnlineBaseAuth) ) {
			$personOnlineBaseAuth = new \com\microsoft\wc\auth\AuthXml ($personOnlineBaseAuth);
		}
	
		return $personOnlineBaseAuth;
	}

	public function getPersonOfflineBaseAuth() {
		if ($this->personOfflineBaseAuth===NULL) {
			$this->personOfflineBaseAuth = $this->createPersonOfflineBaseAuth();
		}
		return $this->personOfflineBaseAuth;
	}
	
	protected function createPersonOfflineBaseAuth() {
		return new \com\microsoft\wc\auth\AuthXml();
	}

	public function setPersonOfflineBaseAuth($personOfflineBaseAuth) {
		$this->personOfflineBaseAuth = $this->validatePersonOfflineBaseAuth($personOfflineBaseAuth);
	}

	protected function validatePersonOfflineBaseAuth($personOfflineBaseAuth) {
		if ( ! $personOfflineBaseAuth instanceof \com\microsoft\wc\auth\AuthXml ) {
			$personOfflineBaseAuth = new \com\microsoft\wc\auth\AuthXml ($personOfflineBaseAuth);
		}
	
		return $personOfflineBaseAuth;
	}

	public function getMethods() {
		if ($this->methods===NULL) {
			$this->methods = $this->createMethods();
		}
		return $this->methods;
	}
	
	protected function createMethods() {
		return new \com\microsoft\wc\types\Stringnz();
	}

	public function setMethods($methods) {
		$this->methods = $this->validateMethods($methods);
	}

	protected function validateMethods($methods) {
		if ( ! $methods instanceof \com\microsoft\wc\types\Stringnz  && ! is_null($methods) ) {
			$methods = new \com\microsoft\wc\types\Stringnz ($methods);
		}
	
		return $methods;
	}

	public function getActionUrl() {
		if ($this->actionUrl===NULL) {
			$this->actionUrl = $this->createActionUrl();
		}
		return $this->actionUrl;
	}
	
	protected function createActionUrl() {
		return new \com\microsoft\wc\types\Stringnz();
	}

	public function setActionUrl($actionUrl) {
		$this->actionUrl = $this->validateActionUrl($actionUrl);
	}

	protected function validateActionUrl($actionUrl) {
		if ( ! $actionUrl instanceof \com\microsoft\wc\types\Stringnz  && ! is_null($actionUrl) ) {
			$actionUrl = new \com\microsoft\wc\types\Stringnz ($actionUrl);
		}
	
		return $actionUrl;
	}

	public function getDescription() {
		if ($this->description===NULL) {
			$this->description = $this->createDescription();
		}
		return $this->description;
	}
	
	protected function createDescription() {
		return array();
	}

	public function setDescription($description) {
		$this->description = $this->validateDescription($description);
	}

	protected function validateDescription($description) {
		if ( ! $description instanceof \com\microsoft\wc\types\CultureSpecificStringnz ) {
			$description = new \com\microsoft\wc\types\CultureSpecificStringnz ($description);
		}
		$count = count($description);
		if ($count < 1) {
			throw new \Exception(sprintf('Supplied %s array has less than the required number (%d) of entries.', 'description', 1));
		}
		foreach ($description as $entry) {
			if (!($entry instanceof CultureSpecificStringnz)) {
				throw new \Exception(sprintf('Supplied %s value was not %s', 'description', 'CultureSpecificStringnz'));
			}
		}
	
		return $description;
	}

	public function addDescription($description) {
		$this->description[] = $description;
	}

	public function getAuthReason() {
		if ($this->authReason===NULL) {
			$this->authReason = $this->createAuthReason();
		}
		return $this->authReason;
	}
	
	protected function createAuthReason() {
		return array();
	}

	public function setAuthReason($authReason) {
		$this->authReason = $this->validateAuthReason($authReason);
	}

	protected function validateAuthReason($authReason) {
		if ( ! $authReason instanceof \com\microsoft\wc\types\CultureSpecificStringnz ) {
			$authReason = new \com\microsoft\wc\types\CultureSpecificStringnz ($authReason);
		}
		$count = count($authReason);
		if ($count < 1) {
			throw new \Exception(sprintf('Supplied %s array has less than the required number (%d) of entries.', 'authReason', 1));
		}
		foreach ($authReason as $entry) {
			if (!($entry instanceof CultureSpecificStringnz)) {
				throw new \Exception(sprintf('Supplied %s value was not %s', 'authReason', 'CultureSpecificStringnz'));
			}
		}
	
		return $authReason;
	}

	public function addAuthReason($authReason) {
		$this->authReason[] = $authReason;
	}

	public function getDomainName() {
		if ($this->domainName===NULL) {
			$this->domainName = $this->createDomainName();
		}
		return $this->domainName;
	}
	
	protected function createDomainName() {
		return new \com\microsoft\wc\types\String255();
	}

	public function setDomainName($domainName) {
		$this->domainName = $this->validateDomainName($domainName);
	}

	protected function validateDomainName($domainName) {
		if ( ! $domainName instanceof \com\microsoft\wc\types\String255  && ! is_null($domainName) ) {
			$domainName = new \com\microsoft\wc\types\String255 ($domainName);
		}
	
		return $domainName;
	}

	public function getLargeLogo() {
		if ($this->largeLogo===NULL) {
			$this->largeLogo = $this->createLargeLogo();
		}
		return $this->largeLogo;
	}
	
	protected function createLargeLogo() {
		return new \com\microsoft\wc\application\AppLargeLogoInfo();
	}

	public function setLargeLogo($largeLogo) {
		$this->largeLogo = $this->validateLargeLogo($largeLogo);
	}

	protected function validateLargeLogo($largeLogo) {
		if ( ! $largeLogo instanceof \com\microsoft\wc\application\AppLargeLogoInfo ) {
			$largeLogo = new \com\microsoft\wc\application\AppLargeLogoInfo ($largeLogo);
		}
	
		return $largeLogo;
	}

	public function getSmallLogo() {
		if ($this->smallLogo===NULL) {
			$this->smallLogo = $this->createSmallLogo();
		}
		return $this->smallLogo;
	}
	
	protected function createSmallLogo() {
		return new \com\microsoft\wc\application\AppSmallLogoInfo();
	}

	public function setSmallLogo($smallLogo) {
		$this->smallLogo = $this->validateSmallLogo($smallLogo);
	}

	protected function validateSmallLogo($smallLogo) {
		if ( ! $smallLogo instanceof \com\microsoft\wc\application\AppSmallLogoInfo  && ! is_null($smallLogo) ) {
			$smallLogo = new \com\microsoft\wc\application\AppSmallLogoInfo ($smallLogo);
		}
	
		return $smallLogo;
	}

	public function getPersistentTokens() {
		if ($this->persistentTokens===NULL) {
			$this->persistentTokens = $this->createPersistentTokens();
		}
		return $this->persistentTokens;
	}
	
	protected function createPersistentTokens() {
		return new \com\microsoft\wc\application\AppPersistentTokens();
	}

	public function setPersistentTokens($persistentTokens) {
		$this->persistentTokens = $this->validatePersistentTokens($persistentTokens);
	}

	protected function validatePersistentTokens($persistentTokens) {
		if ( ! $persistentTokens instanceof \com\microsoft\wc\application\AppPersistentTokens  && ! is_null($persistentTokens) ) {
			$persistentTokens = new \com\microsoft\wc\application\AppPersistentTokens ($persistentTokens);
		}
	
		return $persistentTokens;
	}

	public function getAppType() {
		if ($this->appType===NULL) {
			$this->appType = $this->createAppType();
		}
		return $this->appType;
	}
	
	protected function createAppType() {
		return new \com\microsoft\wc\types\Stringnz();
	}

	public function setAppType($appType) {
		$this->appType = $this->validateAppType($appType);
	}

	protected function validateAppType($appType) {
		if ( ! $appType instanceof \com\microsoft\wc\types\Stringnz  && ! is_null($appType) ) {
			$appType = new \com\microsoft\wc\types\Stringnz ($appType);
		}
	
		return $appType;
	}

	public function getPrivacyStatement() {
		if ($this->privacyStatement===NULL) {
			$this->privacyStatement = $this->createPrivacyStatement();
		}
		return $this->privacyStatement;
	}
	
	protected function createPrivacyStatement() {
		return new \com\microsoft\wc\application\StatementInfo();
	}

	public function setPrivacyStatement($privacyStatement) {
		$this->privacyStatement = $this->validatePrivacyStatement($privacyStatement);
	}

	protected function validatePrivacyStatement($privacyStatement) {
		if ( ! $privacyStatement instanceof \com\microsoft\wc\application\StatementInfo  && ! is_null($privacyStatement) ) {
			$privacyStatement = new \com\microsoft\wc\application\StatementInfo ($privacyStatement);
		}
	
		return $privacyStatement;
	}

	public function getTermsOfUse() {
		if ($this->termsOfUse===NULL) {
			$this->termsOfUse = $this->createTermsOfUse();
		}
		return $this->termsOfUse;
	}
	
	protected function createTermsOfUse() {
		return new \com\microsoft\wc\application\StatementInfo();
	}

	public function setTermsOfUse($termsOfUse) {
		$this->termsOfUse = $this->validateTermsOfUse($termsOfUse);
	}

	protected function validateTermsOfUse($termsOfUse) {
		if ( ! $termsOfUse instanceof \com\microsoft\wc\application\StatementInfo  && ! is_null($termsOfUse) ) {
			$termsOfUse = new \com\microsoft\wc\application\StatementInfo ($termsOfUse);
		}
	
		return $termsOfUse;
	}

	public function getAppAuthRequired() {
		if ($this->appAuthRequired===NULL) {
			$this->appAuthRequired = $this->createAppAuthRequired();
		}
		return $this->appAuthRequired;
	}
	
	protected function createAppAuthRequired() {
		return FALSE;
	}

	public function setAppAuthRequired($appAuthRequired) {
		$this->appAuthRequired = $this->validateAppAuthRequired($appAuthRequired);
	}

	protected function validateAppAuthRequired($appAuthRequired) {
		if ( ! is_bool($appAuthRequired) && ! is_null($appAuthRequired) ) {
			throw new \Exception(sprintf('Supplied %s value was not %s', 'appAuthRequired', 'boolean'));
		}
	
		return $appAuthRequired;
	}

	public function getIsPublished() {
		if ($this->isPublished===NULL) {
			$this->isPublished = $this->createIsPublished();
		}
		return $this->isPublished;
	}
	
	protected function createIsPublished() {
		return FALSE;
	}

	public function setIsPublished($isPublished) {
		$this->isPublished = $this->validateIsPublished($isPublished);
	}

	protected function validateIsPublished($isPublished) {
		if ( ! is_bool($isPublished) && ! is_null($isPublished) ) {
			throw new \Exception(sprintf('Supplied %s value was not %s', 'isPublished', 'boolean'));
		}
	
		return $isPublished;
	}

	public function getDtcSuccessMessage() {
		if ($this->dtcSuccessMessage===NULL) {
			$this->dtcSuccessMessage = $this->createDtcSuccessMessage();
		}
		return $this->dtcSuccessMessage;
	}
	
	protected function createDtcSuccessMessage() {
		return new \com\microsoft\wc\application\StatementInfo();
	}

	public function setDtcSuccessMessage($dtcSuccessMessage) {
		$this->dtcSuccessMessage = $this->validateDtcSuccessMessage($dtcSuccessMessage);
	}

	protected function validateDtcSuccessMessage($dtcSuccessMessage) {
		if ( ! $dtcSuccessMessage instanceof \com\microsoft\wc\application\StatementInfo  && ! is_null($dtcSuccessMessage) ) {
			$dtcSuccessMessage = new \com\microsoft\wc\application\StatementInfo ($dtcSuccessMessage);
		}
	
		return $dtcSuccessMessage;
	}

	public function getAppAttributes() {
		if ($this->appAttributes===NULL) {
			$this->appAttributes = $this->createAppAttributes();
		}
		return $this->appAttributes;
	}
	
	protected function createAppAttributes() {
		return new \com\microsoft\wc\application\ApplicationAttributes();
	}

	public function setAppAttributes($appAttributes) {
		$this->appAttributes = $this->validateAppAttributes($appAttributes);
	}

	protected function validateAppAttributes($appAttributes) {
		if ( ! $appAttributes instanceof \com\microsoft\wc\application\ApplicationAttributes  && ! is_null($appAttributes) ) {
			$appAttributes = new \com\microsoft\wc\application\ApplicationAttributes ($appAttributes);
		}
	
		return $appAttributes;
	}

	public function getValidIpPrefixes() {
		if ($this->validIpPrefixes===NULL) {
			$this->validIpPrefixes = $this->createValidIpPrefixes();
		}
		return $this->validIpPrefixes;
	}
	
	protected function createValidIpPrefixes() {
		return new \com\microsoft\wc\types\String255nw();
	}

	public function setValidIpPrefixes($validIpPrefixes) {
		$this->validIpPrefixes = $this->validateValidIpPrefixes($validIpPrefixes);
	}

	protected function validateValidIpPrefixes($validIpPrefixes) {
		if ( ! $validIpPrefixes instanceof \com\microsoft\wc\types\String255nw  && ! is_null($validIpPrefixes) ) {
			$validIpPrefixes = new \com\microsoft\wc\types\String255nw ($validIpPrefixes);
		}
	
		return $validIpPrefixes;
	}

	public function getVocabularyAuthorizations() {
		if ($this->vocabularyAuthorizations===NULL) {
			$this->vocabularyAuthorizations = $this->createVocabularyAuthorizations();
		}
		return $this->vocabularyAuthorizations;
	}
	
	protected function createVocabularyAuthorizations() {
		return new \com\microsoft\wc\vocab\VocabularyAuthorizations();
	}

	public function setVocabularyAuthorizations($vocabularyAuthorizations) {
		$this->vocabularyAuthorizations = $this->validateVocabularyAuthorizations($vocabularyAuthorizations);
	}

	protected function validateVocabularyAuthorizations($vocabularyAuthorizations) {
		if ( ! $vocabularyAuthorizations instanceof \com\microsoft\wc\vocab\VocabularyAuthorizations  && ! is_null($vocabularyAuthorizations) ) {
			$vocabularyAuthorizations = new \com\microsoft\wc\vocab\VocabularyAuthorizations ($vocabularyAuthorizations);
		}
	
		return $vocabularyAuthorizations;
	}
} // end class Info
