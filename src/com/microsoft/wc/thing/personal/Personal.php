<?php
namespace com\microsoft\wc\thing\personal;



/**
 * @XmlNamespaces ({
 *	@XmlNamespace(url="urn:com.microsoft.wc.thing.personal", prefix="")
 * })
 * @XmlEntity	(xml="personal")
 */
class Personal extends \com\microsoft\wc\thing\AnyMixed {
	/**
	 * Personal demographic information this is more sensitve innature.
	 * This data is more sensitive than the "basic" thing typedata and may not be disclosed as freely as the "basic"thing type.
	 */

	const ID = '92ba621e-66b3-4a01-bd73-74844aed4f5b';
	const NAME = 'Personal Demographic Information';

	/**
	 * @XmlElement	(type="\com\microsoft\wc\thing\types\Name", name="name")
	 */
	protected $name;

	/**
	 * @XmlElement	(type="\com\microsoft\wc\dates\DateTime", name="birthdate")
	 */
	protected $birthdate;

	/**
	 * @XmlElement	(type="\com\microsoft\wc\types\CodableValue", name="blood-type")
	 */
	protected $bloodType;

	/**
	 * @XmlElement	(type="\com\microsoft\wc\types\CodableValue", name="ethnicity")
	 */
	protected $ethnicity;

	/**
	 * @XmlText	(type="string", name="ssn")
	 */
	protected $ssn;

	/**
	 * @XmlElement	(type="\com\microsoft\wc\types\CodableValue", name="marital-status")
	 */
	protected $maritalStatus;

	/**
	 * @XmlText	(type="string", name="employment-status")
	 */
	protected $employmentStatus;

	/**
	 * @XmlText	(type="boolean", name="is-deceased")
	 */
	protected $isDeceased;

	/**
	 * @XmlElement	(type="\com\microsoft\wc\dates\ApproxDateTime", name="date-of-death")
	 */
	protected $dateOfDeath;

	/**
	 * @XmlElement	(type="\com\microsoft\wc\types\CodableValue", name="religion")
	 */
	protected $religion;

	/**
	 * @XmlText	(type="boolean", name="is-veteran")
	 */
	protected $isVeteran;

	/**
	 * @XmlElement	(type="\com\microsoft\wc\types\CodableValue", name="highest-education-level")
	 */
	protected $highestEducationLevel;

	/**
	 * @XmlText	(type="boolean", name="is-disabled")
	 */
	protected $isDisabled;

	/**
	 * @XmlText	(type="string", name="organ-donor")
	 */
	protected $organDonor;

	public function __construct($name = NULL, $birthdate = NULL, $bloodType = NULL, $ethnicity = NULL, $ssn = NULL, $maritalStatus = NULL, $employmentStatus = NULL, $isDeceased = NULL, $dateOfDeath = NULL, $religion = NULL, $isVeteran = NULL, $highestEducationLevel = NULL, $isDisabled = NULL, $organDonor = NULL) {
		$this->name = ($name===NULL) ? NULL : $this->validateName($name);
		$this->birthdate = ($birthdate===NULL) ? NULL : $this->validateBirthdate($birthdate);
		$this->bloodType = ($bloodType===NULL) ? NULL : $this->validateBloodType($bloodType);
		$this->ethnicity = ($ethnicity===NULL) ? NULL : $this->validateEthnicity($ethnicity);
		$this->ssn = ($ssn===NULL) ? NULL : $this->validateSsn($ssn);
		$this->maritalStatus = ($maritalStatus===NULL) ? NULL : $this->validateMaritalStatus($maritalStatus);
		$this->employmentStatus = ($employmentStatus===NULL) ? NULL : $this->validateEmploymentStatus($employmentStatus);
		$this->isDeceased = ($isDeceased===NULL) ? NULL : $this->validateIsDeceased($isDeceased);
		$this->dateOfDeath = ($dateOfDeath===NULL) ? NULL : $this->validateDateOfDeath($dateOfDeath);
		$this->religion = ($religion===NULL) ? NULL : $this->validateReligion($religion);
		$this->isVeteran = ($isVeteran===NULL) ? NULL : $this->validateIsVeteran($isVeteran);
		$this->highestEducationLevel = ($highestEducationLevel===NULL) ? NULL : $this->validateHighestEducationLevel($highestEducationLevel);
		$this->isDisabled = ($isDisabled===NULL) ? NULL : $this->validateIsDisabled($isDisabled);
		$this->organDonor = ($organDonor===NULL) ? NULL : $this->validateOrganDonor($organDonor);
	}

	public function getName() {
		if ($this->name===NULL) {
			$this->name = $this->createName();
		}
		return $this->name;
	}
	
