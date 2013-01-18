<?php
namespace com\microsoft\wc\thing\family_history;



/**
 * @XmlNamespaces ({
 *	@XmlNamespace(url="urn:com.microsoft.wc.thing.family-history", prefix="")
 * })
 * @XmlEntity	(xml="FamilyHistoryRelative")
 */
class FamilyHistoryRelative {
	/**
	 * Information describing a relative.
	 */

	/**
	 * @XmlElement	(type="\com\microsoft\wc\types\CodableValue", name="relationship")
	 */
	protected $relationship;

	/**
	 * @XmlElement	(type="\com\microsoft\wc\thing\types\Person", name="relative-name")
	 */
	protected $relativeName;

	/**
	 * @XmlElement	(type="\com\microsoft\wc\dates\ApproxDate", name="date-of-birth")
	 */
	protected $dateOfBirth;

	/**
	 * @XmlElement	(type="\com\microsoft\wc\dates\ApproxDate", name="date-of-death")
	 */
	protected $dateOfDeath;

	/**
	 * @XmlElement	(type="\com\microsoft\wc\types\CodableValue", name="region-of-origin")
	 */
	protected $regionOfOrigin;

	public function __construct($relationship = NULL, $relativeName = NULL, $dateOfBirth = NULL, $dateOfDeath = NULL, $regionOfOrigin = NULL) {
		$this->relationship = ($relationship===NULL) ? NULL : $this->validateRelationship($relationship);
		$this->relativeName = ($relativeName===NULL) ? NULL : $this->validateRelativeName($relativeName);
		$this->dateOfBirth = ($dateOfBirth===NULL) ? NULL : $this->validateDateOfBirth($dateOfBirth);
		$this->dateOfDeath = ($dateOfDeath===NULL) ? NULL : $this->validateDateOfDeath($dateOfDeath);
		$this->regionOfOrigin = ($regionOfOrigin===NULL) ? NULL : $this->validateRegionOfOrigin($regionOfOrigin);
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
		if ( ! $relationship instanceof \com\microsoft\wc\types\CodableValue ) {
			$relationship = new \com\microsoft\wc\types\CodableValue ($relationship);
		}
	
		return $relationship;
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
		if ( ! $relativeName instanceof \com\microsoft\wc\thing\types\Person  && ! is_null($relativeName) ) {
			$relativeName = new \com\microsoft\wc\thing\types\Person ($relativeName);
		}
	
		return $relativeName;
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

	public function getRegionOfOrigin() {
		if ($this->regionOfOrigin===NULL) {
			$this->regionOfOrigin = $this->createRegionOfOrigin();
		}
		return $this->regionOfOrigin;
	}
	
	protected function createRegionOfOrigin() {
		return new \com\microsoft\wc\types\CodableValue();
	}

	public function setRegionOfOrigin($regionOfOrigin) {
		$this->regionOfOrigin = $this->validateRegionOfOrigin($regionOfOrigin);
	}

	protected function validateRegionOfOrigin($regionOfOrigin) {
		if ( ! $regionOfOrigin instanceof \com\microsoft\wc\types\CodableValue  && ! is_null($regionOfOrigin) ) {
			$regionOfOrigin = new \com\microsoft\wc\types\CodableValue ($regionOfOrigin);
		}
	
		return $regionOfOrigin;
	}
} // end class FamilyHistoryRelative
