<?php
namespace org\sifinfo\www\infrastructure\_2_x;



/**
 * @XmlNamespaces ({
 *	@XmlNamespace(url="http://www.sifinfo.org/infrastructure/2.x", prefix="")
 * })
 * @XmlEntity	(xml="StudentPlacementList")
 */
class StudentPlacementList {
	/**
	 */

	/**
	 * @XmlElement	(type="\org\sifinfo\www\infrastructure\_2_x\StudentPlacementData", collection="true", name="StudentPlacementData")
	 */
	protected $studentPlacementData;

	public function __construct($studentPlacementData = NULL) {
		$this->studentPlacementData = ($studentPlacementData===NULL) ? NULL : $this->validateStudentPlacementData($studentPlacementData);
	}

	public function getStudentPlacementData() {
		if ($this->studentPlacementData===NULL) {
			$this->studentPlacementData = $this->createStudentPlacementData();
		}
		return $this->studentPlacementData;
	}
	
	protected function createStudentPlacementData() {
		return array();
	}

	public function setStudentPlacementData($studentPlacementData) {
		$this->studentPlacementData = $this->validateStudentPlacementData($studentPlacementData);
	}

	protected function validateStudentPlacementData($studentPlacementData) {
		if ( ! is_array ($studentPlacementData) ) {
			$studentPlacementData = array($studentPlacementData);
		}
		$count = count($studentPlacementData);
		if ($count < 1) {
			throw new \Exception(sprintf('Supplied %s array has less than the required number (%d) of entries.', 'studentPlacementData', 1));
		}
		foreach ($studentPlacementData as $entry) {
			if (!($entry instanceof StudentPlacementData)) {
				throw new \Exception(sprintf('Supplied %s value was not %s', 'studentPlacementData', 'StudentPlacementData'));
			}
		}
	
		return $studentPlacementData;
	}

	public function addStudentPlacementData($studentPlacementData) {
		$this->studentPlacementData[] = $studentPlacementData;
	}
} // end class StudentPlacementList
