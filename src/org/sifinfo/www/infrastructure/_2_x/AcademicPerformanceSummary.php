<?php
namespace org\sifinfo\www\infrastructure\_2_x;



/**
 * @XmlNamespaces ({
 *	@XmlNamespace(url="http://www.sifinfo.org/infrastructure/2.x", prefix="")
 * })
 * @XmlEntity	(xml="AcademicPerformanceSummary")
 */
class AcademicPerformanceSummary {
	/**
	 */

	/**
	 * @XmlText	(type="float", name="TotalCreditsAttempted")
	 */
	protected $totalCreditsAttempted;

	/**
	 * @XmlText	(type="float", name="TotalCreditsEarned")
	 */
	protected $totalCreditsEarned;

	/**
	 * @XmlText	(type="float", name="CumulativeGPACreditsEarned")
	 */
	protected $cumulativeGPACreditsEarned;

	/**
	 * @XmlText	(type="float", name="CumulativeGradePoints")
	 */
	protected $cumulativeGradePoints;

	/**
	 * @XmlText	(type="float", name="CumulativeGPA")
	 */
	protected $cumulativeGPA;

	/**
	 * @XmlText	(type="string", name="GPAType")
	 */
	protected $gPAType;

	/**
	 * @XmlText	(type="integer", name="ClassRank")
	 */
	protected $classRank;

	/**
	 * @XmlText	(type="integer", name="ClassTotalNumber")
	 */
	protected $classTotalNumber;

	/**
	 * @XmlElement	(type="\org\sifinfo\www\infrastructure\_2_x\PartialDateType", name="ClassRankingDate")
	 */
	protected $classRankingDate;

	/**
	 * @XmlElement	(type="\org\sifinfo\www\infrastructure\_2_x\PartialDateType", name="ProjectedGraduationDate")
	 */
	protected $projectedGraduationDate;

	/**
	 * @XmlElement	(type="\org\sifinfo\www\infrastructure\_2_x\PartialDateType", name="GraduationDate")
	 */
	protected $graduationDate;

	/**
	 * @XmlText	(type="string", name="GraduationDiplomaType")
	 */
	protected $graduationDiplomaType;

	/**
	 * @XmlElement	(type="\org\sifinfo\www\infrastructure\_2_x\NCES0106CourseInstructionalLevelType", name="AcademicTrack")
	 */
	protected $academicTrack;

	/**
	 * @XmlElement	(type="\org\sifinfo\www\infrastructure\_2_x\AcademicFoci", name="AcademicFoci")
	 */
	protected $academicFoci;

	/**
	 * @XmlElement	(type="\org\sifinfo\www\infrastructure\_2_x\AcademicSubjects", name="AcademicSubjects")
	 */
	protected $academicSubjects;

	/**
	 * @XmlElement	(type="\org\sifinfo\www\infrastructure\_2_x\SIFExtendedElementsType", name="SIF_ExtendedElements")
	 */
	protected $sifExtendedElements;

	public function __construct($totalCreditsAttempted = NULL, $totalCreditsEarned = NULL, $cumulativeGPACreditsEarned = NULL, $cumulativeGradePoints = NULL, $cumulativeGPA = NULL, $gPAType = NULL, $classRank = NULL, $classTotalNumber = NULL, $classRankingDate = NULL, $projectedGraduationDate = NULL, $graduationDate = NULL, $graduationDiplomaType = NULL, $academicTrack = NULL, $academicFoci = NULL, $academicSubjects = NULL, $sifExtendedElements = NULL) {
		$this->totalCreditsAttempted = ($totalCreditsAttempted===NULL) ? NULL : $this->validateTotalCreditsAttempted($totalCreditsAttempted);
		$this->totalCreditsEarned = ($totalCreditsEarned===NULL) ? NULL : $this->validateTotalCreditsEarned($totalCreditsEarned);
		$this->cumulativeGPACreditsEarned = ($cumulativeGPACreditsEarned===NULL) ? NULL : $this->validateCumulativeGPACreditsEarned($cumulativeGPACreditsEarned);
		$this->cumulativeGradePoints = ($cumulativeGradePoints===NULL) ? NULL : $this->validateCumulativeGradePoints($cumulativeGradePoints);
		$this->cumulativeGPA = ($cumulativeGPA===NULL) ? NULL : $this->validateCumulativeGPA($cumulativeGPA);
		$this->gPAType = ($gPAType===NULL) ? NULL : $this->validateGPAType($gPAType);
		$this->classRank = ($classRank===NULL) ? NULL : $this->validateClassRank($classRank);
		$this->classTotalNumber = ($classTotalNumber===NULL) ? NULL : $this->validateClassTotalNumber($classTotalNumber);
		$this->classRankingDate = ($classRankingDate===NULL) ? NULL : $this->validateClassRankingDate($classRankingDate);
		$this->projectedGraduationDate = ($projectedGraduationDate===NULL) ? NULL : $this->validateProjectedGraduationDate($projectedGraduationDate);
		$this->graduationDate = ($graduationDate===NULL) ? NULL : $this->validateGraduationDate($graduationDate);
		$this->graduationDiplomaType = ($graduationDiplomaType===NULL) ? NULL : $this->validateGraduationDiplomaType($graduationDiplomaType);
		$this->academicTrack = ($academicTrack===NULL) ? NULL : $this->validateAcademicTrack($academicTrack);
		$this->academicFoci = ($academicFoci===NULL) ? NULL : $this->validateAcademicFoci($academicFoci);
		$this->academicSubjects = ($academicSubjects===NULL) ? NULL : $this->validateAcademicSubjects($academicSubjects);
		$this->sifExtendedElements = ($sifExtendedElements===NULL) ? NULL : $this->validateSifExtendedElements($sifExtendedElements);
	}

