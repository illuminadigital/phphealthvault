<?php
namespace com\microsoft\wc\thing\vital_signs;



/**
 * @XmlNamespaces ({
 *	@XmlNamespace(url="urn:com.microsoft.wc.thing.vital-signs", prefix="")
 * })
 * @XmlEntity	(xml="vital-sign-result-type")
 */
class VitalSignResultType {
	/**
	 */

	/**
	 * @XmlElement	(type="\com\microsoft\wc\types\CodableValue", name="title")
	 */
	protected $title;

	/**
	 * @XmlText	(type="float", name="value")
	 */
	protected $value;

	/**
	 * @XmlElement	(type="\com\microsoft\wc\types\CodableValue", name="unit")
	 */
	protected $unit;

	/**
	 * @XmlText	(type="float", name="reference-minimum")
	 */
	protected $referenceMinimum;

	/**
	 * @XmlText	(type="float", name="reference-maximum")
	 */
	protected $referenceMaximum;

	/**
	 * @XmlText	(type="string", name="text-value")
	 */
	protected $textValue;

	/**
	 * @XmlElement	(type="\com\microsoft\wc\types\CodableValue", name="flag")
	 */
	protected $flag;

	public function __construct($title = NULL, $value = NULL, $unit = NULL, $referenceMinimum = NULL, $referenceMaximum = NULL, $textValue = NULL, $flag = NULL) {
		$this->title = ($title===NULL) ? NULL : $this->validateTitle($title);
		$this->value = ($value===NULL) ? NULL : $this->validateValue($value);
		$this->unit = ($unit===NULL) ? NULL : $this->validateUnit($unit);
		$this->referenceMinimum = ($referenceMinimum===NULL) ? NULL : $this->validateReferenceMinimum($referenceMinimum);
		$this->referenceMaximum = ($referenceMaximum===NULL) ? NULL : $this->validateReferenceMaximum($referenceMaximum);
		$this->textValue = ($textValue===NULL) ? NULL : $this->validateTextValue($textValue);
		$this->flag = ($flag===NULL) ? NULL : $this->validateFlag($flag);
	}

	public function getTitle() {
		if ($this->title===NULL) {
			$this->title = $this->createTitle();
		}
		return $this->title;
	}
	
	protected function createTitle() {
		return new \com\microsoft\wc\types\CodableValue();
	}

	public function setTitle($title) {
		$this->title = $this->validateTitle($title);
	}

	protected function validateTitle($title) {
		if ( ! $title instanceof \com\microsoft\wc\types\CodableValue ) {
			$title = new \com\microsoft\wc\types\CodableValue ($title);
		}
	
		return $title;
	}

	public function getValue() {
		if ($this->value===NULL) {
			$this->value = $this->createValue();
		}
		return $this->value;
	}
	
	protected function createValue() {
		return 0.0;
	}

	public function setValue($value) {
		$this->value = $this->validateValue($value);
	}

	protected function validateValue($value) {
		if ( ! is_float($value) && ! is_null($value) ) {
			throw new \Exception(sprintf('Supplied %s value was not %s', 'value', 'float'));
		}
	
		return $value;
	}

	public function getUnit() {
		if ($this->unit===NULL) {
			$this->unit = $this->createUnit();
		}
		return $this->unit;
	}
	
	protected function createUnit() {
		return new \com\microsoft\wc\types\CodableValue();
	}

	public function setUnit($unit) {
		$this->unit = $this->validateUnit($unit);
	}

	protected function validateUnit($unit) {
		if ( ! $unit instanceof \com\microsoft\wc\types\CodableValue  && ! is_null($unit) ) {
			$unit = new \com\microsoft\wc\types\CodableValue ($unit);
		}
	
		return $unit;
	}

	public function getReferenceMinimum() {
		if ($this->referenceMinimum===NULL) {
			$this->referenceMinimum = $this->createReferenceMinimum();
		}
		return $this->referenceMinimum;
	}
	
	protected function createReferenceMinimum() {
		return 0.0;
	}

	public function setReferenceMinimum($referenceMinimum) {
		$this->referenceMinimum = $this->validateReferenceMinimum($referenceMinimum);
	}

	protected function validateReferenceMinimum($referenceMinimum) {
		if ( ! is_float($referenceMinimum) && ! is_null($referenceMinimum) ) {
			throw new \Exception(sprintf('Supplied %s value was not %s', 'referenceMinimum', 'float'));
		}
	
		return $referenceMinimum;
	}

	public function getReferenceMaximum() {
		if ($this->referenceMaximum===NULL) {
			$this->referenceMaximum = $this->createReferenceMaximum();
		}
		return $this->referenceMaximum;
	}
	
	protected function createReferenceMaximum() {
		return 0.0;
	}

	public function setReferenceMaximum($referenceMaximum) {
		$this->referenceMaximum = $this->validateReferenceMaximum($referenceMaximum);
	}

	protected function validateReferenceMaximum($referenceMaximum) {
		if ( ! is_float($referenceMaximum) && ! is_null($referenceMaximum) ) {
			throw new \Exception(sprintf('Supplied %s value was not %s', 'referenceMaximum', 'float'));
		}
	
		return $referenceMaximum;
	}

	public function getTextValue() {
		if ($this->textValue===NULL) {
			$this->textValue = $this->createTextValue();
		}
		return $this->textValue;
	}
	
	protected function createTextValue() {
		return '';
	}

	public function setTextValue($textValue) {
		$this->textValue = $this->validateTextValue($textValue);
	}

	protected function validateTextValue($textValue) {
		if ( ! is_string($textValue) && ! is_null($textValue) ) {
			throw new \Exception(sprintf('Supplied %s value was not %s', 'textValue', 'string'));
		}
	
		return $textValue;
	}

	public function getFlag() {
		if ($this->flag===NULL) {
			$this->flag = $this->createFlag();
		}
		return $this->flag;
	}
	
	protected function createFlag() {
		return new \com\microsoft\wc\types\CodableValue();
	}

	public function setFlag($flag) {
		$this->flag = $this->validateFlag($flag);
	}

	protected function validateFlag($flag) {
		if ( ! $flag instanceof \com\microsoft\wc\types\CodableValue  && ! is_null($flag) ) {
			$flag = new \com\microsoft\wc\types\CodableValue ($flag);
		}
	
		return $flag;
	}
} // end class VitalSignResultType
