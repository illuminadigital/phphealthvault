<?php
namespace org\sifinfo\www\infrastructure\_2_x;



/**
 * @XmlNamespaces ({
 *	@XmlNamespace(url="http://www.sifinfo.org/infrastructure/2.x", prefix="")
 * })
 * @XmlEntity	(xml="StudentAcademicRecordType")
 */
class StudentAcademicRecordType {
	/**
	 * This object conveys a student's academic record data for student record exchange and transcript purposes.
	 */

	/**
	 * @XmlText	(type="string", name="ReportingDate")
	 */
	protected $reportingDate;

	/**
	 * @XmlElement	(type="\org\sifinfo\www\infrastructure\_2_x\StudentSchoolEnrollmentData", name="StudentSchoolEnrollmentData")
	 */
	protected $studentSchoolEnrollmentData;

	/**
	 * @XmlElement	(type="\org\sifinfo\www\infrastructure\_2_x\PartialDateType", name="DistrictEntryDate")
	 */
	protected $districtEntryDate;

	/**
	 * @XmlElement	(type="\org\sifinfo\www\infrastructure\_2_x\SchoolAttendanceHistory", name="SchoolAttendanceHistory")
	 */
	protected $schoolAttendanceHistory;

	/**
	 * @XmlElement	(type="\org\sifinfo\www\infrastructure\_2_x\EnrollmentHistory", name="EnrollmentHistory")
	 */
	protected $enrollmentHistory;

	/**
	 * @XmlElement	(type="\org\sifinfo\www\infrastructure\_2_x\CurrentCourseActivity", name="CurrentCourseActivity")
	 */
	protected $currentCourseActivity;

	/**
	 * @XmlElement	(type="\org\sifinfo\www\infrastructure\_2_x\CourseHistory", name="CourseHistory")
	 */
	protected $courseHistory;

	/**
	 * @XmlElement	(type="\org\sifinfo\www\infrastructure\_2_x\AcademicPerformanceHistory", name="AcademicPerformanceHistory")
	 */
	protected $academicPerformanceHistory;

	/**
	 * @XmlElement	(type="\org\sifinfo\www\infrastructure\_2_x\AcademicPerformanceSummary", name="AcademicPerformanceSummary")
	 */
	protected $academicPerformanceSummary;

	/**
	 * @XmlElement	(type="\org\sifinfo\www\infrastructure\_2_x\AssessmentPerformanceHistory", name="AssessmentPerformanceHistory")
	 */
	protected $assessmentPerformanceHistory;

	/**
	 * @XmlElement	(type="\org\sifinfo\www\infrastructure\_2_x\AdditionalGraduationRequirementPerformanceHistory", name="AdditionalGraduationRequirementPerformanceHistory")
	 */
	protected $additionalGraduationRequirementPerformanceHistory;

	/**
	 * @XmlElement	(type="\org\sifinfo\www\infrastructure\_2_x\ActivityAwardHistory", name="ActivityAwardHistory")
	 */
	protected $activityAwardHistory;

	/**
	 * @XmlElement	(type="\org\sifinfo\www\infrastructure\_2_x\SIFMetadataType", name="SIF_Metadata")
	 */
	protected $sifMetadata;

	/**
	 * @XmlElement	(type="\org\sifinfo\www\infrastructure\_2_x\SIFExtendedElementsType", name="SIF_ExtendedElements")
	 */
	protected $sifExtendedElements;

	/**
	 * @XmlAttribute	(type="string", name="RefId")
	 */
	protected $refId;

	/**
	 * @XmlAttribute	(type="string", name="SIF_RefId")
	 */
	protected $sifRefId;

	/**
	 * @XmlAttribute	(type="string", name="SIF_RefObject")
	 */
	protected $sifRefObject;

