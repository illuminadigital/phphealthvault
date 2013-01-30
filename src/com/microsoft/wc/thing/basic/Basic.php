<?php
namespace com\microsoft\wc\thing\basic;



/**
 * @XmlNamespaces ({
 *	@XmlNamespace(url="urn:com.microsoft.wc.thing.basic", prefix="")
 * })
 * @XmlEntity	(xml="basic")
 */
class Basic extends \com\microsoft\wc\thing\AnyMixed {
	/**
	 * Defines a set of data about the health record that isconsidered not to be personally-identifiable.
	 * Unlike the personal demographic information, this datais consider to be less sensitive in nature.
	 */

	const ID = '3b3e6b16-eb69-483c-8d7e-dfe116ae6092';
	const NAME = 'Basic Demographic Information';

	/**
	 * @XmlElement	(type="\com\microsoft\wc\thing\basic\Gender", name="gender")
	 */
	protected $gender;

	/**
	 * @XmlElement	(type="\com\microsoft\wc\thing\basic\Birthyear", name="birthyear")
	 */
	protected $birthyear;

	/**
	 * @XmlElement	(type="\com\microsoft\wc\types\CodableValue", name="country")
	 */
	protected $country;

	/**
	 * @XmlText	(type="string", name="postcode")
	 */
	protected $postcode;

	/**
	 * @XmlText	(type="string", name="city")
	 */
	protected $city;

	/**
	 * @XmlElement	(type="\com\microsoft\wc\types\CodableValue", name="state")
	 */
	protected $state;

	/**
	 * @XmlElement	(type="\com\microsoft\wc\thing\basic\Firstdow", name="firstdow")
	 */
	protected $firstdow;

	/**
	 * @XmlText	(type="string", collection="true", name="language")
	 */
	protected $language;

	public function __construct($gender = NULL, $birthyear = NULL, $country = NULL, $postcode = NULL, $city = NULL, $state = NULL, $firstdow = NULL, $language = NULL) {
		$this->gender = ($gender===NULL) ? NULL : $this->validateGender($gender);
		$this->birthyear = ($birthyear===NULL) ? NULL : $this->validateBirthyear($birthyear);
		$this->country = ($country===NULL) ? NULL : $this->validateCountry($country);
		$this->postcode = ($postcode===NULL) ? NULL : $this->validatePostcode($postcode);
		$this->city = ($city===NULL) ? NULL : $this->validateCity($city);
		$this->state = ($state===NULL) ? NULL : $this->validateState($state);
		$this->firstdow = ($firstdow===NULL) ? NULL : $this->validateFirstdow($firstdow);
		$this->language = ($language===NULL) ? NULL : $this->validateLanguage($language);
	}

	public function getGender() {
		if ($this->gender===NULL) {
			$this->gender = $this->createGender();
		}
		return $this->gender;
	}
	
	protected function createGender() {
		return new \com\microsoft\wc\thing\basic\Gender();
	}

	public function setGender($gender) {
		$this->gender = $this->validateGender($gender);
	}

	protected function validateGender($gender) {
		if ( ! $gender instanceof \com\microsoft\wc\thing\basic\Gender  && ! is_null($gender) ) {
			$gender = new \com\microsoft\wc\thing\basic\Gender ($gender);
		}
	
		return $gender;
	}

	public function getBirthyear() {
		if ($this->birthyear===NULL) {
			$this->birthyear = $this->createBirthyear();
		}
		return $this->birthyear;
	}
	
	protected function createBirthyear() {
		return new \com\microsoft\wc\thing\basic\Birthyear();
	}

	public function setBirthyear($birthyear) {
		$this->birthyear = $this->validateBirthyear($birthyear);
	}

	protected function validateBirthyear($birthyear) {
		if ( ! $birthyear instanceof \com\microsoft\wc\thing\basic\Birthyear  && ! is_null($birthyear) ) {
			$birthyear = new \com\microsoft\wc\thing\basic\Birthyear ($birthyear);
		}
	
		return $birthyear;
	}

	public function getCountry() {
		if ($this->country===NULL) {
			$this->country = $this->createCountry();
		}
		return $this->country;
	}
	
	protected function createCountry() {
		return new \com\microsoft\wc\types\CodableValue();
	}

	public function setCountry($country) {
		$this->country = $this->validateCountry($country);
	}

	protected function validateCountry($country) {
		if ( ! $country instanceof \com\microsoft\wc\types\CodableValue  && ! is_null($country) ) {
			$country = new \com\microsoft\wc\types\CodableValue ($country);
		}
	
		return $country;
	}

	public function getPostcode() {
		if ($this->postcode===NULL) {
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
		if ( ! is_string($postcode) && ! is_null($postcode) ) {
			throw new \Exception(sprintf('Supplied %s value was not %s', 'postcode', 'string'));
		}
	
		return $postcode;
	}

	public function getCity() {
		if ($this->city===NULL) {
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
		if ( ! is_string($city) && ! is_null($city) ) {
			throw new \Exception(sprintf('Supplied %s value was not %s', 'city', 'string'));
		}
	
		return $city;
	}

	public function getState() {
		if ($this->state===NULL) {
			$this->state = $this->createState();
		}
		return $this->state;
	}
	
	protected function createState() {
		return new \com\microsoft\wc\types\CodableValue();
	}

	public function setState($state) {
		$this->state = $this->validateState($state);
	}

	protected function validateState($state) {
		if ( ! $state instanceof \com\microsoft\wc\types\CodableValue  && ! is_null($state) ) {
			$state = new \com\microsoft\wc\types\CodableValue ($state);
		}
	
		return $state;
	}

	public function getFirstdow() {
		if ($this->firstdow===NULL) {
			$this->firstdow = $this->createFirstdow();
		}
		return $this->firstdow;
	}
	
	protected function createFirstdow() {
		return new \com\microsoft\wc\thing\basic\Firstdow();
	}

	public function setFirstdow($firstdow) {
		$this->firstdow = $this->validateFirstdow($firstdow);
	}

	protected function validateFirstdow($firstdow) {
		if ( ! $firstdow instanceof \com\microsoft\wc\thing\basic\Firstdow  && ! is_null($firstdow) ) {
			$firstdow = new \com\microsoft\wc\thing\basic\Firstdow ($firstdow);
		}
	
		return $firstdow;
	}

	public function getLanguage() {
		if ($this->language===NULL) {
			$this->language = $this->createLanguage();
		}
		return $this->language;
	}
	
	protected function createLanguage() {
		return array();
	}

	public function setLanguage($language) {
		$this->language = $this->validateLanguage($language);
	}

	protected function validateLanguage($language) {
		if ( ! is_array ($language) && ! is_null($language) ) {
			$language = array($language);
		}
		$count = count($language);
		if ($count < 0) {
			throw new \Exception(sprintf('Supplied %s array has less than the required number (%d) of entries.', 'language', 0));
		}
		foreach ($language as $entry) {
			if (!($entry instanceof Language)) {
				throw new \Exception(sprintf('Supplied %s value was not %s', 'language', 'string'));
			}
		}
	
		return $language;
	}

	public function addLanguage($language) {
		$this->language[] = $language;
	}
} // end class Basic
