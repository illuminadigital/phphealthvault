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
	 * List of manually overridden properties that should not be re-generated automatically
	 * @var array
	 */
	protected $_overrides = array();


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

	public function getStudentDemographicRecordRefId($autoCreate = TRUE) {
		if ($this->studentDemographicRecordRefId===NULL && $autoCreate && ! isset($this->_overrides['studentDemographicRecordRefId']) ) {
			$this->studentDemographicRecordRefId = $this->createStudentDemographicRecordRefId();
		}
		return $this->studentDemographicRecordRefId;
	}
	
	protected function createStudentDemographicRecordRefId() {
		return NULL;
	}

	public function setStudentDemographicRecordRefId($studentDemographicRecordRefId) {
		$this->studentDemographicRecordRefId = $this->validateStudentDemographicRecordRefId($studentDemographicRecordRefId);
	}

	protected function validateStudentDemographicRecordRefId($studentDemographicRecordRefId) {
	
		return $studentDemographicRecordRefId;
	}

	public function getStudentAcademicRecordRefId($autoCreate = TRUE) {
		if ($this->studentAcademicRecordRefId===NULL && $autoCreate && ! isset($this->_overrides['studentAcademicRecordRefId']) ) {
			$this->studentAcademicRecordRefId = $this->createStudentAcademicRecordRefId();
		}
		return $this->studentAcademicRecordRefId;
	}
	
	protected function createStudentAcademicRecordRefId() {
		return NULL;
	}

	public function setStudentAcademicRecordRefId($studentAcademicRecordRefId) {
		$this->studentAcademicRecordRefId = $this->validateStudentAcademicRecordRefId($studentAcademicRecordRefId);
	}

	protected function validateStudentAcademicRecordRefId($studentAcademicRecordRefId) {
	
		return $studentAcademicRecordRefId;
	}

	public function getStudentSpecialEducationRecordRefId($autoCreate = TRUE) {
		if ($this->studentSpecialEducationRecordRefId===NULL && $autoCreate && ! isset($this->_overrides['studentSpecialEducationRecordRefId']) ) {
			$this->studentSpecialEducationRecordRefId = $this->createStudentSpecialEducationRecordRefId();
		}
		return $this->studentSpecialEducationRecordRefId;
	}
	
	protected function createStudentSpecialEducationRecordRefId() {
		return NULL;
	}

	public function setStudentSpecialEducationRecordRefId($studentSpecialEducationRecordRefId) {
		$this->studentSpecialEducationRecordRefId = $this->validateStudentSpecialEducationRecordRefId($studentSpecialEducationRecordRefId);
	}

	protected function validateStudentSpecialEducationRecordRefId($studentSpecialEducationRecordRefId) {
	
		return $studentSpecialEducationRecordRefId;
	}

	public function getOtherRecords($autoCreate = TRUE) {
		if ($this->otherRecords===NULL && $autoCreate && ! isset($this->_overrides['otherRecords']) ) {
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
		if ( $otherRecords === FALSE ) {
			$this->_overrides['otherRecords'] = TRUE;
			return NULL;
		}

		if ( ! $otherRecords instanceof \org\sifinfo\www\infrastructure\_2_x\OtherRecords  && ! is_null($otherRecords) ) {
			$otherRecords = new \org\sifinfo\www\infrastructure\_2_x\OtherRecords ($otherRecords);
		}

		unset ($this->_overrides['otherRecords']);
	
		return $otherRecords;
	}
} // end class Records
