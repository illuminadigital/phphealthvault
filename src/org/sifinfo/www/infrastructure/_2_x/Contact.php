<?php
namespace org\sifinfo\www\infrastructure\_2_x;



/**
 * @XmlNamespaces ({
 *	@XmlNamespace(url="http://www.sifinfo.org/infrastructure/2.x", prefix="")
 * })
 * @XmlEntity	(xml="Contact")
 */
class Contact {
	/**
	 */

	/**
	 * @XmlElement	(type="\org\sifinfo\www\infrastructure\_2_x\Relationship", name="Relationship")
	 */
	protected $relationship;

	/**
	 * @XmlElement	(type="\org\sifinfo\www\infrastructure\_2_x\Names", name="Names")
	 */
	protected $names;

	/**
	 * @XmlElement	(type="\org\sifinfo\www\infrastructure\_2_x\OtherIdListType", name="OtherIdList")
	 */
	protected $otherIdList;

	/**
	 * @XmlElement	(type="\org\sifinfo\www\infrastructure\_2_x\EducationalLevelType", name="EducationalLevel")
	 */
	protected $educationalLevel;

	public function __construct($relationship = NULL, $names = NULL, $otherIdList = NULL, $educationalLevel = NULL) {
		$this->relationship = ($relationship===NULL) ? NULL : $this->validateRelationship($relationship);
		$this->names = ($names===NULL) ? NULL : $this->validateNames($names);
		$this->otherIdList = ($otherIdList===NULL) ? NULL : $this->validateOtherIdList($otherIdList);
		$this->educationalLevel = ($educationalLevel===NULL) ? NULL : $this->validateEducationalLevel($educationalLevel);
	}

	public function getRelationship() {
		if ($this->relationship===NULL) {
			$this->relationship = $this->createRelationship();
		}
		return $this->relationship;
	}
	
	protected function createRelationship() {
		return new \org\sifinfo\www\infrastructure\_2_x\Relationship();
	}

	public function setRelationship($relationship) {
		$this->relationship = $this->validateRelationship($relationship);
	}

	protected function validateRelationship($relationship) {
		if ( ! $relationship instanceof \org\sifinfo\www\infrastructure\_2_x\Relationship ) {
			$relationship = new \org\sifinfo\www\infrastructure\_2_x\Relationship ($relationship);
		}
	
		return $relationship;
	}

	public function getNames() {
		if ($this->names===NULL) {
			$this->names = $this->createNames();
		}
		return $this->names;
	}
	
	protected function createNames() {
		return new \org\sifinfo\www\infrastructure\_2_x\Names();
	}

	public function setNames($names) {
		$this->names = $this->validateNames($names);
	}

	protected function validateNames($names) {
		if ( ! $names instanceof \org\sifinfo\www\infrastructure\_2_x\Names  && ! is_null($names) ) {
			$names = new \org\sifinfo\www\infrastructure\_2_x\Names ($names);
		}
	
		return $names;
	}

	public function getOtherIdList() {
		if ($this->otherIdList===NULL) {
			$this->otherIdList = $this->createOtherIdList();
		}
		return $this->otherIdList;
	}
	
	protected function createOtherIdList() {
		return new \org\sifinfo\www\infrastructure\_2_x\OtherIdListType();
	}

	public function setOtherIdList($otherIdList) {
		$this->otherIdList = $this->validateOtherIdList($otherIdList);
	}

	protected function validateOtherIdList($otherIdList) {
		if ( ! $otherIdList instanceof \org\sifinfo\www\infrastructure\_2_x\OtherIdListType  && ! is_null($otherIdList) ) {
			$otherIdList = new \org\sifinfo\www\infrastructure\_2_x\OtherIdListType ($otherIdList);
		}
	
		return $otherIdList;
	}

	public function getEducationalLevel() {
		if ($this->educationalLevel===NULL) {
			$this->educationalLevel = $this->createEducationalLevel();
		}
		return $this->educationalLevel;
	}
	
	protected function createEducationalLevel() {
		return new \org\sifinfo\www\infrastructure\_2_x\EducationalLevelType();
	}

	public function setEducationalLevel($educationalLevel) {
		$this->educationalLevel = $this->validateEducationalLevel($educationalLevel);
	}

	protected function validateEducationalLevel($educationalLevel) {
		if ( ! $educationalLevel instanceof \org\sifinfo\www\infrastructure\_2_x\EducationalLevelType  && ! is_null($educationalLevel) ) {
			$educationalLevel = new \org\sifinfo\www\infrastructure\_2_x\EducationalLevelType ($educationalLevel);
		}
	
		return $educationalLevel;
	}
} // end class Contact
