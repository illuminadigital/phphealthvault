<?php
namespace com\microsoft\wc\thing\types;



/**
 * @XmlNamespaces ({
 *	@XmlNamespace(url="urn:com.microsoft.wc.thing.types", prefix="urn:com.microsoft.wc.thing.types")
 * })
 * @XmlEntity	(xml="length-value")
 */
class LengthValue {
	/**
	 * Length
	 * A length measurement.
	 * A length measurement consists of the value in meters,which is the base unit of measurement for length, andan optional display value. The display value is used tostore the length measurement in the user's preference oflength units. This avoids rounding errors whenconverting to and back from meters.
	 */

	/**
	 * List of manually overridden properties that should not be re-generated automatically
	 * @var array
	 */
	protected $_overrides = array();


	/**
	 * @XmlElement	(type="\com\microsoft\wc\thing\types\PositiveDouble", name="m")
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
		return new \com\microsoft\wc\thing\types\PositiveDouble();
	}

	public function setM($m) {
		$this->m = $this->validateM($m);
	}

	protected function validateM($m) {
		if ( ! $m instanceof \com\microsoft\wc\thing\types\PositiveDouble ) {
			$m = new \com\microsoft\wc\thing\types\PositiveDouble ($m);
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
} // end class LengthValue
