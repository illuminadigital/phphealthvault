<?php
namespace hl7_org\v3;



/**
 * @XmlNamespaces ({
 *	@XmlNamespace(url="urn:hl7-org:v3", prefix="")
 * })
 * @XmlEntity	(xml="POCD_MT000040.Observation")
 */
class POCDMT000040.Observation {
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
	 * @XmlElement	(type="\org\w3\www\_2001\XMLSchema\II", collection="true", name="id")
	 */
	protected $id;

	/**
	 * @XmlElement	(type="\org\w3\www\_2001\XMLSchema\CD", name="code")
	 */
	protected $code;

	/**
	 * @XmlElement	(type="\org\w3\www\_2001\XMLSchema\ST", name="derivationExpr")
	 */
	protected $derivationExpr;

	/**
	 * @XmlElement	(type="\org\w3\www\_2001\XMLSchema\ED", name="text")
	 */
	protected $text;

	/**
	 * @XmlElement	(type="\org\w3\www\_2001\XMLSchema\CS", name="statusCode")
	 */
	protected $statusCode;

	/**
	 * @XmlElement	(type="\org\w3\www\_2001\XMLSchema\IVLTS", name="effectiveTime")
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
	 * @XmlElement	(type="\org\w3\www\_2001\XMLSchema\CS", name="languageCode")
	 */
	protected $languageCode;

	/**
	 * @XmlElement	(type="\org\w3\www\_2001\XMLSchema\ANY", collection="true", name="value")
	 */
	protected $value;

	/**
	 * @XmlElement	(type="\org\w3\www\_2001\XMLSchema\CE", collection="true", name="interpretationCode")
	 */
	protected $interpretationCode;

	/**
	 * @XmlElement	(type="\org\w3\www\_2001\XMLSchema\CE", collection="true", name="methodCode")
	 */
	protected $methodCode;

	/**
	 * @XmlElement	(type="\org\w3\www\_2001\XMLSchema\CD", collection="true", name="targetSiteCode")
	 */
	protected $targetSiteCode;

	/**
	 * @XmlElement	(type="\org\w3\www\_2001\XMLSchema\POCDMT000040.Subject", name="subject")
	 */
	protected $subject;

	/**
	 * @XmlElement	(type="\org\w3\www\_2001\XMLSchema\POCDMT000040.Specimen", collection="true", name="specimen")
	 */
	protected $specimen;

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
	 * @XmlElement	(type="\org\w3\www\_2001\XMLSchema\POCDMT000040.ReferenceRange", collection="true", name="referenceRange")
	 */
	protected $referenceRange;

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

	public function __construct($realmCode = NULL, $typeId = NULL, $templateId = NULL, $id = NULL, $code = NULL, $derivationExpr = NULL, $text = NULL, $statusCode = NULL, $effectiveTime = NULL, $priorityCode = NULL, $repeatNumber = NULL, $languageCode = NULL, $value = NULL, $interpretationCode = NULL, $methodCode = NULL, $targetSiteCode = NULL, $subject = NULL, $specimen = NULL, $performer = NULL, $author = NULL, $informant = NULL, $participant = NULL, $entryRelationship = NULL, $reference = NULL, $precondition = NULL, $referenceRange = NULL, $nullFlavor = NULL, $classCode = NULL, $moodCode = NULL, $negationInd = NULL) {
		$this->realmCode = ($realmCode===NULL) ? NULL : $this->validateRealmCode($realmCode);
		$this->typeId = ($typeId===NULL) ? NULL : $this->validateTypeId($typeId);
		$this->templateId = ($templateId===NULL) ? NULL : $this->validateTemplateId($templateId);
		$this->id = ($id===NULL) ? NULL : $this->validateId($id);
		$this->code = ($code===NULL) ? NULL : $this->validateCode($code);
		$this->derivationExpr = ($derivationExpr===NULL) ? NULL : $this->validateDerivationExpr($derivationExpr);
		$this->text = ($text===NULL) ? NULL : $this->validateText($text);
		$this->statusCode = ($statusCode===NULL) ? NULL : $this->validateStatusCode($statusCode);
		$this->effectiveTime = ($effectiveTime===NULL) ? NULL : $this->validateEffectiveTime($effectiveTime);
		$this->priorityCode = ($priorityCode===NULL) ? NULL : $this->validatePriorityCode($priorityCode);
		$this->repeatNumber = ($repeatNumber===NULL) ? NULL : $this->validateRepeatNumber($repeatNumber);
		$this->languageCode = ($languageCode===NULL) ? NULL : $this->validateLanguageCode($languageCode);
		$this->value = ($value===NULL) ? NULL : $this->validateValue($value);
		$this->interpretationCode = ($interpretationCode===NULL) ? NULL : $this->validateInterpretationCode($interpretationCode);
		$this->methodCode = ($methodCode===NULL) ? NULL : $this->validateMethodCode($methodCode);
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
		$this->referenceRange = ($referenceRange===NULL) ? NULL : $this->validateReferenceRange($referenceRange);
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
		$count = count($id);
		if ($count < 0) {
			throw new \Exception(sprintf('Supplied %s array has less than the required number (%d) of entries.', 'id', 0));
		}
		foreach ($id as $entry) {
		}
	
		return $id;
	}

