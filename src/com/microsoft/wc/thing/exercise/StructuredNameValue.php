<?php
namespace com\microsoft\wc\thing\exercise;



/**
 * @XmlNamespaces ({
 *	@XmlNamespace(url="urn:com.microsoft.wc.thing.exercise", prefix="")
 * })
 * @XmlEntity	(xml="StructuredNameValue")
 */
class StructuredNameValue {
	/**
	 */

	/**
	 * @XmlElement	(type="\com\microsoft\wc\types\CodedValue", name="name")
	 */
	protected $name;

	/**
	 * @XmlElement	(type="\com\microsoft\wc\thing\types\StructuredMeasurement", name="value")
	 */
	protected $value;

	public function __construct($name = NULL, $value = NULL) {
		$this->name = ($name===NULL) ? NULL : $this->validateName($name);
		$this->value = ($value===NULL) ? NULL : $this->validateValue($value);
	}

	public function getName() {
		if ($this->name===NULL) {
			$this->name = $this->createName();
		}
		return $this->name;
	}
	
	protected function createName() {
		return new \com\microsoft\wc\types\CodedValue();
	}

	public function setName($name) {
		$this->name = $this->validateName($name);
	}

	protected function validateName($name) {
		if ( ! $name instanceof \com\microsoft\wc\types\CodedValue ) {
			$name = new \com\microsoft\wc\types\CodedValue ($name);
		}
	
		return $name;
	}

	public function getValue() {
		if ($this->value===NULL) {
			$this->value = $this->createValue();
		}
		return $this->value;
	}
	
	protected function createValue() {
		return new \com\microsoft\wc\thing\types\StructuredMeasurement();
	}

	public function setValue($value) {
		$this->value = $this->validateValue($value);
	}

	protected function validateValue($value) {
		if ( ! $value instanceof \com\microsoft\wc\thing\types\StructuredMeasurement ) {
			$value = new \com\microsoft\wc\thing\types\StructuredMeasurement ($value);
		}
	
		return $value;
	}
} // end class StructuredNameValue
