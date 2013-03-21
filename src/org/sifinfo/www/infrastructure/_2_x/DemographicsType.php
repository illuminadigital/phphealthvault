<?php
namespace org\sifinfo\www\infrastructure\_2_x;



/**
 * @XmlNamespaces ({
 *	@XmlNamespace(url="http://www.sifinfo.org/infrastructure/2.x", prefix="")
 * })
 * @XmlEntity	(xml="DemographicsType")
 */
class DemographicsType {
	/**
	 * Demographics information about the student, contact, staff member, etc. This element occurs within objects such asStudentPersonal, StudentContact, etc.
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
	 * @XmlElement	(type="\org\sifinfo\www\infrastructure\_2_x\HispanicLatinoType", name="HispanicLatino")
	 */
	protected $hispanicLatino;

	/**
	 * @XmlElement	(type="\org\sifinfo\www\infrastructure\_2_x\GenderType", name="Gender")
	 */
	protected $gender;

	/**
	 * @XmlElement	(type="\org\sifinfo\www\infrastructure\_2_x\BirthDateType", name="BirthDate")
	 */
	protected $birthDate;

	/**
	 * @XmlElement	(type="\org\sifinfo\www\infrastructure\_2_x\NCES0315BirthdateVerificationType", name="BirthDateVerification")
	 */
	protected $birthDateVerification;

	/**
	 * @XmlText	(type="string", name="PlaceOfBirth")
	 */
	protected $placeOfBirth;

	/**
	 * @XmlText	(type="string", name="CountyOfBirth")
	 */
	protected $countyOfBirth;

	/**
	 * @XmlElement	(type="\org\sifinfo\www\infrastructure\_2_x\StateProvinceType", name="StateOfBirth")
	 */
	protected $stateOfBirth;

	/**
	 * @XmlElement	(type="\org\sifinfo\www\infrastructure\_2_x\CountryType", name="CountryOfBirth")
	 */
	protected $countryOfBirth;

	/**
	 * @XmlElement	(type="\org\sifinfo\www\infrastructure\_2_x\CountriesOfCitizenship", name="CountriesOfCitizenship")
	 */
	protected $countriesOfCitizenship;

	/**
	 * @XmlElement	(type="\org\sifinfo\www\infrastructure\_2_x\CountriesOfResidency", name="CountriesOfResidency")
	 */
	protected $countriesOfResidency;

	/**
	 * @XmlText	(type="string", name="CountryArrivalDate")
	 */
	protected $countryArrivalDate;

	/**
	 * @XmlElement	(type="\org\sifinfo\www\infrastructure\_2_x\NCES0322CitizenshipStatusType", name="CitizenshipStatus")
	 */
	protected $citizenshipStatus;

	/**
	 * @XmlElement	(type="\org\sifinfo\www\infrastructure\_2_x\EnglishProficiencyType", name="EnglishProficiency")
	 */
	protected $englishProficiency;

	/**
	 * @XmlElement	(type="\org\sifinfo\www\infrastructure\_2_x\LanguageListType", name="LanguageList")
	 */
	protected $languageList;

	/**
	 * @XmlElement	(type="\org\sifinfo\www\infrastructure\_2_x\DwellingArrangement", name="DwellingArrangement")
	 */
	protected $dwellingArrangement;

	/**
	 * @XmlElement	(type="\org\sifinfo\www\infrastructure\_2_x\NCES0330MaritalStatusType", name="MaritalStatus")
	 */
	protected $maritalStatus;

