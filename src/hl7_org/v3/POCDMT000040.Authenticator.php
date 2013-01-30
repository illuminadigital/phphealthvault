<?php
namespace hl7_org\v3;



/**
 * @XmlNamespaces ({
 *	@XmlNamespace(url="urn:hl7-org:v3", prefix="")
 * })
 * @XmlEntity	(xml="POCD_MT000040.Authenticator")
 */
class POCDMT000040.Authenticator {
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
	 * @XmlElement	(type="\hl7_org\v3\TS", name="time")
	 */
	protected $time;

	/**
	 * @XmlElement	(type="\hl7_org\v3\CS", name="signatureCode")
	 */
	protected $signatureCode;

	/**
	 * @XmlElement	(type="\hl7_org\v3\POCDMT000040.AssignedEntity", name="assignedEntity")
	 */
	protected $assignedEntity;

	/**
	 * @XmlAttribute	(type="string", name="nullFlavor")
	 */
	protected $nullFlavor;

	/**
	 * @XmlAttribute	(type="string", name="typeCode")
	 */
	protected $typeCode;

	public function __construct($realmCode = NULL, $typeId = NULL, $templateId = NULL, $time = NULL, $signatureCode = NULL, $assignedEntity = NULL, $nullFlavor = NULL, $typeCode = NULL) {
		$this->realmCode = ($realmCode===NULL) ? NULL : $this->validateRealmCode($realmCode);
		$this->typeId = ($typeId===NULL) ? NULL : $this->validateTypeId($typeId);
		$this->templateId = ($templateId===NULL) ? NULL : $this->validateTemplateId($templateId);
		$this->time = ($time===NULL) ? NULL : $this->validateTime($time);
		$this->signatureCode = ($signatureCode===NULL) ? NULL : $this->validateSignatureCode($signatureCode);
		$this->assignedEntity = ($assignedEntity===NULL) ? NULL : $this->validateAssignedEntity($assignedEntity);
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

	public function getTime() {
		if ($this->time===NULL) {
			$this->time = $this->createTime();
		}
		return $this->time;
	}
	
	protected function createTime() {
		return new \hl7_org\v3\TS();
	}

	public function setTime($time) {
		$this->time = $this->validateTime($time);
	}

	protected function validateTime($time) {
		if ( ! $time instanceof \hl7_org\v3\TS ) {
			$time = new \hl7_org\v3\TS ($time);
		}
	
		return $time;
	}

	public function getSignatureCode() {
		if ($this->signatureCode===NULL) {
			$this->signatureCode = $this->createSignatureCode();
		}
		return $this->signatureCode;
	}
	
	protected function createSignatureCode() {
		return new \hl7_org\v3\CS();
	}

	public function setSignatureCode($signatureCode) {
		$this->signatureCode = $this->validateSignatureCode($signatureCode);
	}

	protected function validateSignatureCode($signatureCode) {
		if ( ! $signatureCode instanceof \hl7_org\v3\CS ) {
			$signatureCode = new \hl7_org\v3\CS ($signatureCode);
		}
	
		return $signatureCode;
	}

	public function getAssignedEntity() {
		if ($this->assignedEntity===NULL) {
			$this->assignedEntity = $this->createAssignedEntity();
		}
		return $this->assignedEntity;
	}
	
	protected function createAssignedEntity() {
		return new \hl7_org\v3\POCDMT000040.AssignedEntity();
	}

	public function setAssignedEntity($assignedEntity) {
		$this->assignedEntity = $this->validateAssignedEntity($assignedEntity);
	}

	protected function validateAssignedEntity($assignedEntity) {
		if ( ! $assignedEntity instanceof \hl7_org\v3\POCDMT000040.AssignedEntity ) {
			$assignedEntity = new \hl7_org\v3\POCDMT000040.AssignedEntity ($assignedEntity);
		}
	
		return $assignedEntity;
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
} // end class POCDMT000040.Authenticator