	public function __construct($reportingDate = NULL, $studentSchoolEnrollmentData = NULL, $districtEntryDate = NULL, $schoolAttendanceHistory = NULL, $enrollmentHistory = NULL, $currentCourseActivity = NULL, $courseHistory = NULL, $academicPerformanceHistory = NULL, $academicPerformanceSummary = NULL, $assessmentPerformanceHistory = NULL, $additionalGraduationRequirementPerformanceHistory = NULL, $activityAwardHistory = NULL, $sifMetadata = NULL, $sifExtendedElements = NULL, $refId = NULL, $sifRefId = NULL, $sifRefObject = NULL) {
		$this->reportingDate = ($reportingDate===NULL) ? NULL : $this->validateReportingDate($reportingDate);
		$this->studentSchoolEnrollmentData = ($studentSchoolEnrollmentData===NULL) ? NULL : $this->validateStudentSchoolEnrollmentData($studentSchoolEnrollmentData);
		$this->districtEntryDate = ($districtEntryDate===NULL) ? NULL : $this->validateDistrictEntryDate($districtEntryDate);
		$this->schoolAttendanceHistory = ($schoolAttendanceHistory===NULL) ? NULL : $this->validateSchoolAttendanceHistory($schoolAttendanceHistory);
		$this->enrollmentHistory = ($enrollmentHistory===NULL) ? NULL : $this->validateEnrollmentHistory($enrollmentHistory);
		$this->currentCourseActivity = ($currentCourseActivity===NULL) ? NULL : $this->validateCurrentCourseActivity($currentCourseActivity);
		$this->courseHistory = ($courseHistory===NULL) ? NULL : $this->validateCourseHistory($courseHistory);
		$this->academicPerformanceHistory = ($academicPerformanceHistory===NULL) ? NULL : $this->validateAcademicPerformanceHistory($academicPerformanceHistory);
		$this->academicPerformanceSummary = ($academicPerformanceSummary===NULL) ? NULL : $this->validateAcademicPerformanceSummary($academicPerformanceSummary);
		$this->assessmentPerformanceHistory = ($assessmentPerformanceHistory===NULL) ? NULL : $this->validateAssessmentPerformanceHistory($assessmentPerformanceHistory);
		$this->additionalGraduationRequirementPerformanceHistory = ($additionalGraduationRequirementPerformanceHistory===NULL) ? NULL : $this->validateAdditionalGraduationRequirementPerformanceHistory($additionalGraduationRequirementPerformanceHistory);
		$this->activityAwardHistory = ($activityAwardHistory===NULL) ? NULL : $this->validateActivityAwardHistory($activityAwardHistory);
		$this->sifMetadata = ($sifMetadata===NULL) ? NULL : $this->validateSifMetadata($sifMetadata);
		$this->sifExtendedElements = ($sifExtendedElements===NULL) ? NULL : $this->validateSifExtendedElements($sifExtendedElements);
		$this->refId = ($refId===NULL) ? NULL : $this->validateRefId($refId);
		$this->sifRefId = ($sifRefId===NULL) ? NULL : $this->validateSifRefId($sifRefId);
		$this->sifRefObject = ($sifRefObject===NULL) ? NULL : $this->validateSifRefObject($sifRefObject);
	}

	public function getReportingDate() {
		if ($this->reportingDate===NULL) {
			$this->reportingDate = $this->createReportingDate();
		}
		return $this->reportingDate;
	}
	
	protected function createReportingDate() {
		return NULL;
	}

	public function setReportingDate($reportingDate) {
		$this->reportingDate = $this->validateReportingDate($reportingDate);
	}

	protected function validateReportingDate($reportingDate) {
		if (!is_string($reportingDate)) {
			throw new \Exception(sprintf('Supplied %s value was not %s', 'reportingDate', 'string'));
		}
	
		return $reportingDate;
	}

	public function getStudentSchoolEnrollmentData() {
		if ($this->studentSchoolEnrollmentData===NULL) {
			$this->studentSchoolEnrollmentData = $this->createStudentSchoolEnrollmentData();
		}
		return $this->studentSchoolEnrollmentData;
	}
	
	protected function createStudentSchoolEnrollmentData() {
		return new \org\sifinfo\www\infrastructure\_2_x\StudentSchoolEnrollmentData();
	}

	public function setStudentSchoolEnrollmentData($studentSchoolEnrollmentData) {
		$this->studentSchoolEnrollmentData = $this->validateStudentSchoolEnrollmentData($studentSchoolEnrollmentData);
	}

	protected function validateStudentSchoolEnrollmentData($studentSchoolEnrollmentData) {
		if ( ! $studentSchoolEnrollmentData instanceof \org\sifinfo\www\infrastructure\_2_x\StudentSchoolEnrollmentData ) {
			$studentSchoolEnrollmentData = new \org\sifinfo\www\infrastructure\_2_x\StudentSchoolEnrollmentData ($studentSchoolEnrollmentData);
		}
	
		return $studentSchoolEnrollmentData;
	}

	public function getDistrictEntryDate() {
		if ($this->districtEntryDate===NULL) {
			$this->districtEntryDate = $this->createDistrictEntryDate();
		}
		return $this->districtEntryDate;
	}
	
