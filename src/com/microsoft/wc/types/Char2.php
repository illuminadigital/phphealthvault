<?php
namespace com\microsoft\wc\types;



/**
 * @XmlRootEntity	(xml="char2")
 */
class Char2 {
	/**
	 */

	/**
	 * @XmlValue	(type="string", name="char2")
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
		return '';
	}

	public function setValue($value) {
		$this->value = $this->validateValue($value);
	}

	protected function validateValue($value) {
		if (!is_string($value)) {
			throw new \Exception(sprintf('Supplied %s value was not %s', 'value', 'string'));
		}

		if (strlen($value) < 2) {
			throw new \Exception(sprintf('Supplied %s value was shorter than the minimum (%d)', 'char2', 2));
		}

		if (strlen($value) > 2) {
			throw new \Exception(sprintf('Supplied %s value was longer than the maximum (%d)', 'char2', 2));
		}
	
		return $value;
	}

	public function __toString() {
		return (string) $this->value;
	}
} // end class Char2
