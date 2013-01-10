<?php
namespace com\microsoft\wc\application;



/**
 * @XmlRootEntity	(xml="EmailAddress")
 */
class EmailAddress {
	/**
	 */

	/**
	 * @XmlValue	(type="string", name="EmailAddress")
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
			throw new \Exception(sprintf('Supplied %s value was shorter than the minimum (%d)', 'EmailAddress', 6));
		}

		if (strlen($value) > 128) {
			throw new \Exception(sprintf('Supplied %s value was longer than the maximum (%d)', 'EmailAddress', 128));
		}
	
		return $value;
	}

	public function __toString() {
		return (string) $this->value;
	}
} // end class EmailAddress