	protected function createDistrictEntryDate() {
		return new \org\sifinfo\www\infrastructure\_2_x\PartialDateType();
	}

	public function setDistrictEntryDate($districtEntryDate) {
		$this->districtEntryDate = $this->validateDistrictEntryDate($districtEntryDate);
	}

	protected function validateDistrictEntryDate($districtEntryDate) {
		if ( ! $districtEntryDate instanceof \org\sifinfo\www\infrastructure\_2_x\PartialDateType  && ! is_null($districtEntryDate) ) {
			$districtEntryDate = new \org\sifinfo\www\infrastructure\_2_x\PartialDateType ($districtEntryDate);
		}
	
		return $districtEntryDate;
	}

	public function getSchoolAttendanceHistory() {
		if ($this->schoolAttendanceHistory===NULL) {
			$this->schoolAttendanceHistory = $this->createSchoolAttendanceHistory();
		}
		return $this->schoolAttendanceHistory;
	}
	
	protected function createSchoolAttendanceHistory() {
		return new \org\sifinfo\www\infrastructure\_2_x\SchoolAttendanceHistory();
	}

	public function setSchoolAttendanceHistory($schoolAttendanceHistory) {
		$this->schoolAttendanceHistory = $this->validateSchoolAttendanceHistory($schoolAttendanceHistory);
	}

	protected function validateSchoolAttendanceHistory($schoolAttendanceHistory) {
		if ( ! $schoolAttendanceHistory instanceof \org\sifinfo\www\infrastructure\_2_x\SchoolAttendanceHistory ) {
			$schoolAttendanceHistory = new \org\sifinfo\www\infrastructure\_2_x\SchoolAttendanceHistory ($schoolAttendanceHistory);
		}
	
		return $schoolAttendanceHistory;
	}

	public function getEnrollmentHistory() {
		if ($this->enrollmentHistory===NULL) {
			$this->enrollmentHistory = $this->createEnrollmentHistory();
		}
		return $this->enrollmentHistory;
	}
	
	protected function createEnrollmentHistory() {
		return new \org\sifinfo\www\infrastructure\_2_x\EnrollmentHistory();
	}

	public function setEnrollmentHistory($enrollmentHistory) {
		$this->enrollmentHistory = $this->validateEnrollmentHistory($enrollmentHistory);
	}

	protected function validateEnrollmentHistory($enrollmentHistory) {
		if ( ! $enrollmentHistory instanceof \org\sifinfo\www\infrastructure\_2_x\EnrollmentHistory  && ! is_null($enrollmentHistory) ) {
			$enrollmentHistory = new \org\sifinfo\www\infrastructure\_2_x\EnrollmentHistory ($enrollmentHistory);
		}
	
		return $enrollmentHistory;
	}

	public function getCurrentCourseActivity() {
		if ($this->currentCourseActivity===NULL) {
			$this->currentCourseActivity = $this->createCurrentCourseActivity();
		}
		return $this->currentCourseActivity;
	}
	
	protected function createCurrentCourseActivity() {
		return new \org\sifinfo\www\infrastructure\_2_x\CurrentCourseActivity();
	}

	public function setCurrentCourseActivity($currentCourseActivity) {
		$this->currentCourseActivity = $this->validateCurrentCourseActivity($currentCourseActivity);
	}

	protected function validateCurrentCourseActivity($currentCourseActivity) {
		if ( ! $currentCourseActivity instanceof \org\sifinfo\www\infrastructure\_2_x\CurrentCourseActivity  && ! is_null($currentCourseActivity) ) {
			$currentCourseActivity = new \org\sifinfo\www\infrastructure\_2_x\CurrentCourseActivity ($currentCourseActivity);
		}
	
		return $currentCourseActivity;
	}

	public function getCourseHistory() {
		if ($this->courseHistory===NULL) {
			$this->courseHistory = $this->createCourseHistory();
		}
		return $this->courseHistory;
	}
	
	protected function createCourseHistory() {
		return new \org\sifinfo\www\infrastructure\_2_x\CourseHistory();
	}

	public function setCourseHistory($courseHistory) {
		$this->courseHistory = $this->validateCourseHistory($courseHistory);
	}

	protected function validateCourseHistory($courseHistory) {
		if ( ! $courseHistory instanceof \org\sifinfo\www\infrastructure\_2_x\CourseHistory  && ! is_null($courseHistory) ) {
			$courseHistory = new \org\sifinfo\www\infrastructure\_2_x\CourseHistory ($courseHistory);
		}
	
		return $courseHistory;
	}

