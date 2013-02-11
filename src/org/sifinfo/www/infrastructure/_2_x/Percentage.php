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

	public function getMinimum() {
		if ($this->minimum===NULL) {
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
		if ( ! is_float($minimum) && ! is_null($minimum) ) {
			throw new \Exception(sprintf('Supplied %s value was not %s', 'minimum', 'float'));
		}
	
		return $minimum;
	}

	public function getMaximum() {
		if ($this->maximum===NULL) {
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
		if ( ! is_float($maximum) && ! is_null($maximum) ) {
			throw new \Exception(sprintf('Supplied %s value was not %s', 'maximum', 'float'));
		}
	
		return $maximum;
	}
} // end class Percentage
