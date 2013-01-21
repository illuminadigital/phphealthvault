<?php
namespace hl7_org\v3;



/**
 * @XmlNamespaces ({
 *	@XmlNamespace(url="urn:hl7-org:v3", prefix="")
 * })
 * @XmlEntity	(xml="PIVL_PPD_TS")
 */
class PIVLPPDTS extends \SXCM_PPD_TS\SXCMPPDTS {
	/**
	 * Note: because this type is defined as an extension of SXCM_T, all of the attributes and elements accepted for T are also accepted by this definition. However, they are NOT allowed by the normative description of this type. Unfortunately, we cannot write a general purpose schematron contraints to provide that extra validation, thus applications must be aware that instance (fragments) that pass validation with this might might still not be legal.
	 */

	/**
	 * @XmlElement	(type="\hl7_org\v3\IVLPPDTS", name="phase")
	 */
	protected $phase;

	/**
	 * @XmlElement	(type="\hl7_org\v3\PPDPQ", name="period")
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

	public function getPhase() {
		if ($this->phase===NULL) {
			$this->phase = $this->createPhase();
		}
		return $this->phase;
	}
	
	protected function createPhase() {
		return new \hl7_org\v3\IVLPPDTS();
	}

	public function setPhase($phase) {
		$this->phase = $this->validatePhase($phase);
	}

	protected function validatePhase($phase) {
		if ( ! $phase instanceof \hl7_org\v3\IVLPPDTS  && ! is_null($phase) ) {
			$phase = new \hl7_org\v3\IVLPPDTS ($phase);
		}
	
		return $phase;
	}

	public function getPeriod() {
		if ($this->period===NULL) {
			$this->period = $this->createPeriod();
		}
		return $this->period;
	}
	
	protected function createPeriod() {
		return new \hl7_org\v3\PPDPQ();
	}

	public function setPeriod($period) {
		$this->period = $this->validatePeriod($period);
	}

	protected function validatePeriod($period) {
		if ( ! $period instanceof \hl7_org\v3\PPDPQ  && ! is_null($period) ) {
			$period = new \hl7_org\v3\PPDPQ ($period);
		}
	
		return $period;
	}

	public function getAlignment() {
		if ($this->alignment===NULL) {
			$this->alignment = $this->createAlignment();
		}
		return $this->alignment;
	}
	
	protected function createAlignment() {
		return new \hl7_org\v3\CalendarCycle();
	}

	public function setAlignment($alignment) {
		$this->alignment = $this->validateAlignment($alignment);
	}

	protected function validateAlignment($alignment) {
		if ( ! $alignment instanceof \hl7_org\v3\CalendarCycle  && ! is_null($alignment) ) {
			$alignment = new \hl7_org\v3\CalendarCycle ($alignment);
		}
	
		return $alignment;
	}

	public function getInstitutionSpecified() {
		if ($this->institutionSpecified===NULL) {
			$this->institutionSpecified = $this->createInstitutionSpecified();
		}
		return $this->institutionSpecified;
	}
	
	protected function createInstitutionSpecified() {
		return new \hl7_org\v3\Bl();
	}

	public function setInstitutionSpecified($institutionSpecified) {
		$this->institutionSpecified = $this->validateInstitutionSpecified($institutionSpecified);
	}

	protected function validateInstitutionSpecified($institutionSpecified) {
		if ( ! $institutionSpecified instanceof \hl7_org\v3\Bl  && ! is_null($institutionSpecified) ) {
			$institutionSpecified = new \hl7_org\v3\Bl ($institutionSpecified);
		}
	
		return $institutionSpecified;
	}
} // end class PIVLPPDTS