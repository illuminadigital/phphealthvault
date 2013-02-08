<?php
namespace org\sifinfo\www\infrastructure\_2_x;



/**
 * @XmlNamespaces ({
 *	@XmlNamespace(url="http://www.sifinfo.org/infrastructure/2.x", prefix="")
 * })
 * @XmlEntity	(xml="RightsElementType")
 */
class RightsElementType {
	/**
	 * A common metadata element designed to carry any intellectual property or copyright information, based on the IEEE LOM Rights element [LOM].
	 */

	/**
	 * @XmlElement	(type="\org\sifinfo\www\infrastructure\_2_x\Boolean", name="Cost")
	 */
	protected $cost;

	/**
	 * @XmlElement	(type="\org\sifinfo\www\infrastructure\_2_x\FeesForUse", name="FeesForUse")
	 */
	protected $feesForUse;

	/**
	 * @XmlElement	(type="\org\sifinfo\www\infrastructure\_2_x\String", name="CopyrightStatement")
	 */
	protected $copyrightStatement;

	/**
	 * @XmlElement	(type="\org\sifinfo\www\infrastructure\_2_x\String", name="TermsOfUse")
	 */
	protected $termsOfUse;

	public function __construct($cost = NULL, $feesForUse = NULL, $copyrightStatement = NULL, $termsOfUse = NULL) {
		$this->cost = ($cost===NULL) ? NULL : $this->validateCost($cost);
		$this->feesForUse = ($feesForUse===NULL) ? NULL : $this->validateFeesForUse($feesForUse);
		$this->copyrightStatement = ($copyrightStatement===NULL) ? NULL : $this->validateCopyrightStatement($copyrightStatement);
		$this->termsOfUse = ($termsOfUse===NULL) ? NULL : $this->validateTermsOfUse($termsOfUse);
	}

	public function getCost() {
		if ($this->cost===NULL) {
			$this->cost = $this->createCost();
		}
		return $this->cost;
	}
	
	protected function createCost() {
		return FALSE;
	}

	public function setCost($cost) {
		$this->cost = $this->validateCost($cost);
	}

	protected function validateCost($cost) {
		if ( ! is_bool($cost) && ! is_null($cost) ) {
			throw new \Exception(sprintf('Supplied %s value was not %s', 'cost', 'boolean'));
		}
	
		return $cost;
	}

	public function getFeesForUse() {
		if ($this->feesForUse===NULL) {
			$this->feesForUse = $this->createFeesForUse();
		}
		return $this->feesForUse;
	}
	
	protected function createFeesForUse() {
		return new \org\sifinfo\www\infrastructure\_2_x\FeesForUse();
	}

	public function setFeesForUse($feesForUse) {
		$this->feesForUse = $this->validateFeesForUse($feesForUse);
	}

	protected function validateFeesForUse($feesForUse) {
		if ( ! $feesForUse instanceof \org\sifinfo\www\infrastructure\_2_x\FeesForUse  && ! is_null($feesForUse) ) {
			$feesForUse = new \org\sifinfo\www\infrastructure\_2_x\FeesForUse ($feesForUse);
		}
	
		return $feesForUse;
	}

	public function getCopyrightStatement() {
		if ($this->copyrightStatement===NULL) {
			$this->copyrightStatement = $this->createCopyrightStatement();
		}
		return $this->copyrightStatement;
	}
	
	protected function createCopyrightStatement() {
		return '';
	}

	public function setCopyrightStatement($copyrightStatement) {
		$this->copyrightStatement = $this->validateCopyrightStatement($copyrightStatement);
	}

	protected function validateCopyrightStatement($copyrightStatement) {
		if ( ! is_string($copyrightStatement) && ! is_null($copyrightStatement) ) {
			throw new \Exception(sprintf('Supplied %s value was not %s', 'copyrightStatement', 'string'));
		}
	
		return $copyrightStatement;
	}

	public function getTermsOfUse() {
		if ($this->termsOfUse===NULL) {
			$this->termsOfUse = $this->createTermsOfUse();
		}
		return $this->termsOfUse;
	}
	
	protected function createTermsOfUse() {
		return '';
	}

	public function setTermsOfUse($termsOfUse) {
		$this->termsOfUse = $this->validateTermsOfUse($termsOfUse);
	}

	protected function validateTermsOfUse($termsOfUse) {
		if ( ! is_string($termsOfUse) && ! is_null($termsOfUse) ) {
			throw new \Exception(sprintf('Supplied %s value was not %s', 'termsOfUse', 'string'));
		}
	
		return $termsOfUse;
	}
} // end class RightsElementType
