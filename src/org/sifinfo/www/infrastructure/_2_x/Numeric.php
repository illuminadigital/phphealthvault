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
	 * @XmlText	(type="integer", name="Precision")
	 */
	protected $precision;

	/**
	 * @XmlText	(type="integer", name="Scale")
	 */
	protected $scale;

	/**
	 * @XmlText	(type="float", name="Low")
	 */
	protected $low;

	/**
	 * @XmlText	(type="float", name="High")
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
		$isValid = FALSE;
		if ( is_integer($precision) ) {
			$isValid = TRUE;
		}
		else if ( is_null($precision) ) {
			$isValid = TRUE;
		}
		else if ( $precision == ($castVar = (integer) $precision) ) {
			$isValid = TRUE;
			$precision = $castVar;
		}
		if ( ! $isValid ) {
			throw new \Exception(sprintf('Supplied %s value was not %s', 'precision', 'integer'));
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
		$isValid = FALSE;
		if ( is_integer($scale) ) {
			$isValid = TRUE;
		}
		else if ( is_null($scale) ) {
			$isValid = TRUE;
		}
		else if ( $scale == ($castVar = (integer) $scale) ) {
			$isValid = TRUE;
			$scale = $castVar;
		}
		if ( ! $isValid ) {
			throw new \Exception(sprintf('Supplied %s value was not %s', 'scale', 'integer'));
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
		$isValid = FALSE;
		if ( is_float($low) ) {
			$isValid = TRUE;
		}
		else if ( is_null($low) ) {
			$isValid = TRUE;
		}
		else if ( $low == ($castVar = (float) $low) ) {
			$isValid = TRUE;
			$low = $castVar;
		}
		if ( ! $isValid ) {
			throw new \Exception(sprintf('Supplied %s value was not %s', 'low', 'float'));
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
		$isValid = FALSE;
		if ( is_float($high) ) {
			$isValid = TRUE;
		}
		else if ( is_null($high) ) {
			$isValid = TRUE;
		}
		else if ( $high == ($castVar = (float) $high) ) {
			$isValid = TRUE;
			$high = $castVar;
		}
		if ( ! $isValid ) {
			throw new \Exception(sprintf('Supplied %s value was not %s', 'high', 'float'));
		}
	
		return $high;
	}
} // end class Numeric