	public function addId($id) {
		$this->id[] = $this->validateIdType($id);
	}

	protected function validateIdType($id) {
	
		return $id;
	}

	public function getCode() {
		if ($this->code===NULL) {
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

	public function getDerivationExpr() {
		if ($this->derivationExpr===NULL) {
			$this->derivationExpr = $this->createDerivationExpr();
		}
		return $this->derivationExpr;
	}
	
	protected function createDerivationExpr() {
		return NULL;
	}

	public function setDerivationExpr($derivationExpr) {
		$this->derivationExpr = $this->validateDerivationExpr($derivationExpr);
	}

	protected function validateDerivationExpr($derivationExpr) {
	
		return $derivationExpr;
	}

	public function getText() {
		if ($this->text===NULL) {
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

	public function getStatusCode() {
		if ($this->statusCode===NULL) {
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

	public function getEffectiveTime() {
		if ($this->effectiveTime===NULL) {
			$this->effectiveTime = $this->createEffectiveTime();
		}
		return $this->effectiveTime;
	}
	
	protected function createEffectiveTime() {
		return NULL;
	}

	public function setEffectiveTime($effectiveTime) {
		$this->effectiveTime = $this->validateEffectiveTime($effectiveTime);
	}

	protected function validateEffectiveTime($effectiveTime) {
	
		return $effectiveTime;
	}

	public function getPriorityCode() {
		if ($this->priorityCode===NULL) {
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

	public function getRepeatNumber() {
		if ($this->repeatNumber===NULL) {
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

	public function getLanguageCode() {
		if ($this->languageCode===NULL) {
			$this->languageCode = $this->createLanguageCode();
		}
		return $this->languageCode;
	}
	
	protected function createLanguageCode() {
		return NULL;
	}

	public function setLanguageCode($languageCode) {
		$this->languageCode = $this->validateLanguageCode($languageCode);
	}

	protected function validateLanguageCode($languageCode) {
	
		return $languageCode;
	}

	public function getValue() {
		if ($this->value===NULL) {
			$this->value = $this->createValue();
		}
		return $this->value;
	}
	
	protected function createValue() {
		return array();
	}

	public function setValue($value) {
		$this->value = $this->validateValue($value);
	}

	protected function validateValue($value) {
		$count = count($value);
		if ($count < 0) {
			throw new \Exception(sprintf('Supplied %s array has less than the required number (%d) of entries.', 'value', 0));
		}
		foreach ($value as $entry) {
		}
	
		return $value;
	}

	public function addValue($value) {
		$this->value[] = $this->validateValueType($value);
	}

	protected function validateValueType($value) {
	
		return $value;
	}

	public function getInterpretationCode() {
		if ($this->interpretationCode===NULL) {
			$this->interpretationCode = $this->createInterpretationCode();
		}
		return $this->interpretationCode;
	}
	
	protected function createInterpretationCode() {
		return array();
	}

	public function setInterpretationCode($interpretationCode) {
		$this->interpretationCode = $this->validateInterpretationCode($interpretationCode);
	}

	protected function validateInterpretationCode($interpretationCode) {
		$count = count($interpretationCode);
		if ($count < 0) {
			throw new \Exception(sprintf('Supplied %s array has less than the required number (%d) of entries.', 'interpretationCode', 0));
		}
		foreach ($interpretationCode as $entry) {
		}
	
		return $interpretationCode;
	}

	public function addInterpretationCode($interpretationCode) {
		$this->interpretationCode[] = $this->validateInterpretationCodeType($interpretationCode);
	}

	protected function validateInterpretationCodeType($interpretationCode) {
	
		return $interpretationCode;
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
		$count = count($methodCode);
		if ($count < 0) {
			throw new \Exception(sprintf('Supplied %s array has less than the required number (%d) of entries.', 'methodCode', 0));
		}
		foreach ($methodCode as $entry) {
		}
	
		return $methodCode;
	}

	public function addMethodCode($methodCode) {
		$this->methodCode[] = $this->validateMethodCodeType($methodCode);
	}

	protected function validateMethodCodeType($methodCode) {
	
		return $methodCode;
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
		$count = count($targetSiteCode);
		if ($count < 0) {
			throw new \Exception(sprintf('Supplied %s array has less than the required number (%d) of entries.', 'targetSiteCode', 0));
		}
		foreach ($targetSiteCode as $entry) {
		}
	
		return $targetSiteCode;
	}

	public function addTargetSiteCode($targetSiteCode) {
		$this->targetSiteCode[] = $this->validateTargetSiteCodeType($targetSiteCode);
	}

	protected function validateTargetSiteCodeType($targetSiteCode) {
	
		return $targetSiteCode;
	}

	public function getSubject() {
		if ($this->subject===NULL) {
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
		$count = count($specimen);
		if ($count < 0) {
			throw new \Exception(sprintf('Supplied %s array has less than the required number (%d) of entries.', 'specimen', 0));
		}
		foreach ($specimen as $entry) {
		}
	
		return $specimen;
	}

	public function addSpecimen($specimen) {
		$this->specimen[] = $this->validateSpecimenType($specimen);
	}

	protected function validateSpecimenType($specimen) {
	
		return $specimen;
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
		$count = count($performer);
		if ($count < 0) {
			throw new \Exception(sprintf('Supplied %s array has less than the required number (%d) of entries.', 'performer', 0));
		}
		foreach ($performer as $entry) {
		}
	
		return $performer;
	}

	public function addPerformer($performer) {
		$this->performer[] = $this->validatePerformerType($performer);
	}

	protected function validatePerformerType($performer) {
	
		return $performer;
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
		$count = count($author);
		if ($count < 0) {
			throw new \Exception(sprintf('Supplied %s array has less than the required number (%d) of entries.', 'author', 0));
		}
		foreach ($author as $entry) {
		}
	
		return $author;
	}

	public function addAuthor($author) {
		$this->author[] = $this->validateAuthorType($author);
	}

	protected function validateAuthorType($author) {
	
		return $author;
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
		$count = count($informant);
		if ($count < 0) {
			throw new \Exception(sprintf('Supplied %s array has less than the required number (%d) of entries.', 'informant', 0));
		}
		foreach ($informant as $entry) {
		}
	
		return $informant;
	}

	public function addInformant($informant) {
		$this->informant[] = $this->validateInformantType($informant);
	}

	protected function validateInformantType($informant) {
	
		return $informant;
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
		$count = count($participant);
		if ($count < 0) {
			throw new \Exception(sprintf('Supplied %s array has less than the required number (%d) of entries.', 'participant', 0));
		}
		foreach ($participant as $entry) {
		}
	
		return $participant;
	}

	public function addParticipant($participant) {
		$this->participant[] = $this->validateParticipantType($participant);
	}

	protected function validateParticipantType($participant) {
	
		return $participant;
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
		$count = count($entryRelationship);
		if ($count < 0) {
			throw new \Exception(sprintf('Supplied %s array has less than the required number (%d) of entries.', 'entryRelationship', 0));
		}
		foreach ($entryRelationship as $entry) {
		}
	
		return $entryRelationship;
	}

	public function addEntryRelationship($entryRelationship) {
		$this->entryRelationship[] = $this->validateEntryRelationshipType($entryRelationship);
	}

	protected function validateEntryRelationshipType($entryRelationship) {
	
		return $entryRelationship;
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
		$count = count($reference);
		if ($count < 0) {
			throw new \Exception(sprintf('Supplied %s array has less than the required number (%d) of entries.', 'reference', 0));
		}
		foreach ($reference as $entry) {
		}
	
		return $reference;
	}

	public function addReference($reference) {
		$this->reference[] = $this->validateReferenceType($reference);
	}

	protected function validateReferenceType($reference) {
	
		return $reference;
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
		$count = count($precondition);
		if ($count < 0) {
			throw new \Exception(sprintf('Supplied %s array has less than the required number (%d) of entries.', 'precondition', 0));
		}
		foreach ($precondition as $entry) {
		}
	
		return $precondition;
	}

	public function addPrecondition($precondition) {
		$this->precondition[] = $this->validatePreconditionType($precondition);
	}

	protected function validatePreconditionType($precondition) {
	
		return $precondition;
	}

	public function getReferenceRange() {
		if ($this->referenceRange===NULL) {
			$this->referenceRange = $this->createReferenceRange();
		}
		return $this->referenceRange;
	}
	
	protected function createReferenceRange() {
		return array();
	}

	public function setReferenceRange($referenceRange) {
		$this->referenceRange = $this->validateReferenceRange($referenceRange);
	}

	protected function validateReferenceRange($referenceRange) {
		$count = count($referenceRange);
		if ($count < 0) {
			throw new \Exception(sprintf('Supplied %s array has less than the required number (%d) of entries.', 'referenceRange', 0));
		}
		foreach ($referenceRange as $entry) {
		}
	
		return $referenceRange;
	}

	public function addReferenceRange($referenceRange) {
		$this->referenceRange[] = $this->validateReferenceRangeType($referenceRange);
	}

	protected function validateReferenceRangeType($referenceRange) {
	
		return $referenceRange;
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
} // end class POCDMT000040.Observation
