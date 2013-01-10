<?php
namespace com\microsoft\wc\thing;



/**
 * @XmlRootEntity	(xml="positiveLong")
 */
class PositiveLong {
	/**
	 */

	/**
	 * @XmlValue	(type="long", name="positiveLong")
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
		return NULL;
	}

	public function setValue($value) {
		$this->value = $this->validateValue($value);
	}

	protected function validateValue($value) {
		if (!is_integer($value)) {
			throw new \Exception(sprintf('Supplied %s value was not %s', 'value', 'integer'));
		}

		if ($value < 0) {
			throw new \Exception(sprintf('Supplied %s value was less than the minimum (%d)', 'positiveLong', 0));
		}
	
		return $value;
	}

	public function __toString() {
		return (string) $this->value;
	}
} // end class PositiveLong
