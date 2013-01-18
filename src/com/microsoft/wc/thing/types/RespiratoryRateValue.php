<?php
namespace com\microsoft\wc\thing\types;



/**
 * @XmlNamespaces ({
 *	@XmlNamespace(url="urn:com.microsoft.wc.thing.types", prefix="urn:com.microsoft.wc.thing.types")
 * })
 * @XmlEntity	(xml="respiratory-rate-value")
 */
class RespiratoryRateValue {
	/**
	 * RespiratoryRateMeasurement
	 * A respiratory rate measurement.
	 * A respiratory rate measurement consists of the value in breaths perminute and an optional display value. The display value isused to store the respiratory rate measurement in the user's preference of units. This avoids rounding errorswhen converting between units.
	 */

	/**
	 * @XmlElement	(type="\com\microsoft\wc\thing\types\NonNegativeDouble", name="breaths-per-minute")
	 */
	protected $breathsPerMinute;

	/**
	 * @XmlElement	(type="\com\microsoft\wc\thing\types\DisplayValue", name="display")
	 */
	protected $display;

	public function __construct($breathsPerMinute = NULL, $display = NULL) {
		$this->breathsPerMinute = ($breathsPerMinute===NULL) ? NULL : $this->validateBreathsPerMinute($breathsPerMinute);
		$this->display = ($display===NULL) ? NULL : $this->validateDisplay($display);
	}

	public function getBreathsPerMinute() {
		if ($this->breathsPerMinute===NULL) {
			$this->breathsPerMinute = $this->createBreathsPerMinute();
		}
		return $this->breathsPerMinute;
	}
	
	protected function createBreathsPerMinute() {
		return new \com\microsoft\wc\thing\types\NonNegativeDouble();
	}

	public function setBreathsPerMinute($breathsPerMinute) {
		$this->breathsPerMinute = $this->validateBreathsPerMinute($breathsPerMinute);
	}

	protected function validateBreathsPerMinute($breathsPerMinute) {
		if ( ! $breathsPerMinute instanceof \com\microsoft\wc\thing\types\NonNegativeDouble ) {
			$breathsPerMinute = new \com\microsoft\wc\thing\types\NonNegativeDouble ($breathsPerMinute);
		}
	
		return $breathsPerMinute;
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
} // end class RespiratoryRateValue
