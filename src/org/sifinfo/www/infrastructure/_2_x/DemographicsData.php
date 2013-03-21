<?php
namespace org\sifinfo\www\infrastructure\_2_x;



/**
 * @XmlNamespaces ({
 *	@XmlNamespace(url="http://www.sifinfo.org/infrastructure/2.x", prefix="")
 * })
 * @XmlEntity	(xml="DemographicsData")
 */
class DemographicsData {
	/**
	 */

	/**
	 * List of manually overridden properties that should not be re-generated automatically
	 * @var array
	 */
	protected $_overrides = array();


	/**
	 * @XmlElement	(type="\org\sifinfo\www\infrastructure\_2_x\RaceListType", name="RaceList")
	 */
	protected $raceList;

	/**
	 * @XmlElement	(type="\org\sifinfo\www\infrastructure\_2_x\GenderType", name="Gender")
	 */
	protected $gender;

	/**
	 * @XmlElement	(type="\org\sifinfo\www\infrastructure\_2_x\BirthDateType", name="BirthDate")
	 */
	protected $birthDate;

	/**
	 * @XmlElement	(type="\org\sifinfo\www\infrastructure\_2_x\EnglishProficiencyType", name="EnglishProficiency")
	 */
	protected $englishProficiency;

	/**
	 * @XmlElement	(type="\org\sifinfo\www\infrastructure\_2_x\LanguageListType", name="LanguageList")
	 */
	protected $languageList;

	/**
	 * @XmlElement	(type="\org\sifinfo\www\infrastructure\_2_x\HispanicLatinoType", name="HispanicLatino")
	 */
	protected $hispanicLatino;

	/**
	 * @XmlElement	(type="\org\sifinfo\www\infrastructure\_2_x\CountryType", name="CountryOfBirth")
	 */
	protected $countryOfBirth;

	/**
	 * @XmlElement	(type="\org\sifinfo\www\infrastructure\_2_x\DwellingArrangement", name="DwellingArrangement")
	 */
	protected $dwellingArrangement;

	public function __construct($raceList = NULL, $gender = NULL, $birthDate = NULL, $englishProficiency = NULL, $languageList = NULL, $hispanicLatino = NULL, $countryOfBirth = NULL, $dwellingArrangement = NULL) {
		$this->raceList = ($raceList===NULL) ? NULL : $this->validateRaceList($raceList);
		$this->gender = ($gender===NULL) ? NULL : $this->validateGender($gender);
		$this->birthDate = ($birthDate===NULL) ? NULL : $this->validateBirthDate($birthDate);
		$this->englishProficiency = ($englishProficiency===NULL) ? NULL : $this->validateEnglishProficiency($englishProficiency);
		$this->languageList = ($languageList===NULL) ? NULL : $this->validateLanguageList($languageList);
		$this->hispanicLatino = ($hispanicLatino===NULL) ? NULL : $this->validateHispanicLatino($hispanicLatino);
		$this->countryOfBirth = ($countryOfBirth===NULL) ? NULL : $this->validateCountryOfBirth($countryOfBirth);
		$this->dwellingArrangement = ($dwellingArrangement===NULL) ? NULL : $this->validateDwellingArrangement($dwellingArrangement);
	}

	public function getRaceList($autoCreate = TRUE) {
		if ($this->raceList===NULL && $autoCreate && ! isset($this->_overrides['raceList']) ) {
			$this->raceList = $this->createRaceList();
		}
		return $this->raceList;
	}
	
	protected function createRaceList() {
		return new \org\sifinfo\www\infrastructure\_2_x\RaceListType();
	}

	public function setRaceList($raceList) {
		$this->raceList = $this->validateRaceList($raceList);
	}

	protected function validateRaceList($raceList) {
		if ( $raceList === FALSE ) {
			$this->_overrides['raceList'] = TRUE;
			return NULL;
		}

		if ( ! $raceList instanceof \org\sifinfo\www\infrastructure\_2_x\RaceListType  && ! is_null($raceList) ) {
			$raceList = new \org\sifinfo\www\infrastructure\_2_x\RaceListType ($raceList);
		}

		unset ($this->_overrides['raceList']);
	
		return $raceList;
	}

	public function getGender($autoCreate = TRUE) {
		if ($this->gender===NULL && $autoCreate && ! isset($this->_overrides['gender']) ) {
			$this->gender = $this->createGender();
		}
		return $this->gender;
	}
	
	protected function createGender() {
		return NULL;
	}

	public function setGender($gender) {
		$this->gender = $this->validateGender($gender);
	}

	protected function validateGender($gender) {
	
		return $gender;
	}

	public function getBirthDate($autoCreate = TRUE) {
		if ($this->birthDate===NULL && $autoCreate && ! isset($this->_overrides['birthDate']) ) {
			$this->birthDate = $this->createBirthDate();
		}
		return $this->birthDate;
	}
	
	protected function createBirthDate() {
		return NULL;
	}

