<?php
namespace org\sifinfo\www\infrastructure\_2_x;



/**
 * @XmlNamespaces ({
 *	@XmlNamespace(url="http://www.sifinfo.org/infrastructure/2.x", prefix="")
 * })
 * @XmlEntity	(xml="StudentSpecialEducationRecordType")
 */
class StudentSpecialEducationRecordType {
	/**
	 * Conveys a student's special education program information for student record exchange.
	 */

	/**
	 * List of manually overridden properties that should not be re-generated automatically
	 * @var array
	 */
	protected $_overrides = array();


	/**
	 * @XmlText	(type="string", name="ReportingDate")
	 */
	protected $reportingDate;

	/**
	 * @XmlElement	(type="\org\sifinfo\www\infrastructure\_2_x\LEAInfoData", name="LEAInfoData")
	 */
	protected $lEAInfoData;

	/**
	 * @XmlElement	(type="\org\sifinfo\www\infrastructure\_2_x\SchoolInfoData", name="SchoolInfoData")
	 */
	protected $schoolInfoData;

	/**
	 * @XmlElement	(type="\org\sifinfo\www\infrastructure\_2_x\StudentParticipationData", name="StudentParticipationData")
	 */
	protected $studentParticipationData;

	/**
	 * @XmlElement	(type="\org\sifinfo\www\infrastructure\_2_x\StudentParticipationList", name="StudentParticipationList")
	 */
	protected $studentParticipationList;

	/**
	 * @XmlElement	(type="\org\sifinfo\www\infrastructure\_2_x\StudentPlacementList", name="StudentPlacementList")
	 */
	protected $studentPlacementList;

	/**
	 * @XmlElement	(type="\org\sifinfo\www\infrastructure\_2_x\SIFMetadataType", name="SIF_Metadata")
	 */
	protected $sifMetadata;

	/**
	 * @XmlElement	(type="\org\sifinfo\www\infrastructure\_2_x\SIFExtendedElementsType", name="SIF_ExtendedElements")
	 */
	protected $sifExtendedElements;

	/**
	 * @XmlAttribute	(type="string", name="RefId")
	 */
	protected $refId;

	/**
	 * @XmlAttribute	(type="string", name="SIF_RefId")
	 */
	protected $sifRefId;

	/**
	 * @XmlAttribute	(type="string", name="SIF_RefObject")
	 */
	protected $sifRefObject;

	public function __construct($reportingDate = NULL, $lEAInfoData = NULL, $schoolInfoData = NULL, $studentParticipationData = NULL, $studentParticipationList = NULL, $studentPlacementList = NULL, $sifMetadata = NULL, $sifExtendedElements = NULL, $refId = NULL, $sifRefId = NULL, $sifRefObject = NULL) {
		$this->reportingDate = ($reportingDate===NULL) ? NULL : $this->validateReportingDate($reportingDate);
		$this->lEAInfoData = ($lEAInfoData===NULL) ? NULL : $this->validateLEAInfoData($lEAInfoData);
		$this->schoolInfoData = ($schoolInfoData===NULL) ? NULL : $this->validateSchoolInfoData($schoolInfoData);
		$this->studentParticipationData = ($studentParticipationData===NULL) ? NULL : $this->validateStudentParticipationData($studentParticipationData);
		$this->studentParticipationList = ($studentParticipationList===NULL) ? NULL : $this->validateStudentParticipationList($studentParticipationList);
		$this->studentPlacementList = ($studentPlacementList===NULL) ? NULL : $this->validateStudentPlacementList($studentPlacementList);
		$this->sifMetadata = ($sifMetadata===NULL) ? NULL : $this->validateSifMetadata($sifMetadata);
		$this->sifExtendedElements = ($sifExtendedElements===NULL) ? NULL : $this->validateSifExtendedElements($sifExtendedElements);
		$this->refId = ($refId===NULL) ? NULL : $this->validateRefId($refId);
		$this->sifRefId = ($sifRefId===NULL) ? NULL : $this->validateSifRefId($sifRefId);
		$this->sifRefObject = ($sifRefObject===NULL) ? NULL : $this->validateSifRefObject($sifRefObject);
	}

	public function getReportingDate($autoCreate = TRUE) {
		if ($this->reportingDate===NULL && $autoCreate && ! isset($this->_overrides['reportingDate']) ) {
			$this->reportingDate = $this->createReportingDate();
		}
		return $this->reportingDate;
	}
	
	protected function createReportingDate() {
		return NULL;
	}

	public function setReportingDate($reportingDate) {
		$this->reportingDate = $this->validateReportingDate($reportingDate);
	}

	protected function validateReportingDate($reportingDate) {
		if (!is_string($reportingDate)) {
			throw new \Exception(sprintf('Supplied %s value was not %s', 'reportingDate', 'string'));
		}
	
		return $reportingDate;
	}

