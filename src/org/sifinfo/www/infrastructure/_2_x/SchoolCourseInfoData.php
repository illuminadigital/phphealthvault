<?php
namespace org\sifinfo\www\infrastructure\_2_x;



/**
 * @XmlNamespaces ({
 *	@XmlNamespace(url="http://www.sifinfo.org/infrastructure/2.x", prefix="")
 * })
 * @XmlEntity	(xml="SchoolCourseInfoData")
 */
class SchoolCourseInfoData {
	/**
	 */

	/**
	 * @XmlElement	(type="\org\sifinfo\www\infrastructure\_2_x\CourseCodeType", name="CourseCode")
	 */
	protected $courseCode;

	/**
	 * @XmlElement	(type="\org\sifinfo\www\infrastructure\_2_x\StateCourseCodeType", name="StateCourseCode")
	 */
	protected $stateCourseCode;

	/**
	 * @XmlElement	(type="\org\sifinfo\www\infrastructure\_2_x\DistrictCourseCodeType", name="DistrictCourseCode")
	 */
	protected $districtCourseCode;

	/**
	 * @XmlElement	(type="\org\sifinfo\www\infrastructure\_2_x\NormalizedString", name="NationalCourseCode")
	 */
	protected $nationalCourseCode;

	/**
	 * @XmlElement	(type="\org\sifinfo\www\infrastructure\_2_x\SubjectAreaListType", name="SubjectAreaList")
	 */
	protected $subjectAreaList;

	/**
	 * @XmlElement	(type="\org\sifinfo\www\infrastructure\_2_x\CourseTitleType", name="CourseTitle")
	 */
	protected $courseTitle;

	/**
	 * @XmlElement	(type="\org\sifinfo\www\infrastructure\_2_x\String", name="Description")
	 */
	protected $description;

	/**
	 * @XmlElement	(type="\org\sifinfo\www\infrastructure\_2_x\InstructionalLevelType", name="InstructionalLevel")
	 */
	protected $instructionalLevel;

	/**
	 * @XmlElement	(type="\org\sifinfo\www\infrastructure\_2_x\Boolean", name="CoreAcademicCourse")
	 */
	protected $coreAcademicCourse;

	/**
	 * @XmlElement	(type="\org\sifinfo\www\infrastructure\_2_x\GraduationRequirementType", name="GraduationRequirement")
	 */
	protected $graduationRequirement;

	/**
	 * @XmlElement	(type="\org\sifinfo\www\infrastructure\_2_x\NormalizedString", name="Department")
	 */
	protected $department;

	/**
	 * @XmlElement	(type="\org\sifinfo\www\infrastructure\_2_x\SIFExtendedElementsType", name="SIF_ExtendedElements")
	 */
	protected $sifExtendedElements;

	public function __construct($courseCode = NULL, $stateCourseCode = NULL, $districtCourseCode = NULL, $nationalCourseCode = NULL, $subjectAreaList = NULL, $courseTitle = NULL, $description = NULL, $instructionalLevel = NULL, $coreAcademicCourse = NULL, $graduationRequirement = NULL, $department = NULL, $sifExtendedElements = NULL) {
		$this->courseCode = ($courseCode===NULL) ? NULL : $this->validateCourseCode($courseCode);
		$this->stateCourseCode = ($stateCourseCode===NULL) ? NULL : $this->validateStateCourseCode($stateCourseCode);
		$this->districtCourseCode = ($districtCourseCode===NULL) ? NULL : $this->validateDistrictCourseCode($districtCourseCode);
		$this->nationalCourseCode = ($nationalCourseCode===NULL) ? NULL : $this->validateNationalCourseCode($nationalCourseCode);
		$this->subjectAreaList = ($subjectAreaList===NULL) ? NULL : $this->validateSubjectAreaList($subjectAreaList);
		$this->courseTitle = ($courseTitle===NULL) ? NULL : $this->validateCourseTitle($courseTitle);
		$this->description = ($description===NULL) ? NULL : $this->validateDescription($description);
		$this->instructionalLevel = ($instructionalLevel===NULL) ? NULL : $this->validateInstructionalLevel($instructionalLevel);
		$this->coreAcademicCourse = ($coreAcademicCourse===NULL) ? NULL : $this->validateCoreAcademicCourse($coreAcademicCourse);
		$this->graduationRequirement = ($graduationRequirement===NULL) ? NULL : $this->validateGraduationRequirement($graduationRequirement);
		$this->department = ($department===NULL) ? NULL : $this->validateDepartment($department);
		$this->sifExtendedElements = ($sifExtendedElements===NULL) ? NULL : $this->validateSifExtendedElements($sifExtendedElements);
	}

