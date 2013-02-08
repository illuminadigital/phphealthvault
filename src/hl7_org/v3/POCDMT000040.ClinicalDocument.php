<?php
namespace hl7_org\v3;



/**
 * @XmlNamespaces ({
 *	@XmlNamespace(url="urn:hl7-org:v3", prefix="")
 * })
 * @XmlEntity	(xml="POCD_MT000040.ClinicalDocument")
 */
class POCDMT000040.ClinicalDocument {
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
	 * @XmlElement	(type="\org\w3\www\_2001\XMLSchema\II", name="id")
	 */
	protected $id;

	/**
	 * @XmlElement	(type="\org\w3\www\_2001\XMLSchema\CE", name="code")
	 */
	protected $code;

	/**
	 * @XmlElement	(type="\org\w3\www\_2001\XMLSchema\ST", name="title")
	 */
	protected $title;

	/**
	 * @XmlElement	(type="\org\w3\www\_2001\XMLSchema\TS", name="effectiveTime")
	 */
	protected $effectiveTime;

	/**
	 * @XmlElement	(type="\org\w3\www\_2001\XMLSchema\CE", name="confidentialityCode")
	 */
	protected $confidentialityCode;

	/**
	 * @XmlElement	(type="\org\w3\www\_2001\XMLSchema\CS", name="languageCode")
	 */
	protected $languageCode;

	/**
	 * @XmlElement	(type="\org\w3\www\_2001\XMLSchema\II", name="setId")
	 */
	protected $setId;

	/**
	 * @XmlElement	(type="\org\w3\www\_2001\XMLSchema\INT", name="versionNumber")
	 */
	protected $versionNumber;

	/**
	 * @XmlElement	(type="\org\w3\www\_2001\XMLSchema\TS", name="copyTime")
	 */
	protected $copyTime;

	/**
	 * @XmlElement	(type="\org\w3\www\_2001\XMLSchema\POCDMT000040.RecordTarget", collection="true", name="recordTarget")
	 */
	protected $recordTarget;

	/**
	 * @XmlElement	(type="\org\w3\www\_2001\XMLSchema\POCDMT000040.Author", collection="true", name="author")
	 */
	protected $author;

	/**
	 * @XmlElement	(type="\org\w3\www\_2001\XMLSchema\POCDMT000040.DataEnterer", name="dataEnterer")
	 */
	protected $dataEnterer;

	/**
	 * @XmlElement	(type="\org\w3\www\_2001\XMLSchema\POCDMT000040.Informant12", collection="true", name="informant")
	 */
	protected $informant;

	/**
	 * @XmlElement	(type="\org\w3\www\_2001\XMLSchema\POCDMT000040.Custodian", name="custodian")
	 */
	protected $custodian;

	/**
	 * @XmlElement	(type="\org\w3\www\_2001\XMLSchema\POCDMT000040.InformationRecipient", collection="true", name="informationRecipient")
	 */
	protected $informationRecipient;

	/**
	 * @XmlElement	(type="\org\w3\www\_2001\XMLSchema\POCDMT000040.LegalAuthenticator", name="legalAuthenticator")
	 */
	protected $legalAuthenticator;

	/**
	 * @XmlElement	(type="\org\w3\www\_2001\XMLSchema\POCDMT000040.Authenticator", collection="true", name="authenticator")
	 */
	protected $authenticator;

	/**
	 * @XmlElement	(type="\org\w3\www\_2001\XMLSchema\POCDMT000040.Participant1", collection="true", name="participant")
	 */
	protected $participant;

	/**
	 * @XmlElement	(type="\org\w3\www\_2001\XMLSchema\POCDMT000040.InFulfillmentOf", collection="true", name="inFulfillmentOf")
	 */
	protected $inFulfillmentOf;

	/**
	 * @XmlElement	(type="\org\w3\www\_2001\XMLSchema\POCDMT000040.DocumentationOf", collection="true", name="documentationOf")
	 */
	protected $documentationOf;

