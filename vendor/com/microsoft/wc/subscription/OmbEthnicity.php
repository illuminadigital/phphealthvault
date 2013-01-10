<?php
namespace com\microsoft\wc\subscription;



/**
 * @XmlRootEntity	(xml="OmbEthnicity")
 */
class OmbEthnicity {
	/**
	 */
	static protected $enumValue = array('American Indian or Alaska Native' => 'American Indian or Alaska Native', 'Asian' => 'Asian', 'Black or African American' => 'Black or African American', 'Hispanic or Latino' => 'Hispanic or Latino', 'Native Hawaiian or Other Pacific Islander' => 'Native Hawaiian or Other Pacific Islander', 'White' => 'White');

	/**
	 * @XmlValue	(type="string", name="OmbEthnicity")
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
			throw new \Exception(sprintf('Supplied %s value (%s) was not a valid enumerated value.', 'OmbEthnicity', $value));
		}
	
		return $value;
	}

	public function __toString() {
		return (string) $this->value;
	}
} // end class OmbEthnicity
