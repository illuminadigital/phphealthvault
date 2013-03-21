<?php
namespace com\microsoft\wc\thing\types;



/**
 * @XmlNamespaces ({
 *	@XmlNamespace(url="urn:com.microsoft.wc.thing.types", prefix="urn:com.microsoft.wc.thing.types")
 * })
 * @XmlEntity	(xml="torque-value")
 */
class TorqueValue {
	/**
	 * TorqueMeasurement
	 * A torque measurement.
	 * A torque measurement consists of the value in newton meters,which is the base unit of measurement fortorque, and an optional display value. The display value isused to store the torque in the user's preference ofunits. This avoids rounding errors whenconverting to and back from newton meters.
	 */

	/**
	 * List of manually overridden properties that should not be re-generated automatically
	 * @var array
	 */
	protected $_overrides = array();


	/**
	 * @XmlElement	(type="\com\microsoft\wc\thing\types\PositiveDouble", name="newton-meters")
	 */
	protected $newtonMeters;

	/**
	 * @XmlElement	(type="\com\microsoft\wc\thing\types\DisplayValue", name="display")
	 */
	protected $display;

	public function __construct($newtonMeters = NULL, $display = NULL) {
		$this->newtonMeters = ($newtonMeters===NULL) ? NULL : $this->validateNewtonMeters($newtonMeters);
		$this->display = ($display===NULL) ? NULL : $this->validateDisplay($display);
	}

	public function getNewtonMeters($autoCreate = TRUE) {
		if ($this->newtonMeters===NULL && $autoCreate && ! isset($this->_overrides['newtonMeters']) ) {
			$this->newtonMeters = $this->createNewtonMeters();
		}
		return $this->newtonMeters;
	}
	
	protected function createNewtonMeters() {
		return new \com\microsoft\wc\thing\types\PositiveDouble();
	}

	public function setNewtonMeters($newtonMeters) {
		$this->newtonMeters = $this->validateNewtonMeters($newtonMeters);
	}

	protected function validateNewtonMeters($newtonMeters) {
		if ( ! $newtonMeters instanceof \com\microsoft\wc\thing\types\PositiveDouble ) {
			$newtonMeters = new \com\microsoft\wc\thing\types\PositiveDouble ($newtonMeters);
		}
	
		return $newtonMeters;
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
} // end class TorqueValue
