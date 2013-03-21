<?php
namespace hl7_org\v3;



/**
 * @XmlNamespaces ({
 *	@XmlNamespace(url="urn:hl7-org:v3", prefix="")
 * })
 * @XmlEntity	(xml="RTO_MO_PQ")
 */
class RTOMOPQ extends \org\w3\www\_2001\XMLSchema\QTY {
	/**
	 */

	/**
	 * List of manually overridden properties that should not be re-generated automatically
	 * @var array
	 */
	protected $_overrides = array();


	/**
	 * @XmlElement	(type="\org\w3\www\_2001\XMLSchema\MO", name="numerator")
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

	public function getNumerator($autoCreate = TRUE) {
		if ($this->numerator===NULL && $autoCreate && ! isset($this->_overrides['numerator']) ) {
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

	public function getDenominator($autoCreate = TRUE) {
		if ($this->denominator===NULL && $autoCreate && ! isset($this->_overrides['denominator']) ) {
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
} // end class RTOMOPQ
