<?php
namespace com\microsoft\wc\thing\care_plan;



/**
 * @XmlNamespaces ({
 *	@XmlNamespace(url="urn:com.microsoft.wc.thing.care-plan", prefix="")
 * })
 * @XmlEntity	(xml="unit-conversion")
 */
class UnitConversion {
	/**
	 * Unit conversion representation.
	 */

	/**
	 * @XmlText	(type="float", name="multiplier")
	 */
	protected $multiplier;

	/**
	 * @XmlText	(type="float", name="offset")
	 */
	protected $offset;

	public function __construct($multiplier = NULL, $offset = NULL) {
		$this->multiplier = ($multiplier===NULL) ? NULL : $this->validateMultiplier($multiplier);
		$this->offset = ($offset===NULL) ? NULL : $this->validateOffset($offset);
	}

	public function getMultiplier() {
		if ($this->multiplier===NULL) {
			$this->multiplier = $this->createMultiplier();
		}
		return $this->multiplier;
	}
	
	protected function createMultiplier() {
		return 0.0;
	}

	public function setMultiplier($multiplier) {
		$this->multiplier = $this->validateMultiplier($multiplier);
	}

	protected function validateMultiplier($multiplier) {
		if ( ! is_float($multiplier) && ! is_null($multiplier) ) {
			throw new \Exception(sprintf('Supplied %s value was not %s', 'multiplier', 'float'));
		}
	
		return $multiplier;
	}

	public function getOffset() {
		if ($this->offset===NULL) {
			$this->offset = $this->createOffset();
		}
		return $this->offset;
	}
	
	protected function createOffset() {
		return 0.0;
	}

	public function setOffset($offset) {
		$this->offset = $this->validateOffset($offset);
	}

	protected function validateOffset($offset) {
		if ( ! is_float($offset) && ! is_null($offset) ) {
			throw new \Exception(sprintf('Supplied %s value was not %s', 'offset', 'float'));
		}
	
		return $offset;
	}
} // end class UnitConversion
