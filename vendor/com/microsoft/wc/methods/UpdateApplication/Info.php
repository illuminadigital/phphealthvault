<?php
namespace com\microsoft\wc\methods\UpdateApplication;

use com\microsoft\wc\types\Guid;
use com\microsoft\wc\application\PublicKeys;
use com\microsoft\wc\auth\AuthXml;
use com\microsoft\wc\types\Stringnz;
use com\microsoft\wc\types\String255;
use com\microsoft\wc\application\AppLargeLogoInfo;
use com\microsoft\wc\application\AppSmallLogoInfo;
use com\microsoft\wc\application\AppPersistentTokens;
use com\microsoft\wc\application\StatementInfo;
use com\microsoft\wc\application\ApplicationAttributes;
use com\microsoft\wc\types\String255nw;
use com\microsoft\wc\vocab\VocabularyAuthorizations;
use com\microsoft\wc\types\CultureSpecificString255;
use com\microsoft\wc\types\CultureSpecificStringnz;

/**
 * @XmlNamespaces ({
 *	@XmlNamespace(url="urn:com.microsoft.wc.methods.UpdateApplication", prefix="")
 * })
 * @XmlEntity	(xml="info")
 */
class Info extends \com\microsoft\wc\request\Info {
	/**
	 * The element of the response that contains the method specific return value(s).
	 * All response schemas contain the info element which contain the return value of the method. If the method does not define an info element, the method has no return value.
	 */

	/**
	 * @XmlElement	(type="\com\microsoft\wc\types\Guid", name="id")
	 */
	protected $id;

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

