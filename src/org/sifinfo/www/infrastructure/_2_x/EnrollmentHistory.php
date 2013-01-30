<?php
namespace org\sifinfo\www\infrastructure\_2_x;



/**
 * @XmlNamespaces ({
 *	@XmlNamespace(url="http://www.sifinfo.org/infrastructure/2.x", prefix="")
 * })
 * @XmlEntity	(xml="EnrollmentHistory")
 */
class EnrollmentHistory {
	/**
	 */

	/**
	 * @XmlElement	(type="\org\sifinfo\www\infrastructure\_2_x\StudentSchoolEnrollmentData", collection="true", name="StudentSchoolEnrollmentData")
	 */
	protected $studentSchoolEnrollmentData;

	public function __construct($studentSchoolEnrollmentData = NULL) {
		$this->studentSchoolEnrollmentData = ($studentSchoolEnrollmentData===NULL) ? NULL : $this->validateStudentSchoolEnrollmentData($studentSchoolEnrollmentData);
	}

	public function getStudentSchoolEnrollmentData() {
		if ($this->studentSchoolEnrollmentData===NULL) {
			$this->studentSchoolEnrollmentData = $this->createStudentSchoolEnrollmentData();
		}
		return $this->studentSchoolEnrollmentData;
	}
	
	protected function createStudentSchoolEnrollmentData() {
		return array();
	}

	public function setStudentSchoolEnrollmentData($studentSchoolEnrollmentData) {
		$this->studentSchoolEnrollmentData = $this->validateStudentSchoolEnrollmentData($studentSchoolEnrollmentData);
	}

	protected function validateStudentSchoolEnrollmentData($studentSchoolEnrollmentData) {
		if ( ! is_array ($studentSchoolEnrollmentData) && ! is_null($studentSchoolEnrollmentData) ) {
			$studentSchoolEnrollmentData = array($studentSchoolEnrollmentData);
		}
		$count = count($studentSchoolEnrollmentData);
		if ($count < 0) {
			throw new \Exception(sprintf('Supplied %s array has less than the required number (%d) of entries.', 'studentSchoolEnrollmentData', 0));
		}
		foreach ($studentSchoolEnrollmentData as $entry) {
			if (!($entry instanceof StudentSchoolEnrollmentData)) {
				throw new \Exception(sprintf('Supplied %s value was not %s', 'studentSchoolEnrollmentData', 'StudentSchoolEnrollmentData'));
			}
		}
	
		return $studentSchoolEnrollmentData;
	}

	public function addStudentSchoolEnrollmentData($studentSchoolEnrollmentData) {
		$this->studentSchoolEnrollmentData[] = $studentSchoolEnrollmentData;
	}
} // end class EnrollmentHistory
