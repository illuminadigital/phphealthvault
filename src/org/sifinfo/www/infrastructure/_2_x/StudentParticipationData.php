<?php
namespace org\sifinfo\www\infrastructure\_2_x;



/**
 * @XmlNamespaces ({
 *	@XmlNamespace(url="http://www.sifinfo.org/infrastructure/2.x", prefix="")
 * })
 * @XmlEntity	(xml="StudentParticipationData")
 */
class StudentParticipationData {
	/**
	 */

	/**
	 * @XmlElement	(type="\org\sifinfo\www\infrastructure\_2_x\ProgramType", name="ProgramType")
	 */
	protected $programType;

	/**
	 * @XmlElement	(type="\org\sifinfo\www\infrastructure\_2_x\LEAInfoData", name="LEAInfoData")
	 */
	protected $lEAInfoData;

	/**
	 * @XmlElement	(type="\org\sifinfo\www\infrastructure\_2_x\SchoolInfoData", name="SchoolInfoData")
	 */
	protected $schoolInfoData;

	/**
	 * @XmlElement	(type="\org\sifinfo\www\infrastructure\_2_x\PartialDateType", name="ReferralDate")
	 */
	protected $referralDate;

	/**
	 * @XmlElement	(type="\org\sifinfo\www\infrastructure\_2_x\ProgramStatusType", name="ProgramStatus")
	 */
	protected $programStatus;

	/**
	 * @XmlElement	(type="\org\sifinfo\www\infrastructure\_2_x\PartialDateType", name="EvaluationDate")
	 */
	protected $evaluationDate;

	/**
	 * @XmlElement	(type="\org\sifinfo\www\infrastructure\_2_x\PartialDateType", name="ReevaluationDate")
	 */
	protected $reevaluationDate;

	/**
	 * @XmlElement	(type="\org\sifinfo\www\infrastructure\_2_x\ExceptionalityCategoriesType", name="ExceptionalityCategories")
	 */
	protected $exceptionalityCategories;

	/**
	 * @XmlElement	(type="\org\sifinfo\www\infrastructure\_2_x\PartialDateType", name="ProgramPlanDate")
	 */
	protected $programPlanDate;

	/**
	 * @XmlElement	(type="\org\sifinfo\www\infrastructure\_2_x\PartialDateType", name="ProgramPlanEffectiveDate")
	 */
	protected $programPlanEffectiveDate;

	/**
	 * @XmlElement	(type="\org\sifinfo\www\infrastructure\_2_x\PlannedAssessmentParticipationType", name="PlannedAssessmentParticipation")
	 */
	protected $plannedAssessmentParticipation;

	/**
	 * @XmlElement	(type="\org\sifinfo\www\infrastructure\_2_x\StudentSpecialEducationFTE", name="StudentSpecialEducationFTE")
	 */
	protected $studentSpecialEducationFTE;

	public function __construct($programType = NULL, $lEAInfoData = NULL, $schoolInfoData = NULL, $referralDate = NULL, $programStatus = NULL, $evaluationDate = NULL, $reevaluationDate = NULL, $exceptionalityCategories = NULL, $programPlanDate = NULL, $programPlanEffectiveDate = NULL, $plannedAssessmentParticipation = NULL, $studentSpecialEducationFTE = NULL) {
		$this->programType = ($programType===NULL) ? NULL : $this->validateProgramType($programType);
		$this->lEAInfoData = ($lEAInfoData===NULL) ? NULL : $this->validateLEAInfoData($lEAInfoData);
		$this->schoolInfoData = ($schoolInfoData===NULL) ? NULL : $this->validateSchoolInfoData($schoolInfoData);
		$this->referralDate = ($referralDate===NULL) ? NULL : $this->validateReferralDate($referralDate);
		$this->programStatus = ($programStatus===NULL) ? NULL : $this->validateProgramStatus($programStatus);
		$this->evaluationDate = ($evaluationDate===NULL) ? NULL : $this->validateEvaluationDate($evaluationDate);
		$this->reevaluationDate = ($reevaluationDate===NULL) ? NULL : $this->validateReevaluationDate($reevaluationDate);
		$this->exceptionalityCategories = ($exceptionalityCategories===NULL) ? NULL : $this->validateExceptionalityCategories($exceptionalityCategories);
		$this->programPlanDate = ($programPlanDate===NULL) ? NULL : $this->validateProgramPlanDate($programPlanDate);
		$this->programPlanEffectiveDate = ($programPlanEffectiveDate===NULL) ? NULL : $this->validateProgramPlanEffectiveDate($programPlanEffectiveDate);
		$this->plannedAssessmentParticipation = ($plannedAssessmentParticipation===NULL) ? NULL : $this->validatePlannedAssessmentParticipation($plannedAssessmentParticipation);
		$this->studentSpecialEducationFTE = ($studentSpecialEducationFTE===NULL) ? NULL : $this->validateStudentSpecialEducationFTE($studentSpecialEducationFTE);
	}

