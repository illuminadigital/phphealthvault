<?php
namespace com\microsoft\wc\record;



/**
 * @XmlEntity	(xml="NonActiveAuthorization")
 */
class NonActiveAuthorization {
	/**
	 */

	/**
	 * @XmlElement	(type="\com\microsoft\wc\types\Guid", name="record-id")
	 */
	protected $recordId;

	/**
	 * @XmlElement	(type="\com\microsoft\wc\types\EmailAddress", name="email-address")
	 */
	protected $emailAddress;

	/**
	 * @XmlText	(type="boolean", name="record-custodian")
	 */
	protected $recordCustodian;

	/**
	 * @XmlElement	(type="\com\microsoft\wc\record\AuthorizedRecordState", name="authorized-record-state")
	 */
	protected $authorizedRecordState;

	/**
	 * @XmlElement	(type="\com\microsoft\wc\types\String255", name="record-display-name")
	 */
	protected $recordDisplayName;

	/**
	 * @XmlText	(type="string", name="date-auth-expires")
	 */
	protected $dateAuthExpires;

	/**
	 * @XmlElement	(type="\com\microsoft\wc\auth\AuthXml", name="auth-xml")
	 */
	protected $authXml;

	/**
	 * @XmlText	(type="integer", name="rel-type")
	 */
	protected $relType;

	/**
	 * @XmlText	(type="string", name="date-auth-created")
	 */
	protected $dateAuthCreated;

	/**
	 * @XmlText	(type="string", name="date-auth-updated")
	 */
	protected $dateAuthUpdated;

	/**
	 * @XmlElement	(type="\com\microsoft\wc\types\String255", name="grantor-name")
	 */
	protected $grantorName;

	/**
	 * @XmlElement	(type="\com\microsoft\wc\types\Guid", name="grantor-person-id")
	 */
	protected $grantorPersonId;

	/**
	 * @XmlElement	(type="\com\microsoft\wc\types\String255", name="grantee-name")
	 */
	protected $granteeName;

	/**
	 * @XmlElement	(type="\com\microsoft\wc\types\Base64", name="record-authorization-token")
	 */
	protected $recordAuthorizationToken;

	/**
	 * @XmlElement	(type="\com\microsoft\wc\types\String1024", name="email-text")
	 */
	protected $emailText;

	/**
	 * @XmlText	(type="boolean", name="can-access-audit")
	 */
	protected $canAccessAudit;

	/**
	 * @XmlElement	(type="\com\microsoft\wc\types\Guid", name="requesting-application-id")
	 */
	protected $requestingApplicationId;

	/**
	 * @XmlText	(type="boolean", name="pin-required")
	 */
	protected $pinRequired;

	/**
	 * @XmlText	(type="string", name="expires-date")
	 */
	protected $expiresDate;

	public function __construct($recordId = NULL, $emailAddress = NULL, $recordCustodian = NULL, $authorizedRecordState = NULL, $recordDisplayName = NULL, $dateAuthExpires = NULL, $authXml = NULL, $relType = NULL, $dateAuthCreated = NULL, $dateAuthUpdated = NULL, $grantorName = NULL, $grantorPersonId = NULL, $granteeName = NULL, $recordAuthorizationToken = NULL, $emailText = NULL, $canAccessAudit = NULL, $requestingApplicationId = NULL, $pinRequired = NULL, $expiresDate = NULL) {
		$this->recordId = ($recordId===NULL) ? NULL : $this->validateRecordId($recordId);
		$this->emailAddress = ($emailAddress===NULL) ? NULL : $this->validateEmailAddress($emailAddress);
		$this->recordCustodian = ($recordCustodian===NULL) ? NULL : $this->validateRecordCustodian($recordCustodian);
		$this->authorizedRecordState = ($authorizedRecordState===NULL) ? NULL : $this->validateAuthorizedRecordState($authorizedRecordState);
		$this->recordDisplayName = ($recordDisplayName===NULL) ? NULL : $this->validateRecordDisplayName($recordDisplayName);
		$this->dateAuthExpires = ($dateAuthExpires===NULL) ? NULL : $this->validateDateAuthExpires($dateAuthExpires);
		$this->authXml = ($authXml===NULL) ? NULL : $this->validateAuthXml($authXml);
		$this->relType = ($relType===NULL) ? NULL : $this->validateRelType($relType);
		$this->dateAuthCreated = ($dateAuthCreated===NULL) ? NULL : $this->validateDateAuthCreated($dateAuthCreated);
		$this->dateAuthUpdated = ($dateAuthUpdated===NULL) ? NULL : $this->validateDateAuthUpdated($dateAuthUpdated);
		$this->grantorName = ($grantorName===NULL) ? NULL : $this->validateGrantorName($grantorName);
		$this->grantorPersonId = ($grantorPersonId===NULL) ? NULL : $this->validateGrantorPersonId($grantorPersonId);
		$this->granteeName = ($granteeName===NULL) ? NULL : $this->validateGranteeName($granteeName);
		$this->recordAuthorizationToken = ($recordAuthorizationToken===NULL) ? NULL : $this->validateRecordAuthorizationToken($recordAuthorizationToken);
		$this->emailText = ($emailText===NULL) ? NULL : $this->validateEmailText($emailText);
		$this->canAccessAudit = ($canAccessAudit===NULL) ? NULL : $this->validateCanAccessAudit($canAccessAudit);
		$this->requestingApplicationId = ($requestingApplicationId===NULL) ? NULL : $this->validateRequestingApplicationId($requestingApplicationId);
		$this->pinRequired = ($pinRequired===NULL) ? NULL : $this->validatePinRequired($pinRequired);
		$this->expiresDate = ($expiresDate===NULL) ? NULL : $this->validateExpiresDate($expiresDate);
	}

