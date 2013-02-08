<?php
namespace hl7_org\v3;



/**
 * @XmlNamespaces ({
 *	@XmlNamespace(url="urn:hl7-org:v3", prefix="")
 * })
 * @XmlRootEntity	(xml="probability")
 */
class Probability {
	/**
	 */

	/**
	 * @XmlValue	(type="float", name="probability")
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

		if ($value < 0.0) {
			throw new \Exception(sprintf('Supplied %s value was less than the minimum (%d)', 'probability', 0.0));
		}

		if ($value > 1.0) {
			throw new \Exception(sprintf('Supplied %s value was greater than the maximum (%d)', 'probability', 1.0));
		}
	
		return $value;
	}

	public function __toString() {
		return (string) $this->value;
	}
} // end class Probability
