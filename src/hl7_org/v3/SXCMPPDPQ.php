<?php
namespace hl7_org\v3;



/**
 * @XmlNamespaces ({
 *	@XmlNamespace(url="urn:hl7-org:v3", prefix="")
 * })
 * @XmlEntity	(xml="SXCM_PPD_PQ")
 */
class SXCMPPDPQ extends \PPD_PQ\PPDPQ {
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
		return new \hl7_org\v3\SetOperator();
	}

	public function setOperator($operator) {
		$this->operator = $this->validateOperator($operator);
	}

	protected function validateOperator($operator) {
		if ( ! $operator instanceof \hl7_org\v3\SetOperator  && ! is_null($operator) ) {
			$operator = new \hl7_org\v3\SetOperator ($operator);
		}
	
		return $operator;
	}
} // end class SXCMPPDPQ
