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
	 * @XmlElement	(type="\hl7_org\v3\SXCMTS", collection="true", name="effectiveTime")
	 */
	protected $effectiveTime;

	/**
	 * @XmlElement	(type="\hl7_org\v3\CE", name="priorityCode")
	 */
	protected $priorityCode;

	/**
	 * @XmlElement	(type="\hl7_org\v3\IVLINT", name="repeatNumber")
	 */
	protected $repeatNumber;

	/**
	 * @XmlElement	(type="\hl7_org\v3\CE", name="routeCode")
	 */
	protected $routeCode;

	/**
	 * @XmlElement	(type="\hl7_org\v3\CD", collection="true", name="approachSiteCode")
	 */
	protected $approachSiteCode;

	/**
	 * @XmlElement	(type="\hl7_org\v3\IVLPQ", name="doseQuantity")
	 */
	protected $doseQuantity;

	/**
	 * @XmlElement	(type="\hl7_org\v3\IVLPQ", name="rateQuantity")
	 */
	protected $rateQuantity;

	/**
	 * @XmlElement	(type="\hl7_org\v3\RTOPQPQ", name="maxDoseQuantity")
	 */
	protected $maxDoseQuantity;

	/**
	 * @XmlElement	(type="\hl7_org\v3\CE", name="administrationUnitCode")
	 */
	protected $administrationUnitCode;

	/**
	 * @XmlElement	(type="\hl7_org\v3\POCDMT000040.Subject", name="subject")
	 */
	protected $subject;

	/**
	 * @XmlElement	(type="\hl7_org\v3\POCDMT000040.Specimen", collection="true", name="specimen")
	 */
	protected $specimen;

	/**
	 * @XmlElement	(type="\hl7_org\v3\POCDMT000040.Consumable", name="consumable")
	 */
	protected $consumable;

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
		return array();
	}

	public function setEffectiveTime($effectiveTime) {
		$this->effectiveTime = $this->validateEffectiveTime($effectiveTime);
	}

	protected function validateEffectiveTime($effectiveTime) {
		if ( ! $effectiveTime instanceof \hl7_org\v3\SXCMTS  && ! is_null($effectiveTime) ) {
			$effectiveTime = new \hl7_org\v3\SXCMTS ($effectiveTime);
		}
		$count = count($effectiveTime);
		if ($count < 0) {
			throw new \Exception(sprintf('Supplied %s array has less than the required number (%d) of entries.', 'effectiveTime', 0));
		}
		foreach ($effectiveTime as $entry) {
			if (!($entry instanceof SXCMTS)) {
				throw new \Exception(sprintf('Supplied %s value was not %s', 'effectiveTime', 'SXCM_TS'));
			}
		}
	
		return $effectiveTime;
	}

	public function addEffectiveTime($effectiveTime) {
		$this->effectiveTime[] = $effectiveTime;
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

	public function getRepeatNumber() {
		if ($this->repeatNumber===NULL) {
			$this->repeatNumber = $this->createRepeatNumber();
		}
		return $this->repeatNumber;
	}
	
	protected function createRepeatNumber() {
		return new \hl7_org\v3\IVLINT();
	}

	public function setRepeatNumber($repeatNumber) {
		$this->repeatNumber = $this->validateRepeatNumber($repeatNumber);
	}

	protected function validateRepeatNumber($repeatNumber) {
		if ( ! $repeatNumber instanceof \hl7_org\v3\IVLINT  && ! is_null($repeatNumber) ) {
			$repeatNumber = new \hl7_org\v3\IVLINT ($repeatNumber);
		}
	
		return $repeatNumber;
	}

	public function getRouteCode() {
		if ($this->routeCode===NULL) {
			$this->routeCode = $this->createRouteCode();
		}
		return $this->routeCode;
	}
	
	protected function createRouteCode() {
		return new \hl7_org\v3\CE();
	}

	public function setRouteCode($routeCode) {
		$this->routeCode = $this->validateRouteCode($routeCode);
	}

	protected function validateRouteCode($routeCode) {
		if ( ! $routeCode instanceof \hl7_org\v3\CE  && ! is_null($routeCode) ) {
			$routeCode = new \hl7_org\v3\CE ($routeCode);
		}
	
		return $routeCode;
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
		if ( ! $approachSiteCode instanceof \hl7_org\v3\CD  && ! is_null($approachSiteCode) ) {
			$approachSiteCode = new \hl7_org\v3\CD ($approachSiteCode);
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

	public function getDoseQuantity() {
		if ($this->doseQuantity===NULL) {
			$this->doseQuantity = $this->createDoseQuantity();
		}
		return $this->doseQuantity;
	}
	
	protected function createDoseQuantity() {
		return new \hl7_org\v3\IVLPQ();
	}

	public function setDoseQuantity($doseQuantity) {
		$this->doseQuantity = $this->validateDoseQuantity($doseQuantity);
	}

	protected function validateDoseQuantity($doseQuantity) {
		if ( ! $doseQuantity instanceof \hl7_org\v3\IVLPQ  && ! is_null($doseQuantity) ) {
			$doseQuantity = new \hl7_org\v3\IVLPQ ($doseQuantity);
		}
	
		return $doseQuantity;
	}

	public function getRateQuantity() {
		if ($this->rateQuantity===NULL) {
			$this->rateQuantity = $this->createRateQuantity();
		}
		return $this->rateQuantity;
	}
	
	protected function createRateQuantity() {
		return new \hl7_org\v3\IVLPQ();
	}

	public function setRateQuantity($rateQuantity) {
		$this->rateQuantity = $this->validateRateQuantity($rateQuantity);
	}

	protected function validateRateQuantity($rateQuantity) {
		if ( ! $rateQuantity instanceof \hl7_org\v3\IVLPQ  && ! is_null($rateQuantity) ) {
			$rateQuantity = new \hl7_org\v3\IVLPQ ($rateQuantity);
		}
	
		return $rateQuantity;
	}

	public function getMaxDoseQuantity() {
		if ($this->maxDoseQuantity===NULL) {
			$this->maxDoseQuantity = $this->createMaxDoseQuantity();
		}
		return $this->maxDoseQuantity;
	}
	
	protected function createMaxDoseQuantity() {
		return new \hl7_org\v3\RTOPQPQ();
	}

	public function setMaxDoseQuantity($maxDoseQuantity) {
		$this->maxDoseQuantity = $this->validateMaxDoseQuantity($maxDoseQuantity);
	}

	protected function validateMaxDoseQuantity($maxDoseQuantity) {
		if ( ! $maxDoseQuantity instanceof \hl7_org\v3\RTOPQPQ  && ! is_null($maxDoseQuantity) ) {
			$maxDoseQuantity = new \hl7_org\v3\RTOPQPQ ($maxDoseQuantity);
		}
	
		return $maxDoseQuantity;
	}

	public function getAdministrationUnitCode() {
		if ($this->administrationUnitCode===NULL) {
			$this->administrationUnitCode = $this->createAdministrationUnitCode();
		}
		return $this->administrationUnitCode;
	}
	
	protected function createAdministrationUnitCode() {
		return new \hl7_org\v3\CE();
	}

	public function setAdministrationUnitCode($administrationUnitCode) {
		$this->administrationUnitCode = $this->validateAdministrationUnitCode($administrationUnitCode);
	}

	protected function validateAdministrationUnitCode($administrationUnitCode) {
		if ( ! $administrationUnitCode instanceof \hl7_org\v3\CE  && ! is_null($administrationUnitCode) ) {
			$administrationUnitCode = new \hl7_org\v3\CE ($administrationUnitCode);
		}
	
		return $administrationUnitCode;
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
		if ( ! $specimen instanceof \hl7_org\v3\POCDMT000040.Specimen  && ! is_null($specimen) ) {
			$specimen = new \hl7_org\v3\POCDMT000040.Specimen ($specimen);
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

	public function getConsumable() {
		if ($this->consumable===NULL) {
			$this->consumable = $this->createConsumable();
		}
		return $this->consumable;
	}
	
	protected function createConsumable() {
		return new \hl7_org\v3\POCDMT000040.Consumable();
	}

	public function setConsumable($consumable) {
		$this->consumable = $this->validateConsumable($consumable);
	}

	protected function validateConsumable($consumable) {
		if ( ! $consumable instanceof \hl7_org\v3\POCDMT000040.Consumable ) {
			$consumable = new \hl7_org\v3\POCDMT000040.Consumable ($consumable);
		}
	
		return $consumable;
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
		if ( ! $performer instanceof \hl7_org\v3\POCDMT000040.Performer2  && ! is_null($performer) ) {
			$performer = new \hl7_org\v3\POCDMT000040.Performer2 ($performer);
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
		if ( ! $author instanceof \hl7_org\v3\POCDMT000040.Author  && ! is_null($author) ) {
			$author = new \hl7_org\v3\POCDMT000040.Author ($author);
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
		if ( ! $informant instanceof \hl7_org\v3\POCDMT000040.Informant12  && ! is_null($informant) ) {
			$informant = new \hl7_org\v3\POCDMT000040.Informant12 ($informant);
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
		if ( ! $participant instanceof \hl7_org\v3\POCDMT000040.Participant2  && ! is_null($participant) ) {
			$participant = new \hl7_org\v3\POCDMT000040.Participant2 ($participant);
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
		if ( ! $entryRelationship instanceof \hl7_org\v3\POCDMT000040.EntryRelationship  && ! is_null($entryRelationship) ) {
			$entryRelationship = new \hl7_org\v3\POCDMT000040.EntryRelationship ($entryRelationship);
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
		if ( ! $reference instanceof \hl7_org\v3\POCDMT000040.Reference  && ! is_null($reference) ) {
			$reference = new \hl7_org\v3\POCDMT000040.Reference ($reference);
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
		if ( ! $precondition instanceof \hl7_org\v3\POCDMT000040.Precondition  && ! is_null($precondition) ) {
			$precondition = new \hl7_org\v3\POCDMT000040.Precondition ($precondition);
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
		return new \hl7_org\v3\NullFlavor();
	}

	public function setNullFlavor($nullFlavor) {
		$this->nullFlavor = $this->validateNullFlavor($nullFlavor);
	}

	protected function validateNullFlavor($nullFlavor) {
		if ( ! $nullFlavor instanceof \hl7_org\v3\NullFlavor  && ! is_null($nullFlavor) ) {
			$nullFlavor = new \hl7_org\v3\NullFlavor ($nullFlavor);
		}
	
		return $nullFlavor;
	}

	public function getClassCode() {
		if ($this->classCode===NULL) {
			$this->classCode = $this->createClassCode();
		}
		return $this->classCode;
	}
	
	protected function createClassCode() {
		return new \hl7_org\v3\ActClass();
	}

	public function setClassCode($classCode) {
		$this->classCode = $this->validateClassCode($classCode);
	}

	protected function validateClassCode($classCode) {
		if ( ! $classCode instanceof \hl7_org\v3\ActClass ) {
			$classCode = new \hl7_org\v3\ActClass ($classCode);
		}
	
		return $classCode;
	}

	public function getMoodCode() {
		if ($this->moodCode===NULL) {
			$this->moodCode = $this->createMoodCode();
		}
		return $this->moodCode;
	}
	
	protected function createMoodCode() {
		return new \hl7_org\v3\XDocumentSubstanceMood();
	}

	public function setMoodCode($moodCode) {
		$this->moodCode = $this->validateMoodCode($moodCode);
	}

	protected function validateMoodCode($moodCode) {
		if ( ! $moodCode instanceof \hl7_org\v3\XDocumentSubstanceMood ) {
			$moodCode = new \hl7_org\v3\XDocumentSubstanceMood ($moodCode);
		}
	
		return $moodCode;
	}

	public function getNegationInd() {
		if ($this->negationInd===NULL) {
			$this->negationInd = $this->createNegationInd();
		}
		return $this->negationInd;
	}
	
	protected function createNegationInd() {
		return new \hl7_org\v3\Bl();
	}

	public function setNegationInd($negationInd) {
		$this->negationInd = $this->validateNegationInd($negationInd);
	}

	protected function validateNegationInd($negationInd) {
		if ( ! $negationInd instanceof \hl7_org\v3\Bl  && ! is_null($negationInd) ) {
			$negationInd = new \hl7_org\v3\Bl ($negationInd);
		}
	
		return $negationInd;
	}
} // end class POCDMT000040.SubstanceAdministration