	public function setBirthDate($birthDate) {
		$this->birthDate = $this->validateBirthDate($birthDate);
	}

	protected function validateBirthDate($birthDate) {
	
		return $birthDate;
	}

	public function getEnglishProficiency($autoCreate = TRUE) {
		if ($this->englishProficiency===NULL && $autoCreate && ! isset($this->_overrides['englishProficiency']) ) {
			$this->englishProficiency = $this->createEnglishProficiency();
		}
		return $this->englishProficiency;
	}
	
	protected function createEnglishProficiency() {
		return new \org\sifinfo\www\infrastructure\_2_x\EnglishProficiencyType();
	}

	public function setEnglishProficiency($englishProficiency) {
		$this->englishProficiency = $this->validateEnglishProficiency($englishProficiency);
	}

	protected function validateEnglishProficiency($englishProficiency) {
		if ( $englishProficiency === FALSE ) {
			$this->_overrides['englishProficiency'] = TRUE;
			return NULL;
		}

		if ( ! $englishProficiency instanceof \org\sifinfo\www\infrastructure\_2_x\EnglishProficiencyType  && ! is_null($englishProficiency) ) {
			$englishProficiency = new \org\sifinfo\www\infrastructure\_2_x\EnglishProficiencyType ($englishProficiency);
		}

		unset ($this->_overrides['englishProficiency']);
	
		return $englishProficiency;
	}

	public function getLanguageList($autoCreate = TRUE) {
		if ($this->languageList===NULL && $autoCreate && ! isset($this->_overrides['languageList']) ) {
			$this->languageList = $this->createLanguageList();
		}
		return $this->languageList;
	}
	
	protected function createLanguageList() {
		return new \org\sifinfo\www\infrastructure\_2_x\LanguageListType();
	}

	public function setLanguageList($languageList) {
		$this->languageList = $this->validateLanguageList($languageList);
	}

	protected function validateLanguageList($languageList) {
		if ( $languageList === FALSE ) {
			$this->_overrides['languageList'] = TRUE;
			return NULL;
		}

		if ( ! $languageList instanceof \org\sifinfo\www\infrastructure\_2_x\LanguageListType  && ! is_null($languageList) ) {
			$languageList = new \org\sifinfo\www\infrastructure\_2_x\LanguageListType ($languageList);
		}

		unset ($this->_overrides['languageList']);
	
		return $languageList;
	}

	public function getHispanicLatino($autoCreate = TRUE) {
		if ($this->hispanicLatino===NULL && $autoCreate && ! isset($this->_overrides['hispanicLatino']) ) {
			$this->hispanicLatino = $this->createHispanicLatino();
		}
		return $this->hispanicLatino;
	}
	
	protected function createHispanicLatino() {
		return NULL;
	}

	public function setHispanicLatino($hispanicLatino) {
		$this->hispanicLatino = $this->validateHispanicLatino($hispanicLatino);
	}

	protected function validateHispanicLatino($hispanicLatino) {
	
		return $hispanicLatino;
	}

	public function getCountryOfBirth($autoCreate = TRUE) {
		if ($this->countryOfBirth===NULL && $autoCreate && ! isset($this->_overrides['countryOfBirth']) ) {
			$this->countryOfBirth = $this->createCountryOfBirth();
		}
		return $this->countryOfBirth;
	}
	
	protected function createCountryOfBirth() {
		return NULL;
	}

	public function setCountryOfBirth($countryOfBirth) {
		$this->countryOfBirth = $this->validateCountryOfBirth($countryOfBirth);
	}

	protected function validateCountryOfBirth($countryOfBirth) {
	
		return $countryOfBirth;
	}

	public function getDwellingArrangement($autoCreate = TRUE) {
		if ($this->dwellingArrangement===NULL && $autoCreate && ! isset($this->_overrides['dwellingArrangement']) ) {
			$this->dwellingArrangement = $this->createDwellingArrangement();
		}
		return $this->dwellingArrangement;
	}
	
	protected function createDwellingArrangement() {
		return new \org\sifinfo\www\infrastructure\_2_x\DwellingArrangement();
	}

	public function setDwellingArrangement($dwellingArrangement) {
		$this->dwellingArrangement = $this->validateDwellingArrangement($dwellingArrangement);
	}

	protected function validateDwellingArrangement($dwellingArrangement) {
		if ( $dwellingArrangement === FALSE ) {
			$this->_overrides['dwellingArrangement'] = TRUE;
			return NULL;
		}

		if ( ! $dwellingArrangement instanceof \org\sifinfo\www\infrastructure\_2_x\DwellingArrangement  && ! is_null($dwellingArrangement) ) {
			$dwellingArrangement = new \org\sifinfo\www\infrastructure\_2_x\DwellingArrangement ($dwellingArrangement);
		}

		unset ($this->_overrides['dwellingArrangement']);
	
		return $dwellingArrangement;
	}
} // end class DemographicsData
