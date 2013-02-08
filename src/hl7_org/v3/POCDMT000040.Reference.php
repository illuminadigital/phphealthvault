<?php
namespace hl7_org\v3;



/**
 * @XmlNamespaces ({
 *	@XmlNamespace(url="urn:hl7-org:v3", prefix="")
 * })
 * @XmlEntity	(xml="POCD_MT000040.Reference")
 */
class POCDMT000040.Reference {
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
	 * @XmlElement	(type="\org\w3\www\_2001\XMLSchema\BL", name="seperatableInd")
	 */
	protected $seperatableInd;

	/**
	 * @XmlElement	(type="\org\w3\www\_2001\XMLSchema\POCDMT000040.ExternalAct", name="externalAct")
	 */
	protected $externalAct;

	/**
	 * @XmlElement	(type="\org\w3\www\_2001\XMLSchema\POCDMT000040.ExternalObservation", name="externalObservation")
	 */
	protected $externalObservation;

	/**
	 * @XmlElement	(type="\org\w3\www\_2001\XMLSchema\POCDMT000040.ExternalProcedure", name="externalProcedure")
	 */
	protected $externalProcedure;

	/**
	 * @XmlElement	(type="\org\w3\www\_2001\XMLSchema\POCDMT000040.ExternalDocument", name="externalDocument")
	 */
	protected $externalDocument;

	/**
	 * @XmlAttribute	(type="string", name="nullFlavor")
	 */
	protected $nullFlavor;

	/**
	 * @XmlAttribute	(type="string", name="typeCode")
	 */
	protected $typeCode;

	public function __construct($realmCode = NULL, $typeId = NULL, $templateId = NULL, $seperatableInd = NULL, $externalAct = NULL, $externalObservation = NULL, $externalProcedure = NULL, $externalDocument = NULL, $nullFlavor = NULL, $typeCode = NULL) {
		$this->realmCode = ($realmCode===NULL) ? NULL : $this->validateRealmCode($realmCode);
		$this->typeId = ($typeId===NULL) ? NULL : $this->validateTypeId($typeId);
		$this->templateId = ($templateId===NULL) ? NULL : $this->validateTemplateId($templateId);
		$this->seperatableInd = ($seperatableInd===NULL) ? NULL : $this->validateSeperatableInd($seperatableInd);
		$this->externalAct = ($externalAct===NULL) ? NULL : $this->validateExternalAct($externalAct);
		$this->externalObservation = ($externalObservation===NULL) ? NULL : $this->validateExternalObservation($externalObservation);
		$this->externalProcedure = ($externalProcedure===NULL) ? NULL : $this->validateExternalProcedure($externalProcedure);
		$this->externalDocument = ($externalDocument===NULL) ? NULL : $this->validateExternalDocument($externalDocument);
		$this->nullFlavor = ($nullFlavor===NULL) ? NULL : $this->validateNullFlavor($nullFlavor);
		$this->typeCode = ($typeCode===NULL) ? NULL : $this->validateTypeCode($typeCode);
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

	public function getExternalAct() {
		if ($this->externalAct===NULL) {
			$this->externalAct = $this->createExternalAct();
		}
		return $this->externalAct;
	}
	
	protected function createExternalAct() {
		return NULL;
	}

	public function setExternalAct($externalAct) {
		$this->externalAct = $this->validateExternalAct($externalAct);
	}

	protected function validateExternalAct($externalAct) {
	
		return $externalAct;
	}

	public function getExternalObservation() {
		if ($this->externalObservation===NULL) {
			$this->externalObservation = $this->createExternalObservation();
		}
		return $this->externalObservation;
	}
	
	protected function createExternalObservation() {
		return NULL;
	}

	public function setExternalObservation($externalObservation) {
		$this->externalObservation = $this->validateExternalObservation($externalObservation);
	}

	protected function validateExternalObservation($externalObservation) {
	
		return $externalObservation;
	}

	public function getExternalProcedure() {
		if ($this->externalProcedure===NULL) {
			$this->externalProcedure = $this->createExternalProcedure();
		}
		return $this->externalProcedure;
	}
	
	protected function createExternalProcedure() {
		return NULL;
	}

	public function setExternalProcedure($externalProcedure) {
		$this->externalProcedure = $this->validateExternalProcedure($externalProcedure);
	}

	protected function validateExternalProcedure($externalProcedure) {
	
		return $externalProcedure;
	}

	public function getExternalDocument() {
		if ($this->externalDocument===NULL) {
			$this->externalDocument = $this->createExternalDocument();
		}
		return $this->externalDocument;
	}
	
	protected function createExternalDocument() {
		return NULL;
	}

	public function setExternalDocument($externalDocument) {
		$this->externalDocument = $this->validateExternalDocument($externalDocument);
	}

	protected function validateExternalDocument($externalDocument) {
	
		return $externalDocument;
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
} // end class POCDMT000040.Reference
