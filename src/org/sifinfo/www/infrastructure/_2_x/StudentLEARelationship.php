<?php
namespace org\sifinfo\www\infrastructure\_2_x;



/**
 * @XmlNamespaces ({
 *	@XmlNamespace(url="http://www.sifinfo.org/infrastructure/2.x", prefix="")
 * })
 * @XmlEntity	(xml="StudentLEARelationship")
 */
class StudentLEARelationship {
	/**
	 */

	/**
	 * @XmlElement	(type="\org\sifinfo\www\infrastructure\_2_x\MembershipType", name="MembershipType")
	 */
	protected $membershipType;

	/**
	 * @XmlElement	(type="\org\sifinfo\www\infrastructure\_2_x\OrganizationRelationshipType", name="LEARelationshipType")
	 */
	protected $lEARelationshipType;

	/**
	 * @XmlElement	(type="\org\sifinfo\www\infrastructure\_2_x\SIFExtendedElementsType", name="SIF_ExtendedElements")
	 */
	protected $sifExtendedElements;

	public function __construct($membershipType = NULL, $lEARelationshipType = NULL, $sifExtendedElements = NULL) {
		$this->membershipType = ($membershipType===NULL) ? NULL : $this->validateMembershipType($membershipType);
		$this->lEARelationshipType = ($lEARelationshipType===NULL) ? NULL : $this->validateLEARelationshipType($lEARelationshipType);
		$this->sifExtendedElements = ($sifExtendedElements===NULL) ? NULL : $this->validateSifExtendedElements($sifExtendedElements);
	}

	public function getMembershipType() {
		if ($this->membershipType===NULL) {
			$this->membershipType = $this->createMembershipType();
		}
		return $this->membershipType;
	}
	
	protected function createMembershipType() {
		return new \org\sifinfo\www\infrastructure\_2_x\MembershipType();
	}

	public function setMembershipType($membershipType) {
		$this->membershipType = $this->validateMembershipType($membershipType);
	}

	protected function validateMembershipType($membershipType) {
		if ( ! $membershipType instanceof \org\sifinfo\www\infrastructure\_2_x\MembershipType  && ! is_null($membershipType) ) {
			$membershipType = new \org\sifinfo\www\infrastructure\_2_x\MembershipType ($membershipType);
		}
	
		return $membershipType;
	}

	public function getLEARelationshipType() {
		if ($this->lEARelationshipType===NULL) {
			$this->lEARelationshipType = $this->createLEARelationshipType();
		}
		return $this->lEARelationshipType;
	}
	
	protected function createLEARelationshipType() {
		return new \org\sifinfo\www\infrastructure\_2_x\OrganizationRelationshipType();
	}

	public function setLEARelationshipType($lEARelationshipType) {
		$this->lEARelationshipType = $this->validateLEARelationshipType($lEARelationshipType);
	}

	protected function validateLEARelationshipType($lEARelationshipType) {
		if ( ! $lEARelationshipType instanceof \org\sifinfo\www\infrastructure\_2_x\OrganizationRelationshipType ) {
			$lEARelationshipType = new \org\sifinfo\www\infrastructure\_2_x\OrganizationRelationshipType ($lEARelationshipType);
		}
	
		return $lEARelationshipType;
	}

	public function getSifExtendedElements() {
		if ($this->sifExtendedElements===NULL) {
			$this->sifExtendedElements = $this->createSifExtendedElements();
		}
		return $this->sifExtendedElements;
	}
	
	protected function createSifExtendedElements() {
		return new \org\sifinfo\www\infrastructure\_2_x\SIFExtendedElementsType();
	}

	public function setSifExtendedElements($sifExtendedElements) {
		$this->sifExtendedElements = $this->validateSifExtendedElements($sifExtendedElements);
	}

	protected function validateSifExtendedElements($sifExtendedElements) {
		if ( ! $sifExtendedElements instanceof \org\sifinfo\www\infrastructure\_2_x\SIFExtendedElementsType  && ! is_null($sifExtendedElements) ) {
			$sifExtendedElements = new \org\sifinfo\www\infrastructure\_2_x\SIFExtendedElementsType ($sifExtendedElements);
		}
	
		return $sifExtendedElements;
	}
} // end class StudentLEARelationship
