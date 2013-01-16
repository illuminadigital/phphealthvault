<?php
namespace com\microsoft\wc\dates;



/**
 * @XmlRootEntity	(xml="second")
 */
class Second {
	/**
	 */

	/**
	 * @XmlValue	(type="int", name="second")
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
		return 0;
	}

	public function setValue($value) {
		$this->value = $this->validateValue($value);
	}

	protected function validateValue($value) {
		if (!is_integer($value)) {
			throw new \Exception(sprintf('Supplied %s value was not %s', 'value', 'integer'));
		}

		if ($value < 0) {
			throw new \Exception(sprintf('Supplied %s value was less than the minimum (%d)', 'second', 0));
		}

		if ($value > 59) {
			throw new \Exception(sprintf('Supplied %s value was greater than the maximum (%d)', 'second', 59));
		}
	
		return $value;
	}

	public function __toString() {
		return (string) $this->value;
	}
} // end class Second
