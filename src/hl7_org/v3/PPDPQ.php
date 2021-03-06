<?php
namespace hl7_org\v3;



/**
 * @XmlNamespaces ({
 *	@XmlNamespace(url="urn:hl7-org:v3", prefix="")
 * })
 * @XmlEntity	(xml="PPD_PQ")
 */
class PPDPQ extends \org\w3\www\_2001\XMLSchema\PQ {
	/**
	 */

	/**
	 * List of manually overridden properties that should not be re-generated automatically
	 * @var array
	 */
	protected $_overrides = array();


	/**
	 * @XmlElement	(type="\org\w3\www\_2001\XMLSchema\PQ", name="standardDeviation")
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

	public function getStandardDeviation($autoCreate = TRUE) {
		if ($this->standardDeviation===NULL && $autoCreate && ! isset($this->_overrides['standardDeviation']) ) {
			$this->standardDeviation = $this->createStandardDeviation();
		}
		return $this->standardDeviation;
	}
	
	protected function createStandardDeviation() {
		return NULL;
	}

	public function setStandardDeviation($standardDeviation) {
		$this->standardDeviation = $this->validateStandardDeviation($standardDeviation);
	}

	protected function validateStandardDeviation($standardDeviation) {
	
		return $standardDeviation;
	}

	public function getDistributionType($autoCreate = TRUE) {
		if ($this->distributionType===NULL && $autoCreate && ! isset($this->_overrides['distributionType']) ) {
			$this->distributionType = $this->createDistributionType();
		}
		return $this->distributionType;
	}
	
	protected function createDistributionType() {
		return NULL;
	}

	public function setDistributionType($distributionType) {
		$this->distributionType = $this->validateDistributionType($distributionType);
	}

	protected function validateDistributionType($distributionType) {
	
		return $distributionType;
	}
} // end class PPDPQ
