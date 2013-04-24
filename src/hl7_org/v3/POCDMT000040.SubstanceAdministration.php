<?php
namespace hl7_org\v3;



/**
 * @XmlNamespaces ({
 *	@XmlNamespace(url="urn:hl7-org:v3", prefix="")
 * })
 * @XmlEntity	(xml="POCD_MT000040.SubstanceAdministration")
 */
class POCDMT000040.SubstanceAdministration {
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
	 * @XmlElement	(type="\org\w3\www\_2001\XMLSchema\II", collection="true", name="id")
	 */
	protected $id;

	/**
	 * @XmlElement	(type="\org\w3\www\_2001\XMLSchema\CD", name="code")
	 */
	protected $code;

	/**
	 * @XmlElement	(type="\org\w3\www\_2001\XMLSchema\ED", name="text")
	 */
	protected $text;

	/**
	 * @XmlElement	(type="\org\w3\www\_2001\XMLSchema\CS", name="statusCode")
	 */
	protected $statusCode;

	/**
	 * @XmlElement	(type="\org\w3\www\_2001\XMLSchema\SXCMTS", collection="true", name="effectiveTime")
	 */
	protected $effectiveTime;

	/**
	 * @XmlElement	(type="\org\w3\www\_2001\XMLSchema\CE", name="priorityCode")
	 */
	protected $priorityCode;

	/**
	 * @XmlElement	(type="\org\w3\www\_2001\XMLSchema\IVLINT", name="repeatNumber")
	 */
	protected $repeatNumber;

	/**
	 * @XmlElement	(type="\org\w3\www\_2001\XMLSchema\CE", name="routeCode")
	 */
	protected $routeCode;

	/**
	 * @XmlElement	(type="\org\w3\www\_2001\XMLSchema\CD", collection="true", name="approachSiteCode")
	 */
	protected $approachSiteCode;

	/**
	 * @XmlElement	(type="\org\w3\www\_2001\XMLSchema\IVLPQ", name="doseQuantity")
	 */
	protected $doseQuantity;

	/**
	 * @XmlElement	(type="\org\w3\www\_2001\XMLSchema\IVLPQ", name="rateQuantity")
	 */
	protected $rateQuantity;

	/**
	 * @XmlElement	(type="\org\w3\www\_2001\XMLSchema\RTOPQPQ", name="maxDoseQuantity")
	 */
	protected $maxDoseQuantity;

	/**
	 * @XmlElement	(type="\org\w3\www\_2001\XMLSchema\CE", name="administrationUnitCode")
	 */
	protected $administrationUnitCode;

	/**
	 * @XmlElement	(type="\org\w3\www\_2001\XMLSchema\POCDMT000040.Subject", name="subject")
	 */
	protected $subject;

	/**
	 * @XmlElement	(type="\org\w3\www\_2001\XMLSchema\POCDMT000040.Specimen", collection="true", name="specimen")
	 */
	protected $specimen;

	/**
	 * @XmlElement	(type="\org\w3\www\_2001\XMLSchema\POCDMT000040.Consumable", name="consumable")
	 */
	protected $consumable;

	/**
	 * @XmlElement	(type="\org\w3\www\_2001\XMLSchema\POCDMT000040.Performer2", collection="true", name="performer")
	 */
	protected $performer;

	/**
	 * @XmlElement	(type="\org\w3\www\_2001\XMLSchema\POCDMT000040.Author", collection="true", name="author")
	 */
	protected $author;

	/**
	 * @XmlElement	(type="\org\w3\www\_2001\XMLSchema\POCDMT000040.Informant12", collection="true", name="informant")
	 */
	protected $informant;

	/**
	 * @XmlElement	(type="\org\w3\www\_2001\XMLSchema\POCDMT000040.Participant2", collection="true", name="participant")
	 */
	protected $participant;

	/**
	 * @XmlElement	(type="\org\w3\www\_2001\XMLSchema\POCDMT000040.EntryRelationship", collection="true", name="entryRelationship")
	 */
	protected $entryRelationship;

	/**
	 * @XmlElement	(type="\org\w3\www\_2001\XMLSchema\POCDMT000040.Reference", collection="true", name="reference")
	 */
	protected $reference;

	/**
	 * @XmlElement	(type="\org\w3\www\_2001\XMLSchema\POCDMT000040.Precondition", collection="true", name="precondition")
	 */
	protected $precondition;

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

