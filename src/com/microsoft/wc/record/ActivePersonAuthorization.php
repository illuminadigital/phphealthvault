<?php
namespace com\microsoft\wc\record;



/**
 * @XmlNamespaces ({
 *	@XmlNamespace(url="urn:com.microsoft.wc.record", prefix="wc-record")
 * })
 * @XmlEntity	(xml="ActivePersonAuthorization")
 */
class ActivePersonAuthorization {
	/**
	 */

	/**
	 * List of manually overridden properties that should not be re-generated automatically
	 * @var array
	 */
	protected $_overrides = array();


	/**
	 * @XmlElement	(type="\com\microsoft\wc\types\Guid", name="record-id")
	 */
	protected $recordId;

	/**
	 * @XmlElement	(type="\com\microsoft\wc\types\Guid", name="person-id")
	 */
	protected $personId;

	/**
	 * @XmlText	(type="string", name="name")
	 */
	protected $name;

	/**
	 * @XmlText	(type="boolean", name="record-custodian")
	 */
	protected $recordCustodian;

	/**
	 * @XmlText	(type="boolean", name="is-group")
	 */
	protected $isGroup;

	/**
	 * @XmlElement	(type="\com\microsoft\wc\types\EmailAddress", name="contact-email")
	 */
	protected $contactEmail;

	/**
	 * @XmlText	(type="boolean", name="contact-email-validated")
	 */
	protected $contactEmailValidated;

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
	 * @XmlText	(type="boolean", name="can-access-audit")
	 */
	protected $canAccessAudit;

	public function __construct($recordId = NULL, $personId = NULL, $name = NULL, $recordCustodian = NULL, $isGroup = NULL, $contactEmail = NULL, $contactEmailValidated = NULL, $recordDisplayName = NULL, $dateAuthExpires = NULL, $authXml = NULL, $relType = NULL, $dateAuthCreated = NULL, $dateAuthUpdated = NULL, $canAccessAudit = NULL) {
		$this->recordId = ($recordId===NULL) ? NULL : $this->validateRecordId($recordId);
		$this->personId = ($personId===NULL) ? NULL : $this->validatePersonId($personId);
		$this->name = ($name===NULL) ? NULL : $this->validateName($name);
		$this->recordCustodian = ($recordCustodian===NULL) ? NULL : $this->validateRecordCustodian($recordCustodian);
		$this->isGroup = ($isGroup===NULL) ? NULL : $this->validateIsGroup($isGroup);
		$this->contactEmail = ($contactEmail===NULL) ? NULL : $this->validateContactEmail($contactEmail);
		$this->contactEmailValidated = ($contactEmailValidated===NULL) ? NULL : $this->validateContactEmailValidated($contactEmailValidated);
		$this->recordDisplayName = ($recordDisplayName===NULL) ? NULL : $this->validateRecordDisplayName($recordDisplayName);
		$this->dateAuthExpires = ($dateAuthExpires===NULL) ? NULL : $this->validateDateAuthExpires($dateAuthExpires);
		$this->authXml = ($authXml===NULL) ? NULL : $this->validateAuthXml($authXml);
		$this->relType = ($relType===NULL) ? NULL : $this->validateRelType($relType);
		$this->dateAuthCreated = ($dateAuthCreated===NULL) ? NULL : $this->validateDateAuthCreated($dateAuthCreated);
		$this->dateAuthUpdated = ($dateAuthUpdated===NULL) ? NULL : $this->validateDateAuthUpdated($dateAuthUpdated);
		$this->canAccessAudit = ($canAccessAudit===NULL) ? NULL : $this->validateCanAccessAudit($canAccessAudit);
	}

