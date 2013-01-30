<?php
namespace org\sifinfo\www\infrastructure\_2_x;



/**
 * @XmlNamespaces ({
 *	@XmlNamespace(url="http://www.sifinfo.org/infrastructure/2.x", prefix="")
 * })
 * @XmlEntity	(xml="StudentRecordExchangeDataListType")
 */
class StudentRecordExchangeDataListType {
	/**
	 */

	/**
	 * @XmlElement	(type="\org\sifinfo\www\infrastructure\_2_x\StudentRecordExchangeData", collection="true", name="StudentRecordExchangeData")
	 */
	protected $studentRecordExchangeData;

	public function __construct($studentRecordExchangeData = NULL) {
		$this->studentRecordExchangeData = ($studentRecordExchangeData===NULL) ? NULL : $this->validateStudentRecordExchangeData($studentRecordExchangeData);
	}

	public function getStudentRecordExchangeData() {
		if ($this->studentRecordExchangeData===NULL) {
			$this->studentRecordExchangeData = $this->createStudentRecordExchangeData();
		}
		return $this->studentRecordExchangeData;
	}
	
	protected function createStudentRecordExchangeData() {
		return array();
	}

	public function setStudentRecordExchangeData($studentRecordExchangeData) {
		$this->studentRecordExchangeData = $this->validateStudentRecordExchangeData($studentRecordExchangeData);
	}

	protected function validateStudentRecordExchangeData($studentRecordExchangeData) {
		if ( ! is_array ($studentRecordExchangeData) ) {
			$studentRecordExchangeData = array($studentRecordExchangeData);
		}
		$count = count($studentRecordExchangeData);
		if ($count < 1) {
			throw new \Exception(sprintf('Supplied %s array has less than the required number (%d) of entries.', 'studentRecordExchangeData', 1));
		}
		foreach ($studentRecordExchangeData as $entry) {
			if (!($entry instanceof StudentRecordExchangeData)) {
				throw new \Exception(sprintf('Supplied %s value was not %s', 'studentRecordExchangeData', 'StudentRecordExchangeData'));
			}
		}
	
		return $studentRecordExchangeData;
	}

	public function addStudentRecordExchangeData($studentRecordExchangeData) {
		$this->studentRecordExchangeData[] = $studentRecordExchangeData;
	}
} // end class StudentRecordExchangeDataListType
