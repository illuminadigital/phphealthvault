<?php
namespace com\microsoft\wc\types;



/**
 * @XmlNamespaces ({
 *	@XmlNamespace(url="urn:com.microsoft.wc.types", prefix="wc-types")
 * })
 * @XmlEntity	(xml="Address")
 */
class Address {
	/**
	 */

	/**
	 * List of manually overridden properties that should not be re-generated automatically
	 * @var array
	 */
	protected $_overrides = array();


	/**
	 * @XmlText	(type="string", name="description")
	 */
	protected $description;

	/**
	 * @XmlText	(type="boolean", name="is-primary")
	 */
	protected $isPrimary;

	/**
	 * @XmlText	(type="string", collection="true", name="street")
	 */
	protected $street;

	/**
	 * @XmlText	(type="string", name="city")
	 */
	protected $city;

	/**
	 * @XmlText	(type="string", name="state")
	 */
	protected $state;

	/**
	 * @XmlText	(type="string", name="postcode")
	 */
	protected $postcode;

	/**
	 * @XmlText	(type="string", name="country")
	 */
	protected $country;

	public function __construct($description = NULL, $isPrimary = NULL, $street = NULL, $city = NULL, $state = NULL, $postcode = NULL, $country = NULL) {
		$this->description = ($description===NULL) ? NULL : $this->validateDescription($description);
		$this->isPrimary = ($isPrimary===NULL) ? NULL : $this->validateIsPrimary($isPrimary);
		$this->street = ($street===NULL) ? NULL : $this->validateStreet($street);
		$this->city = ($city===NULL) ? NULL : $this->validateCity($city);
		$this->state = ($state===NULL) ? NULL : $this->validateState($state);
		$this->postcode = ($postcode===NULL) ? NULL : $this->validatePostcode($postcode);
		$this->country = ($country===NULL) ? NULL : $this->validateCountry($country);
	}

	public function getDescription($autoCreate = TRUE) {
		if ($this->description===NULL && $autoCreate && ! isset($this->_overrides['description']) ) {
			$this->description = $this->createDescription();
		}
		return $this->description;
	}
	
	protected function createDescription() {
		return '';
	}

	public function setDescription($description) {
		$this->description = $this->validateDescription($description);
	}

	protected function validateDescription($description) {
		if ( ! is_string($description) && ! is_null($description) ) {
			throw new \Exception(sprintf('Supplied %s value was not %s', 'description', 'string'));
		}
	
		return $description;
	}

	public function getIsPrimary($autoCreate = TRUE) {
		if ($this->isPrimary===NULL && $autoCreate && ! isset($this->_overrides['isPrimary']) ) {
			$this->isPrimary = $this->createIsPrimary();
		}
		return $this->isPrimary;
	}
	
	protected function createIsPrimary() {
		return FALSE;
	}

	public function setIsPrimary($isPrimary) {
		$this->isPrimary = $this->validateIsPrimary($isPrimary);
	}

	protected function validateIsPrimary($isPrimary) {
		if ( ! is_bool($isPrimary) && ! is_null($isPrimary) ) {
			throw new \Exception(sprintf('Supplied %s value was not %s', 'isPrimary', 'boolean'));
		}
	
		return $isPrimary;
	}

	public function getStreet($autoCreate = TRUE) {
		if ($this->street===NULL && $autoCreate && ! isset($this->_overrides['street']) ) {
			$this->street = $this->createStreet();
		}
		return $this->street;
	}
	
	protected function createStreet() {
		return array();
	}

	public function setStreet($street) {
		$this->street = $this->validateStreet($street);
	}

	protected function validateStreet($street) {
		$count = count($street);
		if ($count < 1) {
			throw new \Exception(sprintf('Supplied %s array has less than the required number (%d) of entries.', 'street', 1));
		}
		foreach ($street as $entry) {
			if (!is_string($entry)) {
				throw new \Exception(sprintf('Supplied %s value was not %s', 'street', 'string'));
			}
		}
	
		return $street;
	}

	public function addStreet($street) {
		$this->street[] = $this->validateStreetType($street);
	}

	protected function validateStreetType($street) {
		if (!is_string($street)) {
			throw new \Exception(sprintf('Supplied %s value was not %s', 'street', 'string'));
		}
	
		return $street;
	}

	public function getCity($autoCreate = TRUE) {
		if ($this->city===NULL && $autoCreate && ! isset($this->_overrides['city']) ) {
			$this->city = $this->createCity();
		}
		return $this->city;
	}
	
	protected function createCity() {
		return '';
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

	public function getState($autoCreate = TRUE) {
		if ($this->state===NULL && $autoCreate && ! isset($this->_overrides['state']) ) {
			$this->state = $this->createState();
		}
		return $this->state;
	}
	
	protected function createState() {
		return '';
	}

	public function setState($state) {
		$this->state = $this->validateState($state);
	}

	protected function validateState($state) {
		if ( ! is_string($state) && ! is_null($state) ) {
			throw new \Exception(sprintf('Supplied %s value was not %s', 'state', 'string'));
		}
	
		return $state;
	}

	public function getPostcode($autoCreate = TRUE) {
		if ($this->postcode===NULL && $autoCreate && ! isset($this->_overrides['postcode']) ) {
			$this->postcode = $this->createPostcode();
		}
		return $this->postcode;
	}
	
	protected function createPostcode() {
		return '';
	}

	public function setPostcode($postcode) {
		$this->postcode = $this->validatePostcode($postcode);
	}

	protected function validatePostcode($postcode) {
		if (!is_string($postcode)) {
			throw new \Exception(sprintf('Supplied %s value was not %s', 'postcode', 'string'));
		}
	
		return $postcode;
	}

	public function getCountry($autoCreate = TRUE) {
		if ($this->country===NULL && $autoCreate && ! isset($this->_overrides['country']) ) {
			$this->country = $this->createCountry();
		}
		return $this->country;
	}
	
	protected function createCountry() {
		return '';
	}

	public function setCountry($country) {
		$this->country = $this->validateCountry($country);
	}

	protected function validateCountry($country) {
		if (!is_string($country)) {
			throw new \Exception(sprintf('Supplied %s value was not %s', 'country', 'string'));
		}
	
		return $country;
	}
} // end class Address
