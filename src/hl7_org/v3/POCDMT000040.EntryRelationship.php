<?php
namespace hl7_org\v3;



/**
 * @XmlNamespaces ({
 *	@XmlNamespace(url="urn:hl7-org:v3", prefix="")
 * })
 * @XmlEntity	(xml="POCD_MT000040.EntryRelationship")
 */
class POCDMT000040.EntryRelationship {
	/**
	 */

	/**
	 * @XmlElement	(type="\org\w3\www\_2001\XMLSchema\CS", collection="true", name="realmCode")
	 */
	protected $realmCode;

	/**
	 * @XmlElement	(type="\org\w3\www\_2001\XMLSchema\POCDMT000040.InfrastructureRoot.typeId", name="typeId")
	 */
	protected $typeId;

	/**
	 * @XmlElement	(type="\org\w3\www\_2001\XMLSchema\II", collection="true", name="templateId")
	 */
	protected $templateId;

	/**
	 * @XmlElement	(type="\org\w3\www\_2001\XMLSchema\INT", name="sequenceNumber")
	 */
	protected $sequenceNumber;

	/**
	 * @XmlElement	(type="\org\w3\www\_2001\XMLSchema\BL", name="seperatableInd")
	 */
	protected $seperatableInd;

	/**
	 * @XmlElement	(type="\org\w3\www\_2001\XMLSchema\POCDMT000040.Act", name="act")
	 */
	protected $act;

	/**
	 * @XmlElement	(type="\org\w3\www\_2001\XMLSchema\POCDMT000040.Encounter", name="encounter")
	 */
	protected $encounter;

	/**
	 * @XmlElement	(type="\org\w3\www\_2001\XMLSchema\POCDMT000040.Observation", name="observation")
	 */
	protected $observation;

	/**
	 * @XmlElement	(type="\org\w3\www\_2001\XMLSchema\POCDMT000040.ObservationMedia", name="observationMedia")
	 */
	protected $observationMedia;

	/**
	 * @XmlElement	(type="\org\w3\www\_2001\XMLSchema\POCDMT000040.Organizer", name="organizer")
	 */
	protected $organizer;

	/**
	 * @XmlElement	(type="\org\w3\www\_2001\XMLSchema\POCDMT000040.Procedure", name="procedure")
	 */
	protected $procedure;

	/**
	 * @XmlElement	(type="\org\w3\www\_2001\XMLSchema\POCDMT000040.RegionOfInterest", name="regionOfInterest")
	 */
	protected $regionOfInterest;

	/**
	 * @XmlElement	(type="\org\w3\www\_2001\XMLSchema\POCDMT000040.SubstanceAdministration", name="substanceAdministration")
	 */
	protected $substanceAdministration;

	/**
	 * @XmlElement	(type="\org\w3\www\_2001\XMLSchema\POCDMT000040.Supply", name="supply")
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
	 * @XmlAttribute	(type="string", name="inversionInd")
	 */
	protected $inversionInd;

	/**
	 * @XmlAttribute	(type="string", name="contextConductionInd")
	 */
	protected $contextConductionInd;

	/**
	 * @XmlAttribute	(type="string", name="negationInd")
	 */
	protected $negationInd;

