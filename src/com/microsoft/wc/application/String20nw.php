<?php
namespace com\microsoft\wc\application;



/**
 * @XmlRootEntity	(xml="string20nw")
 */
class String20nw {
	/**
	 */

	/**
	 * @XmlValue	(type="string", name="string20nw")
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

		if (strlen($value) < 1) {
			throw new \Exception(sprintf('Supplied %s value was shorter than the minimum (%d)', 'string20nw', 1));
		}

		if (strlen($value) > 20) {
			throw new \Exception(sprintf('Supplied %s value was longer than the maximum (%d)', 'string20nw', 20));
		}

		if (!preg_match('/^(\s*[^\s]+\s*)+$/', $value)) {
			throw new \Exception(sprintf('Supplied %s value did not match the right pattern.', 'string20nw', '(\s*[^\s]+\s*)+'));
		}
	
		return $value;
	}

	public function __toString() {
		return (string) $this->value;
	}
} // end class String20nw
