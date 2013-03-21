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
	 * @XmlElement	(type="\org\w3\www\_2001\XMLSchema\II", name="id")
	 */
	protected $id;

	/**
	 * @XmlElement	(type="\org\w3\www\_2001\XMLSchema\PN", collection="true", name="name")
	 */
	protected $name;

	/**
	 * @XmlElement	(type="\org\w3\www\_2001\XMLSchema\CE", name="administrativeGenderCode")
	 */
	protected $administrativeGenderCode;

	/**
	 * @XmlElement	(type="\org\w3\www\_2001\XMLSchema\TS", name="birthTime")
	 */
	protected $birthTime;

	/**
	 * @XmlElement	(type="\org\w3\www\_2001\XMLSchema\CE", name="maritalStatusCode")
	 */
	protected $maritalStatusCode;

	/**
	 * @XmlElement	(type="\org\w3\www\_2001\XMLSchema\CE", name="religiousAffiliationCode")
	 */
	protected $religiousAffiliationCode;

	/**
	 * @XmlElement	(type="\org\w3\www\_2001\XMLSchema\CE", name="raceCode")
	 */
	protected $raceCode;

	/**
	 * @XmlElement	(type="\org\w3\www\_2001\XMLSchema\CE", name="ethnicGroupCode")
	 */
	protected $ethnicGroupCode;

	/**
	 * @XmlElement	(type="\org\w3\www\_2001\XMLSchema\POCDMT000040.Guardian", collection="true", name="guardian")
	 */
	protected $guardian;

	/**
	 * @XmlElement	(type="\org\w3\www\_2001\XMLSchema\POCDMT000040.Birthplace", name="birthplace")
	 */
	protected $birthplace;

	/**
	 * @XmlElement	(type="\org\w3\www\_2001\XMLSchema\POCDMT000040.LanguageCommunication", collection="true", name="languageCommunication")
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
		return NULL;
	}

	public function setId($id) {
		$this->id = $this->validateId($id);
	}

	protected function validateId($id) {
	
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

	public function getAdministrativeGenderCode($autoCreate = TRUE) {
		if ($this->administrativeGenderCode===NULL && $autoCreate && ! isset($this->_overrides['administrativeGenderCode']) ) {
			$this->administrativeGenderCode = $this->createAdministrativeGenderCode();
		}
		return $this->administrativeGenderCode;
	}
	
	protected function createAdministrativeGenderCode() {
		return NULL;
	}

	public function setAdministrativeGenderCode($administrativeGenderCode) {
		$this->administrativeGenderCode = $this->validateAdministrativeGenderCode($administrativeGenderCode);
	}

	protected function validateAdministrativeGenderCode($administrativeGenderCode) {
	
		return $administrativeGenderCode;
	}

	public function getBirthTime($autoCreate = TRUE) {
		if ($this->birthTime===NULL && $autoCreate && ! isset($this->_overrides['birthTime']) ) {
			$this->birthTime = $this->createBirthTime();
		}
		return $this->birthTime;
	}
	
	protected function createBirthTime() {
		return NULL;
	}

	public function setBirthTime($birthTime) {
		$this->birthTime = $this->validateBirthTime($birthTime);
	}

	protected function validateBirthTime($birthTime) {
	
		return $birthTime;
	}

	public function getMaritalStatusCode($autoCreate = TRUE) {
		if ($this->maritalStatusCode===NULL && $autoCreate && ! isset($this->_overrides['maritalStatusCode']) ) {
			$this->maritalStatusCode = $this->createMaritalStatusCode();
		}
		return $this->maritalStatusCode;
	}
	
	protected function createMaritalStatusCode() {
		return NULL;
	}

	public function setMaritalStatusCode($maritalStatusCode) {
		$this->maritalStatusCode = $this->validateMaritalStatusCode($maritalStatusCode);
	}

	protected function validateMaritalStatusCode($maritalStatusCode) {
	
		return $maritalStatusCode;
	}

	public function getReligiousAffiliationCode($autoCreate = TRUE) {
		if ($this->religiousAffiliationCode===NULL && $autoCreate && ! isset($this->_overrides['religiousAffiliationCode']) ) {
			$this->religiousAffiliationCode = $this->createReligiousAffiliationCode();
		}
		return $this->religiousAffiliationCode;
	}
	
	protected function createReligiousAffiliationCode() {
		return NULL;
	}

	public function setReligiousAffiliationCode($religiousAffiliationCode) {
		$this->religiousAffiliationCode = $this->validateReligiousAffiliationCode($religiousAffiliationCode);
	}

	protected function validateReligiousAffiliationCode($religiousAffiliationCode) {
	
		return $religiousAffiliationCode;
	}

	public function getRaceCode($autoCreate = TRUE) {
		if ($this->raceCode===NULL && $autoCreate && ! isset($this->_overrides['raceCode']) ) {
			$this->raceCode = $this->createRaceCode();
		}
		return $this->raceCode;
	}
	
	protected function createRaceCode() {
		return NULL;
	}

	public function setRaceCode($raceCode) {
		$this->raceCode = $this->validateRaceCode($raceCode);
	}

	protected function validateRaceCode($raceCode) {
	
		return $raceCode;
	}

	public function getEthnicGroupCode($autoCreate = TRUE) {
		if ($this->ethnicGroupCode===NULL && $autoCreate && ! isset($this->_overrides['ethnicGroupCode']) ) {
			$this->ethnicGroupCode = $this->createEthnicGroupCode();
		}
		return $this->ethnicGroupCode;
	}
	
	protected function createEthnicGroupCode() {
		return NULL;
	}

	public function setEthnicGroupCode($ethnicGroupCode) {
		$this->ethnicGroupCode = $this->validateEthnicGroupCode($ethnicGroupCode);
	}

	protected function validateEthnicGroupCode($ethnicGroupCode) {
	
		return $ethnicGroupCode;
	}

	public function getGuardian($autoCreate = TRUE) {
		if ($this->guardian===NULL && $autoCreate && ! isset($this->_overrides['guardian']) ) {
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
		$count = count($guardian);
		if ($count < 0) {
			throw new \Exception(sprintf('Supplied %s array has less than the required number (%d) of entries.', 'guardian', 0));
		}
		foreach ($guardian as $entry) {
		}
	
		return $guardian;
	}

	public function addGuardian($guardian) {
		$this->guardian[] = $this->validateGuardianType($guardian);
	}

	protected function validateGuardianType($guardian) {
	
		return $guardian;
	}

	public function getBirthplace($autoCreate = TRUE) {
		if ($this->birthplace===NULL && $autoCreate && ! isset($this->_overrides['birthplace']) ) {
			$this->birthplace = $this->createBirthplace();
		}
		return $this->birthplace;
	}
	
	protected function createBirthplace() {
		return NULL;
	}

	public function setBirthplace($birthplace) {
		$this->birthplace = $this->validateBirthplace($birthplace);
	}

	protected function validateBirthplace($birthplace) {
	
		return $birthplace;
	}

	public function getLanguageCommunication($autoCreate = TRUE) {
		if ($this->languageCommunication===NULL && $autoCreate && ! isset($this->_overrides['languageCommunication']) ) {
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
		$count = count($languageCommunication);
		if ($count < 0) {
			throw new \Exception(sprintf('Supplied %s array has less than the required number (%d) of entries.', 'languageCommunication', 0));
		}
		foreach ($languageCommunication as $entry) {
		}
	
		return $languageCommunication;
	}

	public function addLanguageCommunication($languageCommunication) {
		$this->languageCommunication[] = $this->validateLanguageCommunicationType($languageCommunication);
	}

	protected function validateLanguageCommunicationType($languageCommunication) {
	
		return $languageCommunication;
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
} // end class POCDMT000040.Patient
