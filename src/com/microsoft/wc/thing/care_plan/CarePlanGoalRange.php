<?php
namespace com\microsoft\wc\thing\care_plan;



/**
 * @XmlNamespaces ({
 *	@XmlNamespace(url="urn:com.microsoft.wc.thing.care-plan", prefix="")
 * })
 * @XmlEntity	(xml="care-plan-goal-range")
 */
class CarePlanGoalRange {
	/**
	 * A range of values indicating a status for a measurement.
	 */

	/**
	 * List of manually overridden properties that should not be re-generated automatically
	 * @var array
	 */
	protected $_overrides = array();


	/**
	 * @XmlElement	(type="\com\microsoft\wc\thing\types\NonNegativeInt", name="status-indicator")
	 */
	protected $statusIndicator;

	/**
	 * @XmlText	(type="float", name="minimum-value")
	 */
	protected $minimumValue;

	/**
	 * @XmlText	(type="float", name="maximum-value")
	 */
	protected $maximumValue;

	public function __construct($statusIndicator = NULL, $minimumValue = NULL, $maximumValue = NULL) {
		$this->statusIndicator = ($statusIndicator===NULL) ? NULL : $this->validateStatusIndicator($statusIndicator);
		$this->minimumValue = ($minimumValue===NULL) ? NULL : $this->validateMinimumValue($minimumValue);
		$this->maximumValue = ($maximumValue===NULL) ? NULL : $this->validateMaximumValue($maximumValue);
	}

	public function getStatusIndicator($autoCreate = TRUE) {
		if ($this->statusIndicator===NULL && $autoCreate && ! isset($this->_overrides['statusIndicator']) ) {
			$this->statusIndicator = $this->createStatusIndicator();
		}
		return $this->statusIndicator;
	}
	
	protected function createStatusIndicator() {
		return new \com\microsoft\wc\thing\types\NonNegativeInt();
	}

	public function setStatusIndicator($statusIndicator) {
		$this->statusIndicator = $this->validateStatusIndicator($statusIndicator);
	}

	protected function validateStatusIndicator($statusIndicator) {
		if ( ! $statusIndicator instanceof \com\microsoft\wc\thing\types\NonNegativeInt ) {
			$statusIndicator = new \com\microsoft\wc\thing\types\NonNegativeInt ($statusIndicator);
		}
	
		return $statusIndicator;
	}

	public function getMinimumValue($autoCreate = TRUE) {
		if ($this->minimumValue===NULL && $autoCreate && ! isset($this->_overrides['minimumValue']) ) {
			$this->minimumValue = $this->createMinimumValue();
		}
		return $this->minimumValue;
	}
	
	protected function createMinimumValue() {
		return 0.0;
	}

	public function setMinimumValue($minimumValue) {
		$this->minimumValue = $this->validateMinimumValue($minimumValue);
	}

	protected function validateMinimumValue($minimumValue) {
		$isValid = FALSE;
		if ( is_float($minimumValue) ) {
			$isValid = TRUE;
		}
		else if ( is_null($minimumValue) ) {
			$isValid = TRUE;
		}
		else if ( $minimumValue == ($castVar = (float) $minimumValue) ) {
			$isValid = TRUE;
			$minimumValue = $castVar;
		}
		if ( ! $isValid ) {
			throw new \Exception(sprintf('Supplied %s value was not %s', 'minimumValue', 'float'));
		}
	
		return $minimumValue;
	}

	public function getMaximumValue($autoCreate = TRUE) {
		if ($this->maximumValue===NULL && $autoCreate && ! isset($this->_overrides['maximumValue']) ) {
			$this->maximumValue = $this->createMaximumValue();
		}
		return $this->maximumValue;
	}
	
	protected function createMaximumValue() {
		return 0.0;
	}

	public function setMaximumValue($maximumValue) {
		$this->maximumValue = $this->validateMaximumValue($maximumValue);
	}

	protected function validateMaximumValue($maximumValue) {
		$isValid = FALSE;
		if ( is_float($maximumValue) ) {
			$isValid = TRUE;
		}
		else if ( is_null($maximumValue) ) {
			$isValid = TRUE;
		}
		else if ( $maximumValue == ($castVar = (float) $maximumValue) ) {
			$isValid = TRUE;
			$maximumValue = $castVar;
		}
		if ( ! $isValid ) {
			throw new \Exception(sprintf('Supplied %s value was not %s', 'maximumValue', 'float'));
		}
	
		return $maximumValue;
	}
} // end class CarePlanGoalRange
