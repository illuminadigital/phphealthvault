<?php
namespace com\microsoft\wc\methods\UpdateApplication;



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
	 * List of manually overridden properties that should not be re-generated automatically
	 * @var array
	 */
	protected $_overrides = array();


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

	public function getId($autoCreate = TRUE) {
		if ($this->id===NULL && $autoCreate && ! isset($this->_overrides['id']) ) {
			$this->id = $this->createId();
		}
		return $this->id;
	}
	
	protected function createId() {
		return new \com\microsoft\wc\types\Guid();
	}

	public function setId($id) {
		$this->id = $this->validateId($id);
	}

	protected function validateId($id) {
		if ( ! $id instanceof \com\microsoft\wc\types\Guid ) {
			$id = new \com\microsoft\wc\types\Guid ($id);
		}
	
		return $id;
	}

	public function getName($autoCreate = TRUE) {
		if ($this->name===NULL && $autoCreate && ! isset($this->_overrides['name']) ) {
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
		if ( $name === FALSE ) {
			$this->_overrides['name'] = TRUE;
			return NULL;
		}

		if ( ! is_array ($name) && ! is_null($name) ) {
			$name = array($name);
		}

		unset ($this->_overrides['name']);
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

	public function getPublicKeys($autoCreate = TRUE) {
		if ($this->publicKeys===NULL && $autoCreate && ! isset($this->_overrides['publicKeys']) ) {
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
		if ( $publicKeys === FALSE ) {
			$this->_overrides['publicKeys'] = TRUE;
			return NULL;
		}

		if ( ! $publicKeys instanceof \com\microsoft\wc\application\PublicKeys  && ! is_null($publicKeys) ) {
			$publicKeys = new \com\microsoft\wc\application\PublicKeys ($publicKeys);
		}

		unset ($this->_overrides['publicKeys']);
	
		return $publicKeys;
	}

	public function getPersonOnlineBaseAuth($autoCreate = TRUE) {
		if ($this->personOnlineBaseAuth===NULL && $autoCreate && ! isset($this->_overrides['personOnlineBaseAuth']) ) {
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
		if ( $personOnlineBaseAuth === FALSE ) {
			$this->_overrides['personOnlineBaseAuth'] = TRUE;
			return NULL;
		}

		if ( ! $personOnlineBaseAuth instanceof \com\microsoft\wc\auth\AuthXml  && ! is_null($personOnlineBaseAuth) ) {
			$personOnlineBaseAuth = new \com\microsoft\wc\auth\AuthXml ($personOnlineBaseAuth);
		}

		unset ($this->_overrides['personOnlineBaseAuth']);
	
		return $personOnlineBaseAuth;
	}

	public function getPersonOfflineBaseAuth($autoCreate = TRUE) {
		if ($this->personOfflineBaseAuth===NULL && $autoCreate && ! isset($this->_overrides['personOfflineBaseAuth']) ) {
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
		if ( $personOfflineBaseAuth === FALSE ) {
			$this->_overrides['personOfflineBaseAuth'] = TRUE;
			return NULL;
		}

		if ( ! $personOfflineBaseAuth instanceof \com\microsoft\wc\auth\AuthXml  && ! is_null($personOfflineBaseAuth) ) {
			$personOfflineBaseAuth = new \com\microsoft\wc\auth\AuthXml ($personOfflineBaseAuth);
		}

		unset ($this->_overrides['personOfflineBaseAuth']);
	
		return $personOfflineBaseAuth;
	}

	public function getMethods($autoCreate = TRUE) {
		if ($this->methods===NULL && $autoCreate && ! isset($this->_overrides['methods']) ) {
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
		if ( $methods === FALSE ) {
			$this->_overrides['methods'] = TRUE;
			return NULL;
		}

		if ( ! $methods instanceof \com\microsoft\wc\types\Stringnz  && ! is_null($methods) ) {
			$methods = new \com\microsoft\wc\types\Stringnz ($methods);
		}

		unset ($this->_overrides['methods']);
	
		return $methods;
	}

	public function getActionUrl($autoCreate = TRUE) {
		if ($this->actionUrl===NULL && $autoCreate && ! isset($this->_overrides['actionUrl']) ) {
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
		if ( $actionUrl === FALSE ) {
			$this->_overrides['actionUrl'] = TRUE;
			return NULL;
		}

		if ( ! $actionUrl instanceof \com\microsoft\wc\types\Stringnz  && ! is_null($actionUrl) ) {
			$actionUrl = new \com\microsoft\wc\types\Stringnz ($actionUrl);
		}

		unset ($this->_overrides['actionUrl']);
	
		return $actionUrl;
	}

	public function getDescription($autoCreate = TRUE) {
		if ($this->description===NULL && $autoCreate && ! isset($this->_overrides['description']) ) {
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
		if ( $description === FALSE ) {
			$this->_overrides['description'] = TRUE;
			return NULL;
		}

		if ( ! is_array ($description) && ! is_null($description) ) {
			$description = array($description);
		}

		unset ($this->_overrides['description']);
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

	public function getAuthReason($autoCreate = TRUE) {
		if ($this->authReason===NULL && $autoCreate && ! isset($this->_overrides['authReason']) ) {
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
		if ( $authReason === FALSE ) {
			$this->_overrides['authReason'] = TRUE;
			return NULL;
		}

		if ( ! is_array ($authReason) && ! is_null($authReason) ) {
			$authReason = array($authReason);
		}

		unset ($this->_overrides['authReason']);
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

	public function getDomainName($autoCreate = TRUE) {
		if ($this->domainName===NULL && $autoCreate && ! isset($this->_overrides['domainName']) ) {
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
		if ( $domainName === FALSE ) {
			$this->_overrides['domainName'] = TRUE;
			return NULL;
		}

		if ( ! $domainName instanceof \com\microsoft\wc\types\String255  && ! is_null($domainName) ) {
			$domainName = new \com\microsoft\wc\types\String255 ($domainName);
		}

		unset ($this->_overrides['domainName']);
	
		return $domainName;
	}

	public function getLargeLogo($autoCreate = TRUE) {
		if ($this->largeLogo===NULL && $autoCreate && ! isset($this->_overrides['largeLogo']) ) {
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
		if ( $largeLogo === FALSE ) {
			$this->_overrides['largeLogo'] = TRUE;
			return NULL;
		}

		if ( ! $largeLogo instanceof \com\microsoft\wc\application\AppLargeLogoInfo  && ! is_null($largeLogo) ) {
			$largeLogo = new \com\microsoft\wc\application\AppLargeLogoInfo ($largeLogo);
		}

		unset ($this->_overrides['largeLogo']);
	
		return $largeLogo;
	}

	public function getSmallLogo($autoCreate = TRUE) {
		if ($this->smallLogo===NULL && $autoCreate && ! isset($this->_overrides['smallLogo']) ) {
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
		if ( $smallLogo === FALSE ) {
			$this->_overrides['smallLogo'] = TRUE;
			return NULL;
		}

		if ( ! $smallLogo instanceof \com\microsoft\wc\application\AppSmallLogoInfo  && ! is_null($smallLogo) ) {
			$smallLogo = new \com\microsoft\wc\application\AppSmallLogoInfo ($smallLogo);
		}

		unset ($this->_overrides['smallLogo']);
	
		return $smallLogo;
	}

	public function getPersistentTokens($autoCreate = TRUE) {
		if ($this->persistentTokens===NULL && $autoCreate && ! isset($this->_overrides['persistentTokens']) ) {
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
		if ( $persistentTokens === FALSE ) {
			$this->_overrides['persistentTokens'] = TRUE;
			return NULL;
		}

		if ( ! $persistentTokens instanceof \com\microsoft\wc\application\AppPersistentTokens  && ! is_null($persistentTokens) ) {
			$persistentTokens = new \com\microsoft\wc\application\AppPersistentTokens ($persistentTokens);
		}

		unset ($this->_overrides['persistentTokens']);
	
		return $persistentTokens;
	}

	public function getAppType($autoCreate = TRUE) {
		if ($this->appType===NULL && $autoCreate && ! isset($this->_overrides['appType']) ) {
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
		if ( $appType === FALSE ) {
			$this->_overrides['appType'] = TRUE;
			return NULL;
		}

		if ( ! $appType instanceof \com\microsoft\wc\types\Stringnz  && ! is_null($appType) ) {
			$appType = new \com\microsoft\wc\types\Stringnz ($appType);
		}

		unset ($this->_overrides['appType']);
	
		return $appType;
	}

	public function getPrivacyStatement($autoCreate = TRUE) {
		if ($this->privacyStatement===NULL && $autoCreate && ! isset($this->_overrides['privacyStatement']) ) {
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
		if ( $privacyStatement === FALSE ) {
			$this->_overrides['privacyStatement'] = TRUE;
			return NULL;
		}

		if ( ! $privacyStatement instanceof \com\microsoft\wc\application\StatementInfo  && ! is_null($privacyStatement) ) {
			$privacyStatement = new \com\microsoft\wc\application\StatementInfo ($privacyStatement);
		}

		unset ($this->_overrides['privacyStatement']);
	
		return $privacyStatement;
	}

	public function getTermsOfUse($autoCreate = TRUE) {
		if ($this->termsOfUse===NULL && $autoCreate && ! isset($this->_overrides['termsOfUse']) ) {
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
		if ( $termsOfUse === FALSE ) {
			$this->_overrides['termsOfUse'] = TRUE;
			return NULL;
		}

		if ( ! $termsOfUse instanceof \com\microsoft\wc\application\StatementInfo  && ! is_null($termsOfUse) ) {
			$termsOfUse = new \com\microsoft\wc\application\StatementInfo ($termsOfUse);
		}

		unset ($this->_overrides['termsOfUse']);
	
		return $termsOfUse;
	}

	public function getAppAuthRequired($autoCreate = TRUE) {
		if ($this->appAuthRequired===NULL && $autoCreate && ! isset($this->_overrides['appAuthRequired']) ) {
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

	public function getIsPublished($autoCreate = TRUE) {
		if ($this->isPublished===NULL && $autoCreate && ! isset($this->_overrides['isPublished']) ) {
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

	public function getDtcSuccessMessage($autoCreate = TRUE) {
		if ($this->dtcSuccessMessage===NULL && $autoCreate && ! isset($this->_overrides['dtcSuccessMessage']) ) {
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
		if ( $dtcSuccessMessage === FALSE ) {
			$this->_overrides['dtcSuccessMessage'] = TRUE;
			return NULL;
		}

		if ( ! $dtcSuccessMessage instanceof \com\microsoft\wc\application\StatementInfo  && ! is_null($dtcSuccessMessage) ) {
			$dtcSuccessMessage = new \com\microsoft\wc\application\StatementInfo ($dtcSuccessMessage);
		}

		unset ($this->_overrides['dtcSuccessMessage']);
	
		return $dtcSuccessMessage;
	}

	public function getAppAttributes($autoCreate = TRUE) {
		if ($this->appAttributes===NULL && $autoCreate && ! isset($this->_overrides['appAttributes']) ) {
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
		if ( $appAttributes === FALSE ) {
			$this->_overrides['appAttributes'] = TRUE;
			return NULL;
		}

		if ( ! $appAttributes instanceof \com\microsoft\wc\application\ApplicationAttributes  && ! is_null($appAttributes) ) {
			$appAttributes = new \com\microsoft\wc\application\ApplicationAttributes ($appAttributes);
		}

		unset ($this->_overrides['appAttributes']);
	
		return $appAttributes;
	}

	public function getValidIpPrefixes($autoCreate = TRUE) {
		if ($this->validIpPrefixes===NULL && $autoCreate && ! isset($this->_overrides['validIpPrefixes']) ) {
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
		if ( $validIpPrefixes === FALSE ) {
			$this->_overrides['validIpPrefixes'] = TRUE;
			return NULL;
		}

		if ( ! $validIpPrefixes instanceof \com\microsoft\wc\types\String255nw  && ! is_null($validIpPrefixes) ) {
			$validIpPrefixes = new \com\microsoft\wc\types\String255nw ($validIpPrefixes);
		}

		unset ($this->_overrides['validIpPrefixes']);
	
		return $validIpPrefixes;
	}

	public function getVocabularyAuthorizations($autoCreate = TRUE) {
		if ($this->vocabularyAuthorizations===NULL && $autoCreate && ! isset($this->_overrides['vocabularyAuthorizations']) ) {
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
		if ( $vocabularyAuthorizations === FALSE ) {
			$this->_overrides['vocabularyAuthorizations'] = TRUE;
			return NULL;
		}

		if ( ! $vocabularyAuthorizations instanceof \com\microsoft\wc\vocab\VocabularyAuthorizations  && ! is_null($vocabularyAuthorizations) ) {
			$vocabularyAuthorizations = new \com\microsoft\wc\vocab\VocabularyAuthorizations ($vocabularyAuthorizations);
		}

		unset ($this->_overrides['vocabularyAuthorizations']);
	
		return $vocabularyAuthorizations;
	}
} // end class Info
