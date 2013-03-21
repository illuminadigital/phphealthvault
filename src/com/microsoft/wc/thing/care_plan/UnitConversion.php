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
	 * List of manually overridden properties that should not be re-generated automatically
	 * @var array
	 */
	protected $_overrides = array();


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

	public function getMultiplier($autoCreate = TRUE) {
		if ($this->multiplier===NULL && $autoCreate && ! isset($this->_overrides['multiplier']) ) {
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
		$isValid = FALSE;
		if ( is_float($multiplier) ) {
			$isValid = TRUE;
		}
		else if ( is_null($multiplier) ) {
			$isValid = TRUE;
		}
		else if ( $multiplier == ($castVar = (float) $multiplier) ) {
			$isValid = TRUE;
			$multiplier = $castVar;
		}
		if ( ! $isValid ) {
			throw new \Exception(sprintf('Supplied %s value was not %s', 'multiplier', 'float'));
		}
	
		return $multiplier;
	}

	public function getOffset($autoCreate = TRUE) {
		if ($this->offset===NULL && $autoCreate && ! isset($this->_overrides['offset']) ) {
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
		$isValid = FALSE;
		if ( is_float($offset) ) {
			$isValid = TRUE;
		}
		else if ( is_null($offset) ) {
			$isValid = TRUE;
		}
		else if ( $offset == ($castVar = (float) $offset) ) {
			$isValid = TRUE;
			$offset = $castVar;
		}
		if ( ! $isValid ) {
			throw new \Exception(sprintf('Supplied %s value was not %s', 'offset', 'float'));
		}
	
		return $offset;
	}
} // end class UnitConversion
