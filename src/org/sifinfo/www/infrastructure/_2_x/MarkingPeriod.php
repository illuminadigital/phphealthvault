<?php
namespace org\sifinfo\www\infrastructure\_2_x;



/**
 * @XmlNamespaces ({
 *	@XmlNamespace(url="http://www.sifinfo.org/infrastructure/2.x", prefix="")
 * })
 * @XmlEntity	(xml="MarkingPeriod")
 */
class MarkingPeriod {
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
	 * @XmlElement	(type="\org\sifinfo\www\infrastructure\_2_x\MarkData", name="MarkData")
	 */
	protected $markData;

	/**
	 * @XmlText	(type="float", name="CourseCreditsAttempted")
	 */
	protected $courseCreditsAttempted;

	/**
	 * @XmlElement	(type="\org\sifinfo\www\infrastructure\_2_x\SIFExtendedElementsType", name="SIF_ExtendedElements")
	 */
	protected $sifExtendedElements;

	public function __construct($termInfoData = NULL, $gradeLevelWhenTaken = NULL, $markData = NULL, $courseCreditsAttempted = NULL, $sifExtendedElements = NULL) {
		$this->termInfoData = ($termInfoData===NULL) ? NULL : $this->validateTermInfoData($termInfoData);
		$this->gradeLevelWhenTaken = ($gradeLevelWhenTaken===NULL) ? NULL : $this->validateGradeLevelWhenTaken($gradeLevelWhenTaken);
		$this->markData = ($markData===NULL) ? NULL : $this->validateMarkData($markData);
		$this->courseCreditsAttempted = ($courseCreditsAttempted===NULL) ? NULL : $this->validateCourseCreditsAttempted($courseCreditsAttempted);
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

	public function getMarkData() {
		if ($this->markData===NULL) {
			$this->markData = $this->createMarkData();
		}
		return $this->markData;
	}
	
	protected function createMarkData() {
		return new \org\sifinfo\www\infrastructure\_2_x\MarkData();
	}

	public function setMarkData($markData) {
		$this->markData = $this->validateMarkData($markData);
	}

	protected function validateMarkData($markData) {
		if ( ! $markData instanceof \org\sifinfo\www\infrastructure\_2_x\MarkData  && ! is_null($markData) ) {
			$markData = new \org\sifinfo\www\infrastructure\_2_x\MarkData ($markData);
		}
	
		return $markData;
	}

	public function getCourseCreditsAttempted() {
		if ($this->courseCreditsAttempted===NULL) {
			$this->courseCreditsAttempted = $this->createCourseCreditsAttempted();
		}
		return $this->courseCreditsAttempted;
	}
	
	protected function createCourseCreditsAttempted() {
		return NULL;
	}

	public function setCourseCreditsAttempted($courseCreditsAttempted) {
		$this->courseCreditsAttempted = $this->validateCourseCreditsAttempted($courseCreditsAttempted);
	}

	protected function validateCourseCreditsAttempted($courseCreditsAttempted) {
		if ( ! is_float($courseCreditsAttempted) && ! is_null($courseCreditsAttempted) ) {
			throw new \Exception(sprintf('Supplied %s value was not %s', 'courseCreditsAttempted', 'float'));
		}
	
		return $courseCreditsAttempted;
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
} // end class MarkingPeriod
