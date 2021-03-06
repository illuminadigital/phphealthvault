<?php
namespace com\microsoft\wc\record;



/**
 * @XmlNamespaces ({
 *	@XmlNamespace(url="urn:com.microsoft.wc.record", prefix="wc-record")
 * })
 * @XmlEntity	(xml="ActiveAppAuthorization")
 */
class ActiveAppAuthorization {
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
	 * @XmlElement	(type="\com\microsoft\wc\types\Guid", name="application-id")
	 */
	protected $applicationId;

	/**
	 * @XmlText	(type="string", name="name")
	 */
	protected $name;

	/**
	 * @XmlText	(type="string", name="date-auth-expires")
	 */
	protected $dateAuthExpires;

	/**
	 * @XmlElement	(type="\com\microsoft\wc\auth\AuthXml", name="person-online-auth-xml")
	 */
	protected $personOnlineAuthXml;

	/**
	 * @XmlElement	(type="\com\microsoft\wc\auth\AuthXml", name="person-offline-auth-xml")
	 */
	protected $personOfflineAuthXml;

	/**
	 * @XmlText	(type="string", name="date-auth-created")
	 */
	protected $dateAuthCreated;

	/**
	 * @XmlText	(type="string", name="date-auth-updated")
	 */
	protected $dateAuthUpdated;

	/**
	 * @XmlElement	(type="\com\microsoft\wc\types\String255", name="record-display-name")
	 */
	protected $recordDisplayName;

	/**
	 * @XmlText	(type="boolean", name="auto-reconcile-documents")
	 */
	protected $autoReconcileDocuments;

	/**
	 * @XmlElement	(type="\com\microsoft\wc\types\Location", name="location")
	 */
	protected $location;

