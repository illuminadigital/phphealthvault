<?php
namespace com\microsoft\wc\types;



/**
 * @XmlNamespaces ({
 *	@XmlNamespace(url="urn:com.microsoft.wc.types", prefix="wc-types")
 * })
 * @XmlEntity	(xml="Culture")
 */
class Culture {
	/**
	 * Represents a specific culture by combining a language and country/region.
	 */

	/**
	 * List of manually overridden properties that should not be re-generated automatically
	 * @var array
	 */
	protected $_overrides = array();


	/**
	 * @XmlElement	(type="\com\microsoft\wc\types\Iso6391", name="language")
	 */
	protected $language;

	/**
	 * @XmlElement	(type="\com\microsoft\wc\types\Iso3166", name="country")
	 */
	protected $country;

	public function __construct($language = NULL, $country = NULL) {
		$this->language = ($language===NULL) ? NULL : $this->validateLanguage($language);
		$this->country = ($country===NULL) ? NULL : $this->validateCountry($country);
	}

	public function getLanguage($autoCreate = TRUE) {
		if ($this->language===NULL && $autoCreate && ! isset($this->_overrides['language']) ) {
			$this->language = $this->createLanguage();
		}
		return $this->language;
	}
	
	protected function createLanguage() {
		return new \com\microsoft\wc\types\Iso6391();
	}

	public function setLanguage($language) {
		$this->language = $this->validateLanguage($language);
	}

	protected function validateLanguage($language) {
		if ( $language === FALSE ) {
			$this->_overrides['language'] = TRUE;
			return NULL;
		}

		if ( ! $language instanceof \com\microsoft\wc\types\Iso6391  && ! is_null($language) ) {
			$language = new \com\microsoft\wc\types\Iso6391 ($language);
		}

		unset ($this->_overrides['language']);
	
		return $language;
	}

	public function getCountry($autoCreate = TRUE) {
		if ($this->country===NULL && $autoCreate && ! isset($this->_overrides['country']) ) {
			$this->country = $this->createCountry();
		}
		return $this->country;
	}
	
	protected function createCountry() {
		return new \com\microsoft\wc\types\Iso3166();
	}

	public function setCountry($country) {
		$this->country = $this->validateCountry($country);
	}

	protected function validateCountry($country) {
		if ( $country === FALSE ) {
			$this->_overrides['country'] = TRUE;
			return NULL;
		}

		if ( ! $country instanceof \com\microsoft\wc\types\Iso3166  && ! is_null($country) ) {
			$country = new \com\microsoft\wc\types\Iso3166 ($country);
		}

		unset ($this->_overrides['country']);
	
		return $country;
	}
} // end class Culture
