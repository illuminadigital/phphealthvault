<?php
namespace hl7_org\v3;



/**
 * @XmlNamespaces ({
 *	@XmlNamespace(url="urn:hl7-org:v3", prefix="")
 * })
 * @XmlEntity	(xml="SXCM_PQ")
 */
class SXCMPQ extends \org\w3\www\_2001\XMLSchema\PQ {
	/**
	 */

	/**
	 * @XmlAttribute	(type="string", name="operator")
	 */
	protected $operator;

	public function __construct($operator = NULL) {
		$this->operator = ($operator===NULL) ? NULL : $this->validateOperator($operator);
	}

	public function getOperator() {
		if ($this->operator===NULL) {
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
} // end class SXCMPQ