	public function getLEAInfoData($autoCreate = TRUE) {
		if ($this->lEAInfoData===NULL && $autoCreate && ! isset($this->_overrides['lEAInfoData']) ) {
			$this->lEAInfoData = $this->createLEAInfoData();
		}
		return $this->lEAInfoData;
	}
	
	protected function createLEAInfoData() {
		return new \org\sifinfo\www\infrastructure\_2_x\LEAInfoData();
	}

	public function setLEAInfoData($lEAInfoData) {
		$this->lEAInfoData = $this->validateLEAInfoData($lEAInfoData);
	}

	protected function validateLEAInfoData($lEAInfoData) {
		if ( ! $lEAInfoData instanceof \org\sifinfo\www\infrastructure\_2_x\LEAInfoData ) {
			$lEAInfoData = new \org\sifinfo\www\infrastructure\_2_x\LEAInfoData ($lEAInfoData);
		}
	
		return $lEAInfoData;
	}

	public function getSchoolInfoData($autoCreate = TRUE) {
		if ($this->schoolInfoData===NULL && $autoCreate && ! isset($this->_overrides['schoolInfoData']) ) {
			$this->schoolInfoData = $this->createSchoolInfoData();
		}
		return $this->schoolInfoData;
	}
	
	protected function createSchoolInfoData() {
		return new \org\sifinfo\www\infrastructure\_2_x\SchoolInfoData();
	}

	public function setSchoolInfoData($schoolInfoData) {
		$this->schoolInfoData = $this->validateSchoolInfoData($schoolInfoData);
	}

	protected function validateSchoolInfoData($schoolInfoData) {
		if ( ! $schoolInfoData instanceof \org\sifinfo\www\infrastructure\_2_x\SchoolInfoData ) {
			$schoolInfoData = new \org\sifinfo\www\infrastructure\_2_x\SchoolInfoData ($schoolInfoData);
		}
	
		return $schoolInfoData;
	}

	public function getStudentParticipationData($autoCreate = TRUE) {
		if ($this->studentParticipationData===NULL && $autoCreate && ! isset($this->_overrides['studentParticipationData']) ) {
			$this->studentParticipationData = $this->createStudentParticipationData();
		}
		return $this->studentParticipationData;
	}
	
	protected function createStudentParticipationData() {
		return new \org\sifinfo\www\infrastructure\_2_x\StudentParticipationData();
	}

	public function setStudentParticipationData($studentParticipationData) {
		$this->studentParticipationData = $this->validateStudentParticipationData($studentParticipationData);
	}

	protected function validateStudentParticipationData($studentParticipationData) {
		if ( ! $studentParticipationData instanceof \org\sifinfo\www\infrastructure\_2_x\StudentParticipationData ) {
			$studentParticipationData = new \org\sifinfo\www\infrastructure\_2_x\StudentParticipationData ($studentParticipationData);
		}
	
		return $studentParticipationData;
	}

	public function getStudentParticipationList($autoCreate = TRUE) {
		if ($this->studentParticipationList===NULL && $autoCreate && ! isset($this->_overrides['studentParticipationList']) ) {
			$this->studentParticipationList = $this->createStudentParticipationList();
		}
		return $this->studentParticipationList;
	}
	
	protected function createStudentParticipationList() {
		return new \org\sifinfo\www\infrastructure\_2_x\StudentParticipationList();
	}

	public function setStudentParticipationList($studentParticipationList) {
		$this->studentParticipationList = $this->validateStudentParticipationList($studentParticipationList);
	}

	protected function validateStudentParticipationList($studentParticipationList) {
		if ( $studentParticipationList === FALSE ) {
			$this->_overrides['studentParticipationList'] = TRUE;
			return NULL;
		}

		if ( ! $studentParticipationList instanceof \org\sifinfo\www\infrastructure\_2_x\StudentParticipationList  && ! is_null($studentParticipationList) ) {
			$studentParticipationList = new \org\sifinfo\www\infrastructure\_2_x\StudentParticipationList ($studentParticipationList);
		}

		unset ($this->_overrides['studentParticipationList']);
	
		return $studentParticipationList;
	}

	public function getStudentPlacementList($autoCreate = TRUE) {
		if ($this->studentPlacementList===NULL && $autoCreate && ! isset($this->_overrides['studentPlacementList']) ) {
			$this->studentPlacementList = $this->createStudentPlacementList();
		}
		return $this->studentPlacementList;
	}
	
	protected function createStudentPlacementList() {
		return new \org\sifinfo\www\infrastructure\_2_x\StudentPlacementList();
	}

	public function setStudentPlacementList($studentPlacementList) {
		$this->studentPlacementList = $this->validateStudentPlacementList($studentPlacementList);
	}