	public function getCourseCode() {
		if ($this->courseCode===NULL) {
			$this->courseCode = $this->createCourseCode();
		}
		return $this->courseCode;
	}
	
	protected function createCourseCode() {
		return NULL;
	}

	public function setCourseCode($courseCode) {
		$this->courseCode = $this->validateCourseCode($courseCode);
	}

	protected function validateCourseCode($courseCode) {
	
		return $courseCode;
	}

	public function getStateCourseCode() {
		if ($this->stateCourseCode===NULL) {
			$this->stateCourseCode = $this->createStateCourseCode();
		}
		return $this->stateCourseCode;
	}
	
	protected function createStateCourseCode() {
		return NULL;
	}

	public function setStateCourseCode($stateCourseCode) {
		$this->stateCourseCode = $this->validateStateCourseCode($stateCourseCode);
	}

	protected function validateStateCourseCode($stateCourseCode) {
	
		return $stateCourseCode;
	}

	public function getDistrictCourseCode() {
		if ($this->districtCourseCode===NULL) {
			$this->districtCourseCode = $this->createDistrictCourseCode();
		}
		return $this->districtCourseCode;
	}
	
	protected function createDistrictCourseCode() {
		return NULL;
	}

	public function setDistrictCourseCode($districtCourseCode) {
		$this->districtCourseCode = $this->validateDistrictCourseCode($districtCourseCode);
	}

	protected function validateDistrictCourseCode($districtCourseCode) {
	
		return $districtCourseCode;
	}

	public function getNationalCourseCode() {
		if ($this->nationalCourseCode===NULL) {
			$this->nationalCourseCode = $this->createNationalCourseCode();
		}
		return $this->nationalCourseCode;
	}
	
	protected function createNationalCourseCode() {
		return NULL;
	}

	public function setNationalCourseCode($nationalCourseCode) {
		$this->nationalCourseCode = $this->validateNationalCourseCode($nationalCourseCode);
	}

	protected function validateNationalCourseCode($nationalCourseCode) {
		if ( ! is_normalizedString($nationalCourseCode) && ! is_null($nationalCourseCode) ) {
			throw new \Exception(sprintf('Supplied %s value was not %s', 'nationalCourseCode', 'normalizedString'));
		}
	
		return $nationalCourseCode;
	}

	public function getSubjectAreaList() {
		if ($this->subjectAreaList===NULL) {
			$this->subjectAreaList = $this->createSubjectAreaList();
		}
		return $this->subjectAreaList;
	}
	
	protected function createSubjectAreaList() {
		return new \org\sifinfo\www\infrastructure\_2_x\SubjectAreaListType();
	}

	public function setSubjectAreaList($subjectAreaList) {
		$this->subjectAreaList = $this->validateSubjectAreaList($subjectAreaList);
	}

	protected function validateSubjectAreaList($subjectAreaList) {
		if ( ! $subjectAreaList instanceof \org\sifinfo\www\infrastructure\_2_x\SubjectAreaListType  && ! is_null($subjectAreaList) ) {
			$subjectAreaList = new \org\sifinfo\www\infrastructure\_2_x\SubjectAreaListType ($subjectAreaList);
		}
	
		return $subjectAreaList;
	}

