<?php
namespace com\microsoft\wc\thing\types;



/**
 * @XmlNamespaces ({
 *	@XmlNamespace(url="urn:com.microsoft.wc.thing.types", prefix="urn:com.microsoft.wc.thing.types")
 * })
 * @XmlRootEntity	(xml="positiveDouble")
 */
class PositiveDouble {
	/**
	 */

	/**
	 * @XmlValue	(type="float", name="positiveDouble")
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
		return 0.0;
	}

	public function setValue($value) {
		$this->value = $this->validateValue($value);
	}

	protected function validateValue($value) {
		if (!is_float($value)) {
			throw new \Exception(sprintf('Supplied %s value was not %s', 'value', 'float'));
		}

		if ($value <= 0) {
			throw new \Exception(sprintf('Supplied %s value was less than/equal to the minimum (%d)', 'positiveDouble', 0));
		}
	
		return $value;
	}

	public function __toString() {
		return (string) $this->value;
	}
} // end class PositiveDouble
