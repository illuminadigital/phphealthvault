<?php
namespace com\microsoft\wc\types;



/**
 * @XmlRootEntity	(xml="LoginName")
 */
class LoginName {
	/**
	 */

	/**
	 * @XmlValue	(type="string", name="LoginName")
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

		if (strlen($value) < 6) {
			throw new \Exception(sprintf('Supplied %s value was shorter than the minimum (%d)', 'LoginName', 6));
		}

		if (strlen($value) > 128) {
			throw new \Exception(sprintf('Supplied %s value was longer than the maximum (%d)', 'LoginName', 128));
		}
	
		return $value;
	}

	public function __toString() {
		return (string) $this->value;
	}
} // end class LoginName