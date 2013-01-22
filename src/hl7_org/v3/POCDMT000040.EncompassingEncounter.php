<?php
namespace hl7_org\v3;



/**
 * @XmlNamespaces ({
 *	@XmlNamespace(url="urn:hl7-org:v3", prefix="")
 * })
 * @XmlEntity	(xml="POCD_MT000040.EncompassingEncounter")
 */
class POCDMT000040.EncompassingEncounter {
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
	 * @XmlElement	(type="\hl7_org\v3\II", collection="true", name="id")
	 */
	protected $id;

	/**
	 * @XmlElement	(type="\hl7_org\v3\CE", name="code")
	 */
	protected $code;

	/**
	 * @XmlElement	(type="\hl7_org\v3\IVLTS", name="effectiveTime")
	 */
	protected $effectiveTime;

	/**
	 * @XmlElement	(type="\hl7_org\v3\CE", name="dischargeDispositionCode")
	 */
	protected $dischargeDispositionCode;

	/**
	 * @XmlElement	(type="\hl7_org\v3\POCDMT000040.ResponsibleParty", name="responsibleParty")
	 */
	protected $responsibleParty;

	/**
	 * @XmlElement	(type="\hl7_org\v3\POCDMT000040.EncounterParticipant", collection="true", name="encounterParticipant")
	 */
	protected $encounterParticipant;

	/**
	 * @XmlElement	(type="\hl7_org\v3\POCDMT000040.Location", name="location")
	 */
	protected $location;

	/**
	 * @XmlAttribute	(type="string", name="nullFlavor")
	 */
	protected $nullFlavor;

	/**
	 * @XmlAttribute	(type="string", name="classCode")
	 */
	protected $classCode;

	/**
	 * @XmlAttribute	(type="string", name="moodCode")
	 */
	protected $moodCode;

