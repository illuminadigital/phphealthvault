<?php
namespace com\microsoft\wc\thing\types;



/**
 * @XmlNamespaces ({
 *	@XmlNamespace(url="urn:com.microsoft.wc.thing.types", prefix="urn:com.microsoft.wc.thing.types")
 * })
 * @XmlEntity	(xml="flow-value")
 */
class FlowValue {
	/**
	 * FlowMeasurement
	 * A flow measurement.
	 * A flow measurement consists of the value in liters persecond (L/s), which is the base unit of measurement forflow, and an optional display value. The display value isused to store the flow measurement in the user's preference of flow units. This avoids rounding errorswhen converting to and back from L/s.
	 */

	/**
	 * @XmlElement	(type="\com\microsoft\wc\thing\types\PositiveDouble", name="liters-per-second")
	 */
	protected $litersPerSecond;

	/**
	 * @XmlElement	(type="\com\microsoft\wc\thing\types\DisplayValue", name="display")
	 */
	protected $display;

	public function __construct($litersPerSecond = NULL, $display = NULL) {
		$this->litersPerSecond = ($litersPerSecond===NULL) ? NULL : $this->validateLitersPerSecond($litersPerSecond);
		$this->display = ($display===NULL) ? NULL : $this->validateDisplay($display);
	}

	public function getLitersPerSecond() {
		if ($this->litersPerSecond===NULL) {
			$this->litersPerSecond = $this->createLitersPerSecond();
		}
		return $this->litersPerSecond;
	}
	
	protected function createLitersPerSecond() {
		return new \com\microsoft\wc\thing\types\PositiveDouble();
	}

	public function setLitersPerSecond($litersPerSecond) {
		$this->litersPerSecond = $this->validateLitersPerSecond($litersPerSecond);
	}

	protected function validateLitersPerSecond($litersPerSecond) {
		if ( ! $litersPerSecond instanceof \com\microsoft\wc\thing\types\PositiveDouble ) {
			$litersPerSecond = new \com\microsoft\wc\thing\types\PositiveDouble ($litersPerSecond);
		}
	
		return $litersPerSecond;
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
} // end class FlowValue