	public function getTotalCreditsAttempted() {
		if ($this->totalCreditsAttempted===NULL) {
			$this->totalCreditsAttempted = $this->createTotalCreditsAttempted();
		}
		return $this->totalCreditsAttempted;
	}
	
	protected function createTotalCreditsAttempted() {
		return NULL;
	}

	public function setTotalCreditsAttempted($totalCreditsAttempted) {
		$this->totalCreditsAttempted = $this->validateTotalCreditsAttempted($totalCreditsAttempted);
	}

	protected function validateTotalCreditsAttempted($totalCreditsAttempted) {
		$isValid = FALSE;
		if ( is_float($totalCreditsAttempted) ) {
			$isValid = TRUE;
		}
		else if ( is_null($totalCreditsAttempted) ) {
			$isValid = TRUE;
		}
		else if ( $totalCreditsAttempted == ($castVar = (float) $totalCreditsAttempted) ) {
			$isValid = TRUE;
			$totalCreditsAttempted = $castVar;
		}
		if ( ! $isValid ) {
			throw new \Exception(sprintf('Supplied %s value was not %s', 'totalCreditsAttempted', 'float'));
		}
	
		return $totalCreditsAttempted;
	}

	public function getTotalCreditsEarned() {
		if ($this->totalCreditsEarned===NULL) {
			$this->totalCreditsEarned = $this->createTotalCreditsEarned();
		}
		return $this->totalCreditsEarned;
	}
	
	protected function createTotalCreditsEarned() {
		return NULL;
	}

	public function setTotalCreditsEarned($totalCreditsEarned) {
		$this->totalCreditsEarned = $this->validateTotalCreditsEarned($totalCreditsEarned);
	}

	protected function validateTotalCreditsEarned($totalCreditsEarned) {
		$isValid = FALSE;
		if ( is_float($totalCreditsEarned) ) {
			$isValid = TRUE;
		}
		else if ( is_null($totalCreditsEarned) ) {
			$isValid = TRUE;
		}
		else if ( $totalCreditsEarned == ($castVar = (float) $totalCreditsEarned) ) {
			$isValid = TRUE;
			$totalCreditsEarned = $castVar;
		}
		if ( ! $isValid ) {
			throw new \Exception(sprintf('Supplied %s value was not %s', 'totalCreditsEarned', 'float'));
		}
	
		return $totalCreditsEarned;
	}

	public function getCumulativeGPACreditsEarned() {
		if ($this->cumulativeGPACreditsEarned===NULL) {
			$this->cumulativeGPACreditsEarned = $this->createCumulativeGPACreditsEarned();
		}
		return $this->cumulativeGPACreditsEarned;
	}
	
	protected function createCumulativeGPACreditsEarned() {
		return NULL;
	}

	public function setCumulativeGPACreditsEarned($cumulativeGPACreditsEarned) {
		$this->cumulativeGPACreditsEarned = $this->validateCumulativeGPACreditsEarned($cumulativeGPACreditsEarned);
	}

	protected function validateCumulativeGPACreditsEarned($cumulativeGPACreditsEarned) {
		$isValid = FALSE;
		if ( is_float($cumulativeGPACreditsEarned) ) {
			$isValid = TRUE;
		}
		else if ( is_null($cumulativeGPACreditsEarned) ) {
			$isValid = TRUE;
		}
		else if ( $cumulativeGPACreditsEarned == ($castVar = (float) $cumulativeGPACreditsEarned) ) {
			$isValid = TRUE;
			$cumulativeGPACreditsEarned = $castVar;
		}
		if ( ! $isValid ) {
			throw new \Exception(sprintf('Supplied %s value was not %s', 'cumulativeGPACreditsEarned', 'float'));
		}
	
		return $cumulativeGPACreditsEarned;
	}