	protected function createName() {
		return new \com\microsoft\wc\thing\types\Name();
	}

	public function setName($name) {
		$this->name = $this->validateName($name);
	}

	protected function validateName($name) {
		if ( ! $name instanceof \com\microsoft\wc\thing\types\Name  && ! is_null($name) ) {
			$name = new \com\microsoft\wc\thing\types\Name ($name);
		}
	
		return $name;
	}

	public function getBirthdate() {
		if ($this->birthdate===NULL) {
			$this->birthdate = $this->createBirthdate();
		}
		return $this->birthdate;
	}
	
	protected function createBirthdate() {
		return new \com\microsoft\wc\dates\DateTime();
	}

	public function setBirthdate($birthdate) {
		$this->birthdate = $this->validateBirthdate($birthdate);
	}

	protected function validateBirthdate($birthdate) {
		if ( ! $birthdate instanceof \com\microsoft\wc\dates\DateTime  && ! is_null($birthdate) ) {
			$birthdate = new \com\microsoft\wc\dates\DateTime ($birthdate);
		}
	
		return $birthdate;
	}

	public function getBloodType() {
		if ($this->bloodType===NULL) {
			$this->bloodType = $this->createBloodType();
		}
		return $this->bloodType;
	}
	
	protected function createBloodType() {
		return new \com\microsoft\wc\types\CodableValue();
	}

	public function setBloodType($bloodType) {
		$this->bloodType = $this->validateBloodType($bloodType);
	}

	protected function validateBloodType($bloodType) {
		if ( ! $bloodType instanceof \com\microsoft\wc\types\CodableValue  && ! is_null($bloodType) ) {
			$bloodType = new \com\microsoft\wc\types\CodableValue ($bloodType);
		}
	
		return $bloodType;
	}

	public function getEthnicity() {
		if ($this->ethnicity===NULL) {
			$this->ethnicity = $this->createEthnicity();
		}
		return $this->ethnicity;
	}
	
	protected function createEthnicity() {
		return new \com\microsoft\wc\types\CodableValue();
	}

	public function setEthnicity($ethnicity) {
		$this->ethnicity = $this->validateEthnicity($ethnicity);
	}

	protected function validateEthnicity($ethnicity) {
		if ( ! $ethnicity instanceof \com\microsoft\wc\types\CodableValue  && ! is_null($ethnicity) ) {
			$ethnicity = new \com\microsoft\wc\types\CodableValue ($ethnicity);
		}
	
		return $ethnicity;
	}

	public function getSsn() {
		if ($this->ssn===NULL) {
			$this->ssn = $this->createSsn();
		}
		return $this->ssn;
	}
	
	protected function createSsn() {
		return '';
	}

	public function setSsn($ssn) {
		$this->ssn = $this->validateSsn($ssn);
	}

	protected function validateSsn($ssn) {
		if ( ! is_string($ssn) && ! is_null($ssn) ) {
			throw new \Exception(sprintf('Supplied %s value was not %s', 'ssn', 'string'));
		}
	
		return $ssn;
	}

	public function getMaritalStatus() {
		if ($this->maritalStatus===NULL) {
			$this->maritalStatus = $this->createMaritalStatus();
		}
		return $this->maritalStatus;
	}
	
	protected function createMaritalStatus() {
		return new \com\microsoft\wc\types\CodableValue();
	}

	public function setMaritalStatus($maritalStatus) {
		$this->maritalStatus = $this->validateMaritalStatus($maritalStatus);
	}

	protected function validateMaritalStatus($maritalStatus) {
		if ( ! $maritalStatus instanceof \com\microsoft\wc\types\CodableValue  && ! is_null($maritalStatus) ) {
			$maritalStatus = new \com\microsoft\wc\types\CodableValue ($maritalStatus);
		}
	
		return $maritalStatus;
	}

	public function getEmploymentStatus() {
		if ($this->employmentStatus===NULL) {
			$this->employmentStatus = $this->createEmploymentStatus();
		}
		return $this->employmentStatus;
	}
	
	protected function createEmploymentStatus() {
		return '';
	}

	public function setEmploymentStatus($employmentStatus) {
		$this->employmentStatus = $this->validateEmploymentStatus($employmentStatus);
	}

	protected function validateEmploymentStatus($employmentStatus) {
		if ( ! is_string($employmentStatus) && ! is_null($employmentStatus) ) {
			throw new \Exception(sprintf('Supplied %s value was not %s', 'employmentStatus', 'string'));
		}
	
		return $employmentStatus;
	}

	public function getIsDeceased() {
		if ($this->isDeceased===NULL) {
			$this->isDeceased = $this->createIsDeceased();
		}
		return $this->isDeceased;
	}
	
	protected function createIsDeceased() {
		return FALSE;
	}

