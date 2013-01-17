<?php
namespace com\microsoft\wc\vocab;



/**
 * @XmlNamespaces ({
 *	@XmlNamespace(url="urn:com.microsoft.wc.vocab", prefix="wc-vocab")
 * })
 * @XmlEntity	(xml="medication-strength")
 */
class MedicationStrength {
	/**
	 * The strength of the medication is how much drug a specific unit of a medication contains.
	 * For example, Tylenol 500 MG Tablet, 500 MG is the name.
	 */

	/**
	 * @XmlElement	(type="\com\microsoft\wc\types\Stringnz", name="display-text")
	 */
	protected $displayText;

	/**
	 * @XmlElement	(type="\com\microsoft\wc\types\Stringnz", name="value")
	 */
	protected $value;

	/**
	 * @XmlElement	(type="\com\microsoft\wc\types\CodableValue", name="unit")
	 */
	protected $unit;

	public function __construct($displayText = NULL, $value = NULL, $unit = NULL) {
		$this->displayText = ($displayText===NULL) ? NULL : $this->validateDisplayText($displayText);
		$this->value = ($value===NULL) ? NULL : $this->validateValue($value);
		$this->unit = ($unit===NULL) ? NULL : $this->validateUnit($unit);
	}

	public function getDisplayText() {
		if ($this->displayText===NULL) {
			$this->displayText = $this->createDisplayText();
		}
		return $this->displayText;
	}
	
	protected function createDisplayText() {
		return new \com\microsoft\wc\types\Stringnz();
	}

	public function setDisplayText($displayText) {
		$this->displayText = $this->validateDisplayText($displayText);
	}

	protected function validateDisplayText($displayText) {
		if ( ! $displayText instanceof \com\microsoft\wc\types\Stringnz ) {
			$displayText = new \com\microsoft\wc\types\Stringnz ($displayText);
		}
	
		return $displayText;
	}

	public function getValue() {
		if ($this->value===NULL) {
			$this->value = $this->createValue();
		}
		return $this->value;
	}
	
	protected function createValue() {
		return new \com\microsoft\wc\types\Stringnz();
	}

	public function setValue($value) {
		$this->value = $this->validateValue($value);
	}

	protected function validateValue($value) {
		if ( ! $value instanceof \com\microsoft\wc\types\Stringnz  && ! is_null($value) ) {
			$value = new \com\microsoft\wc\types\Stringnz ($value);
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
} // end class MedicationStrength
