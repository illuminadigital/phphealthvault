<?php
namespace com\microsoft\wc\application;



/**
 * @XmlEntity	(xml="AppWithLogos")
 */
class AppWithLogos {
	/**
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
	 * @XmlText	(type="boolean", name="app-auth-required")
	 */
	protected $appAuthRequired;

	/**
	 * @XmlText	(type="boolean", name="is-published")
	 */
	protected $isPublished;

	/**
	 * @XmlText	(type="string", name="action-url")
	 */
	protected $actionUrl;

	/**
	 * @XmlElement	(type="\com\microsoft\wc\types\CultureSpecificString", collection="true", name="description")
	 */
	protected $description;

	/**
	 * @XmlElement	(type="\com\microsoft\wc\types\CultureSpecificString", collection="true", name="auth-reason")
	 */
	protected $authReason;

	/**
	 * @XmlElement	(type="\com\microsoft\wc\types\String255", name="domain-name")
	 */
	protected $domainName;

	/**
	 * @XmlElement	(type="\com\microsoft\wc\types\Guid", name="client-service-token")
	 */
	protected $clientServiceToken;

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
	 * @XmlElement	(type="\com\microsoft\wc\auth\AuthXml", name="person-online-base-auth-xml")
	 */
	protected $personOnlineBaseAuthXml;

	/**
	 * @XmlElement	(type="\com\microsoft\wc\auth\AuthXml", name="person-offline-base-auth-xml")
	 */
	protected $personOfflineBaseAuthXml;

	/**
	 * @XmlElement	(type="\com\microsoft\wc\application\StatementInfo", name="privacy-statement")
	 */
	protected $privacyStatement;

	/**
	 * @XmlElement	(type="\com\microsoft\wc\application\StatementInfo", name="terms-of-use")
	 */
	protected $termsOfUse;

	/**
	 * @XmlElement	(type="\com\microsoft\wc\application\StatementInfo", name="dtc-success-message")
	 */
	protected $dtcSuccessMessage;

	/**
	 * @XmlElement	(type="\com\microsoft\wc\application\ApplicationAttributes", name="app-attributes")
	 */
	protected $appAttributes;

	/**
	 * @XmlElement	(type="\com\microsoft\wc\types\String32", name="app-type")
	 */
	protected $appType;

	/**
	 * @XmlElement	(type="\com\microsoft\wc\types\Guid", name="master-app-id")
	 */
	protected $masterAppId;

	/**
	 * @XmlElement	(type="\com\microsoft\wc\types\CultureSpecificString255", name="master-app-name")
	 */
	protected $masterAppName;

	/**
	 * @XmlText	(type="string", name="created-date")
	 */
	protected $createdDate;

	/**
	 * @XmlText	(type="string", name="updated-date")
	 */
	protected $updatedDate;

	/**
	 * @XmlElement	(type="\com\microsoft\wc\types\String255nw", name="valid-ip-prefixes")
	 */
	protected $validIpPrefixes;

	/**
	 * @XmlElement	(type="\com\microsoft\wc\vocab\VocabularyAuthorizations", name="vocabulary-authorizations")
	 */
	protected $vocabularyAuthorizations;

	/**
	 * @XmlElement	(type="\com\microsoft\wc\vocab\VocabularyAuthorizations", name="child-vocabulary-authorizations-ceiling")
	 */
	protected $childVocabularyAuthorizationsCeiling;

	/**
	 * @XmlElement	(type="\com\microsoft\wc\types\Stringnz", name="methods")
	 */
	protected $methods;

