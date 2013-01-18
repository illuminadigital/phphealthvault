<?php
namespace com\microsoft\wc\thing\types;



/**
 * @XmlNamespaces ({
 *	@XmlNamespace(url="urn:com.microsoft.wc.thing.types", prefix="urn:com.microsoft.wc.thing.types")
 * })
 * @XmlEntity	(xml="insulin-injection-value")
 */
class InsulinInjectionValue {
	/**
	 * InsulinInjectionMeasurement
	 * A insulin injection measurement.
	 * A insulin injection consists of the value in IE units (1/100ml),which is the base unit of insulin injections, andan optional display value. The display value is used tostore the insulin injection amount the user's preference ofunits. This avoids rounding errors whenconverting to and back from IE units
	 */

	/**
	 * @XmlElement	(type="\com\microsoft\wc\thing\types\PositiveDouble", name="IE")
	 */
	protected $iE;

	/**
	 * @XmlElement	(type="\com\microsoft\wc\thing\types\DisplayValue", name="display")
	 */
	protected $display;

	public function __construct($iE = NULL, $display = NULL) {
		$this->iE = ($iE===NULL) ? NULL : $this->validateIE($iE);
		$this->display = ($display===NULL) ? NULL : $this->validateDisplay($display);
	}

	public function getIE() {
		if ($this->iE===NULL) {
			$this->iE = $this->createIE();
		}
		return $this->iE;
	}
	
	protected function createIE() {
		return new \com\microsoft\wc\thing\types\PositiveDouble();
	}

	public function setIE($iE) {
		$this->iE = $this->validateIE($iE);
	}

	protected function validateIE($iE) {
		if ( ! $iE instanceof \com\microsoft\wc\thing\types\PositiveDouble ) {
			$iE = new \com\microsoft\wc\thing\types\PositiveDouble ($iE);
		}
	
		return $iE;
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
} // end class InsulinInjectionValue
