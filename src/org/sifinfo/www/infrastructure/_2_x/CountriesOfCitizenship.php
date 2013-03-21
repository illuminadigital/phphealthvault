<?php
namespace org\sifinfo\www\infrastructure\_2_x;



/**
 * @XmlNamespaces ({
 *	@XmlNamespace(url="http://www.sifinfo.org/infrastructure/2.x", prefix="")
 * })
 * @XmlEntity	(xml="CountriesOfCitizenship")
 */
class CountriesOfCitizenship {
	/**
	 */

	/**
	 * List of manually overridden properties that should not be re-generated automatically
	 * @var array
	 */
	protected $_overrides = array();


	/**
	 * @XmlElement	(type="\org\sifinfo\www\infrastructure\_2_x\CountryType", collection="true", name="CountryOfCitizenship")
	 */
	protected $countryOfCitizenship;

	public function __construct($countryOfCitizenship = NULL) {
		$this->countryOfCitizenship = ($countryOfCitizenship===NULL) ? NULL : $this->validateCountryOfCitizenship($countryOfCitizenship);
	}

	public function getCountryOfCitizenship($autoCreate = TRUE) {
		if ($this->countryOfCitizenship===NULL && $autoCreate && ! isset($this->_overrides['countryOfCitizenship']) ) {
			$this->countryOfCitizenship = $this->createCountryOfCitizenship();
		}
		return $this->countryOfCitizenship;
	}
	
	protected function createCountryOfCitizenship() {
		return array();
	}

	public function setCountryOfCitizenship($countryOfCitizenship) {
		$this->countryOfCitizenship = $this->validateCountryOfCitizenship($countryOfCitizenship);
	}

	protected function validateCountryOfCitizenship($countryOfCitizenship) {
		$count = count($countryOfCitizenship);
		if ($count < 1) {
			throw new \Exception(sprintf('Supplied %s array has less than the required number (%d) of entries.', 'countryOfCitizenship', 1));
		}
		foreach ($countryOfCitizenship as $entry) {
		}
	
		return $countryOfCitizenship;
	}

	public function addCountryOfCitizenship($countryOfCitizenship) {
		$this->countryOfCitizenship[] = $this->validateCountryOfCitizenshipType($countryOfCitizenship);
	}

	protected function validateCountryOfCitizenshipType($countryOfCitizenship) {
	
		return $countryOfCitizenship;
	}
} // end class CountriesOfCitizenship