	public function getProgramType() {
		if ($this->programType===NULL) {
			$this->programType = $this->createProgramType();
		}
		return $this->programType;
	}
	
	protected function createProgramType() {
		return new \org\sifinfo\www\infrastructure\_2_x\ProgramType();
	}

	public function setProgramType($programType) {
		$this->programType = $this->validateProgramType($programType);
	}

	protected function validateProgramType($programType) {
		if ( ! $programType instanceof \org\sifinfo\www\infrastructure\_2_x\ProgramType ) {
			$programType = new \org\sifinfo\www\infrastructure\_2_x\ProgramType ($programType);
		}
	
		return $programType;
	}

	public function getLEAInfoData() {
		if ($this->lEAInfoData===NULL) {
			$this->lEAInfoData = $this->createLEAInfoData();
		}
		return $this->lEAInfoData;
	}
	
	protected function createLEAInfoData() {
		return new \org\sifinfo\www\infrastructure\_2_x\LEAInfoData();
	}

	public function setLEAInfoData($lEAInfoData) {
		$this->lEAInfoData = $this->validateLEAInfoData($lEAInfoData);
	}

	protected function validateLEAInfoData($lEAInfoData) {
		if ( ! $lEAInfoData instanceof \org\sifinfo\www\infrastructure\_2_x\LEAInfoData  && ! is_null($lEAInfoData) ) {
			$lEAInfoData = new \org\sifinfo\www\infrastructure\_2_x\LEAInfoData ($lEAInfoData);
		}
	
		return $lEAInfoData;
	}

	public function getSchoolInfoData() {
		if ($this->schoolInfoData===NULL) {
			$this->schoolInfoData = $this->createSchoolInfoData();
		}
		return $this->schoolInfoData;
	}
	
	protected function createSchoolInfoData() {
		return new \org\sifinfo\www\infrastructure\_2_x\SchoolInfoData();
	}

	public function setSchoolInfoData($schoolInfoData) {
		$this->schoolInfoData = $this->validateSchoolInfoData($schoolInfoData);
	}

	protected function validateSchoolInfoData($schoolInfoData) {
		if ( ! $schoolInfoData instanceof \org\sifinfo\www\infrastructure\_2_x\SchoolInfoData ) {
			$schoolInfoData = new \org\sifinfo\www\infrastructure\_2_x\SchoolInfoData ($schoolInfoData);
		}
	
		return $schoolInfoData;
	}

	public function getReferralDate() {
		if ($this->referralDate===NULL) {
			$this->referralDate = $this->createReferralDate();
		}
		return $this->referralDate;
	}
	
	protected function createReferralDate() {
		return NULL;
	}

	public function setReferralDate($referralDate) {
		$this->referralDate = $this->validateReferralDate($referralDate);
	}

	protected function validateReferralDate($referralDate) {
	
		return $referralDate;
	}

	public function getProgramStatus() {
		if ($this->programStatus===NULL) {
			$this->programStatus = $this->createProgramStatus();
		}
		return $this->programStatus;
	}
	
	protected function createProgramStatus() {
		return new \org\sifinfo\www\infrastructure\_2_x\ProgramStatusType();
	}

	public function setProgramStatus($programStatus) {
		$this->programStatus = $this->validateProgramStatus($programStatus);
	}

	protected function validateProgramStatus($programStatus) {
		if ( ! $programStatus instanceof \org\sifinfo\www\infrastructure\_2_x\ProgramStatusType  && ! is_null($programStatus) ) {
			$programStatus = new \org\sifinfo\www\infrastructure\_2_x\ProgramStatusType ($programStatus);
		}
	
		return $programStatus;
	}

	public function getEvaluationDate() {
		if ($this->evaluationDate===NULL) {
			$this->evaluationDate = $this->createEvaluationDate();
		}
		return $this->evaluationDate;
	}
	
	protected function createEvaluationDate() {
		return NULL;
	}

	public function setEvaluationDate($evaluationDate) {
		$this->evaluationDate = $this->validateEvaluationDate($evaluationDate);
	}

	protected function validateEvaluationDate($evaluationDate) {
	
		return $evaluationDate;
	}

	public function getReevaluationDate() {
		if ($this->reevaluationDate===NULL) {
			$this->reevaluationDate = $this->createReevaluationDate();
		}
		return $this->reevaluationDate;
	}
	
	protected function createReevaluationDate() {
		return NULL;
	}

	public function setReevaluationDate($reevaluationDate) {
		$this->reevaluationDate = $this->validateReevaluationDate($reevaluationDate);
	}

