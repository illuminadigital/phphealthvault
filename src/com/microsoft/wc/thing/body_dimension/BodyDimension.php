<?php
namespace com\microsoft\wc\thing\body_dimension;



/**
 * @XmlNamespaces ({
 *	@XmlNamespace(url="urn:com.microsoft.wc.thing.body-dimension", prefix="")
 * })
 * @XmlEntity	(xml="body-dimension")
 */
class BodyDimension extends \com\microsoft\wc\thing\AnyMixed {
	/**
	 * Stores a body dimension.
	 * Examples: Waist size, head circumference, length (pediatric).
	 */

	const ID = 'dd710b31-2b6f-45bd-9552-253562b9a7c1';
	const NAME = 'Body Dimension';

	/**
	 * @XmlElement	(type="\com\microsoft\wc\dates\ApproxDateTime", name="when")
	 */
	protected $when;

	/**
	 * @XmlElement	(type="\com\microsoft\wc\types\CodableValue", name="measurement-name")
	 */
	protected $measurementName;

	/**
	 * @XmlElement	(type="\com\microsoft\wc\thing\types\LengthValue", name="value")
	 */
	protected $value;

	public function __construct($when = NULL, $measurementName = NULL, $value = NULL) {
		$this->when = ($when===NULL) ? NULL : $this->validateWhen($when);
		$this->measurementName = ($measurementName===NULL) ? NULL : $this->validateMeasurementName($measurementName);
		$this->value = ($value===NULL) ? NULL : $this->validateValue($value);
	}

	public function getWhen() {
		if ($this->when===NULL) {
			$this->when = $this->createWhen();
		}
		return $this->when;
	}
	
	protected function createWhen() {
		return new \com\microsoft\wc\dates\ApproxDateTime();
	}

	public function setWhen($when) {
		$this->when = $this->validateWhen($when);
	}

	protected function validateWhen($when) {
		if ( ! $when instanceof \com\microsoft\wc\dates\ApproxDateTime ) {
			$when = new \com\microsoft\wc\dates\ApproxDateTime ($when);
		}
	
		return $when;
	}

	public function getMeasurementName() {
		if ($this->measurementName===NULL) {
			$this->measurementName = $this->createMeasurementName();
		}
		return $this->measurementName;
	}
	
	protected function createMeasurementName() {
		return new \com\microsoft\wc\types\CodableValue();
	}

	public function setMeasurementName($measurementName) {
		$this->measurementName = $this->validateMeasurementName($measurementName);
	}

	protected function validateMeasurementName($measurementName) {
		if ( ! $measurementName instanceof \com\microsoft\wc\types\CodableValue ) {
			$measurementName = new \com\microsoft\wc\types\CodableValue ($measurementName);
		}
	
		return $measurementName;
	}

	public function getValue() {
		if ($this->value===NULL) {
			$this->value = $this->createValue();
		}
		return $this->value;
	}
	
	protected function createValue() {
		return new \com\microsoft\wc\thing\types\LengthValue();
	}

	public function setValue($value) {
		$this->value = $this->validateValue($value);
	}

	protected function validateValue($value) {
		if ( ! $value instanceof \com\microsoft\wc\thing\types\LengthValue ) {
			$value = new \com\microsoft\wc\thing\types\LengthValue ($value);
		}
	
		return $value;
	}
} // end class BodyDimension
