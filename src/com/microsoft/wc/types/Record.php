<?php
namespace com\microsoft\wc\types;



/**
 * @XmlNamespaces ({
 *	@XmlNamespace(url="urn:com.microsoft.wc.types", prefix="wc-types")
 * })
 * @XmlEntity	(xml="Record")
 */
class Record extends \com\microsoft\wc\types\String255 {
	/**
	 * Basic information about the authenticated person's view of a health record.
	 * Health records are a place to store health and fitness related data. Each person may be authorized to zero to many health records. This type represents the metadata about the authenticated person's view of the record, including it's unique identifier, the relationship the authorized person has with the owner of the record, the name of the record, whether the authorized person is a custodian of the record, and more.
	 */

	/**
	 * @XmlAttribute	(type="string", name="id")
	 */
	protected $id;

	/**
	 * @XmlAttribute	(type="boolean", name="record-custodian")
	 */
	protected $recordCustodian;

	/**
	 * @XmlAttribute	(type="integer", name="rel-type")
	 */
	protected $relType;

	/**
	 * @XmlAttribute	(type="string", name="rel-name")
	 */
	protected $relName;

	/**
	 * @XmlAttribute	(type="string", name="auth-expires")
	 */
	protected $authExpires;

	/**
	 * @XmlAttribute	(type="boolean", name="auth-expired")
	 */
	protected $authExpired;

	/**
	 * @XmlAttribute	(type="string", name="display-name")
	 */
	protected $displayName;

	/**
	 * @XmlAttribute	(type="string", name="state")
	 */
	protected $state;

	/**
	 * @XmlAttribute	(type="string", name="date-created")
	 */
	protected $dateCreated;

	/**
	 * @XmlAttribute	(type="string", name="max-size-bytes")
	 */
	protected $maxSizeBytes;

	/**
	 * @XmlAttribute	(type="string", name="size-bytes")
	 */
	protected $sizeBytes;

	/**
	 * @XmlAttribute	(type="string", name="app-record-auth-action")
	 */
	protected $appRecordAuthAction;

	/**
	 * @XmlAttribute	(type="boolean", name="auto-reconcile-documents")
	 */
	protected $autoReconcileDocuments;

	/**
	 * @XmlAttribute	(type="string", name="app-specific-record-id")
	 */
	protected $appSpecificRecordId;

	/**
	 * @XmlAttribute	(type="string", name="location-country")
	 */
	protected $locationCountry;

	/**
	 * @XmlAttribute	(type="string", name="location-state-province")
	 */
	protected $locationStateProvince;

	/**
	 * @XmlAttribute	(type="string", name="date-updated")
	 */
	protected $dateUpdated;

