<?php
namespace org\sifinfo\www\infrastructure\_2_x;



/**
 * @XmlNamespaces ({
 *	@XmlNamespace(url="http://www.sifinfo.org/infrastructure/2.x", prefix="")
 * })
 * @XmlEntity	(xml="TermPerformance")
 */
class TermPerformance {
	/**
	 */

	/**
	 * @XmlElement	(type="\org\sifinfo\www\infrastructure\_2_x\TermInfoData", name="TermInfoData")
	 */
	protected $termInfoData;

	/**
	 * @XmlElement	(type="\org\sifinfo\www\infrastructure\_2_x\GradeLevelType", name="GradeLevelWhenTaken")
	 */
	protected $gradeLevelWhenTaken;

	/**
	 * @XmlText	(type="float", name="CreditsAttempted")
	 */
	protected $creditsAttempted;

	/**
	 * @XmlText	(type="float", name="CreditsEarned")
	 */
	protected $creditsEarned;

	/**
	 * @XmlText	(type="float", name="GPACreditsAttempted")
	 */
	protected $gPACreditsAttempted;

	/**
	 * @XmlText	(type="float", name="GPACreditsEarned")
	 */
	protected $gPACreditsEarned;

	/**
	 * @XmlText	(type="float", name="GPAGradePoints")
	 */
	protected $gPAGradePoints;

	/**
	 * @XmlText	(type="float", name="GPA")
	 */
	protected $gPA;

	/**
	 * @XmlText	(type="float", name="WeightedGPA")
	 */
	protected $weightedGPA;

	/**
	 * @XmlText	(type="float", name="DaysAbsent")
	 */
	protected $daysAbsent;

	/**
	 * @XmlText	(type="float", name="DaysPresent")
	 */
	protected $daysPresent;

	/**
	 * @XmlElement	(type="\org\sifinfo\www\infrastructure\_2_x\SIFExtendedElementsType", name="SIF_ExtendedElements")
	 */
	protected $sifExtendedElements;

	public function __construct($termInfoData = NULL, $gradeLevelWhenTaken = NULL, $creditsAttempted = NULL, $creditsEarned = NULL, $gPACreditsAttempted = NULL, $gPACreditsEarned = NULL, $gPAGradePoints = NULL, $gPA = NULL, $weightedGPA = NULL, $daysAbsent = NULL, $daysPresent = NULL, $sifExtendedElements = NULL) {
		$this->termInfoData = ($termInfoData===NULL) ? NULL : $this->validateTermInfoData($termInfoData);
		$this->gradeLevelWhenTaken = ($gradeLevelWhenTaken===NULL) ? NULL : $this->validateGradeLevelWhenTaken($gradeLevelWhenTaken);
		$this->creditsAttempted = ($creditsAttempted===NULL) ? NULL : $this->validateCreditsAttempted($creditsAttempted);
		$this->creditsEarned = ($creditsEarned===NULL) ? NULL : $this->validateCreditsEarned($creditsEarned);
		$this->gPACreditsAttempted = ($gPACreditsAttempted===NULL) ? NULL : $this->validateGPACreditsAttempted($gPACreditsAttempted);
		$this->gPACreditsEarned = ($gPACreditsEarned===NULL) ? NULL : $this->validateGPACreditsEarned($gPACreditsEarned);
		$this->gPAGradePoints = ($gPAGradePoints===NULL) ? NULL : $this->validateGPAGradePoints($gPAGradePoints);
		$this->gPA = ($gPA===NULL) ? NULL : $this->validateGPA($gPA);
		$this->weightedGPA = ($weightedGPA===NULL) ? NULL : $this->validateWeightedGPA($weightedGPA);
		$this->daysAbsent = ($daysAbsent===NULL) ? NULL : $this->validateDaysAbsent($daysAbsent);
		$this->daysPresent = ($daysPresent===NULL) ? NULL : $this->validateDaysPresent($daysPresent);
		$this->sifExtendedElements = ($sifExtendedElements===NULL) ? NULL : $this->validateSifExtendedElements($sifExtendedElements);
	}

	public function getTermInfoData() {
		if ($this->termInfoData===NULL) {
			$this->termInfoData = $this->createTermInfoData();
		}
		return $this->termInfoData;
	}
	
	protected function createTermInfoData() {
		return new \org\sifinfo\www\infrastructure\_2_x\TermInfoData();
	}

	public function setTermInfoData($termInfoData) {
		$this->termInfoData = $this->validateTermInfoData($termInfoData);
	}

	protected function validateTermInfoData($termInfoData) {
		if ( ! $termInfoData instanceof \org\sifinfo\www\infrastructure\_2_x\TermInfoData  && ! is_null($termInfoData) ) {
			$termInfoData = new \org\sifinfo\www\infrastructure\_2_x\TermInfoData ($termInfoData);
		}
	
		return $termInfoData;
	}

	public function getGradeLevelWhenTaken() {
		if ($this->gradeLevelWhenTaken===NULL) {
			$this->gradeLevelWhenTaken = $this->createGradeLevelWhenTaken();
		}
		return $this->gradeLevelWhenTaken;
	}
	
