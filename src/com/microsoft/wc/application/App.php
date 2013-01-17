<?php
namespace com\microsoft\wc\application;



/**
 * @XmlNamespaces ({
 *	@XmlNamespace(url="urn:com.microsoft.wc.application", prefix="wc-app")
 * })
 * @XmlEntity	(xml="App")
 */
class App {
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
	 * @XmlElement	(type="\com\microsoft\wc\application\AppPersistentTokens", name="persistent-tokens")
	 */
	protected $persistentTokens;

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

	public function __construct($id = NULL, $name = NULL, $appAuthRequired = NULL, $isPublished = NULL, $actionUrl = NULL, $description = NULL, $authReason = NULL, $domainName = NULL, $clientServiceToken = NULL, $persistentTokens = NULL, $privacyStatement = NULL, $termsOfUse = NULL, $dtcSuccessMessage = NULL, $appAttributes = NULL, $appType = NULL, $masterAppId = NULL, $masterAppName = NULL, $createdDate = NULL, $updatedDate = NULL) {
		$this->id = ($id===NULL) ? NULL : $this->validateId($id);
		$this->name = ($name===NULL) ? NULL : $this->validateName($name);
		$this->appAuthRequired = ($appAuthRequired===NULL) ? NULL : $this->validateAppAuthRequired($appAuthRequired);
		$this->isPublished = ($isPublished===NULL) ? NULL : $this->validateIsPublished($isPublished);
		$this->actionUrl = ($actionUrl===NULL) ? NULL : $this->validateActionUrl($actionUrl);
		$this->description = ($description===NULL) ? NULL : $this->validateDescription($description);
		$this->authReason = ($authReason===NULL) ? NULL : $this->validateAuthReason($authReason);
		$this->domainName = ($domainName===NULL) ? NULL : $this->validateDomainName($domainName);
		$this->clientServiceToken = ($clientServiceToken===NULL) ? NULL : $this->validateClientServiceToken($clientServiceToken);
		$this->persistentTokens = ($persistentTokens===NULL) ? NULL : $this->validatePersistentTokens($persistentTokens);
		$this->privacyStatement = ($privacyStatement===NULL) ? NULL : $this->validatePrivacyStatement($privacyStatement);
		$this->termsOfUse = ($termsOfUse===NULL) ? NULL : $this->validateTermsOfUse($termsOfUse);
		$this->dtcSuccessMessage = ($dtcSuccessMessage===NULL) ? NULL : $this->validateDtcSuccessMessage($dtcSuccessMessage);
		$this->appAttributes = ($appAttributes===NULL) ? NULL : $this->validateAppAttributes($appAttributes);
		$this->appType = ($appType===NULL) ? NULL : $this->validateAppType($appType);
		$this->masterAppId = ($masterAppId===NULL) ? NULL : $this->validateMasterAppId($masterAppId);
		$this->masterAppName = ($masterAppName===NULL) ? NULL : $this->validateMasterAppName($masterAppName);
		$this->createdDate = ($createdDate===NULL) ? NULL : $this->validateCreatedDate($createdDate);
		$this->updatedDate = ($updatedDate===NULL) ? NULL : $this->validateUpdatedDate($updatedDate);
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
		if ( ! $name instanceof \com\microsoft\wc\types\CultureSpecificString255  && ! is_null($name) ) {
			$name = new \com\microsoft\wc\types\CultureSpecificString255 ($name);
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
} // end class App
