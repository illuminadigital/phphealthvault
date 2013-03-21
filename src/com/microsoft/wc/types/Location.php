<?php
namespace com\microsoft\wc\types;



/**
 * @XmlNamespaces ({
 *	@XmlNamespace(url="urn:com.microsoft.wc.types", prefix="wc-types")
 * })
 * @XmlEntity	(xml="Location")
 */
class Location {
	/**
	 * A location consisting of a country and optionally a state/province.
	 */

	/**
	 * List of manually overridden properties that should not be re-generated automatically
	 * @var array
	 */
	protected $_overrides = array();


	/**
	 * @XmlElement	(type="\com\microsoft\wc\types\String3nw", name="country")
	 */
	protected $country;

	/**
	 * @XmlElement	(type="\com\microsoft\wc\types\String3nw", name="state-province")
	 */
	protected $stateProvince;

	public function __construct($country = NULL, $stateProvince = NULL) {
		$this->country = ($country===NULL) ? NULL : $this->validateCountry($country);
		$this->stateProvince = ($stateProvince===NULL) ? NULL : $this->validateStateProvince($stateProvince);
	}

	public function getCountry($autoCreate = TRUE) {
		if ($this->country===NULL && $autoCreate && ! isset($this->_overrides['country']) ) {
			$this->country = $this->createCountry();
		}
		return $this->country;
	}
	
	protected function createCountry() {
		return new \com\microsoft\wc\types\String3nw();
	}

	public function setCountry($country) {
		$this->country = $this->validateCountry($country);
	}

	protected function validateCountry($country) {
		if ( ! $country instanceof \com\microsoft\wc\types\String3nw ) {
			$country = new \com\microsoft\wc\types\String3nw ($country);
		}
	
		return $country;
	}

	public function getStateProvince($autoCreate = TRUE) {
		if ($this->stateProvince===NULL && $autoCreate && ! isset($this->_overrides['stateProvince']) ) {
			$this->stateProvince = $this->createStateProvince();
		}
		return $this->stateProvince;
	}
	
	protected function createStateProvince() {
		return new \com\microsoft\wc\types\String3nw();
	}

	public function setStateProvince($stateProvince) {
		$this->stateProvince = $this->validateStateProvince($stateProvince);
	}

	protected function validateStateProvince($stateProvince) {
		if ( $stateProvince === FALSE ) {
			$this->_overrides['stateProvince'] = TRUE;
			return NULL;
		}

		if ( ! $stateProvince instanceof \com\microsoft\wc\types\String3nw  && ! is_null($stateProvince) ) {
			$stateProvince = new \com\microsoft\wc\types\String3nw ($stateProvince);
		}

		unset ($this->_overrides['stateProvince']);
	
		return $stateProvince;
	}
} // end class Location
