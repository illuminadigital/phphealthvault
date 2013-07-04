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
	 * List of manually overridden properties that should not be re-generated automatically
	 * @var array
	 */
	protected $_overrides = array();


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
	 * @XmlElement	(type="\com\microsoft\wc\thing\types\Language", collection="true", name="language")
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

	public function getGender($autoCreate = TRUE) {
		if ($this->gender===NULL && $autoCreate && ! isset($this->_overrides['gender']) ) {
			$this->gender = $this->createGender();
		}
		return $this->gender;
	}
	
	protected function createGender() {
		return NULL;
	}

	public function setGender($gender) {
		$this->gender = $this->validateGender($gender);
	}

	protected function validateGender($gender) {
	
		return $gender;
	}

	public function getBirthyear($autoCreate = TRUE) {
		if ($this->birthyear===NULL && $autoCreate && ! isset($this->_overrides['birthyear']) ) {
			$this->birthyear = $this->createBirthyear();
		}
		return $this->birthyear;
	}
	
	protected function createBirthyear() {
		return NULL;
	}

	public function setBirthyear($birthyear) {
		$this->birthyear = $this->validateBirthyear($birthyear);
	}

	protected function validateBirthyear($birthyear) {
	
		return $birthyear;
	}

	public function getCountry($autoCreate = TRUE) {
		if ($this->country===NULL && $autoCreate && ! isset($this->_overrides['country']) ) {
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
		if ( $country === FALSE ) {
			$this->_overrides['country'] = TRUE;
			return NULL;
		}

		if ( ! $country instanceof \com\microsoft\wc\types\CodableValue  && ! is_null($country) ) {
			$country = new \com\microsoft\wc\types\CodableValue ($country);
		}

		unset ($this->_overrides['country']);
	
		return $country;
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
		if ( ! is_string($postcode) && ! is_null($postcode) ) {
			throw new \Exception(sprintf('Supplied %s value was not %s', 'postcode', 'string'));
		}
	
		return $postcode;
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
		if ( ! is_string($city) && ! is_null($city) ) {
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
		return new \com\microsoft\wc\types\CodableValue();
	}

	public function setState($state) {
		$this->state = $this->validateState($state);
	}

	protected function validateState($state) {
		if ( $state === FALSE ) {
			$this->_overrides['state'] = TRUE;
			return NULL;
		}

		if ( ! $state instanceof \com\microsoft\wc\types\CodableValue  && ! is_null($state) ) {
			$state = new \com\microsoft\wc\types\CodableValue ($state);
		}

		unset ($this->_overrides['state']);
	
		return $state;
	}

	public function getFirstdow($autoCreate = TRUE) {
		if ($this->firstdow===NULL && $autoCreate && ! isset($this->_overrides['firstdow']) ) {
			$this->firstdow = $this->createFirstdow();
		}
		return $this->firstdow;
	}
	
	protected function createFirstdow() {
		return NULL;
	}

	public function setFirstdow($firstdow) {
		$this->firstdow = $this->validateFirstdow($firstdow);
	}

	protected function validateFirstdow($firstdow) {
	
		return $firstdow;
	}

	public function getLanguage($autoCreate = TRUE) {
		if ($this->language===NULL && $autoCreate && ! isset($this->_overrides['language']) ) {
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
		if ( $language === FALSE ) {
			$this->_overrides['language'] = TRUE;
			return NULL;
		}

		if ( ! is_array ($language) && ! is_null($language) ) {
			$language = array($language);
		}

		unset ($this->_overrides['language']);
		$count = count($language);
		if ($count < 0) {
			throw new \Exception(sprintf('Supplied %s array has less than the required number (%d) of entries.', 'language', 0));
		}
		if ( ! empty($language) ) {
			foreach ($language as $entry) {
				if (!($entry instanceof \com\microsoft\wc\thing\types\Language )) {
					throw new \Exception(sprintf('Supplied %s value was not %s', 'language', 'language'));
				}
			}
		}
	
		return $language;
	}

	public function addLanguage($language) {
		$this->language[] = $language;
	}
} // end class Basic
