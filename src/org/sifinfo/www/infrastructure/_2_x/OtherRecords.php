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
	 * @XmlElement	(type="\org\sifinfo\www\infrastructure\_2_x\IdRefType", collection="true", name="StudentRecordPackageRefId")
	 */
	protected $studentRecordPackageRefId;

	public function __construct($studentRecordPackageRefId = NULL) {
		$this->studentRecordPackageRefId = ($studentRecordPackageRefId===NULL) ? NULL : $this->validateStudentRecordPackageRefId($studentRecordPackageRefId);
	}

	public function getStudentRecordPackageRefId() {
		if ($this->studentRecordPackageRefId===NULL) {
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
		if ( ! $studentRecordPackageRefId instanceof \org\sifinfo\www\infrastructure\_2_x\IdRefType ) {
			$studentRecordPackageRefId = new \org\sifinfo\www\infrastructure\_2_x\IdRefType ($studentRecordPackageRefId);
		}
		$count = count($studentRecordPackageRefId);
		if ($count < 1) {
			throw new \Exception(sprintf('Supplied %s array has less than the required number (%d) of entries.', 'studentRecordPackageRefId', 1));
		}
		foreach ($studentRecordPackageRefId as $entry) {
			if (!($entry instanceof IdRefType)) {
				throw new \Exception(sprintf('Supplied %s value was not %s', 'studentRecordPackageRefId', 'IdRefType'));
			}
		}
	
		return $studentRecordPackageRefId;
	}

	public function addStudentRecordPackageRefId($studentRecordPackageRefId) {
		$this->studentRecordPackageRefId[] = $studentRecordPackageRefId;
	}
} // end class OtherRecords