	protected function validateReevaluationDate($reevaluationDate) {
	
		return $reevaluationDate;
	}

	public function getExceptionalityCategories() {
		if ($this->exceptionalityCategories===NULL) {
			$this->exceptionalityCategories = $this->createExceptionalityCategories();
		}
		return $this->exceptionalityCategories;
	}
	
	protected function createExceptionalityCategories() {
		return new \org\sifinfo\www\infrastructure\_2_x\ExceptionalityCategoriesType();
	}

	public function setExceptionalityCategories($exceptionalityCategories) {
		$this->exceptionalityCategories = $this->validateExceptionalityCategories($exceptionalityCategories);
	}

	protected function validateExceptionalityCategories($exceptionalityCategories) {
		if ( ! $exceptionalityCategories instanceof \org\sifinfo\www\infrastructure\_2_x\ExceptionalityCategoriesType  && ! is_null($exceptionalityCategories) ) {
			$exceptionalityCategories = new \org\sifinfo\www\infrastructure\_2_x\ExceptionalityCategoriesType ($exceptionalityCategories);
		}
	
		return $exceptionalityCategories;
	}

	public function getProgramPlanDate() {
		if ($this->programPlanDate===NULL) {
			$this->programPlanDate = $this->createProgramPlanDate();
		}
		return $this->programPlanDate;
	}
	
	protected function createProgramPlanDate() {
		return NULL;
	}

	public function setProgramPlanDate($programPlanDate) {
		$this->programPlanDate = $this->validateProgramPlanDate($programPlanDate);
	}

	protected function validateProgramPlanDate($programPlanDate) {
	
		return $programPlanDate;
	}

	public function getProgramPlanEffectiveDate() {
		if ($this->programPlanEffectiveDate===NULL) {
			$this->programPlanEffectiveDate = $this->createProgramPlanEffectiveDate();
		}
		return $this->programPlanEffectiveDate;
	}
	
	protected function createProgramPlanEffectiveDate() {
		return NULL;
	}

	public function setProgramPlanEffectiveDate($programPlanEffectiveDate) {
		$this->programPlanEffectiveDate = $this->validateProgramPlanEffectiveDate($programPlanEffectiveDate);
	}

	protected function validateProgramPlanEffectiveDate($programPlanEffectiveDate) {
	
		return $programPlanEffectiveDate;
	}

	public function getPlannedAssessmentParticipation() {
		if ($this->plannedAssessmentParticipation===NULL) {
			$this->plannedAssessmentParticipation = $this->createPlannedAssessmentParticipation();
		}
		return $this->plannedAssessmentParticipation;
	}
	
	protected function createPlannedAssessmentParticipation() {
		return new \org\sifinfo\www\infrastructure\_2_x\PlannedAssessmentParticipationType();
	}

	public function setPlannedAssessmentParticipation($plannedAssessmentParticipation) {
		$this->plannedAssessmentParticipation = $this->validatePlannedAssessmentParticipation($plannedAssessmentParticipation);
	}

	protected function validatePlannedAssessmentParticipation($plannedAssessmentParticipation) {
		if ( ! $plannedAssessmentParticipation instanceof \org\sifinfo\www\infrastructure\_2_x\PlannedAssessmentParticipationType  && ! is_null($plannedAssessmentParticipation) ) {
			$plannedAssessmentParticipation = new \org\sifinfo\www\infrastructure\_2_x\PlannedAssessmentParticipationType ($plannedAssessmentParticipation);
		}
	
		return $plannedAssessmentParticipation;
	}

	public function getStudentSpecialEducationFTE() {
		if ($this->studentSpecialEducationFTE===NULL) {
			$this->studentSpecialEducationFTE = $this->createStudentSpecialEducationFTE();
		}
		return $this->studentSpecialEducationFTE;
	}
	
	protected function createStudentSpecialEducationFTE() {
		return new \org\sifinfo\www\infrastructure\_2_x\StudentSpecialEducationFTE();
	}

	public function setStudentSpecialEducationFTE($studentSpecialEducationFTE) {
		$this->studentSpecialEducationFTE = $this->validateStudentSpecialEducationFTE($studentSpecialEducationFTE);
	}

	protected function validateStudentSpecialEducationFTE($studentSpecialEducationFTE) {
		if ( ! $studentSpecialEducationFTE instanceof \org\sifinfo\www\infrastructure\_2_x\StudentSpecialEducationFTE  && ! is_null($studentSpecialEducationFTE) ) {
			$studentSpecialEducationFTE = new \org\sifinfo\www\infrastructure\_2_x\StudentSpecialEducationFTE ($studentSpecialEducationFTE);
		}
	
		return $studentSpecialEducationFTE;
	}
} // end class StudentParticipationData