	public function __construct($raceList = NULL, $hispanicLatino = NULL, $gender = NULL, $birthDate = NULL, $birthDateVerification = NULL, $placeOfBirth = NULL, $countyOfBirth = NULL, $stateOfBirth = NULL, $countryOfBirth = NULL, $countriesOfCitizenship = NULL, $countriesOfResidency = NULL, $countryArrivalDate = NULL, $citizenshipStatus = NULL, $englishProficiency = NULL, $languageList = NULL, $dwellingArrangement = NULL, $maritalStatus = NULL) {
		$this->raceList = ($raceList===NULL) ? NULL : $this->validateRaceList($raceList);
		$this->hispanicLatino = ($hispanicLatino===NULL) ? NULL : $this->validateHispanicLatino($hispanicLatino);
		$this->gender = ($gender===NULL) ? NULL : $this->validateGender($gender);
		$this->birthDate = ($birthDate===NULL) ? NULL : $this->validateBirthDate($birthDate);
		$this->birthDateVerification = ($birthDateVerification===NULL) ? NULL : $this->validateBirthDateVerification($birthDateVerification);
		$this->placeOfBirth = ($placeOfBirth===NULL) ? NULL : $this->validatePlaceOfBirth($placeOfBirth);
		$this->countyOfBirth = ($countyOfBirth===NULL) ? NULL : $this->validateCountyOfBirth($countyOfBirth);
		$this->stateOfBirth = ($stateOfBirth===NULL) ? NULL : $this->validateStateOfBirth($stateOfBirth);
		$this->countryOfBirth = ($countryOfBirth===NULL) ? NULL : $this->validateCountryOfBirth($countryOfBirth);
		$this->countriesOfCitizenship = ($countriesOfCitizenship===NULL) ? NULL : $this->validateCountriesOfCitizenship($countriesOfCitizenship);
		$this->countriesOfResidency = ($countriesOfResidency===NULL) ? NULL : $this->validateCountriesOfResidency($countriesOfResidency);
		$this->countryArrivalDate = ($countryArrivalDate===NULL) ? NULL : $this->validateCountryArrivalDate($countryArrivalDate);
		$this->citizenshipStatus = ($citizenshipStatus===NULL) ? NULL : $this->validateCitizenshipStatus($citizenshipStatus);
		$this->englishProficiency = ($englishProficiency===NULL) ? NULL : $this->validateEnglishProficiency($englishProficiency);
		$this->languageList = ($languageList===NULL) ? NULL : $this->validateLanguageList($languageList);
		$this->dwellingArrangement = ($dwellingArrangement===NULL) ? NULL : $this->validateDwellingArrangement($dwellingArrangement);
		$this->maritalStatus = ($maritalStatus===NULL) ? NULL : $this->validateMaritalStatus($maritalStatus);
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

	public function getBirthDateVerification($autoCreate = TRUE) {
		if ($this->birthDateVerification===NULL && $autoCreate && ! isset($this->_overrides['birthDateVerification']) ) {
			$this->birthDateVerification = $this->createBirthDateVerification();
		}
		return $this->birthDateVerification;
	}
	
	protected function createBirthDateVerification() {
		return NULL;
	}

	public function setBirthDateVerification($birthDateVerification) {
		$this->birthDateVerification = $this->validateBirthDateVerification($birthDateVerification);
	}

	protected function validateBirthDateVerification($birthDateVerification) {
	
		return $birthDateVerification;
	}

	public function getPlaceOfBirth($autoCreate = TRUE) {
		if ($this->placeOfBirth===NULL && $autoCreate && ! isset($this->_overrides['placeOfBirth']) ) {
			$this->placeOfBirth = $this->createPlaceOfBirth();
		}
		return $this->placeOfBirth;
	}
	
	protected function createPlaceOfBirth() {
		return NULL;
	}

	public function setPlaceOfBirth($placeOfBirth) {
		$this->placeOfBirth = $this->validatePlaceOfBirth($placeOfBirth);
	}

	protected function validatePlaceOfBirth($placeOfBirth) {
		if ( ! is_string($placeOfBirth) && ! is_null($placeOfBirth) ) {
			throw new \Exception(sprintf('Supplied %s value was not %s', 'placeOfBirth', 'string'));
		}
	
		return $placeOfBirth;
	}

	public function getCountyOfBirth($autoCreate = TRUE) {
		if ($this->countyOfBirth===NULL && $autoCreate && ! isset($this->_overrides['countyOfBirth']) ) {
			$this->countyOfBirth = $this->createCountyOfBirth();
		}
		return $this->countyOfBirth;
	}
	
	protected function createCountyOfBirth() {
		return NULL;
	}

	public function setCountyOfBirth($countyOfBirth) {
		$this->countyOfBirth = $this->validateCountyOfBirth($countyOfBirth);
	}

	protected function validateCountyOfBirth($countyOfBirth) {
		if ( ! is_string($countyOfBirth) && ! is_null($countyOfBirth) ) {
			throw new \Exception(sprintf('Supplied %s value was not %s', 'countyOfBirth', 'string'));
		}
	
		return $countyOfBirth;
	}

	public function getStateOfBirth($autoCreate = TRUE) {
		if ($this->stateOfBirth===NULL && $autoCreate && ! isset($this->_overrides['stateOfBirth']) ) {
			$this->stateOfBirth = $this->createStateOfBirth();
		}
		return $this->stateOfBirth;
	}
	
	protected function createStateOfBirth() {
		return NULL;
	}

	public function setStateOfBirth($stateOfBirth) {
		$this->stateOfBirth = $this->validateStateOfBirth($stateOfBirth);
	}

	protected function validateStateOfBirth($stateOfBirth) {
	
		return $stateOfBirth;
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

	public function getCountriesOfCitizenship($autoCreate = TRUE) {
		if ($this->countriesOfCitizenship===NULL && $autoCreate && ! isset($this->_overrides['countriesOfCitizenship']) ) {
			$this->countriesOfCitizenship = $this->createCountriesOfCitizenship();
		}
		return $this->countriesOfCitizenship;
	}
	
	protected function createCountriesOfCitizenship() {
		return new \org\sifinfo\www\infrastructure\_2_x\CountriesOfCitizenship();
	}

	public function setCountriesOfCitizenship($countriesOfCitizenship) {
		$this->countriesOfCitizenship = $this->validateCountriesOfCitizenship($countriesOfCitizenship);
	}

	protected function validateCountriesOfCitizenship($countriesOfCitizenship) {
		if ( $countriesOfCitizenship === FALSE ) {
			$this->_overrides['countriesOfCitizenship'] = TRUE;
			return NULL;
		}

		if ( ! $countriesOfCitizenship instanceof \org\sifinfo\www\infrastructure\_2_x\CountriesOfCitizenship  && ! is_null($countriesOfCitizenship) ) {
			$countriesOfCitizenship = new \org\sifinfo\www\infrastructure\_2_x\CountriesOfCitizenship ($countriesOfCitizenship);
		}

		unset ($this->_overrides['countriesOfCitizenship']);
	
		return $countriesOfCitizenship;
	}

	public function getCountriesOfResidency($autoCreate = TRUE) {
		if ($this->countriesOfResidency===NULL && $autoCreate && ! isset($this->_overrides['countriesOfResidency']) ) {
			$this->countriesOfResidency = $this->createCountriesOfResidency();
		}
		return $this->countriesOfResidency;
	}
	
	protected function createCountriesOfResidency() {
		return new \org\sifinfo\www\infrastructure\_2_x\CountriesOfResidency();
	}

	public function setCountriesOfResidency($countriesOfResidency) {
		$this->countriesOfResidency = $this->validateCountriesOfResidency($countriesOfResidency);
	}

	protected function validateCountriesOfResidency($countriesOfResidency) {
		if ( $countriesOfResidency === FALSE ) {
			$this->_overrides['countriesOfResidency'] = TRUE;
			return NULL;
		}

		if ( ! $countriesOfResidency instanceof \org\sifinfo\www\infrastructure\_2_x\CountriesOfResidency  && ! is_null($countriesOfResidency) ) {
			$countriesOfResidency = new \org\sifinfo\www\infrastructure\_2_x\CountriesOfResidency ($countriesOfResidency);
		}

		unset ($this->_overrides['countriesOfResidency']);
	
		return $countriesOfResidency;
	}

	public function getCountryArrivalDate($autoCreate = TRUE) {
		if ($this->countryArrivalDate===NULL && $autoCreate && ! isset($this->_overrides['countryArrivalDate']) ) {
			$this->countryArrivalDate = $this->createCountryArrivalDate();
		}
		return $this->countryArrivalDate;
	}
	
	protected function createCountryArrivalDate() {
		return NULL;
	}

	public function setCountryArrivalDate($countryArrivalDate) {
		$this->countryArrivalDate = $this->validateCountryArrivalDate($countryArrivalDate);
	}

	protected function validateCountryArrivalDate($countryArrivalDate) {
		if ( ! is_string($countryArrivalDate) && ! is_null($countryArrivalDate) ) {
			throw new \Exception(sprintf('Supplied %s value was not %s', 'countryArrivalDate', 'string'));
		}
	
		return $countryArrivalDate;
	}

	public function getCitizenshipStatus($autoCreate = TRUE) {
		if ($this->citizenshipStatus===NULL && $autoCreate && ! isset($this->_overrides['citizenshipStatus']) ) {
			$this->citizenshipStatus = $this->createCitizenshipStatus();
		}
		return $this->citizenshipStatus;
	}
	
	protected function createCitizenshipStatus() {
		return NULL;
	}

	public function setCitizenshipStatus($citizenshipStatus) {
		$this->citizenshipStatus = $this->validateCitizenshipStatus($citizenshipStatus);
	}

	protected function validateCitizenshipStatus($citizenshipStatus) {
	
		return $citizenshipStatus;
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

	public function getMaritalStatus($autoCreate = TRUE) {
		if ($this->maritalStatus===NULL && $autoCreate && ! isset($this->_overrides['maritalStatus']) ) {
			$this->maritalStatus = $this->createMaritalStatus();
		}
		return $this->maritalStatus;
	}
	
	protected function createMaritalStatus() {
		return NULL;
	}

	public function setMaritalStatus($maritalStatus) {
		$this->maritalStatus = $this->validateMaritalStatus($maritalStatus);
	}

	protected function validateMaritalStatus($maritalStatus) {
	
		return $maritalStatus;
	}
} // end class DemographicsType
