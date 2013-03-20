<?php
namespace com\microsoft\wc\thing\types;



/**
 * @XmlNamespaces ({
 *	@XmlNamespace(url="urn:com.microsoft.wc.thing.types", prefix="urn:com.microsoft.wc.thing.types")
 * })
 * @XmlEntity	(xml="structured-measurement")
 */
class StructuredMeasurement {
	/**
	 * StructuredMeasurement
	 * A measurement using specific units.
	 * Examples include 30 cc, 500 mg, 15 liters, 30 inches, etc.
	 */

	/**
	 * @XmlText	(type="float", name="value")
	 */
	protected $value;

	/**
	 * @XmlElement	(type="\com\microsoft\wc\types\CodableValue", name="units")
	 */
	protected $units;

	public function __construct($value = NULL, $units = NULL) {
		$this->value = ($value===NULL) ? NULL : $this->validateValue($value);
		$this->units = ($units===NULL) ? NULL : $this->validateUnits($units);
	}

	public function getValue() {
		if ($this->value===NULL) {
			$this->value = $this->createValue();
		}
		return $this->value;
	}
	
	protected function createValue() {
		return 0.0;
	}

	public function setValue($value) {
		$this->value = $this->validateValue($value);
	}

	protected function validateValue($value) {
		$isValid = FALSE;
		if ( is_float($value) ) {
			$isValid = TRUE;
		}
		else if ( $value == ($castVar = (float) $value) ) {
			$isValid = TRUE;
			$value = $castVar;
		}
		if ( ! $isValid ) {
			throw new \Exception(sprintf('Supplied %s value was not %s', 'value', 'float'));
		}
	
		return $value;
	}

	public function getUnits() {
		if ($this->units===NULL) {
			$this->units = $this->createUnits();
		}
		return $this->units;
	}
	
	protected function createUnits() {
		return new \com\microsoft\wc\types\CodableValue();
	}

	public function setUnits($units) {
		$this->units = $this->validateUnits($units);
	}

	protected function validateUnits($units) {
		if ( ! $units instanceof \com\microsoft\wc\types\CodableValue ) {
			$units = new \com\microsoft\wc\types\CodableValue ($units);
		}
	
		return $units;
	}
} // end class StructuredMeasurement
