<?php
namespace hl7_org\v3;



/**
 * @XmlNamespaces ({
 *	@XmlNamespace(url="urn:hl7-org:v3", prefix="")
 * })
 * @XmlEntity	(xml="POCD_MT000040.Participant1")
 */
class POCDMT000040.Participant1 {
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
	 * @XmlElement	(type="\hl7_org\v3\CE", name="functionCode")
	 */
	protected $functionCode;

	/**
	 * @XmlElement	(type="\hl7_org\v3\IVLTS", name="time")
	 */
	protected $time;

	/**
	 * @XmlElement	(type="\hl7_org\v3\POCDMT000040.AssociatedEntity", name="associatedEntity")
	 */
	protected $associatedEntity;

	/**
	 * @XmlAttribute	(type="string", name="nullFlavor")
	 */
	protected $nullFlavor;

	/**
	 * @XmlAttribute	(type="string", name="typeCode")
	 */
	protected $typeCode;

	/**
	 * @XmlAttribute	(type="string", name="contextControlCode")
	 */
	protected $contextControlCode;

	public function __construct($realmCode = NULL, $typeId = NULL, $templateId = NULL, $functionCode = NULL, $time = NULL, $associatedEntity = NULL, $nullFlavor = NULL, $typeCode = NULL, $contextControlCode = NULL) {
		$this->realmCode = ($realmCode===NULL) ? NULL : $this->validateRealmCode($realmCode);
		$this->typeId = ($typeId===NULL) ? NULL : $this->validateTypeId($typeId);
		$this->templateId = ($templateId===NULL) ? NULL : $this->validateTemplateId($templateId);
		$this->functionCode = ($functionCode===NULL) ? NULL : $this->validateFunctionCode($functionCode);
		$this->time = ($time===NULL) ? NULL : $this->validateTime($time);
		$this->associatedEntity = ($associatedEntity===NULL) ? NULL : $this->validateAssociatedEntity($associatedEntity);
		$this->nullFlavor = ($nullFlavor===NULL) ? NULL : $this->validateNullFlavor($nullFlavor);
		$this->typeCode = ($typeCode===NULL) ? NULL : $this->validateTypeCode($typeCode);
		$this->contextControlCode = ($contextControlCode===NULL) ? NULL : $this->validateContextControlCode($contextControlCode);
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

	public function getFunctionCode() {
		if ($this->functionCode===NULL) {
			$this->functionCode = $this->createFunctionCode();
		}
		return $this->functionCode;
	}
	
	protected function createFunctionCode() {
		return new \hl7_org\v3\CE();
	}

	public function setFunctionCode($functionCode) {
		$this->functionCode = $this->validateFunctionCode($functionCode);
	}

	protected function validateFunctionCode($functionCode) {
		if ( ! $functionCode instanceof \hl7_org\v3\CE  && ! is_null($functionCode) ) {
			$functionCode = new \hl7_org\v3\CE ($functionCode);
		}
	
		return $functionCode;
	}

	public function getTime() {
		if ($this->time===NULL) {
			$this->time = $this->createTime();
		}
		return $this->time;
	}
	
	protected function createTime() {
		return new \hl7_org\v3\IVLTS();
	}

	public function setTime($time) {
		$this->time = $this->validateTime($time);
	}

	protected function validateTime($time) {
		if ( ! $time instanceof \hl7_org\v3\IVLTS  && ! is_null($time) ) {
			$time = new \hl7_org\v3\IVLTS ($time);
		}
	
		return $time;
	}

	public function getAssociatedEntity() {
		if ($this->associatedEntity===NULL) {
			$this->associatedEntity = $this->createAssociatedEntity();
		}
		return $this->associatedEntity;
	}
	
	protected function createAssociatedEntity() {
		return new \hl7_org\v3\POCDMT000040.AssociatedEntity();
	}

	public function setAssociatedEntity($associatedEntity) {
		$this->associatedEntity = $this->validateAssociatedEntity($associatedEntity);
	}

	protected function validateAssociatedEntity($associatedEntity) {
		if ( ! $associatedEntity instanceof \hl7_org\v3\POCDMT000040.AssociatedEntity ) {
			$associatedEntity = new \hl7_org\v3\POCDMT000040.AssociatedEntity ($associatedEntity);
		}
	
		return $associatedEntity;
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

	public function getContextControlCode() {
		if ($this->contextControlCode===NULL) {
			$this->contextControlCode = $this->createContextControlCode();
		}
		return $this->contextControlCode;
	}
	
	protected function createContextControlCode() {
		return NULL;
	}

	public function setContextControlCode($contextControlCode) {
		$this->contextControlCode = $this->validateContextControlCode($contextControlCode);
	}

	protected function validateContextControlCode($contextControlCode) {
	
		return $contextControlCode;
	}
} // end class POCDMT000040.Participant1
