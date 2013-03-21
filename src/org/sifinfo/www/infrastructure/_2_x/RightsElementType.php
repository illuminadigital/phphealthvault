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
	 * List of manually overridden properties that should not be re-generated automatically
	 * @var array
	 */
	protected $_overrides = array();


	/**
	 * @XmlText	(type="boolean", name="Cost")
	 */
	protected $cost;

	/**
	 * @XmlElement	(type="\org\sifinfo\www\infrastructure\_2_x\FeesForUse", name="FeesForUse")
	 */
	protected $feesForUse;

	/**
	 * @XmlText	(type="string", name="CopyrightStatement")
	 */
	protected $copyrightStatement;

	/**
	 * @XmlText	(type="string", name="TermsOfUse")
	 */
	protected $termsOfUse;

	public function __construct($cost = NULL, $feesForUse = NULL, $copyrightStatement = NULL, $termsOfUse = NULL) {
		$this->cost = ($cost===NULL) ? NULL : $this->validateCost($cost);
		$this->feesForUse = ($feesForUse===NULL) ? NULL : $this->validateFeesForUse($feesForUse);
		$this->copyrightStatement = ($copyrightStatement===NULL) ? NULL : $this->validateCopyrightStatement($copyrightStatement);
		$this->termsOfUse = ($termsOfUse===NULL) ? NULL : $this->validateTermsOfUse($termsOfUse);
	}

	public function getCost($autoCreate = TRUE) {
		if ($this->cost===NULL && $autoCreate && ! isset($this->_overrides['cost']) ) {
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

	public function getFeesForUse($autoCreate = TRUE) {
		if ($this->feesForUse===NULL && $autoCreate && ! isset($this->_overrides['feesForUse']) ) {
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
		if ( $feesForUse === FALSE ) {
			$this->_overrides['feesForUse'] = TRUE;
			return NULL;
		}

		if ( ! $feesForUse instanceof \org\sifinfo\www\infrastructure\_2_x\FeesForUse  && ! is_null($feesForUse) ) {
			$feesForUse = new \org\sifinfo\www\infrastructure\_2_x\FeesForUse ($feesForUse);
		}

		unset ($this->_overrides['feesForUse']);
	
		return $feesForUse;
	}

	public function getCopyrightStatement($autoCreate = TRUE) {
		if ($this->copyrightStatement===NULL && $autoCreate && ! isset($this->_overrides['copyrightStatement']) ) {
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

	public function getTermsOfUse($autoCreate = TRUE) {
		if ($this->termsOfUse===NULL && $autoCreate && ! isset($this->_overrides['termsOfUse']) ) {
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
