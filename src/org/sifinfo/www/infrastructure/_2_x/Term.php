<?php
namespace org\sifinfo\www\infrastructure\_2_x;



/**
 * @XmlNamespaces ({
 *	@XmlNamespace(url="http://www.sifinfo.org/infrastructure/2.x", prefix="")
 * })
 * @XmlEntity	(xml="Term")
 */
class Term {
	/**
	 */

	/**
	 * List of manually overridden properties that should not be re-generated automatically
	 * @var array
	 */
	protected $_overrides = array();


	/**
	 * @XmlElement	(type="\org\sifinfo\www\infrastructure\_2_x\TermInfoData", name="TermInfoData")
	 */
	protected $termInfoData;

	/**
	 * @XmlElement	(type="\org\sifinfo\www\infrastructure\_2_x\Courses", name="Courses")
	 */
	protected $courses;

	public function __construct($termInfoData = NULL, $courses = NULL) {
		$this->termInfoData = ($termInfoData===NULL) ? NULL : $this->validateTermInfoData($termInfoData);
		$this->courses = ($courses===NULL) ? NULL : $this->validateCourses($courses);
	}

	public function getTermInfoData($autoCreate = TRUE) {
		if ($this->termInfoData===NULL && $autoCreate && ! isset($this->_overrides['termInfoData']) ) {
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
		if ( ! $termInfoData instanceof \org\sifinfo\www\infrastructure\_2_x\TermInfoData ) {
			$termInfoData = new \org\sifinfo\www\infrastructure\_2_x\TermInfoData ($termInfoData);
		}
	
		return $termInfoData;
	}

	public function getCourses($autoCreate = TRUE) {
		if ($this->courses===NULL && $autoCreate && ! isset($this->_overrides['courses']) ) {
			$this->courses = $this->createCourses();
		}
		return $this->courses;
	}
	
	protected function createCourses() {
		return new \org\sifinfo\www\infrastructure\_2_x\Courses();
	}

	public function setCourses($courses) {
		$this->courses = $this->validateCourses($courses);
	}

	protected function validateCourses($courses) {
		if ( $courses === FALSE ) {
			$this->_overrides['courses'] = TRUE;
			return NULL;
		}

		if ( ! $courses instanceof \org\sifinfo\www\infrastructure\_2_x\Courses  && ! is_null($courses) ) {
			$courses = new \org\sifinfo\www\infrastructure\_2_x\Courses ($courses);
		}

		unset ($this->_overrides['courses']);
	
		return $courses;
	}
} // end class Term
