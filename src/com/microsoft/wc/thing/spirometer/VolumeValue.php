<?php
namespace com\microsoft\wc\thing\spirometer;



/**
 * @XmlNamespaces ({
 *	@XmlNamespace(url="urn:com.microsoft.wc.thing.spirometer", prefix="")
 * })
 * @XmlEntity	(xml="volume-value")
 */
class VolumeValue {
	/**
	 * A volume measurement.
	 * A volume measurement consists of the value in liters (L), which is the base unit of measurement for flow, and an optional display value. The display value is used to store the flow measurement in the user's preference of volume units. This avoids rounding errors when converting to and back from L.
	 */

	/**
	 * List of manually overridden properties that should not be re-generated automatically
	 * @var array
	 */
	protected $_overrides = array();


	/**
	 * @XmlElement	(type="\com\microsoft\wc\thing\types\PositiveDouble", name="liters")
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

	public function getLiters($autoCreate = TRUE) {
		if ($this->liters===NULL && $autoCreate && ! isset($this->_overrides['liters']) ) {
			$this->liters = $this->createLiters();
		}
		return $this->liters;
	}
	
	protected function createLiters() {
		return new \com\microsoft\wc\thing\types\PositiveDouble();
	}

	public function setLiters($liters) {
		$this->liters = $this->validateLiters($liters);
	}

	protected function validateLiters($liters) {
		if ( ! $liters instanceof \com\microsoft\wc\thing\types\PositiveDouble ) {
			$liters = new \com\microsoft\wc\thing\types\PositiveDouble ($liters);
		}
	
		return $liters;
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
} // end class VolumeValue