	public function __construct($id = NULL, $recordCustodian = NULL, $relType = NULL, $relName = NULL, $authExpires = NULL, $authExpired = NULL, $displayName = NULL, $state = NULL, $dateCreated = NULL, $maxSizeBytes = NULL, $sizeBytes = NULL, $appRecordAuthAction = NULL, $autoReconcileDocuments = NULL, $appSpecificRecordId = NULL, $locationCountry = NULL, $locationStateProvince = NULL, $dateUpdated = NULL) {
		$this->id = ($id===NULL) ? NULL : $this->validateId($id);
		$this->recordCustodian = ($recordCustodian===NULL) ? NULL : $this->validateRecordCustodian($recordCustodian);
		$this->relType = ($relType===NULL) ? NULL : $this->validateRelType($relType);
		$this->relName = ($relName===NULL) ? NULL : $this->validateRelName($relName);
		$this->authExpires = ($authExpires===NULL) ? NULL : $this->validateAuthExpires($authExpires);
		$this->authExpired = ($authExpired===NULL) ? NULL : $this->validateAuthExpired($authExpired);
		$this->displayName = ($displayName===NULL) ? NULL : $this->validateDisplayName($displayName);
		$this->state = ($state===NULL) ? NULL : $this->validateState($state);
		$this->dateCreated = ($dateCreated===NULL) ? NULL : $this->validateDateCreated($dateCreated);
		$this->maxSizeBytes = ($maxSizeBytes===NULL) ? NULL : $this->validateMaxSizeBytes($maxSizeBytes);
		$this->sizeBytes = ($sizeBytes===NULL) ? NULL : $this->validateSizeBytes($sizeBytes);
		$this->appRecordAuthAction = ($appRecordAuthAction===NULL) ? NULL : $this->validateAppRecordAuthAction($appRecordAuthAction);
		$this->autoReconcileDocuments = ($autoReconcileDocuments===NULL) ? NULL : $this->validateAutoReconcileDocuments($autoReconcileDocuments);
		$this->appSpecificRecordId = ($appSpecificRecordId===NULL) ? NULL : $this->validateAppSpecificRecordId($appSpecificRecordId);
		$this->locationCountry = ($locationCountry===NULL) ? NULL : $this->validateLocationCountry($locationCountry);
		$this->locationStateProvince = ($locationStateProvince===NULL) ? NULL : $this->validateLocationStateProvince($locationStateProvince);
		$this->dateUpdated = ($dateUpdated===NULL) ? NULL : $this->validateDateUpdated($dateUpdated);
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
		if ( ! is_bool($recordCustodian) && ! is_null($recordCustodian) ) {
			throw new \Exception(sprintf('Supplied %s value was not %s', 'recordCustodian', 'boolean'));
		}
	
		return $recordCustodian;
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

	public function getRelName() {
		if ($this->relName===NULL) {
			$this->relName = $this->createRelName();
		}
		return $this->relName;
	}
	
	protected function createRelName() {
		return new \com\microsoft\wc\types\String255();
	}

	public function setRelName($relName) {
		$this->relName = $this->validateRelName($relName);
	}

	protected function validateRelName($relName) {
		if ( ! $relName instanceof \com\microsoft\wc\types\String255  && ! is_null($relName) ) {
			$relName = new \com\microsoft\wc\types\String255 ($relName);
		}
	
		return $relName;
	}

	public function getAuthExpires() {
		if ($this->authExpires===NULL) {
			$this->authExpires = $this->createAuthExpires();
		}
		return $this->authExpires;
	}
	
	protected function createAuthExpires() {
		return NULL;
	}

	public function setAuthExpires($authExpires) {
		$this->authExpires = $this->validateAuthExpires($authExpires);
	}

	protected function validateAuthExpires($authExpires) {
		if ( ! is_string($authExpires) && ! is_null($authExpires) ) {
			throw new \Exception(sprintf('Supplied %s value was not %s', 'authExpires', 'string'));
		}
	
		return $authExpires;
	}

	public function getAuthExpired() {
		if ($this->authExpired===NULL) {
			$this->authExpired = $this->createAuthExpired();
		}
		return $this->authExpired;
	}
	
	protected function createAuthExpired() {
		return FALSE;
	}

	public function setAuthExpired($authExpired) {
		$this->authExpired = $this->validateAuthExpired($authExpired);
	}

	protected function validateAuthExpired($authExpired) {
		if ( ! is_bool($authExpired) && ! is_null($authExpired) ) {
			throw new \Exception(sprintf('Supplied %s value was not %s', 'authExpired', 'boolean'));
		}
	
		return $authExpired;
	}

	public function getDisplayName() {
		if ($this->displayName===NULL) {
			$this->displayName = $this->createDisplayName();
		}
		return $this->displayName;
	}
	
	protected function createDisplayName() {
		return new \com\microsoft\wc\types\String255();
	}

	public function setDisplayName($displayName) {
		$this->displayName = $this->validateDisplayName($displayName);
	}

	protected function validateDisplayName($displayName) {
		if ( ! $displayName instanceof \com\microsoft\wc\types\String255  && ! is_null($displayName) ) {
			$displayName = new \com\microsoft\wc\types\String255 ($displayName);
		}
	
		return $displayName;
	}

	public function getState() {
		if ($this->state===NULL) {
			$this->state = $this->createState();
		}
		return $this->state;
	}
	
	protected function createState() {
		return new \com\microsoft\wc\types\RecordState();
	}

	public function setState($state) {
		$this->state = $this->validateState($state);
	}

	protected function validateState($state) {
		if ( ! $state instanceof \com\microsoft\wc\types\RecordState ) {
			$state = new \com\microsoft\wc\types\RecordState ($state);
		}
	
		return $state;
	}

	public function getDateCreated() {
		if ($this->dateCreated===NULL) {
			$this->dateCreated = $this->createDateCreated();
		}
		return $this->dateCreated;
	}
	
	protected function createDateCreated() {
		return NULL;
	}

	public function setDateCreated($dateCreated) {
		$this->dateCreated = $this->validateDateCreated($dateCreated);
	}

	protected function validateDateCreated($dateCreated) {
		if ( ! is_string($dateCreated) && ! is_null($dateCreated) ) {
			throw new \Exception(sprintf('Supplied %s value was not %s', 'dateCreated', 'string'));
		}
	
		return $dateCreated;
	}

	public function getMaxSizeBytes() {
		if ($this->maxSizeBytes===NULL) {
			$this->maxSizeBytes = $this->createMaxSizeBytes();
		}
		return $this->maxSizeBytes;
	}
	
	protected function createMaxSizeBytes() {
		return new \com\microsoft\wc\types\PositiveLong();
	}

	public function setMaxSizeBytes($maxSizeBytes) {
		$this->maxSizeBytes = $this->validateMaxSizeBytes($maxSizeBytes);
	}

	protected function validateMaxSizeBytes($maxSizeBytes) {
		if ( ! $maxSizeBytes instanceof \com\microsoft\wc\types\PositiveLong  && ! is_null($maxSizeBytes) ) {
			$maxSizeBytes = new \com\microsoft\wc\types\PositiveLong ($maxSizeBytes);
		}
	
		return $maxSizeBytes;
	}

	public function getSizeBytes() {
		if ($this->sizeBytes===NULL) {
			$this->sizeBytes = $this->createSizeBytes();
		}
		return $this->sizeBytes;
	}
	
	protected function createSizeBytes() {
		return new \com\microsoft\wc\types\PositiveLong();
	}

	public function setSizeBytes($sizeBytes) {
		$this->sizeBytes = $this->validateSizeBytes($sizeBytes);
	}

	protected function validateSizeBytes($sizeBytes) {
		if ( ! $sizeBytes instanceof \com\microsoft\wc\types\PositiveLong  && ! is_null($sizeBytes) ) {
			$sizeBytes = new \com\microsoft\wc\types\PositiveLong ($sizeBytes);
		}
	
		return $sizeBytes;
	}

	public function getAppRecordAuthAction() {
		if ($this->appRecordAuthAction===NULL) {
			$this->appRecordAuthAction = $this->createAppRecordAuthAction();
		}
		return $this->appRecordAuthAction;
	}
	
	protected function createAppRecordAuthAction() {
		return new \com\microsoft\wc\types\AppRecordAuthAction();
	}

	public function setAppRecordAuthAction($appRecordAuthAction) {
		$this->appRecordAuthAction = $this->validateAppRecordAuthAction($appRecordAuthAction);
	}

	protected function validateAppRecordAuthAction($appRecordAuthAction) {
		if ( ! $appRecordAuthAction instanceof \com\microsoft\wc\types\AppRecordAuthAction  && ! is_null($appRecordAuthAction) ) {
			$appRecordAuthAction = new \com\microsoft\wc\types\AppRecordAuthAction ($appRecordAuthAction);
		}
	
		return $appRecordAuthAction;
	}

	public function getAutoReconcileDocuments() {
		if ($this->autoReconcileDocuments===NULL) {
			$this->autoReconcileDocuments = $this->createAutoReconcileDocuments();
		}
		return $this->autoReconcileDocuments;
	}
	
	protected function createAutoReconcileDocuments() {
		return FALSE;
	}

	public function setAutoReconcileDocuments($autoReconcileDocuments) {
		$this->autoReconcileDocuments = $this->validateAutoReconcileDocuments($autoReconcileDocuments);
	}

	protected function validateAutoReconcileDocuments($autoReconcileDocuments) {
		if ( ! is_bool($autoReconcileDocuments) && ! is_null($autoReconcileDocuments) ) {
			throw new \Exception(sprintf('Supplied %s value was not %s', 'autoReconcileDocuments', 'boolean'));
		}
	
		return $autoReconcileDocuments;
	}

	public function getAppSpecificRecordId() {
		if ($this->appSpecificRecordId===NULL) {
			$this->appSpecificRecordId = $this->createAppSpecificRecordId();
		}
		return $this->appSpecificRecordId;
	}
	
	protected function createAppSpecificRecordId() {
		return '';
	}

	public function setAppSpecificRecordId($appSpecificRecordId) {
		$this->appSpecificRecordId = $this->validateAppSpecificRecordId($appSpecificRecordId);
	}

	protected function validateAppSpecificRecordId($appSpecificRecordId) {
		if ( ! is_string($appSpecificRecordId) && ! is_null($appSpecificRecordId) ) {
			throw new \Exception(sprintf('Supplied %s value was not %s', 'appSpecificRecordId', 'string'));
		}
	
		return $appSpecificRecordId;
	}

	public function getLocationCountry() {
		if ($this->locationCountry===NULL) {
			$this->locationCountry = $this->createLocationCountry();
		}
		return $this->locationCountry;
	}
	
	protected function createLocationCountry() {
		return new \com\microsoft\wc\types\String3nw();
	}

	public function setLocationCountry($locationCountry) {
		$this->locationCountry = $this->validateLocationCountry($locationCountry);
	}

	protected function validateLocationCountry($locationCountry) {
		if ( ! $locationCountry instanceof \com\microsoft\wc\types\String3nw  && ! is_null($locationCountry) ) {
			$locationCountry = new \com\microsoft\wc\types\String3nw ($locationCountry);
		}
	
		return $locationCountry;
	}

	public function getLocationStateProvince() {
		if ($this->locationStateProvince===NULL) {
			$this->locationStateProvince = $this->createLocationStateProvince();
		}
		return $this->locationStateProvince;
	}
	
	protected function createLocationStateProvince() {
		return new \com\microsoft\wc\types\String3nw();
	}

	public function setLocationStateProvince($locationStateProvince) {
		$this->locationStateProvince = $this->validateLocationStateProvince($locationStateProvince);
	}

	protected function validateLocationStateProvince($locationStateProvince) {
		if ( ! $locationStateProvince instanceof \com\microsoft\wc\types\String3nw  && ! is_null($locationStateProvince) ) {
			$locationStateProvince = new \com\microsoft\wc\types\String3nw ($locationStateProvince);
		}
	
		return $locationStateProvince;
	}

	public function getDateUpdated() {
		if ($this->dateUpdated===NULL) {
			$this->dateUpdated = $this->createDateUpdated();
		}
		return $this->dateUpdated;
	}
	
	protected function createDateUpdated() {
		return NULL;
	}

	public function setDateUpdated($dateUpdated) {
		$this->dateUpdated = $this->validateDateUpdated($dateUpdated);
	}

	protected function validateDateUpdated($dateUpdated) {
		if ( ! is_string($dateUpdated) && ! is_null($dateUpdated) ) {
			throw new \Exception(sprintf('Supplied %s value was not %s', 'dateUpdated', 'string'));
		}
	
		return $dateUpdated;
	}
} // end class Record
