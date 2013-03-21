<?php
namespace com\microsoft\wc\thing\types;



/**
 * @XmlNamespaces ({
 *	@XmlNamespace(url="urn:com.microsoft.wc.thing.types", prefix="urn:com.microsoft.wc.thing.types")
 * })
 * @XmlEntity	(xml="concentration-value")
 */
class ConcentrationValue {
	/**
	 * ConcentrationMeasurement
	 * Concentration value (volume / volume).
	 * Concentration measurement consists of the value in millimoles per liter (mmol/L),and an optional display value. The display value is used to store the measurement in the user's preference of measurement units.
	 */

	/**
	 * List of manually overridden properties that should not be re-generated automatically
	 * @var array
	 */
	protected $_overrides = array();


	/**
	 * @XmlElement	(type="\com\microsoft\wc\thing\types\NonNegativeDouble", name="mmolPerL")
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

	public function getMmolPerL($autoCreate = TRUE) {
		if ($this->mmolPerL===NULL && $autoCreate && ! isset($this->_overrides['mmolPerL']) ) {
			$this->mmolPerL = $this->createMmolPerL();
		}
		return $this->mmolPerL;
	}
	
	protected function createMmolPerL() {
		return new \com\microsoft\wc\thing\types\NonNegativeDouble();
	}

	public function setMmolPerL($mmolPerL) {
		$this->mmolPerL = $this->validateMmolPerL($mmolPerL);
	}

	protected function validateMmolPerL($mmolPerL) {
		if ( ! $mmolPerL instanceof \com\microsoft\wc\thing\types\NonNegativeDouble ) {
			$mmolPerL = new \com\microsoft\wc\thing\types\NonNegativeDouble ($mmolPerL);
		}
	
		return $mmolPerL;
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
} // end class ConcentrationValue
