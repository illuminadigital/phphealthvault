<?php
namespace hl7_org\v3;



/**
 * @XmlNamespaces ({
 *	@XmlNamespace(url="urn:hl7-org:v3", prefix="")
 * })
 * @XmlEntity	(xml="POCD_MT000040.Procedure")
 */
class POCDMT000040.Procedure {
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
	 * @XmlElement	(type="\hl7_org\v3\CD", name="code")
	 */
	protected $code;

	/**
	 * @XmlElement	(type="\hl7_org\v3\ED", name="text")
	 */
	protected $text;

	/**
	 * @XmlElement	(type="\hl7_org\v3\CS", name="statusCode")
	 */
	protected $statusCode;

	/**
	 * @XmlElement	(type="\hl7_org\v3\IVLTS", name="effectiveTime")
	 */
	protected $effectiveTime;

	/**
	 * @XmlElement	(type="\hl7_org\v3\CE", name="priorityCode")
	 */
	protected $priorityCode;

	/**
	 * @XmlElement	(type="\hl7_org\v3\CS", name="languageCode")
	 */
	protected $languageCode;

	/**
	 * @XmlElement	(type="\hl7_org\v3\CE", collection="true", name="methodCode")
	 */
	protected $methodCode;

	/**
	 * @XmlElement	(type="\hl7_org\v3\CD", collection="true", name="approachSiteCode")
	 */
	protected $approachSiteCode;

	/**
	 * @XmlElement	(type="\hl7_org\v3\CD", collection="true", name="targetSiteCode")
	 */
	protected $targetSiteCode;

	/**
	 * @XmlElement	(type="\hl7_org\v3\POCDMT000040.Subject", name="subject")
	 */
	protected $subject;

	/**
	 * @XmlElement	(type="\hl7_org\v3\POCDMT000040.Specimen", collection="true", name="specimen")
	 */
	protected $specimen;

	/**
	 * @XmlElement	(type="\hl7_org\v3\POCDMT000040.Performer2", collection="true", name="performer")
	 */
	protected $performer;

	/**
	 * @XmlElement	(type="\hl7_org\v3\POCDMT000040.Author", collection="true", name="author")
	 */
	protected $author;

	/**
	 * @XmlElement	(type="\hl7_org\v3\POCDMT000040.Informant12", collection="true", name="informant")
	 */
	protected $informant;

	/**
	 * @XmlElement	(type="\hl7_org\v3\POCDMT000040.Participant2", collection="true", name="participant")
	 */
	protected $participant;

	/**
	 * @XmlElement	(type="\hl7_org\v3\POCDMT000040.EntryRelationship", collection="true", name="entryRelationship")
	 */
	protected $entryRelationship;

	/**
	 * @XmlElement	(type="\hl7_org\v3\POCDMT000040.Reference", collection="true", name="reference")
	 */
	protected $reference;

