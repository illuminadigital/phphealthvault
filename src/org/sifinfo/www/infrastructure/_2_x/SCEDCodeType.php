<?php
namespace org\sifinfo\www\infrastructure\_2_x;



/**
 * @XmlNamespaces ({
 *	@XmlNamespace(url="http://www.sifinfo.org/infrastructure/2.x", prefix="")
 * })
 * @XmlEntity	(xml="SCEDCodeType")
 */
class SCEDCodeType {
	/**
	 * Course code from the School Codes for the Exchange of Data that describe the content of the course.
	 */

	/**
	 * List of manually overridden properties that should not be re-generated automatically
	 * @var array
	 */
	protected $_overrides = array();


	/**
	 * @XmlElement	(type="\org\sifinfo\www\infrastructure\_2_x\SCEDCourseTitlesType", name="CourseDescription")
	 */
	protected $courseDescription;

	/**
	 * @XmlElement	(type="\org\sifinfo\www\infrastructure\_2_x\CourseLevel", name="CourseLevel")
	 */
	protected $courseLevel;

	/**
	 * @XmlElement	(type="\org\sifinfo\www\infrastructure\_2_x\AvailableCredit", name="AvailableCredit")
	 */
	protected $availableCredit;

	/**
	 * @XmlElement	(type="\org\sifinfo\www\infrastructure\_2_x\SequenceNumber", name="SequenceNumber")
	 */
	protected $sequenceNumber;

	/**
	 * @XmlElement	(type="\org\sifinfo\www\infrastructure\_2_x\SequenceLimit", name="SequenceLimit")
	 */
	protected $sequenceLimit;

	public function __construct($courseDescription = NULL, $courseLevel = NULL, $availableCredit = NULL, $sequenceNumber = NULL, $sequenceLimit = NULL) {
		$this->courseDescription = ($courseDescription===NULL) ? NULL : $this->validateCourseDescription($courseDescription);
		$this->courseLevel = ($courseLevel===NULL) ? NULL : $this->validateCourseLevel($courseLevel);
		$this->availableCredit = ($availableCredit===NULL) ? NULL : $this->validateAvailableCredit($availableCredit);
		$this->sequenceNumber = ($sequenceNumber===NULL) ? NULL : $this->validateSequenceNumber($sequenceNumber);
		$this->sequenceLimit = ($sequenceLimit===NULL) ? NULL : $this->validateSequenceLimit($sequenceLimit);
	}

	public function getCourseDescription($autoCreate = TRUE) {
		if ($this->courseDescription===NULL && $autoCreate && ! isset($this->_overrides['courseDescription']) ) {
			$this->courseDescription = $this->createCourseDescription();
		}
		return $this->courseDescription;
	}
	
	protected function createCourseDescription() {
		return NULL;
	}

	public function setCourseDescription($courseDescription) {
		$this->courseDescription = $this->validateCourseDescription($courseDescription);
	}

	protected function validateCourseDescription($courseDescription) {
	
		return $courseDescription;
	}

	public function getCourseLevel($autoCreate = TRUE) {
		if ($this->courseLevel===NULL && $autoCreate && ! isset($this->_overrides['courseLevel']) ) {
			$this->courseLevel = $this->createCourseLevel();
		}
		return $this->courseLevel;
	}
	
	protected function createCourseLevel() {
		return new \org\sifinfo\www\infrastructure\_2_x\CourseLevel();
	}

	public function setCourseLevel($courseLevel) {
		$this->courseLevel = $this->validateCourseLevel($courseLevel);
	}

	protected function validateCourseLevel($courseLevel) {
		if ( ! $courseLevel instanceof \org\sifinfo\www\infrastructure\_2_x\CourseLevel ) {
			$courseLevel = new \org\sifinfo\www\infrastructure\_2_x\CourseLevel ($courseLevel);
		}
	
		return $courseLevel;
	}

	public function getAvailableCredit($autoCreate = TRUE) {
		if ($this->availableCredit===NULL && $autoCreate && ! isset($this->_overrides['availableCredit']) ) {
			$this->availableCredit = $this->createAvailableCredit();
		}
		return $this->availableCredit;
	}
	
	protected function createAvailableCredit() {
		return new \org\sifinfo\www\infrastructure\_2_x\AvailableCredit();
	}

	public function setAvailableCredit($availableCredit) {
		$this->availableCredit = $this->validateAvailableCredit($availableCredit);
	}

	protected function validateAvailableCredit($availableCredit) {
		if ( ! $availableCredit instanceof \org\sifinfo\www\infrastructure\_2_x\AvailableCredit ) {
			$availableCredit = new \org\sifinfo\www\infrastructure\_2_x\AvailableCredit ($availableCredit);
		}
	
		return $availableCredit;
	}

	public function getSequenceNumber($autoCreate = TRUE) {
		if ($this->sequenceNumber===NULL && $autoCreate && ! isset($this->_overrides['sequenceNumber']) ) {
			$this->sequenceNumber = $this->createSequenceNumber();
		}
		return $this->sequenceNumber;
	}
	
	protected function createSequenceNumber() {
		return new \org\sifinfo\www\infrastructure\_2_x\SequenceNumber();
	}

	public function setSequenceNumber($sequenceNumber) {
		$this->sequenceNumber = $this->validateSequenceNumber($sequenceNumber);
	}

	protected function validateSequenceNumber($sequenceNumber) {
		if ( ! $sequenceNumber instanceof \org\sifinfo\www\infrastructure\_2_x\SequenceNumber ) {
			$sequenceNumber = new \org\sifinfo\www\infrastructure\_2_x\SequenceNumber ($sequenceNumber);
		}
	
		return $sequenceNumber;
	}

	public function getSequenceLimit($autoCreate = TRUE) {
		if ($this->sequenceLimit===NULL && $autoCreate && ! isset($this->_overrides['sequenceLimit']) ) {
			$this->sequenceLimit = $this->createSequenceLimit();
		}
		return $this->sequenceLimit;
	}
	
	protected function createSequenceLimit() {
		return new \org\sifinfo\www\infrastructure\_2_x\SequenceLimit();
	}

	public function setSequenceLimit($sequenceLimit) {
		$this->sequenceLimit = $this->validateSequenceLimit($sequenceLimit);
	}

	protected function validateSequenceLimit($sequenceLimit) {
		if ( ! $sequenceLimit instanceof \org\sifinfo\www\infrastructure\_2_x\SequenceLimit ) {
			$sequenceLimit = new \org\sifinfo\www\infrastructure\_2_x\SequenceLimit ($sequenceLimit);
		}
	
		return $sequenceLimit;
	}
} // end class SCEDCodeType
