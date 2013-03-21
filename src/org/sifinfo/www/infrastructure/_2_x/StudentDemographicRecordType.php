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
	 * List of manually overridden properties that should not be re-generated automatically
	 * @var array
	 */
	protected $_overrides = array();


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

	public function getStudentPersonalData($autoCreate = TRUE) {
		if ($this->studentPersonalData===NULL && $autoCreate && ! isset($this->_overrides['studentPersonalData']) ) {
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

	public function getStudentContactsSummary($autoCreate = TRUE) {
		if ($this->studentContactsSummary===NULL && $autoCreate && ! isset($this->_overrides['studentContactsSummary']) ) {
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
		if ( $studentContactsSummary === FALSE ) {
			$this->_overrides['studentContactsSummary'] = TRUE;
			return NULL;
		}

		if ( ! $studentContactsSummary instanceof \org\sifinfo\www\infrastructure\_2_x\StudentContactsSummary  && ! is_null($studentContactsSummary) ) {
			$studentContactsSummary = new \org\sifinfo\www\infrastructure\_2_x\StudentContactsSummary ($studentContactsSummary);
		}

		unset ($this->_overrides['studentContactsSummary']);
	
		return $studentContactsSummary;
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
} // end class StudentDemographicRecordType
