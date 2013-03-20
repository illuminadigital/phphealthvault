<?php
namespace com\microsoft\wc\thing\types;



/**
 * @XmlNamespaces ({
 *	@XmlNamespace(url="urn:com.microsoft.wc.thing.types", prefix="urn:com.microsoft.wc.thing.types")
 * })
 * @XmlEntity	(xml="temperature-value")
 */
class TemperatureValue {
	/**
	 * TemperatureMeasurement
	 * A temperature measurement.
	 * A temperature measurement consists of the value in Celsuis(C), which is the base unit of measurement for temperature,and an optional display value. The display value is used tostore the temperature in the user's preference ofunits. This avoids rounding errors whenconverting to and back from Celsius.
	 */

	/**
	 * @XmlText	(type="float", name="celsius")
	 */
	protected $celsius;

	/**
	 * @XmlElement	(type="\com\microsoft\wc\thing\types\DisplayValue", name="display")
	 */
	protected $display;

	public function __construct($celsius = NULL, $display = NULL) {
		$this->celsius = ($celsius===NULL) ? NULL : $this->validateCelsius($celsius);
		$this->display = ($display===NULL) ? NULL : $this->validateDisplay($display);
	}

	public function getCelsius() {
		if ($this->celsius===NULL) {
			$this->celsius = $this->createCelsius();
		}
		return $this->celsius;
	}
	
	protected function createCelsius() {
		return 0.0;
	}

	public function setCelsius($celsius) {
		$this->celsius = $this->validateCelsius($celsius);
	}

	protected function validateCelsius($celsius) {
		$isValid = FALSE;
		if ( is_float($celsius) ) {
			$isValid = TRUE;
		}
		else if ( $celsius == ($castVar = (float) $celsius) ) {
			$isValid = TRUE;
			$celsius = $castVar;
		}
		if ( ! $isValid ) {
			throw new \Exception(sprintf('Supplied %s value was not %s', 'celsius', 'float'));
		}
	
		return $celsius;
	}

	public function getDisplay() {
		if ($this->display===NULL) {
			$this->display = $this->createDisplay();
		}
		return $this->display;
	}
	
	protected function createDisplay() {
		return new \com\microsoft\wc\thing\types\DisplayValue();
	}

	public function setDisplay($display) {
		$this->display = $this->validateDisplay($display);
	}

	protected function validateDisplay($display) {
		if ( ! $display instanceof \com\microsoft\wc\thing\types\DisplayValue  && ! is_null($display) ) {
			$display = new \com\microsoft\wc\thing\types\DisplayValue ($display);
		}
	
		return $display;
	}
} // end class TemperatureValue
