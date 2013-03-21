<?php
namespace com\microsoft\wc\thing\types;



/**
 * @XmlNamespaces ({
 *	@XmlNamespace(url="urn:com.microsoft.wc.thing.types", prefix="urn:com.microsoft.wc.thing.types")
 * })
 * @XmlEntity	(xml="speed-value")
 */
class SpeedValue {
	/**
	 * SpeedMeasurement
	 * A speed measurement.
	 * A speed measurement consists of the value in meters persecond (m/s), which is the base unit of measurement forspeed, and an optional display value. The display valueis used to store the speed in the user's preference ofunits. This avoids rounding errors whenconverting to and back from m/s.
	 */

	/**
	 * List of manually overridden properties that should not be re-generated automatically
	 * @var array
	 */
	protected $_overrides = array();


	/**
	 * @XmlElement	(type="\com\microsoft\wc\thing\types\PositiveDouble", name="meters-per-second")
	 */
	protected $metersPerSecond;

	/**
	 * @XmlElement	(type="\com\microsoft\wc\thing\types\DisplayValue", name="display")
	 */
	protected $display;

	public function __construct($metersPerSecond = NULL, $display = NULL) {
		$this->metersPerSecond = ($metersPerSecond===NULL) ? NULL : $this->validateMetersPerSecond($metersPerSecond);
		$this->display = ($display===NULL) ? NULL : $this->validateDisplay($display);
	}

	public function getMetersPerSecond($autoCreate = TRUE) {
		if ($this->metersPerSecond===NULL && $autoCreate && ! isset($this->_overrides['metersPerSecond']) ) {
			$this->metersPerSecond = $this->createMetersPerSecond();
		}
		return $this->metersPerSecond;
	}
	
	protected function createMetersPerSecond() {
		return new \com\microsoft\wc\thing\types\PositiveDouble();
	}

	public function setMetersPerSecond($metersPerSecond) {
		$this->metersPerSecond = $this->validateMetersPerSecond($metersPerSecond);
	}

	protected function validateMetersPerSecond($metersPerSecond) {
		if ( ! $metersPerSecond instanceof \com\microsoft\wc\thing\types\PositiveDouble ) {
			$metersPerSecond = new \com\microsoft\wc\thing\types\PositiveDouble ($metersPerSecond);
		}
	
		return $metersPerSecond;
	}

	public function getDisplay($autoCreate = TRUE) {
		if ($this->display===NULL && $autoCreate && ! isset($this->_overrides['display']) ) {
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
		if ( $display === FALSE ) {
			$this->_overrides['display'] = TRUE;
			return NULL;
		}

		if ( ! $display instanceof \com\microsoft\wc\thing\types\DisplayValue  && ! is_null($display) ) {
			$display = new \com\microsoft\wc\thing\types\DisplayValue ($display);
		}

		unset ($this->_overrides['display']);
	
		return $display;
	}
} // end class SpeedValue
