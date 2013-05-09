<?php
namespace com\microsoft\wc\location;



/**
 * @XmlNamespaces ({
 *	@XmlNamespace(url="urn:com.microsoft.wc.location", prefix="location")
 * })
 * @XmlEntity	(xml="SupportedLocationList")
 */
class SupportedLocationList {
	/**
	 * A list of supported locations.
	 */

	/**
	 * List of manually overridden properties that should not be re-generated automatically
	 * @var array
	 */
	protected $_overrides = array();


	/**
	 * @XmlElement	(type="\com\microsoft\wc\types\Location", collection="true", name="location")
	 */
	protected $location;

	/**
	 * @XmlText	(type="boolean", name="all-locations")
	 */
	protected $allLocations;

	public function __construct($location = NULL, $allLocations = NULL) {
		$this->location = ($location===NULL) ? NULL : $this->validateLocation($location);
		$this->allLocations = ($allLocations===NULL) ? NULL : $this->validateAllLocations($allLocations);
	}

	public function getLocation($autoCreate = TRUE) {
		if ($this->location===NULL && $autoCreate && ! isset($this->_overrides['location']) ) {
			$this->location = $this->createLocation();
		}
		return $this->location;
	}
	
	protected function createLocation() {
		return array();
	}

	public function setLocation($location) {
		$this->location = $this->validateLocation($location);
	}

	protected function validateLocation($location) {
		if ( $location === FALSE ) {
			$this->_overrides['location'] = TRUE;
			return NULL;
		}

		if ( ! is_array ($location) && ! is_null($location) ) {
			$location = array($location);
		}

		unset ($this->_overrides['location']);
		$count = count($location);
		if ($count < 0) {
			throw new \Exception(sprintf('Supplied %s array has less than the required number (%d) of entries.', 'location', 0));
		}
		if ( ! empty($location) ) {
			foreach ($location as $entry) {
				if (!($entry instanceof \com\microsoft\wc\types\Location )) {
					throw new \Exception(sprintf('Supplied %s value was not %s', 'location', 'Location'));
				}
			}
		}
	
		return $location;
	}

	public function addLocation($location) {
		$this->location[] = $location;
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
		if ( ! is_bool($allLocations) && ! is_null($allLocations) ) {
			throw new \Exception(sprintf('Supplied %s value was not %s', 'allLocations', 'boolean'));
		}
	
		return $allLocations;
	}
} // end class SupportedLocationList
