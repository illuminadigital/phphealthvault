<?php
namespace hl7_org\v3;



/**
 * @XmlNamespaces ({
 *	@XmlNamespace(url="urn:hl7-org:v3", prefix="")
 * })
 * @XmlEntity	(xml="POCD_MT000040.AuthoringDevice")
 */
class POCDMT000040.AuthoringDevice {
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
	 * @XmlElement	(type="\org\w3\www\_2001\XMLSchema\CE", name="code")
	 */
	protected $code;

	/**
	 * @XmlElement	(type="\org\w3\www\_2001\XMLSchema\SC", name="manufacturerModelName")
	 */
	protected $manufacturerModelName;

	/**
	 * @XmlElement	(type="\org\w3\www\_2001\XMLSchema\SC", name="softwareName")
	 */
	protected $softwareName;

	/**
	 * @XmlElement	(type="\org\w3\www\_2001\XMLSchema\POCDMT000040.MaintainedEntity", collection="true", name="asMaintainedEntity")
	 */
	protected $asMaintainedEntity;

	/**
	 * @XmlAttribute	(type="string", name="nullFlavor")
	 */
	protected $nullFlavor;

	/**
	 * @XmlAttribute	(type="string", name="classCode")
	 */
	protected $classCode;

	/**
	 * @XmlAttribute	(type="string", name="determinerCode")
	 */
	protected $determinerCode;

	public function __construct($realmCode = NULL, $typeId = NULL, $templateId = NULL, $code = NULL, $manufacturerModelName = NULL, $softwareName = NULL, $asMaintainedEntity = NULL, $nullFlavor = NULL, $classCode = NULL, $determinerCode = NULL) {
		$this->realmCode = ($realmCode===NULL) ? NULL : $this->validateRealmCode($realmCode);
		$this->typeId = ($typeId===NULL) ? NULL : $this->validateTypeId($typeId);
		$this->templateId = ($templateId===NULL) ? NULL : $this->validateTemplateId($templateId);
		$this->code = ($code===NULL) ? NULL : $this->validateCode($code);
		$this->manufacturerModelName = ($manufacturerModelName===NULL) ? NULL : $this->validateManufacturerModelName($manufacturerModelName);
		$this->softwareName = ($softwareName===NULL) ? NULL : $this->validateSoftwareName($softwareName);
		$this->asMaintainedEntity = ($asMaintainedEntity===NULL) ? NULL : $this->validateAsMaintainedEntity($asMaintainedEntity);
		$this->nullFlavor = ($nullFlavor===NULL) ? NULL : $this->validateNullFlavor($nullFlavor);
		$this->classCode = ($classCode===NULL) ? NULL : $this->validateClassCode($classCode);
		$this->determinerCode = ($determinerCode===NULL) ? NULL : $this->validateDeterminerCode($determinerCode);
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
		if ( ! empty($realmCode) ) {
			foreach ($realmCode as $entry) {
			}
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
		if ( ! empty($templateId) ) {
			foreach ($templateId as $entry) {
			}
		}
	
		return $templateId;
	}

	public function addTemplateId($templateId) {
		$this->templateId[] = $this->validateTemplateIdType($templateId);
	}

	protected function validateTemplateIdType($templateId) {
	
		return $templateId;
	}

	public function getCode($autoCreate = TRUE) {
		if ($this->code===NULL && $autoCreate && ! isset($this->_overrides['code']) ) {
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

	public function getManufacturerModelName($autoCreate = TRUE) {
		if ($this->manufacturerModelName===NULL && $autoCreate && ! isset($this->_overrides['manufacturerModelName']) ) {
			$this->manufacturerModelName = $this->createManufacturerModelName();
		}
		return $this->manufacturerModelName;
	}
	
	protected function createManufacturerModelName() {
		return NULL;
	}

	public function setManufacturerModelName($manufacturerModelName) {
		$this->manufacturerModelName = $this->validateManufacturerModelName($manufacturerModelName);
	}

	protected function validateManufacturerModelName($manufacturerModelName) {
	
		return $manufacturerModelName;
	}

	public function getSoftwareName($autoCreate = TRUE) {
		if ($this->softwareName===NULL && $autoCreate && ! isset($this->_overrides['softwareName']) ) {
			$this->softwareName = $this->createSoftwareName();
		}
		return $this->softwareName;
	}
	
	protected function createSoftwareName() {
		return NULL;
	}

	public function setSoftwareName($softwareName) {
		$this->softwareName = $this->validateSoftwareName($softwareName);
	}

	protected function validateSoftwareName($softwareName) {
	
		return $softwareName;
	}

	public function getAsMaintainedEntity($autoCreate = TRUE) {
		if ($this->asMaintainedEntity===NULL && $autoCreate && ! isset($this->_overrides['asMaintainedEntity']) ) {
			$this->asMaintainedEntity = $this->createAsMaintainedEntity();
		}
		return $this->asMaintainedEntity;
	}
	
	protected function createAsMaintainedEntity() {
		return array();
	}

	public function setAsMaintainedEntity($asMaintainedEntity) {
		$this->asMaintainedEntity = $this->validateAsMaintainedEntity($asMaintainedEntity);
	}

	protected function validateAsMaintainedEntity($asMaintainedEntity) {
		$count = count($asMaintainedEntity);
		if ($count < 0) {
			throw new \Exception(sprintf('Supplied %s array has less than the required number (%d) of entries.', 'asMaintainedEntity', 0));
		}
		if ( ! empty($asMaintainedEntity) ) {
			foreach ($asMaintainedEntity as $entry) {
			}
		}
	
		return $asMaintainedEntity;
	}

	public function addAsMaintainedEntity($asMaintainedEntity) {
		$this->asMaintainedEntity[] = $this->validateAsMaintainedEntityType($asMaintainedEntity);
	}

	protected function validateAsMaintainedEntityType($asMaintainedEntity) {
	
		return $asMaintainedEntity;
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

	public function getClassCode($autoCreate = TRUE) {
		if ($this->classCode===NULL && $autoCreate && ! isset($this->_overrides['classCode']) ) {
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

	public function getDeterminerCode($autoCreate = TRUE) {
		if ($this->determinerCode===NULL && $autoCreate && ! isset($this->_overrides['determinerCode']) ) {
			$this->determinerCode = $this->createDeterminerCode();
		}
		return $this->determinerCode;
	}
	
	protected function createDeterminerCode() {
		return NULL;
	}

	public function setDeterminerCode($determinerCode) {
		$this->determinerCode = $this->validateDeterminerCode($determinerCode);
	}

	protected function validateDeterminerCode($determinerCode) {
	
		return $determinerCode;
	}
} // end class POCDMT000040.AuthoringDevice