	public function __construct($realmCode = NULL, $typeId = NULL, $templateId = NULL, $sequenceNumber = NULL, $seperatableInd = NULL, $act = NULL, $encounter = NULL, $observation = NULL, $observationMedia = NULL, $organizer = NULL, $procedure = NULL, $regionOfInterest = NULL, $substanceAdministration = NULL, $supply = NULL, $nullFlavor = NULL, $typeCode = NULL, $inversionInd = NULL, $contextConductionInd = NULL, $negationInd = NULL) {
		$this->realmCode = ($realmCode===NULL) ? NULL : $this->validateRealmCode($realmCode);
		$this->typeId = ($typeId===NULL) ? NULL : $this->validateTypeId($typeId);
		$this->templateId = ($templateId===NULL) ? NULL : $this->validateTemplateId($templateId);
		$this->sequenceNumber = ($sequenceNumber===NULL) ? NULL : $this->validateSequenceNumber($sequenceNumber);
		$this->seperatableInd = ($seperatableInd===NULL) ? NULL : $this->validateSeperatableInd($seperatableInd);
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
		$this->inversionInd = ($inversionInd===NULL) ? NULL : $this->validateInversionInd($inversionInd);
		$this->contextConductionInd = ($contextConductionInd===NULL) ? NULL : $this->validateContextConductionInd($contextConductionInd);
		$this->negationInd = ($negationInd===NULL) ? NULL : $this->validateNegationInd($negationInd);
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
		$count = count($realmCode);
		if ($count < 0) {
			throw new \Exception(sprintf('Supplied %s array has less than the required number (%d) of entries.', 'realmCode', 0));
		}
		foreach ($realmCode as $entry) {
		}
	
		return $realmCode;
	}

	public function addRealmCode($realmCode) {
		$this->realmCode[] = $this->validateRealmCodeType($realmCode);
	}

	protected function validateRealmCodeType($realmCode) {
	
		return $realmCode;
	}

	public function getTypeId() {
		if ($this->typeId===NULL) {
			$this->typeId = $this->createTypeId();
		}
		return $this->typeId;
	}
	
	protected function createTypeId() {
		return NULL;
	}

	public function setTypeId($typeId) {
		$this->typeId = $this->validateTypeId($typeId);
	}

	protected function validateTypeId($typeId) {
	
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
		$count = count($templateId);
		if ($count < 0) {
			throw new \Exception(sprintf('Supplied %s array has less than the required number (%d) of entries.', 'templateId', 0));
		}
		foreach ($templateId as $entry) {
		}
	
		return $templateId;
	}

	public function addTemplateId($templateId) {
		$this->templateId[] = $this->validateTemplateIdType($templateId);
	}

	protected function validateTemplateIdType($templateId) {
	
		return $templateId;
	}

	public function getSequenceNumber() {
		if ($this->sequenceNumber===NULL) {
			$this->sequenceNumber = $this->createSequenceNumber();
		}
		return $this->sequenceNumber;
	}
	
	protected function createSequenceNumber() {
		return NULL;
	}

	public function setSequenceNumber($sequenceNumber) {
		$this->sequenceNumber = $this->validateSequenceNumber($sequenceNumber);
	}

	protected function validateSequenceNumber($sequenceNumber) {
	
		return $sequenceNumber;
	}

	public function getSeperatableInd() {
		if ($this->seperatableInd===NULL) {
			$this->seperatableInd = $this->createSeperatableInd();
		}
		return $this->seperatableInd;
	}
	
	protected function createSeperatableInd() {
		return NULL;
	}

	public function setSeperatableInd($seperatableInd) {
		$this->seperatableInd = $this->validateSeperatableInd($seperatableInd);
	}

	protected function validateSeperatableInd($seperatableInd) {
	
		return $seperatableInd;
	}

	public function getAct() {
		if ($this->act===NULL) {
			$this->act = $this->createAct();
		}
		return $this->act;
	}
	
	protected function createAct() {
		return NULL;
	}

	public function setAct($act) {
		$this->act = $this->validateAct($act);
	}

	protected function validateAct($act) {
	
		return $act;
	}

	public function getEncounter() {
		if ($this->encounter===NULL) {
			$this->encounter = $this->createEncounter();
		}
		return $this->encounter;
	}
	
	protected function createEncounter() {
		return NULL;
	}

	public function setEncounter($encounter) {
		$this->encounter = $this->validateEncounter($encounter);
	}

	protected function validateEncounter($encounter) {
	
		return $encounter;
	}

	public function getObservation() {
		if ($this->observation===NULL) {
			$this->observation = $this->createObservation();
		}
		return $this->observation;
	}
	