	public function __construct($id = NULL, $name = NULL, $appAuthRequired = NULL, $isPublished = NULL, $actionUrl = NULL, $description = NULL, $authReason = NULL, $domainName = NULL, $clientServiceToken = NULL, $largeLogo = NULL, $smallLogo = NULL, $persistentTokens = NULL, $personOnlineBaseAuthXml = NULL, $personOfflineBaseAuthXml = NULL, $privacyStatement = NULL, $termsOfUse = NULL, $dtcSuccessMessage = NULL, $appAttributes = NULL, $appType = NULL, $masterAppId = NULL, $masterAppName = NULL, $createdDate = NULL, $updatedDate = NULL, $validIpPrefixes = NULL, $vocabularyAuthorizations = NULL, $childVocabularyAuthorizationsCeiling = NULL, $methods = NULL) {
		$this->id = ($id===NULL) ? NULL : $this->validateId($id);
		$this->name = ($name===NULL) ? NULL : $this->validateName($name);
		$this->appAuthRequired = ($appAuthRequired===NULL) ? NULL : $this->validateAppAuthRequired($appAuthRequired);
		$this->isPublished = ($isPublished===NULL) ? NULL : $this->validateIsPublished($isPublished);
		$this->actionUrl = ($actionUrl===NULL) ? NULL : $this->validateActionUrl($actionUrl);
		$this->description = ($description===NULL) ? NULL : $this->validateDescription($description);
		$this->authReason = ($authReason===NULL) ? NULL : $this->validateAuthReason($authReason);
		$this->domainName = ($domainName===NULL) ? NULL : $this->validateDomainName($domainName);
		$this->clientServiceToken = ($clientServiceToken===NULL) ? NULL : $this->validateClientServiceToken($clientServiceToken);
		$this->largeLogo = ($largeLogo===NULL) ? NULL : $this->validateLargeLogo($largeLogo);
		$this->smallLogo = ($smallLogo===NULL) ? NULL : $this->validateSmallLogo($smallLogo);
		$this->persistentTokens = ($persistentTokens===NULL) ? NULL : $this->validatePersistentTokens($persistentTokens);
		$this->personOnlineBaseAuthXml = ($personOnlineBaseAuthXml===NULL) ? NULL : $this->validatePersonOnlineBaseAuthXml($personOnlineBaseAuthXml);
		$this->personOfflineBaseAuthXml = ($personOfflineBaseAuthXml===NULL) ? NULL : $this->validatePersonOfflineBaseAuthXml($personOfflineBaseAuthXml);
		$this->privacyStatement = ($privacyStatement===NULL) ? NULL : $this->validatePrivacyStatement($privacyStatement);
		$this->termsOfUse = ($termsOfUse===NULL) ? NULL : $this->validateTermsOfUse($termsOfUse);
		$this->dtcSuccessMessage = ($dtcSuccessMessage===NULL) ? NULL : $this->validateDtcSuccessMessage($dtcSuccessMessage);
		$this->appAttributes = ($appAttributes===NULL) ? NULL : $this->validateAppAttributes($appAttributes);
		$this->appType = ($appType===NULL) ? NULL : $this->validateAppType($appType);
		$this->masterAppId = ($masterAppId===NULL) ? NULL : $this->validateMasterAppId($masterAppId);
		$this->masterAppName = ($masterAppName===NULL) ? NULL : $this->validateMasterAppName($masterAppName);
		$this->createdDate = ($createdDate===NULL) ? NULL : $this->validateCreatedDate($createdDate);
		$this->updatedDate = ($updatedDate===NULL) ? NULL : $this->validateUpdatedDate($updatedDate);
		$this->validIpPrefixes = ($validIpPrefixes===NULL) ? NULL : $this->validateValidIpPrefixes($validIpPrefixes);
		$this->vocabularyAuthorizations = ($vocabularyAuthorizations===NULL) ? NULL : $this->validateVocabularyAuthorizations($vocabularyAuthorizations);
		$this->childVocabularyAuthorizationsCeiling = ($childVocabularyAuthorizationsCeiling===NULL) ? NULL : $this->validateChildVocabularyAuthorizationsCeiling($childVocabularyAuthorizationsCeiling);
		$this->methods = ($methods===NULL) ? NULL : $this->validateMethods($methods);
	}

