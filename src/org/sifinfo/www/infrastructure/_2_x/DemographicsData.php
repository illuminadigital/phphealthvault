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
} // end class DemographicsData