	/**
	 * @XmlElement	(type="\org\w3\www\_2001\XMLSchema\POCDMT000040.RelatedDocument", collection="true", name="relatedDocument")
	 */
	protected $relatedDocument;

	/**
	 * @XmlElement	(type="\org\w3\www\_2001\XMLSchema\POCDMT000040.Authorization", collection="true", name="authorization")
	 */
	protected $authorization;

	/**
	 * @XmlElement	(type="\org\w3\www\_2001\XMLSchema\POCDMT000040.Component1", name="componentOf")
	 */
	protected $componentOf;

	/**
	 * @XmlElement	(type="\org\w3\www\_2001\XMLSchema\POCDMT000040.Component2", name="component")
	 */
	protected $component;

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

	public function __construct($realmCode = NULL, $typeId = NULL, $templateId = NULL, $id = NULL, $code = NULL, $title = NULL, $effectiveTime = NULL, $confidentialityCode = NULL, $languageCode = NULL, $setId = NULL, $versionNumber = NULL, $copyTime = NULL, $recordTarget = NULL, $author = NULL, $dataEnterer = NULL, $informant = NULL, $custodian = NULL, $informationRecipient = NULL, $legalAuthenticator = NULL, $authenticator = NULL, $participant = NULL, $inFulfillmentOf = NULL, $documentationOf = NULL, $relatedDocument = NULL, $authorization = NULL, $componentOf = NULL, $component = NULL, $nullFlavor = NULL, $classCode = NULL, $moodCode = NULL) {
		$this->realmCode = ($realmCode===NULL) ? NULL : $this->validateRealmCode($realmCode);
		$this->typeId = ($typeId===NULL) ? NULL : $this->validateTypeId($typeId);
		$this->templateId = ($templateId===NULL) ? NULL : $this->validateTemplateId($templateId);
		$this->id = ($id===NULL) ? NULL : $this->validateId($id);
		$this->code = ($code===NULL) ? NULL : $this->validateCode($code);
		$this->title = ($title===NULL) ? NULL : $this->validateTitle($title);
		$this->effectiveTime = ($effectiveTime===NULL) ? NULL : $this->validateEffectiveTime($effectiveTime);
		$this->confidentialityCode = ($confidentialityCode===NULL) ? NULL : $this->validateConfidentialityCode($confidentialityCode);
		$this->languageCode = ($languageCode===NULL) ? NULL : $this->validateLanguageCode($languageCode);
		$this->setId = ($setId===NULL) ? NULL : $this->validateSetId($setId);
		$this->versionNumber = ($versionNumber===NULL) ? NULL : $this->validateVersionNumber($versionNumber);
		$this->copyTime = ($copyTime===NULL) ? NULL : $this->validateCopyTime($copyTime);
		$this->recordTarget = ($recordTarget===NULL) ? NULL : $this->validateRecordTarget($recordTarget);
		$this->author = ($author===NULL) ? NULL : $this->validateAuthor($author);
		$this->dataEnterer = ($dataEnterer===NULL) ? NULL : $this->validateDataEnterer($dataEnterer);
		$this->informant = ($informant===NULL) ? NULL : $this->validateInformant($informant);
		$this->custodian = ($custodian===NULL) ? NULL : $this->validateCustodian($custodian);
		$this->informationRecipient = ($informationRecipient===NULL) ? NULL : $this->validateInformationRecipient($informationRecipient);
		$this->legalAuthenticator = ($legalAuthenticator===NULL) ? NULL : $this->validateLegalAuthenticator($legalAuthenticator);
		$this->authenticator = ($authenticator===NULL) ? NULL : $this->validateAuthenticator($authenticator);
		$this->participant = ($participant===NULL) ? NULL : $this->validateParticipant($participant);
		$this->inFulfillmentOf = ($inFulfillmentOf===NULL) ? NULL : $this->validateInFulfillmentOf($inFulfillmentOf);
		$this->documentationOf = ($documentationOf===NULL) ? NULL : $this->validateDocumentationOf($documentationOf);
		$this->relatedDocument = ($relatedDocument===NULL) ? NULL : $this->validateRelatedDocument($relatedDocument);
		$this->authorization = ($authorization===NULL) ? NULL : $this->validateAuthorization($authorization);
		$this->componentOf = ($componentOf===NULL) ? NULL : $this->validateComponentOf($componentOf);
		$this->component = ($component===NULL) ? NULL : $this->validateComponent($component);
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
		return NULL;
	}