	public function getCourseTitle() {
		if ($this->courseTitle===NULL) {
			$this->courseTitle = $this->createCourseTitle();
		}
		return $this->courseTitle;
	}
	
	protected function createCourseTitle() {
		return NULL;
	}

	public function setCourseTitle($courseTitle) {
		$this->courseTitle = $this->validateCourseTitle($courseTitle);
	}

	protected function validateCourseTitle($courseTitle) {
	
		return $courseTitle;
	}

	public function getDescription() {
		if ($this->description===NULL) {
			$this->description = $this->createDescription();
		}
		return $this->description;
	}
	
	protected function createDescription() {
		return '';
	}

	public function setDescription($description) {
		$this->description = $this->validateDescription($description);
	}

	protected function validateDescription($description) {
		if ( ! is_string($description) && ! is_null($description) ) {
			throw new \Exception(sprintf('Supplied %s value was not %s', 'description', 'string'));
		}
	
		return $description;
	}

	public function getInstructionalLevel() {
		if ($this->instructionalLevel===NULL) {
			$this->instructionalLevel = $this->createInstructionalLevel();
		}
		return $this->instructionalLevel;
	}
	
	protected function createInstructionalLevel() {
		return new \org\sifinfo\www\infrastructure\_2_x\InstructionalLevelType();
	}

	public function setInstructionalLevel($instructionalLevel) {
		$this->instructionalLevel = $this->validateInstructionalLevel($instructionalLevel);
	}

	protected function validateInstructionalLevel($instructionalLevel) {
		if ( ! $instructionalLevel instanceof \org\sifinfo\www\infrastructure\_2_x\InstructionalLevelType  && ! is_null($instructionalLevel) ) {
			$instructionalLevel = new \org\sifinfo\www\infrastructure\_2_x\InstructionalLevelType ($instructionalLevel);
		}
	
		return $instructionalLevel;
	}

	public function getCoreAcademicCourse() {
		if ($this->coreAcademicCourse===NULL) {
			$this->coreAcademicCourse = $this->createCoreAcademicCourse();
		}
		return $this->coreAcademicCourse;
	}
	
	protected function createCoreAcademicCourse() {
		return FALSE;
	}

	public function setCoreAcademicCourse($coreAcademicCourse) {
		$this->coreAcademicCourse = $this->validateCoreAcademicCourse($coreAcademicCourse);
	}

	protected function validateCoreAcademicCourse($coreAcademicCourse) {
		if ( ! is_bool($coreAcademicCourse) && ! is_null($coreAcademicCourse) ) {
			throw new \Exception(sprintf('Supplied %s value was not %s', 'coreAcademicCourse', 'boolean'));
		}
	
		return $coreAcademicCourse;
	}

	public function getGraduationRequirement() {
		if ($this->graduationRequirement===NULL) {
			$this->graduationRequirement = $this->createGraduationRequirement();
		}
		return $this->graduationRequirement;
	}
	
	protected function createGraduationRequirement() {
		return NULL;
	}

	public function setGraduationRequirement($graduationRequirement) {
		$this->graduationRequirement = $this->validateGraduationRequirement($graduationRequirement);
	}

	protected function validateGraduationRequirement($graduationRequirement) {
	
		return $graduationRequirement;
	}

	public function getDepartment() {
		if ($this->department===NULL) {
			$this->department = $this->createDepartment();
		}
		return $this->department;
	}
	
	protected function createDepartment() {
		return NULL;
	}

	public function setDepartment($department) {
		$this->department = $this->validateDepartment($department);
	}

	protected function validateDepartment($department) {
		if ( ! is_normalizedString($department) && ! is_null($department) ) {
			throw new \Exception(sprintf('Supplied %s value was not %s', 'department', 'normalizedString'));
		}
	
		return $department;
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
} // end class SchoolCourseInfoData
