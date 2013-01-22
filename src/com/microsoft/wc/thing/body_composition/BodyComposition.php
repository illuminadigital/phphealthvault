<?php
namespace com\microsoft\wc\thing\body_composition;



/**
 * @XmlNamespaces ({
 *	@XmlNamespace(url="urn:com.microsoft.wc.thing.body-composition", prefix="")
 * })
 * @XmlEntity	(xml="body-composition")
 */
class BodyComposition extends \com\microsoft\wc\thing\AnyMixed {
	/**
	 * Information about the body composition of the record owner.
	 * Examples: % body fat, lean muscle mass.
	 */

	const ID = '18adc276-5144-4e7e-bf6c-e56d8250adf8';
	const NAME = 'Body Composition';

	/**
	 * @XmlElement	(type="\com\microsoft\wc\dates\ApproxDateTime", name="when")
	 */
	protected $when;

	/**
	 * @XmlElement	(type="\com\microsoft\wc\types\CodableValue", name="measurement-name")
	 */
	protected $measurementName;

	/**
	 * @XmlElement	(type="\com\microsoft\wc\thing\body_composition\BodyCompositionValue", name="value")
	 */
	protected $value;

	/**
	 * @XmlElement	(type="\com\microsoft\wc\types\CodableValue", name="measurement-method")
	 */
	protected $measurementMethod;

	/**
	 * @XmlElement	(type="\com\microsoft\wc\types\CodableValue", name="site")
	 */
	protected $site;

	public function __construct($when = NULL, $measurementName = NULL, $value = NULL, $measurementMethod = NULL, $site = NULL) {
		$this->when = ($when===NULL) ? NULL : $this->validateWhen($when);
		$this->measurementName = ($measurementName===NULL) ? NULL : $this->validateMeasurementName($measurementName);
		$this->value = ($value===NULL) ? NULL : $this->validateValue($value);
		$this->measurementMethod = ($measurementMethod===NULL) ? NULL : $this->validateMeasurementMethod($measurementMethod);
		$this->site = ($site===NULL) ? NULL : $this->validateSite($site);
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
		return new \com\microsoft\wc\thing\body_composition\BodyCompositionValue();
	}

	public function setValue($value) {
		$this->value = $this->validateValue($value);
	}

	protected function validateValue($value) {
		if ( ! $value instanceof \com\microsoft\wc\thing\body_composition\BodyCompositionValue ) {
			$value = new \com\microsoft\wc\thing\body_composition\BodyCompositionValue ($value);
		}
	
		return $value;
	}

	public function getMeasurementMethod() {
		if ($this->measurementMethod===NULL) {
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
		if ( ! $measurementMethod instanceof \com\microsoft\wc\types\CodableValue  && ! is_null($measurementMethod) ) {
			$measurementMethod = new \com\microsoft\wc\types\CodableValue ($measurementMethod);
		}
	
		return $measurementMethod;
	}

	public function getSite() {
		if ($this->site===NULL) {
			$this->site = $this->createSite();
		}
		return $this->site;
	}
	
	protected function createSite() {
		return new \com\microsoft\wc\types\CodableValue();
	}

	public function setSite($site) {
		$this->site = $this->validateSite($site);
	}

	protected function validateSite($site) {
		if ( ! $site instanceof \com\microsoft\wc\types\CodableValue  && ! is_null($site) ) {
			$site = new \com\microsoft\wc\types\CodableValue ($site);
		}
	
		return $site;
	}
} // end class BodyComposition
