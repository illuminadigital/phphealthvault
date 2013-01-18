<?php
namespace hl7_org\v3;



/**
 * @XmlNamespaces ({
 *	@XmlNamespace(url="urn:hl7-org:v3", prefix="")
 * })
 * @XmlEntity	(xml="RTO_MO_PQ")
 */
class RTOMOPQ extends \QTY\QTY {
	/**
	 */

	/**
	 * @XmlElement	(type="\hl7_org\v3\MO", name="numerator")
	 */
	protected $numerator;

	/**
	 * @XmlElement	(type="\hl7_org\v3\PQ", name="denominator")
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
		return new \hl7_org\v3\MO();
	}

	public function setNumerator($numerator) {
		$this->numerator = $this->validateNumerator($numerator);
	}

	protected function validateNumerator($numerator) {
		if ( ! $numerator instanceof \hl7_org\v3\MO ) {
			$numerator = new \hl7_org\v3\MO ($numerator);
		}
	
		return $numerator;
	}

	public function getDenominator() {
		if ($this->denominator===NULL) {
			$this->denominator = $this->createDenominator();
		}
		return $this->denominator;
	}
	
	protected function createDenominator() {
		return new \hl7_org\v3\PQ();
	}

	public function setDenominator($denominator) {
		$this->denominator = $this->validateDenominator($denominator);
	}

	protected function validateDenominator($denominator) {
		if ( ! $denominator instanceof \hl7_org\v3\PQ ) {
			$denominator = new \hl7_org\v3\PQ ($denominator);
		}
	
		return $denominator;
	}
} // end class RTOMOPQ