	protected function createObservation() {
		return NULL;
	}

	public function setObservation($observation) {
		$this->observation = $this->validateObservation($observation);
	}

	protected function validateObservation($observation) {
	
		return $observation;
	}

	public function getObservationMedia() {
		if ($this->observationMedia===NULL) {
			$this->observationMedia = $this->createObservationMedia();
		}
		return $this->observationMedia;
	}
	
	protected function createObservationMedia() {
		return NULL;
	}

	public function setObservationMedia($observationMedia) {
		$this->observationMedia = $this->validateObservationMedia($observationMedia);
	}

	protected function validateObservationMedia($observationMedia) {
	
		return $observationMedia;
	}

	public function getOrganizer() {
		if ($this->organizer===NULL) {
			$this->organizer = $this->createOrganizer();
		}
		return $this->organizer;
	}
	
	protected function createOrganizer() {
		return NULL;
	}

	public function setOrganizer($organizer) {
		$this->organizer = $this->validateOrganizer($organizer);
	}

	protected function validateOrganizer($organizer) {
	
		return $organizer;
	}

	public function getProcedure() {
		if ($this->procedure===NULL) {
			$this->procedure = $this->createProcedure();
		}
		return $this->procedure;
	}
	
	protected function createProcedure() {
		return NULL;
	}

	public function setProcedure($procedure) {
		$this->procedure = $this->validateProcedure($procedure);
	}

	protected function validateProcedure($procedure) {
	
		return $procedure;
	}

	public function getRegionOfInterest() {
		if ($this->regionOfInterest===NULL) {
			$this->regionOfInterest = $this->createRegionOfInterest();
		}
		return $this->regionOfInterest;
	}
	
	protected function createRegionOfInterest() {
		return NULL;
	}

	public function setRegionOfInterest($regionOfInterest) {
		$this->regionOfInterest = $this->validateRegionOfInterest($regionOfInterest);
	}

	protected function validateRegionOfInterest($regionOfInterest) {
	
		return $regionOfInterest;
	}

	public function getSubstanceAdministration() {
		if ($this->substanceAdministration===NULL) {
			$this->substanceAdministration = $this->createSubstanceAdministration();
		}
		return $this->substanceAdministration;
	}
	
	protected function createSubstanceAdministration() {
		return NULL;
	}

	public function setSubstanceAdministration($substanceAdministration) {
		$this->substanceAdministration = $this->validateSubstanceAdministration($substanceAdministration);
	}

	protected function validateSubstanceAdministration($substanceAdministration) {
	
		return $substanceAdministration;
	}

	public function getSupply() {
		if ($this->supply===NULL) {
			$this->supply = $this->createSupply();
		}
		return $this->supply;
	}
	
	protected function createSupply() {
		return NULL;
	}

	public function setSupply($supply) {
		$this->supply = $this->validateSupply($supply);
	}

	protected function validateSupply($supply) {
	
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

	public function getInversionInd() {
		if ($this->inversionInd===NULL) {
			$this->inversionInd = $this->createInversionInd();
		}
		return $this->inversionInd;
	}
	
	protected function createInversionInd() {
		return NULL;
	}

	public function setInversionInd($inversionInd) {
		$this->inversionInd = $this->validateInversionInd($inversionInd);
	}

	protected function validateInversionInd($inversionInd) {
	
		return $inversionInd;
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

	public function getNegationInd() {
		if ($this->negationInd===NULL) {
			$this->negationInd = $this->createNegationInd();
		}
		return $this->negationInd;
	}
	
	protected function createNegationInd() {
		return NULL;
	}

	public function setNegationInd($negationInd) {
		$this->negationInd = $this->validateNegationInd($negationInd);
	}

	protected function validateNegationInd($negationInd) {
	
		return $negationInd;
	}
} // end class POCDMT000040.EntryRelationship
