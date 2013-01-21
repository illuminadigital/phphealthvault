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
	 * @XmlElement	(type="\org\sifinfo\www\infrastructure\_2_x\FeeForUse", collection="true", name="FeeForUse")
	 */
	protected $feeForUse;

	public function __construct($feeForUse = NULL) {
		$this->feeForUse = ($feeForUse===NULL) ? NULL : $this->validateFeeForUse($feeForUse);
	}

	public function getFeeForUse() {
		if ($this->feeForUse===NULL) {
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
		if ( ! $feeForUse instanceof \org\sifinfo\www\infrastructure\_2_x\FeeForUse  && ! is_null($feeForUse) ) {
			$feeForUse = new \org\sifinfo\www\infrastructure\_2_x\FeeForUse ($feeForUse);
		}
		$count = count($feeForUse);
		if ($count < 0) {
			throw new \Exception(sprintf('Supplied %s array has less than the required number (%d) of entries.', 'feeForUse', 0));
		}
		foreach ($feeForUse as $entry) {
			if (!($entry instanceof FeeForUse)) {
				throw new \Exception(sprintf('Supplied %s value was not %s', 'feeForUse', 'FeeForUse'));
			}
		}
	
		return $feeForUse;
	}

	public function addFeeForUse($feeForUse) {
		$this->feeForUse[] = $feeForUse;
	}
} // end class FeesForUse