	public function getRecordId() {
		if ($this->recordId===NULL) {
			$this->recordId = $this->createRecordId();
		}
		return $this->recordId;
	}
	
	protected function createRecordId() {
		return new \com\microsoft\wc\types\Guid();
	}

	public function setRecordId($recordId) {
		$this->recordId = $this->validateRecordId($recordId);
	}

	protected function validateRecordId($recordId) {
		if ( ! $recordId instanceof \com\microsoft\wc\types\Guid ) {
			$recordId = new \com\microsoft\wc\types\Guid ($recordId);
		}
	
		return $recordId;
	}

	public function getEmailAddress() {
		if ($this->emailAddress===NULL) {
			$this->emailAddress = $this->createEmailAddress();
		}
		return $this->emailAddress;
	}
	
	protected function createEmailAddress() {
		return new \com\microsoft\wc\types\EmailAddress();
	}

	public function setEmailAddress($emailAddress) {
		$this->emailAddress = $this->validateEmailAddress($emailAddress);
	}

	protected function validateEmailAddress($emailAddress) {
		if ( ! $emailAddress instanceof \com\microsoft\wc\types\EmailAddress ) {
			$emailAddress = new \com\microsoft\wc\types\EmailAddress ($emailAddress);
		}
	
		return $emailAddress;
	}

	public function getRecordCustodian() {
		if ($this->recordCustodian===NULL) {
			$this->recordCustodian = $this->createRecordCustodian();
		}
		return $this->recordCustodian;
	}
	
	protected function createRecordCustodian() {
		return FALSE;
	}

	public function setRecordCustodian($recordCustodian) {
		$this->recordCustodian = $this->validateRecordCustodian($recordCustodian);
	}

	protected function validateRecordCustodian($recordCustodian) {
		if (!is_bool($recordCustodian)) {
			throw new \Exception(sprintf('Supplied %s value was not %s', 'recordCustodian', 'boolean'));
		}
	
		return $recordCustodian;
	}

	public function getAuthorizedRecordState() {
		if ($this->authorizedRecordState===NULL) {
			$this->authorizedRecordState = $this->createAuthorizedRecordState();
		}
		return $this->authorizedRecordState;
	}
	
	protected function createAuthorizedRecordState() {
		return new \com\microsoft\wc\record\AuthorizedRecordState();
	}

	public function setAuthorizedRecordState($authorizedRecordState) {
		$this->authorizedRecordState = $this->validateAuthorizedRecordState($authorizedRecordState);
	}

	protected function validateAuthorizedRecordState($authorizedRecordState) {
		if ( ! $authorizedRecordState instanceof \com\microsoft\wc\record\AuthorizedRecordState ) {
			$authorizedRecordState = new \com\microsoft\wc\record\AuthorizedRecordState ($authorizedRecordState);
		}
	
		return $authorizedRecordState;
	}

	public function getRecordDisplayName() {
		if ($this->recordDisplayName===NULL) {
			$this->recordDisplayName = $this->createRecordDisplayName();
		}
		return $this->recordDisplayName;
	}
	
	protected function createRecordDisplayName() {
		return new \com\microsoft\wc\types\String255();
	}

	public function setRecordDisplayName($recordDisplayName) {
		$this->recordDisplayName = $this->validateRecordDisplayName($recordDisplayName);
	}

	protected function validateRecordDisplayName($recordDisplayName) {
		if ( ! $recordDisplayName instanceof \com\microsoft\wc\types\String255 ) {
			$recordDisplayName = new \com\microsoft\wc\types\String255 ($recordDisplayName);
		}
	
		return $recordDisplayName;
	}

	public function getDateAuthExpires() {
		if ($this->dateAuthExpires===NULL) {
			$this->dateAuthExpires = $this->createDateAuthExpires();
		}
		return $this->dateAuthExpires;
	}
	
