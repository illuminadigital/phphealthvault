<?php
namespace org\sifinfo\www\infrastructure\_2_x;



/**
 * @XmlNamespaces ({
 *	@XmlNamespace(url="http://www.sifinfo.org/infrastructure/2.x", prefix="")
 * })
 * @XmlEntity	(xml="Numeric")
 */
class Numeric {
	/**
	 */

	/**
	 * @XmlElement	(type="\org\sifinfo\www\infrastructure\_2_x\UnsignedInt", name="Precision")
	 */
	protected $precision;

	/**
	 * @XmlElement	(type="\org\sifinfo\www\infrastructure\_2_x\UnsignedInt", name="Scale")
	 */
	protected $scale;

	/**
	 * @XmlElement	(type="\org\sifinfo\www\infrastructure\_2_x\Decimal", name="Low")
	 */
	protected $low;

	/**
	 * @XmlElement	(type="\org\sifinfo\www\infrastructure\_2_x\Decimal", name="High")
	 */
	protected $high;

	public function __construct($precision = NULL, $scale = NULL, $low = NULL, $high = NULL) {
		$this->precision = ($precision===NULL) ? NULL : $this->validatePrecision($precision);
		$this->scale = ($scale===NULL) ? NULL : $this->validateScale($scale);
		$this->low = ($low===NULL) ? NULL : $this->validateLow($low);
		$this->high = ($high===NULL) ? NULL : $this->validateHigh($high);
	}

	public function getPrecision() {
		if ($this->precision===NULL) {
			$this->precision = $this->createPrecision();
		}
		return $this->precision;
	}
	
	protected function createPrecision() {
		return NULL;
	}

	public function setPrecision($precision) {
		$this->precision = $this->validatePrecision($precision);
	}

	protected function validatePrecision($precision) {
		if ( ! is_unsignedInt($precision) && ! is_null($precision) ) {
			throw new \Exception(sprintf('Supplied %s value was not %s', 'precision', 'unsignedInt'));
		}
	
		return $precision;
	}

	public function getScale() {
		if ($this->scale===NULL) {
			$this->scale = $this->createScale();
		}
		return $this->scale;
	}
	
	protected function createScale() {
		return NULL;
	}

	public function setScale($scale) {
		$this->scale = $this->validateScale($scale);
	}

	protected function validateScale($scale) {
		if ( ! is_unsignedInt($scale) && ! is_null($scale) ) {
			throw new \Exception(sprintf('Supplied %s value was not %s', 'scale', 'unsignedInt'));
		}
	
		return $scale;
	}

	public function getLow() {
		if ($this->low===NULL) {
			$this->low = $this->createLow();
		}
		return $this->low;
	}
	
	protected function createLow() {
		return NULL;
	}

	public function setLow($low) {
		$this->low = $this->validateLow($low);
	}

	protected function validateLow($low) {
		if ( ! is_decimal($low) && ! is_null($low) ) {
			throw new \Exception(sprintf('Supplied %s value was not %s', 'low', 'decimal'));
		}
	
		return $low;
	}

	public function getHigh() {
		if ($this->high===NULL) {
			$this->high = $this->createHigh();
		}
		return $this->high;
	}
	
	protected function createHigh() {
		return NULL;
	}

	public function setHigh($high) {
		$this->high = $this->validateHigh($high);
	}

	protected function validateHigh($high) {
		if ( ! is_decimal($high) && ! is_null($high) ) {
			throw new \Exception(sprintf('Supplied %s value was not %s', 'high', 'decimal'));
		}
	
		return $high;
	}
} // end class Numeric