	/**
	 * @XmlElement	(type="\hl7_org\v3\POCDMT000040.Precondition", collection="true", name="precondition")
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

	public function __construct($realmCode = NULL, $typeId = NULL, $templateId = NULL, $id = NULL, $code = NULL, $text = NULL, $statusCode = NULL, $effectiveTime = NULL, $priorityCode = NULL, $languageCode = NULL, $methodCode = NULL, $approachSiteCode = NULL, $targetSiteCode = NULL, $subject = NULL, $specimen = NULL, $performer = NULL, $author = NULL, $informant = NULL, $participant = NULL, $entryRelationship = NULL, $reference = NULL, $precondition = NULL, $nullFlavor = NULL, $classCode = NULL, $moodCode = NULL, $negationInd = NULL) {
		$this->realmCode = ($realmCode===NULL) ? NULL : $this->validateRealmCode($realmCode);
		$this->typeId = ($typeId===NULL) ? NULL : $this->validateTypeId($typeId);
		$this->templateId = ($templateId===NULL) ? NULL : $this->validateTemplateId($templateId);
		$this->id = ($id===NULL) ? NULL : $this->validateId($id);
		$this->code = ($code===NULL) ? NULL : $this->validateCode($code);
		$this->text = ($text===NULL) ? NULL : $this->validateText($text);
		$this->statusCode = ($statusCode===NULL) ? NULL : $this->validateStatusCode($statusCode);
		$this->effectiveTime = ($effectiveTime===NULL) ? NULL : $this->validateEffectiveTime($effectiveTime);
		$this->priorityCode = ($priorityCode===NULL) ? NULL : $this->validatePriorityCode($priorityCode);
		$this->languageCode = ($languageCode===NULL) ? NULL : $this->validateLanguageCode($languageCode);
		$this->methodCode = ($methodCode===NULL) ? NULL : $this->validateMethodCode($methodCode);
		$this->approachSiteCode = ($approachSiteCode===NULL) ? NULL : $this->validateApproachSiteCode($approachSiteCode);
		$this->targetSiteCode = ($targetSiteCode===NULL) ? NULL : $this->validateTargetSiteCode($targetSiteCode);
		$this->subject = ($subject===NULL) ? NULL : $this->validateSubject($subject);
		$this->specimen = ($specimen===NULL) ? NULL : $this->validateSpecimen($specimen);
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
		if ( ! is_array ($id) && ! is_null($id) ) {
			$id = array($id);
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
		return new \hl7_org\v3\CD();
	}

	public function setCode($code) {
		$this->code = $this->validateCode($code);
	}

	protected function validateCode($code) {
		if ( ! $code instanceof \hl7_org\v3\CD  && ! is_null($code) ) {
			$code = new \hl7_org\v3\CD ($code);
		}
	
		return $code;
	}

	public function getText() {
		if ($this->text===NULL) {
			$this->text = $this->createText();
		}
		return $this->text;
	}
	
	protected function createText() {
		return new \hl7_org\v3\ED();
	}

	public function setText($text) {
		$this->text = $this->validateText($text);
	}

	protected function validateText($text) {
		if ( ! $text instanceof \hl7_org\v3\ED  && ! is_null($text) ) {
			$text = new \hl7_org\v3\ED ($text);
		}
	
		return $text;
	}

	public function getStatusCode() {
		if ($this->statusCode===NULL) {
			$this->statusCode = $this->createStatusCode();
		}
		return $this->statusCode;
	}
	
	protected function createStatusCode() {
		return new \hl7_org\v3\CS();
	}

	public function setStatusCode($statusCode) {
		$this->statusCode = $this->validateStatusCode($statusCode);
	}

	protected function validateStatusCode($statusCode) {
		if ( ! $statusCode instanceof \hl7_org\v3\CS  && ! is_null($statusCode) ) {
			$statusCode = new \hl7_org\v3\CS ($statusCode);
		}
	
		return $statusCode;
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
		if ( ! $effectiveTime instanceof \hl7_org\v3\IVLTS  && ! is_null($effectiveTime) ) {
			$effectiveTime = new \hl7_org\v3\IVLTS ($effectiveTime);
		}
	
		return $effectiveTime;
	}

	public function getPriorityCode() {
		if ($this->priorityCode===NULL) {
			$this->priorityCode = $this->createPriorityCode();
		}
		return $this->priorityCode;
	}
	
	protected function createPriorityCode() {
		return new \hl7_org\v3\CE();
	}

	public function setPriorityCode($priorityCode) {
		$this->priorityCode = $this->validatePriorityCode($priorityCode);
	}

	protected function validatePriorityCode($priorityCode) {
		if ( ! $priorityCode instanceof \hl7_org\v3\CE  && ! is_null($priorityCode) ) {
			$priorityCode = new \hl7_org\v3\CE ($priorityCode);
		}
	
		return $priorityCode;
	}

	public function getLanguageCode() {
		if ($this->languageCode===NULL) {
			$this->languageCode = $this->createLanguageCode();
		}
		return $this->languageCode;
	}
	
	protected function createLanguageCode() {
		return new \hl7_org\v3\CS();
	}

	public function setLanguageCode($languageCode) {
		$this->languageCode = $this->validateLanguageCode($languageCode);
	}

	protected function validateLanguageCode($languageCode) {
		if ( ! $languageCode instanceof \hl7_org\v3\CS  && ! is_null($languageCode) ) {
			$languageCode = new \hl7_org\v3\CS ($languageCode);
		}
	
		return $languageCode;
	}

	public function getMethodCode() {
		if ($this->methodCode===NULL) {
			$this->methodCode = $this->createMethodCode();
		}
		return $this->methodCode;
	}
	
	protected function createMethodCode() {
		return array();
	}

	public function setMethodCode($methodCode) {
		$this->methodCode = $this->validateMethodCode($methodCode);
	}

	protected function validateMethodCode($methodCode) {
		if ( ! is_array ($methodCode) && ! is_null($methodCode) ) {
			$methodCode = array($methodCode);
		}
		$count = count($methodCode);
		if ($count < 0) {
			throw new \Exception(sprintf('Supplied %s array has less than the required number (%d) of entries.', 'methodCode', 0));
		}
		foreach ($methodCode as $entry) {
			if (!($entry instanceof CE)) {
				throw new \Exception(sprintf('Supplied %s value was not %s', 'methodCode', 'CE'));
			}
		}
	
		return $methodCode;
	}

	public function addMethodCode($methodCode) {
		$this->methodCode[] = $methodCode;
	}

	public function getApproachSiteCode() {
		if ($this->approachSiteCode===NULL) {
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
		if ( ! is_array ($approachSiteCode) && ! is_null($approachSiteCode) ) {
			$approachSiteCode = array($approachSiteCode);
		}
		$count = count($approachSiteCode);
		if ($count < 0) {
			throw new \Exception(sprintf('Supplied %s array has less than the required number (%d) of entries.', 'approachSiteCode', 0));
		}
		foreach ($approachSiteCode as $entry) {
			if (!($entry instanceof CD)) {
				throw new \Exception(sprintf('Supplied %s value was not %s', 'approachSiteCode', 'CD'));
			}
		}
	
		return $approachSiteCode;
	}

	public function addApproachSiteCode($approachSiteCode) {
		$this->approachSiteCode[] = $approachSiteCode;
	}

	public function getTargetSiteCode() {
		if ($this->targetSiteCode===NULL) {
			$this->targetSiteCode = $this->createTargetSiteCode();
		}
		return $this->targetSiteCode;
	}
	
	protected function createTargetSiteCode() {
		return array();
	}

	public function setTargetSiteCode($targetSiteCode) {
		$this->targetSiteCode = $this->validateTargetSiteCode($targetSiteCode);
	}

	protected function validateTargetSiteCode($targetSiteCode) {
		if ( ! is_array ($targetSiteCode) && ! is_null($targetSiteCode) ) {
			$targetSiteCode = array($targetSiteCode);
		}
		$count = count($targetSiteCode);
		if ($count < 0) {
			throw new \Exception(sprintf('Supplied %s array has less than the required number (%d) of entries.', 'targetSiteCode', 0));
		}
		foreach ($targetSiteCode as $entry) {
			if (!($entry instanceof CD)) {
				throw new \Exception(sprintf('Supplied %s value was not %s', 'targetSiteCode', 'CD'));
			}
		}
	
		return $targetSiteCode;
	}

	public function addTargetSiteCode($targetSiteCode) {
		$this->targetSiteCode[] = $targetSiteCode;
	}

	public function getSubject() {
		if ($this->subject===NULL) {
			$this->subject = $this->createSubject();
		}
		return $this->subject;
	}
	
	protected function createSubject() {
		return new \hl7_org\v3\POCDMT000040.Subject();
	}

	public function setSubject($subject) {
		$this->subject = $this->validateSubject($subject);
	}

	protected function validateSubject($subject) {
		if ( ! $subject instanceof \hl7_org\v3\POCDMT000040.Subject  && ! is_null($subject) ) {
			$subject = new \hl7_org\v3\POCDMT000040.Subject ($subject);
		}
	
		return $subject;
	}

	public function getSpecimen() {
		if ($this->specimen===NULL) {
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
		if ( ! is_array ($specimen) && ! is_null($specimen) ) {
			$specimen = array($specimen);
		}
		$count = count($specimen);
		if ($count < 0) {
			throw new \Exception(sprintf('Supplied %s array has less than the required number (%d) of entries.', 'specimen', 0));
		}
		foreach ($specimen as $entry) {
			if (!($entry instanceof POCDMT000040.Specimen)) {
				throw new \Exception(sprintf('Supplied %s value was not %s', 'specimen', 'POCD_MT000040.Specimen'));
			}
		}
	
		return $specimen;
	}

	public function addSpecimen($specimen) {
		$this->specimen[] = $specimen;
	}

	public function getPerformer() {
		if ($this->performer===NULL) {
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
		if ( ! is_array ($performer) && ! is_null($performer) ) {
			$performer = array($performer);
		}
		$count = count($performer);
		if ($count < 0) {
			throw new \Exception(sprintf('Supplied %s array has less than the required number (%d) of entries.', 'performer', 0));
		}
		foreach ($performer as $entry) {
			if (!($entry instanceof POCDMT000040.Performer2)) {
				throw new \Exception(sprintf('Supplied %s value was not %s', 'performer', 'POCD_MT000040.Performer2'));
			}
		}
	
		return $performer;
	}

	public function addPerformer($performer) {
		$this->performer[] = $performer;
	}

	public function getAuthor() {
		if ($this->author===NULL) {
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
		if ( ! is_array ($author) && ! is_null($author) ) {
			$author = array($author);
		}
		$count = count($author);
		if ($count < 0) {
			throw new \Exception(sprintf('Supplied %s array has less than the required number (%d) of entries.', 'author', 0));
		}
		foreach ($author as $entry) {
			if (!($entry instanceof POCDMT000040.Author)) {
				throw new \Exception(sprintf('Supplied %s value was not %s', 'author', 'POCD_MT000040.Author'));
			}
		}
	
		return $author;
	}

	public function addAuthor($author) {
		$this->author[] = $author;
	}

	public function getInformant() {
		if ($this->informant===NULL) {
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
		if ( ! is_array ($informant) && ! is_null($informant) ) {
			$informant = array($informant);
		}
		$count = count($informant);
		if ($count < 0) {
			throw new \Exception(sprintf('Supplied %s array has less than the required number (%d) of entries.', 'informant', 0));
		}
		foreach ($informant as $entry) {
			if (!($entry instanceof POCDMT000040.Informant12)) {
				throw new \Exception(sprintf('Supplied %s value was not %s', 'informant', 'POCD_MT000040.Informant12'));
			}
		}
	
		return $informant;
	}

	public function addInformant($informant) {
		$this->informant[] = $informant;
	}

	public function getParticipant() {
		if ($this->participant===NULL) {
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
		if ( ! is_array ($participant) && ! is_null($participant) ) {
			$participant = array($participant);
		}
		$count = count($participant);
		if ($count < 0) {
			throw new \Exception(sprintf('Supplied %s array has less than the required number (%d) of entries.', 'participant', 0));
		}
		foreach ($participant as $entry) {
			if (!($entry instanceof POCDMT000040.Participant2)) {
				throw new \Exception(sprintf('Supplied %s value was not %s', 'participant', 'POCD_MT000040.Participant2'));
			}
		}
	
		return $participant;
	}

	public function addParticipant($participant) {
		$this->participant[] = $participant;
	}

	public function getEntryRelationship() {
		if ($this->entryRelationship===NULL) {
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
		if ( ! is_array ($entryRelationship) && ! is_null($entryRelationship) ) {
			$entryRelationship = array($entryRelationship);
		}
		$count = count($entryRelationship);
		if ($count < 0) {
			throw new \Exception(sprintf('Supplied %s array has less than the required number (%d) of entries.', 'entryRelationship', 0));
		}
		foreach ($entryRelationship as $entry) {
			if (!($entry instanceof POCDMT000040.EntryRelationship)) {
				throw new \Exception(sprintf('Supplied %s value was not %s', 'entryRelationship', 'POCD_MT000040.EntryRelationship'));
			}
		}
	
		return $entryRelationship;
	}

	public function addEntryRelationship($entryRelationship) {
		$this->entryRelationship[] = $entryRelationship;
	}

	public function getReference() {
		if ($this->reference===NULL) {
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
		if ( ! is_array ($reference) && ! is_null($reference) ) {
			$reference = array($reference);
		}
		$count = count($reference);
		if ($count < 0) {
			throw new \Exception(sprintf('Supplied %s array has less than the required number (%d) of entries.', 'reference', 0));
		}
		foreach ($reference as $entry) {
			if (!($entry instanceof POCDMT000040.Reference)) {
				throw new \Exception(sprintf('Supplied %s value was not %s', 'reference', 'POCD_MT000040.Reference'));
			}
		}
	
		return $reference;
	}

	public function addReference($reference) {
		$this->reference[] = $reference;
	}

	public function getPrecondition() {
		if ($this->precondition===NULL) {
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
		if ( ! is_array ($precondition) && ! is_null($precondition) ) {
			$precondition = array($precondition);
		}
		$count = count($precondition);
		if ($count < 0) {
			throw new \Exception(sprintf('Supplied %s array has less than the required number (%d) of entries.', 'precondition', 0));
		}
		foreach ($precondition as $entry) {
			if (!($entry instanceof POCDMT000040.Precondition)) {
				throw new \Exception(sprintf('Supplied %s value was not %s', 'precondition', 'POCD_MT000040.Precondition'));
			}
		}
	
		return $precondition;
	}

	public function addPrecondition($precondition) {
		$this->precondition[] = $precondition;
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
} // end class POCDMT000040.Procedure
