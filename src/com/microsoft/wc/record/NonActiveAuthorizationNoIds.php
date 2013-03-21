<?php
namespace com\microsoft\wc\record;



/**
 * @XmlNamespaces ({
 *	@XmlNamespace(url="urn:com.microsoft.wc.record", prefix="wc-record")
 * })
 * @XmlEntity	(xml="NonActiveAuthorizationNoIds")
 */
class NonActiveAuthorizationNoIds {
	/**
	 */

	/**
	 * List of manually overridden properties that should not be re-generated automatically
	 * @var array
	 */
	protected $_overrides = array();


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

	public function __construct($emailAddress = NULL, $recordCustodian = NULL, $authorizedRecordState = NULL, $recordDisplayName = NULL, $dateAuthExpires = NULL, $authXml = NULL, $relType = NULL, $dateAuthCreated = NULL, $dateAuthUpdated = NULL, $grantorName = NULL, $granteeName = NULL, $recordAuthorizationToken = NULL, $emailText = NULL, $canAccessAudit = NULL, $requestingApplicationId = NULL) {
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
		$this->granteeName = ($granteeName===NULL) ? NULL : $this->validateGranteeName($granteeName);
		$this->recordAuthorizationToken = ($recordAuthorizationToken===NULL) ? NULL : $this->validateRecordAuthorizationToken($recordAuthorizationToken);
		$this->emailText = ($emailText===NULL) ? NULL : $this->validateEmailText($emailText);
		$this->canAccessAudit = ($canAccessAudit===NULL) ? NULL : $this->validateCanAccessAudit($canAccessAudit);
		$this->requestingApplicationId = ($requestingApplicationId===NULL) ? NULL : $this->validateRequestingApplicationId($requestingApplicationId);
	}

	public function getEmailAddress($autoCreate = TRUE) {
		if ($this->emailAddress===NULL && $autoCreate && ! isset($this->_overrides['emailAddress']) ) {
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

	public function getRecordCustodian($autoCreate = TRUE) {
		if ($this->recordCustodian===NULL && $autoCreate && ! isset($this->_overrides['recordCustodian']) ) {
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

	public function getAuthorizedRecordState($autoCreate = TRUE) {
		if ($this->authorizedRecordState===NULL && $autoCreate && ! isset($this->_overrides['authorizedRecordState']) ) {
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

	public function getRecordDisplayName($autoCreate = TRUE) {
		if ($this->recordDisplayName===NULL && $autoCreate && ! isset($this->_overrides['recordDisplayName']) ) {
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

	public function getDateAuthExpires($autoCreate = TRUE) {
		if ($this->dateAuthExpires===NULL && $autoCreate && ! isset($this->_overrides['dateAuthExpires']) ) {
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

	public function getAuthXml($autoCreate = TRUE) {
		if ($this->authXml===NULL && $autoCreate && ! isset($this->_overrides['authXml']) ) {
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

	public function getRelType($autoCreate = TRUE) {
		if ($this->relType===NULL && $autoCreate && ! isset($this->_overrides['relType']) ) {
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
		$isValid = FALSE;
		if ( is_integer($relType) ) {
			$isValid = TRUE;
		}
		else if ( $relType == ($castVar = (integer) $relType) ) {
			$isValid = TRUE;
			$relType = $castVar;
		}
		if ( ! $isValid ) {
			throw new \Exception(sprintf('Supplied %s value was not %s', 'relType', 'integer'));
		}
	
		return $relType;
	}

	public function getDateAuthCreated($autoCreate = TRUE) {
		if ($this->dateAuthCreated===NULL && $autoCreate && ! isset($this->_overrides['dateAuthCreated']) ) {
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

	public function getDateAuthUpdated($autoCreate = TRUE) {
		if ($this->dateAuthUpdated===NULL && $autoCreate && ! isset($this->_overrides['dateAuthUpdated']) ) {
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

	public function getGrantorName($autoCreate = TRUE) {
		if ($this->grantorName===NULL && $autoCreate && ! isset($this->_overrides['grantorName']) ) {
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

	public function getGranteeName($autoCreate = TRUE) {
		if ($this->granteeName===NULL && $autoCreate && ! isset($this->_overrides['granteeName']) ) {
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

	public function getRecordAuthorizationToken($autoCreate = TRUE) {
		if ($this->recordAuthorizationToken===NULL && $autoCreate && ! isset($this->_overrides['recordAuthorizationToken']) ) {
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
		if ( $recordAuthorizationToken === FALSE ) {
			$this->_overrides['recordAuthorizationToken'] = TRUE;
			return NULL;
		}

		if ( ! $recordAuthorizationToken instanceof \com\microsoft\wc\types\Base64  && ! is_null($recordAuthorizationToken) ) {
			$recordAuthorizationToken = new \com\microsoft\wc\types\Base64 ($recordAuthorizationToken);
		}

		unset ($this->_overrides['recordAuthorizationToken']);
	
		return $recordAuthorizationToken;
	}

	public function getEmailText($autoCreate = TRUE) {
		if ($this->emailText===NULL && $autoCreate && ! isset($this->_overrides['emailText']) ) {
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
		if ( $emailText === FALSE ) {
			$this->_overrides['emailText'] = TRUE;
			return NULL;
		}

		if ( ! $emailText instanceof \com\microsoft\wc\types\String1024  && ! is_null($emailText) ) {
			$emailText = new \com\microsoft\wc\types\String1024 ($emailText);
		}

		unset ($this->_overrides['emailText']);
	
		return $emailText;
	}

	public function getCanAccessAudit($autoCreate = TRUE) {
		if ($this->canAccessAudit===NULL && $autoCreate && ! isset($this->_overrides['canAccessAudit']) ) {
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

	public function getRequestingApplicationId($autoCreate = TRUE) {
		if ($this->requestingApplicationId===NULL && $autoCreate && ! isset($this->_overrides['requestingApplicationId']) ) {
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
		if ( $requestingApplicationId === FALSE ) {
			$this->_overrides['requestingApplicationId'] = TRUE;
			return NULL;
		}

		if ( ! $requestingApplicationId instanceof \com\microsoft\wc\types\Guid  && ! is_null($requestingApplicationId) ) {
			$requestingApplicationId = new \com\microsoft\wc\types\Guid ($requestingApplicationId);
		}

		unset ($this->_overrides['requestingApplicationId']);
	
		return $requestingApplicationId;
	}
} // end class NonActiveAuthorizationNoIds
