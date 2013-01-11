<?php
namespace com\microsoft\wc\subscription;



/**
 * @XmlRootEntity	(xml="NameMatchType")
 */
class NameMatchType {
	/**
	 */
	static protected $enumValue = array('exact' => 'exact', 'prefix' => 'prefix', 'contains' => 'contains');

	/**
	 * @XmlValue	(type="string", name="NameMatchType")
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

		if (empty(static::$enumValue[$value])) {
			throw new \Exception(sprintf('Supplied %s value (%s) was not a valid enumerated value.', 'NameMatchType', $value));
		}
	
		return $value;
	}

	public function __toString() {
		return (string) $this->value;
	}
} // end class NameMatchType
