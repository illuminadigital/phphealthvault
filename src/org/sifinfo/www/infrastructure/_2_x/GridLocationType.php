<?php
namespace org\sifinfo\www\infrastructure\_2_x;



/**
 * @XmlNamespaces ({
 *	@XmlNamespace(url="http://www.sifinfo.org/infrastructure/2.x", prefix="")
 * })
 * @XmlEntity	(xml="GridLocationType")
 */
class GridLocationType {
	/**
	 * This element contains a map location. The GridLocation element is utilized within other objects and elements, suchas BusStopInfo and Address, etc.
	 */

	/**
	 * List of manually overridden properties that should not be re-generated automatically
	 * @var array
	 */
	protected $_overrides = array();


	/**
	 * @XmlElement	(type="\org\sifinfo\www\infrastructure\_2_x\Latitude", name="Latitude")
	 */
	protected $latitude;

	/**
	 * @XmlElement	(type="\org\sifinfo\www\infrastructure\_2_x\Longitude", name="Longitude")
	 */
	protected $longitude;

	public function __construct($latitude = NULL, $longitude = NULL) {
		$this->latitude = ($latitude===NULL) ? NULL : $this->validateLatitude($latitude);
		$this->longitude = ($longitude===NULL) ? NULL : $this->validateLongitude($longitude);
	}

	public function getLatitude($autoCreate = TRUE) {
		if ($this->latitude===NULL && $autoCreate && ! isset($this->_overrides['latitude']) ) {
			$this->latitude = $this->createLatitude();
		}
		return $this->latitude;
	}
	
	protected function createLatitude() {
		return NULL;
	}

	public function setLatitude($latitude) {
		$this->latitude = $this->validateLatitude($latitude);
	}

	protected function validateLatitude($latitude) {
	
		return $latitude;
	}

	public function getLongitude($autoCreate = TRUE) {
		if ($this->longitude===NULL && $autoCreate && ! isset($this->_overrides['longitude']) ) {
			$this->longitude = $this->createLongitude();
		}
		return $this->longitude;
	}
	
	protected function createLongitude() {
		return NULL;
	}

	public function setLongitude($longitude) {
		$this->longitude = $this->validateLongitude($longitude);
	}

	protected function validateLongitude($longitude) {
	
		return $longitude;
	}
} // end class GridLocationType
