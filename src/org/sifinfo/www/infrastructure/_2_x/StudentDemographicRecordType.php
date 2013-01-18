<?php
namespace org\sifinfo\www\infrastructure\_2_x;



/**
 * @XmlNamespaces ({
 *	@XmlNamespace(url="http://www.sifinfo.org/infrastructure/2.x", prefix="")
 * })
 * @XmlEntity	(xml="StudentDemographicRecordType")
 */
class StudentDemographicRecordType {
	/**
	 * Conveys a student's demographic data for student record exchange and transcript purposes.
	 */

	/**
	 * @XmlText	(type="string", name="ReportingDate")
	 */
	protected $reportingDate;

	/**
	 * @XmlElement	(type="\org\sifinfo\www\infrastructure\_2_x\StudentPersonalData", name="StudentPersonalData")
	 */
	protected $studentPersonalData;

	/**
	 * @XmlElement	(type="\org\sifinfo\www\infrastructure\_2_x\StudentContactsSummary", name="StudentContactsSummary")
	 */
	protected $studentContactsSummary;

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

	public function __construct($reportingDate = NULL, $studentPersonalData = NULL, $studentContactsSummary = NULL, $sifMetadata = NULL, $sifExtendedElements = NULL, $refId = NULL, $sifRefId = NULL, $sifRefObject = NULL) {
		$this->reportingDate = ($reportingDate===NULL) ? NULL : $this->validateReportingDate($reportingDate);
		$this->studentPersonalData = ($studentPersonalData===NULL) ? NULL : $this->validateStudentPersonalData($studentPersonalData);
		$this->studentContactsSummary = ($studentContactsSummary===NULL) ? NULL : $this->validateStudentContactsSummary($studentContactsSummary);
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

	public function getStudentPersonalData() {
		if ($this->studentPersonalData===NULL) {
			$this->studentPersonalData = $this->createStudentPersonalData();
		}
		return $this->studentPersonalData;
	}
	
	protected function createStudentPersonalData() {
		return new \org\sifinfo\www\infrastructure\_2_x\StudentPersonalData();
	}

	public function setStudentPersonalData($studentPersonalData) {
		$this->studentPersonalData = $this->validateStudentPersonalData($studentPersonalData);
	}

	protected function validateStudentPersonalData($studentPersonalData) {
		if ( ! $studentPersonalData instanceof \org\sifinfo\www\infrastructure\_2_x\StudentPersonalData ) {
			$studentPersonalData = new \org\sifinfo\www\infrastructure\_2_x\StudentPersonalData ($studentPersonalData);
		}
	
		return $studentPersonalData;
	}

	public function getStudentContactsSummary() {
		if ($this->studentContactsSummary===NULL) {
			$this->studentContactsSummary = $this->createStudentContactsSummary();
		}
		return $this->studentContactsSummary;
	}
	
	protected function createStudentContactsSummary() {
		return new \org\sifinfo\www\infrastructure\_2_x\StudentContactsSummary();
	}

	public function setStudentContactsSummary($studentContactsSummary) {
		$this->studentContactsSummary = $this->validateStudentContactsSummary($studentContactsSummary);
	}

	protected function validateStudentContactsSummary($studentContactsSummary) {
		if ( ! $studentContactsSummary instanceof \org\sifinfo\www\infrastructure\_2_x\StudentContactsSummary  && ! is_null($studentContactsSummary) ) {
			$studentContactsSummary = new \org\sifinfo\www\infrastructure\_2_x\StudentContactsSummary ($studentContactsSummary);
		}
	
		return $studentContactsSummary;
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
} // end class StudentDemographicRecordType
