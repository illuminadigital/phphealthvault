<?php
namespace org\sifinfo\www\infrastructure\_2_x;



/**
 * @XmlNamespaces ({
 *	@XmlNamespace(url="http://www.sifinfo.org/infrastructure/2.x", prefix="")
 * })
 * @XmlEntity	(xml="Course")
 */
class Course {
	/**
	 */

	/**
	 * List of manually overridden properties that should not be re-generated automatically
	 * @var array
	 */
	protected $_overrides = array();


	/**
	 * @XmlElement	(type="\org\sifinfo\www\infrastructure\_2_x\IdRefType", name="SchoolAttendedRefId")
	 */
	protected $schoolAttendedRefId;

	/**
	 * @XmlElement	(type="\org\sifinfo\www\infrastructure\_2_x\SchoolCourseInfoData", name="SchoolCourseInfoData")
	 */
	protected $schoolCourseInfoData;

	/**
	 * @XmlElement	(type="\org\sifinfo\www\infrastructure\_2_x\PartialDateType", name="StartDate")
	 */
	protected $startDate;

	/**
	 * @XmlElement	(type="\org\sifinfo\www\infrastructure\_2_x\PartialDateType", name="EndDate")
	 */
	protected $endDate;

	/**
	 * @XmlElement	(type="\org\sifinfo\www\infrastructure\_2_x\MarkingPeriod", name="MarkingPeriod")
	 */
	protected $markingPeriod;

	/**
	 * @XmlElement	(type="\org\sifinfo\www\infrastructure\_2_x\SIFExtendedElementsType", name="SIF_ExtendedElements")
	 */
	protected $sifExtendedElements;

	public function __construct($schoolAttendedRefId = NULL, $schoolCourseInfoData = NULL, $startDate = NULL, $endDate = NULL, $markingPeriod = NULL, $sifExtendedElements = NULL) {
		$this->schoolAttendedRefId = ($schoolAttendedRefId===NULL) ? NULL : $this->validateSchoolAttendedRefId($schoolAttendedRefId);
		$this->schoolCourseInfoData = ($schoolCourseInfoData===NULL) ? NULL : $this->validateSchoolCourseInfoData($schoolCourseInfoData);
		$this->startDate = ($startDate===NULL) ? NULL : $this->validateStartDate($startDate);
		$this->endDate = ($endDate===NULL) ? NULL : $this->validateEndDate($endDate);
		$this->markingPeriod = ($markingPeriod===NULL) ? NULL : $this->validateMarkingPeriod($markingPeriod);
		$this->sifExtendedElements = ($sifExtendedElements===NULL) ? NULL : $this->validateSifExtendedElements($sifExtendedElements);
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

	public function getSchoolCourseInfoData($autoCreate = TRUE) {
		if ($this->schoolCourseInfoData===NULL && $autoCreate && ! isset($this->_overrides['schoolCourseInfoData']) ) {
			$this->schoolCourseInfoData = $this->createSchoolCourseInfoData();
		}
		return $this->schoolCourseInfoData;
	}
	
	protected function createSchoolCourseInfoData() {
		return new \org\sifinfo\www\infrastructure\_2_x\SchoolCourseInfoData();
	}

	public function setSchoolCourseInfoData($schoolCourseInfoData) {
		$this->schoolCourseInfoData = $this->validateSchoolCourseInfoData($schoolCourseInfoData);
	}

	protected function validateSchoolCourseInfoData($schoolCourseInfoData) {
		if ( ! $schoolCourseInfoData instanceof \org\sifinfo\www\infrastructure\_2_x\SchoolCourseInfoData ) {
			$schoolCourseInfoData = new \org\sifinfo\www\infrastructure\_2_x\SchoolCourseInfoData ($schoolCourseInfoData);
		}
	
		return $schoolCourseInfoData;
	}

	public function getStartDate($autoCreate = TRUE) {
		if ($this->startDate===NULL && $autoCreate && ! isset($this->_overrides['startDate']) ) {
			$this->startDate = $this->createStartDate();
		}
		return $this->startDate;
	}
	
	protected function createStartDate() {
		return NULL;
	}

	public function setStartDate($startDate) {
		$this->startDate = $this->validateStartDate($startDate);
	}

	protected function validateStartDate($startDate) {
	
		return $startDate;
	}

	public function getEndDate($autoCreate = TRUE) {
		if ($this->endDate===NULL && $autoCreate && ! isset($this->_overrides['endDate']) ) {
			$this->endDate = $this->createEndDate();
		}
		return $this->endDate;
	}
	
	protected function createEndDate() {
		return NULL;
	}

	public function setEndDate($endDate) {
		$this->endDate = $this->validateEndDate($endDate);
	}

	protected function validateEndDate($endDate) {
	
		return $endDate;
	}

	public function getMarkingPeriod($autoCreate = TRUE) {
		if ($this->markingPeriod===NULL && $autoCreate && ! isset($this->_overrides['markingPeriod']) ) {
			$this->markingPeriod = $this->createMarkingPeriod();
		}
		return $this->markingPeriod;
	}
	
	protected function createMarkingPeriod() {
		return new \org\sifinfo\www\infrastructure\_2_x\MarkingPeriod();
	}

	public function setMarkingPeriod($markingPeriod) {
		$this->markingPeriod = $this->validateMarkingPeriod($markingPeriod);
	}

	protected function validateMarkingPeriod($markingPeriod) {
		if ( ! $markingPeriod instanceof \org\sifinfo\www\infrastructure\_2_x\MarkingPeriod ) {
			$markingPeriod = new \org\sifinfo\www\infrastructure\_2_x\MarkingPeriod ($markingPeriod);
		}
	
		return $markingPeriod;
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
} // end class Course
