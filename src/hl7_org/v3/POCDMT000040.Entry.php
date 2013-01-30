<?php
namespace hl7_org\v3;



/**
 * @XmlNamespaces ({
 *	@XmlNamespace(url="urn:hl7-org:v3", prefix="")
 * })
 * @XmlEntity	(xml="POCD_MT000040.Entry")
 */
class POCDMT000040.Entry {
	/**
	 */

	/**
	 * @XmlElement	(type="\hl7_org\v3\CS", collection="true", name="realmCode")
	 */
	protected $realmCode;

	/**
	 * @XmlElement	(type="\hl7_org\v3\POCDMT000040.InfrastructureRoot.typeId", name="typeId")
	 */
	protected $typeId;

	/**
	 * @XmlElement	(type="\hl7_org\v3\II", collection="true", name="templateId")
	 */
	protected $templateId;

	/**
	 * @XmlElement	(type="\hl7_org\v3\POCDMT000040.Act", name="act")
	 */
	protected $act;

	/**
	 * @XmlElement	(type="\hl7_org\v3\POCDMT000040.Encounter", name="encounter")
	 */
	protected $encounter;

	/**
	 * @XmlElement	(type="\hl7_org\v3\POCDMT000040.Observation", name="observation")
	 */
	protected $observation;

	/**
	 * @XmlElement	(type="\hl7_org\v3\POCDMT000040.ObservationMedia", name="observationMedia")
	 */
	protected $observationMedia;

	/**
	 * @XmlElement	(type="\hl7_org\v3\POCDMT000040.Organizer", name="organizer")
	 */
	protected $organizer;

	/**
	 * @XmlElement	(type="\hl7_org\v3\POCDMT000040.Procedure", name="procedure")
	 */
	protected $procedure;

	/**
	 * @XmlElement	(type="\hl7_org\v3\POCDMT000040.RegionOfInterest", name="regionOfInterest")
	 */
	protected $regionOfInterest;

	/**
	 * @XmlElement	(type="\hl7_org\v3\POCDMT000040.SubstanceAdministration", name="substanceAdministration")
	 */
	protected $substanceAdministration;

	/**
	 * @XmlElement	(type="\hl7_org\v3\POCDMT000040.Supply", name="supply")
	 */
	protected $supply;

	/**
	 * @XmlAttribute	(type="string", name="nullFlavor")
	 */
	protected $nullFlavor;

	/**
	 * @XmlAttribute	(type="string", name="typeCode")
	 */
	protected $typeCode;

	/**
	 * @XmlAttribute	(type="string", name="contextConductionInd")
	 */
	protected $contextConductionInd;

	public function __construct($realmCode = NULL, $typeId = NULL, $templateId = NULL, $act = NULL, $encounter = NULL, $observation = NULL, $observationMedia = NULL, $organizer = NULL, $procedure = NULL, $regionOfInterest = NULL, $substanceAdministration = NULL, $supply = NULL, $nullFlavor = NULL, $typeCode = NULL, $contextConductionInd = NULL) {
		$this->realmCode = ($realmCode===NULL) ? NULL : $this->validateRealmCode($realmCode);
		$this->typeId = ($typeId===NULL) ? NULL : $this->validateTypeId($typeId);
		$this->templateId = ($templateId===NULL) ? NULL : $this->validateTemplateId($templateId);
		$this->act = ($act===NULL) ? NULL : $this->validateAct($act);
		$this->encounter = ($encounter===NULL) ? NULL : $this->validateEncounter($encounter);
		$this->observation = ($observation===NULL) ? NULL : $this->validateObservation($observation);
		$this->observationMedia = ($observationMedia===NULL) ? NULL : $this->validateObservationMedia($observationMedia);
		$this->organizer = ($organizer===NULL) ? NULL : $this->validateOrganizer($organizer);
		$this->procedure = ($procedure===NULL) ? NULL : $this->validateProcedure($procedure);
		$this->regionOfInterest = ($regionOfInterest===NULL) ? NULL : $this->validateRegionOfInterest($regionOfInterest);
		$this->substanceAdministration = ($substanceAdministration===NULL) ? NULL : $this->validateSubstanceAdministration($substanceAdministration);
		$this->supply = ($supply===NULL) ? NULL : $this->validateSupply($supply);
		$this->nullFlavor = ($nullFlavor===NULL) ? NULL : $this->validateNullFlavor($nullFlavor);
		$this->typeCode = ($typeCode===NULL) ? NULL : $this->validateTypeCode($typeCode);
		$this->contextConductionInd = ($contextConductionInd===NULL) ? NULL : $this->validateContextConductionInd($contextConductionInd);
	}

	public function getRealmCode() {
		if ($this->realmCode===NULL) {
			$this->realmCode = $this->createRealmCode();
		}
		return $this->realmCode;
	}
	
	protected function createRealmCode() {
		return array();
	}

	public function setRealmCode($realmCode) {
		$this->realmCode = $this->validateRealmCode($realmCode);
	}

