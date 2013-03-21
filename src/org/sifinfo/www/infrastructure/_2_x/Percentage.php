<?php
namespace org\sifinfo\www\infrastructure\_2_x;



/**
 * @XmlNamespaces ({
 *	@XmlNamespace(url="http://www.sifinfo.org/infrastructure/2.x", prefix="")
 * })
 * @XmlEntity	(xml="Percentage")
 */
class Percentage {
	/**
	 */

	/**
	 * List of manually overridden properties that should not be re-generated automatically
	 * @var array
	 */
	protected $_overrides = array();


	/**
	 * @XmlText	(type="float", name="Minimum")
	 */
	protected $minimum;

	/**
	 * @XmlText	(type="float", name="Maximum")
	 */
	protected $maximum;

	public function __construct($minimum = NULL, $maximum = NULL) {
		$this->minimum = ($minimum===NULL) ? NULL : $this->validateMinimum($minimum);
		$this->maximum = ($maximum===NULL) ? NULL : $this->validateMaximum($maximum);
	}

	public function getMinimum($autoCreate = TRUE) {
		if ($this->minimum===NULL && $autoCreate && ! isset($this->_overrides['minimum']) ) {
			$this->minimum = $this->createMinimum();
		}
		return $this->minimum;
	}
	
	protected function createMinimum() {
		return NULL;
	}

	public function setMinimum($minimum) {
		$this->minimum = $this->validateMinimum($minimum);
	}

	protected function validateMinimum($minimum) {
		$isValid = FALSE;
		if ( is_float($minimum) ) {
			$isValid = TRUE;
		}
		else if ( is_null($minimum) ) {
			$isValid = TRUE;
		}
		else if ( $minimum == ($castVar = (float) $minimum) ) {
			$isValid = TRUE;
			$minimum = $castVar;
		}
		if ( ! $isValid ) {
			throw new \Exception(sprintf('Supplied %s value was not %s', 'minimum', 'float'));
		}
	
		return $minimum;
	}

	public function getMaximum($autoCreate = TRUE) {
		if ($this->maximum===NULL && $autoCreate && ! isset($this->_overrides['maximum']) ) {
			$this->maximum = $this->createMaximum();
		}
		return $this->maximum;
	}
	
	protected function createMaximum() {
		return NULL;
	}

	public function setMaximum($maximum) {
		$this->maximum = $this->validateMaximum($maximum);
	}

	protected function validateMaximum($maximum) {
		$isValid = FALSE;
		if ( is_float($maximum) ) {
			$isValid = TRUE;
		}
		else if ( is_null($maximum) ) {
			$isValid = TRUE;
		}
		else if ( $maximum == ($castVar = (float) $maximum) ) {
			$isValid = TRUE;
			$maximum = $castVar;
		}
		if ( ! $isValid ) {
			throw new \Exception(sprintf('Supplied %s value was not %s', 'maximum', 'float'));
		}
	
		return $maximum;
	}
} // end class Percentage
