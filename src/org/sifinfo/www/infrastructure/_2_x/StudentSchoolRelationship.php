<?php
namespace org\sifinfo\www\infrastructure\_2_x;



/**
 * @XmlNamespaces ({
 *	@XmlNamespace(url="http://www.sifinfo.org/infrastructure/2.x", prefix="")
 * })
 * @XmlEntity	(xml="StudentSchoolRelationship")
 */
class StudentSchoolRelationship {
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
	 * @XmlElement	(type="\org\sifinfo\www\infrastructure\_2_x\ResidencyStatus", name="ResidencyStatus")
	 */
	protected $residencyStatus;

	/**
	 * @XmlElement	(type="\org\sifinfo\www\infrastructure\_2_x\NCES0599NonResidentAttendanceRationaleType", name="NonResidentAttendReason")
	 */
	protected $nonResidentAttendReason;

	/**
	 * @XmlElement	(type="\org\sifinfo\www\infrastructure\_2_x\SIFExtendedElementsType", name="SIF_ExtendedElements")
	 */
	protected $sifExtendedElements;

	public function __construct($membershipType = NULL, $residencyStatus = NULL, $nonResidentAttendReason = NULL, $sifExtendedElements = NULL) {
		$this->membershipType = ($membershipType===NULL) ? NULL : $this->validateMembershipType($membershipType);
		$this->residencyStatus = ($residencyStatus===NULL) ? NULL : $this->validateResidencyStatus($residencyStatus);
		$this->nonResidentAttendReason = ($nonResidentAttendReason===NULL) ? NULL : $this->validateNonResidentAttendReason($nonResidentAttendReason);
		$this->sifExtendedElements = ($sifExtendedElements===NULL) ? NULL : $this->validateSifExtendedElements($sifExtendedElements);
	}

	public function getMembershipType($autoCreate = TRUE) {
		if ($this->membershipType===NULL && $autoCreate && ! isset($this->_overrides['membershipType']) ) {
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
		if ( $membershipType === FALSE ) {
			$this->_overrides['membershipType'] = TRUE;
			return NULL;
		}

		if ( ! $membershipType instanceof \org\sifinfo\www\infrastructure\_2_x\MembershipType  && ! is_null($membershipType) ) {
			$membershipType = new \org\sifinfo\www\infrastructure\_2_x\MembershipType ($membershipType);
		}

		unset ($this->_overrides['membershipType']);
	
		return $membershipType;
	}

	public function getResidencyStatus($autoCreate = TRUE) {
		if ($this->residencyStatus===NULL && $autoCreate && ! isset($this->_overrides['residencyStatus']) ) {
			$this->residencyStatus = $this->createResidencyStatus();
		}
		return $this->residencyStatus;
	}
	
	protected function createResidencyStatus() {
		return new \org\sifinfo\www\infrastructure\_2_x\ResidencyStatus();
	}

	public function setResidencyStatus($residencyStatus) {
		$this->residencyStatus = $this->validateResidencyStatus($residencyStatus);
	}

	protected function validateResidencyStatus($residencyStatus) {
		if ( $residencyStatus === FALSE ) {
			$this->_overrides['residencyStatus'] = TRUE;
			return NULL;
		}

		if ( ! $residencyStatus instanceof \org\sifinfo\www\infrastructure\_2_x\ResidencyStatus  && ! is_null($residencyStatus) ) {
			$residencyStatus = new \org\sifinfo\www\infrastructure\_2_x\ResidencyStatus ($residencyStatus);
		}

		unset ($this->_overrides['residencyStatus']);
	
		return $residencyStatus;
	}

	public function getNonResidentAttendReason($autoCreate = TRUE) {
		if ($this->nonResidentAttendReason===NULL && $autoCreate && ! isset($this->_overrides['nonResidentAttendReason']) ) {
			$this->nonResidentAttendReason = $this->createNonResidentAttendReason();
		}
		return $this->nonResidentAttendReason;
	}
	
	protected function createNonResidentAttendReason() {
		return NULL;
	}

	public function setNonResidentAttendReason($nonResidentAttendReason) {
		$this->nonResidentAttendReason = $this->validateNonResidentAttendReason($nonResidentAttendReason);
	}

	protected function validateNonResidentAttendReason($nonResidentAttendReason) {
	
		return $nonResidentAttendReason;
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
} // end class StudentSchoolRelationship
