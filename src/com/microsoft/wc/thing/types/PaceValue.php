<?php
namespace com\microsoft\wc\thing\types;



/**
 * @XmlNamespaces ({
 *	@XmlNamespace(url="urn:com.microsoft.wc.thing.types", prefix="urn:com.microsoft.wc.thing.types")
 * })
 * @XmlEntity	(xml="pace-value")
 */
class PaceValue {
	/**
	 * PaceMeasurement
	 * A pace measurement.
	 * A pace measurement consists of the value in seconds per100 meters, which is the base unit of measurement forpace, and an optional display value. The display value isused to store the pace in the user's preference ofunits. This avoids rounding errors whenconverting to and back from seconds per 100 meters.
	 */

	/**
	 * List of manually overridden properties that should not be re-generated automatically
	 * @var array
	 */
	protected $_overrides = array();


	/**
	 * @XmlElement	(type="\com\microsoft\wc\thing\types\PositiveDouble", name="seconds-per-hundred-meters")
	 */
	protected $secondsPerHundredMeters;

	/**
	 * @XmlElement	(type="\com\microsoft\wc\thing\types\DisplayValue", name="display")
	 */
	protected $display;

	public function __construct($secondsPerHundredMeters = NULL, $display = NULL) {
		$this->secondsPerHundredMeters = ($secondsPerHundredMeters===NULL) ? NULL : $this->validateSecondsPerHundredMeters($secondsPerHundredMeters);
		$this->display = ($display===NULL) ? NULL : $this->validateDisplay($display);
	}

	public function getSecondsPerHundredMeters($autoCreate = TRUE) {
		if ($this->secondsPerHundredMeters===NULL && $autoCreate && ! isset($this->_overrides['secondsPerHundredMeters']) ) {
			$this->secondsPerHundredMeters = $this->createSecondsPerHundredMeters();
		}
		return $this->secondsPerHundredMeters;
	}
	
	protected function createSecondsPerHundredMeters() {
		return new \com\microsoft\wc\thing\types\PositiveDouble();
	}

	public function setSecondsPerHundredMeters($secondsPerHundredMeters) {
		$this->secondsPerHundredMeters = $this->validateSecondsPerHundredMeters($secondsPerHundredMeters);
	}

	protected function validateSecondsPerHundredMeters($secondsPerHundredMeters) {
		if ( ! $secondsPerHundredMeters instanceof \com\microsoft\wc\thing\types\PositiveDouble ) {
			$secondsPerHundredMeters = new \com\microsoft\wc\thing\types\PositiveDouble ($secondsPerHundredMeters);
		}
	
		return $secondsPerHundredMeters;
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
} // end class PaceValue
