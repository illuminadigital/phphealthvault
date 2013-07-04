<?php
namespace hl7_org\v3;



/**
 * @XmlNamespaces ({
 *	@XmlNamespace(url="urn:hl7-org:v3", prefix="")
 * })
 * @XmlEntity	(xml="PIVL_PPD_TS")
 */
class PIVLPPDTS extends \org\w3\www\_2001\XMLSchema\SXCMPPDTS {
	/**
	 * Note: because this type is defined as an extension of SXCM_T,all of the attributes and elements accepted for T are alsoaccepted by this definition. However, they are NOT allowedby the normative description of this type. Unfortunately,we cannot write a general purpose schematron contraints toprovide that extra validation, thus applications must beaware that instance (fragments) that pass validation withthis might might still not be legal.
	 */

	/**
	 * List of manually overridden properties that should not be re-generated automatically
	 * @var array
	 */
	protected $_overrides = array();


	/**
	 * @XmlElement	(type="\org\w3\www\_2001\XMLSchema\IVLPPDTS", name="phase")
	 */
	protected $phase;

	/**
	 * @XmlElement	(type="\org\w3\www\_2001\XMLSchema\PPDPQ", name="period")
	 */
	protected $period;

	/**
	 * @XmlAttribute	(type="string", name="alignment")
	 */
	protected $alignment;

	/**
	 * @XmlAttribute	(type="string", name="institutionSpecified")
	 */
	protected $institutionSpecified;

	public function __construct($phase = NULL, $period = NULL, $alignment = NULL, $institutionSpecified = NULL) {
		$this->phase = ($phase===NULL) ? NULL : $this->validatePhase($phase);
		$this->period = ($period===NULL) ? NULL : $this->validatePeriod($period);
		$this->alignment = ($alignment===NULL) ? NULL : $this->validateAlignment($alignment);
		$this->institutionSpecified = ($institutionSpecified===NULL) ? NULL : $this->validateInstitutionSpecified($institutionSpecified);
	}

	public function getPhase($autoCreate = TRUE) {
		if ($this->phase===NULL && $autoCreate && ! isset($this->_overrides['phase']) ) {
			$this->phase = $this->createPhase();
		}
		return $this->phase;
	}
	
	protected function createPhase() {
		return NULL;
	}

	public function setPhase($phase) {
		$this->phase = $this->validatePhase($phase);
	}

	protected function validatePhase($phase) {
	
		return $phase;
	}

	public function getPeriod($autoCreate = TRUE) {
		if ($this->period===NULL && $autoCreate && ! isset($this->_overrides['period']) ) {
			$this->period = $this->createPeriod();
		}
		return $this->period;
	}
	
	protected function createPeriod() {
		return NULL;
	}

	public function setPeriod($period) {
		$this->period = $this->validatePeriod($period);
	}

	protected function validatePeriod($period) {
	
		return $period;
	}

	public function getAlignment($autoCreate = TRUE) {
		if ($this->alignment===NULL && $autoCreate && ! isset($this->_overrides['alignment']) ) {
			$this->alignment = $this->createAlignment();
		}
		return $this->alignment;
	}
	
	protected function createAlignment() {
		return NULL;
	}

	public function setAlignment($alignment) {
		$this->alignment = $this->validateAlignment($alignment);
	}

	protected function validateAlignment($alignment) {
	
		return $alignment;
	}

	public function getInstitutionSpecified($autoCreate = TRUE) {
		if ($this->institutionSpecified===NULL && $autoCreate && ! isset($this->_overrides['institutionSpecified']) ) {
			$this->institutionSpecified = $this->createInstitutionSpecified();
		}
		return $this->institutionSpecified;
	}
	
	protected function createInstitutionSpecified() {
		return NULL;
	}

	public function setInstitutionSpecified($institutionSpecified) {
		$this->institutionSpecified = $this->validateInstitutionSpecified($institutionSpecified);
	}

	protected function validateInstitutionSpecified($institutionSpecified) {
	
		return $institutionSpecified;
	}
} // end class PIVLPPDTS
