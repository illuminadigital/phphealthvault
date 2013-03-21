<?php
namespace com\microsoft\wc\thing\family_history;



/**
 * @XmlNamespaces ({
 *	@XmlNamespace(url="urn:com.microsoft.wc.thing.family-history", prefix="")
 * })
 * @XmlEntity	(xml="family-history")
 */
class FamilyHistory extends \com\microsoft\wc\thing\AnyMixed {
	/**
	 * Information related to a family history.
	 * Note: Please use the new version of this data type instead of this version.This thing type describes the family history of a person.
	 */

	const ID = '6D39F894-F7AC-4FCE-AC78-B22693BF96E6';
	const NAME = 'Family History';

	/**
	 * List of manually overridden properties that should not be re-generated automatically
	 * @var array
	 */
	protected $_overrides = array();


	/**
	 * @XmlElement	(type="\com\microsoft\wc\types\CodableValue", name="condition")
	 */
	protected $condition;

	/**
	 * @XmlElement	(type="\com\microsoft\wc\types\CodableValue", name="relationship")
	 */
	protected $relationship;

	/**
	 * @XmlElement	(type="\com\microsoft\wc\thing\types\NonNegativeInt", name="age-of-onset")
	 */
	protected $ageOfOnset;

	/**
	 * @XmlElement	(type="\com\microsoft\wc\dates\ApproxDate", name="date-of-birth")
	 */
	protected $dateOfBirth;

	/**
	 * @XmlElement	(type="\com\microsoft\wc\thing\types\NonNegativeInt", name="age-of-resolution")
	 */
	protected $ageOfResolution;

	/**
	 * @XmlElement	(type="\com\microsoft\wc\thing\types\DurationValue", name="duration")
	 */
	protected $duration;

	/**
	 * @XmlText	(type="string", name="severity")
	 */
	protected $severity;

	/**
	 * @XmlText	(type="boolean", name="is-recurring")
	 */
	protected $isRecurring;

	/**
	 * @XmlElement	(type="\com\microsoft\wc\types\CodableValue", name="status")
	 */
	protected $status;

	public function __construct($condition = NULL, $relationship = NULL, $ageOfOnset = NULL, $dateOfBirth = NULL, $ageOfResolution = NULL, $duration = NULL, $severity = NULL, $isRecurring = NULL, $status = NULL) {
		$this->condition = ($condition===NULL) ? NULL : $this->validateCondition($condition);
		$this->relationship = ($relationship===NULL) ? NULL : $this->validateRelationship($relationship);
		$this->ageOfOnset = ($ageOfOnset===NULL) ? NULL : $this->validateAgeOfOnset($ageOfOnset);
		$this->dateOfBirth = ($dateOfBirth===NULL) ? NULL : $this->validateDateOfBirth($dateOfBirth);
		$this->ageOfResolution = ($ageOfResolution===NULL) ? NULL : $this->validateAgeOfResolution($ageOfResolution);
		$this->duration = ($duration===NULL) ? NULL : $this->validateDuration($duration);
		$this->severity = ($severity===NULL) ? NULL : $this->validateSeverity($severity);
		$this->isRecurring = ($isRecurring===NULL) ? NULL : $this->validateIsRecurring($isRecurring);
		$this->status = ($status===NULL) ? NULL : $this->validateStatus($status);
	}

	public function getCondition($autoCreate = TRUE) {
		if ($this->condition===NULL && $autoCreate && ! isset($this->_overrides['condition']) ) {
			$this->condition = $this->createCondition();
		}
		return $this->condition;
	}
	
	protected function createCondition() {
		return new \com\microsoft\wc\types\CodableValue();
	}

	public function setCondition($condition) {
		$this->condition = $this->validateCondition($condition);
	}

	protected function validateCondition($condition) {
		if ( ! $condition instanceof \com\microsoft\wc\types\CodableValue ) {
			$condition = new \com\microsoft\wc\types\CodableValue ($condition);
		}
	
		return $condition;
	}

	public function getRelationship($autoCreate = TRUE) {
		if ($this->relationship===NULL && $autoCreate && ! isset($this->_overrides['relationship']) ) {
			$this->relationship = $this->createRelationship();
		}
		return $this->relationship;
	}
	
	protected function createRelationship() {
		return new \com\microsoft\wc\types\CodableValue();
	}

	public function setRelationship($relationship) {
		$this->relationship = $this->validateRelationship($relationship);
	}

	protected function validateRelationship($relationship) {
		if ( $relationship === FALSE ) {
			$this->_overrides['relationship'] = TRUE;
			return NULL;
		}

		if ( ! $relationship instanceof \com\microsoft\wc\types\CodableValue  && ! is_null($relationship) ) {
			$relationship = new \com\microsoft\wc\types\CodableValue ($relationship);
		}

		unset ($this->_overrides['relationship']);
	
		return $relationship;
	}

	public function getAgeOfOnset($autoCreate = TRUE) {
		if ($this->ageOfOnset===NULL && $autoCreate && ! isset($this->_overrides['ageOfOnset']) ) {
			$this->ageOfOnset = $this->createAgeOfOnset();
		}
		return $this->ageOfOnset;
	}
	
	protected function createAgeOfOnset() {
		return new \com\microsoft\wc\thing\types\NonNegativeInt();
	}

	public function setAgeOfOnset($ageOfOnset) {
		$this->ageOfOnset = $this->validateAgeOfOnset($ageOfOnset);
	}