	public function setIsDeceased($isDeceased) {
		$this->isDeceased = $this->validateIsDeceased($isDeceased);
	}

	protected function validateIsDeceased($isDeceased) {
		if ( ! is_bool($isDeceased) && ! is_null($isDeceased) ) {
			throw new \Exception(sprintf('Supplied %s value was not %s', 'isDeceased', 'boolean'));
		}
	
		return $isDeceased;
	}

	public function getDateOfDeath() {
		if ($this->dateOfDeath===NULL) {
			$this->dateOfDeath = $this->createDateOfDeath();
		}
		return $this->dateOfDeath;
	}
	
	protected function createDateOfDeath() {
		return new \com\microsoft\wc\dates\ApproxDateTime();
	}

	public function setDateOfDeath($dateOfDeath) {
		$this->dateOfDeath = $this->validateDateOfDeath($dateOfDeath);
	}

	protected function validateDateOfDeath($dateOfDeath) {
		if ( ! $dateOfDeath instanceof \com\microsoft\wc\dates\ApproxDateTime  && ! is_null($dateOfDeath) ) {
			$dateOfDeath = new \com\microsoft\wc\dates\ApproxDateTime ($dateOfDeath);
		}
	
		return $dateOfDeath;
	}

	public function getReligion() {
		if ($this->religion===NULL) {
			$this->religion = $this->createReligion();
		}
		return $this->religion;
	}
	
	protected function createReligion() {
		return new \com\microsoft\wc\types\CodableValue();
	}

	public function setReligion($religion) {
		$this->religion = $this->validateReligion($religion);
	}

	protected function validateReligion($religion) {
		if ( ! $religion instanceof \com\microsoft\wc\types\CodableValue  && ! is_null($religion) ) {
			$religion = new \com\microsoft\wc\types\CodableValue ($religion);
		}
	
		return $religion;
	}

	public function getIsVeteran() {
		if ($this->isVeteran===NULL) {
			$this->isVeteran = $this->createIsVeteran();
		}
		return $this->isVeteran;
	}
	
	protected function createIsVeteran() {
		return FALSE;
	}

	public function setIsVeteran($isVeteran) {
		$this->isVeteran = $this->validateIsVeteran($isVeteran);
	}

	protected function validateIsVeteran($isVeteran) {
		if ( ! is_bool($isVeteran) && ! is_null($isVeteran) ) {
			throw new \Exception(sprintf('Supplied %s value was not %s', 'isVeteran', 'boolean'));
		}
	
		return $isVeteran;
	}

	public function getHighestEducationLevel() {
		if ($this->highestEducationLevel===NULL) {
			$this->highestEducationLevel = $this->createHighestEducationLevel();
		}
		return $this->highestEducationLevel;
	}
	
	protected function createHighestEducationLevel() {
		return new \com\microsoft\wc\types\CodableValue();
	}

	public function setHighestEducationLevel($highestEducationLevel) {
		$this->highestEducationLevel = $this->validateHighestEducationLevel($highestEducationLevel);
	}

	protected function validateHighestEducationLevel($highestEducationLevel) {
		if ( ! $highestEducationLevel instanceof \com\microsoft\wc\types\CodableValue  && ! is_null($highestEducationLevel) ) {
			$highestEducationLevel = new \com\microsoft\wc\types\CodableValue ($highestEducationLevel);
		}
	
		return $highestEducationLevel;
	}

	public function getIsDisabled() {
		if ($this->isDisabled===NULL) {
			$this->isDisabled = $this->createIsDisabled();
		}
		return $this->isDisabled;
	}
	
	protected function createIsDisabled() {
		return FALSE;
	}

	public function setIsDisabled($isDisabled) {
		$this->isDisabled = $this->validateIsDisabled($isDisabled);
	}

	protected function validateIsDisabled($isDisabled) {
		if ( ! is_bool($isDisabled) && ! is_null($isDisabled) ) {
			throw new \Exception(sprintf('Supplied %s value was not %s', 'isDisabled', 'boolean'));
		}
	
		return $isDisabled;
	}

	public function getOrganDonor() {
		if ($this->organDonor===NULL) {
			$this->organDonor = $this->createOrganDonor();
		}
		return $this->organDonor;
	}
	
	protected function createOrganDonor() {
		return '';
	}

	public function setOrganDonor($organDonor) {
		$this->organDonor = $this->validateOrganDonor($organDonor);
	}

	protected function validateOrganDonor($organDonor) {
		if ( ! is_string($organDonor) && ! is_null($organDonor) ) {
			throw new \Exception(sprintf('Supplied %s value was not %s', 'organDonor', 'string'));
		}
	
		return $organDonor;
	}
} // end class Personal
