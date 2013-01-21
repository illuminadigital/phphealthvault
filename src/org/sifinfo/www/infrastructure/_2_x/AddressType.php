<?php
namespace org\sifinfo\www\infrastructure\_2_x;



/**
 * @XmlNamespaces ({
 *	@XmlNamespace(url="http://www.sifinfo.org/infrastructure/2.x", prefix="")
 * })
 * @XmlEntity	(xml="AddressType")
 */
class AddressType {
	/**
	 * This element contains address data.
	 */

	/**
	 * @XmlElement	(type="\org\sifinfo\www\infrastructure\_2_x\Street", name="Street")
	 */
	protected $street;

	/**
	 * @XmlText	(type="string", name="City")
	 */
	protected $city;

	/**
	 * @XmlText	(type="string", name="County")
	 */
	protected $county;

	/**
	 * @XmlElement	(type="\org\sifinfo\www\infrastructure\_2_x\StateProvince", name="StateProvince")
	 */
	protected $stateProvince;

	/**
	 * @XmlElement	(type="\org\sifinfo\www\infrastructure\_2_x\Country", name="Country")
	 */
	protected $country;

	/**
	 * @XmlText	(type="string", name="PostalCode")
	 */
	protected $postalCode;

	/**
	 * @XmlElement	(type="\org\sifinfo\www\infrastructure\_2_x\GridLocationType", name="GridLocation")
	 */
	protected $gridLocation;

	/**
	 * @XmlAttribute	(type="string", name="Type")
	 */
	protected $type;

	public function __construct($street = NULL, $city = NULL, $county = NULL, $stateProvince = NULL, $country = NULL, $postalCode = NULL, $gridLocation = NULL, $type = NULL) {
		$this->street = ($street===NULL) ? NULL : $this->validateStreet($street);
		$this->city = ($city===NULL) ? NULL : $this->validateCity($city);
		$this->county = ($county===NULL) ? NULL : $this->validateCounty($county);
		$this->stateProvince = ($stateProvince===NULL) ? NULL : $this->validateStateProvince($stateProvince);
		$this->country = ($country===NULL) ? NULL : $this->validateCountry($country);
		$this->postalCode = ($postalCode===NULL) ? NULL : $this->validatePostalCode($postalCode);
		$this->gridLocation = ($gridLocation===NULL) ? NULL : $this->validateGridLocation($gridLocation);
		$this->type = ($type===NULL) ? NULL : $this->validateType($type);
	}

	public function getStreet() {
		if ($this->street===NULL) {
			$this->street = $this->createStreet();
		}
		return $this->street;
	}
	
	protected function createStreet() {
		return new \org\sifinfo\www\infrastructure\_2_x\Street();
	}

	public function setStreet($street) {
		$this->street = $this->validateStreet($street);
	}

	protected function validateStreet($street) {
		if ( ! $street instanceof \org\sifinfo\www\infrastructure\_2_x\Street ) {
			$street = new \org\sifinfo\www\infrastructure\_2_x\Street ($street);
		}
	
		return $street;
	}

	public function getCity() {
		if ($this->city===NULL) {
			$this->city = $this->createCity();
		}
		return $this->city;
	}
	
	protected function createCity() {
		return NULL;
	}

	public function setCity($city) {
		$this->city = $this->validateCity($city);
	}

	protected function validateCity($city) {
		if (!is_string($city)) {
			throw new \Exception(sprintf('Supplied %s value was not %s', 'city', 'string'));
		}
	
		return $city;
	}

	public function getCounty() {
		if ($this->county===NULL) {
			$this->county = $this->createCounty();
		}
		return $this->county;
	}
	
	protected function createCounty() {
		return NULL;
	}

	public function setCounty($county) {
		$this->county = $this->validateCounty($county);
	}

	protected function validateCounty($county) {
		if ( ! is_string($county) && ! is_null($county) ) {
			throw new \Exception(sprintf('Supplied %s value was not %s', 'county', 'string'));
		}
	
		return $county;
	}

	public function getStateProvince() {
		if ($this->stateProvince===NULL) {
			$this->stateProvince = $this->createStateProvince();
		}
		return $this->stateProvince;
	}
	
	protected function createStateProvince() {
		return new \org\sifinfo\www\infrastructure\_2_x\StateProvince();
	}

	public function setStateProvince($stateProvince) {
		$this->stateProvince = $this->validateStateProvince($stateProvince);
	}

	protected function validateStateProvince($stateProvince) {
		if ( ! $stateProvince instanceof \org\sifinfo\www\infrastructure\_2_x\StateProvince ) {
			$stateProvince = new \org\sifinfo\www\infrastructure\_2_x\StateProvince ($stateProvince);
		}
	
		return $stateProvince;
	}

	public function getCountry() {
		if ($this->country===NULL) {
			$this->country = $this->createCountry();
		}
		return $this->country;
	}
	
	protected function createCountry() {
		return new \org\sifinfo\www\infrastructure\_2_x\Country();
	}

	public function setCountry($country) {
		$this->country = $this->validateCountry($country);
	}

	protected function validateCountry($country) {
		if ( ! $country instanceof \org\sifinfo\www\infrastructure\_2_x\Country ) {
			$country = new \org\sifinfo\www\infrastructure\_2_x\Country ($country);
		}
	
		return $country;
	}

	public function getPostalCode() {
		if ($this->postalCode===NULL) {
			$this->postalCode = $this->createPostalCode();
		}
		return $this->postalCode;
	}
	
	protected function createPostalCode() {
		return NULL;
	}

	public function setPostalCode($postalCode) {
		$this->postalCode = $this->validatePostalCode($postalCode);
	}

	protected function validatePostalCode($postalCode) {
		if (!is_string($postalCode)) {
			throw new \Exception(sprintf('Supplied %s value was not %s', 'postalCode', 'string'));
		}
	
		return $postalCode;
	}

	public function getGridLocation() {
		if ($this->gridLocation===NULL) {
			$this->gridLocation = $this->createGridLocation();
		}
		return $this->gridLocation;
	}
	
	protected function createGridLocation() {
		return new \org\sifinfo\www\infrastructure\_2_x\GridLocationType();
	}

	public function setGridLocation($gridLocation) {
		$this->gridLocation = $this->validateGridLocation($gridLocation);
	}

	protected function validateGridLocation($gridLocation) {
		if ( ! $gridLocation instanceof \org\sifinfo\www\infrastructure\_2_x\GridLocationType  && ! is_null($gridLocation) ) {
			$gridLocation = new \org\sifinfo\www\infrastructure\_2_x\GridLocationType ($gridLocation);
		}
	
		return $gridLocation;
	}

	public function getType() {
		if ($this->type===NULL) {
			$this->type = $this->createType();
		}
		return $this->type;
	}
	
	protected function createType() {
		return new \org\sifinfo\www\infrastructure\_2_x\NCES0025AddressTypeType();
	}

	public function setType($type) {
		$this->type = $this->validateType($type);
	}

	protected function validateType($type) {
		if ( ! $type instanceof \org\sifinfo\www\infrastructure\_2_x\NCES0025AddressTypeType ) {
			$type = new \org\sifinfo\www\infrastructure\_2_x\NCES0025AddressTypeType ($type);
		}
	
		return $type;
	}
} // end class AddressType
