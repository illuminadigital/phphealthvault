<?php
namespace org\sifinfo\www\infrastructure\_2_x;



/**
 * @XmlNamespaces ({
 *	@XmlNamespace(url="http://www.sifinfo.org/infrastructure/2.x", prefix="")
 * })
 * @XmlEntity	(xml="StudentSchoolEnrollmentData")
 */
class StudentSchoolEnrollmentData {
	/**
	 */

	/**
	 * List of manually overridden properties that should not be re-generated automatically
	 * @var array
	 */
	protected $_overrides = array();


	/**
	 * @XmlElement	(type="\org\sifinfo\www\infrastructure\_2_x\GradeLevel", name="GradeLevel")
	 */
	protected $gradeLevel;

	/**
	 * @XmlElement	(type="\org\sifinfo\www\infrastructure\_2_x\Advisor", name="Advisor")
	 */
	protected $advisor;

	/**
	 * @XmlElement	(type="\org\sifinfo\www\infrastructure\_2_x\Counselor", name="Counselor")
	 */
	protected $counselor;

	/**
	 * @XmlElement	(type="\org\sifinfo\www\infrastructure\_2_x\SIFExtendedElementsType", name="SIF_ExtendedElements")
	 */
	protected $sifExtendedElements;

	/**
	 * @XmlAttribute	(type="string", name="SchoolAttendedRefId")
	 */
	protected $schoolAttendedRefId;

	public function __construct($gradeLevel = NULL, $advisor = NULL, $counselor = NULL, $sifExtendedElements = NULL, $schoolAttendedRefId = NULL) {
		$this->gradeLevel = ($gradeLevel===NULL) ? NULL : $this->validateGradeLevel($gradeLevel);
		$this->advisor = ($advisor===NULL) ? NULL : $this->validateAdvisor($advisor);
		$this->counselor = ($counselor===NULL) ? NULL : $this->validateCounselor($counselor);
		$this->sifExtendedElements = ($sifExtendedElements===NULL) ? NULL : $this->validateSifExtendedElements($sifExtendedElements);
		$this->schoolAttendedRefId = ($schoolAttendedRefId===NULL) ? NULL : $this->validateSchoolAttendedRefId($schoolAttendedRefId);
	}

	public function getGradeLevel($autoCreate = TRUE) {
		if ($this->gradeLevel===NULL && $autoCreate && ! isset($this->_overrides['gradeLevel']) ) {
			$this->gradeLevel = $this->createGradeLevel();
		}
		return $this->gradeLevel;
	}
	
	protected function createGradeLevel() {
		return NULL;
	}

	public function setGradeLevel($gradeLevel) {
		$this->gradeLevel = $this->validateGradeLevel($gradeLevel);
	}

	protected function validateGradeLevel($gradeLevel) {
		if (!is_GradeLevel($gradeLevel)) {
			throw new \Exception(sprintf('Supplied %s value was not %s', 'gradeLevel', 'GradeLevel'));
		}
	
		return $gradeLevel;
	}

	public function getAdvisor($autoCreate = TRUE) {
		if ($this->advisor===NULL && $autoCreate && ! isset($this->_overrides['advisor']) ) {
			$this->advisor = $this->createAdvisor();
		}
		return $this->advisor;
	}
	
	protected function createAdvisor() {
		return new \org\sifinfo\www\infrastructure\_2_x\Advisor();
	}

	public function setAdvisor($advisor) {
		$this->advisor = $this->validateAdvisor($advisor);
	}

	protected function validateAdvisor($advisor) {
		if ( $advisor === FALSE ) {
			$this->_overrides['advisor'] = TRUE;
			return NULL;
		}

		if ( ! $advisor instanceof \org\sifinfo\www\infrastructure\_2_x\Advisor  && ! is_null($advisor) ) {
			$advisor = new \org\sifinfo\www\infrastructure\_2_x\Advisor ($advisor);
		}

		unset ($this->_overrides['advisor']);
	
		return $advisor;
	}

	public function getCounselor($autoCreate = TRUE) {
		if ($this->counselor===NULL && $autoCreate && ! isset($this->_overrides['counselor']) ) {
			$this->counselor = $this->createCounselor();
		}
		return $this->counselor;
	}
	
	protected function createCounselor() {
		return new \org\sifinfo\www\infrastructure\_2_x\Counselor();
	}

	public function setCounselor($counselor) {
		$this->counselor = $this->validateCounselor($counselor);
	}

	protected function validateCounselor($counselor) {
		if ( $counselor === FALSE ) {
			$this->_overrides['counselor'] = TRUE;
			return NULL;
		}

		if ( ! $counselor instanceof \org\sifinfo\www\infrastructure\_2_x\Counselor  && ! is_null($counselor) ) {
			$counselor = new \org\sifinfo\www\infrastructure\_2_x\Counselor ($counselor);
		}

		unset ($this->_overrides['counselor']);
	
		return $counselor;
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

	public function getSchoolAttendedRefId($autoCreate = TRUE) {
		if ($this->schoolAttendedRefId===NULL && $autoCreate && ! isset($this->_overrides['schoolAttendedRefId']) ) {
			$this->schoolAttendedRefId = $this->createSchoolAttendedRefId();
		}
		return $this->schoolAttendedRefId;
	}
	
	protected function createSchoolAttendedRefId() {
		return NULL;
	}

	public function setSchoolAttendedRefId($schoolAttendedRefId) {
		$this->schoolAttendedRefId = $this->validateSchoolAttendedRefId($schoolAttendedRefId);
	}

	protected function validateSchoolAttendedRefId($schoolAttendedRefId) {
	
		return $schoolAttendedRefId;
	}
} // end class StudentSchoolEnrollmentData
