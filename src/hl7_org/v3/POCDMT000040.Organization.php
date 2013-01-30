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
	 * @XmlElement	(type="\hl7_org\v3\ON", collection="true", name="name")
	 */
	protected $name;

	/**
	 * @XmlElement	(type="\hl7_org\v3\TEL", collection="true", name="telecom")
	 */
	protected $telecom;

	/**
	 * @XmlElement	(type="\hl7_org\v3\AD", collection="true", name="addr")
	 */
	protected $addr;

	/**
	 * @XmlElement	(type="\hl7_org\v3\CE", name="standardIndustryClassCode")
	 */
	protected $standardIndustryClassCode;

	/**
	 * @XmlElement	(type="\hl7_org\v3\POCDMT000040.OrganizationPartOf", name="asOrganizationPartOf")
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

	public function getName() {
		if ($this->name===NULL) {
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
		if ( ! is_array ($name) && ! is_null($name) ) {
			$name = array($name);
		}
		$count = count($name);
		if ($count < 0) {
			throw new \Exception(sprintf('Supplied %s array has less than the required number (%d) of entries.', 'name', 0));
		}
		foreach ($name as $entry) {
			if (!($entry instanceof ON)) {
				throw new \Exception(sprintf('Supplied %s value was not %s', 'name', 'ON'));
			}
		}
	
		return $name;
	}

	public function addName($name) {
		$this->name[] = $name;
	}

	public function getTelecom() {
		if ($this->telecom===NULL) {
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
		if ( ! is_array ($telecom) && ! is_null($telecom) ) {
			$telecom = array($telecom);
		}
		$count = count($telecom);
		if ($count < 0) {
			throw new \Exception(sprintf('Supplied %s array has less than the required number (%d) of entries.', 'telecom', 0));
		}
		foreach ($telecom as $entry) {
			if (!($entry instanceof TEL)) {
				throw new \Exception(sprintf('Supplied %s value was not %s', 'telecom', 'TEL'));
			}
		}
	
		return $telecom;
	}

	public function addTelecom($telecom) {
		$this->telecom[] = $telecom;
	}

	public function getAddr() {
		if ($this->addr===NULL) {
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
		if ( ! is_array ($addr) && ! is_null($addr) ) {
			$addr = array($addr);
		}
		$count = count($addr);
		if ($count < 0) {
			throw new \Exception(sprintf('Supplied %s array has less than the required number (%d) of entries.', 'addr', 0));
		}
		foreach ($addr as $entry) {
			if (!($entry instanceof AD)) {
				throw new \Exception(sprintf('Supplied %s value was not %s', 'addr', 'AD'));
			}
		}
	
		return $addr;
	}

	public function addAddr($addr) {
		$this->addr[] = $addr;
	}

	public function getStandardIndustryClassCode() {
		if ($this->standardIndustryClassCode===NULL) {
			$this->standardIndustryClassCode = $this->createStandardIndustryClassCode();
		}
		return $this->standardIndustryClassCode;
	}
	
	protected function createStandardIndustryClassCode() {
		return new \hl7_org\v3\CE();
	}

	public function setStandardIndustryClassCode($standardIndustryClassCode) {
		$this->standardIndustryClassCode = $this->validateStandardIndustryClassCode($standardIndustryClassCode);
	}

	protected function validateStandardIndustryClassCode($standardIndustryClassCode) {
		if ( ! $standardIndustryClassCode instanceof \hl7_org\v3\CE  && ! is_null($standardIndustryClassCode) ) {
			$standardIndustryClassCode = new \hl7_org\v3\CE ($standardIndustryClassCode);
		}
	
		return $standardIndustryClassCode;
	}

	public function getAsOrganizationPartOf() {
		if ($this->asOrganizationPartOf===NULL) {
			$this->asOrganizationPartOf = $this->createAsOrganizationPartOf();
		}
		return $this->asOrganizationPartOf;
	}
	
	protected function createAsOrganizationPartOf() {
		return new \hl7_org\v3\POCDMT000040.OrganizationPartOf();
	}

	public function setAsOrganizationPartOf($asOrganizationPartOf) {
		$this->asOrganizationPartOf = $this->validateAsOrganizationPartOf($asOrganizationPartOf);
	}

	protected function validateAsOrganizationPartOf($asOrganizationPartOf) {
		if ( ! $asOrganizationPartOf instanceof \hl7_org\v3\POCDMT000040.OrganizationPartOf  && ! is_null($asOrganizationPartOf) ) {
			$asOrganizationPartOf = new \hl7_org\v3\POCDMT000040.OrganizationPartOf ($asOrganizationPartOf);
		}
	
		return $asOrganizationPartOf;
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

	public function getDeterminerCode() {
		if ($this->determinerCode===NULL) {
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