	public function __construct($recordId = NULL, $applicationId = NULL, $name = NULL, $dateAuthExpires = NULL, $personOnlineAuthXml = NULL, $personOfflineAuthXml = NULL, $dateAuthCreated = NULL, $dateAuthUpdated = NULL, $recordDisplayName = NULL, $autoReconcileDocuments = NULL, $location = NULL) {
		$this->recordId = ($recordId===NULL) ? NULL : $this->validateRecordId($recordId);
		$this->applicationId = ($applicationId===NULL) ? NULL : $this->validateApplicationId($applicationId);
		$this->name = ($name===NULL) ? NULL : $this->validateName($name);
		$this->dateAuthExpires = ($dateAuthExpires===NULL) ? NULL : $this->validateDateAuthExpires($dateAuthExpires);
		$this->personOnlineAuthXml = ($personOnlineAuthXml===NULL) ? NULL : $this->validatePersonOnlineAuthXml($personOnlineAuthXml);
		$this->personOfflineAuthXml = ($personOfflineAuthXml===NULL) ? NULL : $this->validatePersonOfflineAuthXml($personOfflineAuthXml);
		$this->dateAuthCreated = ($dateAuthCreated===NULL) ? NULL : $this->validateDateAuthCreated($dateAuthCreated);
		$this->dateAuthUpdated = ($dateAuthUpdated===NULL) ? NULL : $this->validateDateAuthUpdated($dateAuthUpdated);
		$this->recordDisplayName = ($recordDisplayName===NULL) ? NULL : $this->validateRecordDisplayName($recordDisplayName);
		$this->autoReconcileDocuments = ($autoReconcileDocuments===NULL) ? NULL : $this->validateAutoReconcileDocuments($autoReconcileDocuments);
		$this->location = ($location===NULL) ? NULL : $this->validateLocation($location);
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

	public function getApplicationId($autoCreate = TRUE) {
		if ($this->applicationId===NULL && $autoCreate && ! isset($this->_overrides['applicationId']) ) {
			$this->applicationId = $this->createApplicationId();
		}
		return $this->applicationId;
	}
	
	protected function createApplicationId() {
		return new \com\microsoft\wc\types\Guid();
	}

	public function setApplicationId($applicationId) {
		$this->applicationId = $this->validateApplicationId($applicationId);
	}

	protected function validateApplicationId($applicationId) {
		if ( ! $applicationId instanceof \com\microsoft\wc\types\Guid ) {
			$applicationId = new \com\microsoft\wc\types\Guid ($applicationId);
		}
	
		return $applicationId;
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

	public function getPersonOnlineAuthXml($autoCreate = TRUE) {
		if ($this->personOnlineAuthXml===NULL && $autoCreate && ! isset($this->_overrides['personOnlineAuthXml']) ) {
			$this->personOnlineAuthXml = $this->createPersonOnlineAuthXml();
		}
		return $this->personOnlineAuthXml;
	}
	
	protected function createPersonOnlineAuthXml() {
		return new \com\microsoft\wc\auth\AuthXml();
	}

	public function setPersonOnlineAuthXml($personOnlineAuthXml) {
		$this->personOnlineAuthXml = $this->validatePersonOnlineAuthXml($personOnlineAuthXml);
	}

	protected function validatePersonOnlineAuthXml($personOnlineAuthXml) {
		if ( $personOnlineAuthXml === FALSE ) {
			$this->_overrides['personOnlineAuthXml'] = TRUE;
			return NULL;
		}

		if ( ! $personOnlineAuthXml instanceof \com\microsoft\wc\auth\AuthXml  && ! is_null($personOnlineAuthXml) ) {
			$personOnlineAuthXml = new \com\microsoft\wc\auth\AuthXml ($personOnlineAuthXml);
		}

		unset ($this->_overrides['personOnlineAuthXml']);
	
		return $personOnlineAuthXml;
	}

	public function getPersonOfflineAuthXml($autoCreate = TRUE) {
		if ($this->personOfflineAuthXml===NULL && $autoCreate && ! isset($this->_overrides['personOfflineAuthXml']) ) {
			$this->personOfflineAuthXml = $this->createPersonOfflineAuthXml();
		}
		return $this->personOfflineAuthXml;
	}
	
	protected function createPersonOfflineAuthXml() {
		return new \com\microsoft\wc\auth\AuthXml();
	}

	public function setPersonOfflineAuthXml($personOfflineAuthXml) {
		$this->personOfflineAuthXml = $this->validatePersonOfflineAuthXml($personOfflineAuthXml);
	}

	protected function validatePersonOfflineAuthXml($personOfflineAuthXml) {
		if ( $personOfflineAuthXml === FALSE ) {
			$this->_overrides['personOfflineAuthXml'] = TRUE;
			return NULL;
		}

		if ( ! $personOfflineAuthXml instanceof \com\microsoft\wc\auth\AuthXml  && ! is_null($personOfflineAuthXml) ) {
			$personOfflineAuthXml = new \com\microsoft\wc\auth\AuthXml ($personOfflineAuthXml);
		}

		unset ($this->_overrides['personOfflineAuthXml']);
	
		return $personOfflineAuthXml;
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

	public function getAutoReconcileDocuments($autoCreate = TRUE) {
		if ($this->autoReconcileDocuments===NULL && $autoCreate && ! isset($this->_overrides['autoReconcileDocuments']) ) {
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

	public function getLocation($autoCreate = TRUE) {
		if ($this->location===NULL && $autoCreate && ! isset($this->_overrides['location']) ) {
			$this->location = $this->createLocation();
		}
		return $this->location;
	}
	
	protected function createLocation() {
		return new \com\microsoft\wc\types\Location();
	}

	public function setLocation($location) {
		$this->location = $this->validateLocation($location);
	}

	protected function validateLocation($location) {
		if ( $location === FALSE ) {
			$this->_overrides['location'] = TRUE;
			return NULL;
		}

		if ( ! $location instanceof \com\microsoft\wc\types\Location  && ! is_null($location) ) {
			$location = new \com\microsoft\wc\types\Location ($location);
		}

		unset ($this->_overrides['location']);
	
		return $location;
	}
} // end class ActiveAppAuthorization
