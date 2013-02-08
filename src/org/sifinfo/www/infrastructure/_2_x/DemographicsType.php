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
	 * @XmlElement	(type="\org\sifinfo\www\infrastructure\_2_x\NormalizedString", name="PlaceOfBirth")
	 */
	protected $placeOfBirth;

	/**
	 * @XmlElement	(type="\org\sifinfo\www\infrastructure\_2_x\NormalizedString", name="CountyOfBirth")
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
	 * @XmlElement	(type="\org\sifinfo\www\infrastructure\_2_x\Date", name="CountryArrivalDate")
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

	public function getRaceList() {
		if ($this->raceList===NULL) {
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
		if ( ! $raceList instanceof \org\sifinfo\www\infrastructure\_2_x\RaceListType  && ! is_null($raceList) ) {
			$raceList = new \org\sifinfo\www\infrastructure\_2_x\RaceListType ($raceList);
		}
	
		return $raceList;
	}

	public function getHispanicLatino() {
		if ($this->hispanicLatino===NULL) {
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

	public function getGender() {
		if ($this->gender===NULL) {
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

	public function getBirthDate() {
		if ($this->birthDate===NULL) {
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

	public function getBirthDateVerification() {
		if ($this->birthDateVerification===NULL) {
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

	public function getPlaceOfBirth() {
		if ($this->placeOfBirth===NULL) {
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
		if ( ! is_normalizedString($placeOfBirth) && ! is_null($placeOfBirth) ) {
			throw new \Exception(sprintf('Supplied %s value was not %s', 'placeOfBirth', 'normalizedString'));
		}
	
		return $placeOfBirth;
	}

	public function getCountyOfBirth() {
		if ($this->countyOfBirth===NULL) {
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
		if ( ! is_normalizedString($countyOfBirth) && ! is_null($countyOfBirth) ) {
			throw new \Exception(sprintf('Supplied %s value was not %s', 'countyOfBirth', 'normalizedString'));
		}
	
		return $countyOfBirth;
	}

	public function getStateOfBirth() {
		if ($this->stateOfBirth===NULL) {
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

	public function getCountryOfBirth() {
		if ($this->countryOfBirth===NULL) {
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

	public function getCountriesOfCitizenship() {
		if ($this->countriesOfCitizenship===NULL) {
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
		if ( ! $countriesOfCitizenship instanceof \org\sifinfo\www\infrastructure\_2_x\CountriesOfCitizenship  && ! is_null($countriesOfCitizenship) ) {
			$countriesOfCitizenship = new \org\sifinfo\www\infrastructure\_2_x\CountriesOfCitizenship ($countriesOfCitizenship);
		}
	
		return $countriesOfCitizenship;
	}

	public function getCountriesOfResidency() {
		if ($this->countriesOfResidency===NULL) {
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
		if ( ! $countriesOfResidency instanceof \org\sifinfo\www\infrastructure\_2_x\CountriesOfResidency  && ! is_null($countriesOfResidency) ) {
			$countriesOfResidency = new \org\sifinfo\www\infrastructure\_2_x\CountriesOfResidency ($countriesOfResidency);
		}
	
		return $countriesOfResidency;
	}

	public function getCountryArrivalDate() {
		if ($this->countryArrivalDate===NULL) {
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
		if ( ! is_date($countryArrivalDate) && ! is_null($countryArrivalDate) ) {
			throw new \Exception(sprintf('Supplied %s value was not %s', 'countryArrivalDate', 'date'));
		}
	
		return $countryArrivalDate;
	}

	public function getCitizenshipStatus() {
		if ($this->citizenshipStatus===NULL) {
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

	public function getEnglishProficiency() {
		if ($this->englishProficiency===NULL) {
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
		if ( ! $englishProficiency instanceof \org\sifinfo\www\infrastructure\_2_x\EnglishProficiencyType  && ! is_null($englishProficiency) ) {
			$englishProficiency = new \org\sifinfo\www\infrastructure\_2_x\EnglishProficiencyType ($englishProficiency);
		}
	
		return $englishProficiency;
	}

	public function getLanguageList() {
		if ($this->languageList===NULL) {
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
		if ( ! $languageList instanceof \org\sifinfo\www\infrastructure\_2_x\LanguageListType  && ! is_null($languageList) ) {
			$languageList = new \org\sifinfo\www\infrastructure\_2_x\LanguageListType ($languageList);
		}
	
		return $languageList;
	}

	public function getDwellingArrangement() {
		if ($this->dwellingArrangement===NULL) {
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
		if ( ! $dwellingArrangement instanceof \org\sifinfo\www\infrastructure\_2_x\DwellingArrangement  && ! is_null($dwellingArrangement) ) {
			$dwellingArrangement = new \org\sifinfo\www\infrastructure\_2_x\DwellingArrangement ($dwellingArrangement);
		}
	
		return $dwellingArrangement;
	}

	public function getMaritalStatus() {
		if ($this->maritalStatus===NULL) {
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
