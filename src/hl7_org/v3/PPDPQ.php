<?php
namespace hl7_org\v3;



/**
 * @XmlNamespaces ({
 *	@XmlNamespace(url="urn:hl7-org:v3", prefix="")
 * })
 * @XmlEntity	(xml="PPD_PQ")
 */
class PPDPQ extends \PQ\PQ {
	/**
	 */

	/**
	 * @XmlElement	(type="\hl7_org\v3\PQ", name="standardDeviation")
	 */
	protected $standardDeviation;

	/**
	 * @XmlAttribute	(type="string", name="distributionType")
	 */
	protected $distributionType;

	public function __construct($standardDeviation = NULL, $distributionType = NULL) {
		$this->standardDeviation = ($standardDeviation===NULL) ? NULL : $this->validateStandardDeviation($standardDeviation);
		$this->distributionType = ($distributionType===NULL) ? NULL : $this->validateDistributionType($distributionType);
	}

	public function getStandardDeviation() {
		if ($this->standardDeviation===NULL) {
			$this->standardDeviation = $this->createStandardDeviation();
		}
		return $this->standardDeviation;
	}
	
	protected function createStandardDeviation() {
		return new \hl7_org\v3\PQ();
	}

	public function setStandardDeviation($standardDeviation) {
		$this->standardDeviation = $this->validateStandardDeviation($standardDeviation);
	}

	protected function validateStandardDeviation($standardDeviation) {
		if ( ! $standardDeviation instanceof \hl7_org\v3\PQ  && ! is_null($standardDeviation) ) {
			$standardDeviation = new \hl7_org\v3\PQ ($standardDeviation);
		}
	
		return $standardDeviation;
	}

	public function getDistributionType() {
		if ($this->distributionType===NULL) {
			$this->distributionType = $this->createDistributionType();
		}
		return $this->distributionType;
	}
	
	protected function createDistributionType() {
		return new \hl7_org\v3\ProbabilityDistributionType();
	}

	public function setDistributionType($distributionType) {
		$this->distributionType = $this->validateDistributionType($distributionType);
	}

	protected function validateDistributionType($distributionType) {
		if ( ! $distributionType instanceof \hl7_org\v3\ProbabilityDistributionType  && ! is_null($distributionType) ) {
			$distributionType = new \hl7_org\v3\ProbabilityDistributionType ($distributionType);
		}
	
		return $distributionType;
	}
} // end class PPDPQ
