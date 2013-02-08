<?php
namespace org\sifinfo\www\infrastructure\_2_x;



/**
 * @XmlNamespaces ({
 *	@XmlNamespace(url="http://www.sifinfo.org/infrastructure/2.x", prefix="")
 * })
 * @XmlRootEntity	(xml="NCES0721TransportationAtPublicExpenseEligibilityType")
 */
class NCES0721TransportationAtPublicExpenseEligibilityType {
	/**
	 */
	static protected $enumValue = array('2069' => 'Eligible because of disability', '2070' => 'Eligible because of disability and distance', '2068' => 'Eligible because of distance', '2071' => 'Eligible because of hazardous conditions', '2072' => 'Eligible because of program for desegregation or integration', '2073' => 'Eligible because of special instruction', '2074' => 'Not eligible', '9999' => 'Other');

	/**
	 * @XmlValue	(type="string", name="NCES0721TransportationAtPublicExpenseEligibilityType")
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
		return NULL;
	}

	public function setValue($value) {
		$this->value = $this->validateValue($value);
	}

	protected function validateValue($value) {
		if (!is_string($value)) {
			throw new \Exception(sprintf('Supplied %s value was not %s', 'value', 'string'));
		}

		if (empty(static::$enumValue[$value])) {
			throw new \Exception(sprintf('Supplied %s value (%s) was not a valid enumerated value.', 'NCES0721TransportationAtPublicExpenseEligibilityType', $value));
		}
	
		return $value;
	}

	public function __toString() {
		return (string) $this->value;
	}
} // end class NCES0721TransportationAtPublicExpenseEligibilityType
