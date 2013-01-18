<?php
namespace com\microsoft\wc\thing\family_history;



/**
 * @XmlNamespaces ({
 *	@XmlNamespace(url="urn:com.microsoft.wc.thing.family-history", prefix="")
 * })
 * @XmlEntity	(xml="family-history")
 */
class FamilyHistory extends \com\microsoft\wc\thing\Thing {
	/**
	 * Information related to a family history.
	 * Note: Please use the new version of this data type instead of this version.This thing type describes the family history of a person.
	 */

	const ID = '6D39F894-F7AC-4FCE-AC78-B22693BF96E6';
	const NAME = 'Family History';

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

	public function getCondition() {
		if ($this->condition===NULL) {
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

	public function getRelationship() {
		if ($this->relationship===NULL) {
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
		if ( ! $relationship instanceof \com\microsoft\wc\types\CodableValue  && ! is_null($relationship) ) {
			$relationship = new \com\microsoft\wc\types\CodableValue ($relationship);
		}
	
		return $relationship;
	}

	public function getAgeOfOnset() {
		if ($this->ageOfOnset===NULL) {
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
		if ( ! $ageOfOnset instanceof \com\microsoft\wc\thing\types\NonNegativeInt  && ! is_null($ageOfOnset) ) {
			$ageOfOnset = new \com\microsoft\wc\thing\types\NonNegativeInt ($ageOfOnset);
		}
	
		return $ageOfOnset;
	}

	public function getDateOfBirth() {
		if ($this->dateOfBirth===NULL) {
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
		if ( ! $dateOfBirth instanceof \com\microsoft\wc\dates\ApproxDate  && ! is_null($dateOfBirth) ) {
			$dateOfBirth = new \com\microsoft\wc\dates\ApproxDate ($dateOfBirth);
		}
	
		return $dateOfBirth;
	}

	public function getAgeOfResolution() {
		if ($this->ageOfResolution===NULL) {
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
		if ( ! $ageOfResolution instanceof \com\microsoft\wc\thing\types\NonNegativeInt  && ! is_null($ageOfResolution) ) {
			$ageOfResolution = new \com\microsoft\wc\thing\types\NonNegativeInt ($ageOfResolution);
		}
	
		return $ageOfResolution;
	}

	public function getDuration() {
		if ($this->duration===NULL) {
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
		if ( ! $duration instanceof \com\microsoft\wc\thing\types\DurationValue  && ! is_null($duration) ) {
			$duration = new \com\microsoft\wc\thing\types\DurationValue ($duration);
		}
	
		return $duration;
	}

	public function getSeverity() {
		if ($this->severity===NULL) {
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

	public function getIsRecurring() {
		if ($this->isRecurring===NULL) {
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

	public function getStatus() {
		if ($this->status===NULL) {
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
		if ( ! $status instanceof \com\microsoft\wc\types\CodableValue  && ! is_null($status) ) {
			$status = new \com\microsoft\wc\types\CodableValue ($status);
		}
	
		return $status;
	}
} // end class FamilyHistory