	protected function createGradeLevelWhenTaken() {
		return new \org\sifinfo\www\infrastructure\_2_x\GradeLevelType();
	}

	public function setGradeLevelWhenTaken($gradeLevelWhenTaken) {
		$this->gradeLevelWhenTaken = $this->validateGradeLevelWhenTaken($gradeLevelWhenTaken);
	}

	protected function validateGradeLevelWhenTaken($gradeLevelWhenTaken) {
		if ( ! $gradeLevelWhenTaken instanceof \org\sifinfo\www\infrastructure\_2_x\GradeLevelType  && ! is_null($gradeLevelWhenTaken) ) {
			$gradeLevelWhenTaken = new \org\sifinfo\www\infrastructure\_2_x\GradeLevelType ($gradeLevelWhenTaken);
		}
	
		return $gradeLevelWhenTaken;
	}

	public function getCreditsAttempted() {
		if ($this->creditsAttempted===NULL) {
			$this->creditsAttempted = $this->createCreditsAttempted();
		}
		return $this->creditsAttempted;
	}
	
	protected function createCreditsAttempted() {
		return NULL;
	}

	public function setCreditsAttempted($creditsAttempted) {
		$this->creditsAttempted = $this->validateCreditsAttempted($creditsAttempted);
	}

	protected function validateCreditsAttempted($creditsAttempted) {
		$isValid = FALSE;
		if ( is_float($creditsAttempted) ) {
			$isValid = TRUE;
		}
		else if ( is_null($creditsAttempted) ) {
			$isValid = TRUE;
		}
		else if ( $creditsAttempted == ($castVar = (float) $creditsAttempted) ) {
			$isValid = TRUE;
			$creditsAttempted = $castVar;
		}
		if ( ! $isValid ) {
			throw new \Exception(sprintf('Supplied %s value was not %s', 'creditsAttempted', 'float'));
		}
	
		return $creditsAttempted;
	}

	public function getCreditsEarned() {
		if ($this->creditsEarned===NULL) {
			$this->creditsEarned = $this->createCreditsEarned();
		}
		return $this->creditsEarned;
	}
	
	protected function createCreditsEarned() {
		return NULL;
	}

	public function setCreditsEarned($creditsEarned) {
		$this->creditsEarned = $this->validateCreditsEarned($creditsEarned);
	}

	protected function validateCreditsEarned($creditsEarned) {
		$isValid = FALSE;
		if ( is_float($creditsEarned) ) {
			$isValid = TRUE;
		}
		else if ( is_null($creditsEarned) ) {
			$isValid = TRUE;
		}
		else if ( $creditsEarned == ($castVar = (float) $creditsEarned) ) {
			$isValid = TRUE;
			$creditsEarned = $castVar;
		}
		if ( ! $isValid ) {
			throw new \Exception(sprintf('Supplied %s value was not %s', 'creditsEarned', 'float'));
		}
	
		return $creditsEarned;
	}

	public function getGPACreditsAttempted() {
		if ($this->gPACreditsAttempted===NULL) {
			$this->gPACreditsAttempted = $this->createGPACreditsAttempted();
		}
		return $this->gPACreditsAttempted;
	}
	
	protected function createGPACreditsAttempted() {
		return NULL;
	}

	public function setGPACreditsAttempted($gPACreditsAttempted) {
		$this->gPACreditsAttempted = $this->validateGPACreditsAttempted($gPACreditsAttempted);
	}

	protected function validateGPACreditsAttempted($gPACreditsAttempted) {
		$isValid = FALSE;
		if ( is_float($gPACreditsAttempted) ) {
			$isValid = TRUE;
		}
		else if ( is_null($gPACreditsAttempted) ) {
			$isValid = TRUE;
		}
		else if ( $gPACreditsAttempted == ($castVar = (float) $gPACreditsAttempted) ) {
			$isValid = TRUE;
			$gPACreditsAttempted = $castVar;
		}
		if ( ! $isValid ) {
			throw new \Exception(sprintf('Supplied %s value was not %s', 'gPACreditsAttempted', 'float'));
		}
	
		return $gPACreditsAttempted;
	}

	public function getGPACreditsEarned() {
		if ($this->gPACreditsEarned===NULL) {
			$this->gPACreditsEarned = $this->createGPACreditsEarned();
		}
		return $this->gPACreditsEarned;
	}
	
	protected function createGPACreditsEarned() {
		return NULL;
	}

	public function setGPACreditsEarned($gPACreditsEarned) {
		$this->gPACreditsEarned = $this->validateGPACreditsEarned($gPACreditsEarned);
	}

	protected function validateGPACreditsEarned($gPACreditsEarned) {
		$isValid = FALSE;
		if ( is_float($gPACreditsEarned) ) {
			$isValid = TRUE;
		}
		else if ( is_null($gPACreditsEarned) ) {
			$isValid = TRUE;
		}
		else if ( $gPACreditsEarned == ($castVar = (float) $gPACreditsEarned) ) {
			$isValid = TRUE;
			$gPACreditsEarned = $castVar;
		}
		if ( ! $isValid ) {
			throw new \Exception(sprintf('Supplied %s value was not %s', 'gPACreditsEarned', 'float'));
		}
	
		return $gPACreditsEarned;
	}