	protected function createDateAuthExpires() {
		return NULL;
	}

	public function setDateAuthExpires($dateAuthExpires) {
		$this->dateAuthExpires = $this->validateDateAuthExpires($dateAuthExpires);
	}

	protected function validateDateAuthExpires($dateAuthExpires) {
		if (!is_string($dateAuthExpires)) {
			throw new \Exception(sprintf('Supplied %s value was not %s', 'dateAuthExpires', 'string'));
		}
	
		return $dateAuthExpires;
	}

	public function getAuthXml() {
		if ($this->authXml===NULL) {
			$this->authXml = $this->createAuthXml();
		}
		return $this->authXml;
	}
	
	protected function createAuthXml() {
		return new \com\microsoft\wc\auth\AuthXml();
	}

	public function setAuthXml($authXml) {
		$this->authXml = $this->validateAuthXml($authXml);
	}

	protected function validateAuthXml($authXml) {
		if ( ! $authXml instanceof \com\microsoft\wc\auth\AuthXml ) {
			$authXml = new \com\microsoft\wc\auth\AuthXml ($authXml);
		}
	
		return $authXml;
	}

	public function getRelType() {
		if ($this->relType===NULL) {
			$this->relType = $this->createRelType();
		}
		return $this->relType;
	}
	
	protected function createRelType() {
		return 0;
	}

	public function setRelType($relType) {
		$this->relType = $this->validateRelType($relType);
	}

	protected function validateRelType($relType) {
		if (!is_integer($relType)) {
			throw new \Exception(sprintf('Supplied %s value was not %s', 'relType', 'integer'));
		}
	
		return $relType;
	}

	public function getDateAuthCreated() {
		if ($this->dateAuthCreated===NULL) {
			$this->dateAuthCreated = $this->createDateAuthCreated();
		}
		return $this->dateAuthCreated;
	}
	
	protected function createDateAuthCreated() {
		return NULL;
	}

	public function setDateAuthCreated($dateAuthCreated) {
		$this->dateAuthCreated = $this->validateDateAuthCreated($dateAuthCreated);
	}

	protected function validateDateAuthCreated($dateAuthCreated) {
		if (!is_string($dateAuthCreated)) {
			throw new \Exception(sprintf('Supplied %s value was not %s', 'dateAuthCreated', 'string'));
		}
	
		return $dateAuthCreated;
	}

	public function getDateAuthUpdated() {
		if ($this->dateAuthUpdated===NULL) {
			$this->dateAuthUpdated = $this->createDateAuthUpdated();
		}
		return $this->dateAuthUpdated;
	}
	
	protected function createDateAuthUpdated() {
		return NULL;
	}

	public function setDateAuthUpdated($dateAuthUpdated) {
		$this->dateAuthUpdated = $this->validateDateAuthUpdated($dateAuthUpdated);
	}

	protected function validateDateAuthUpdated($dateAuthUpdated) {
		if (!is_string($dateAuthUpdated)) {
			throw new \Exception(sprintf('Supplied %s value was not %s', 'dateAuthUpdated', 'string'));
		}
	
		return $dateAuthUpdated;
	}

	public function getGrantorName() {
		if ($this->grantorName===NULL) {
			$this->grantorName = $this->createGrantorName();
		}
		return $this->grantorName;
	}
	
	protected function createGrantorName() {
		return new \com\microsoft\wc\types\String255();
	}

	public function setGrantorName($grantorName) {
		$this->grantorName = $this->validateGrantorName($grantorName);
	}

	protected function validateGrantorName($grantorName) {
		if ( ! $grantorName instanceof \com\microsoft\wc\types\String255 ) {
			$grantorName = new \com\microsoft\wc\types\String255 ($grantorName);
		}
	
		return $grantorName;
	}

	public function getGrantorPersonId() {
		if ($this->grantorPersonId===NULL) {
			$this->grantorPersonId = $this->createGrantorPersonId();
		}
		return $this->grantorPersonId;
	}
	
	protected function createGrantorPersonId() {
		return new \com\microsoft\wc\types\Guid();
	}

	public function setGrantorPersonId($grantorPersonId) {
		$this->grantorPersonId = $this->validateGrantorPersonId($grantorPersonId);
	}

	protected function validateGrantorPersonId($grantorPersonId) {
		if ( ! $grantorPersonId instanceof \com\microsoft\wc\types\Guid ) {
			$grantorPersonId = new \com\microsoft\wc\types\Guid ($grantorPersonId);
		}
	
		return $grantorPersonId;
	}

	public function getGranteeName() {
		if ($this->granteeName===NULL) {
			$this->granteeName = $this->createGranteeName();
		}
		return $this->granteeName;
	}
	
	protected function createGranteeName() {
		return new \com\microsoft\wc\types\String255();
	}

