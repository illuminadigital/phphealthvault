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
	 * @XmlElement	(type="\org\w3\www\_2001\XMLSchema\CE", name="functionCode")
	 */
	protected $functionCode;

	/**
	 * @XmlElement	(type="\org\w3\www\_2001\XMLSchema\IVLTS", name="time")
	 */
	protected $time;

	/**
	 * @XmlElement	(type="\org\w3\www\_2001\XMLSchema\POCDMT000040.AssociatedEntity", name="associatedEntity")
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

	public function getFunctionCode($autoCreate = TRUE) {
		if ($this->functionCode===NULL && $autoCreate && ! isset($this->_overrides['functionCode']) ) {
			$this->functionCode = $this->createFunctionCode();
		}
		return $this->functionCode;
	}
	
	protected function createFunctionCode() {
		return NULL;
	}

	public function setFunctionCode($functionCode) {
		$this->functionCode = $this->validateFunctionCode($functionCode);
	}

	protected function validateFunctionCode($functionCode) {
	
		return $functionCode;
	}

	public function getTime($autoCreate = TRUE) {
		if ($this->time===NULL && $autoCreate && ! isset($this->_overrides['time']) ) {
			$this->time = $this->createTime();
		}
		return $this->time;
	}
	
	protected function createTime() {
		return NULL;
	}

	public function setTime($time) {
		$this->time = $this->validateTime($time);
	}

	protected function validateTime($time) {
	
		return $time;
	}

	public function getAssociatedEntity($autoCreate = TRUE) {
		if ($this->associatedEntity===NULL && $autoCreate && ! isset($this->_overrides['associatedEntity']) ) {
			$this->associatedEntity = $this->createAssociatedEntity();
		}
		return $this->associatedEntity;
	}
	
	protected function createAssociatedEntity() {
		return NULL;
	}

	public function setAssociatedEntity($associatedEntity) {
		$this->associatedEntity = $this->validateAssociatedEntity($associatedEntity);
	}

	protected function validateAssociatedEntity($associatedEntity) {
	
		return $associatedEntity;
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

	public function getTypeCode($autoCreate = TRUE) {
		if ($this->typeCode===NULL && $autoCreate && ! isset($this->_overrides['typeCode']) ) {
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

	public function getContextControlCode($autoCreate = TRUE) {
		if ($this->contextControlCode===NULL && $autoCreate && ! isset($this->_overrides['contextControlCode']) ) {
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
