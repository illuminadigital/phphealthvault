<?php
namespace org\sifinfo\www\infrastructure\_2_x;



/**
 * @XmlNamespaces ({
 *	@XmlNamespace(url="http://www.sifinfo.org/infrastructure/2.x", prefix="")
 * })
 * @XmlEntity	(xml="StudentParticipationList")
 */
class StudentParticipationList {
	/**
	 */

	/**
	 * @XmlElement	(type="\org\sifinfo\www\infrastructure\_2_x\StudentParticipationData", collection="true", name="StudentParticipationData")
	 */
	protected $studentParticipationData;

	public function __construct($studentParticipationData = NULL) {
		$this->studentParticipationData = ($studentParticipationData===NULL) ? NULL : $this->validateStudentParticipationData($studentParticipationData);
	}

	public function getStudentParticipationData() {
		if ($this->studentParticipationData===NULL) {
			$this->studentParticipationData = $this->createStudentParticipationData();
		}
		return $this->studentParticipationData;
	}
	
	protected function createStudentParticipationData() {
		return array();
	}

	public function setStudentParticipationData($studentParticipationData) {
		$this->studentParticipationData = $this->validateStudentParticipationData($studentParticipationData);
	}

	protected function validateStudentParticipationData($studentParticipationData) {
		if ( ! $studentParticipationData instanceof \org\sifinfo\www\infrastructure\_2_x\StudentParticipationData ) {
			$studentParticipationData = new \org\sifinfo\www\infrastructure\_2_x\StudentParticipationData ($studentParticipationData);
		}
		$count = count($studentParticipationData);
		if ($count < 1) {
			throw new \Exception(sprintf('Supplied %s array has less than the required number (%d) of entries.', 'studentParticipationData', 1));
		}
		foreach ($studentParticipationData as $entry) {
			if (!($entry instanceof StudentParticipationData)) {
				throw new \Exception(sprintf('Supplied %s value was not %s', 'studentParticipationData', 'StudentParticipationData'));
			}
		}
	
		return $studentParticipationData;
	}

	public function addStudentParticipationData($studentParticipationData) {
		$this->studentParticipationData[] = $studentParticipationData;
	}
} // end class StudentParticipationList
