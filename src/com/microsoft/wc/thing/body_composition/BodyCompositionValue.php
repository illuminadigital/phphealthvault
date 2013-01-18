<?php
namespace com\microsoft\wc\thing\body_composition;



/**
 * @XmlNamespaces ({
 *	@XmlNamespace(url="urn:com.microsoft.wc.thing.body-composition", prefix="")
 * })
 * @XmlEntity	(xml="BodyCompositionValue")
 */
class BodyCompositionValue {
	/**
	 * A single measurement of body composition.
	 * The mass-value element is used to store mass values, and the percentage-valueis used to store percentages. An application should set one or the other. When both values are available, they should be stored in separate instances.
	 */

	/**
	 * @XmlElement	(type="\com\microsoft\wc\thing\types\WeightValue", name="mass-value")
	 */
	protected $massValue;

	/**
	 * @XmlElement	(type="\com\microsoft\wc\thing\types\Percentage", name="percent-value")
	 */
	protected $percentValue;

	public function __construct($massValue = NULL, $percentValue = NULL) {
		$this->massValue = ($massValue===NULL) ? NULL : $this->validateMassValue($massValue);
		$this->percentValue = ($percentValue===NULL) ? NULL : $this->validatePercentValue($percentValue);
	}

	public function getMassValue() {
		if ($this->massValue===NULL) {
			$this->massValue = $this->createMassValue();
		}
		return $this->massValue;
	}
	
	protected function createMassValue() {
		return new \com\microsoft\wc\thing\types\WeightValue();
	}

	public function setMassValue($massValue) {
		$this->massValue = $this->validateMassValue($massValue);
	}

	protected function validateMassValue($massValue) {
		if ( ! $massValue instanceof \com\microsoft\wc\thing\types\WeightValue  && ! is_null($massValue) ) {
			$massValue = new \com\microsoft\wc\thing\types\WeightValue ($massValue);
		}
	
		return $massValue;
	}

	public function getPercentValue() {
		if ($this->percentValue===NULL) {
			$this->percentValue = $this->createPercentValue();
		}
		return $this->percentValue;
	}
	
	protected function createPercentValue() {
		return new \com\microsoft\wc\thing\types\Percentage();
	}

	public function setPercentValue($percentValue) {
		$this->percentValue = $this->validatePercentValue($percentValue);
	}

	protected function validatePercentValue($percentValue) {
		if ( ! $percentValue instanceof \com\microsoft\wc\thing\types\Percentage  && ! is_null($percentValue) ) {
			$percentValue = new \com\microsoft\wc\thing\types\Percentage ($percentValue);
		}
	
		return $percentValue;
	}
} // end class BodyCompositionValue
