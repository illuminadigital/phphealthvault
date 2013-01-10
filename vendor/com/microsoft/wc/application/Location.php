<?php
namespace com\microsoft\wc\application;

use com\microsoft\wc\application\String3nw;

/**
 * @XmlNamespaces ({
 *	@XmlNamespace(url="urn:com.microsoft.wc.application", prefix="wc-app")
 * })
 * @XmlEntity	(xml="Location")
 */
class Location {
	/**
	 * A location consisting of a country and optionally a state/province.
	 */

	/**
	 * @XmlElement	(type="\com\microsoft\wc\application\String3nw", name="country")
	 */
	protected $country;

	/**
	 * @XmlElement	(type="\com\microsoft\wc\application\String3nw", name="state-province")
	 */
	protected $stateProvince;

	public function __construct($country = NULL, $stateProvince = NULL) {
		$this->country = ($country===NULL) ? NULL : $this->validateCountry($country);
		$this->stateProvince = ($stateProvince===NULL) ? NULL : $this->validateStateProvince($stateProvince);
	}

	public function getCountry() {
		if ($this->country===NULL) {
			$this->country = $this->createCountry();
		}
		return $this->country;
	}
	
	protected function createCountry() {
		return new String3nw();
	}

	public function setCountry($country) {
		$this->country = $this->validateCountry($country);
	}

	protected function validateCountry($country) {
		if ( ! $country instanceof String3nw ) {
			$country = new String3nw ($country);
		}
	
		return $country;
	}

	public function getStateProvince() {
		if ($this->stateProvince===NULL) {
			$this->stateProvince = $this->createStateProvince();
		}
		return $this->stateProvince;
	}
	
	protected function createStateProvince() {
		return new String3nw();
	}

	public function setStateProvince($stateProvince) {
		$this->stateProvince = $this->validateStateProvince($stateProvince);
	}

	protected function validateStateProvince($stateProvince) {
		if ( ! $stateProvince instanceof String3nw ) {
			$stateProvince = new String3nw ($stateProvince);
		}
	
		return $stateProvince;
	}
} // end class Location
