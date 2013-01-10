<?php
namespace com\microsoft\wc\subscription;

use com\microsoft\wc\subscription\Iso6391;
use com\microsoft\wc\subscription\Iso3166;

/**
 * @XmlEntity	(xml="Culture")
 */
class Culture {
	/**
	 * Represents a specific culture by combining a language and country/region.
	 */

	/**
	 * @XmlElement	(type="\com\microsoft\wc\subscription\Iso6391", name="language")
	 */
	protected $language;

	/**
	 * @XmlElement	(type="\com\microsoft\wc\subscription\Iso3166", name="country")
	 */
	protected $country;

	public function __construct($language = NULL, $country = NULL) {
		$this->language = ($language===NULL) ? NULL : $this->validateLanguage($language);
		$this->country = ($country===NULL) ? NULL : $this->validateCountry($country);
	}

	public function getLanguage() {
		if ($this->language===NULL) {
			$this->language = $this->createLanguage();
		}
		return $this->language;
	}
	
	protected function createLanguage() {
		return new Iso6391();
	}

	public function setLanguage($language) {
		$this->language = $this->validateLanguage($language);
	}

	protected function validateLanguage($language) {
		if ( ! $language instanceof Iso6391  && ! is_null($language) ) {
			$language = new Iso6391 ($language);
		}
	
		return $language;
	}

	public function getCountry() {
		if ($this->country===NULL) {
			$this->country = $this->createCountry();
		}
		return $this->country;
	}
	
	protected function createCountry() {
		return new Iso3166();
	}

	public function setCountry($country) {
		$this->country = $this->validateCountry($country);
	}

	protected function validateCountry($country) {
		if ( ! $country instanceof Iso3166  && ! is_null($country) ) {
			$country = new Iso3166 ($country);
		}
	
		return $country;
	}
} // end class Culture
