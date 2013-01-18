<?php
namespace com\microsoft\wc\thing\types;



/**
 * @XmlNamespaces ({
 *	@XmlNamespace(url="urn:com.microsoft.wc.thing.types", prefix="urn:com.microsoft.wc.thing.types")
 * })
 * @XmlEntity	(xml="blood-glucose-value")
 */
class BloodGlucoseValue {
	/**
	 * BloodGlucoseMeasurement
	 * A blood glucose measurement.
	 * A blood glucose measurement consists of the value in millimoles per liter (mmol/L),which is the base unit of measurement for blood glucose, andan optional display value. The display value is used tostore the blood glucose measurement in the user's preference ofmeasurement units. This avoids rounding errors whenconverting to and back from mmol/L.
	 */

	/**
	 * @XmlElement	(type="\com\microsoft\wc\thing\types\PositiveDouble", name="mmolPerL")
	 */
	protected $mmolPerL;

	/**
	 * @XmlElement	(type="\com\microsoft\wc\thing\types\DisplayValue", name="display")
	 */
	protected $display;

	public function __construct($mmolPerL = NULL, $display = NULL) {
		$this->mmolPerL = ($mmolPerL===NULL) ? NULL : $this->validateMmolPerL($mmolPerL);
		$this->display = ($display===NULL) ? NULL : $this->validateDisplay($display);
	}

	public function getMmolPerL() {
		if ($this->mmolPerL===NULL) {
			$this->mmolPerL = $this->createMmolPerL();
		}
		return $this->mmolPerL;
	}
	
	protected function createMmolPerL() {
		return new \com\microsoft\wc\thing\types\PositiveDouble();
	}

	public function setMmolPerL($mmolPerL) {
		$this->mmolPerL = $this->validateMmolPerL($mmolPerL);
	}

	protected function validateMmolPerL($mmolPerL) {
		if ( ! $mmolPerL instanceof \com\microsoft\wc\thing\types\PositiveDouble ) {
			$mmolPerL = new \com\microsoft\wc\thing\types\PositiveDouble ($mmolPerL);
		}
	
		return $mmolPerL;
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
} // end class BloodGlucoseValue
