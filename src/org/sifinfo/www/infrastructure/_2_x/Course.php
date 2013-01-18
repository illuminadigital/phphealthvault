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

	public function getSchoolAttendedRefId() {
		if ($this->schoolAttendedRefId===NULL) {
			$this->schoolAttendedRefId = $this->createSchoolAttendedRefId();
		}
		return $this->schoolAttendedRefId;
	}
	
	protected function createSchoolAttendedRefId() {
		return new \org\sifinfo\www\infrastructure\_2_x\IdRefType();
	}

	public function setSchoolAttendedRefId($schoolAttendedRefId) {
		$this->schoolAttendedRefId = $this->validateSchoolAttendedRefId($schoolAttendedRefId);
	}

	protected function validateSchoolAttendedRefId($schoolAttendedRefId) {
		if ( ! $schoolAttendedRefId instanceof \org\sifinfo\www\infrastructure\_2_x\IdRefType  && ! is_null($schoolAttendedRefId) ) {
			$schoolAttendedRefId = new \org\sifinfo\www\infrastructure\_2_x\IdRefType ($schoolAttendedRefId);
		}
	
		return $schoolAttendedRefId;
	}

	public function getSchoolCourseInfoData() {
		if ($this->schoolCourseInfoData===NULL) {
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

	public function getStartDate() {
		if ($this->startDate===NULL) {
			$this->startDate = $this->createStartDate();
		}
		return $this->startDate;
	}
	
	protected function createStartDate() {
		return new \org\sifinfo\www\infrastructure\_2_x\PartialDateType();
	}

	public function setStartDate($startDate) {
		$this->startDate = $this->validateStartDate($startDate);
	}

	protected function validateStartDate($startDate) {
		if ( ! $startDate instanceof \org\sifinfo\www\infrastructure\_2_x\PartialDateType  && ! is_null($startDate) ) {
			$startDate = new \org\sifinfo\www\infrastructure\_2_x\PartialDateType ($startDate);
		}
	
		return $startDate;
	}

	public function getEndDate() {
		if ($this->endDate===NULL) {
			$this->endDate = $this->createEndDate();
		}
		return $this->endDate;
	}
	
	protected function createEndDate() {
		return new \org\sifinfo\www\infrastructure\_2_x\PartialDateType();
	}

	public function setEndDate($endDate) {
		$this->endDate = $this->validateEndDate($endDate);
	}

	protected function validateEndDate($endDate) {
		if ( ! $endDate instanceof \org\sifinfo\www\infrastructure\_2_x\PartialDateType  && ! is_null($endDate) ) {
			$endDate = new \org\sifinfo\www\infrastructure\_2_x\PartialDateType ($endDate);
		}
	
		return $endDate;
	}

	public function getMarkingPeriod() {
		if ($this->markingPeriod===NULL) {
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
} // end class Course
