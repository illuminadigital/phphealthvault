<?php
namespace com\microsoft\wc\thing\cardiac_profile;



/**
 * @XmlNamespaces ({
 *	@XmlNamespace(url="urn:com.microsoft.wc.thing.cardiac-profile", prefix="")
 * })
 * @XmlEntity	(xml="cardiac-profile")
 */
class CardiacProfile extends \com\microsoft\wc\thing\AnyMixed {
	/**
	 * A summary of a person's cardiac condition.
	 * A person's cardiac profile is made up of a set ofanswers to common questions and measurements that indicate thecardiac condition of the person.
	 */

	const ID = 'adaf49ad-8e10-49f8-9783-174819e97051';
	const NAME = 'Cardiac Profile';

	/**
	 * List of manually overridden properties that should not be re-generated automatically
	 * @var array
	 */
	protected $_overrides = array();


	/**
	 * @XmlElement	(type="\com\microsoft\wc\dates\DateTime", name="when")
	 */
	protected $when;

	/**
	 * @XmlText	(type="boolean", name="on-hypertension-diet")
	 */
	protected $onHypertensionDiet;

	/**
	 * @XmlText	(type="boolean", name="on-hypertension-medication")
	 */
	protected $onHypertensionMedication;

	/**
	 * @XmlText	(type="boolean", name="renal-failure-diagnosed")
	 */
	protected $renalFailureDiagnosed;

	/**
	 * @XmlText	(type="boolean", name="diabetes-diagnosed")
	 */
	protected $diabetesDiagnosed;

	/**
	 * @XmlText	(type="boolean", name="has-family-heart-disease-history")
	 */
	protected $hasFamilyHeartDiseaseHistory;

	/**
	 * @XmlText	(type="boolean", name="has-family-stroke-history")
	 */
	protected $hasFamilyStrokeHistory;

	/**
	 * @XmlText	(type="boolean", name="has-personal-heart-disease-history")
	 */
	protected $hasPersonalHeartDiseaseHistory;

	/**
	 * @XmlText	(type="boolean", name="has-person-stroke-history")
	 */
	protected $hasPersonStrokeHistory;

	public function __construct($when = NULL, $onHypertensionDiet = NULL, $onHypertensionMedication = NULL, $renalFailureDiagnosed = NULL, $diabetesDiagnosed = NULL, $hasFamilyHeartDiseaseHistory = NULL, $hasFamilyStrokeHistory = NULL, $hasPersonalHeartDiseaseHistory = NULL, $hasPersonStrokeHistory = NULL) {
		$this->when = ($when===NULL) ? NULL : $this->validateWhen($when);
		$this->onHypertensionDiet = ($onHypertensionDiet===NULL) ? NULL : $this->validateOnHypertensionDiet($onHypertensionDiet);
		$this->onHypertensionMedication = ($onHypertensionMedication===NULL) ? NULL : $this->validateOnHypertensionMedication($onHypertensionMedication);
		$this->renalFailureDiagnosed = ($renalFailureDiagnosed===NULL) ? NULL : $this->validateRenalFailureDiagnosed($renalFailureDiagnosed);
		$this->diabetesDiagnosed = ($diabetesDiagnosed===NULL) ? NULL : $this->validateDiabetesDiagnosed($diabetesDiagnosed);
		$this->hasFamilyHeartDiseaseHistory = ($hasFamilyHeartDiseaseHistory===NULL) ? NULL : $this->validateHasFamilyHeartDiseaseHistory($hasFamilyHeartDiseaseHistory);
		$this->hasFamilyStrokeHistory = ($hasFamilyStrokeHistory===NULL) ? NULL : $this->validateHasFamilyStrokeHistory($hasFamilyStrokeHistory);
		$this->hasPersonalHeartDiseaseHistory = ($hasPersonalHeartDiseaseHistory===NULL) ? NULL : $this->validateHasPersonalHeartDiseaseHistory($hasPersonalHeartDiseaseHistory);
		$this->hasPersonStrokeHistory = ($hasPersonStrokeHistory===NULL) ? NULL : $this->validateHasPersonStrokeHistory($hasPersonStrokeHistory);
	}

	public function getWhen($autoCreate = TRUE) {
		if ($this->when===NULL && $autoCreate && ! isset($this->_overrides['when']) ) {
			$this->when = $this->createWhen();
		}
		return $this->when;
	}
	
	protected function createWhen() {
		return new \com\microsoft\wc\dates\DateTime();
	}

