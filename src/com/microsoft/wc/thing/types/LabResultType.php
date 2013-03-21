<?php
namespace com\microsoft\wc\thing\types;



/**
 * @XmlNamespaces ({
 *	@XmlNamespace(url="urn:com.microsoft.wc.thing.types", prefix="urn:com.microsoft.wc.thing.types")
 * })
 * @XmlEntity	(xml="lab-result-type")
 */
class LabResultType {
	/**
	 * LabResultType
	 * A clinical value within a laboratory result.
	 * This type is define a clinical value within a laboratory result,including value, unit, reference and toxic ranges.
	 */

	/**
	 * List of manually overridden properties that should not be re-generated automatically
	 * @var array
	 */
	protected $_overrides = array();


	/**
	 * @XmlText	(type="float", name="value")
	 */
	protected $value;

	/**
	 * @XmlElement	(type="\com\microsoft\wc\types\CodableValue", name="unit")
	 */
	protected $unit;

	/**
	 * @XmlElement	(type="\com\microsoft\wc\thing\types\DoubleRange", name="reference-range")
	 */
	protected $referenceRange;

	/**
	 * @XmlElement	(type="\com\microsoft\wc\thing\types\DoubleRange", name="toxic-range")
	 */
	protected $toxicRange;

	/**
	 * @XmlText	(type="string", name="text-value")
	 */
	protected $textValue;

	/**
	 * @XmlElement	(type="\com\microsoft\wc\types\CodableValue", collection="true", name="flag")
	 */
	protected $flag;

	public function __construct($value = NULL, $unit = NULL, $referenceRange = NULL, $toxicRange = NULL, $textValue = NULL, $flag = NULL) {
		$this->value = ($value===NULL) ? NULL : $this->validateValue($value);
		$this->unit = ($unit===NULL) ? NULL : $this->validateUnit($unit);
		$this->referenceRange = ($referenceRange===NULL) ? NULL : $this->validateReferenceRange($referenceRange);
		$this->toxicRange = ($toxicRange===NULL) ? NULL : $this->validateToxicRange($toxicRange);
		$this->textValue = ($textValue===NULL) ? NULL : $this->validateTextValue($textValue);
		$this->flag = ($flag===NULL) ? NULL : $this->validateFlag($flag);
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

	public function getReferenceRange($autoCreate = TRUE) {
		if ($this->referenceRange===NULL && $autoCreate && ! isset($this->_overrides['referenceRange']) ) {
			$this->referenceRange = $this->createReferenceRange();
		}
		return $this->referenceRange;
	}
	
	protected function createReferenceRange() {
		return new \com\microsoft\wc\thing\types\DoubleRange();
	}

	public function setReferenceRange($referenceRange) {
		$this->referenceRange = $this->validateReferenceRange($referenceRange);
	}

	protected function validateReferenceRange($referenceRange) {
		if ( $referenceRange === FALSE ) {
			$this->_overrides['referenceRange'] = TRUE;
			return NULL;
		}

		if ( ! $referenceRange instanceof \com\microsoft\wc\thing\types\DoubleRange  && ! is_null($referenceRange) ) {
			$referenceRange = new \com\microsoft\wc\thing\types\DoubleRange ($referenceRange);
		}

		unset ($this->_overrides['referenceRange']);
	
		return $referenceRange;
	}

	public function getToxicRange($autoCreate = TRUE) {
		if ($this->toxicRange===NULL && $autoCreate && ! isset($this->_overrides['toxicRange']) ) {
			$this->toxicRange = $this->createToxicRange();
		}
		return $this->toxicRange;
	}
	
	protected function createToxicRange() {
		return new \com\microsoft\wc\thing\types\DoubleRange();
	}

	public function setToxicRange($toxicRange) {
		$this->toxicRange = $this->validateToxicRange($toxicRange);
	}

	protected function validateToxicRange($toxicRange) {
		if ( $toxicRange === FALSE ) {
			$this->_overrides['toxicRange'] = TRUE;
			return NULL;
		}

		if ( ! $toxicRange instanceof \com\microsoft\wc\thing\types\DoubleRange  && ! is_null($toxicRange) ) {
			$toxicRange = new \com\microsoft\wc\thing\types\DoubleRange ($toxicRange);
		}

		unset ($this->_overrides['toxicRange']);
	
		return $toxicRange;
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
		return array();
	}

	public function setFlag($flag) {
		$this->flag = $this->validateFlag($flag);
	}

	protected function validateFlag($flag) {
		if ( $flag === FALSE ) {
			$this->_overrides['flag'] = TRUE;
			return NULL;
		}

		if ( ! is_array ($flag) && ! is_null($flag) ) {
			$flag = array($flag);
		}

		unset ($this->_overrides['flag']);
		$count = count($flag);
		if ($count < 0) {
			throw new \Exception(sprintf('Supplied %s array has less than the required number (%d) of entries.', 'flag', 0));
		}
		foreach ($flag as $entry) {
			if (!($entry instanceof CodableValue)) {
				throw new \Exception(sprintf('Supplied %s value was not %s', 'flag', 'codable-value'));
			}
		}
	
		return $flag;
	}

	public function addFlag($flag) {
		$this->flag[] = $flag;
	}
} // end class LabResultType
