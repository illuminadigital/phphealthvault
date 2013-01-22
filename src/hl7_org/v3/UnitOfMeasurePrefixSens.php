<?php
namespace hl7_org\v3;



/**
 * @XmlNamespaces ({
 *	@XmlNamespace(url="urn:hl7-org:v3", prefix="")
 * })
 * @XmlRootEntity	(xml="UnitOfMeasurePrefixSens")
 */
class UnitOfMeasurePrefixSens {
	/**
	 */
	static protected $enumValue = array('a' => 'a', 'c' => 'c', 'd' => 'd', 'da' => 'da', 'E' => 'E', 'f' => 'f', 'Gi' => 'Gi', 'G' => 'G', 'h' => 'h', 'Ki' => 'Ki', 'k' => 'k', 'Mi' => 'Mi', 'M' => 'M', 'u' => 'u', 'm' => 'm', 'n' => 'n', 'P' => 'P', 'p' => 'p', 'Ti' => 'Ti', 'T' => 'T', 'y' => 'y', 'Y' => 'Y', 'z' => 'z', 'Z' => 'Z');

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
			throw new \Exception(sprintf('Supplied %s value (%s) was not a valid enumerated value.', 'UnitOfMeasurePrefixSens', $value));
		}
	
		return $value;
	}

	public function __toString() {
		return (string) $this->value;
	}
} // end class UnitOfMeasurePrefixSens
