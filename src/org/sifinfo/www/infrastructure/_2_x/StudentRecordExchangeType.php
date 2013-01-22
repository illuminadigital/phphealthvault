<?php
namespace org\sifinfo\www\infrastructure\_2_x;



/**
 * @XmlNamespaces ({
 *	@XmlNamespace(url="http://www.sifinfo.org/infrastructure/2.x", prefix="")
 * })
 * @XmlEntity	(xml="StudentRecordExchangeType")
 */
class StudentRecordExchangeType {
	/**
	 * This object contains references to the set of records associated with and available for a given student.
	 */

	/**
	 * @XmlElement	(type="\org\sifinfo\www\infrastructure\_2_x\StateProvinceIdType", name="StateProvinceId")
	 */
	protected $stateProvinceId;

	/**
	 * @XmlElement	(type="\org\sifinfo\www\infrastructure\_2_x\LocalIdType", name="LocalId")
	 */
	protected $localId;

	/**
	 * @XmlElement	(type="\org\sifinfo\www\infrastructure\_2_x\IdRefType", name="StudentPersonalRefId")
	 */
	protected $studentPersonalRefId;

	/**
	 * @XmlElement	(type="\org\sifinfo\www\infrastructure\_2_x\Records", name="Records")
	 */
	protected $records;

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

	public function __construct($stateProvinceId = NULL, $localId = NULL, $studentPersonalRefId = NULL, $records = NULL, $sifMetadata = NULL, $sifExtendedElements = NULL, $refId = NULL) {
		$this->stateProvinceId = ($stateProvinceId===NULL) ? NULL : $this->validateStateProvinceId($stateProvinceId);
		$this->localId = ($localId===NULL) ? NULL : $this->validateLocalId($localId);
		$this->studentPersonalRefId = ($studentPersonalRefId===NULL) ? NULL : $this->validateStudentPersonalRefId($studentPersonalRefId);
		$this->records = ($records===NULL) ? NULL : $this->validateRecords($records);
		$this->sifMetadata = ($sifMetadata===NULL) ? NULL : $this->validateSifMetadata($sifMetadata);
		$this->sifExtendedElements = ($sifExtendedElements===NULL) ? NULL : $this->validateSifExtendedElements($sifExtendedElements);
		$this->refId = ($refId===NULL) ? NULL : $this->validateRefId($refId);
	}

	public function getStateProvinceId() {
		if ($this->stateProvinceId===NULL) {
			$this->stateProvinceId = $this->createStateProvinceId();
		}
		return $this->stateProvinceId;
	}
	
	protected function createStateProvinceId() {
		return NULL;
	}

	public function setStateProvinceId($stateProvinceId) {
		$this->stateProvinceId = $this->validateStateProvinceId($stateProvinceId);
	}

	protected function validateStateProvinceId($stateProvinceId) {
	
		return $stateProvinceId;
	}

	public function getLocalId() {
		if ($this->localId===NULL) {
			$this->localId = $this->createLocalId();
		}
		return $this->localId;
	}
	
	protected function createLocalId() {
		return NULL;
	}

	public function setLocalId($localId) {
		$this->localId = $this->validateLocalId($localId);
	}

	protected function validateLocalId($localId) {
	
		return $localId;
	}

	public function getStudentPersonalRefId() {
		if ($this->studentPersonalRefId===NULL) {
			$this->studentPersonalRefId = $this->createStudentPersonalRefId();
		}
		return $this->studentPersonalRefId;
	}
	
	protected function createStudentPersonalRefId() {
		return NULL;
	}

	public function setStudentPersonalRefId($studentPersonalRefId) {
		$this->studentPersonalRefId = $this->validateStudentPersonalRefId($studentPersonalRefId);
	}

	protected function validateStudentPersonalRefId($studentPersonalRefId) {
	
		return $studentPersonalRefId;
	}

	public function getRecords() {
		if ($this->records===NULL) {
			$this->records = $this->createRecords();
		}
		return $this->records;
	}
	
	protected function createRecords() {
		return new \org\sifinfo\www\infrastructure\_2_x\Records();
	}

	public function setRecords($records) {
		$this->records = $this->validateRecords($records);
	}

	protected function validateRecords($records) {
		if ( ! $records instanceof \org\sifinfo\www\infrastructure\_2_x\Records ) {
			$records = new \org\sifinfo\www\infrastructure\_2_x\Records ($records);
		}
	
		return $records;
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
		return NULL;
	}

	public function setRefId($refId) {
		$this->refId = $this->validateRefId($refId);
	}

	protected function validateRefId($refId) {
	
		return $refId;
	}
} // end class StudentRecordExchangeType