	public function setWhen($when) {
		$this->when = $this->validateWhen($when);
	}

	protected function validateWhen($when) {
		if ( ! $when instanceof \com\microsoft\wc\dates\DateTime ) {
			$when = new \com\microsoft\wc\dates\DateTime ($when);
		}
	
		return $when;
	}

	public function getOnHypertensionDiet($autoCreate = TRUE) {
		if ($this->onHypertensionDiet===NULL && $autoCreate && ! isset($this->_overrides['onHypertensionDiet']) ) {
			$this->onHypertensionDiet = $this->createOnHypertensionDiet();
		}
		return $this->onHypertensionDiet;
	}
	
	protected function createOnHypertensionDiet() {
		return FALSE;
	}

	public function setOnHypertensionDiet($onHypertensionDiet) {
		$this->onHypertensionDiet = $this->validateOnHypertensionDiet($onHypertensionDiet);
	}

	protected function validateOnHypertensionDiet($onHypertensionDiet) {
		if ( ! is_bool($onHypertensionDiet) && ! is_null($onHypertensionDiet) ) {
			throw new \Exception(sprintf('Supplied %s value was not %s', 'onHypertensionDiet', 'boolean'));
		}
	
		return $onHypertensionDiet;
	}

	public function getOnHypertensionMedication($autoCreate = TRUE) {
		if ($this->onHypertensionMedication===NULL && $autoCreate && ! isset($this->_overrides['onHypertensionMedication']) ) {
			$this->onHypertensionMedication = $this->createOnHypertensionMedication();
		}
		return $this->onHypertensionMedication;
	}
	
	protected function createOnHypertensionMedication() {
		return FALSE;
	}

	public function setOnHypertensionMedication($onHypertensionMedication) {
		$this->onHypertensionMedication = $this->validateOnHypertensionMedication($onHypertensionMedication);
	}

	protected function validateOnHypertensionMedication($onHypertensionMedication) {
		if ( ! is_bool($onHypertensionMedication) && ! is_null($onHypertensionMedication) ) {
			throw new \Exception(sprintf('Supplied %s value was not %s', 'onHypertensionMedication', 'boolean'));
		}
	
		return $onHypertensionMedication;
	}

	public function getRenalFailureDiagnosed($autoCreate = TRUE) {
		if ($this->renalFailureDiagnosed===NULL && $autoCreate && ! isset($this->_overrides['renalFailureDiagnosed']) ) {
			$this->renalFailureDiagnosed = $this->createRenalFailureDiagnosed();
		}
		return $this->renalFailureDiagnosed;
	}
	
	protected function createRenalFailureDiagnosed() {
		return FALSE;
	}

	public function setRenalFailureDiagnosed($renalFailureDiagnosed) {
		$this->renalFailureDiagnosed = $this->validateRenalFailureDiagnosed($renalFailureDiagnosed);
	}

	protected function validateRenalFailureDiagnosed($renalFailureDiagnosed) {
		if ( ! is_bool($renalFailureDiagnosed) && ! is_null($renalFailureDiagnosed) ) {
			throw new \Exception(sprintf('Supplied %s value was not %s', 'renalFailureDiagnosed', 'boolean'));
		}
	
		return $renalFailureDiagnosed;
	}

	public function getDiabetesDiagnosed($autoCreate = TRUE) {
		if ($this->diabetesDiagnosed===NULL && $autoCreate && ! isset($this->_overrides['diabetesDiagnosed']) ) {
			$this->diabetesDiagnosed = $this->createDiabetesDiagnosed();
		}
		return $this->diabetesDiagnosed;
	}
	
	protected function createDiabetesDiagnosed() {
		return FALSE;
	}

	public function setDiabetesDiagnosed($diabetesDiagnosed) {
		$this->diabetesDiagnosed = $this->validateDiabetesDiagnosed($diabetesDiagnosed);
	}

	protected function validateDiabetesDiagnosed($diabetesDiagnosed) {
		if ( ! is_bool($diabetesDiagnosed) && ! is_null($diabetesDiagnosed) ) {
			throw new \Exception(sprintf('Supplied %s value was not %s', 'diabetesDiagnosed', 'boolean'));
		}
	
		return $diabetesDiagnosed;
	}

	public function getHasFamilyHeartDiseaseHistory($autoCreate = TRUE) {
		if ($this->hasFamilyHeartDiseaseHistory===NULL && $autoCreate && ! isset($this->_overrides['hasFamilyHeartDiseaseHistory']) ) {
			$this->hasFamilyHeartDiseaseHistory = $this->createHasFamilyHeartDiseaseHistory();
		}
		return $this->hasFamilyHeartDiseaseHistory;
	}
	