	public function getAcademicPerformanceHistory() {
		if ($this->academicPerformanceHistory===NULL) {
			$this->academicPerformanceHistory = $this->createAcademicPerformanceHistory();
		}
		return $this->academicPerformanceHistory;
	}
	
	protected function createAcademicPerformanceHistory() {
		return new \org\sifinfo\www\infrastructure\_2_x\AcademicPerformanceHistory();
	}

	public function setAcademicPerformanceHistory($academicPerformanceHistory) {
		$this->academicPerformanceHistory = $this->validateAcademicPerformanceHistory($academicPerformanceHistory);
	}

	protected function validateAcademicPerformanceHistory($academicPerformanceHistory) {
		if ( ! $academicPerformanceHistory instanceof \org\sifinfo\www\infrastructure\_2_x\AcademicPerformanceHistory  && ! is_null($academicPerformanceHistory) ) {
			$academicPerformanceHistory = new \org\sifinfo\www\infrastructure\_2_x\AcademicPerformanceHistory ($academicPerformanceHistory);
		}
	
		return $academicPerformanceHistory;
	}

	public function getAcademicPerformanceSummary() {
		if ($this->academicPerformanceSummary===NULL) {
			$this->academicPerformanceSummary = $this->createAcademicPerformanceSummary();
		}
		return $this->academicPerformanceSummary;
	}
	
	protected function createAcademicPerformanceSummary() {
		return new \org\sifinfo\www\infrastructure\_2_x\AcademicPerformanceSummary();
	}

	public function setAcademicPerformanceSummary($academicPerformanceSummary) {
		$this->academicPerformanceSummary = $this->validateAcademicPerformanceSummary($academicPerformanceSummary);
	}

	protected function validateAcademicPerformanceSummary($academicPerformanceSummary) {
		if ( ! $academicPerformanceSummary instanceof \org\sifinfo\www\infrastructure\_2_x\AcademicPerformanceSummary ) {
			$academicPerformanceSummary = new \org\sifinfo\www\infrastructure\_2_x\AcademicPerformanceSummary ($academicPerformanceSummary);
		}
	
		return $academicPerformanceSummary;
	}

	public function getAssessmentPerformanceHistory() {
		if ($this->assessmentPerformanceHistory===NULL) {
			$this->assessmentPerformanceHistory = $this->createAssessmentPerformanceHistory();
		}
		return $this->assessmentPerformanceHistory;
	}
	
	protected function createAssessmentPerformanceHistory() {
		return new \org\sifinfo\www\infrastructure\_2_x\AssessmentPerformanceHistory();
	}

	public function setAssessmentPerformanceHistory($assessmentPerformanceHistory) {
		$this->assessmentPerformanceHistory = $this->validateAssessmentPerformanceHistory($assessmentPerformanceHistory);
	}

	protected function validateAssessmentPerformanceHistory($assessmentPerformanceHistory) {
		if ( ! $assessmentPerformanceHistory instanceof \org\sifinfo\www\infrastructure\_2_x\AssessmentPerformanceHistory  && ! is_null($assessmentPerformanceHistory) ) {
			$assessmentPerformanceHistory = new \org\sifinfo\www\infrastructure\_2_x\AssessmentPerformanceHistory ($assessmentPerformanceHistory);
		}
	
		return $assessmentPerformanceHistory;
	}

	public function getAdditionalGraduationRequirementPerformanceHistory() {
		if ($this->additionalGraduationRequirementPerformanceHistory===NULL) {
			$this->additionalGraduationRequirementPerformanceHistory = $this->createAdditionalGraduationRequirementPerformanceHistory();
		}
		return $this->additionalGraduationRequirementPerformanceHistory;
	}
	
	protected function createAdditionalGraduationRequirementPerformanceHistory() {
		return new \org\sifinfo\www\infrastructure\_2_x\AdditionalGraduationRequirementPerformanceHistory();
	}

	public function setAdditionalGraduationRequirementPerformanceHistory($additionalGraduationRequirementPerformanceHistory) {
		$this->additionalGraduationRequirementPerformanceHistory = $this->validateAdditionalGraduationRequirementPerformanceHistory($additionalGraduationRequirementPerformanceHistory);
	}

