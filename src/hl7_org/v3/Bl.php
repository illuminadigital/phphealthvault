<?php
namespace hl7_org\v3;



/**
 * @XmlNamespaces ({
 *	@XmlNamespace(url="urn:hl7-org:v3", prefix="")
 * })
 * @XmlRootEntity	(xml="bl")
 */
class Bl {
	/**
	 */

	/**
	 * @XmlElement	(type="\hl7_org\v3\Boolean", name="value")
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
		return FALSE;
	}

	public function setValue($value) {
		$this->value = $this->validateValue($value);
	}

	protected function validateValue($value) {
		if (!is_bool($value)) {
			throw new \Exception(sprintf('Supplied %s value was not %s', 'value', 'boolean'));
		}

		if (!preg_match('/^true|false$/', $value)) {
			throw new \Exception(sprintf('Supplied %s value did not match the right pattern.', 'bl', 'true|false'));
		}
	
		return $value;
	}

	public function __toString() {
		return (string) $this->value;
	}
} // end class Bl