	protected function createHasFamilyHeartDiseaseHistory() {
		return FALSE;
	}

	public function setHasFamilyHeartDiseaseHistory($hasFamilyHeartDiseaseHistory) {
		$this->hasFamilyHeartDiseaseHistory = $this->validateHasFamilyHeartDiseaseHistory($hasFamilyHeartDiseaseHistory);
	}

	protected function validateHasFamilyHeartDiseaseHistory($hasFamilyHeartDiseaseHistory) {
		if ( ! is_bool($hasFamilyHeartDiseaseHistory) && ! is_null($hasFamilyHeartDiseaseHistory) ) {
			throw new \Exception(sprintf('Supplied %s value was not %s', 'hasFamilyHeartDiseaseHistory', 'boolean'));
		}
	
		return $hasFamilyHeartDiseaseHistory;
	}

	public function getHasFamilyStrokeHistory($autoCreate = TRUE) {
		if ($this->hasFamilyStrokeHistory===NULL && $autoCreate && ! isset($this->_overrides['hasFamilyStrokeHistory']) ) {
			$this->hasFamilyStrokeHistory = $this->createHasFamilyStrokeHistory();
		}
		return $this->hasFamilyStrokeHistory;
	}
	
	protected function createHasFamilyStrokeHistory() {
		return FALSE;
	}

	public function setHasFamilyStrokeHistory($hasFamilyStrokeHistory) {
		$this->hasFamilyStrokeHistory = $this->validateHasFamilyStrokeHistory($hasFamilyStrokeHistory);
	}

	protected function validateHasFamilyStrokeHistory($hasFamilyStrokeHistory) {
		if ( ! is_bool($hasFamilyStrokeHistory) && ! is_null($hasFamilyStrokeHistory) ) {
			throw new \Exception(sprintf('Supplied %s value was not %s', 'hasFamilyStrokeHistory', 'boolean'));
		}
	
		return $hasFamilyStrokeHistory;
	}

	public function getHasPersonalHeartDiseaseHistory($autoCreate = TRUE) {
		if ($this->hasPersonalHeartDiseaseHistory===NULL && $autoCreate && ! isset($this->_overrides['hasPersonalHeartDiseaseHistory']) ) {
			$this->hasPersonalHeartDiseaseHistory = $this->createHasPersonalHeartDiseaseHistory();
		}
		return $this->hasPersonalHeartDiseaseHistory;
	}
	
	protected function createHasPersonalHeartDiseaseHistory() {
		return FALSE;
	}

	public function setHasPersonalHeartDiseaseHistory($hasPersonalHeartDiseaseHistory) {
		$this->hasPersonalHeartDiseaseHistory = $this->validateHasPersonalHeartDiseaseHistory($hasPersonalHeartDiseaseHistory);
	}

	protected function validateHasPersonalHeartDiseaseHistory($hasPersonalHeartDiseaseHistory) {
		if ( ! is_bool($hasPersonalHeartDiseaseHistory) && ! is_null($hasPersonalHeartDiseaseHistory) ) {
			throw new \Exception(sprintf('Supplied %s value was not %s', 'hasPersonalHeartDiseaseHistory', 'boolean'));
		}
	
		return $hasPersonalHeartDiseaseHistory;
	}

	public function getHasPersonStrokeHistory($autoCreate = TRUE) {
		if ($this->hasPersonStrokeHistory===NULL && $autoCreate && ! isset($this->_overrides['hasPersonStrokeHistory']) ) {
			$this->hasPersonStrokeHistory = $this->createHasPersonStrokeHistory();
		}
		return $this->hasPersonStrokeHistory;
	}
	
	protected function createHasPersonStrokeHistory() {
		return FALSE;
	}

	public function setHasPersonStrokeHistory($hasPersonStrokeHistory) {
		$this->hasPersonStrokeHistory = $this->validateHasPersonStrokeHistory($hasPersonStrokeHistory);
	}

	protected function validateHasPersonStrokeHistory($hasPersonStrokeHistory) {
		if ( ! is_bool($hasPersonStrokeHistory) && ! is_null($hasPersonStrokeHistory) ) {
			throw new \Exception(sprintf('Supplied %s value was not %s', 'hasPersonStrokeHistory', 'boolean'));
		}
	
		return $hasPersonStrokeHistory;
	}
} // end class CardiacProfile