	public function __construct($id = NULL, $name = NULL, $publicKeys = NULL, $personOnlineBaseAuth = NULL, $personOfflineBaseAuth = NULL, $methods = NULL, $actionUrl = NULL, $description = NULL, $authReason = NULL, $domainName = NULL, $largeLogo = NULL, $smallLogo = NULL, $persistentTokens = NULL, $appType = NULL, $privacyStatement = NULL, $termsOfUse = NULL, $appAuthRequired = NULL, $isPublished = NULL, $dtcSuccessMessage = NULL, $appAttributes = NULL, $validIpPrefixes = NULL, $vocabularyAuthorizations = NULL) {
		$this->id = ($id===NULL) ? NULL : $this->validateId($id);
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

	public function getId() {
		if ($this->id===NULL) {
			$this->id = $this->createId();
		}
		return $this->id;
	}
	
	protected function createId() {
		return new Guid();
	}

	public function setId($id) {
		$this->id = $this->validateId($id);
	}

	protected function validateId($id) {
		if ( ! $id instanceof Guid ) {
			$id = new Guid ($id);
		}
	
		return $id;
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
		if ( ! $name instanceof CultureSpecificString255 ) {
			$name = new CultureSpecificString255 ($name);
		}
		$count = count($name);
		if ($count < 0) {
			throw new \Exception(sprintf('Supplied %s array has less than the required number (%d) of entries.', 'name', 0));
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
		return new PublicKeys();
	}

	public function setPublicKeys($publicKeys) {
		$this->publicKeys = $this->validatePublicKeys($publicKeys);
	}

	protected function validatePublicKeys($publicKeys) {
		if ( ! $publicKeys instanceof PublicKeys ) {
			$publicKeys = new PublicKeys ($publicKeys);
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
		return new AuthXml();
	}

	public function setPersonOnlineBaseAuth($personOnlineBaseAuth) {
		$this->personOnlineBaseAuth = $this->validatePersonOnlineBaseAuth($personOnlineBaseAuth);
	}

	protected function validatePersonOnlineBaseAuth($personOnlineBaseAuth) {
		if ( ! $personOnlineBaseAuth instanceof AuthXml ) {
			$personOnlineBaseAuth = new AuthXml ($personOnlineBaseAuth);
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
		return new AuthXml();
	}

	public function setPersonOfflineBaseAuth($personOfflineBaseAuth) {
		$this->personOfflineBaseAuth = $this->validatePersonOfflineBaseAuth($personOfflineBaseAuth);
	}

	protected function validatePersonOfflineBaseAuth($personOfflineBaseAuth) {
		if ( ! $personOfflineBaseAuth instanceof AuthXml ) {
			$personOfflineBaseAuth = new AuthXml ($personOfflineBaseAuth);
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
		return new Stringnz();
	}

	public function setMethods($methods) {
		$this->methods = $this->validateMethods($methods);
	}

	protected function validateMethods($methods) {
		if ( ! $methods instanceof Stringnz ) {
			$methods = new Stringnz ($methods);
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
		return new Stringnz();
	}

	public function setActionUrl($actionUrl) {
		$this->actionUrl = $this->validateActionUrl($actionUrl);
	}

	protected function validateActionUrl($actionUrl) {
		if ( ! $actionUrl instanceof Stringnz ) {
			$actionUrl = new Stringnz ($actionUrl);
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
		if ( ! $description instanceof CultureSpecificStringnz ) {
			$description = new CultureSpecificStringnz ($description);
		}
		$count = count($description);
		if ($count < 0) {
			throw new \Exception(sprintf('Supplied %s array has less than the required number (%d) of entries.', 'description', 0));
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
		if ( ! $authReason instanceof CultureSpecificStringnz ) {
			$authReason = new CultureSpecificStringnz ($authReason);
		}
		$count = count($authReason);
		if ($count < 0) {
			throw new \Exception(sprintf('Supplied %s array has less than the required number (%d) of entries.', 'authReason', 0));
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
		return new String255();
	}

	public function setDomainName($domainName) {
		$this->domainName = $this->validateDomainName($domainName);
	}

	protected function validateDomainName($domainName) {
		if ( ! $domainName instanceof String255 ) {
			$domainName = new String255 ($domainName);
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
		return new AppLargeLogoInfo();
	}

	public function setLargeLogo($largeLogo) {
		$this->largeLogo = $this->validateLargeLogo($largeLogo);
	}

	protected function validateLargeLogo($largeLogo) {
		if ( ! $largeLogo instanceof AppLargeLogoInfo ) {
			$largeLogo = new AppLargeLogoInfo ($largeLogo);
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
		return new AppSmallLogoInfo();
	}

	public function setSmallLogo($smallLogo) {
		$this->smallLogo = $this->validateSmallLogo($smallLogo);
	}

	protected function validateSmallLogo($smallLogo) {
		if ( ! $smallLogo instanceof AppSmallLogoInfo ) {
			$smallLogo = new AppSmallLogoInfo ($smallLogo);
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
		return new AppPersistentTokens();
	}

	public function setPersistentTokens($persistentTokens) {
		$this->persistentTokens = $this->validatePersistentTokens($persistentTokens);
	}

	protected function validatePersistentTokens($persistentTokens) {
		if ( ! $persistentTokens instanceof AppPersistentTokens ) {
			$persistentTokens = new AppPersistentTokens ($persistentTokens);
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
		return new Stringnz();
	}

	public function setAppType($appType) {
		$this->appType = $this->validateAppType($appType);
	}

	protected function validateAppType($appType) {
		if ( ! $appType instanceof Stringnz ) {
			$appType = new Stringnz ($appType);
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
		return new StatementInfo();
	}

	public function setPrivacyStatement($privacyStatement) {
		$this->privacyStatement = $this->validatePrivacyStatement($privacyStatement);
	}

	protected function validatePrivacyStatement($privacyStatement) {
		if ( ! $privacyStatement instanceof StatementInfo ) {
			$privacyStatement = new StatementInfo ($privacyStatement);
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
		return new StatementInfo();
	}

	public function setTermsOfUse($termsOfUse) {
		$this->termsOfUse = $this->validateTermsOfUse($termsOfUse);
	}

	protected function validateTermsOfUse($termsOfUse) {
		if ( ! $termsOfUse instanceof StatementInfo ) {
			$termsOfUse = new StatementInfo ($termsOfUse);
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
		if (!is_bool($appAuthRequired)) {
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
		if (!is_bool($isPublished)) {
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
		return new StatementInfo();
	}

	public function setDtcSuccessMessage($dtcSuccessMessage) {
		$this->dtcSuccessMessage = $this->validateDtcSuccessMessage($dtcSuccessMessage);
	}

	protected function validateDtcSuccessMessage($dtcSuccessMessage) {
		if ( ! $dtcSuccessMessage instanceof StatementInfo ) {
			$dtcSuccessMessage = new StatementInfo ($dtcSuccessMessage);
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
		return new ApplicationAttributes();
	}

	public function setAppAttributes($appAttributes) {
		$this->appAttributes = $this->validateAppAttributes($appAttributes);
	}

	protected function validateAppAttributes($appAttributes) {
		if ( ! $appAttributes instanceof ApplicationAttributes ) {
			$appAttributes = new ApplicationAttributes ($appAttributes);
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
		return new String255nw();
	}

	public function setValidIpPrefixes($validIpPrefixes) {
		$this->validIpPrefixes = $this->validateValidIpPrefixes($validIpPrefixes);
	}

	protected function validateValidIpPrefixes($validIpPrefixes) {
		if ( ! $validIpPrefixes instanceof String255nw ) {
			$validIpPrefixes = new String255nw ($validIpPrefixes);
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
		return new VocabularyAuthorizations();
	}

	public function setVocabularyAuthorizations($vocabularyAuthorizations) {
		$this->vocabularyAuthorizations = $this->validateVocabularyAuthorizations($vocabularyAuthorizations);
	}

	protected function validateVocabularyAuthorizations($vocabularyAuthorizations) {
		if ( ! $vocabularyAuthorizations instanceof VocabularyAuthorizations ) {
			$vocabularyAuthorizations = new VocabularyAuthorizations ($vocabularyAuthorizations);
		}
	
		return $vocabularyAuthorizations;
	}
} // end class Info
