<?php
namespace com\microsoft\wc\thing\types;



/**
 * @XmlNamespaces ({
 *	@XmlNamespace(url="urn:com.microsoft.wc.thing.types", prefix="urn:com.microsoft.wc.thing.types")
 * })
 * @XmlEntity	(xml="volume-value")
 */
class VolumeValue {
	/**
	 * VolumeMeasurement
	 * A volume measurement.
	 * A volume measurement consists of the value in liters (L),and anoptional display value. The display value is used to storethe volume measurement in the user's preference of volumeunits. This avoids rounding errors when converting between units.
	 */

	/**
	 * @XmlElement	(type="\com\microsoft\wc\thing\types\NonNegativeDouble", name="liters")
	 */
	protected $liters;

	/**
	 * @XmlElement	(type="\com\microsoft\wc\thing\types\DisplayValue", name="display")
	 */
	protected $display;

	public function __construct($liters = NULL, $display = NULL) {
		$this->liters = ($liters===NULL) ? NULL : $this->validateLiters($liters);
		$this->display = ($display===NULL) ? NULL : $this->validateDisplay($display);
	}

	public function getLiters() {
		if ($this->liters===NULL) {
			$this->liters = $this->createLiters();
		}
		return $this->liters;
	}
	
	protected function createLiters() {
		return new \com\microsoft\wc\thing\types\NonNegativeDouble();
	}

	public function setLiters($liters) {
		$this->liters = $this->validateLiters($liters);
	}

	protected function validateLiters($liters) {
		if ( ! $liters instanceof \com\microsoft\wc\thing\types\NonNegativeDouble ) {
			$liters = new \com\microsoft\wc\thing\types\NonNegativeDouble ($liters);
		}
	
		return $liters;
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
} // end class VolumeValue
