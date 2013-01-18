<?php
namespace com\microsoft\wc\thing\types;



/**
 * @XmlNamespaces ({
 *	@XmlNamespace(url="urn:com.microsoft.wc.thing.types", prefix="urn:com.microsoft.wc.thing.types")
 * })
 * @XmlEntity	(xml="pressure-value")
 */
class PressureValue {
	/**
	 * PressureMeasurement
	 * A pressure measurement.
	 * A pressure measurement consists of the value in pascals (Pa),and an optional display value. The display value is used to storethe pressure measurement in the user's preference of pressureunits. This avoids rounding errors when converting between units.
	 */

	/**
	 * @XmlElement	(type="\com\microsoft\wc\thing\types\NonNegativeDouble", name="pascals")
	 */
	protected $pascals;

	/**
	 * @XmlElement	(type="\com\microsoft\wc\thing\types\DisplayValue", name="display")
	 */
	protected $display;

	public function __construct($pascals = NULL, $display = NULL) {
		$this->pascals = ($pascals===NULL) ? NULL : $this->validatePascals($pascals);
		$this->display = ($display===NULL) ? NULL : $this->validateDisplay($display);
	}

	public function getPascals() {
		if ($this->pascals===NULL) {
			$this->pascals = $this->createPascals();
		}
		return $this->pascals;
	}
	
	protected function createPascals() {
		return new \com\microsoft\wc\thing\types\NonNegativeDouble();
	}

	public function setPascals($pascals) {
		$this->pascals = $this->validatePascals($pascals);
	}

	protected function validatePascals($pascals) {
		if ( ! $pascals instanceof \com\microsoft\wc\thing\types\NonNegativeDouble ) {
			$pascals = new \com\microsoft\wc\thing\types\NonNegativeDouble ($pascals);
		}
	
		return $pascals;
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
} // end class PressureValue
