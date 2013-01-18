<?php
namespace hl7_org\v3;



/**
 * @XmlNamespaces ({
 *	@XmlNamespace(url="urn:hl7-org:v3", prefix="")
 * })
 * @XmlEntity	(xml="POCD_MT000040.AssignedEntity")
 */
class POCDMT000040.AssignedEntity {
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
	 * @XmlElement	(type="\hl7_org\v3\CE", name="code")
	 */
	protected $code;

	/**
	 * @XmlElement	(type="\hl7_org\v3\AD", collection="true", name="addr")
	 */
	protected $addr;

	/**
	 * @XmlElement	(type="\hl7_org\v3\TEL", collection="true", name="telecom")
	 */
	protected $telecom;

	/**
	 * @XmlElement	(type="\hl7_org\v3\POCDMT000040.Person", name="assignedPerson")
	 */
	protected $assignedPerson;

	/**
	 * @XmlElement	(type="\hl7_org\v3\POCDMT000040.Organization", name="representedOrganization")
	 */
	protected $representedOrganization;

	/**
	 * @XmlAttribute	(type="string", name="nullFlavor")
	 */
	protected $nullFlavor;

	/**
	 * @XmlAttribute	(type="string", name="classCode")
	 */
	protected $classCode;

	public function __construct($realmCode = NULL, $typeId = NULL, $templateId = NULL, $id = NULL, $code = NULL, $addr = NULL, $telecom = NULL, $assignedPerson = NULL, $representedOrganization = NULL, $nullFlavor = NULL, $classCode = NULL) {
		$this->realmCode = ($realmCode===NULL) ? NULL : $this->validateRealmCode($realmCode);
		$this->typeId = ($typeId===NULL) ? NULL : $this->validateTypeId($typeId);
		$this->templateId = ($templateId===NULL) ? NULL : $this->validateTemplateId($templateId);
		$this->id = ($id===NULL) ? NULL : $this->validateId($id);
		$this->code = ($code===NULL) ? NULL : $this->validateCode($code);
		$this->addr = ($addr===NULL) ? NULL : $this->validateAddr($addr);
		$this->telecom = ($telecom===NULL) ? NULL : $this->validateTelecom($telecom);
		$this->assignedPerson = ($assignedPerson===NULL) ? NULL : $this->validateAssignedPerson($assignedPerson);
		$this->representedOrganization = ($representedOrganization===NULL) ? NULL : $this->validateRepresentedOrganization($representedOrganization);
		$this->nullFlavor = ($nullFlavor===NULL) ? NULL : $this->validateNullFlavor($nullFlavor);
		$this->classCode = ($classCode===NULL) ? NULL : $this->validateClassCode($classCode);
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
		if ( ! $id instanceof \hl7_org\v3\II ) {
			$id = new \hl7_org\v3\II ($id);
		}
		$count = count($id);
		if ($count < 1) {
			throw new \Exception(sprintf('Supplied %s array has less than the required number (%d) of entries.', 'id', 1));
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
		return new \hl7_org\v3\CE();
	}

	public function setCode($code) {
		$this->code = $this->validateCode($code);
	}

	protected function validateCode($code) {
		if ( ! $code instanceof \hl7_org\v3\CE  && ! is_null($code) ) {
			$code = new \hl7_org\v3\CE ($code);
		}
	
		return $code;
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
		if ( ! $addr instanceof \hl7_org\v3\AD  && ! is_null($addr) ) {
			$addr = new \hl7_org\v3\AD ($addr);
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
		if ( ! $telecom instanceof \hl7_org\v3\TEL  && ! is_null($telecom) ) {
			$telecom = new \hl7_org\v3\TEL ($telecom);
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

	public function getAssignedPerson() {
		if ($this->assignedPerson===NULL) {
			$this->assignedPerson = $this->createAssignedPerson();
		}
		return $this->assignedPerson;
	}
	
	protected function createAssignedPerson() {
		return new \hl7_org\v3\POCDMT000040.Person();
	}

	public function setAssignedPerson($assignedPerson) {
		$this->assignedPerson = $this->validateAssignedPerson($assignedPerson);
	}

	protected function validateAssignedPerson($assignedPerson) {
		if ( ! $assignedPerson instanceof \hl7_org\v3\POCDMT000040.Person  && ! is_null($assignedPerson) ) {
			$assignedPerson = new \hl7_org\v3\POCDMT000040.Person ($assignedPerson);
		}
	
		return $assignedPerson;
	}

	public function getRepresentedOrganization() {
		if ($this->representedOrganization===NULL) {
			$this->representedOrganization = $this->createRepresentedOrganization();
		}
		return $this->representedOrganization;
	}
	
	protected function createRepresentedOrganization() {
		return new \hl7_org\v3\POCDMT000040.Organization();
	}

	public function setRepresentedOrganization($representedOrganization) {
		$this->representedOrganization = $this->validateRepresentedOrganization($representedOrganization);
	}

	protected function validateRepresentedOrganization($representedOrganization) {
		if ( ! $representedOrganization instanceof \hl7_org\v3\POCDMT000040.Organization  && ! is_null($representedOrganization) ) {
			$representedOrganization = new \hl7_org\v3\POCDMT000040.Organization ($representedOrganization);
		}
	
		return $representedOrganization;
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
		return new \hl7_org\v3\RoleClassAssignedEntity();
	}

	public function setClassCode($classCode) {
		$this->classCode = $this->validateClassCode($classCode);
	}

	protected function validateClassCode($classCode) {
		if ( ! $classCode instanceof \hl7_org\v3\RoleClassAssignedEntity  && ! is_null($classCode) ) {
			$classCode = new \hl7_org\v3\RoleClassAssignedEntity ($classCode);
		}
	
		return $classCode;
	}
} // end class POCDMT000040.AssignedEntity