	protected function validateAgeOfOnset($ageOfOnset) {
		if ( $ageOfOnset === FALSE ) {
			$this->_overrides['ageOfOnset'] = TRUE;
			return NULL;
		}

		if ( ! $ageOfOnset instanceof \com\microsoft\wc\thing\types\NonNegativeInt  && ! is_null($ageOfOnset) ) {
			$ageOfOnset = new \com\microsoft\wc\thing\types\NonNegativeInt ($ageOfOnset);
		}

		unset ($this->_overrides['ageOfOnset']);
	
		return $ageOfOnset;
	}

	public function getDateOfBirth($autoCreate = TRUE) {
		if ($this->dateOfBirth===NULL && $autoCreate && ! isset($this->_overrides['dateOfBirth']) ) {
			$this->dateOfBirth = $this->createDateOfBirth();
		}
		return $this->dateOfBirth;
	}
	
	protected function createDateOfBirth() {
		return new \com\microsoft\wc\dates\ApproxDate();
	}

	public function setDateOfBirth($dateOfBirth) {
		$this->dateOfBirth = $this->validateDateOfBirth($dateOfBirth);
	}

	protected function validateDateOfBirth($dateOfBirth) {
		if ( $dateOfBirth === FALSE ) {
			$this->_overrides['dateOfBirth'] = TRUE;
			return NULL;
		}

		if ( ! $dateOfBirth instanceof \com\microsoft\wc\dates\ApproxDate  && ! is_null($dateOfBirth) ) {
			$dateOfBirth = new \com\microsoft\wc\dates\ApproxDate ($dateOfBirth);
		}

		unset ($this->_overrides['dateOfBirth']);
	
		return $dateOfBirth;
	}

	public function getAgeOfResolution($autoCreate = TRUE) {
		if ($this->ageOfResolution===NULL && $autoCreate && ! isset($this->_overrides['ageOfResolution']) ) {
			$this->ageOfResolution = $this->createAgeOfResolution();
		}
		return $this->ageOfResolution;
	}
	
	protected function createAgeOfResolution() {
		return new \com\microsoft\wc\thing\types\NonNegativeInt();
	}

	public function setAgeOfResolution($ageOfResolution) {
		$this->ageOfResolution = $this->validateAgeOfResolution($ageOfResolution);
	}

	protected function validateAgeOfResolution($ageOfResolution) {
		if ( $ageOfResolution === FALSE ) {
			$this->_overrides['ageOfResolution'] = TRUE;
			return NULL;
		}

		if ( ! $ageOfResolution instanceof \com\microsoft\wc\thing\types\NonNegativeInt  && ! is_null($ageOfResolution) ) {
			$ageOfResolution = new \com\microsoft\wc\thing\types\NonNegativeInt ($ageOfResolution);
		}

		unset ($this->_overrides['ageOfResolution']);
	
		return $ageOfResolution;
	}

	public function getDuration($autoCreate = TRUE) {
		if ($this->duration===NULL && $autoCreate && ! isset($this->_overrides['duration']) ) {
			$this->duration = $this->createDuration();
		}
		return $this->duration;
	}
	
	protected function createDuration() {
		return new \com\microsoft\wc\thing\types\DurationValue();
	}

	public function setDuration($duration) {
		$this->duration = $this->validateDuration($duration);
	}

	protected function validateDuration($duration) {
		if ( $duration === FALSE ) {
			$this->_overrides['duration'] = TRUE;
			return NULL;
		}

		if ( ! $duration instanceof \com\microsoft\wc\thing\types\DurationValue  && ! is_null($duration) ) {
			$duration = new \com\microsoft\wc\thing\types\DurationValue ($duration);
		}

		unset ($this->_overrides['duration']);
	
		return $duration;
	}

	public function getSeverity($autoCreate = TRUE) {
		if ($this->severity===NULL && $autoCreate && ! isset($this->_overrides['severity']) ) {
			$this->severity = $this->createSeverity();
		}
		return $this->severity;
	}
	
	protected function createSeverity() {
		return '';
	}

	public function setSeverity($severity) {
		$this->severity = $this->validateSeverity($severity);
	}

	protected function validateSeverity($severity) {
		if ( ! is_string($severity) && ! is_null($severity) ) {
			throw new \Exception(sprintf('Supplied %s value was not %s', 'severity', 'string'));
		}
	
		return $severity;
	}

	public function getIsRecurring($autoCreate = TRUE) {
		if ($this->isRecurring===NULL && $autoCreate && ! isset($this->_overrides['isRecurring']) ) {
			$this->isRecurring = $this->createIsRecurring();
		}
		return $this->isRecurring;
	}
	
	protected function createIsRecurring() {
		return FALSE;
	}

	public function setIsRecurring($isRecurring) {
		$this->isRecurring = $this->validateIsRecurring($isRecurring);
	}

	protected function validateIsRecurring($isRecurring) {
		if ( ! is_bool($isRecurring) && ! is_null($isRecurring) ) {
			throw new \Exception(sprintf('Supplied %s value was not %s', 'isRecurring', 'boolean'));
		}
	
		return $isRecurring;
	}

	public function getStatus($autoCreate = TRUE) {
		if ($this->status===NULL && $autoCreate && ! isset($this->_overrides['status']) ) {
			$this->status = $this->createStatus();
		}
		return $this->status;
	}
	
	protected function createStatus() {
		return new \com\microsoft\wc\types\CodableValue();
	}

	public function setStatus($status) {
		$this->status = $this->validateStatus($status);
	}

	protected function validateStatus($status) {
		if ( $status === FALSE ) {
			$this->_overrides['status'] = TRUE;
			return NULL;
		}

		if ( ! $status instanceof \com\microsoft\wc\types\CodableValue  && ! is_null($status) ) {
			$status = new \com\microsoft\wc\types\CodableValue ($status);
		}

		unset ($this->_overrides['status']);
	
		return $status;
	}
} // end class FamilyHistory