	public function __construct($realmCode = NULL, $typeId = NULL, $templateId = NULL, $id = NULL, $code = NULL, $effectiveTime = NULL, $dischargeDispositionCode = NULL, $responsibleParty = NULL, $encounterParticipant = NULL, $location = NULL, $nullFlavor = NULL, $classCode = NULL, $moodCode = NULL) {
		$this->realmCode = ($realmCode===NULL) ? NULL : $this->validateRealmCode($realmCode);
		$this->typeId = ($typeId===NULL) ? NULL : $this->validateTypeId($typeId);
		$this->templateId = ($templateId===NULL) ? NULL : $this->validateTemplateId($templateId);
		$this->id = ($id===NULL) ? NULL : $this->validateId($id);
		$this->code = ($code===NULL) ? NULL : $this->validateCode($code);
		$this->effectiveTime = ($effectiveTime===NULL) ? NULL : $this->validateEffectiveTime($effectiveTime);
		$this->dischargeDispositionCode = ($dischargeDispositionCode===NULL) ? NULL : $this->validateDischargeDispositionCode($dischargeDispositionCode);
		$this->responsibleParty = ($responsibleParty===NULL) ? NULL : $this->validateResponsibleParty($responsibleParty);
		$this->encounterParticipant = ($encounterParticipant===NULL) ? NULL : $this->validateEncounterParticipant($encounterParticipant);
		$this->location = ($location===NULL) ? NULL : $this->validateLocation($location);
		$this->nullFlavor = ($nullFlavor===NULL) ? NULL : $this->validateNullFlavor($nullFlavor);
		$this->classCode = ($classCode===NULL) ? NULL : $this->validateClassCode($classCode);
		$this->moodCode = ($moodCode===NULL) ? NULL : $this->validateMoodCode($moodCode);
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
		if ( ! $realmCode instanceof \hl7_org\v3\CS  && ! is_null($realmCode) ) {
			$realmCode = new \hl7_org\v3\CS ($realmCode);
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
		if ( ! $templateId instanceof \hl7_org\v3\II  && ! is_null($templateId) ) {
			$templateId = new \hl7_org\v3\II ($templateId);
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

	public function getId() {
		if ($this->id===NULL) {
			$this->id = $this->createId();
		}
		return $this->id;
	}
	
	protected function createId() {
		return array();
	}

	public function setId($id) {
		$this->id = $this->validateId($id);
	}

	protected function validateId($id) {
		if ( ! $id instanceof \hl7_org\v3\II  && ! is_null($id) ) {
			$id = new \hl7_org\v3\II ($id);
		}
		$count = count($id);
		if ($count < 0) {
			throw new \Exception(sprintf('Supplied %s array has less than the required number (%d) of entries.', 'id', 0));
		}
		foreach ($id as $entry) {
			if (!($entry instanceof II)) {
				throw new \Exception(sprintf('Supplied %s value was not %s', 'id', 'II'));
			}
		}
	
		return $id;
	}

	public function addId($id) {
		$this->id[] = $id;
	}

	public function getCode() {
		if ($this->code===NULL) {
			$this->code = $this->createCode();
		}
		return $this->code;
	}
	
	protected function createCode() {
		return new \hl7_org\v3\CE();
	}

	public function setCode($code) {
		$this->code = $this->validateCode($code);
	}

	protected function validateCode($code) {
		if ( ! $code instanceof \hl7_org\v3\CE  && ! is_null($code) ) {
			$code = new \hl7_org\v3\CE ($code);
		}
	
		return $code;
	}

	public function getEffectiveTime() {
		if ($this->effectiveTime===NULL) {
			$this->effectiveTime = $this->createEffectiveTime();
		}
		return $this->effectiveTime;
	}
	
	protected function createEffectiveTime() {
		return new \hl7_org\v3\IVLTS();
	}

	public function setEffectiveTime($effectiveTime) {
		$this->effectiveTime = $this->validateEffectiveTime($effectiveTime);
	}

	protected function validateEffectiveTime($effectiveTime) {
		if ( ! $effectiveTime instanceof \hl7_org\v3\IVLTS ) {
			$effectiveTime = new \hl7_org\v3\IVLTS ($effectiveTime);
		}
	
		return $effectiveTime;
	}

	public function getDischargeDispositionCode() {
		if ($this->dischargeDispositionCode===NULL) {
			$this->dischargeDispositionCode = $this->createDischargeDispositionCode();
		}
		return $this->dischargeDispositionCode;
	}
	
	protected function createDischargeDispositionCode() {
		return new \hl7_org\v3\CE();
	}

	public function setDischargeDispositionCode($dischargeDispositionCode) {
		$this->dischargeDispositionCode = $this->validateDischargeDispositionCode($dischargeDispositionCode);
	}

	protected function validateDischargeDispositionCode($dischargeDispositionCode) {
		if ( ! $dischargeDispositionCode instanceof \hl7_org\v3\CE  && ! is_null($dischargeDispositionCode) ) {
			$dischargeDispositionCode = new \hl7_org\v3\CE ($dischargeDispositionCode);
		}
	
		return $dischargeDispositionCode;
	}

	public function getResponsibleParty() {
		if ($this->responsibleParty===NULL) {
			$this->responsibleParty = $this->createResponsibleParty();
		}
		return $this->responsibleParty;
	}
	
	protected function createResponsibleParty() {
		return new \hl7_org\v3\POCDMT000040.ResponsibleParty();
	}

	public function setResponsibleParty($responsibleParty) {
		$this->responsibleParty = $this->validateResponsibleParty($responsibleParty);
	}

	protected function validateResponsibleParty($responsibleParty) {
		if ( ! $responsibleParty instanceof \hl7_org\v3\POCDMT000040.ResponsibleParty  && ! is_null($responsibleParty) ) {
			$responsibleParty = new \hl7_org\v3\POCDMT000040.ResponsibleParty ($responsibleParty);
		}
	
		return $responsibleParty;
	}

	public function getEncounterParticipant() {
		if ($this->encounterParticipant===NULL) {
			$this->encounterParticipant = $this->createEncounterParticipant();
		}
		return $this->encounterParticipant;
	}
	
	protected function createEncounterParticipant() {
		return array();
	}

	public function setEncounterParticipant($encounterParticipant) {
		$this->encounterParticipant = $this->validateEncounterParticipant($encounterParticipant);
	}

	protected function validateEncounterParticipant($encounterParticipant) {
		if ( ! $encounterParticipant instanceof \hl7_org\v3\POCDMT000040.EncounterParticipant  && ! is_null($encounterParticipant) ) {
			$encounterParticipant = new \hl7_org\v3\POCDMT000040.EncounterParticipant ($encounterParticipant);
		}
		$count = count($encounterParticipant);
		if ($count < 0) {
			throw new \Exception(sprintf('Supplied %s array has less than the required number (%d) of entries.', 'encounterParticipant', 0));
		}
		foreach ($encounterParticipant as $entry) {
			if (!($entry instanceof POCDMT000040.EncounterParticipant)) {
				throw new \Exception(sprintf('Supplied %s value was not %s', 'encounterParticipant', 'POCD_MT000040.EncounterParticipant'));
			}
		}
	
		return $encounterParticipant;
	}

	public function addEncounterParticipant($encounterParticipant) {
		$this->encounterParticipant[] = $encounterParticipant;
	}

	public function getLocation() {
		if ($this->location===NULL) {
			$this->location = $this->createLocation();
		}
		return $this->location;
	}
	
	protected function createLocation() {
		return new \hl7_org\v3\POCDMT000040.Location();
	}

	public function setLocation($location) {
		$this->location = $this->validateLocation($location);
	}

	protected function validateLocation($location) {
		if ( ! $location instanceof \hl7_org\v3\POCDMT000040.Location  && ! is_null($location) ) {
			$location = new \hl7_org\v3\POCDMT000040.Location ($location);
		}
	
		return $location;
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

	public function getClassCode() {
		if ($this->classCode===NULL) {
			$this->classCode = $this->createClassCode();
		}
		return $this->classCode;
	}
	
	protected function createClassCode() {
		return NULL;
	}

	public function setClassCode($classCode) {
		$this->classCode = $this->validateClassCode($classCode);
	}

	protected function validateClassCode($classCode) {
	
		return $classCode;
	}

	public function getMoodCode() {
		if ($this->moodCode===NULL) {
			$this->moodCode = $this->createMoodCode();
		}
		return $this->moodCode;
	}
	
	protected function createMoodCode() {
		return NULL;
	}

	public function setMoodCode($moodCode) {
		$this->moodCode = $this->validateMoodCode($moodCode);
	}

	protected function validateMoodCode($moodCode) {
	
		return $moodCode;
	}
} // end class POCDMT000040.EncompassingEncounter