	protected function validateRealmCode($realmCode) {
		if ( ! is_array ($realmCode) && ! is_null($realmCode) ) {
			$realmCode = array($realmCode);
		}
		$count = count($realmCode);
		if ($count < 0) {
			throw new \Exception(sprintf('Supplied %s array has less than the required number (%d) of entries.', 'realmCode', 0));
		}
		foreach ($realmCode as $entry) {
			if (!($entry instanceof CS)) {
				throw new \Exception(sprintf('Supplied %s value was not %s', 'realmCode', 'CS'));
			}
		}
	
		return $realmCode;
	}

	public function addRealmCode($realmCode) {
		$this->realmCode[] = $realmCode;
	}

	public function getTypeId() {
		if ($this->typeId===NULL) {
			$this->typeId = $this->createTypeId();
		}
		return $this->typeId;
	}
	
	protected function createTypeId() {
		return new \hl7_org\v3\POCDMT000040.InfrastructureRoot.typeId();
	}

	public function setTypeId($typeId) {
		$this->typeId = $this->validateTypeId($typeId);
	}

	protected function validateTypeId($typeId) {
		if ( ! $typeId instanceof \hl7_org\v3\POCDMT000040.InfrastructureRoot.typeId  && ! is_null($typeId) ) {
			$typeId = new \hl7_org\v3\POCDMT000040.InfrastructureRoot.typeId ($typeId);
		}
	
		return $typeId;
	}

	public function getTemplateId() {
		if ($this->templateId===NULL) {
			$this->templateId = $this->createTemplateId();
		}
		return $this->templateId;
	}
	
	protected function createTemplateId() {
		return array();
	}

	public function setTemplateId($templateId) {
		$this->templateId = $this->validateTemplateId($templateId);
	}

	protected function validateTemplateId($templateId) {
		if ( ! is_array ($templateId) && ! is_null($templateId) ) {
			$templateId = array($templateId);
		}
		$count = count($templateId);
		if ($count < 0) {
			throw new \Exception(sprintf('Supplied %s array has less than the required number (%d) of entries.', 'templateId', 0));
		}
		foreach ($templateId as $entry) {
			if (!($entry instanceof II)) {
				throw new \Exception(sprintf('Supplied %s value was not %s', 'templateId', 'II'));
			}
		}
	
		return $templateId;
	}

	public function addTemplateId($templateId) {
		$this->templateId[] = $templateId;
	}

	public function getAct() {
		if ($this->act===NULL) {
			$this->act = $this->createAct();
		}
		return $this->act;
	}
	
	protected function createAct() {
		return new \hl7_org\v3\POCDMT000040.Act();
	}

	public function setAct($act) {
		$this->act = $this->validateAct($act);
	}

	protected function validateAct($act) {
		if ( ! $act instanceof \hl7_org\v3\POCDMT000040.Act ) {
			$act = new \hl7_org\v3\POCDMT000040.Act ($act);
		}
	
		return $act;
	}

	public function getEncounter() {
		if ($this->encounter===NULL) {
			$this->encounter = $this->createEncounter();
		}
		return $this->encounter;
	}
	
	protected function createEncounter() {
		return new \hl7_org\v3\POCDMT000040.Encounter();
	}

	public function setEncounter($encounter) {
		$this->encounter = $this->validateEncounter($encounter);
	}

	protected function validateEncounter($encounter) {
		if ( ! $encounter instanceof \hl7_org\v3\POCDMT000040.Encounter ) {
			$encounter = new \hl7_org\v3\POCDMT000040.Encounter ($encounter);
		}
	
		return $encounter;
	}

	public function getObservation() {
		if ($this->observation===NULL) {
			$this->observation = $this->createObservation();
		}
		return $this->observation;
	}
	
	protected function createObservation() {
		return new \hl7_org\v3\POCDMT000040.Observation();
	}

	public function setObservation($observation) {
		$this->observation = $this->validateObservation($observation);
	}

	protected function validateObservation($observation) {
		if ( ! $observation instanceof \hl7_org\v3\POCDMT000040.Observation ) {
			$observation = new \hl7_org\v3\POCDMT000040.Observation ($observation);
		}
	
		return $observation;
	}

	public function getObservationMedia() {
		if ($this->observationMedia===NULL) {
			$this->observationMedia = $this->createObservationMedia();
		}
		return $this->observationMedia;
	}
	
	protected function createObservationMedia() {
		return new \hl7_org\v3\POCDMT000040.ObservationMedia();
	}

	public function setObservationMedia($observationMedia) {
		$this->observationMedia = $this->validateObservationMedia($observationMedia);
	}

	protected function validateObservationMedia($observationMedia) {
		if ( ! $observationMedia instanceof \hl7_org\v3\POCDMT000040.ObservationMedia ) {
			$observationMedia = new \hl7_org\v3\POCDMT000040.ObservationMedia ($observationMedia);
		}
	
		return $observationMedia;
	}

