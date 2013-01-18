<?php
namespace hl7_org\v3;



/**
 * @XmlNamespaces ({
 *	@XmlNamespace(url="urn:hl7-org:v3", prefix="")
 * })
 * @XmlEntity	(xml="POCD_MT000040.Patient")
 */
class POCDMT000040.Patient {
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
	 * @XmlElement	(type="\hl7_org\v3\II", name="id")
	 */
	protected $id;

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
	 * @XmlElement	(type="\hl7_org\v3\CE", name="maritalStatusCode")
	 */
	protected $maritalStatusCode;

	/**
	 * @XmlElement	(type="\hl7_org\v3\CE", name="religiousAffiliationCode")
	 */
	protected $religiousAffiliationCode;

	/**
	 * @XmlElement	(type="\hl7_org\v3\CE", name="raceCode")
	 */
	protected $raceCode;

	/**
	 * @XmlElement	(type="\hl7_org\v3\CE", name="ethnicGroupCode")
	 */
	protected $ethnicGroupCode;

	/**
	 * @XmlElement	(type="\hl7_org\v3\POCDMT000040.Guardian", collection="true", name="guardian")
	 */
	protected $guardian;

	/**
	 * @XmlElement	(type="\hl7_org\v3\POCDMT000040.Birthplace", name="birthplace")
	 */
	protected $birthplace;

	/**
	 * @XmlElement	(type="\hl7_org\v3\POCDMT000040.LanguageCommunication", collection="true", name="languageCommunication")
	 */
	protected $languageCommunication;

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

