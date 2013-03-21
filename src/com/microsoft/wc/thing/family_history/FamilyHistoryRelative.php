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
	 * List of manually overridden properties that should not be re-generated automatically
	 * @var array
	 */
	protected $_overrides = array();


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
		if ( ! $relationship instanceof \com\microsoft\wc\types\CodableValue ) {
			$relationship = new \com\microsoft\wc\types\CodableValue ($relationship);
		}
	
		return $relationship;
	}

	public function getRelativeName($autoCreate = TRUE) {
		if ($this->relativeName===NULL && $autoCreate && ! isset($this->_overrides['relativeName']) ) {
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
		if ( $relativeName === FALSE ) {
			$this->_overrides['relativeName'] = TRUE;
			return NULL;
		}

		if ( ! $relativeName instanceof \com\microsoft\wc\thing\types\Person  && ! is_null($relativeName) ) {
			$relativeName = new \com\microsoft\wc\thing\types\Person ($relativeName);
		}

		unset ($this->_overrides['relativeName']);
	
		return $relativeName;
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

	public function getDateOfDeath($autoCreate = TRUE) {
		if ($this->dateOfDeath===NULL && $autoCreate && ! isset($this->_overrides['dateOfDeath']) ) {
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
		if ( $dateOfDeath === FALSE ) {
			$this->_overrides['dateOfDeath'] = TRUE;
			return NULL;
		}

		if ( ! $dateOfDeath instanceof \com\microsoft\wc\dates\ApproxDate  && ! is_null($dateOfDeath) ) {
			$dateOfDeath = new \com\microsoft\wc\dates\ApproxDate ($dateOfDeath);
		}

		unset ($this->_overrides['dateOfDeath']);
	
		return $dateOfDeath;
	}

	public function getRegionOfOrigin($autoCreate = TRUE) {
		if ($this->regionOfOrigin===NULL && $autoCreate && ! isset($this->_overrides['regionOfOrigin']) ) {
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
		if ( $regionOfOrigin === FALSE ) {
			$this->_overrides['regionOfOrigin'] = TRUE;
			return NULL;
		}

		if ( ! $regionOfOrigin instanceof \com\microsoft\wc\types\CodableValue  && ! is_null($regionOfOrigin) ) {
			$regionOfOrigin = new \com\microsoft\wc\types\CodableValue ($regionOfOrigin);
		}

		unset ($this->_overrides['regionOfOrigin']);
	
		return $regionOfOrigin;
	}
} // end class FamilyHistoryRelative
