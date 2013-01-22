<?php
namespace hl7_org\v3;



/**
 * @XmlNamespaces ({
 *	@XmlNamespace(url="urn:hl7-org:v3", prefix="")
 * })
 * @XmlRootEntity	(xml="VaccineManufacturer")
 */
class VaccineManufacturer {
	/**
	 */
	static protected $enumValue = array('AB' => 'AB', 'AD' => 'AD', 'ALP' => 'ALP', 'AR' => 'AR', 'PMC' => 'PMC', 'AVI' => 'AVI', 'BA' => 'BA', 'BAY' => 'BAY', 'BPC' => 'BPC', 'BP' => 'BP', 'MIP' => 'MIP', 'CEN' => 'CEN', 'CHI' => 'CHI', 'CON' => 'CON', 'EVN' => 'EVN', 'GRE' => 'GRE', 'IAG' => 'IAG', 'IUS' => 'IUS', 'KGC' => 'KGC', 'LED' => 'LED', 'MA' => 'MA', 'MED' => 'MED', 'MSD' => 'MSD', 'IM' => 'IM', 'MIL' => 'MIL', 'NAB' => 'NAB', 'NYB' => 'NYB', 'NAV' => 'NAV', 'NOV' => 'NOV', 'OTC' => 'OTC', 'ORT' => 'ORT', 'PD' => 'PD', 'PRX' => 'PRX', 'SCL' => 'SCL', 'SKB' => 'SKB', 'SI' => 'SI', 'JPN' => 'JPN', 'USA' => 'USA', 'WAL' => 'WAL', 'WA' => 'WA');

	/**
	 * @XmlElement	(type="\hl7_org\v3\Cs", name="value")
	 */
	protected $value;

	public function __construct($value = NULL) {
		$this->value = ($value===NULL) ? NULL : $this->validateValue($value);
	}

	public function getValue() {
		if ($this->value===NULL) {
			$this->value = $this->createValue();
		}
		return $this->value;
	}
	
	protected function createValue() {
		return new \hl7_org\v3\CS();
	}

	public function setValue($value) {
		$this->value = $this->validateValue($value);
	}

	protected function validateValue($value) {
		if ( ! $value instanceof \hl7_org\v3\CS ) {
			$value = new \hl7_org\v3\CS ($value);
		}

		if (empty(static::$enumValue[$value])) {
			throw new \Exception(sprintf('Supplied %s value (%s) was not a valid enumerated value.', 'VaccineManufacturer', $value));
		}
	
		return $value;
	}

	public function __toString() {
		return (string) $this->value;
	}
} // end class VaccineManufacturer
