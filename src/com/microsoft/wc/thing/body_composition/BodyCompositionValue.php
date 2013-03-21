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
	 * List of manually overridden properties that should not be re-generated automatically
	 * @var array
	 */
	protected $_overrides = array();


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

	public function getMassValue($autoCreate = TRUE) {
		if ($this->massValue===NULL && $autoCreate && ! isset($this->_overrides['massValue']) ) {
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
		if ( $massValue === FALSE ) {
			$this->_overrides['massValue'] = TRUE;
			return NULL;
		}

		if ( ! $massValue instanceof \com\microsoft\wc\thing\types\WeightValue  && ! is_null($massValue) ) {
			$massValue = new \com\microsoft\wc\thing\types\WeightValue ($massValue);
		}

		unset ($this->_overrides['massValue']);
	
		return $massValue;
	}

	public function getPercentValue($autoCreate = TRUE) {
		if ($this->percentValue===NULL && $autoCreate && ! isset($this->_overrides['percentValue']) ) {
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
		if ( $percentValue === FALSE ) {
			$this->_overrides['percentValue'] = TRUE;
			return NULL;
		}

		if ( ! $percentValue instanceof \com\microsoft\wc\thing\types\Percentage  && ! is_null($percentValue) ) {
			$percentValue = new \com\microsoft\wc\thing\types\Percentage ($percentValue);
		}

		unset ($this->_overrides['percentValue']);
	
		return $percentValue;
	}
} // end class BodyCompositionValue
