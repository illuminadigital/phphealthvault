<?php
namespace com\microsoft\wc\location;



/**
 * @XmlNamespaces ({
 *	@XmlNamespace(url="urn:com.microsoft.wc.location", prefix="location")
 * })
 * @XmlEntity	(xml="AppSupportedRecordLocation")
 */
class AppSupportedRecordLocation {
	/**
	 * Information about a specific record location supported for the application.
	 */

	/**
	 * List of manually overridden properties that should not be re-generated automatically
	 * @var array
	 */
	protected $_overrides = array();


	/**
	 * @XmlElement	(type="\com\microsoft\wc\types\Guid", name="app-id")
	 */
	protected $appId;

	/**
	 * @XmlElement	(type="\com\microsoft\wc\types\Location", name="location")
	 */
	protected $location;

	/**
	 * @XmlText	(type="boolean", name="all-locations")
	 */
	protected $allLocations;

	/**
	 * @XmlElement	(type="\com\microsoft\wc\types\CultureSpecificString", collection="true", name="warning-msg")
	 */
	protected $warningMsg;

	public function __construct($appId = NULL, $location = NULL, $allLocations = NULL, $warningMsg = NULL) {
		$this->appId = ($appId===NULL) ? NULL : $this->validateAppId($appId);
		$this->location = ($location===NULL) ? NULL : $this->validateLocation($location);
		$this->allLocations = ($allLocations===NULL) ? NULL : $this->validateAllLocations($allLocations);
		$this->warningMsg = ($warningMsg===NULL) ? NULL : $this->validateWarningMsg($warningMsg);
	}

	public function getAppId($autoCreate = TRUE) {
		if ($this->appId===NULL && $autoCreate && ! isset($this->_overrides['appId']) ) {
			$this->appId = $this->createAppId();
		}
		return $this->appId;
	}
	
	protected function createAppId() {
		return new \com\microsoft\wc\types\Guid();
	}

	public function setAppId($appId) {
		$this->appId = $this->validateAppId($appId);
	}

	protected function validateAppId($appId) {
		if ( ! $appId instanceof \com\microsoft\wc\types\Guid ) {
			$appId = new \com\microsoft\wc\types\Guid ($appId);
		}
	
		return $appId;
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
		if ( ! $location instanceof \com\microsoft\wc\types\Location ) {
			$location = new \com\microsoft\wc\types\Location ($location);
		}
	
		return $location;
	}

	public function getAllLocations($autoCreate = TRUE) {
		if ($this->allLocations===NULL && $autoCreate && ! isset($this->_overrides['allLocations']) ) {
			$this->allLocations = $this->createAllLocations();
		}
		return $this->allLocations;
	}
	
	protected function createAllLocations() {
		return FALSE;
	}

	public function setAllLocations($allLocations) {
		$this->allLocations = $this->validateAllLocations($allLocations);
	}

	protected function validateAllLocations($allLocations) {
		if (!is_bool($allLocations)) {
			throw new \Exception(sprintf('Supplied %s value was not %s', 'allLocations', 'boolean'));
		}
	
		return $allLocations;
	}

	public function getWarningMsg($autoCreate = TRUE) {
		if ($this->warningMsg===NULL && $autoCreate && ! isset($this->_overrides['warningMsg']) ) {
			$this->warningMsg = $this->createWarningMsg();
		}
		return $this->warningMsg;
	}
	
	protected function createWarningMsg() {
		return array();
	}

	public function setWarningMsg($warningMsg) {
		$this->warningMsg = $this->validateWarningMsg($warningMsg);
	}

	protected function validateWarningMsg($warningMsg) {
		if ( $warningMsg === FALSE ) {
			$this->_overrides['warningMsg'] = TRUE;
			return NULL;
		}

		if ( ! is_array ($warningMsg) && ! is_null($warningMsg) ) {
			$warningMsg = array($warningMsg);
		}

		unset ($this->_overrides['warningMsg']);
		$count = count($warningMsg);
		if ($count < 0) {
			throw new \Exception(sprintf('Supplied %s array has less than the required number (%d) of entries.', 'warningMsg', 0));
		}
		foreach ($warningMsg as $entry) {
			if (!($entry instanceof CultureSpecificString)) {
				throw new \Exception(sprintf('Supplied %s value was not %s', 'warningMsg', 'CultureSpecificString'));
			}
		}
	
		return $warningMsg;
	}

	public function addWarningMsg($warningMsg) {
		$this->warningMsg[] = $warningMsg;
	}
} // end class AppSupportedRecordLocation
