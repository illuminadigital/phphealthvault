<?php
namespace hl7_org\v3;



/**
 * @XmlNamespaces ({
 *	@XmlNamespace(url="urn:hl7-org:v3", prefix="")
 * })
 * @XmlEntity	(xml="POCD_MT000040.SubjectPerson")
 */
class POCDMT000040.SubjectPerson {
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
	 * @XmlElement	(type="\hl7_org\v3\PN", collection="true", name="name")
	 */
	protected $name;

	/**
	 * @XmlElement	(type="\hl7_org\v3\CE", name="administrativeGenderCode")
	 */
	protected $administrativeGenderCode;

	/**
	 * @XmlElement	(type="\hl7_org\v3\TS", name="birthTime")
	 */
	protected $birthTime;

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

	public function __construct($realmCode = NULL, $typeId = NULL, $templateId = NULL, $name = NULL, $administrativeGenderCode = NULL, $birthTime = NULL, $nullFlavor = NULL, $classCode = NULL, $determinerCode = NULL) {
		$this->realmCode = ($realmCode===NULL) ? NULL : $this->validateRealmCode($realmCode);
		$this->typeId = ($typeId===NULL) ? NULL : $this->validateTypeId($typeId);
		$this->templateId = ($templateId===NULL) ? NULL : $this->validateTemplateId($templateId);
		$this->name = ($name===NULL) ? NULL : $this->validateName($name);
		$this->administrativeGenderCode = ($administrativeGenderCode===NULL) ? NULL : $this->validateAdministrativeGenderCode($administrativeGenderCode);
		$this->birthTime = ($birthTime===NULL) ? NULL : $this->validateBirthTime($birthTime);
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
		if ( ! $name instanceof \hl7_org\v3\PN  && ! is_null($name) ) {
			$name = new \hl7_org\v3\PN ($name);
		}
		$count = count($name);
		if ($count < 0) {
			throw new \Exception(sprintf('Supplied %s array has less than the required number (%d) of entries.', 'name', 0));
		}
		foreach ($name as $entry) {
			if (!($entry instanceof PN)) {
				throw new \Exception(sprintf('Supplied %s value was not %s', 'name', 'PN'));
			}
		}
	
		return $name;
	}

	public function addName($name) {
		$this->name[] = $name;
	}

	public function getAdministrativeGenderCode() {
		if ($this->administrativeGenderCode===NULL) {
			$this->administrativeGenderCode = $this->createAdministrativeGenderCode();
		}
		return $this->administrativeGenderCode;
	}
	
	protected function createAdministrativeGenderCode() {
		return new \hl7_org\v3\CE();
	}

	public function setAdministrativeGenderCode($administrativeGenderCode) {
		$this->administrativeGenderCode = $this->validateAdministrativeGenderCode($administrativeGenderCode);
	}

	protected function validateAdministrativeGenderCode($administrativeGenderCode) {
		if ( ! $administrativeGenderCode instanceof \hl7_org\v3\CE  && ! is_null($administrativeGenderCode) ) {
			$administrativeGenderCode = new \hl7_org\v3\CE ($administrativeGenderCode);
		}
	
		return $administrativeGenderCode;
	}

	public function getBirthTime() {
		if ($this->birthTime===NULL) {
			$this->birthTime = $this->createBirthTime();
		}
		return $this->birthTime;
	}
	
	protected function createBirthTime() {
		return new \hl7_org\v3\TS();
	}

	public function setBirthTime($birthTime) {
		$this->birthTime = $this->validateBirthTime($birthTime);
	}

	protected function validateBirthTime($birthTime) {
		if ( ! $birthTime instanceof \hl7_org\v3\TS  && ! is_null($birthTime) ) {
			$birthTime = new \hl7_org\v3\TS ($birthTime);
		}
	
		return $birthTime;
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
		return new \hl7_org\v3\EntityClass();
	}

	public function setClassCode($classCode) {
		$this->classCode = $this->validateClassCode($classCode);
	}

	protected function validateClassCode($classCode) {
		if ( ! $classCode instanceof \hl7_org\v3\EntityClass  && ! is_null($classCode) ) {
			$classCode = new \hl7_org\v3\EntityClass ($classCode);
		}
	
		return $classCode;
	}

	public function getDeterminerCode() {
		if ($this->determinerCode===NULL) {
			$this->determinerCode = $this->createDeterminerCode();
		}
		return $this->determinerCode;
	}
	
	protected function createDeterminerCode() {
		return new \hl7_org\v3\EntityDeterminer();
	}

	public function setDeterminerCode($determinerCode) {
		$this->determinerCode = $this->validateDeterminerCode($determinerCode);
	}

	protected function validateDeterminerCode($determinerCode) {
		if ( ! $determinerCode instanceof \hl7_org\v3\EntityDeterminer  && ! is_null($determinerCode) ) {
			$determinerCode = new \hl7_org\v3\EntityDeterminer ($determinerCode);
		}
	
		return $determinerCode;
	}
} // end class POCDMT000040.SubjectPerson
