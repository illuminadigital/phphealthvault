<?php
namespace org\sifinfo\www\infrastructure\_2_x;



/**
 * @XmlNamespaces ({
 *	@XmlNamespace(url="http://www.sifinfo.org/infrastructure/2.x", prefix="")
 * })
 * @XmlEntity	(xml="Courses")
 */
class Courses {
	/**
	 */

	/**
	 * List of manually overridden properties that should not be re-generated automatically
	 * @var array
	 */
	protected $_overrides = array();


	/**
	 * @XmlElement	(type="\org\sifinfo\www\infrastructure\_2_x\Course", collection="true", name="Course")
	 */
	protected $course;

	public function __construct($course = NULL) {
		$this->course = ($course===NULL) ? NULL : $this->validateCourse($course);
	}

	public function getCourse($autoCreate = TRUE) {
		if ($this->course===NULL && $autoCreate && ! isset($this->_overrides['course']) ) {
			$this->course = $this->createCourse();
		}
		return $this->course;
	}
	
	protected function createCourse() {
		return array();
	}

	public function setCourse($course) {
		$this->course = $this->validateCourse($course);
	}

	protected function validateCourse($course) {
		if ( ! is_array ($course) ) {
			$course = array($course);
		}
		$count = count($course);
		if ($count < 1) {
			throw new \Exception(sprintf('Supplied %s array has less than the required number (%d) of entries.', 'course', 1));
		}
		foreach ($course as $entry) {
			if (!($entry instanceof \org\sifinfo\www\infrastructure\_2_x\Course )) {
				throw new \Exception(sprintf('Supplied %s value was not %s', 'course', 'Course'));
			}
		}
	
		return $course;
	}

	public function addCourse($course) {
		$this->course[] = $course;
	}
} // end class Courses
