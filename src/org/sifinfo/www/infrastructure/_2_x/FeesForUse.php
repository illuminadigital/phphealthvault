<?php
namespace org\sifinfo\www\infrastructure\_2_x;



/**
 * @XmlNamespaces ({
 *	@XmlNamespace(url="http://www.sifinfo.org/infrastructure/2.x", prefix="")
 * })
 * @XmlEntity	(xml="FeesForUse")
 */
class FeesForUse {
	/**
	 */

	/**
	 * List of manually overridden properties that should not be re-generated automatically
	 * @var array
	 */
	protected $_overrides = array();


	/**
	 * @XmlElement	(type="\org\sifinfo\www\infrastructure\_2_x\FeeForUse", collection="true", name="FeeForUse")
	 */
	protected $feeForUse;

	public function __construct($feeForUse = NULL) {
		$this->feeForUse = ($feeForUse===NULL) ? NULL : $this->validateFeeForUse($feeForUse);
	}

	public function getFeeForUse($autoCreate = TRUE) {
		if ($this->feeForUse===NULL && $autoCreate && ! isset($this->_overrides['feeForUse']) ) {
			$this->feeForUse = $this->createFeeForUse();
		}
		return $this->feeForUse;
	}
	
	protected function createFeeForUse() {
		return array();
	}

	public function setFeeForUse($feeForUse) {
		$this->feeForUse = $this->validateFeeForUse($feeForUse);
	}

	protected function validateFeeForUse($feeForUse) {
		if ( $feeForUse === FALSE ) {
			$this->_overrides['feeForUse'] = TRUE;
			return NULL;
		}

		if ( ! is_array ($feeForUse) && ! is_null($feeForUse) ) {
			$feeForUse = array($feeForUse);
		}

		unset ($this->_overrides['feeForUse']);
		$count = count($feeForUse);
		if ($count < 0) {
			throw new \Exception(sprintf('Supplied %s array has less than the required number (%d) of entries.', 'feeForUse', 0));
		}
		if ( ! empty($feeForUse) ) {
			foreach ($feeForUse as $entry) {
				if (!($entry instanceof FeeForUse)) {
					throw new \Exception(sprintf('Supplied %s value was not %s', 'feeForUse', 'FeeForUse'));
				}
			}
		}
	
		return $feeForUse;
	}

	public function addFeeForUse($feeForUse) {
		$this->feeForUse[] = $feeForUse;
	}
} // end class FeesForUse