	public function getGPAGradePoints() {
		if ($this->gPAGradePoints===NULL) {
			$this->gPAGradePoints = $this->createGPAGradePoints();
		}
		return $this->gPAGradePoints;
	}
	
	protected function createGPAGradePoints() {
		return NULL;
	}

	public function setGPAGradePoints($gPAGradePoints) {
		$this->gPAGradePoints = $this->validateGPAGradePoints($gPAGradePoints);
	}

	protected function validateGPAGradePoints($gPAGradePoints) {
		$isValid = FALSE;
		if ( is_float($gPAGradePoints) ) {
			$isValid = TRUE;
		}
		else if ( is_null($gPAGradePoints) ) {
			$isValid = TRUE;
		}
		else if ( $gPAGradePoints == ($castVar = (float) $gPAGradePoints) ) {
			$isValid = TRUE;
			$gPAGradePoints = $castVar;
		}
		if ( ! $isValid ) {
			throw new \Exception(sprintf('Supplied %s value was not %s', 'gPAGradePoints', 'float'));
		}
	
		return $gPAGradePoints;
	}

	public function getGPA() {
		if ($this->gPA===NULL) {
			$this->gPA = $this->createGPA();
		}
		return $this->gPA;
	}
	
	protected function createGPA() {
		return NULL;
	}

	public function setGPA($gPA) {
		$this->gPA = $this->validateGPA($gPA);
	}

	protected function validateGPA($gPA) {
		$isValid = FALSE;
		if ( is_float($gPA) ) {
			$isValid = TRUE;
		}
		else if ( is_null($gPA) ) {
			$isValid = TRUE;
		}
		else if ( $gPA == ($castVar = (float) $gPA) ) {
			$isValid = TRUE;
			$gPA = $castVar;
		}
		if ( ! $isValid ) {
			throw new \Exception(sprintf('Supplied %s value was not %s', 'gPA', 'float'));
		}
	
		return $gPA;
	}

	public function getWeightedGPA() {
		if ($this->weightedGPA===NULL) {
			$this->weightedGPA = $this->createWeightedGPA();
		}
		return $this->weightedGPA;
	}
	
	protected function createWeightedGPA() {
		return NULL;
	}

	public function setWeightedGPA($weightedGPA) {
		$this->weightedGPA = $this->validateWeightedGPA($weightedGPA);
	}

	protected function validateWeightedGPA($weightedGPA) {
		$isValid = FALSE;
		if ( is_float($weightedGPA) ) {
			$isValid = TRUE;
		}
		else if ( is_null($weightedGPA) ) {
			$isValid = TRUE;
		}
		else if ( $weightedGPA == ($castVar = (float) $weightedGPA) ) {
			$isValid = TRUE;
			$weightedGPA = $castVar;
		}
		if ( ! $isValid ) {
			throw new \Exception(sprintf('Supplied %s value was not %s', 'weightedGPA', 'float'));
		}
	
		return $weightedGPA;
	}

	public function getDaysAbsent() {
		if ($this->daysAbsent===NULL) {
			$this->daysAbsent = $this->createDaysAbsent();
		}
		return $this->daysAbsent;
	}
	
	protected function createDaysAbsent() {
		return NULL;
	}

	public function setDaysAbsent($daysAbsent) {
		$this->daysAbsent = $this->validateDaysAbsent($daysAbsent);
	}

	protected function validateDaysAbsent($daysAbsent) {
		$isValid = FALSE;
		if ( is_float($daysAbsent) ) {
			$isValid = TRUE;
		}
		else if ( is_null($daysAbsent) ) {
			$isValid = TRUE;
		}
		else if ( $daysAbsent == ($castVar = (float) $daysAbsent) ) {
			$isValid = TRUE;
			$daysAbsent = $castVar;
		}
		if ( ! $isValid ) {
			throw new \Exception(sprintf('Supplied %s value was not %s', 'daysAbsent', 'float'));
		}
	
		return $daysAbsent;
	}

	public function getDaysPresent() {
		if ($this->daysPresent===NULL) {
			$this->daysPresent = $this->createDaysPresent();
		}
		return $this->daysPresent;
	}
	
	protected function createDaysPresent() {
		return NULL;
	}

	public function setDaysPresent($daysPresent) {
		$this->daysPresent = $this->validateDaysPresent($daysPresent);
	}

	protected function validateDaysPresent($daysPresent) {
		$isValid = FALSE;
		if ( is_float($daysPresent) ) {
			$isValid = TRUE;
		}
		else if ( is_null($daysPresent) ) {
			$isValid = TRUE;
		}
		else if ( $daysPresent == ($castVar = (float) $daysPresent) ) {
			$isValid = TRUE;
			$daysPresent = $castVar;
		}
		if ( ! $isValid ) {
			throw new \Exception(sprintf('Supplied %s value was not %s', 'daysPresent', 'float'));
		}
	
		return $daysPresent;
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
} // end class TermPerformance
