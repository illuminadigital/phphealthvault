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
	 * List of manually overridden properties that should not be re-generated automatically
	 * @var array
	 */
	protected $_overrides = array();


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

	public function getRealmCode($autoCreate = TRUE) {
		if ($this->realmCode===NULL && $autoCreate && ! isset($this->_overrides['realmCode']) ) {
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

	public function getTypeId($autoCreate = TRUE) {
		if ($this->typeId===NULL && $autoCreate && ! isset($this->_overrides['typeId']) ) {
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

	public function getTemplateId($autoCreate = TRUE) {
		if ($this->templateId===NULL && $autoCreate && ! isset($this->_overrides['templateId']) ) {
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

	public function getAct($autoCreate = TRUE) {
		if ($this->act===NULL && $autoCreate && ! isset($this->_overrides['act']) ) {
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

	public function getEncounter($autoCreate = TRUE) {
		if ($this->encounter===NULL && $autoCreate && ! isset($this->_overrides['encounter']) ) {
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

	public function getObservation($autoCreate = TRUE) {
		if ($this->observation===NULL && $autoCreate && ! isset($this->_overrides['observation']) ) {
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

	public function getObservationMedia($autoCreate = TRUE) {
		if ($this->observationMedia===NULL && $autoCreate && ! isset($this->_overrides['observationMedia']) ) {
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

	public function getOrganizer($autoCreate = TRUE) {
		if ($this->organizer===NULL && $autoCreate && ! isset($this->_overrides['organizer']) ) {
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

	public function getProcedure($autoCreate = TRUE) {
		if ($this->procedure===NULL && $autoCreate && ! isset($this->_overrides['procedure']) ) {
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

	public function getRegionOfInterest($autoCreate = TRUE) {
		if ($this->regionOfInterest===NULL && $autoCreate && ! isset($this->_overrides['regionOfInterest']) ) {
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

	public function getSubstanceAdministration($autoCreate = TRUE) {
		if ($this->substanceAdministration===NULL && $autoCreate && ! isset($this->_overrides['substanceAdministration']) ) {
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

	public function getSupply($autoCreate = TRUE) {
		if ($this->supply===NULL && $autoCreate && ! isset($this->_overrides['supply']) ) {
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

	public function getNullFlavor($autoCreate = TRUE) {
		if ($this->nullFlavor===NULL && $autoCreate && ! isset($this->_overrides['nullFlavor']) ) {
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

	public function getTypeCode($autoCreate = TRUE) {
		if ($this->typeCode===NULL && $autoCreate && ! isset($this->_overrides['typeCode']) ) {
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

	public function getContextConductionInd($autoCreate = TRUE) {
		if ($this->contextConductionInd===NULL && $autoCreate && ! isset($this->_overrides['contextConductionInd']) ) {
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