	/**
	 * @XmlAttribute	(type="string", name="negationInd")
	 */
	protected $negationInd;

	public function __construct($realmCode = NULL, $typeId = NULL, $templateId = NULL, $id = NULL, $code = NULL, $text = NULL, $statusCode = NULL, $effectiveTime = NULL, $priorityCode = NULL, $repeatNumber = NULL, $routeCode = NULL, $approachSiteCode = NULL, $doseQuantity = NULL, $rateQuantity = NULL, $maxDoseQuantity = NULL, $administrationUnitCode = NULL, $subject = NULL, $specimen = NULL, $consumable = NULL, $performer = NULL, $author = NULL, $informant = NULL, $participant = NULL, $entryRelationship = NULL, $reference = NULL, $precondition = NULL, $nullFlavor = NULL, $classCode = NULL, $moodCode = NULL, $negationInd = NULL) {
		$this->realmCode = ($realmCode===NULL) ? NULL : $this->validateRealmCode($realmCode);
		$this->typeId = ($typeId===NULL) ? NULL : $this->validateTypeId($typeId);
		$this->templateId = ($templateId===NULL) ? NULL : $this->validateTemplateId($templateId);
		$this->id = ($id===NULL) ? NULL : $this->validateId($id);
		$this->code = ($code===NULL) ? NULL : $this->validateCode($code);
		$this->text = ($text===NULL) ? NULL : $this->validateText($text);
		$this->statusCode = ($statusCode===NULL) ? NULL : $this->validateStatusCode($statusCode);
		$this->effectiveTime = ($effectiveTime===NULL) ? NULL : $this->validateEffectiveTime($effectiveTime);
		$this->priorityCode = ($priorityCode===NULL) ? NULL : $this->validatePriorityCode($priorityCode);
		$this->repeatNumber = ($repeatNumber===NULL) ? NULL : $this->validateRepeatNumber($repeatNumber);
		$this->routeCode = ($routeCode===NULL) ? NULL : $this->validateRouteCode($routeCode);
		$this->approachSiteCode = ($approachSiteCode===NULL) ? NULL : $this->validateApproachSiteCode($approachSiteCode);
		$this->doseQuantity = ($doseQuantity===NULL) ? NULL : $this->validateDoseQuantity($doseQuantity);
		$this->rateQuantity = ($rateQuantity===NULL) ? NULL : $this->validateRateQuantity($rateQuantity);
		$this->maxDoseQuantity = ($maxDoseQuantity===NULL) ? NULL : $this->validateMaxDoseQuantity($maxDoseQuantity);
		$this->administrationUnitCode = ($administrationUnitCode===NULL) ? NULL : $this->validateAdministrationUnitCode($administrationUnitCode);
		$this->subject = ($subject===NULL) ? NULL : $this->validateSubject($subject);
		$this->specimen = ($specimen===NULL) ? NULL : $this->validateSpecimen($specimen);
		$this->consumable = ($consumable===NULL) ? NULL : $this->validateConsumable($consumable);
		$this->performer = ($performer===NULL) ? NULL : $this->validatePerformer($performer);
		$this->author = ($author===NULL) ? NULL : $this->validateAuthor($author);
		$this->informant = ($informant===NULL) ? NULL : $this->validateInformant($informant);
		$this->participant = ($participant===NULL) ? NULL : $this->validateParticipant($participant);
		$this->entryRelationship = ($entryRelationship===NULL) ? NULL : $this->validateEntryRelationship($entryRelationship);
		$this->reference = ($reference===NULL) ? NULL : $this->validateReference($reference);
		$this->precondition = ($precondition===NULL) ? NULL : $this->validatePrecondition($precondition);
		$this->nullFlavor = ($nullFlavor===NULL) ? NULL : $this->validateNullFlavor($nullFlavor);
		$this->classCode = ($classCode===NULL) ? NULL : $this->validateClassCode($classCode);
		$this->moodCode = ($moodCode===NULL) ? NULL : $this->validateMoodCode($moodCode);
		$this->negationInd = ($negationInd===NULL) ? NULL : $this->validateNegationInd($negationInd);
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
		if ( ! empty($realmCode) ) {
			foreach ($realmCode as $entry) {
			}
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
		if ( ! empty($templateId) ) {
			foreach ($templateId as $entry) {
			}
		}
	
		return $templateId;
	}

	public function addTemplateId($templateId) {
		$this->templateId[] = $this->validateTemplateIdType($templateId);
	}

	protected function validateTemplateIdType($templateId) {
	
		return $templateId;
	}

	public function getId($autoCreate = TRUE) {
		if ($this->id===NULL && $autoCreate && ! isset($this->_overrides['id']) ) {
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
		$count = count($id);
		if ($count < 0) {
			throw new \Exception(sprintf('Supplied %s array has less than the required number (%d) of entries.', 'id', 0));
		}
		if ( ! empty($id) ) {
			foreach ($id as $entry) {
			}
		}
	
		return $id;
	}

	public function addId($id) {
		$this->id[] = $this->validateIdType($id);
	}

	protected function validateIdType($id) {
	
		return $id;
	}

	public function getCode($autoCreate = TRUE) {
		if ($this->code===NULL && $autoCreate && ! isset($this->_overrides['code']) ) {
			$this->code = $this->createCode();
		}
		return $this->code;
	}
	
	protected function createCode() {
		return NULL;
	}

	public function setCode($code) {
		$this->code = $this->validateCode($code);
	}

	protected function validateCode($code) {
	
		return $code;
	}

	public function getText($autoCreate = TRUE) {
		if ($this->text===NULL && $autoCreate && ! isset($this->_overrides['text']) ) {
			$this->text = $this->createText();
		}
		return $this->text;
	}
	
	protected function createText() {
		return NULL;
	}

	public function setText($text) {
		$this->text = $this->validateText($text);
	}

	protected function validateText($text) {
	
		return $text;
	}

	public function getStatusCode($autoCreate = TRUE) {
		if ($this->statusCode===NULL && $autoCreate && ! isset($this->_overrides['statusCode']) ) {
			$this->statusCode = $this->createStatusCode();
		}
		return $this->statusCode;
	}
	
	protected function createStatusCode() {
		return NULL;
	}

	public function setStatusCode($statusCode) {
		$this->statusCode = $this->validateStatusCode($statusCode);
	}

	protected function validateStatusCode($statusCode) {
	
		return $statusCode;
	}

	public function getEffectiveTime($autoCreate = TRUE) {
		if ($this->effectiveTime===NULL && $autoCreate && ! isset($this->_overrides['effectiveTime']) ) {
			$this->effectiveTime = $this->createEffectiveTime();
		}
		return $this->effectiveTime;
	}
	
	protected function createEffectiveTime() {
		return array();
	}

	public function setEffectiveTime($effectiveTime) {
		$this->effectiveTime = $this->validateEffectiveTime($effectiveTime);
	}

	protected function validateEffectiveTime($effectiveTime) {
		$count = count($effectiveTime);
		if ($count < 0) {
			throw new \Exception(sprintf('Supplied %s array has less than the required number (%d) of entries.', 'effectiveTime', 0));
		}
		if ( ! empty($effectiveTime) ) {
			foreach ($effectiveTime as $entry) {
			}
		}
	
		return $effectiveTime;
	}

	public function addEffectiveTime($effectiveTime) {
		$this->effectiveTime[] = $this->validateEffectiveTimeType($effectiveTime);
	}

	protected function validateEffectiveTimeType($effectiveTime) {
	
		return $effectiveTime;
	}

	public function getPriorityCode($autoCreate = TRUE) {
		if ($this->priorityCode===NULL && $autoCreate && ! isset($this->_overrides['priorityCode']) ) {
			$this->priorityCode = $this->createPriorityCode();
		}
		return $this->priorityCode;
	}
	
	protected function createPriorityCode() {
		return NULL;
	}

	public function setPriorityCode($priorityCode) {
		$this->priorityCode = $this->validatePriorityCode($priorityCode);
	}

	protected function validatePriorityCode($priorityCode) {
	
		return $priorityCode;
	}

	public function getRepeatNumber($autoCreate = TRUE) {
		if ($this->repeatNumber===NULL && $autoCreate && ! isset($this->_overrides['repeatNumber']) ) {
			$this->repeatNumber = $this->createRepeatNumber();
		}
		return $this->repeatNumber;
	}
	
	protected function createRepeatNumber() {
		return NULL;
	}

	public function setRepeatNumber($repeatNumber) {
		$this->repeatNumber = $this->validateRepeatNumber($repeatNumber);
	}

	protected function validateRepeatNumber($repeatNumber) {
	
		return $repeatNumber;
	}

	public function getRouteCode($autoCreate = TRUE) {
		if ($this->routeCode===NULL && $autoCreate && ! isset($this->_overrides['routeCode']) ) {
			$this->routeCode = $this->createRouteCode();
		}
		return $this->routeCode;
	}
	
	protected function createRouteCode() {
		return NULL;
	}

	public function setRouteCode($routeCode) {
		$this->routeCode = $this->validateRouteCode($routeCode);
	}

	protected function validateRouteCode($routeCode) {
	
		return $routeCode;
	}

	public function getApproachSiteCode($autoCreate = TRUE) {
		if ($this->approachSiteCode===NULL && $autoCreate && ! isset($this->_overrides['approachSiteCode']) ) {
			$this->approachSiteCode = $this->createApproachSiteCode();
		}
		return $this->approachSiteCode;
	}
	
	protected function createApproachSiteCode() {
		return array();
	}

	public function setApproachSiteCode($approachSiteCode) {
		$this->approachSiteCode = $this->validateApproachSiteCode($approachSiteCode);
	}

	protected function validateApproachSiteCode($approachSiteCode) {
		$count = count($approachSiteCode);
		if ($count < 0) {
			throw new \Exception(sprintf('Supplied %s array has less than the required number (%d) of entries.', 'approachSiteCode', 0));
		}
		if ( ! empty($approachSiteCode) ) {
			foreach ($approachSiteCode as $entry) {
			}
		}
	
		return $approachSiteCode;
	}

	public function addApproachSiteCode($approachSiteCode) {
		$this->approachSiteCode[] = $this->validateApproachSiteCodeType($approachSiteCode);
	}

	protected function validateApproachSiteCodeType($approachSiteCode) {
	
		return $approachSiteCode;
	}

	public function getDoseQuantity($autoCreate = TRUE) {
		if ($this->doseQuantity===NULL && $autoCreate && ! isset($this->_overrides['doseQuantity']) ) {
			$this->doseQuantity = $this->createDoseQuantity();
		}
		return $this->doseQuantity;
	}
	
	protected function createDoseQuantity() {
		return NULL;
	}

	public function setDoseQuantity($doseQuantity) {
		$this->doseQuantity = $this->validateDoseQuantity($doseQuantity);
	}

	protected function validateDoseQuantity($doseQuantity) {
	
		return $doseQuantity;
	}

	public function getRateQuantity($autoCreate = TRUE) {
		if ($this->rateQuantity===NULL && $autoCreate && ! isset($this->_overrides['rateQuantity']) ) {
			$this->rateQuantity = $this->createRateQuantity();
		}
		return $this->rateQuantity;
	}
	
	protected function createRateQuantity() {
		return NULL;
	}

	public function setRateQuantity($rateQuantity) {
		$this->rateQuantity = $this->validateRateQuantity($rateQuantity);
	}

	protected function validateRateQuantity($rateQuantity) {
	
		return $rateQuantity;
	}

	public function getMaxDoseQuantity($autoCreate = TRUE) {
		if ($this->maxDoseQuantity===NULL && $autoCreate && ! isset($this->_overrides['maxDoseQuantity']) ) {
			$this->maxDoseQuantity = $this->createMaxDoseQuantity();
		}
		return $this->maxDoseQuantity;
	}
	
	protected function createMaxDoseQuantity() {
		return NULL;
	}

	public function setMaxDoseQuantity($maxDoseQuantity) {
		$this->maxDoseQuantity = $this->validateMaxDoseQuantity($maxDoseQuantity);
	}

	protected function validateMaxDoseQuantity($maxDoseQuantity) {
	
		return $maxDoseQuantity;
	}

	public function getAdministrationUnitCode($autoCreate = TRUE) {
		if ($this->administrationUnitCode===NULL && $autoCreate && ! isset($this->_overrides['administrationUnitCode']) ) {
			$this->administrationUnitCode = $this->createAdministrationUnitCode();
		}
		return $this->administrationUnitCode;
	}
	
	protected function createAdministrationUnitCode() {
		return NULL;
	}

	public function setAdministrationUnitCode($administrationUnitCode) {
		$this->administrationUnitCode = $this->validateAdministrationUnitCode($administrationUnitCode);
	}

	protected function validateAdministrationUnitCode($administrationUnitCode) {
	
		return $administrationUnitCode;
	}

	public function getSubject($autoCreate = TRUE) {
		if ($this->subject===NULL && $autoCreate && ! isset($this->_overrides['subject']) ) {
			$this->subject = $this->createSubject();
		}
		return $this->subject;
	}
	
	protected function createSubject() {
		return NULL;
	}

	public function setSubject($subject) {
		$this->subject = $this->validateSubject($subject);
	}

	protected function validateSubject($subject) {
	
		return $subject;
	}

	public function getSpecimen($autoCreate = TRUE) {
		if ($this->specimen===NULL && $autoCreate && ! isset($this->_overrides['specimen']) ) {
			$this->specimen = $this->createSpecimen();
		}
		return $this->specimen;
	}
	
	protected function createSpecimen() {
		return array();
	}

	public function setSpecimen($specimen) {
		$this->specimen = $this->validateSpecimen($specimen);
	}

	protected function validateSpecimen($specimen) {
		$count = count($specimen);
		if ($count < 0) {
			throw new \Exception(sprintf('Supplied %s array has less than the required number (%d) of entries.', 'specimen', 0));
		}
		if ( ! empty($specimen) ) {
			foreach ($specimen as $entry) {
			}
		}
	
		return $specimen;
	}

	public function addSpecimen($specimen) {
		$this->specimen[] = $this->validateSpecimenType($specimen);
	}

	protected function validateSpecimenType($specimen) {
	
		return $specimen;
	}

	public function getConsumable($autoCreate = TRUE) {
		if ($this->consumable===NULL && $autoCreate && ! isset($this->_overrides['consumable']) ) {
			$this->consumable = $this->createConsumable();
		}
		return $this->consumable;
	}
	
	protected function createConsumable() {
		return NULL;
	}

	public function setConsumable($consumable) {
		$this->consumable = $this->validateConsumable($consumable);
	}

	protected function validateConsumable($consumable) {
	
		return $consumable;
	}

	public function getPerformer($autoCreate = TRUE) {
		if ($this->performer===NULL && $autoCreate && ! isset($this->_overrides['performer']) ) {
			$this->performer = $this->createPerformer();
		}
		return $this->performer;
	}
	
	protected function createPerformer() {
		return array();
	}

	public function setPerformer($performer) {
		$this->performer = $this->validatePerformer($performer);
	}

	protected function validatePerformer($performer) {
		$count = count($performer);
		if ($count < 0) {
			throw new \Exception(sprintf('Supplied %s array has less than the required number (%d) of entries.', 'performer', 0));
		}
		if ( ! empty($performer) ) {
			foreach ($performer as $entry) {
			}
		}
	
		return $performer;
	}

	public function addPerformer($performer) {
		$this->performer[] = $this->validatePerformerType($performer);
	}

	protected function validatePerformerType($performer) {
	
		return $performer;
	}

	public function getAuthor($autoCreate = TRUE) {
		if ($this->author===NULL && $autoCreate && ! isset($this->_overrides['author']) ) {
			$this->author = $this->createAuthor();
		}
		return $this->author;
	}
	
	protected function createAuthor() {
		return array();
	}

	public function setAuthor($author) {
		$this->author = $this->validateAuthor($author);
	}

	protected function validateAuthor($author) {
		$count = count($author);
		if ($count < 0) {
			throw new \Exception(sprintf('Supplied %s array has less than the required number (%d) of entries.', 'author', 0));
		}
		if ( ! empty($author) ) {
			foreach ($author as $entry) {
			}
		}
	
		return $author;
	}

	public function addAuthor($author) {
		$this->author[] = $this->validateAuthorType($author);
	}

	protected function validateAuthorType($author) {
	
		return $author;
	}

	public function getInformant($autoCreate = TRUE) {
		if ($this->informant===NULL && $autoCreate && ! isset($this->_overrides['informant']) ) {
			$this->informant = $this->createInformant();
		}
		return $this->informant;
	}
	
	protected function createInformant() {
		return array();
	}

	public function setInformant($informant) {
		$this->informant = $this->validateInformant($informant);
	}

	protected function validateInformant($informant) {
		$count = count($informant);
		if ($count < 0) {
			throw new \Exception(sprintf('Supplied %s array has less than the required number (%d) of entries.', 'informant', 0));
		}
		if ( ! empty($informant) ) {
			foreach ($informant as $entry) {
			}
		}
	
		return $informant;
	}

	public function addInformant($informant) {
		$this->informant[] = $this->validateInformantType($informant);
	}

	protected function validateInformantType($informant) {
	
		return $informant;
	}

	public function getParticipant($autoCreate = TRUE) {
		if ($this->participant===NULL && $autoCreate && ! isset($this->_overrides['participant']) ) {
			$this->participant = $this->createParticipant();
		}
		return $this->participant;
	}
	
	protected function createParticipant() {
		return array();
	}

	public function setParticipant($participant) {
		$this->participant = $this->validateParticipant($participant);
	}

	protected function validateParticipant($participant) {
		$count = count($participant);
		if ($count < 0) {
			throw new \Exception(sprintf('Supplied %s array has less than the required number (%d) of entries.', 'participant', 0));
		}
		if ( ! empty($participant) ) {
			foreach ($participant as $entry) {
			}
		}
	
		return $participant;
	}

	public function addParticipant($participant) {
		$this->participant[] = $this->validateParticipantType($participant);
	}

	protected function validateParticipantType($participant) {
	
		return $participant;
	}

	public function getEntryRelationship($autoCreate = TRUE) {
		if ($this->entryRelationship===NULL && $autoCreate && ! isset($this->_overrides['entryRelationship']) ) {
			$this->entryRelationship = $this->createEntryRelationship();
		}
		return $this->entryRelationship;
	}
	
	protected function createEntryRelationship() {
		return array();
	}

	public function setEntryRelationship($entryRelationship) {
		$this->entryRelationship = $this->validateEntryRelationship($entryRelationship);
	}

	protected function validateEntryRelationship($entryRelationship) {
		$count = count($entryRelationship);
		if ($count < 0) {
			throw new \Exception(sprintf('Supplied %s array has less than the required number (%d) of entries.', 'entryRelationship', 0));
		}
		if ( ! empty($entryRelationship) ) {
			foreach ($entryRelationship as $entry) {
			}
		}
	
		return $entryRelationship;
	}

	public function addEntryRelationship($entryRelationship) {
		$this->entryRelationship[] = $this->validateEntryRelationshipType($entryRelationship);
	}

	protected function validateEntryRelationshipType($entryRelationship) {
	
		return $entryRelationship;
	}

	public function getReference($autoCreate = TRUE) {
		if ($this->reference===NULL && $autoCreate && ! isset($this->_overrides['reference']) ) {
			$this->reference = $this->createReference();
		}
		return $this->reference;
	}
	
	protected function createReference() {
		return array();
	}

	public function setReference($reference) {
		$this->reference = $this->validateReference($reference);
	}

	protected function validateReference($reference) {
		$count = count($reference);
		if ($count < 0) {
			throw new \Exception(sprintf('Supplied %s array has less than the required number (%d) of entries.', 'reference', 0));
		}
		if ( ! empty($reference) ) {
			foreach ($reference as $entry) {
			}
		}
	
		return $reference;
	}

	public function addReference($reference) {
		$this->reference[] = $this->validateReferenceType($reference);
	}

	protected function validateReferenceType($reference) {
	
		return $reference;
	}

	public function getPrecondition($autoCreate = TRUE) {
		if ($this->precondition===NULL && $autoCreate && ! isset($this->_overrides['precondition']) ) {
			$this->precondition = $this->createPrecondition();
		}
		return $this->precondition;
	}
	
	protected function createPrecondition() {
		return array();
	}

	public function setPrecondition($precondition) {
		$this->precondition = $this->validatePrecondition($precondition);
	}

	protected function validatePrecondition($precondition) {
		$count = count($precondition);
		if ($count < 0) {
			throw new \Exception(sprintf('Supplied %s array has less than the required number (%d) of entries.', 'precondition', 0));
		}
		if ( ! empty($precondition) ) {
			foreach ($precondition as $entry) {
			}
		}
	
		return $precondition;
	}

	public function addPrecondition($precondition) {
		$this->precondition[] = $this->validatePreconditionType($precondition);
	}

	protected function validatePreconditionType($precondition) {
	
		return $precondition;
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

	public function getClassCode($autoCreate = TRUE) {
		if ($this->classCode===NULL && $autoCreate && ! isset($this->_overrides['classCode']) ) {
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

	public function getMoodCode($autoCreate = TRUE) {
		if ($this->moodCode===NULL && $autoCreate && ! isset($this->_overrides['moodCode']) ) {
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

	public function getNegationInd($autoCreate = TRUE) {
		if ($this->negationInd===NULL && $autoCreate && ! isset($this->_overrides['negationInd']) ) {
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
} // end class POCDMT000040.SubstanceAdministration
