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
	 * List of manually overridden properties that should not be re-generated automatically
	 * @var array
	 */
	protected $_overrides = array();


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

	public function getName($autoCreate = TRUE) {
		if ($this->name===NULL && $autoCreate && ! isset($this->_overrides['name']) ) {
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
		if ( $name === FALSE ) {
			$this->_overrides['name'] = TRUE;
			return NULL;
		}

		if ( ! $name instanceof \com\microsoft\wc\thing\types\Name  && ! is_null($name) ) {
			$name = new \com\microsoft\wc\thing\types\Name ($name);
		}

		unset ($this->_overrides['name']);
	
		return $name;
	}

	public function getBirthdate($autoCreate = TRUE) {
		if ($this->birthdate===NULL && $autoCreate && ! isset($this->_overrides['birthdate']) ) {
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
		if ( $birthdate === FALSE ) {
			$this->_overrides['birthdate'] = TRUE;
			return NULL;
		}

		if ( ! $birthdate instanceof \com\microsoft\wc\dates\DateTime  && ! is_null($birthdate) ) {
			$birthdate = new \com\microsoft\wc\dates\DateTime ($birthdate);
		}

		unset ($this->_overrides['birthdate']);
	
		return $birthdate;
	}

	public function getBloodType($autoCreate = TRUE) {
		if ($this->bloodType===NULL && $autoCreate && ! isset($this->_overrides['bloodType']) ) {
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
		if ( $bloodType === FALSE ) {
			$this->_overrides['bloodType'] = TRUE;
			return NULL;
		}

		if ( ! $bloodType instanceof \com\microsoft\wc\types\CodableValue  && ! is_null($bloodType) ) {
			$bloodType = new \com\microsoft\wc\types\CodableValue ($bloodType);
		}

		unset ($this->_overrides['bloodType']);
	
		return $bloodType;
	}

	public function getEthnicity($autoCreate = TRUE) {
		if ($this->ethnicity===NULL && $autoCreate && ! isset($this->_overrides['ethnicity']) ) {
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
		if ( $ethnicity === FALSE ) {
			$this->_overrides['ethnicity'] = TRUE;
			return NULL;
		}

		if ( ! $ethnicity instanceof \com\microsoft\wc\types\CodableValue  && ! is_null($ethnicity) ) {
			$ethnicity = new \com\microsoft\wc\types\CodableValue ($ethnicity);
		}

		unset ($this->_overrides['ethnicity']);
	
		return $ethnicity;
	}

	public function getSsn($autoCreate = TRUE) {
		if ($this->ssn===NULL && $autoCreate && ! isset($this->_overrides['ssn']) ) {
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

	public function getMaritalStatus($autoCreate = TRUE) {
		if ($this->maritalStatus===NULL && $autoCreate && ! isset($this->_overrides['maritalStatus']) ) {
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
		if ( $maritalStatus === FALSE ) {
			$this->_overrides['maritalStatus'] = TRUE;
			return NULL;
		}

		if ( ! $maritalStatus instanceof \com\microsoft\wc\types\CodableValue  && ! is_null($maritalStatus) ) {
			$maritalStatus = new \com\microsoft\wc\types\CodableValue ($maritalStatus);
		}

		unset ($this->_overrides['maritalStatus']);
	
		return $maritalStatus;
	}

	public function getEmploymentStatus($autoCreate = TRUE) {
		if ($this->employmentStatus===NULL && $autoCreate && ! isset($this->_overrides['employmentStatus']) ) {
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

	public function getIsDeceased($autoCreate = TRUE) {
		if ($this->isDeceased===NULL && $autoCreate && ! isset($this->_overrides['isDeceased']) ) {
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

	public function getDateOfDeath($autoCreate = TRUE) {
		if ($this->dateOfDeath===NULL && $autoCreate && ! isset($this->_overrides['dateOfDeath']) ) {
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
		if ( $dateOfDeath === FALSE ) {
			$this->_overrides['dateOfDeath'] = TRUE;
			return NULL;
		}

		if ( ! $dateOfDeath instanceof \com\microsoft\wc\dates\ApproxDateTime  && ! is_null($dateOfDeath) ) {
			$dateOfDeath = new \com\microsoft\wc\dates\ApproxDateTime ($dateOfDeath);
		}

		unset ($this->_overrides['dateOfDeath']);
	
		return $dateOfDeath;
	}

	public function getReligion($autoCreate = TRUE) {
		if ($this->religion===NULL && $autoCreate && ! isset($this->_overrides['religion']) ) {
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
		if ( $religion === FALSE ) {
			$this->_overrides['religion'] = TRUE;
			return NULL;
		}

		if ( ! $religion instanceof \com\microsoft\wc\types\CodableValue  && ! is_null($religion) ) {
			$religion = new \com\microsoft\wc\types\CodableValue ($religion);
		}

		unset ($this->_overrides['religion']);
	
		return $religion;
	}

	public function getIsVeteran($autoCreate = TRUE) {
		if ($this->isVeteran===NULL && $autoCreate && ! isset($this->_overrides['isVeteran']) ) {
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

	public function getHighestEducationLevel($autoCreate = TRUE) {
		if ($this->highestEducationLevel===NULL && $autoCreate && ! isset($this->_overrides['highestEducationLevel']) ) {
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
		if ( $highestEducationLevel === FALSE ) {
			$this->_overrides['highestEducationLevel'] = TRUE;
			return NULL;
		}

		if ( ! $highestEducationLevel instanceof \com\microsoft\wc\types\CodableValue  && ! is_null($highestEducationLevel) ) {
			$highestEducationLevel = new \com\microsoft\wc\types\CodableValue ($highestEducationLevel);
		}

		unset ($this->_overrides['highestEducationLevel']);
	
		return $highestEducationLevel;
	}

	public function getIsDisabled($autoCreate = TRUE) {
		if ($this->isDisabled===NULL && $autoCreate && ! isset($this->_overrides['isDisabled']) ) {
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

	public function getOrganDonor($autoCreate = TRUE) {
		if ($this->organDonor===NULL && $autoCreate && ! isset($this->_overrides['organDonor']) ) {
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
