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
	 * List of manually overridden properties that should not be re-generated automatically
	 * @var array
	 */
	protected $_overrides = array();


	/**
	 * @XmlElement	(type="\org\sifinfo\www\infrastructure\_2_x\StudentRecordExchangeData", collection="true", name="StudentRecordExchangeData")
	 */
	protected $studentRecordExchangeData;

	public function __construct($studentRecordExchangeData = NULL) {
		$this->studentRecordExchangeData = ($studentRecordExchangeData===NULL) ? NULL : $this->validateStudentRecordExchangeData($studentRecordExchangeData);
	}

	public function getStudentRecordExchangeData($autoCreate = TRUE) {
		if ($this->studentRecordExchangeData===NULL && $autoCreate && ! isset($this->_overrides['studentRecordExchangeData']) ) {
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
			if (!($entry instanceof \org\sifinfo\www\infrastructure\_2_x\StudentRecordExchangeData )) {
				throw new \Exception(sprintf('Supplied %s value was not %s', 'studentRecordExchangeData', 'StudentRecordExchangeData'));
			}
		}
	
		return $studentRecordExchangeData;
	}

	public function addStudentRecordExchangeData($studentRecordExchangeData) {
		$this->studentRecordExchangeData[] = $studentRecordExchangeData;
	}
} // end class StudentRecordExchangeDataListType
