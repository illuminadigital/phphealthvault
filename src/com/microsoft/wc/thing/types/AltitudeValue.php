<?php
namespace com\microsoft\wc\thing\types;



/**
 * @XmlNamespaces ({
 *	@XmlNamespace(url="urn:com.microsoft.wc.thing.types", prefix="urn:com.microsoft.wc.thing.types")
 * })
 * @XmlEntity	(xml="altitude-value")
 */
class AltitudeValue {
	/**
	 * AltitudeMeasurement
	 * An altitude measurement.
	 * An altitude measurement consists of the value in metersabove sea level,which is the base unit of measurement for altitude, andan optional display value. The display value is used tostore the altitude measurement in the user's preference ofaltitude units. This avoids rounding errors whenconverting to and back from meters.
	 */

	/**
	 * List of manually overridden properties that should not be re-generated automatically
	 * @var array
	 */
	protected $_overrides = array();


	/**
	 * @XmlText	(type="float", name="m")
	 */
	protected $m;

	/**
	 * @XmlElement	(type="\com\microsoft\wc\thing\types\DisplayValue", name="display")
	 */
	protected $display;

	public function __construct($m = NULL, $display = NULL) {
		$this->m = ($m===NULL) ? NULL : $this->validateM($m);
		$this->display = ($display===NULL) ? NULL : $this->validateDisplay($display);
	}

	public function getM($autoCreate = TRUE) {
		if ($this->m===NULL && $autoCreate && ! isset($this->_overrides['m']) ) {
			$this->m = $this->createM();
		}
		return $this->m;
	}
	
	protected function createM() {
		return 0.0;
	}

	public function setM($m) {
		$this->m = $this->validateM($m);
	}

	protected function validateM($m) {
		$isValid = FALSE;
		if ( is_float($m) ) {
			$isValid = TRUE;
		}
		else if ( $m == ($castVar = (float) $m) ) {
			$isValid = TRUE;
			$m = $castVar;
		}
		if ( ! $isValid ) {
			throw new \Exception(sprintf('Supplied %s value was not %s', 'm', 'float'));
		}
	
		return $m;
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
} // end class AltitudeValue
