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
	 * List of manually overridden properties that should not be re-generated automatically
	 * @var array
	 */
	protected $_overrides = array();


	/**
	 * @XmlElement	(type="\org\sifinfo\www\infrastructure\_2_x\StudentParticipationData", collection="true", name="StudentParticipationData")
	 */
	protected $studentParticipationData;

	public function __construct($studentParticipationData = NULL) {
		$this->studentParticipationData = ($studentParticipationData===NULL) ? NULL : $this->validateStudentParticipationData($studentParticipationData);
	}

	public function getStudentParticipationData($autoCreate = TRUE) {
		if ($this->studentParticipationData===NULL && $autoCreate && ! isset($this->_overrides['studentParticipationData']) ) {
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
		if ( ! is_array ($studentParticipationData) ) {
			$studentParticipationData = array($studentParticipationData);
		}
		$count = count($studentParticipationData);
		if ($count < 1) {
			throw new \Exception(sprintf('Supplied %s array has less than the required number (%d) of entries.', 'studentParticipationData', 1));
		}
		foreach ($studentParticipationData as $entry) {
			if (!($entry instanceof \org\sifinfo\www\infrastructure\_2_x\StudentParticipationData )) {
				throw new \Exception(sprintf('Supplied %s value was not %s', 'studentParticipationData', 'StudentParticipationData'));
			}
		}
	
		return $studentParticipationData;
	}

	public function addStudentParticipationData($studentParticipationData) {
		$this->studentParticipationData[] = $studentParticipationData;
	}
} // end class StudentParticipationList
