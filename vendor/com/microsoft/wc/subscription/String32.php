<?php
namespace com\microsoft\wc\subscription;



/**
 * @XmlRootEntity	(xml="string32")
 */
class String32 {
	/**
	 */

	/**
	 * @XmlValue	(type="string", name="string32")
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
			throw new \Exception(sprintf('Supplied %s value was shorter than the minimum (%d)', 'string32', 1));
		}

		if (strlen($value) > 32) {
			throw new \Exception(sprintf('Supplied %s value was longer than the maximum (%d)', 'string32', 32));
		}
	
		return $value;
	}

	public function __toString() {
		return (string) $this->value;
	}
} // end class String32
