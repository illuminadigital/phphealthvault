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
	 * @XmlElement	(type="\hl7_org\v3\BL", name="seperatableInd")
	 */
	protected $seperatableInd;

	/**
	 * @XmlElement	(type="\hl7_org\v3\POCDMT000040.ExternalAct", name="externalAct")
	 */
	protected $externalAct;

	/**
	 * @XmlElement	(type="\hl7_org\v3\POCDMT000040.ExternalObservation", name="externalObservation")
	 */
	protected $externalObservation;

	/**
	 * @XmlElement	(type="\hl7_org\v3\POCDMT000040.ExternalProcedure", name="externalProcedure")
	 */
	protected $externalProcedure;

	/**
	 * @XmlElement	(type="\hl7_org\v3\POCDMT000040.ExternalDocument", name="externalDocument")
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

	public function getSeperatableInd() {
		if ($this->seperatableInd===NULL) {
			$this->seperatableInd = $this->createSeperatableInd();
		}
		return $this->seperatableInd;
	}
	
	protected function createSeperatableInd() {
		return new \hl7_org\v3\BL();
	}

	public function setSeperatableInd($seperatableInd) {
		$this->seperatableInd = $this->validateSeperatableInd($seperatableInd);
	}

	protected function validateSeperatableInd($seperatableInd) {
		if ( ! $seperatableInd instanceof \hl7_org\v3\BL  && ! is_null($seperatableInd) ) {
			$seperatableInd = new \hl7_org\v3\BL ($seperatableInd);
		}
	
		return $seperatableInd;
	}

	public function getExternalAct() {
		if ($this->externalAct===NULL) {
			$this->externalAct = $this->createExternalAct();
		}
		return $this->externalAct;
	}
	
	protected function createExternalAct() {
		return new \hl7_org\v3\POCDMT000040.ExternalAct();
	}

	public function setExternalAct($externalAct) {
		$this->externalAct = $this->validateExternalAct($externalAct);
	}

	protected function validateExternalAct($externalAct) {
		if ( ! $externalAct instanceof \hl7_org\v3\POCDMT000040.ExternalAct ) {
			$externalAct = new \hl7_org\v3\POCDMT000040.ExternalAct ($externalAct);
		}
	
		return $externalAct;
	}

	public function getExternalObservation() {
		if ($this->externalObservation===NULL) {
			$this->externalObservation = $this->createExternalObservation();
		}
		return $this->externalObservation;
	}
	
	protected function createExternalObservation() {
		return new \hl7_org\v3\POCDMT000040.ExternalObservation();
	}

	public function setExternalObservation($externalObservation) {
		$this->externalObservation = $this->validateExternalObservation($externalObservation);
	}

	protected function validateExternalObservation($externalObservation) {
		if ( ! $externalObservation instanceof \hl7_org\v3\POCDMT000040.ExternalObservation ) {
			$externalObservation = new \hl7_org\v3\POCDMT000040.ExternalObservation ($externalObservation);
		}
	
		return $externalObservation;
	}

	public function getExternalProcedure() {
		if ($this->externalProcedure===NULL) {
			$this->externalProcedure = $this->createExternalProcedure();
		}
		return $this->externalProcedure;
	}
	
	protected function createExternalProcedure() {
		return new \hl7_org\v3\POCDMT000040.ExternalProcedure();
	}

	public function setExternalProcedure($externalProcedure) {
		$this->externalProcedure = $this->validateExternalProcedure($externalProcedure);
	}

	protected function validateExternalProcedure($externalProcedure) {
		if ( ! $externalProcedure instanceof \hl7_org\v3\POCDMT000040.ExternalProcedure ) {
			$externalProcedure = new \hl7_org\v3\POCDMT000040.ExternalProcedure ($externalProcedure);
		}
	
		return $externalProcedure;
	}

	public function getExternalDocument() {
		if ($this->externalDocument===NULL) {
			$this->externalDocument = $this->createExternalDocument();
		}
		return $this->externalDocument;
	}
	
	protected function createExternalDocument() {
		return new \hl7_org\v3\POCDMT000040.ExternalDocument();
	}

	public function setExternalDocument($externalDocument) {
		$this->externalDocument = $this->validateExternalDocument($externalDocument);
	}

	protected function validateExternalDocument($externalDocument) {
		if ( ! $externalDocument instanceof \hl7_org\v3\POCDMT000040.ExternalDocument ) {
			$externalDocument = new \hl7_org\v3\POCDMT000040.ExternalDocument ($externalDocument);
		}
	
		return $externalDocument;
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

	public function getTypeCode() {
		if ($this->typeCode===NULL) {
			$this->typeCode = $this->createTypeCode();
		}
		return $this->typeCode;
	}
	
	protected function createTypeCode() {
		return new \hl7_org\v3\XActRelationshipExternalReference();
	}

	public function setTypeCode($typeCode) {
		$this->typeCode = $this->validateTypeCode($typeCode);
	}

	protected function validateTypeCode($typeCode) {
		if ( ! $typeCode instanceof \hl7_org\v3\XActRelationshipExternalReference ) {
			$typeCode = new \hl7_org\v3\XActRelationshipExternalReference ($typeCode);
		}
	
		return $typeCode;
	}
} // end class POCDMT000040.Reference
