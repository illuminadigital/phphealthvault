<?php
namespace com\microsoft\wc\thing\blood_oxygen_saturation;



/**
 * @XmlNamespaces ({
 *	@XmlNamespace(url="urn:com.microsoft.wc.thing.blood-oxygen-saturation", prefix="")
 * })
 * @XmlEntity	(xml="blood-oxygen-saturation")
 */
class BloodOxygenSaturation extends \com\microsoft\wc\thing\AnyMixed {
	/**
	 * Percentage of oxygen saturation in the blood.
	 */

	const ID = '3a54f95f-03d8-4f62-815f-f691fc94a500';
	const NAME = 'Blood Oxygen Saturation';

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
	 * @XmlElement	(type="\com\microsoft\wc\thing\types\Percentage", name="value")
	 */
	protected $value;

	/**
	 * @XmlElement	(type="\com\microsoft\wc\types\CodableValue", name="measurement-method")
	 */
	protected $measurementMethod;

	/**
	 * @XmlElement	(type="\com\microsoft\wc\types\CodableValue", name="measurement-flags")
	 */
	protected $measurementFlags;

	public function __construct($when = NULL, $value = NULL, $measurementMethod = NULL, $measurementFlags = NULL) {
		$this->when = ($when===NULL) ? NULL : $this->validateWhen($when);
		$this->value = ($value===NULL) ? NULL : $this->validateValue($value);
		$this->measurementMethod = ($measurementMethod===NULL) ? NULL : $this->validateMeasurementMethod($measurementMethod);
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
		return new \com\microsoft\wc\thing\types\Percentage();
	}

	public function setValue($value) {
		$this->value = $this->validateValue($value);
	}

	protected function validateValue($value) {
		if ( ! $value instanceof \com\microsoft\wc\thing\types\Percentage ) {
			$value = new \com\microsoft\wc\thing\types\Percentage ($value);
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
} // end class BloodOxygenSaturation