	public function getRecordId($autoCreate = TRUE) {
		if ($this->recordId===NULL && $autoCreate && ! isset($this->_overrides['recordId']) ) {
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

	public function getPersonId($autoCreate = TRUE) {
		if ($this->personId===NULL && $autoCreate && ! isset($this->_overrides['personId']) ) {
			$this->personId = $this->createPersonId();
		}
		return $this->personId;
	}
	
	protected function createPersonId() {
		return new \com\microsoft\wc\types\Guid();
	}

	public function setPersonId($personId) {
		$this->personId = $this->validatePersonId($personId);
	}

	protected function validatePersonId($personId) {
		if ( ! $personId instanceof \com\microsoft\wc\types\Guid ) {
			$personId = new \com\microsoft\wc\types\Guid ($personId);
		}
	
		return $personId;
	}

	public function getName($autoCreate = TRUE) {
		if ($this->name===NULL && $autoCreate && ! isset($this->_overrides['name']) ) {
			$this->name = $this->createName();
		}
		return $this->name;
	}
	
	protected function createName() {
		return '';
	}

	public function setName($name) {
		$this->name = $this->validateName($name);
	}

	protected function validateName($name) {
		if (!is_string($name)) {
			throw new \Exception(sprintf('Supplied %s value was not %s', 'name', 'string'));
		}
	
		return $name;
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

	public function getIsGroup($autoCreate = TRUE) {
		if ($this->isGroup===NULL && $autoCreate && ! isset($this->_overrides['isGroup']) ) {
			$this->isGroup = $this->createIsGroup();
		}
		return $this->isGroup;
	}
	
	protected function createIsGroup() {
		return FALSE;
	}

	public function setIsGroup($isGroup) {
		$this->isGroup = $this->validateIsGroup($isGroup);
	}

	protected function validateIsGroup($isGroup) {
		if (!is_bool($isGroup)) {
			throw new \Exception(sprintf('Supplied %s value was not %s', 'isGroup', 'boolean'));
		}
	
		return $isGroup;
	}

	public function getContactEmail($autoCreate = TRUE) {
		if ($this->contactEmail===NULL && $autoCreate && ! isset($this->_overrides['contactEmail']) ) {
			$this->contactEmail = $this->createContactEmail();
		}
		return $this->contactEmail;
	}
	
	protected function createContactEmail() {
		return new \com\microsoft\wc\types\EmailAddress();
	}

	public function setContactEmail($contactEmail) {
		$this->contactEmail = $this->validateContactEmail($contactEmail);
	}

	protected function validateContactEmail($contactEmail) {
		if ( ! $contactEmail instanceof \com\microsoft\wc\types\EmailAddress ) {
			$contactEmail = new \com\microsoft\wc\types\EmailAddress ($contactEmail);
		}
	
		return $contactEmail;
	}

	public function getContactEmailValidated($autoCreate = TRUE) {
		if ($this->contactEmailValidated===NULL && $autoCreate && ! isset($this->_overrides['contactEmailValidated']) ) {
			$this->contactEmailValidated = $this->createContactEmailValidated();
		}
		return $this->contactEmailValidated;
	}
	
	protected function createContactEmailValidated() {
		return FALSE;
	}

	public function setContactEmailValidated($contactEmailValidated) {
		$this->contactEmailValidated = $this->validateContactEmailValidated($contactEmailValidated);
	}

	protected function validateContactEmailValidated($contactEmailValidated) {
		if ( ! is_bool($contactEmailValidated) && ! is_null($contactEmailValidated) ) {
			throw new \Exception(sprintf('Supplied %s value was not %s', 'contactEmailValidated', 'boolean'));
		}
	
		return $contactEmailValidated;
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
		if ( $recordDisplayName === FALSE ) {
			$this->_overrides['recordDisplayName'] = TRUE;
			return NULL;
		}

		if ( ! $recordDisplayName instanceof \com\microsoft\wc\types\String255  && ! is_null($recordDisplayName) ) {
			$recordDisplayName = new \com\microsoft\wc\types\String255 ($recordDisplayName);
		}

		unset ($this->_overrides['recordDisplayName']);
	
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
		if ( ! is_string($dateAuthExpires) && ! is_null($dateAuthExpires) ) {
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
		if ( $authXml === FALSE ) {
			$this->_overrides['authXml'] = TRUE;
			return NULL;
		}

		if ( ! $authXml instanceof \com\microsoft\wc\auth\AuthXml  && ! is_null($authXml) ) {
			$authXml = new \com\microsoft\wc\auth\AuthXml ($authXml);
		}

		unset ($this->_overrides['authXml']);
	
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
		else if ( is_null($relType) ) {
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
		if ( ! is_string($dateAuthCreated) && ! is_null($dateAuthCreated) ) {
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
		if ( ! is_string($dateAuthUpdated) && ! is_null($dateAuthUpdated) ) {
			throw new \Exception(sprintf('Supplied %s value was not %s', 'dateAuthUpdated', 'string'));
		}
	
		return $dateAuthUpdated;
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
} // end class ActivePersonAuthorization
