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
	 * List of manually overridden properties that should not be re-generated automatically
	 * @var array
	 */
	protected $_overrides = array();


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

	public function getMembershipType($autoCreate = TRUE) {
		if ($this->membershipType===NULL && $autoCreate && ! isset($this->_overrides['membershipType']) ) {
			$this->membershipType = $this->createMembershipType();
		}
		return $this->membershipType;
	}
	
	protected function createMembershipType() {
		return NULL;
	}

	public function setMembershipType($membershipType) {
		$this->membershipType = $this->validateMembershipType($membershipType);
	}

	protected function validateMembershipType($membershipType) {
	
		return $membershipType;
	}

	public function getLEARelationshipType($autoCreate = TRUE) {
		if ($this->lEARelationshipType===NULL && $autoCreate && ! isset($this->_overrides['lEARelationshipType']) ) {
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

	public function getSifExtendedElements($autoCreate = TRUE) {
		if ($this->sifExtendedElements===NULL && $autoCreate && ! isset($this->_overrides['sifExtendedElements']) ) {
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
		if ( $sifExtendedElements === FALSE ) {
			$this->_overrides['sifExtendedElements'] = TRUE;
			return NULL;
		}

		if ( ! $sifExtendedElements instanceof \org\sifinfo\www\infrastructure\_2_x\SIFExtendedElementsType  && ! is_null($sifExtendedElements) ) {
			$sifExtendedElements = new \org\sifinfo\www\infrastructure\_2_x\SIFExtendedElementsType ($sifExtendedElements);
		}

		unset ($this->_overrides['sifExtendedElements']);
	
		return $sifExtendedElements;
	}
} // end class StudentLEARelationship