	protected function validateStudentPlacementList($studentPlacementList) {
		if ( $studentPlacementList === FALSE ) {
			$this->_overrides['studentPlacementList'] = TRUE;
			return NULL;
		}

		if ( ! $studentPlacementList instanceof \org\sifinfo\www\infrastructure\_2_x\StudentPlacementList  && ! is_null($studentPlacementList) ) {
			$studentPlacementList = new \org\sifinfo\www\infrastructure\_2_x\StudentPlacementList ($studentPlacementList);
		}

		unset ($this->_overrides['studentPlacementList']);
	
		return $studentPlacementList;
	}

	public function getSifMetadata($autoCreate = TRUE) {
		if ($this->sifMetadata===NULL && $autoCreate && ! isset($this->_overrides['sifMetadata']) ) {
			$this->sifMetadata = $this->createSifMetadata();
		}
		return $this->sifMetadata;
	}
	
	protected function createSifMetadata() {
		return new \org\sifinfo\www\infrastructure\_2_x\SIFMetadataType();
	}

	public function setSifMetadata($sifMetadata) {
		$this->sifMetadata = $this->validateSifMetadata($sifMetadata);
	}

	protected function validateSifMetadata($sifMetadata) {
		if ( $sifMetadata === FALSE ) {
			$this->_overrides['sifMetadata'] = TRUE;
			return NULL;
		}

		if ( ! $sifMetadata instanceof \org\sifinfo\www\infrastructure\_2_x\SIFMetadataType  && ! is_null($sifMetadata) ) {
			$sifMetadata = new \org\sifinfo\www\infrastructure\_2_x\SIFMetadataType ($sifMetadata);
		}

		unset ($this->_overrides['sifMetadata']);
	
		return $sifMetadata;
	}

	public function getSifExtendedElements($autoCreate = TRUE) {
		if ($this->sifExtendedElements===NULL && $autoCreate && ! isset($this->_overrides['sifExtendedElements']) ) {
			$this->sifExtendedElements = $this->createSifExtendedElements();
		}
		return $this->sifExtendedElements;
	}
	
	protected function createSifExtendedElements() {
		return new \org\sifinfo\www\infrastructure\_2_x\SIFExtendedElementsType();
	}

	public function setSifExtendedElements($sifExtendedElements) {
		$this->sifExtendedElements = $this->validateSifExtendedElements($sifExtendedElements);
	}

	protected function validateSifExtendedElements($sifExtendedElements) {
		if ( $sifExtendedElements === FALSE ) {
			$this->_overrides['sifExtendedElements'] = TRUE;
			return NULL;
		}

		if ( ! $sifExtendedElements instanceof \org\sifinfo\www\infrastructure\_2_x\SIFExtendedElementsType  && ! is_null($sifExtendedElements) ) {
			$sifExtendedElements = new \org\sifinfo\www\infrastructure\_2_x\SIFExtendedElementsType ($sifExtendedElements);
		}

		unset ($this->_overrides['sifExtendedElements']);
	
		return $sifExtendedElements;
	}

	public function getRefId($autoCreate = TRUE) {
		if ($this->refId===NULL && $autoCreate && ! isset($this->_overrides['refId']) ) {
			$this->refId = $this->createRefId();
		}
		return $this->refId;
	}
	
	protected function createRefId() {
		return NULL;
	}

	public function setRefId($refId) {
		$this->refId = $this->validateRefId($refId);
	}

	protected function validateRefId($refId) {
	
		return $refId;
	}

	public function getSifRefId($autoCreate = TRUE) {
		if ($this->sifRefId===NULL && $autoCreate && ! isset($this->_overrides['sifRefId']) ) {
			$this->sifRefId = $this->createSifRefId();
		}
		return $this->sifRefId;
	}
	
	protected function createSifRefId() {
		return NULL;
	}

	public function setSifRefId($sifRefId) {
		$this->sifRefId = $this->validateSifRefId($sifRefId);
	}

	protected function validateSifRefId($sifRefId) {
	
		return $sifRefId;
	}

	public function getSifRefObject($autoCreate = TRUE) {
		if ($this->sifRefObject===NULL && $autoCreate && ! isset($this->_overrides['sifRefObject']) ) {
			$this->sifRefObject = $this->createSifRefObject();
		}
		return $this->sifRefObject;
	}
	
	protected function createSifRefObject() {
		return NULL;
	}

	public function setSifRefObject($sifRefObject) {
		$this->sifRefObject = $this->validateSifRefObject($sifRefObject);
	}

	protected function validateSifRefObject($sifRefObject) {
		if (!is_string($sifRefObject)) {
			throw new \Exception(sprintf('Supplied %s value was not %s', 'sifRefObject', 'string'));
		}
	
		return $sifRefObject;
	}
} // end class StudentSpecialEducationRecordType