	public function getOrganizer() {
		if ($this->organizer===NULL) {
			$this->organizer = $this->createOrganizer();
		}
		return $this->organizer;
	}
	
	protected function createOrganizer() {
		return new \hl7_org\v3\POCDMT000040.Organizer();
	}

	public function setOrganizer($organizer) {
		$this->organizer = $this->validateOrganizer($organizer);
	}

	protected function validateOrganizer($organizer) {
		if ( ! $organizer instanceof \hl7_org\v3\POCDMT000040.Organizer ) {
			$organizer = new \hl7_org\v3\POCDMT000040.Organizer ($organizer);
		}
	
		return $organizer;
	}

	public function getProcedure() {
		if ($this->procedure===NULL) {
			$this->procedure = $this->createProcedure();
		}
		return $this->procedure;
	}
	
	protected function createProcedure() {
		return new \hl7_org\v3\POCDMT000040.Procedure();
	}

	public function setProcedure($procedure) {
		$this->procedure = $this->validateProcedure($procedure);
	}

	protected function validateProcedure($procedure) {
		if ( ! $procedure instanceof \hl7_org\v3\POCDMT000040.Procedure ) {
			$procedure = new \hl7_org\v3\POCDMT000040.Procedure ($procedure);
		}
	
		return $procedure;
	}

	public function getRegionOfInterest() {
		if ($this->regionOfInterest===NULL) {
			$this->regionOfInterest = $this->createRegionOfInterest();
		}
		return $this->regionOfInterest;
	}
	
	protected function createRegionOfInterest() {
		return new \hl7_org\v3\POCDMT000040.RegionOfInterest();
	}

	public function setRegionOfInterest($regionOfInterest) {
		$this->regionOfInterest = $this->validateRegionOfInterest($regionOfInterest);
	}

	protected function validateRegionOfInterest($regionOfInterest) {
		if ( ! $regionOfInterest instanceof \hl7_org\v3\POCDMT000040.RegionOfInterest ) {
			$regionOfInterest = new \hl7_org\v3\POCDMT000040.RegionOfInterest ($regionOfInterest);
		}
	
		return $regionOfInterest;
	}

	public function getSubstanceAdministration() {
		if ($this->substanceAdministration===NULL) {
			$this->substanceAdministration = $this->createSubstanceAdministration();
		}
		return $this->substanceAdministration;
	}
	
	protected function createSubstanceAdministration() {
		return new \hl7_org\v3\POCDMT000040.SubstanceAdministration();
	}

	public function setSubstanceAdministration($substanceAdministration) {
		$this->substanceAdministration = $this->validateSubstanceAdministration($substanceAdministration);
	}

	protected function validateSubstanceAdministration($substanceAdministration) {
		if ( ! $substanceAdministration instanceof \hl7_org\v3\POCDMT000040.SubstanceAdministration ) {
			$substanceAdministration = new \hl7_org\v3\POCDMT000040.SubstanceAdministration ($substanceAdministration);
		}
	
		return $substanceAdministration;
	}

	public function getSupply() {
		if ($this->supply===NULL) {
			$this->supply = $this->createSupply();
		}
		return $this->supply;
	}
	
	protected function createSupply() {
		return new \hl7_org\v3\POCDMT000040.Supply();
	}

	public function setSupply($supply) {
		$this->supply = $this->validateSupply($supply);
	}

	protected function validateSupply($supply) {
		if ( ! $supply instanceof \hl7_org\v3\POCDMT000040.Supply ) {
			$supply = new \hl7_org\v3\POCDMT000040.Supply ($supply);
		}
	
		return $supply;
	}

	public function getNullFlavor() {
		if ($this->nullFlavor===NULL) {
			$this->nullFlavor = $this->createNullFlavor();
		}
		return $this->nullFlavor;
	}
	
	protected function createNullFlavor() {
		return NULL;
	}

	public function setNullFlavor($nullFlavor) {
		$this->nullFlavor = $this->validateNullFlavor($nullFlavor);
	}

	protected function validateNullFlavor($nullFlavor) {
	
		return $nullFlavor;
	}

	public function getTypeCode() {
		if ($this->typeCode===NULL) {
			$this->typeCode = $this->createTypeCode();
		}
		return $this->typeCode;
	}
	
	protected function createTypeCode() {
		return NULL;
	}

	public function setTypeCode($typeCode) {
		$this->typeCode = $this->validateTypeCode($typeCode);
	}

	protected function validateTypeCode($typeCode) {
	
		return $typeCode;
	}

	public function getContextConductionInd() {
		if ($this->contextConductionInd===NULL) {
			$this->contextConductionInd = $this->createContextConductionInd();
		}
		return $this->contextConductionInd;
	}
	
	protected function createContextConductionInd() {
		return NULL;
	}

	public function setContextConductionInd($contextConductionInd) {
		$this->contextConductionInd = $this->validateContextConductionInd($contextConductionInd);
	}

	protected function validateContextConductionInd($contextConductionInd) {
	
		return $contextConductionInd;
	}
} // end class POCDMT000040.Entry
