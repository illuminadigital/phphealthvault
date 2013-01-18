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

	public function getLatitude() {
		if ($this->latitude===NULL) {
			$this->latitude = $this->createLatitude();
		}
		return $this->latitude;
	}
	
	protected function createLatitude() {
		return new \org\sifinfo\www\infrastructure\_2_x\Latitude();
	}

	public function setLatitude($latitude) {
		$this->latitude = $this->validateLatitude($latitude);
	}

	protected function validateLatitude($latitude) {
		if ( ! $latitude instanceof \org\sifinfo\www\infrastructure\_2_x\Latitude ) {
			$latitude = new \org\sifinfo\www\infrastructure\_2_x\Latitude ($latitude);
		}
	
		return $latitude;
	}

	public function getLongitude() {
		if ($this->longitude===NULL) {
			$this->longitude = $this->createLongitude();
		}
		return $this->longitude;
	}
	
	protected function createLongitude() {
		return new \org\sifinfo\www\infrastructure\_2_x\Longitude();
	}

	public function setLongitude($longitude) {
		$this->longitude = $this->validateLongitude($longitude);
	}

	protected function validateLongitude($longitude) {
		if ( ! $longitude instanceof \org\sifinfo\www\infrastructure\_2_x\Longitude ) {
			$longitude = new \org\sifinfo\www\infrastructure\_2_x\Longitude ($longitude);
		}
	
		return $longitude;
	}
} // end class GridLocationType
