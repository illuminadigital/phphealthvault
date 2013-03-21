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
	 * List of manually overridden properties that should not be re-generated automatically
	 * @var array
	 */
	protected $_overrides = array();


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

	public function getTitle($autoCreate = TRUE) {
		if ($this->title===NULL && $autoCreate && ! isset($this->_overrides['title']) ) {
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

	public function getValue($autoCreate = TRUE) {
		if ($this->value===NULL && $autoCreate && ! isset($this->_overrides['value']) ) {
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
		$isValid = FALSE;
		if ( is_float($value) ) {
			$isValid = TRUE;
		}
		else if ( is_null($value) ) {
			$isValid = TRUE;
		}
		else if ( $value == ($castVar = (float) $value) ) {
			$isValid = TRUE;
			$value = $castVar;
		}
		if ( ! $isValid ) {
			throw new \Exception(sprintf('Supplied %s value was not %s', 'value', 'float'));
		}
	
		return $value;
	}

	public function getUnit($autoCreate = TRUE) {
		if ($this->unit===NULL && $autoCreate && ! isset($this->_overrides['unit']) ) {
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
		if ( $unit === FALSE ) {
			$this->_overrides['unit'] = TRUE;
			return NULL;
		}

		if ( ! $unit instanceof \com\microsoft\wc\types\CodableValue  && ! is_null($unit) ) {
			$unit = new \com\microsoft\wc\types\CodableValue ($unit);
		}

		unset ($this->_overrides['unit']);
	
		return $unit;
	}

	public function getReferenceMinimum($autoCreate = TRUE) {
		if ($this->referenceMinimum===NULL && $autoCreate && ! isset($this->_overrides['referenceMinimum']) ) {
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
		$isValid = FALSE;
		if ( is_float($referenceMinimum) ) {
			$isValid = TRUE;
		}
		else if ( is_null($referenceMinimum) ) {
			$isValid = TRUE;
		}
		else if ( $referenceMinimum == ($castVar = (float) $referenceMinimum) ) {
			$isValid = TRUE;
			$referenceMinimum = $castVar;
		}
		if ( ! $isValid ) {
			throw new \Exception(sprintf('Supplied %s value was not %s', 'referenceMinimum', 'float'));
		}
	
		return $referenceMinimum;
	}

	public function getReferenceMaximum($autoCreate = TRUE) {
		if ($this->referenceMaximum===NULL && $autoCreate && ! isset($this->_overrides['referenceMaximum']) ) {
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
		$isValid = FALSE;
		if ( is_float($referenceMaximum) ) {
			$isValid = TRUE;
		}
		else if ( is_null($referenceMaximum) ) {
			$isValid = TRUE;
		}
		else if ( $referenceMaximum == ($castVar = (float) $referenceMaximum) ) {
			$isValid = TRUE;
			$referenceMaximum = $castVar;
		}
		if ( ! $isValid ) {
			throw new \Exception(sprintf('Supplied %s value was not %s', 'referenceMaximum', 'float'));
		}
	
		return $referenceMaximum;
	}

	public function getTextValue($autoCreate = TRUE) {
		if ($this->textValue===NULL && $autoCreate && ! isset($this->_overrides['textValue']) ) {
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

	public function getFlag($autoCreate = TRUE) {
		if ($this->flag===NULL && $autoCreate && ! isset($this->_overrides['flag']) ) {
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
		if ( $flag === FALSE ) {
			$this->_overrides['flag'] = TRUE;
			return NULL;
		}

		if ( ! $flag instanceof \com\microsoft\wc\types\CodableValue  && ! is_null($flag) ) {
			$flag = new \com\microsoft\wc\types\CodableValue ($flag);
		}

		unset ($this->_overrides['flag']);
	
		return $flag;
	}
} // end class VitalSignResultType
