<?php
namespace hl7_org\v3;



/**
 * @XmlNamespaces ({
 *	@XmlNamespace(url="urn:hl7-org:v3", prefix="")
 * })
 * @XmlEntity	(xml="SXCM_PPD_PQ")
 */
class SXCMPPDPQ extends \org\w3\www\_2001\XMLSchema\PPDPQ {
	/**
	 */

	/**
	 * List of manually overridden properties that should not be re-generated automatically
	 * @var array
	 */
	protected $_overrides = array();


	/**
	 * @XmlAttribute	(type="string", name="operator")
	 */
	protected $operator;

	public function __construct($operator = NULL) {
		$this->operator = ($operator===NULL) ? NULL : $this->validateOperator($operator);
	}

	public function getOperator($autoCreate = TRUE) {
		if ($this->operator===NULL && $autoCreate && ! isset($this->_overrides['operator']) ) {
			$this->operator = $this->createOperator();
		}
		return $this->operator;
	}
	
	protected function createOperator() {
		return NULL;
	}

	public function setOperator($operator) {
		$this->operator = $this->validateOperator($operator);
	}

	protected function validateOperator($operator) {
	
		return $operator;
	}
} // end class SXCMPPDPQ
