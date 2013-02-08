<?php
namespace hl7_org\v3;



/**
 * @XmlNamespaces ({
 *	@XmlNamespace(url="urn:hl7-org:v3", prefix="")
 * })
 * @XmlEntity	(xml="RTO_PQ_PQ")
 */
class RTOPQPQ extends \QTY\QTY {
	/**
	 */

	/**
	 * @XmlElement	(type="\org\w3\www\_2001\XMLSchema\PQ", name="numerator")
	 */
	protected $numerator;

	/**
	 * @XmlElement	(type="\org\w3\www\_2001\XMLSchema\PQ", name="denominator")
	 */
	protected $denominator;

	public function __construct($numerator = NULL, $denominator = NULL) {
		$this->numerator = ($numerator===NULL) ? NULL : $this->validateNumerator($numerator);
		$this->denominator = ($denominator===NULL) ? NULL : $this->validateDenominator($denominator);
	}

	public function getNumerator() {
		if ($this->numerator===NULL) {
			$this->numerator = $this->createNumerator();
		}
		return $this->numerator;
	}
	
	protected function createNumerator() {
		return NULL;
	}

	public function setNumerator($numerator) {
		$this->numerator = $this->validateNumerator($numerator);
	}

	protected function validateNumerator($numerator) {
	
		return $numerator;
	}

	public function getDenominator() {
		if ($this->denominator===NULL) {
			$this->denominator = $this->createDenominator();
		}
		return $this->denominator;
	}
	
	protected function createDenominator() {
		return NULL;
	}

	public function setDenominator($denominator) {
		$this->denominator = $this->validateDenominator($denominator);
	}

	protected function validateDenominator($denominator) {
	
		return $denominator;
	}
} // end class RTOPQPQ