	protected function validateAdditionalGraduationRequirementPerformanceHistory($additionalGraduationRequirementPerformanceHistory) {
		if ( ! $additionalGraduationRequirementPerformanceHistory instanceof \org\sifinfo\www\infrastructure\_2_x\AdditionalGraduationRequirementPerformanceHistory  && ! is_null($additionalGraduationRequirementPerformanceHistory) ) {
			$additionalGraduationRequirementPerformanceHistory = new \org\sifinfo\www\infrastructure\_2_x\AdditionalGraduationRequirementPerformanceHistory ($additionalGraduationRequirementPerformanceHistory);
		}
	
		return $additionalGraduationRequirementPerformanceHistory;
	}

	public function getActivityAwardHistory() {
		if ($this->activityAwardHistory===NULL) {
			$this->activityAwardHistory = $this->createActivityAwardHistory();
		}
		return $this->activityAwardHistory;
	}
	
	protected function createActivityAwardHistory() {
		return new \org\sifinfo\www\infrastructure\_2_x\ActivityAwardHistory();
	}

	public function setActivityAwardHistory($activityAwardHistory) {
		$this->activityAwardHistory = $this->validateActivityAwardHistory($activityAwardHistory);
	}

	protected function validateActivityAwardHistory($activityAwardHistory) {
		if ( ! $activityAwardHistory instanceof \org\sifinfo\www\infrastructure\_2_x\ActivityAwardHistory  && ! is_null($activityAwardHistory) ) {
			$activityAwardHistory = new \org\sifinfo\www\infrastructure\_2_x\ActivityAwardHistory ($activityAwardHistory);
		}
	
		return $activityAwardHistory;
	}

	public function getSifMetadata() {
		if ($this->sifMetadata===NULL) {
			$this->sifMetadata = $this->createSifMetadata();
		}
		return $this->sifMetadata;
	}
	
	protected function createSifMetadata() {
		return new \org\sifinfo\www\infrastructure\_2_x\SIFMetadataType();
	}

	public function setSifMetadata($sifMetadata) {
		$this->sifMetadata = $this->validateSifMetadata($sifMetadata);
	}

	protected function validateSifMetadata($sifMetadata) {
		if ( ! $sifMetadata instanceof \org\sifinfo\www\infrastructure\_2_x\SIFMetadataType  && ! is_null($sifMetadata) ) {
			$sifMetadata = new \org\sifinfo\www\infrastructure\_2_x\SIFMetadataType ($sifMetadata);
		}
	
		return $sifMetadata;
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

	public function getRefId() {
		if ($this->refId===NULL) {
			$this->refId = $this->createRefId();
		}
		return $this->refId;
	}
	
	protected function createRefId() {
		return new \org\sifinfo\www\infrastructure\_2_x\RefIdType();
	}

	public function setRefId($refId) {
		$this->refId = $this->validateRefId($refId);
	}

	protected function validateRefId($refId) {
		if ( ! $refId instanceof \org\sifinfo\www\infrastructure\_2_x\RefIdType ) {
			$refId = new \org\sifinfo\www\infrastructure\_2_x\RefIdType ($refId);
		}
	
		return $refId;
	}

	public function getSifRefId() {
		if ($this->sifRefId===NULL) {
			$this->sifRefId = $this->createSifRefId();
		}
		return $this->sifRefId;
	}
	
	protected function createSifRefId() {
		return new \org\sifinfo\www\infrastructure\_2_x\RefIdType();
	}

	public function setSifRefId($sifRefId) {
		$this->sifRefId = $this->validateSifRefId($sifRefId);
	}

	protected function validateSifRefId($sifRefId) {
		if ( ! $sifRefId instanceof \org\sifinfo\www\infrastructure\_2_x\RefIdType ) {
			$sifRefId = new \org\sifinfo\www\infrastructure\_2_x\RefIdType ($sifRefId);
		}
	
		return $sifRefId;
	}

	public function getSifRefObject() {
		if ($this->sifRefObject===NULL) {
			$this->sifRefObject = $this->createSifRefObject();
		}
		return $this->sifRefObject;
	}
	
	protected function createSifRefObject() {
		return NULL;
	}

	public function setSifRefObject($sifRefObject) {
		$this->sifRefObject = $this->validateSifRefObject($sifRefObject);
	}

	protected function validateSifRefObject($sifRefObject) {
		if (!is_string($sifRefObject)) {
			throw new \Exception(sprintf('Supplied %s value was not %s', 'sifRefObject', 'string'));
		}
	
		return $sifRefObject;
	}
} // end class StudentAcademicRecordType
