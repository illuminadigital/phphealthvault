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
	 * List of manually overridden properties that should not be re-generated automatically
	 * @var array
	 */
	protected $_overrides = array();


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

	public function getName($autoCreate = TRUE) {
		if ($this->name===NULL && $autoCreate && ! isset($this->_overrides['name']) ) {
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

	public function getValue($autoCreate = TRUE) {
		if ($this->value===NULL && $autoCreate && ! isset($this->_overrides['value']) ) {
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
