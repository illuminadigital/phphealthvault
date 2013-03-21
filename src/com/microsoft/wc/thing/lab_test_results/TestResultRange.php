<?php
namespace com\microsoft\wc\thing\lab_test_results;



/**
 * @XmlNamespaces ({
 *	@XmlNamespace(url="urn:com.microsoft.wc.thing.lab-test-results", prefix="")
 * })
 * @XmlEntity	(xml="test-result-range")
 */
class TestResultRange {
	/**
	 * A range related to a specific test result.
	 */

	/**
	 * List of manually overridden properties that should not be re-generated automatically
	 * @var array
	 */
	protected $_overrides = array();


	/**
	 * @XmlElement	(type="\com\microsoft\wc\types\CodableValue", name="type")
	 */
	protected $type;

	/**
	 * @XmlElement	(type="\com\microsoft\wc\types\CodableValue", name="text")
	 */
	protected $text;

	/**
	 * @XmlElement	(type="\com\microsoft\wc\thing\lab_test_results\TestResultRangeValue", name="value")
	 */
	protected $value;

	public function __construct($type = NULL, $text = NULL, $value = NULL) {
		$this->type = ($type===NULL) ? NULL : $this->validateType($type);
		$this->text = ($text===NULL) ? NULL : $this->validateText($text);
		$this->value = ($value===NULL) ? NULL : $this->validateValue($value);
	}

	public function getType($autoCreate = TRUE) {
		if ($this->type===NULL && $autoCreate && ! isset($this->_overrides['type']) ) {
			$this->type = $this->createType();
		}
		return $this->type;
	}
	
	protected function createType() {
		return new \com\microsoft\wc\types\CodableValue();
	}

	public function setType($type) {
		$this->type = $this->validateType($type);
	}

	protected function validateType($type) {
		if ( ! $type instanceof \com\microsoft\wc\types\CodableValue ) {
			$type = new \com\microsoft\wc\types\CodableValue ($type);
		}
	
		return $type;
	}

	public function getText($autoCreate = TRUE) {
		if ($this->text===NULL && $autoCreate && ! isset($this->_overrides['text']) ) {
			$this->text = $this->createText();
		}
		return $this->text;
	}
	
	protected function createText() {
		return new \com\microsoft\wc\types\CodableValue();
	}

	public function setText($text) {
		$this->text = $this->validateText($text);
	}

	protected function validateText($text) {
		if ( ! $text instanceof \com\microsoft\wc\types\CodableValue ) {
			$text = new \com\microsoft\wc\types\CodableValue ($text);
		}
	
		return $text;
	}

	public function getValue($autoCreate = TRUE) {
		if ($this->value===NULL && $autoCreate && ! isset($this->_overrides['value']) ) {
			$this->value = $this->createValue();
		}
		return $this->value;
	}
	
	protected function createValue() {
		return new \com\microsoft\wc\thing\lab_test_results\TestResultRangeValue();
	}

	public function setValue($value) {
		$this->value = $this->validateValue($value);
	}

	protected function validateValue($value) {
		if ( $value === FALSE ) {
			$this->_overrides['value'] = TRUE;
			return NULL;
		}

		if ( ! $value instanceof \com\microsoft\wc\thing\lab_test_results\TestResultRangeValue  && ! is_null($value) ) {
			$value = new \com\microsoft\wc\thing\lab_test_results\TestResultRangeValue ($value);
		}

		unset ($this->_overrides['value']);
	
		return $value;
	}
} // end class TestResultRange