	public function getId() {
		if ($this->id===NULL) {
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

	public function getActionUrl() {
		if ($this->actionUrl===NULL) {
			$this->actionUrl = $this->createActionUrl();
		}
		return $this->actionUrl;
	}
	
	protected function createActionUrl() {
		return '';
	}

	public function setActionUrl($actionUrl) {
		$this->actionUrl = $this->validateActionUrl($actionUrl);
	}

	protected function validateActionUrl($actionUrl) {
		if ( ! is_string($actionUrl) && ! is_null($actionUrl) ) {
			throw new \Exception(sprintf('Supplied %s value was not %s', 'actionUrl', 'string'));
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
		if ( ! $description instanceof \com\microsoft\wc\types\CultureSpecificString  && ! is_null($description) ) {
			$description = new \com\microsoft\wc\types\CultureSpecificString ($description);
		}
		$count = count($description);
		if ($count < 0) {
			throw new \Exception(sprintf('Supplied %s array has less than the required number (%d) of entries.', 'description', 0));
		}
		foreach ($description as $entry) {
			if (!($entry instanceof CultureSpecificString)) {
				throw new \Exception(sprintf('Supplied %s value was not %s', 'description', 'CultureSpecificString'));
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
		if ( ! $authReason instanceof \com\microsoft\wc\types\CultureSpecificString  && ! is_null($authReason) ) {
			$authReason = new \com\microsoft\wc\types\CultureSpecificString ($authReason);
		}
		$count = count($authReason);
		if ($count < 0) {
			throw new \Exception(sprintf('Supplied %s array has less than the required number (%d) of entries.', 'authReason', 0));
		}
		foreach ($authReason as $entry) {
			if (!($entry instanceof CultureSpecificString)) {
				throw new \Exception(sprintf('Supplied %s value was not %s', 'authReason', 'CultureSpecificString'));
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

	public function getClientServiceToken() {
		if ($this->clientServiceToken===NULL) {
			$this->clientServiceToken = $this->createClientServiceToken();
		}
		return $this->clientServiceToken;
	}
	
	protected function createClientServiceToken() {
		return new \com\microsoft\wc\types\Guid();
	}

	public function setClientServiceToken($clientServiceToken) {
		$this->clientServiceToken = $this->validateClientServiceToken($clientServiceToken);
	}

	protected function validateClientServiceToken($clientServiceToken) {
		if ( ! $clientServiceToken instanceof \com\microsoft\wc\types\Guid  && ! is_null($clientServiceToken) ) {
			$clientServiceToken = new \com\microsoft\wc\types\Guid ($clientServiceToken);
		}
	
		return $clientServiceToken;
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
		if ( ! $largeLogo instanceof \com\microsoft\wc\application\AppLargeLogoInfo  && ! is_null($largeLogo) ) {
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

	public function getPersonOnlineBaseAuthXml() {
		if ($this->personOnlineBaseAuthXml===NULL) {
			$this->personOnlineBaseAuthXml = $this->createPersonOnlineBaseAuthXml();
		}
		return $this->personOnlineBaseAuthXml;
	}
	
	protected function createPersonOnlineBaseAuthXml() {
		return new \com\microsoft\wc\auth\AuthXml();
	}

	public function setPersonOnlineBaseAuthXml($personOnlineBaseAuthXml) {
		$this->personOnlineBaseAuthXml = $this->validatePersonOnlineBaseAuthXml($personOnlineBaseAuthXml);
	}

	protected function validatePersonOnlineBaseAuthXml($personOnlineBaseAuthXml) {
		if ( ! $personOnlineBaseAuthXml instanceof \com\microsoft\wc\auth\AuthXml ) {
			$personOnlineBaseAuthXml = new \com\microsoft\wc\auth\AuthXml ($personOnlineBaseAuthXml);
		}
	
		return $personOnlineBaseAuthXml;
	}

	public function getPersonOfflineBaseAuthXml() {
		if ($this->personOfflineBaseAuthXml===NULL) {
			$this->personOfflineBaseAuthXml = $this->createPersonOfflineBaseAuthXml();
		}
		return $this->personOfflineBaseAuthXml;
	}
	
	protected function createPersonOfflineBaseAuthXml() {
		return new \com\microsoft\wc\auth\AuthXml();
	}

	public function setPersonOfflineBaseAuthXml($personOfflineBaseAuthXml) {
		$this->personOfflineBaseAuthXml = $this->validatePersonOfflineBaseAuthXml($personOfflineBaseAuthXml);
	}

	protected function validatePersonOfflineBaseAuthXml($personOfflineBaseAuthXml) {
		if ( ! $personOfflineBaseAuthXml instanceof \com\microsoft\wc\auth\AuthXml  && ! is_null($personOfflineBaseAuthXml) ) {
			$personOfflineBaseAuthXml = new \com\microsoft\wc\auth\AuthXml ($personOfflineBaseAuthXml);
		}
	
		return $personOfflineBaseAuthXml;
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

	public function getAppType() {
		if ($this->appType===NULL) {
			$this->appType = $this->createAppType();
		}
		return $this->appType;
	}
	
	protected function createAppType() {
		return new \com\microsoft\wc\types\String32();
	}

	public function setAppType($appType) {
		$this->appType = $this->validateAppType($appType);
	}

	protected function validateAppType($appType) {
		if ( ! $appType instanceof \com\microsoft\wc\types\String32 ) {
			$appType = new \com\microsoft\wc\types\String32 ($appType);
		}
	
		return $appType;
	}

	public function getMasterAppId() {
		if ($this->masterAppId===NULL) {
			$this->masterAppId = $this->createMasterAppId();
		}
		return $this->masterAppId;
	}
	
	protected function createMasterAppId() {
		return new \com\microsoft\wc\types\Guid();
	}

	public function setMasterAppId($masterAppId) {
		$this->masterAppId = $this->validateMasterAppId($masterAppId);
	}

	protected function validateMasterAppId($masterAppId) {
		if ( ! $masterAppId instanceof \com\microsoft\wc\types\Guid  && ! is_null($masterAppId) ) {
			$masterAppId = new \com\microsoft\wc\types\Guid ($masterAppId);
		}
	
		return $masterAppId;
	}

	public function getMasterAppName() {
		if ($this->masterAppName===NULL) {
			$this->masterAppName = $this->createMasterAppName();
		}
		return $this->masterAppName;
	}
	
	protected function createMasterAppName() {
		return new \com\microsoft\wc\types\CultureSpecificString255();
	}

	public function setMasterAppName($masterAppName) {
		$this->masterAppName = $this->validateMasterAppName($masterAppName);
	}

	protected function validateMasterAppName($masterAppName) {
		if ( ! $masterAppName instanceof \com\microsoft\wc\types\CultureSpecificString255  && ! is_null($masterAppName) ) {
			$masterAppName = new \com\microsoft\wc\types\CultureSpecificString255 ($masterAppName);
		}
	
		return $masterAppName;
	}

	public function getCreatedDate() {
		if ($this->createdDate===NULL) {
			$this->createdDate = $this->createCreatedDate();
		}
		return $this->createdDate;
	}
	
	protected function createCreatedDate() {
		return NULL;
	}

	public function setCreatedDate($createdDate) {
		$this->createdDate = $this->validateCreatedDate($createdDate);
	}

	protected function validateCreatedDate($createdDate) {
		if ( ! is_string($createdDate) && ! is_null($createdDate) ) {
			throw new \Exception(sprintf('Supplied %s value was not %s', 'createdDate', 'string'));
		}
	
		return $createdDate;
	}

	public function getUpdatedDate() {
		if ($this->updatedDate===NULL) {
			$this->updatedDate = $this->createUpdatedDate();
		}
		return $this->updatedDate;
	}
	
	protected function createUpdatedDate() {
		return NULL;
	}

	public function setUpdatedDate($updatedDate) {
		$this->updatedDate = $this->validateUpdatedDate($updatedDate);
	}

	protected function validateUpdatedDate($updatedDate) {
		if ( ! is_string($updatedDate) && ! is_null($updatedDate) ) {
			throw new \Exception(sprintf('Supplied %s value was not %s', 'updatedDate', 'string'));
		}
	
		return $updatedDate;
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

	public function getChildVocabularyAuthorizationsCeiling() {
		if ($this->childVocabularyAuthorizationsCeiling===NULL) {
			$this->childVocabularyAuthorizationsCeiling = $this->createChildVocabularyAuthorizationsCeiling();
		}
		return $this->childVocabularyAuthorizationsCeiling;
	}
	
	protected function createChildVocabularyAuthorizationsCeiling() {
		return new \com\microsoft\wc\vocab\VocabularyAuthorizations();
	}

	public function setChildVocabularyAuthorizationsCeiling($childVocabularyAuthorizationsCeiling) {
		$this->childVocabularyAuthorizationsCeiling = $this->validateChildVocabularyAuthorizationsCeiling($childVocabularyAuthorizationsCeiling);
	}

	protected function validateChildVocabularyAuthorizationsCeiling($childVocabularyAuthorizationsCeiling) {
		if ( ! $childVocabularyAuthorizationsCeiling instanceof \com\microsoft\wc\vocab\VocabularyAuthorizations  && ! is_null($childVocabularyAuthorizationsCeiling) ) {
			$childVocabularyAuthorizationsCeiling = new \com\microsoft\wc\vocab\VocabularyAuthorizations ($childVocabularyAuthorizationsCeiling);
		}
	
		return $childVocabularyAuthorizationsCeiling;
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
} // end class AppWithLogos
