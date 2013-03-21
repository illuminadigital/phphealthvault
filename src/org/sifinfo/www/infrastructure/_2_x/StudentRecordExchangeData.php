<?php
namespace org\sifinfo\www\infrastructure\_2_x;



/**
 * @XmlNamespaces ({
 *	@XmlNamespace(url="http://www.sifinfo.org/infrastructure/2.x", prefix="")
 * })
 * @XmlEntity	(xml="StudentRecordExchangeData")
 */
class StudentRecordExchangeData {
	/**
	 */

	/**
	 * List of manually overridden properties that should not be re-generated automatically
	 * @var array
	 */
	protected $_overrides = array();


	/**
	 * @XmlElement	(type="\org\sifinfo\www\infrastructure\_2_x\StudentRecordExchangeType", name="StudentRecordExchange")
	 */
	protected $studentRecordExchange;

	/**
	 * @XmlElement	(type="\org\sifinfo\www\infrastructure\_2_x\StudentDemographicRecordType", name="StudentDemographicRecord")
	 */
	protected $studentDemographicRecord;

	/**
	 * @XmlElement	(type="\org\sifinfo\www\infrastructure\_2_x\StudentAcademicRecordType", name="StudentAcademicRecord")
	 */
	protected $studentAcademicRecord;

	/**
	 * @XmlElement	(type="\org\sifinfo\www\infrastructure\_2_x\StudentSpecialEducationRecordType", name="StudentSpecialEducationRecord")
	 */
	protected $studentSpecialEducationRecord;

	/**
	 * @XmlElement	(type="\org\sifinfo\www\infrastructure\_2_x\StudentRecordPackageType", name="StudentRecordPackage")
	 */
	protected $studentRecordPackage;

	public function __construct($studentRecordExchange = NULL, $studentDemographicRecord = NULL, $studentAcademicRecord = NULL, $studentSpecialEducationRecord = NULL, $studentRecordPackage = NULL) {
		$this->studentRecordExchange = ($studentRecordExchange===NULL) ? NULL : $this->validateStudentRecordExchange($studentRecordExchange);
		$this->studentDemographicRecord = ($studentDemographicRecord===NULL) ? NULL : $this->validateStudentDemographicRecord($studentDemographicRecord);
		$this->studentAcademicRecord = ($studentAcademicRecord===NULL) ? NULL : $this->validateStudentAcademicRecord($studentAcademicRecord);
		$this->studentSpecialEducationRecord = ($studentSpecialEducationRecord===NULL) ? NULL : $this->validateStudentSpecialEducationRecord($studentSpecialEducationRecord);
		$this->studentRecordPackage = ($studentRecordPackage===NULL) ? NULL : $this->validateStudentRecordPackage($studentRecordPackage);
	}

	public function getStudentRecordExchange($autoCreate = TRUE) {
		if ($this->studentRecordExchange===NULL && $autoCreate && ! isset($this->_overrides['studentRecordExchange']) ) {
			$this->studentRecordExchange = $this->createStudentRecordExchange();
		}
		return $this->studentRecordExchange;
	}
	
	protected function createStudentRecordExchange() {
		return new \org\sifinfo\www\infrastructure\_2_x\StudentRecordExchangeType();
	}

	public function setStudentRecordExchange($studentRecordExchange) {
		$this->studentRecordExchange = $this->validateStudentRecordExchange($studentRecordExchange);
	}

	protected function validateStudentRecordExchange($studentRecordExchange) {
		if ( $studentRecordExchange === FALSE ) {
			$this->_overrides['studentRecordExchange'] = TRUE;
			return NULL;
		}

		if ( ! $studentRecordExchange instanceof \org\sifinfo\www\infrastructure\_2_x\StudentRecordExchangeType  && ! is_null($studentRecordExchange) ) {
			$studentRecordExchange = new \org\sifinfo\www\infrastructure\_2_x\StudentRecordExchangeType ($studentRecordExchange);
		}

		unset ($this->_overrides['studentRecordExchange']);
	
		return $studentRecordExchange;
	}

	public function getStudentDemographicRecord($autoCreate = TRUE) {
		if ($this->studentDemographicRecord===NULL && $autoCreate && ! isset($this->_overrides['studentDemographicRecord']) ) {
			$this->studentDemographicRecord = $this->createStudentDemographicRecord();
		}
		return $this->studentDemographicRecord;
	}
	
	protected function createStudentDemographicRecord() {
		return new \org\sifinfo\www\infrastructure\_2_x\StudentDemographicRecordType();
	}

	public function setStudentDemographicRecord($studentDemographicRecord) {
		$this->studentDemographicRecord = $this->validateStudentDemographicRecord($studentDemographicRecord);
	}

