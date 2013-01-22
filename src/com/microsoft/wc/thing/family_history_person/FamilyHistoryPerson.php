<?php
namespace com\microsoft\wc\thing\family_history_person;



/**
 * @XmlNamespaces ({
 *	@XmlNamespace(url="urn:com.microsoft.wc.thing.family-history-person", prefix="")
 * })
 * @XmlEntity	(xml="family-history-person")
 */
class FamilyHistoryPerson extends \com\microsoft\wc\thing\AnyMixed {
	/**
	 * Information about a relative of the record owner.
	 * Note: Please use the family history type instead of this type.Stores information about a relative of the record owner, such as a mother, father, or aunt.
	 */

	const ID = 'cc23422c-4fba-4a23-b52a-c01d6cd53fdf';
	const NAME = 'FamilyHistoryPerson';

	/**
	 * @XmlElement	(type="\com\microsoft\wc\thing\types\Person", name="relative-name")
	 */
	protected $relativeName;

	/**
	 * @XmlElement	(type="\com\microsoft\wc\types\CodableValue", name="relationship")
	 */
	protected $relationship;

	/**
	 * @XmlElement	(type="\com\microsoft\wc\dates\ApproxDate", name="date-of-birth")
	 */
	protected $dateOfBirth;

	/**
	 * @XmlElement	(type="\com\microsoft\wc\dates\ApproxDate", name="date-of-death")
	 */
	protected $dateOfDeath;

	public function __construct($relativeName = NULL, $relationship = NULL, $dateOfBirth = NULL, $dateOfDeath = NULL) {
		$this->relativeName = ($relativeName===NULL) ? NULL : $this->validateRelativeName($relativeName);
		$this->relationship = ($relationship===NULL) ? NULL : $this->validateRelationship($relationship);
		$this->dateOfBirth = ($dateOfBirth===NULL) ? NULL : $this->validateDateOfBirth($dateOfBirth);
		$this->dateOfDeath = ($dateOfDeath===NULL) ? NULL : $this->validateDateOfDeath($dateOfDeath);
	}

	public function getRelativeName() {
		if ($this->relativeName===NULL) {
			$this->relativeName = $this->createRelativeName();
		}
		return $this->relativeName;
	}
	
	protected function createRelativeName() {
		return new \com\microsoft\wc\thing\types\Person();
	}

	public function setRelativeName($relativeName) {
		$this->relativeName = $this->validateRelativeName($relativeName);
	}

	protected function validateRelativeName($relativeName) {
		if ( ! $relativeName instanceof \com\microsoft\wc\thing\types\Person ) {
			$relativeName = new \com\microsoft\wc\thing\types\Person ($relativeName);
		}
	
		return $relativeName;
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

	public function getDateOfDeath() {
		if ($this->dateOfDeath===NULL) {
			$this->dateOfDeath = $this->createDateOfDeath();
		}
		return $this->dateOfDeath;
	}
	
	protected function createDateOfDeath() {
		return new \com\microsoft\wc\dates\ApproxDate();
	}

	public function setDateOfDeath($dateOfDeath) {
		$this->dateOfDeath = $this->validateDateOfDeath($dateOfDeath);
	}

	protected function validateDateOfDeath($dateOfDeath) {
		if ( ! $dateOfDeath instanceof \com\microsoft\wc\dates\ApproxDate  && ! is_null($dateOfDeath) ) {
			$dateOfDeath = new \com\microsoft\wc\dates\ApproxDate ($dateOfDeath);
		}
	
		return $dateOfDeath;
	}
} // end class FamilyHistoryPerson
