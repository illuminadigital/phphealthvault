<?php
namespace com\microsoft\wc\thing\heart_rate;



/**
 * @XmlNamespaces ({
 *	@XmlNamespace(url="urn:com.microsoft.wc.thing.heart-rate", prefix="")
 * })
 * @XmlEntity	(xml="heart-rate")
 */
class HeartRate extends \com\microsoft\wc\thing\AnyMixed {
	/**
	 * A measurement of the record owner's heart rate.
	 */

	const ID = 'b81eb4a6-6eac-4292-ae93-3872d6870994';
	const NAME = 'Heart Rate';

	/**
	 * List of manually overridden properties that should not be re-generated automatically
	 * @var array
	 */
	protected $_overrides = array();


	/**
	 * @XmlElement	(type="\com\microsoft\wc\dates\DateTime", name="when")
	 */
	protected $when;

	/**
	 * @XmlElement	(type="\com\microsoft\wc\thing\types\NonNegativeInt", name="value")
	 */
	protected $value;

	/**
	 * @XmlElement	(type="\com\microsoft\wc\types\CodableValue", name="measurement-method")
	 */
	protected $measurementMethod;

	/**
	 * @XmlElement	(type="\com\microsoft\wc\types\CodableValue", name="measurement-conditions")
	 */
	protected $measurementConditions;

	/**
	 * @XmlElement	(type="\com\microsoft\wc\types\CodableValue", name="measurement-flags")
	 */
	protected $measurementFlags;

	public function __construct($when = NULL, $value = NULL, $measurementMethod = NULL, $measurementConditions = NULL, $measurementFlags = NULL) {
		$this->when = ($when===NULL) ? NULL : $this->validateWhen($when);
		$this->value = ($value===NULL) ? NULL : $this->validateValue($value);
		$this->measurementMethod = ($measurementMethod===NULL) ? NULL : $this->validateMeasurementMethod($measurementMethod);
		$this->measurementConditions = ($measurementConditions===NULL) ? NULL : $this->validateMeasurementConditions($measurementConditions);
		$this->measurementFlags = ($measurementFlags===NULL) ? NULL : $this->validateMeasurementFlags($measurementFlags);
	}

	public function getWhen($autoCreate = TRUE) {
		if ($this->when===NULL && $autoCreate && ! isset($this->_overrides['when']) ) {
			$this->when = $this->createWhen();
		}
		return $this->when;
	}
	
	protected function createWhen() {
		return new \com\microsoft\wc\dates\DateTime();
	}

	public function setWhen($when) {
		$this->when = $this->validateWhen($when);
	}

	protected function validateWhen($when) {
		if ( ! $when instanceof \com\microsoft\wc\dates\DateTime ) {
			$when = new \com\microsoft\wc\dates\DateTime ($when);
		}
	
		return $when;
	}

	public function getValue($autoCreate = TRUE) {
		if ($this->value===NULL && $autoCreate && ! isset($this->_overrides['value']) ) {
			$this->value = $this->createValue();
		}
		return $this->value;
	}
	
	protected function createValue() {
		return new \com\microsoft\wc\thing\types\NonNegativeInt();
	}

	public function setValue($value) {
		$this->value = $this->validateValue($value);
	}

	protected function validateValue($value) {
		if ( ! $value instanceof \com\microsoft\wc\thing\types\NonNegativeInt ) {
			$value = new \com\microsoft\wc\thing\types\NonNegativeInt ($value);
		}
	
		return $value;
	}

	public function getMeasurementMethod($autoCreate = TRUE) {
		if ($this->measurementMethod===NULL && $autoCreate && ! isset($this->_overrides['measurementMethod']) ) {
			$this->measurementMethod = $this->createMeasurementMethod();
		}
		return $this->measurementMethod;
	}
	
	protected function createMeasurementMethod() {
		return new \com\microsoft\wc\types\CodableValue();
	}

	public function setMeasurementMethod($measurementMethod) {
		$this->measurementMethod = $this->validateMeasurementMethod($measurementMethod);
	}

	protected function validateMeasurementMethod($measurementMethod) {
		if ( $measurementMethod === FALSE ) {
			$this->_overrides['measurementMethod'] = TRUE;
			return NULL;
		}

		if ( ! $measurementMethod instanceof \com\microsoft\wc\types\CodableValue  && ! is_null($measurementMethod) ) {
			$measurementMethod = new \com\microsoft\wc\types\CodableValue ($measurementMethod);
		}

		unset ($this->_overrides['measurementMethod']);
	
		return $measurementMethod;
	}

	public function getMeasurementConditions($autoCreate = TRUE) {
		if ($this->measurementConditions===NULL && $autoCreate && ! isset($this->_overrides['measurementConditions']) ) {
			$this->measurementConditions = $this->createMeasurementConditions();
		}
		return $this->measurementConditions;
	}
	
	protected function createMeasurementConditions() {
		return new \com\microsoft\wc\types\CodableValue();
	}

	public function setMeasurementConditions($measurementConditions) {
		$this->measurementConditions = $this->validateMeasurementConditions($measurementConditions);
	}

	protected function validateMeasurementConditions($measurementConditions) {
		if ( $measurementConditions === FALSE ) {
			$this->_overrides['measurementConditions'] = TRUE;
			return NULL;
		}

		if ( ! $measurementConditions instanceof \com\microsoft\wc\types\CodableValue  && ! is_null($measurementConditions) ) {
			$measurementConditions = new \com\microsoft\wc\types\CodableValue ($measurementConditions);
		}

		unset ($this->_overrides['measurementConditions']);
	
		return $measurementConditions;
	}

	public function getMeasurementFlags($autoCreate = TRUE) {
		if ($this->measurementFlags===NULL && $autoCreate && ! isset($this->_overrides['measurementFlags']) ) {
			$this->measurementFlags = $this->createMeasurementFlags();
		}
		return $this->measurementFlags;
	}
	
	protected function createMeasurementFlags() {
		return new \com\microsoft\wc\types\CodableValue();
	}

	public function setMeasurementFlags($measurementFlags) {
		$this->measurementFlags = $this->validateMeasurementFlags($measurementFlags);
	}

	protected function validateMeasurementFlags($measurementFlags) {
		if ( $measurementFlags === FALSE ) {
			$this->_overrides['measurementFlags'] = TRUE;
			return NULL;
		}

		if ( ! $measurementFlags instanceof \com\microsoft\wc\types\CodableValue  && ! is_null($measurementFlags) ) {
			$measurementFlags = new \com\microsoft\wc\types\CodableValue ($measurementFlags);
		}

		unset ($this->_overrides['measurementFlags']);
	
		return $measurementFlags;
	}
} // end class HeartRate
