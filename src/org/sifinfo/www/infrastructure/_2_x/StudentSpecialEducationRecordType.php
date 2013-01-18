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

	public function getReportingDate() {
		if ($this->reportingDate===NULL) {
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

	public function getLEAInfoData() {
		if ($this->lEAInfoData===NULL) {
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

	public function getSchoolInfoData() {
		if ($this->schoolInfoData===NULL) {
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

	public function getStudentParticipationData() {
		if ($this->studentParticipationData===NULL) {
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

	public function getStudentParticipationList() {
		if ($this->studentParticipationList===NULL) {
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
		if ( ! $studentParticipationList instanceof \org\sifinfo\www\infrastructure\_2_x\StudentParticipationList  && ! is_null($studentParticipationList) ) {
			$studentParticipationList = new \org\sifinfo\www\infrastructure\_2_x\StudentParticipationList ($studentParticipationList);
		}
	
		return $studentParticipationList;
	}

	public function getStudentPlacementList() {
		if ($this->studentPlacementList===NULL) {
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
		if ( ! $studentPlacementList instanceof \org\sifinfo\www\infrastructure\_2_x\StudentPlacementList  && ! is_null($studentPlacementList) ) {
			$studentPlacementList = new \org\sifinfo\www\infrastructure\_2_x\StudentPlacementList ($studentPlacementList);
		}
	
		return $studentPlacementList;
	}

	public function getSifMetadata() {
		if ($this->sifMetadata===NULL) {
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
		if ( ! $sifMetadata instanceof \org\sifinfo\www\infrastructure\_2_x\SIFMetadataType  && ! is_null($sifMetadata) ) {
			$sifMetadata = new \org\sifinfo\www\infrastructure\_2_x\SIFMetadataType ($sifMetadata);
		}
	
		return $sifMetadata;
	}

	public function getSifExtendedElements() {
		if ($this->sifExtendedElements===NULL) {
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
		if ( ! $sifExtendedElements instanceof \org\sifinfo\www\infrastructure\_2_x\SIFExtendedElementsType  && ! is_null($sifExtendedElements) ) {
			$sifExtendedElements = new \org\sifinfo\www\infrastructure\_2_x\SIFExtendedElementsType ($sifExtendedElements);
		}
	
		return $sifExtendedElements;
	}

	public function getRefId() {
		if ($this->refId===NULL) {
			$this->refId = $this->createRefId();
		}
		return $this->refId;
	}
	
	protected function createRefId() {
		return new \org\sifinfo\www\infrastructure\_2_x\RefIdType();
	}

	public function setRefId($refId) {
		$this->refId = $this->validateRefId($refId);
	}

	protected function validateRefId($refId) {
		if ( ! $refId instanceof \org\sifinfo\www\infrastructure\_2_x\RefIdType ) {
			$refId = new \org\sifinfo\www\infrastructure\_2_x\RefIdType ($refId);
		}
	
		return $refId;
	}

	public function getSifRefId() {
		if ($this->sifRefId===NULL) {
			$this->sifRefId = $this->createSifRefId();
		}
		return $this->sifRefId;
	}
	
	protected function createSifRefId() {
		return new \org\sifinfo\www\infrastructure\_2_x\RefIdType();
	}

	public function setSifRefId($sifRefId) {
		$this->sifRefId = $this->validateSifRefId($sifRefId);
	}

	protected function validateSifRefId($sifRefId) {
		if ( ! $sifRefId instanceof \org\sifinfo\www\infrastructure\_2_x\RefIdType ) {
			$sifRefId = new \org\sifinfo\www\infrastructure\_2_x\RefIdType ($sifRefId);
		}
	
		return $sifRefId;
	}

	public function getSifRefObject() {
		if ($this->sifRefObject===NULL) {
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
