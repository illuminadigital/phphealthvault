<?php
namespace hl7_org\v3;



/**
 * @XmlNamespaces ({
 *	@XmlNamespace(url="urn:hl7-org:v3", prefix="")
 * })
 * @XmlEntity	(xml="POCD_MT000040.Organization")
 */
class POCDMT000040.Organization {
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
	 * @XmlElement	(type="\org\w3\www\_2001\XMLSchema\II", collection="true", name="id")
	 */
	protected $id;

	/**
	 * @XmlElement	(type="\org\w3\www\_2001\XMLSchema\ON", collection="true", name="name")
	 */
	protected $name;

	/**
	 * @XmlElement	(type="\org\w3\www\_2001\XMLSchema\TEL", collection="true", name="telecom")
	 */
	protected $telecom;

	/**
	 * @XmlElement	(type="\org\w3\www\_2001\XMLSchema\AD", collection="true", name="addr")
	 */
	protected $addr;

	/**
	 * @XmlElement	(type="\org\w3\www\_2001\XMLSchema\CE", name="standardIndustryClassCode")
	 */
	protected $standardIndustryClassCode;

	/**
	 * @XmlElement	(type="\org\w3\www\_2001\XMLSchema\POCDMT000040.OrganizationPartOf", name="asOrganizationPartOf")
	 */
	protected $asOrganizationPartOf;

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

	public function __construct($realmCode = NULL, $typeId = NULL, $templateId = NULL, $id = NULL, $name = NULL, $telecom = NULL, $addr = NULL, $standardIndustryClassCode = NULL, $asOrganizationPartOf = NULL, $nullFlavor = NULL, $classCode = NULL, $determinerCode = NULL) {
		$this->realmCode = ($realmCode===NULL) ? NULL : $this->validateRealmCode($realmCode);
		$this->typeId = ($typeId===NULL) ? NULL : $this->validateTypeId($typeId);
		$this->templateId = ($templateId===NULL) ? NULL : $this->validateTemplateId($templateId);
		$this->id = ($id===NULL) ? NULL : $this->validateId($id);
		$this->name = ($name===NULL) ? NULL : $this->validateName($name);
		$this->telecom = ($telecom===NULL) ? NULL : $this->validateTelecom($telecom);
		$this->addr = ($addr===NULL) ? NULL : $this->validateAddr($addr);
		$this->standardIndustryClassCode = ($standardIndustryClassCode===NULL) ? NULL : $this->validateStandardIndustryClassCode($standardIndustryClassCode);
		$this->asOrganizationPartOf = ($asOrganizationPartOf===NULL) ? NULL : $this->validateAsOrganizationPartOf($asOrganizationPartOf);
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

	public function getId($autoCreate = TRUE) {
		if ($this->id===NULL && $autoCreate && ! isset($this->_overrides['id']) ) {
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

	public function getName($autoCreate = TRUE) {
		if ($this->name===NULL && $autoCreate && ! isset($this->_overrides['name']) ) {
			$this->name = $this->createName();
		}
		return $this->name;
	}
	
	protected function createName() {
		return array();
	}

	public function setName($name) {
		$this->name = $this->validateName($name);
	}

	protected function validateName($name) {
		$count = count($name);
		if ($count < 0) {
			throw new \Exception(sprintf('Supplied %s array has less than the required number (%d) of entries.', 'name', 0));
		}
		foreach ($name as $entry) {
		}
	
		return $name;
	}

	public function addName($name) {
		$this->name[] = $this->validateNameType($name);
	}

	protected function validateNameType($name) {
	
		return $name;
	}

	public function getTelecom($autoCreate = TRUE) {
		if ($this->telecom===NULL && $autoCreate && ! isset($this->_overrides['telecom']) ) {
			$this->telecom = $this->createTelecom();
		}
		return $this->telecom;
	}
	
	protected function createTelecom() {
		return array();
	}

	public function setTelecom($telecom) {
		$this->telecom = $this->validateTelecom($telecom);
	}

	protected function validateTelecom($telecom) {
		$count = count($telecom);
		if ($count < 0) {
			throw new \Exception(sprintf('Supplied %s array has less than the required number (%d) of entries.', 'telecom', 0));
		}
		foreach ($telecom as $entry) {
		}
	
		return $telecom;
	}

	public function addTelecom($telecom) {
		$this->telecom[] = $this->validateTelecomType($telecom);
	}

	protected function validateTelecomType($telecom) {
	
		return $telecom;
	}

	public function getAddr($autoCreate = TRUE) {
		if ($this->addr===NULL && $autoCreate && ! isset($this->_overrides['addr']) ) {
			$this->addr = $this->createAddr();
		}
		return $this->addr;
	}
	
	protected function createAddr() {
		return array();
	}

	public function setAddr($addr) {
		$this->addr = $this->validateAddr($addr);
	}

	protected function validateAddr($addr) {
		$count = count($addr);
		if ($count < 0) {
			throw new \Exception(sprintf('Supplied %s array has less than the required number (%d) of entries.', 'addr', 0));
		}
		foreach ($addr as $entry) {
		}
	
		return $addr;
	}

	public function addAddr($addr) {
		$this->addr[] = $this->validateAddrType($addr);
	}

	protected function validateAddrType($addr) {
	
		return $addr;
	}

	public function getStandardIndustryClassCode($autoCreate = TRUE) {
		if ($this->standardIndustryClassCode===NULL && $autoCreate && ! isset($this->_overrides['standardIndustryClassCode']) ) {
			$this->standardIndustryClassCode = $this->createStandardIndustryClassCode();
		}
		return $this->standardIndustryClassCode;
	}
	
	protected function createStandardIndustryClassCode() {
		return NULL;
	}

	public function setStandardIndustryClassCode($standardIndustryClassCode) {
		$this->standardIndustryClassCode = $this->validateStandardIndustryClassCode($standardIndustryClassCode);
	}

	protected function validateStandardIndustryClassCode($standardIndustryClassCode) {
	
		return $standardIndustryClassCode;
	}

	public function getAsOrganizationPartOf($autoCreate = TRUE) {
		if ($this->asOrganizationPartOf===NULL && $autoCreate && ! isset($this->_overrides['asOrganizationPartOf']) ) {
			$this->asOrganizationPartOf = $this->createAsOrganizationPartOf();
		}
		return $this->asOrganizationPartOf;
	}
	
	protected function createAsOrganizationPartOf() {
		return NULL;
	}

	public function setAsOrganizationPartOf($asOrganizationPartOf) {
		$this->asOrganizationPartOf = $this->validateAsOrganizationPartOf($asOrganizationPartOf);
	}

	protected function validateAsOrganizationPartOf($asOrganizationPartOf) {
	
		return $asOrganizationPartOf;
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
} // end class POCDMT000040.Organization