	public function getCumulativeGradePoints() {
		if ($this->cumulativeGradePoints===NULL) {
			$this->cumulativeGradePoints = $this->createCumulativeGradePoints();
		}
		return $this->cumulativeGradePoints;
	}
	
	protected function createCumulativeGradePoints() {
		return NULL;
	}

	public function setCumulativeGradePoints($cumulativeGradePoints) {
		$this->cumulativeGradePoints = $this->validateCumulativeGradePoints($cumulativeGradePoints);
	}

	protected function validateCumulativeGradePoints($cumulativeGradePoints) {
		$isValid = FALSE;
		if ( is_float($cumulativeGradePoints) ) {
			$isValid = TRUE;
		}
		else if ( is_null($cumulativeGradePoints) ) {
			$isValid = TRUE;
		}
		else if ( $cumulativeGradePoints == ($castVar = (float) $cumulativeGradePoints) ) {
			$isValid = TRUE;
			$cumulativeGradePoints = $castVar;
		}
		if ( ! $isValid ) {
			throw new \Exception(sprintf('Supplied %s value was not %s', 'cumulativeGradePoints', 'float'));
		}
	
		return $cumulativeGradePoints;
	}

	public function getCumulativeGPA() {
		if ($this->cumulativeGPA===NULL) {
			$this->cumulativeGPA = $this->createCumulativeGPA();
		}
		return $this->cumulativeGPA;
	}
	
	protected function createCumulativeGPA() {
		return NULL;
	}

	public function setCumulativeGPA($cumulativeGPA) {
		$this->cumulativeGPA = $this->validateCumulativeGPA($cumulativeGPA);
	}

	protected function validateCumulativeGPA($cumulativeGPA) {
		$isValid = FALSE;
		if ( is_float($cumulativeGPA) ) {
			$isValid = TRUE;
		}
		else if ( is_null($cumulativeGPA) ) {
			$isValid = TRUE;
		}
		else if ( $cumulativeGPA == ($castVar = (float) $cumulativeGPA) ) {
			$isValid = TRUE;
			$cumulativeGPA = $castVar;
		}
		if ( ! $isValid ) {
			throw new \Exception(sprintf('Supplied %s value was not %s', 'cumulativeGPA', 'float'));
		}
	
		return $cumulativeGPA;
	}

	public function getGPAType() {
		if ($this->gPAType===NULL) {
			$this->gPAType = $this->createGPAType();
		}
		return $this->gPAType;
	}
	
	protected function createGPAType() {
		return NULL;
	}

	public function setGPAType($gPAType) {
		$this->gPAType = $this->validateGPAType($gPAType);
	}

	protected function validateGPAType($gPAType) {
		if ( ! is_string($gPAType) && ! is_null($gPAType) ) {
			throw new \Exception(sprintf('Supplied %s value was not %s', 'gPAType', 'string'));
		}
	
		return $gPAType;
	}

	public function getClassRank() {
		if ($this->classRank===NULL) {
			$this->classRank = $this->createClassRank();
		}
		return $this->classRank;
	}
	
	protected function createClassRank() {
		return NULL;
	}

	public function setClassRank($classRank) {
		$this->classRank = $this->validateClassRank($classRank);
	}

	protected function validateClassRank($classRank) {
		$isValid = FALSE;
		if ( is_integer($classRank) ) {
			$isValid = TRUE;
		}
		else if ( is_null($classRank) ) {
			$isValid = TRUE;
		}
		else if ( $classRank == ($castVar = (integer) $classRank) ) {
			$isValid = TRUE;
			$classRank = $castVar;
		}
		if ( ! $isValid ) {
			throw new \Exception(sprintf('Supplied %s value was not %s', 'classRank', 'integer'));
		}
	
		return $classRank;
	}

	public function getClassTotalNumber() {
		if ($this->classTotalNumber===NULL) {
			$this->classTotalNumber = $this->createClassTotalNumber();
		}
		return $this->classTotalNumber;
	}
	
	protected function createClassTotalNumber() {
		return NULL;
	}

	public function setClassTotalNumber($classTotalNumber) {
		$this->classTotalNumber = $this->validateClassTotalNumber($classTotalNumber);
	}

	protected function validateClassTotalNumber($classTotalNumber) {
		$isValid = FALSE;
		if ( is_integer($classTotalNumber) ) {
			$isValid = TRUE;
		}
		else if ( is_null($classTotalNumber) ) {
			$isValid = TRUE;
		}
		else if ( $classTotalNumber == ($castVar = (integer) $classTotalNumber) ) {
			$isValid = TRUE;
			$classTotalNumber = $castVar;
		}
		if ( ! $isValid ) {
			throw new \Exception(sprintf('Supplied %s value was not %s', 'classTotalNumber', 'integer'));
		}
	
		return $classTotalNumber;
	}

