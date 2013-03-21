<?php
namespace org\sifinfo\www\infrastructure\_2_x;



/**
 * @XmlNamespaces ({
 *	@XmlNamespace(url="http://www.sifinfo.org/infrastructure/2.x", prefix="")
 * })
 * @XmlEntity	(xml="CountriesOfResidency")
 */
class CountriesOfResidency {
	/**
	 */

	/**
	 * List of manually overridden properties that should not be re-generated automatically
	 * @var array
	 */
	protected $_overrides = array();


	/**
	 * @XmlElement	(type="\org\sifinfo\www\infrastructure\_2_x\CountryType", collection="true", name="CountryOfResidency")
	 */
	protected $countryOfResidency;

	public function __construct($countryOfResidency = NULL) {
		$this->countryOfResidency = ($countryOfResidency===NULL) ? NULL : $this->validateCountryOfResidency($countryOfResidency);
	}

	public function getCountryOfResidency($autoCreate = TRUE) {
		if ($this->countryOfResidency===NULL && $autoCreate && ! isset($this->_overrides['countryOfResidency']) ) {
			$this->countryOfResidency = $this->createCountryOfResidency();
		}
		return $this->countryOfResidency;
	}
	
	protected function createCountryOfResidency() {
		return array();
	}

	public function setCountryOfResidency($countryOfResidency) {
		$this->countryOfResidency = $this->validateCountryOfResidency($countryOfResidency);
	}

	protected function validateCountryOfResidency($countryOfResidency) {
		$count = count($countryOfResidency);
		if ($count < 1) {
			throw new \Exception(sprintf('Supplied %s array has less than the required number (%d) of entries.', 'countryOfResidency', 1));
		}
		foreach ($countryOfResidency as $entry) {
		}
	
		return $countryOfResidency;
	}

	public function addCountryOfResidency($countryOfResidency) {
		$this->countryOfResidency[] = $this->validateCountryOfResidencyType($countryOfResidency);
	}

	protected function validateCountryOfResidencyType($countryOfResidency) {
	
		return $countryOfResidency;
	}
} // end class CountriesOfResidency