	protected function validateStudentDemographicRecord($studentDemographicRecord) {
		if ( $studentDemographicRecord === FALSE ) {
			$this->_overrides['studentDemographicRecord'] = TRUE;
			return NULL;
		}

		if ( ! $studentDemographicRecord instanceof \org\sifinfo\www\infrastructure\_2_x\StudentDemographicRecordType  && ! is_null($studentDemographicRecord) ) {
			$studentDemographicRecord = new \org\sifinfo\www\infrastructure\_2_x\StudentDemographicRecordType ($studentDemographicRecord);
		}

		unset ($this->_overrides['studentDemographicRecord']);
	
		return $studentDemographicRecord;
	}

	public function getStudentAcademicRecord($autoCreate = TRUE) {
		if ($this->studentAcademicRecord===NULL && $autoCreate && ! isset($this->_overrides['studentAcademicRecord']) ) {
			$this->studentAcademicRecord = $this->createStudentAcademicRecord();
		}
		return $this->studentAcademicRecord;
	}
	
	protected function createStudentAcademicRecord() {
		return new \org\sifinfo\www\infrastructure\_2_x\StudentAcademicRecordType();
	}

	public function setStudentAcademicRecord($studentAcademicRecord) {
		$this->studentAcademicRecord = $this->validateStudentAcademicRecord($studentAcademicRecord);
	}

	protected function validateStudentAcademicRecord($studentAcademicRecord) {
		if ( $studentAcademicRecord === FALSE ) {
			$this->_overrides['studentAcademicRecord'] = TRUE;
			return NULL;
		}

		if ( ! $studentAcademicRecord instanceof \org\sifinfo\www\infrastructure\_2_x\StudentAcademicRecordType  && ! is_null($studentAcademicRecord) ) {
			$studentAcademicRecord = new \org\sifinfo\www\infrastructure\_2_x\StudentAcademicRecordType ($studentAcademicRecord);
		}

		unset ($this->_overrides['studentAcademicRecord']);
	
		return $studentAcademicRecord;
	}

	public function getStudentSpecialEducationRecord($autoCreate = TRUE) {
		if ($this->studentSpecialEducationRecord===NULL && $autoCreate && ! isset($this->_overrides['studentSpecialEducationRecord']) ) {
			$this->studentSpecialEducationRecord = $this->createStudentSpecialEducationRecord();
		}
		return $this->studentSpecialEducationRecord;
	}
	
	protected function createStudentSpecialEducationRecord() {
		return new \org\sifinfo\www\infrastructure\_2_x\StudentSpecialEducationRecordType();
	}

	public function setStudentSpecialEducationRecord($studentSpecialEducationRecord) {
		$this->studentSpecialEducationRecord = $this->validateStudentSpecialEducationRecord($studentSpecialEducationRecord);
	}

	protected function validateStudentSpecialEducationRecord($studentSpecialEducationRecord) {
		if ( $studentSpecialEducationRecord === FALSE ) {
			$this->_overrides['studentSpecialEducationRecord'] = TRUE;
			return NULL;
		}

		if ( ! $studentSpecialEducationRecord instanceof \org\sifinfo\www\infrastructure\_2_x\StudentSpecialEducationRecordType  && ! is_null($studentSpecialEducationRecord) ) {
			$studentSpecialEducationRecord = new \org\sifinfo\www\infrastructure\_2_x\StudentSpecialEducationRecordType ($studentSpecialEducationRecord);
		}

		unset ($this->_overrides['studentSpecialEducationRecord']);
	
		return $studentSpecialEducationRecord;
	}

	public function getStudentRecordPackage($autoCreate = TRUE) {
		if ($this->studentRecordPackage===NULL && $autoCreate && ! isset($this->_overrides['studentRecordPackage']) ) {
			$this->studentRecordPackage = $this->createStudentRecordPackage();
		}
		return $this->studentRecordPackage;
	}
	
	protected function createStudentRecordPackage() {
		return new \org\sifinfo\www\infrastructure\_2_x\StudentRecordPackageType();
	}

	public function setStudentRecordPackage($studentRecordPackage) {
		$this->studentRecordPackage = $this->validateStudentRecordPackage($studentRecordPackage);
	}

	protected function validateStudentRecordPackage($studentRecordPackage) {
		if ( $studentRecordPackage === FALSE ) {
			$this->_overrides['studentRecordPackage'] = TRUE;
			return NULL;
		}

		if ( ! $studentRecordPackage instanceof \org\sifinfo\www\infrastructure\_2_x\StudentRecordPackageType  && ! is_null($studentRecordPackage) ) {
			$studentRecordPackage = new \org\sifinfo\www\infrastructure\_2_x\StudentRecordPackageType ($studentRecordPackage);
		}

		unset ($this->_overrides['studentRecordPackage']);
	
		return $studentRecordPackage;
	}
} // end class StudentRecordExchangeData