	public function getClassRankingDate() {
		if ($this->classRankingDate===NULL) {
			$this->classRankingDate = $this->createClassRankingDate();
		}
		return $this->classRankingDate;
	}
	
	protected function createClassRankingDate() {
		return NULL;
	}

	public function setClassRankingDate($classRankingDate) {
		$this->classRankingDate = $this->validateClassRankingDate($classRankingDate);
	}

	protected function validateClassRankingDate($classRankingDate) {
	
		return $classRankingDate;
	}

	public function getProjectedGraduationDate() {
		if ($this->projectedGraduationDate===NULL) {
			$this->projectedGraduationDate = $this->createProjectedGraduationDate();
		}
		return $this->projectedGraduationDate;
	}
	
	protected function createProjectedGraduationDate() {
		return NULL;
	}

	public function setProjectedGraduationDate($projectedGraduationDate) {
		$this->projectedGraduationDate = $this->validateProjectedGraduationDate($projectedGraduationDate);
	}

	protected function validateProjectedGraduationDate($projectedGraduationDate) {
	
		return $projectedGraduationDate;
	}

	public function getGraduationDate() {
		if ($this->graduationDate===NULL) {
			$this->graduationDate = $this->createGraduationDate();
		}
		return $this->graduationDate;
	}
	
	protected function createGraduationDate() {
		return NULL;
	}

	public function setGraduationDate($graduationDate) {
		$this->graduationDate = $this->validateGraduationDate($graduationDate);
	}

	protected function validateGraduationDate($graduationDate) {
	
		return $graduationDate;
	}

	public function getGraduationDiplomaType() {
		if ($this->graduationDiplomaType===NULL) {
			$this->graduationDiplomaType = $this->createGraduationDiplomaType();
		}
		return $this->graduationDiplomaType;
	}
	
	protected function createGraduationDiplomaType() {
		return NULL;
	}

	public function setGraduationDiplomaType($graduationDiplomaType) {
		$this->graduationDiplomaType = $this->validateGraduationDiplomaType($graduationDiplomaType);
	}

	protected function validateGraduationDiplomaType($graduationDiplomaType) {
		if ( ! is_string($graduationDiplomaType) && ! is_null($graduationDiplomaType) ) {
			throw new \Exception(sprintf('Supplied %s value was not %s', 'graduationDiplomaType', 'string'));
		}
	
		return $graduationDiplomaType;
	}

	public function getAcademicTrack() {
		if ($this->academicTrack===NULL) {
			$this->academicTrack = $this->createAcademicTrack();
		}
		return $this->academicTrack;
	}
	
	protected function createAcademicTrack() {
		return NULL;
	}

	public function setAcademicTrack($academicTrack) {
		$this->academicTrack = $this->validateAcademicTrack($academicTrack);
	}

	protected function validateAcademicTrack($academicTrack) {
	
		return $academicTrack;
	}

	public function getAcademicFoci() {
		if ($this->academicFoci===NULL) {
			$this->academicFoci = $this->createAcademicFoci();
		}
		return $this->academicFoci;
	}
	
	protected function createAcademicFoci() {
		return new \org\sifinfo\www\infrastructure\_2_x\AcademicFoci();
	}

	public function setAcademicFoci($academicFoci) {
		$this->academicFoci = $this->validateAcademicFoci($academicFoci);
	}

	protected function validateAcademicFoci($academicFoci) {
		if ( ! $academicFoci instanceof \org\sifinfo\www\infrastructure\_2_x\AcademicFoci  && ! is_null($academicFoci) ) {
			$academicFoci = new \org\sifinfo\www\infrastructure\_2_x\AcademicFoci ($academicFoci);
		}
	
		return $academicFoci;
	}

	public function getAcademicSubjects() {
		if ($this->academicSubjects===NULL) {
			$this->academicSubjects = $this->createAcademicSubjects();
		}
		return $this->academicSubjects;
	}
	
	protected function createAcademicSubjects() {
		return new \org\sifinfo\www\infrastructure\_2_x\AcademicSubjects();
	}

	public function setAcademicSubjects($academicSubjects) {
		$this->academicSubjects = $this->validateAcademicSubjects($academicSubjects);
	}

	protected function validateAcademicSubjects($academicSubjects) {
		if ( ! $academicSubjects instanceof \org\sifinfo\www\infrastructure\_2_x\AcademicSubjects  && ! is_null($academicSubjects) ) {
			$academicSubjects = new \org\sifinfo\www\infrastructure\_2_x\AcademicSubjects ($academicSubjects);
		}
	
		return $academicSubjects;
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
} // end class AcademicPerformanceSummary