	public function setGranteeName($granteeName) {
		$this->granteeName = $this->validateGranteeName($granteeName);
	}

	protected function validateGranteeName($granteeName) {
		if ( ! $granteeName instanceof \com\microsoft\wc\types\String255 ) {
			$granteeName = new \com\microsoft\wc\types\String255 ($granteeName);
		}
	
		return $granteeName;
	}

	public function getRecordAuthorizationToken() {
		if ($this->recordAuthorizationToken===NULL) {
			$this->recordAuthorizationToken = $this->createRecordAuthorizationToken();
		}
		return $this->recordAuthorizationToken;
	}
	
	protected function createRecordAuthorizationToken() {
		return new \com\microsoft\wc\types\Base64();
	}

	public function setRecordAuthorizationToken($recordAuthorizationToken) {
		$this->recordAuthorizationToken = $this->validateRecordAuthorizationToken($recordAuthorizationToken);
	}

	protected function validateRecordAuthorizationToken($recordAuthorizationToken) {
		if ( ! $recordAuthorizationToken instanceof \com\microsoft\wc\types\Base64  && ! is_null($recordAuthorizationToken) ) {
			$recordAuthorizationToken = new \com\microsoft\wc\types\Base64 ($recordAuthorizationToken);
		}
	
		return $recordAuthorizationToken;
	}

	public function getEmailText() {
		if ($this->emailText===NULL) {
			$this->emailText = $this->createEmailText();
		}
		return $this->emailText;
	}
	
	protected function createEmailText() {
		return new \com\microsoft\wc\types\String1024();
	}

	public function setEmailText($emailText) {
		$this->emailText = $this->validateEmailText($emailText);
	}

	protected function validateEmailText($emailText) {
		if ( ! $emailText instanceof \com\microsoft\wc\types\String1024  && ! is_null($emailText) ) {
			$emailText = new \com\microsoft\wc\types\String1024 ($emailText);
		}
	
		return $emailText;
	}

	public function getCanAccessAudit() {
		if ($this->canAccessAudit===NULL) {
			$this->canAccessAudit = $this->createCanAccessAudit();
		}
		return $this->canAccessAudit;
	}
	
	protected function createCanAccessAudit() {
		return FALSE;
	}

	public function setCanAccessAudit($canAccessAudit) {
		$this->canAccessAudit = $this->validateCanAccessAudit($canAccessAudit);
	}

	protected function validateCanAccessAudit($canAccessAudit) {
		if ( ! is_bool($canAccessAudit) && ! is_null($canAccessAudit) ) {
			throw new \Exception(sprintf('Supplied %s value was not %s', 'canAccessAudit', 'boolean'));
		}
	
		return $canAccessAudit;
	}

	public function getRequestingApplicationId() {
		if ($this->requestingApplicationId===NULL) {
			$this->requestingApplicationId = $this->createRequestingApplicationId();
		}
		return $this->requestingApplicationId;
	}
	
	protected function createRequestingApplicationId() {
		return new \com\microsoft\wc\types\Guid();
	}

	public function setRequestingApplicationId($requestingApplicationId) {
		$this->requestingApplicationId = $this->validateRequestingApplicationId($requestingApplicationId);
	}

	protected function validateRequestingApplicationId($requestingApplicationId) {
		if ( ! $requestingApplicationId instanceof \com\microsoft\wc\types\Guid  && ! is_null($requestingApplicationId) ) {
			$requestingApplicationId = new \com\microsoft\wc\types\Guid ($requestingApplicationId);
		}
	
		return $requestingApplicationId;
	}

	public function getPinRequired() {
		if ($this->pinRequired===NULL) {
			$this->pinRequired = $this->createPinRequired();
		}
		return $this->pinRequired;
	}
	
	protected function createPinRequired() {
		return FALSE;
	}

	public function setPinRequired($pinRequired) {
		$this->pinRequired = $this->validatePinRequired($pinRequired);
	}

	protected function validatePinRequired($pinRequired) {
		if (!is_bool($pinRequired)) {
			throw new \Exception(sprintf('Supplied %s value was not %s', 'pinRequired', 'boolean'));
		}
	
		return $pinRequired;
	}

	public function getExpiresDate() {
		if ($this->expiresDate===NULL) {
			$this->expiresDate = $this->createExpiresDate();
		}
		return $this->expiresDate;
	}
	
	protected function createExpiresDate() {
		return NULL;
	}

	public function setExpiresDate($expiresDate) {
		$this->expiresDate = $this->validateExpiresDate($expiresDate);
	}

	protected function validateExpiresDate($expiresDate) {
		if (!is_string($expiresDate)) {
			throw new \Exception(sprintf('Supplied %s value was not %s', 'expiresDate', 'string'));
		}
	
		return $expiresDate;
	}
} // end class NonActiveAuthorization
