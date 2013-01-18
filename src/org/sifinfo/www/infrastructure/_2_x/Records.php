<?php
namespace org\sifinfo\www\infrastructure\_2_x;



/**
 * @XmlNamespaces ({
 *	@XmlNamespace(url="http://www.sifinfo.org/infrastructure/2.x", prefix="")
 * })
 * @XmlEntity	(xml="Records")
 */
class Records {
	/**
	 */

	/**
	 * @XmlElement	(type="\org\sifinfo\www\infrastructure\_2_x\IdRefType", name="StudentDemographicRecordRefId")
	 */
	protected $studentDemographicRecordRefId;

	/**
	 * @XmlElement	(type="\org\sifinfo\www\infrastructure\_2_x\IdRefType", name="StudentAcademicRecordRefId")
	 */
	protected $studentAcademicRecordRefId;

	/**
	 * @XmlElement	(type="\org\sifinfo\www\infrastructure\_2_x\IdRefType", name="StudentSpecialEducationRecordRefId")
	 */
	protected $studentSpecialEducationRecordRefId;

	/**
	 * @XmlElement	(type="\org\sifinfo\www\infrastructure\_2_x\OtherRecords", name="OtherRecords")
	 */
	protected $otherRecords;

	public function __construct($studentDemographicRecordRefId = NULL, $studentAcademicRecordRefId = NULL, $studentSpecialEducationRecordRefId = NULL, $otherRecords = NULL) {
		$this->studentDemographicRecordRefId = ($studentDemographicRecordRefId===NULL) ? NULL : $this->validateStudentDemographicRecordRefId($studentDemographicRecordRefId);
		$this->studentAcademicRecordRefId = ($studentAcademicRecordRefId===NULL) ? NULL : $this->validateStudentAcademicRecordRefId($studentAcademicRecordRefId);
		$this->studentSpecialEducationRecordRefId = ($studentSpecialEducationRecordRefId===NULL) ? NULL : $this->validateStudentSpecialEducationRecordRefId($studentSpecialEducationRecordRefId);
		$this->otherRecords = ($otherRecords===NULL) ? NULL : $this->validateOtherRecords($otherRecords);
	}

	public function getStudentDemographicRecordRefId() {
		if ($this->studentDemographicRecordRefId===NULL) {
			$this->studentDemographicRecordRefId = $this->createStudentDemographicRecordRefId();
		}
		return $this->studentDemographicRecordRefId;
	}
	
	protected function createStudentDemographicRecordRefId() {
		return new \org\sifinfo\www\infrastructure\_2_x\IdRefType();
	}

	public function setStudentDemographicRecordRefId($studentDemographicRecordRefId) {
		$this->studentDemographicRecordRefId = $this->validateStudentDemographicRecordRefId($studentDemographicRecordRefId);
	}

	protected function validateStudentDemographicRecordRefId($studentDemographicRecordRefId) {
		if ( ! $studentDemographicRecordRefId instanceof \org\sifinfo\www\infrastructure\_2_x\IdRefType ) {
			$studentDemographicRecordRefId = new \org\sifinfo\www\infrastructure\_2_x\IdRefType ($studentDemographicRecordRefId);
		}
	
		return $studentDemographicRecordRefId;
	}

	public function getStudentAcademicRecordRefId() {
		if ($this->studentAcademicRecordRefId===NULL) {
			$this->studentAcademicRecordRefId = $this->createStudentAcademicRecordRefId();
		}
		return $this->studentAcademicRecordRefId;
	}
	
	protected function createStudentAcademicRecordRefId() {
		return new \org\sifinfo\www\infrastructure\_2_x\IdRefType();
	}

	public function setStudentAcademicRecordRefId($studentAcademicRecordRefId) {
		$this->studentAcademicRecordRefId = $this->validateStudentAcademicRecordRefId($studentAcademicRecordRefId);
	}

	protected function validateStudentAcademicRecordRefId($studentAcademicRecordRefId) {
		if ( ! $studentAcademicRecordRefId instanceof \org\sifinfo\www\infrastructure\_2_x\IdRefType  && ! is_null($studentAcademicRecordRefId) ) {
			$studentAcademicRecordRefId = new \org\sifinfo\www\infrastructure\_2_x\IdRefType ($studentAcademicRecordRefId);
		}
	
		return $studentAcademicRecordRefId;
	}

	public function getStudentSpecialEducationRecordRefId() {
		if ($this->studentSpecialEducationRecordRefId===NULL) {
			$this->studentSpecialEducationRecordRefId = $this->createStudentSpecialEducationRecordRefId();
		}
		return $this->studentSpecialEducationRecordRefId;
	}
	
	protected function createStudentSpecialEducationRecordRefId() {
		return new \org\sifinfo\www\infrastructure\_2_x\IdRefType();
	}

	public function setStudentSpecialEducationRecordRefId($studentSpecialEducationRecordRefId) {
		$this->studentSpecialEducationRecordRefId = $this->validateStudentSpecialEducationRecordRefId($studentSpecialEducationRecordRefId);
	}

	protected function validateStudentSpecialEducationRecordRefId($studentSpecialEducationRecordRefId) {
		if ( ! $studentSpecialEducationRecordRefId instanceof \org\sifinfo\www\infrastructure\_2_x\IdRefType  && ! is_null($studentSpecialEducationRecordRefId) ) {
			$studentSpecialEducationRecordRefId = new \org\sifinfo\www\infrastructure\_2_x\IdRefType ($studentSpecialEducationRecordRefId);
		}
	
		return $studentSpecialEducationRecordRefId;
	}

	public function getOtherRecords() {
		if ($this->otherRecords===NULL) {
			$this->otherRecords = $this->createOtherRecords();
		}
		return $this->otherRecords;
	}
	
	protected function createOtherRecords() {
		return new \org\sifinfo\www\infrastructure\_2_x\OtherRecords();
	}

	public function setOtherRecords($otherRecords) {
		$this->otherRecords = $this->validateOtherRecords($otherRecords);
	}

	protected function validateOtherRecords($otherRecords) {
		if ( ! $otherRecords instanceof \org\sifinfo\www\infrastructure\_2_x\OtherRecords  && ! is_null($otherRecords) ) {
			$otherRecords = new \org\sifinfo\www\infrastructure\_2_x\OtherRecords ($otherRecords);
		}
	
		return $otherRecords;
	}
} // end class Records