	public function setId($id) {
		$this->id = $this->validateId($id);
	}

	protected function validateId($id) {
	
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

	public function getTitle() {
		if ($this->title===NULL) {
			$this->title = $this->createTitle();
		}
		return $this->title;
	}
	
	protected function createTitle() {
		return NULL;
	}

	public function setTitle($title) {
		$this->title = $this->validateTitle($title);
	}

	protected function validateTitle($title) {
	
		return $title;
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

	public function getConfidentialityCode() {
		if ($this->confidentialityCode===NULL) {
			$this->confidentialityCode = $this->createConfidentialityCode();
		}
		return $this->confidentialityCode;
	}
	
	protected function createConfidentialityCode() {
		return NULL;
	}

	public function setConfidentialityCode($confidentialityCode) {
		$this->confidentialityCode = $this->validateConfidentialityCode($confidentialityCode);
	}

	protected function validateConfidentialityCode($confidentialityCode) {
	
		return $confidentialityCode;
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

	public function getSetId() {
		if ($this->setId===NULL) {
			$this->setId = $this->createSetId();
		}
		return $this->setId;
	}
	
	protected function createSetId() {
		return NULL;
	}

	public function setSetId($setId) {
		$this->setId = $this->validateSetId($setId);
	}

	protected function validateSetId($setId) {
	
		return $setId;
	}

	public function getVersionNumber() {
		if ($this->versionNumber===NULL) {
			$this->versionNumber = $this->createVersionNumber();
		}
		return $this->versionNumber;
	}
	
	protected function createVersionNumber() {
		return NULL;
	}

	public function setVersionNumber($versionNumber) {
		$this->versionNumber = $this->validateVersionNumber($versionNumber);
	}

	protected function validateVersionNumber($versionNumber) {
	
		return $versionNumber;
	}

	public function getCopyTime() {
		if ($this->copyTime===NULL) {
			$this->copyTime = $this->createCopyTime();
		}
		return $this->copyTime;
	}
	
	protected function createCopyTime() {
		return NULL;
	}

	public function setCopyTime($copyTime) {
		$this->copyTime = $this->validateCopyTime($copyTime);
	}

	protected function validateCopyTime($copyTime) {
	
		return $copyTime;
	}

	public function getRecordTarget() {
		if ($this->recordTarget===NULL) {
			$this->recordTarget = $this->createRecordTarget();
		}
		return $this->recordTarget;
	}
	
	protected function createRecordTarget() {
		return array();
	}

	public function setRecordTarget($recordTarget) {
		$this->recordTarget = $this->validateRecordTarget($recordTarget);
	}

	protected function validateRecordTarget($recordTarget) {
		$count = count($recordTarget);
		if ($count < 1) {
			throw new \Exception(sprintf('Supplied %s array has less than the required number (%d) of entries.', 'recordTarget', 1));
		}
		foreach ($recordTarget as $entry) {
		}
	
		return $recordTarget;
	}

	public function addRecordTarget($recordTarget) {
		$this->recordTarget[] = $this->validateRecordTargetType($recordTarget);
	}

	protected function validateRecordTargetType($recordTarget) {
	
		return $recordTarget;
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
		if ($count < 1) {
			throw new \Exception(sprintf('Supplied %s array has less than the required number (%d) of entries.', 'author', 1));
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

	public function getDataEnterer() {
		if ($this->dataEnterer===NULL) {
			$this->dataEnterer = $this->createDataEnterer();
		}
		return $this->dataEnterer;
	}
	
	protected function createDataEnterer() {
		return NULL;
	}

	public function setDataEnterer($dataEnterer) {
		$this->dataEnterer = $this->validateDataEnterer($dataEnterer);
	}

	protected function validateDataEnterer($dataEnterer) {
	
		return $dataEnterer;
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

	public function getCustodian() {
		if ($this->custodian===NULL) {
			$this->custodian = $this->createCustodian();
		}
		return $this->custodian;
	}
	
	protected function createCustodian() {
		return NULL;
	}

	public function setCustodian($custodian) {
		$this->custodian = $this->validateCustodian($custodian);
	}

	protected function validateCustodian($custodian) {
	
		return $custodian;
	}

	public function getInformationRecipient() {
		if ($this->informationRecipient===NULL) {
			$this->informationRecipient = $this->createInformationRecipient();
		}
		return $this->informationRecipient;
	}
	
	protected function createInformationRecipient() {
		return array();
	}

	public function setInformationRecipient($informationRecipient) {
		$this->informationRecipient = $this->validateInformationRecipient($informationRecipient);
	}

	protected function validateInformationRecipient($informationRecipient) {
		$count = count($informationRecipient);
		if ($count < 0) {
			throw new \Exception(sprintf('Supplied %s array has less than the required number (%d) of entries.', 'informationRecipient', 0));
		}
		foreach ($informationRecipient as $entry) {
		}
	
		return $informationRecipient;
	}

	public function addInformationRecipient($informationRecipient) {
		$this->informationRecipient[] = $this->validateInformationRecipientType($informationRecipient);
	}

	protected function validateInformationRecipientType($informationRecipient) {
	
		return $informationRecipient;
	}

	public function getLegalAuthenticator() {
		if ($this->legalAuthenticator===NULL) {
			$this->legalAuthenticator = $this->createLegalAuthenticator();
		}
		return $this->legalAuthenticator;
	}
	
	protected function createLegalAuthenticator() {
		return NULL;
	}

	public function setLegalAuthenticator($legalAuthenticator) {
		$this->legalAuthenticator = $this->validateLegalAuthenticator($legalAuthenticator);
	}

	protected function validateLegalAuthenticator($legalAuthenticator) {
	
		return $legalAuthenticator;
	}

	public function getAuthenticator() {
		if ($this->authenticator===NULL) {
			$this->authenticator = $this->createAuthenticator();
		}
		return $this->authenticator;
	}
	
	protected function createAuthenticator() {
		return array();
	}

	public function setAuthenticator($authenticator) {
		$this->authenticator = $this->validateAuthenticator($authenticator);
	}

	protected function validateAuthenticator($authenticator) {
		$count = count($authenticator);
		if ($count < 0) {
			throw new \Exception(sprintf('Supplied %s array has less than the required number (%d) of entries.', 'authenticator', 0));
		}
		foreach ($authenticator as $entry) {
		}
	
		return $authenticator;
	}

	public function addAuthenticator($authenticator) {
		$this->authenticator[] = $this->validateAuthenticatorType($authenticator);
	}

	protected function validateAuthenticatorType($authenticator) {
	
		return $authenticator;
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

	public function getInFulfillmentOf() {
		if ($this->inFulfillmentOf===NULL) {
			$this->inFulfillmentOf = $this->createInFulfillmentOf();
		}
		return $this->inFulfillmentOf;
	}
	
	protected function createInFulfillmentOf() {
		return array();
	}

	public function setInFulfillmentOf($inFulfillmentOf) {
		$this->inFulfillmentOf = $this->validateInFulfillmentOf($inFulfillmentOf);
	}

	protected function validateInFulfillmentOf($inFulfillmentOf) {
		$count = count($inFulfillmentOf);
		if ($count < 0) {
			throw new \Exception(sprintf('Supplied %s array has less than the required number (%d) of entries.', 'inFulfillmentOf', 0));
		}
		foreach ($inFulfillmentOf as $entry) {
		}
	
		return $inFulfillmentOf;
	}

	public function addInFulfillmentOf($inFulfillmentOf) {
		$this->inFulfillmentOf[] = $this->validateInFulfillmentOfType($inFulfillmentOf);
	}

	protected function validateInFulfillmentOfType($inFulfillmentOf) {
	
		return $inFulfillmentOf;
	}

	public function getDocumentationOf() {
		if ($this->documentationOf===NULL) {
			$this->documentationOf = $this->createDocumentationOf();
		}
		return $this->documentationOf;
	}
	
	protected function createDocumentationOf() {
		return array();
	}

	public function setDocumentationOf($documentationOf) {
		$this->documentationOf = $this->validateDocumentationOf($documentationOf);
	}

	protected function validateDocumentationOf($documentationOf) {
		$count = count($documentationOf);
		if ($count < 0) {
			throw new \Exception(sprintf('Supplied %s array has less than the required number (%d) of entries.', 'documentationOf', 0));
		}
		foreach ($documentationOf as $entry) {
		}
	
		return $documentationOf;
	}

	public function addDocumentationOf($documentationOf) {
		$this->documentationOf[] = $this->validateDocumentationOfType($documentationOf);
	}

	protected function validateDocumentationOfType($documentationOf) {
	
		return $documentationOf;
	}

	public function getRelatedDocument() {
		if ($this->relatedDocument===NULL) {
			$this->relatedDocument = $this->createRelatedDocument();
		}
		return $this->relatedDocument;
	}
	
	protected function createRelatedDocument() {
		return array();
	}

	public function setRelatedDocument($relatedDocument) {
		$this->relatedDocument = $this->validateRelatedDocument($relatedDocument);
	}

	protected function validateRelatedDocument($relatedDocument) {
		$count = count($relatedDocument);
		if ($count < 0) {
			throw new \Exception(sprintf('Supplied %s array has less than the required number (%d) of entries.', 'relatedDocument', 0));
		}
		foreach ($relatedDocument as $entry) {
		}
	
		return $relatedDocument;
	}

	public function addRelatedDocument($relatedDocument) {
		$this->relatedDocument[] = $this->validateRelatedDocumentType($relatedDocument);
	}

	protected function validateRelatedDocumentType($relatedDocument) {
	
		return $relatedDocument;
	}

	public function getAuthorization() {
		if ($this->authorization===NULL) {
			$this->authorization = $this->createAuthorization();
		}
		return $this->authorization;
	}
	
	protected function createAuthorization() {
		return array();
	}

	public function setAuthorization($authorization) {
		$this->authorization = $this->validateAuthorization($authorization);
	}

	protected function validateAuthorization($authorization) {
		$count = count($authorization);
		if ($count < 0) {
			throw new \Exception(sprintf('Supplied %s array has less than the required number (%d) of entries.', 'authorization', 0));
		}
		foreach ($authorization as $entry) {
		}
	
		return $authorization;
	}

	public function addAuthorization($authorization) {
		$this->authorization[] = $this->validateAuthorizationType($authorization);
	}

	protected function validateAuthorizationType($authorization) {
	
		return $authorization;
	}

	public function getComponentOf() {
		if ($this->componentOf===NULL) {
			$this->componentOf = $this->createComponentOf();
		}
		return $this->componentOf;
	}
	
	protected function createComponentOf() {
		return NULL;
	}

	public function setComponentOf($componentOf) {
		$this->componentOf = $this->validateComponentOf($componentOf);
	}

	protected function validateComponentOf($componentOf) {
	
		return $componentOf;
	}

	public function getComponent() {
		if ($this->component===NULL) {
			$this->component = $this->createComponent();
		}
		return $this->component;
	}
	
	protected function createComponent() {
		return NULL;
	}

	public function setComponent($component) {
		$this->component = $this->validateComponent($component);
	}

	protected function validateComponent($component) {
	
		return $component;
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
} // end class POCDMT000040.ClinicalDocument