	public function __construct($realmCode = NULL, $typeId = NULL, $templateId = NULL, $id = NULL, $name = NULL, $administrativeGenderCode = NULL, $birthTime = NULL, $maritalStatusCode = NULL, $religiousAffiliationCode = NULL, $raceCode = NULL, $ethnicGroupCode = NULL, $guardian = NULL, $birthplace = NULL, $languageCommunication = NULL, $nullFlavor = NULL, $classCode = NULL, $determinerCode = NULL) {
		$this->realmCode = ($realmCode===NULL) ? NULL : $this->validateRealmCode($realmCode);
		$this->typeId = ($typeId===NULL) ? NULL : $this->validateTypeId($typeId);
		$this->templateId = ($templateId===NULL) ? NULL : $this->validateTemplateId($templateId);
		$this->id = ($id===NULL) ? NULL : $this->validateId($id);
		$this->name = ($name===NULL) ? NULL : $this->validateName($name);
		$this->administrativeGenderCode = ($administrativeGenderCode===NULL) ? NULL : $this->validateAdministrativeGenderCode($administrativeGenderCode);
		$this->birthTime = ($birthTime===NULL) ? NULL : $this->validateBirthTime($birthTime);
		$this->maritalStatusCode = ($maritalStatusCode===NULL) ? NULL : $this->validateMaritalStatusCode($maritalStatusCode);
		$this->religiousAffiliationCode = ($religiousAffiliationCode===NULL) ? NULL : $this->validateReligiousAffiliationCode($religiousAffiliationCode);
		$this->raceCode = ($raceCode===NULL) ? NULL : $this->validateRaceCode($raceCode);
		$this->ethnicGroupCode = ($ethnicGroupCode===NULL) ? NULL : $this->validateEthnicGroupCode($ethnicGroupCode);
		$this->guardian = ($guardian===NULL) ? NULL : $this->validateGuardian($guardian);
		$this->birthplace = ($birthplace===NULL) ? NULL : $this->validateBirthplace($birthplace);
		$this->languageCommunication = ($languageCommunication===NULL) ? NULL : $this->validateLanguageCommunication($languageCommunication);
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

	public function getId() {
		if ($this->id===NULL) {
			$this->id = $this->createId();
		}
		return $this->id;
	}
	
	protected function createId() {
		return new \hl7_org\v3\II();
	}

	public function setId($id) {
		$this->id = $this->validateId($id);
	}

	protected function validateId($id) {
		if ( ! $id instanceof \hl7_org\v3\II  && ! is_null($id) ) {
			$id = new \hl7_org\v3\II ($id);
		}
	
		return $id;
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

	public function getMaritalStatusCode() {
		if ($this->maritalStatusCode===NULL) {
			$this->maritalStatusCode = $this->createMaritalStatusCode();
		}
		return $this->maritalStatusCode;
	}
	
	protected function createMaritalStatusCode() {
		return new \hl7_org\v3\CE();
	}

	public function setMaritalStatusCode($maritalStatusCode) {
		$this->maritalStatusCode = $this->validateMaritalStatusCode($maritalStatusCode);
	}

	protected function validateMaritalStatusCode($maritalStatusCode) {
		if ( ! $maritalStatusCode instanceof \hl7_org\v3\CE  && ! is_null($maritalStatusCode) ) {
			$maritalStatusCode = new \hl7_org\v3\CE ($maritalStatusCode);
		}
	
		return $maritalStatusCode;
	}

	public function getReligiousAffiliationCode() {
		if ($this->religiousAffiliationCode===NULL) {
			$this->religiousAffiliationCode = $this->createReligiousAffiliationCode();
		}
		return $this->religiousAffiliationCode;
	}
	
	protected function createReligiousAffiliationCode() {
		return new \hl7_org\v3\CE();
	}

	public function setReligiousAffiliationCode($religiousAffiliationCode) {
		$this->religiousAffiliationCode = $this->validateReligiousAffiliationCode($religiousAffiliationCode);
	}

	protected function validateReligiousAffiliationCode($religiousAffiliationCode) {
		if ( ! $religiousAffiliationCode instanceof \hl7_org\v3\CE  && ! is_null($religiousAffiliationCode) ) {
			$religiousAffiliationCode = new \hl7_org\v3\CE ($religiousAffiliationCode);
		}
	
		return $religiousAffiliationCode;
	}

	public function getRaceCode() {
		if ($this->raceCode===NULL) {
			$this->raceCode = $this->createRaceCode();
		}
		return $this->raceCode;
	}
	
	protected function createRaceCode() {
		return new \hl7_org\v3\CE();
	}

	public function setRaceCode($raceCode) {
		$this->raceCode = $this->validateRaceCode($raceCode);
	}

	protected function validateRaceCode($raceCode) {
		if ( ! $raceCode instanceof \hl7_org\v3\CE  && ! is_null($raceCode) ) {
			$raceCode = new \hl7_org\v3\CE ($raceCode);
		}
	
		return $raceCode;
	}

	public function getEthnicGroupCode() {
		if ($this->ethnicGroupCode===NULL) {
			$this->ethnicGroupCode = $this->createEthnicGroupCode();
		}
		return $this->ethnicGroupCode;
	}
	
	protected function createEthnicGroupCode() {
		return new \hl7_org\v3\CE();
	}

	public function setEthnicGroupCode($ethnicGroupCode) {
		$this->ethnicGroupCode = $this->validateEthnicGroupCode($ethnicGroupCode);
	}

	protected function validateEthnicGroupCode($ethnicGroupCode) {
		if ( ! $ethnicGroupCode instanceof \hl7_org\v3\CE  && ! is_null($ethnicGroupCode) ) {
			$ethnicGroupCode = new \hl7_org\v3\CE ($ethnicGroupCode);
		}
	
		return $ethnicGroupCode;
	}

	public function getGuardian() {
		if ($this->guardian===NULL) {
			$this->guardian = $this->createGuardian();
		}
		return $this->guardian;
	}
	
	protected function createGuardian() {
		return array();
	}

	public function setGuardian($guardian) {
		$this->guardian = $this->validateGuardian($guardian);
	}

	protected function validateGuardian($guardian) {
		if ( ! $guardian instanceof \hl7_org\v3\POCDMT000040.Guardian  && ! is_null($guardian) ) {
			$guardian = new \hl7_org\v3\POCDMT000040.Guardian ($guardian);
		}
		$count = count($guardian);
		if ($count < 0) {
			throw new \Exception(sprintf('Supplied %s array has less than the required number (%d) of entries.', 'guardian', 0));
		}
		foreach ($guardian as $entry) {
			if (!($entry instanceof POCDMT000040.Guardian)) {
				throw new \Exception(sprintf('Supplied %s value was not %s', 'guardian', 'POCD_MT000040.Guardian'));
			}
		}
	
		return $guardian;
	}

	public function addGuardian($guardian) {
		$this->guardian[] = $guardian;
	}

	public function getBirthplace() {
		if ($this->birthplace===NULL) {
			$this->birthplace = $this->createBirthplace();
		}
		return $this->birthplace;
	}
	
	protected function createBirthplace() {
		return new \hl7_org\v3\POCDMT000040.Birthplace();
	}

	public function setBirthplace($birthplace) {
		$this->birthplace = $this->validateBirthplace($birthplace);
	}

	protected function validateBirthplace($birthplace) {
		if ( ! $birthplace instanceof \hl7_org\v3\POCDMT000040.Birthplace  && ! is_null($birthplace) ) {
			$birthplace = new \hl7_org\v3\POCDMT000040.Birthplace ($birthplace);
		}
	
		return $birthplace;
	}

	public function getLanguageCommunication() {
		if ($this->languageCommunication===NULL) {
			$this->languageCommunication = $this->createLanguageCommunication();
		}
		return $this->languageCommunication;
	}
	
	protected function createLanguageCommunication() {
		return array();
	}

	public function setLanguageCommunication($languageCommunication) {
		$this->languageCommunication = $this->validateLanguageCommunication($languageCommunication);
	}

	protected function validateLanguageCommunication($languageCommunication) {
		if ( ! $languageCommunication instanceof \hl7_org\v3\POCDMT000040.LanguageCommunication  && ! is_null($languageCommunication) ) {
			$languageCommunication = new \hl7_org\v3\POCDMT000040.LanguageCommunication ($languageCommunication);
		}
		$count = count($languageCommunication);
		if ($count < 0) {
			throw new \Exception(sprintf('Supplied %s array has less than the required number (%d) of entries.', 'languageCommunication', 0));
		}
		foreach ($languageCommunication as $entry) {
			if (!($entry instanceof POCDMT000040.LanguageCommunication)) {
				throw new \Exception(sprintf('Supplied %s value was not %s', 'languageCommunication', 'POCD_MT000040.LanguageCommunication'));
			}
		}
	
		return $languageCommunication;
	}

	public function addLanguageCommunication($languageCommunication) {
		$this->languageCommunication[] = $languageCommunication;
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
} // end class POCDMT000040.Patient
