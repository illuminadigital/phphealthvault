<?php
namespace org\sifinfo\www\infrastructure\_2_x;



/**
 * @XmlNamespaces ({
 *	@XmlNamespace(url="http://www.sifinfo.org/infrastructure/2.x", prefix="")
 * })
 * @XmlEntity	(xml="StudentContactsSummary")
 */
class StudentContactsSummary {
	/**
	 */

	/**
	 * @XmlElement	(type="\org\sifinfo\www\infrastructure\_2_x\ParentGuardian1", name="ParentGuardian1")
	 */
	protected $parentGuardian1;

	/**
	 * @XmlElement	(type="\org\sifinfo\www\infrastructure\_2_x\ParentGuardian2", name="ParentGuardian2")
	 */
	protected $parentGuardian2;

	public function __construct($parentGuardian1 = NULL, $parentGuardian2 = NULL) {
		$this->parentGuardian1 = ($parentGuardian1===NULL) ? NULL : $this->validateParentGuardian1($parentGuardian1);
		$this->parentGuardian2 = ($parentGuardian2===NULL) ? NULL : $this->validateParentGuardian2($parentGuardian2);
	}

	public function getParentGuardian1() {
		if ($this->parentGuardian1===NULL) {
			$this->parentGuardian1 = $this->createParentGuardian1();
		}
		return $this->parentGuardian1;
	}
	
	protected function createParentGuardian1() {
		return new \org\sifinfo\www\infrastructure\_2_x\ParentGuardian1();
	}

	public function setParentGuardian1($parentGuardian1) {
		$this->parentGuardian1 = $this->validateParentGuardian1($parentGuardian1);
	}

	protected function validateParentGuardian1($parentGuardian1) {
		if ( ! $parentGuardian1 instanceof \org\sifinfo\www\infrastructure\_2_x\ParentGuardian1 ) {
			$parentGuardian1 = new \org\sifinfo\www\infrastructure\_2_x\ParentGuardian1 ($parentGuardian1);
		}
	
		return $parentGuardian1;
	}

	public function getParentGuardian2() {
		if ($this->parentGuardian2===NULL) {
			$this->parentGuardian2 = $this->createParentGuardian2();
		}
		return $this->parentGuardian2;
	}
	
	protected function createParentGuardian2() {
		return new \org\sifinfo\www\infrastructure\_2_x\ParentGuardian2();
	}

	public function setParentGuardian2($parentGuardian2) {
		$this->parentGuardian2 = $this->validateParentGuardian2($parentGuardian2);
	}

	protected function validateParentGuardian2($parentGuardian2) {
		if ( ! $parentGuardian2 instanceof \org\sifinfo\www\infrastructure\_2_x\ParentGuardian2  && ! is_null($parentGuardian2) ) {
			$parentGuardian2 = new \org\sifinfo\www\infrastructure\_2_x\ParentGuardian2 ($parentGuardian2);
		}
	
		return $parentGuardian2;
	}
} // end class StudentContactsSummary
