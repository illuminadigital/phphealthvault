<?php
namespace hl7_org\v3;



/**
 * @XmlNamespaces ({
 *	@XmlNamespace(url="urn:hl7-org:v3", prefix="")
 * })
 * @XmlEntity	(xml="POCD_MT000040.ObservationMedia")
 */
class POCDMT000040.ObservationMedia {
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
	 * @XmlElement	(type="\hl7_org\v3\CS", name="languageCode")
	 */
	protected $languageCode;

	/**
	 * @XmlElement	(type="\hl7_org\v3\ED", name="value")
	 */
	protected $value;

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
	 * @XmlAttribute	(type="string", name="ID")
	 */
	protected $iD;

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

	public function __construct($realmCode = NULL, $typeId = NULL, $templateId = NULL, $id = NULL, $languageCode = NULL, $value = NULL, $subject = NULL, $specimen = NULL, $performer = NULL, $author = NULL, $informant = NULL, $participant = NULL, $entryRelationship = NULL, $reference = NULL, $precondition = NULL, $iD = NULL, $nullFlavor = NULL, $classCode = NULL, $moodCode = NULL) {
		$this->realmCode = ($realmCode===NULL) ? NULL : $this->validateRealmCode($realmCode);
		$this->typeId = ($typeId===NULL) ? NULL : $this->validateTypeId($typeId);
		$this->templateId = ($templateId===NULL) ? NULL : $this->validateTemplateId($templateId);
		$this->id = ($id===NULL) ? NULL : $this->validateId($id);
		$this->languageCode = ($languageCode===NULL) ? NULL : $this->validateLanguageCode($languageCode);
		$this->value = ($value===NULL) ? NULL : $this->validateValue($value);
		$this->subject = ($subject===NULL) ? NULL : $this->validateSubject($subject);
		$this->specimen = ($specimen===NULL) ? NULL : $this->validateSpecimen($specimen);
		$this->performer = ($performer===NULL) ? NULL : $this->validatePerformer($performer);
		$this->author = ($author===NULL) ? NULL : $this->validateAuthor($author);
		$this->informant = ($informant===NULL) ? NULL : $this->validateInformant($informant);
		$this->participant = ($participant===NULL) ? NULL : $this->validateParticipant($participant);
		$this->entryRelationship = ($entryRelationship===NULL) ? NULL : $this->validateEntryRelationship($entryRelationship);
		$this->reference = ($reference===NULL) ? NULL : $this->validateReference($reference);
		$this->precondition = ($precondition===NULL) ? NULL : $this->validatePrecondition($precondition);
		$this->iD = ($iD===NULL) ? NULL : $this->validateID($iD);
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

	public function getValue() {
		if ($this->value===NULL) {
			$this->value = $this->createValue();
		}
		return $this->value;
	}
	
	protected function createValue() {
		return new \hl7_org\v3\ED();
	}

	public function setValue($value) {
		$this->value = $this->validateValue($value);
	}

	protected function validateValue($value) {
		if ( ! $value instanceof \hl7_org\v3\ED ) {
			$value = new \hl7_org\v3\ED ($value);
		}
	
		return $value;
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

	public function getID() {
		if ($this->iD===NULL) {
			$this->iD = $this->createID();
		}
		return $this->iD;
	}
	
	protected function createID() {
		return NULL;
	}

	public function setID($iD) {
		$this->iD = $this->validateID($iD);
	}

	protected function validateID($iD) {
		if (!is_string($iD)) {
			throw new \Exception(sprintf('Supplied %s value was not %s', 'iD', 'string'));
		}
	
		return $iD;
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
} // end class POCDMT000040.ObservationMedia
