<?php
namespace com\microsoft\wc\thing\BloodGlucose;



/**
 * @XmlNamespaces ({
 *	@XmlNamespace(url="urn:com.microsoft.wc.thing.BloodGlucose", prefix="")
 * })
 * @XmlEntity	(xml="blood-glucose")
 */
class BloodGlucose extends \com\microsoft\wc\thing\AnyMixed {
	/**
	 * Defines a single blood glucose reading.
	 */

	const ID = '879e7c04-4e8a-4707-9ad3-b054df467ce4';
	const NAME = 'Blood Glucose Measurement';

	/**
	 * @XmlElement	(type="\com\microsoft\wc\dates\DateTime", name="when")
	 */
	protected $when;

	/**
	 * @XmlElement	(type="\com\microsoft\wc\thing\types\BloodGlucoseValue", name="value")
	 */
	protected $value;

	/**
	 * @XmlElement	(type="\com\microsoft\wc\types\CodableValue", name="glucose-measurement-type")
	 */
	protected $glucoseMeasurementType;

	/**
	 * @XmlText	(type="boolean", name="outside-operating-temp")
	 */
	protected $outsideOperatingTemp;

	/**
	 * @XmlText	(type="boolean", name="is-control-test")
	 */
	protected $isControlTest;

	/**
	 * @XmlElement	(type="\com\microsoft\wc\thing\types\OneToFive", name="normalcy")
	 */
	protected $normalcy;

	/**
	 * @XmlElement	(type="\com\microsoft\wc\types\CodableValue", name="measurement-context")
	 */
	protected $measurementContext;

	public function __construct($when = NULL, $value = NULL, $glucoseMeasurementType = NULL, $outsideOperatingTemp = NULL, $isControlTest = NULL, $normalcy = NULL, $measurementContext = NULL) {
		$this->when = ($when===NULL) ? NULL : $this->validateWhen($when);
		$this->value = ($value===NULL) ? NULL : $this->validateValue($value);
		$this->glucoseMeasurementType = ($glucoseMeasurementType===NULL) ? NULL : $this->validateGlucoseMeasurementType($glucoseMeasurementType);
		$this->outsideOperatingTemp = ($outsideOperatingTemp===NULL) ? NULL : $this->validateOutsideOperatingTemp($outsideOperatingTemp);
		$this->isControlTest = ($isControlTest===NULL) ? NULL : $this->validateIsControlTest($isControlTest);
		$this->normalcy = ($normalcy===NULL) ? NULL : $this->validateNormalcy($normalcy);
		$this->measurementContext = ($measurementContext===NULL) ? NULL : $this->validateMeasurementContext($measurementContext);
	}

	public function getWhen() {
		if ($this->when===NULL) {
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

	public function getValue() {
		if ($this->value===NULL) {
			$this->value = $this->createValue();
		}
		return $this->value;
	}
	
	protected function createValue() {
		return new \com\microsoft\wc\thing\types\BloodGlucoseValue();
	}

	public function setValue($value) {
		$this->value = $this->validateValue($value);
	}

	protected function validateValue($value) {
		if ( ! $value instanceof \com\microsoft\wc\thing\types\BloodGlucoseValue ) {
			$value = new \com\microsoft\wc\thing\types\BloodGlucoseValue ($value);
		}
	
		return $value;
	}

	public function getGlucoseMeasurementType() {
		if ($this->glucoseMeasurementType===NULL) {
			$this->glucoseMeasurementType = $this->createGlucoseMeasurementType();
		}
		return $this->glucoseMeasurementType;
	}
	
	protected function createGlucoseMeasurementType() {
		return new \com\microsoft\wc\types\CodableValue();
	}

	public function setGlucoseMeasurementType($glucoseMeasurementType) {
		$this->glucoseMeasurementType = $this->validateGlucoseMeasurementType($glucoseMeasurementType);
	}

	protected function validateGlucoseMeasurementType($glucoseMeasurementType) {
		if ( ! $glucoseMeasurementType instanceof \com\microsoft\wc\types\CodableValue ) {
			$glucoseMeasurementType = new \com\microsoft\wc\types\CodableValue ($glucoseMeasurementType);
		}
	
		return $glucoseMeasurementType;
	}

	public function getOutsideOperatingTemp() {
		if ($this->outsideOperatingTemp===NULL) {
			$this->outsideOperatingTemp = $this->createOutsideOperatingTemp();
		}
		return $this->outsideOperatingTemp;
	}
	
	protected function createOutsideOperatingTemp() {
		return FALSE;
	}

	public function setOutsideOperatingTemp($outsideOperatingTemp) {
		$this->outsideOperatingTemp = $this->validateOutsideOperatingTemp($outsideOperatingTemp);
	}

	protected function validateOutsideOperatingTemp($outsideOperatingTemp) {
		if ( ! is_bool($outsideOperatingTemp) && ! is_null($outsideOperatingTemp) ) {
			throw new \Exception(sprintf('Supplied %s value was not %s', 'outsideOperatingTemp', 'boolean'));
		}
	
		return $outsideOperatingTemp;
	}

	public function getIsControlTest() {
		if ($this->isControlTest===NULL) {
			$this->isControlTest = $this->createIsControlTest();
		}
		return $this->isControlTest;
	}
	
	protected function createIsControlTest() {
		return FALSE;
	}

	public function setIsControlTest($isControlTest) {
		$this->isControlTest = $this->validateIsControlTest($isControlTest);
	}

	protected function validateIsControlTest($isControlTest) {
		if ( ! is_bool($isControlTest) && ! is_null($isControlTest) ) {
			throw new \Exception(sprintf('Supplied %s value was not %s', 'isControlTest', 'boolean'));
		}
	
		return $isControlTest;
	}

	public function getNormalcy() {
		if ($this->normalcy===NULL) {
			$this->normalcy = $this->createNormalcy();
		}
		return $this->normalcy;
	}
	
	protected function createNormalcy() {
		return new \com\microsoft\wc\thing\types\OneToFive();
	}

	public function setNormalcy($normalcy) {
		$this->normalcy = $this->validateNormalcy($normalcy);
	}

	protected function validateNormalcy($normalcy) {
		if ( ! $normalcy instanceof \com\microsoft\wc\thing\types\OneToFive  && ! is_null($normalcy) ) {
			$normalcy = new \com\microsoft\wc\thing\types\OneToFive ($normalcy);
		}
	
		return $normalcy;
	}

	public function getMeasurementContext() {
		if ($this->measurementContext===NULL) {
			$this->measurementContext = $this->createMeasurementContext();
		}
		return $this->measurementContext;
	}
	
	protected function createMeasurementContext() {
		return new \com\microsoft\wc\types\CodableValue();
	}

	public function setMeasurementContext($measurementContext) {
		$this->measurementContext = $this->validateMeasurementContext($measurementContext);
	}

	protected function validateMeasurementContext($measurementContext) {
		if ( ! $measurementContext instanceof \com\microsoft\wc\types\CodableValue  && ! is_null($measurementContext) ) {
			$measurementContext = new \com\microsoft\wc\types\CodableValue ($measurementContext);
		}
	
		return $measurementContext;
	}
} // end class BloodGlucose
