<?php
namespace org\sifinfo\www\infrastructure\_2_x;



/**
 * @XmlNamespaces ({
 *	@XmlNamespace(url="http://www.sifinfo.org/infrastructure/2.x", prefix="")
 * })
 * @XmlEntity	(xml="OtherRecords")
 */
class OtherRecords {
	/**
	 */

	/**
	 * List of manually overridden properties that should not be re-generated automatically
	 * @var array
	 */
	protected $_overrides = array();


	/**
	 * @XmlElement	(type="\org\sifinfo\www\infrastructure\_2_x\IdRefType", collection="true", name="StudentRecordPackageRefId")
	 */
	protected $studentRecordPackageRefId;

	public function __construct($studentRecordPackageRefId = NULL) {
		$this->studentRecordPackageRefId = ($studentRecordPackageRefId===NULL) ? NULL : $this->validateStudentRecordPackageRefId($studentRecordPackageRefId);
	}

	public function getStudentRecordPackageRefId($autoCreate = TRUE) {
		if ($this->studentRecordPackageRefId===NULL && $autoCreate && ! isset($this->_overrides['studentRecordPackageRefId']) ) {
			$this->studentRecordPackageRefId = $this->createStudentRecordPackageRefId();
		}
		return $this->studentRecordPackageRefId;
	}
	
	protected function createStudentRecordPackageRefId() {
		return array();
	}

	public function setStudentRecordPackageRefId($studentRecordPackageRefId) {
		$this->studentRecordPackageRefId = $this->validateStudentRecordPackageRefId($studentRecordPackageRefId);
	}

	protected function validateStudentRecordPackageRefId($studentRecordPackageRefId) {
		$count = count($studentRecordPackageRefId);
		if ($count < 1) {
			throw new \Exception(sprintf('Supplied %s array has less than the required number (%d) of entries.', 'studentRecordPackageRefId', 1));
		}
		foreach ($studentRecordPackageRefId as $entry) {
		}
	
		return $studentRecordPackageRefId;
	}

	public function addStudentRecordPackageRefId($studentRecordPackageRefId) {
		$this->studentRecordPackageRefId[] = $this->validateStudentRecordPackageRefIdType($studentRecordPackageRefId);
	}

	protected function validateStudentRecordPackageRefIdType($studentRecordPackageRefId) {
	
		return $studentRecordPackageRefId;
	}
} // end class OtherRecords
