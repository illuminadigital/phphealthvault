<?php
namespace com\microsoft\wc\thing\types;



/**
 * @XmlNamespaces ({
 *	@XmlNamespace(url="urn:com.microsoft.wc.thing.types", prefix="urn:com.microsoft.wc.thing.types")
 * })
 * @XmlEntity	(xml="power-value")
 */
class PowerValue {
	/**
	 * PowerMeasurement
	 * A power measurement.
	 * A power measurement consists of the value in watts,which is the base unit of measurement forpower, and an optional display value. The display value isused to store the power in the user's preference ofunits. This avoids rounding errors whenconverting to and back from watts.
	 */

	/**
	 * @XmlElement	(type="\com\microsoft\wc\thing\types\PositiveDouble", name="watts")
	 */
	protected $watts;

	/**
	 * @XmlElement	(type="\com\microsoft\wc\thing\types\DisplayValue", name="display")
	 */
	protected $display;

	public function __construct($watts = NULL, $display = NULL) {
		$this->watts = ($watts===NULL) ? NULL : $this->validateWatts($watts);
		$this->display = ($display===NULL) ? NULL : $this->validateDisplay($display);
	}

	public function getWatts() {
		if ($this->watts===NULL) {
			$this->watts = $this->createWatts();
		}
		return $this->watts;
	}
	
	protected function createWatts() {
		return new \com\microsoft\wc\thing\types\PositiveDouble();
	}

	public function setWatts($watts) {
		$this->watts = $this->validateWatts($watts);
	}

	protected function validateWatts($watts) {
		if ( ! $watts instanceof \com\microsoft\wc\thing\types\PositiveDouble ) {
			$watts = new \com\microsoft\wc\thing\types\PositiveDouble ($watts);
		}
	
		return $watts;
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
} // end class PowerValue
