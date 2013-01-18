<?php
namespace com\microsoft\wc\thing\types;



/**
 * @XmlNamespaces ({
 *	@XmlNamespace(url="urn:com.microsoft.wc.thing.types", prefix="urn:com.microsoft.wc.thing.types")
 * })
 * @XmlEntity	(xml="weight-value")
 */
class WeightValue {
	/**
	 * WeightValue
	 * A weight measurement.
	 * A weight measurement consists of the value in kilograms,which is the base unit of measurement for weight, andan optional display value. The display value is used tostore the weight measurement in the user's preference ofweight units. This avoids rounding errors whenconverting to and back from kilograms.
	 */

	/**
	 * @XmlElement	(type="\com\microsoft\wc\thing\types\NonNegativeDouble", name="kg")
	 */
	protected $kg;

	/**
	 * @XmlElement	(type="\com\microsoft\wc\thing\types\DisplayValue", name="display")
	 */
	protected $display;

	public function __construct($kg = NULL, $display = NULL) {
		$this->kg = ($kg===NULL) ? NULL : $this->validateKg($kg);
		$this->display = ($display===NULL) ? NULL : $this->validateDisplay($display);
	}

	public function getKg() {
		if ($this->kg===NULL) {
			$this->kg = $this->createKg();
		}
		return $this->kg;
	}
	
	protected function createKg() {
		return new \com\microsoft\wc\thing\types\NonNegativeDouble();
	}

	public function setKg($kg) {
		$this->kg = $this->validateKg($kg);
	}

	protected function validateKg($kg) {
		if ( ! $kg instanceof \com\microsoft\wc\thing\types\NonNegativeDouble ) {
			$kg = new \com\microsoft\wc\thing\types\NonNegativeDouble ($kg);
		}
	
		return $kg;
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
} // end class WeightValue
