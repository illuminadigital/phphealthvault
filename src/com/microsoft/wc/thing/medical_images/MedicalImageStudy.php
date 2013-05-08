<?php
namespace com\microsoft\wc\thing\medical_images;



/**
 * @XmlNamespaces ({
 *	@XmlNamespace(url="urn:com.microsoft.wc.thing.medical-images", prefix="")
 * })
 * @XmlEntity	(xml="medical-image-study")
 */
class MedicalImageStudy extends \com\microsoft\wc\thing\AnyMixed {
	/**
	 * A collection of medical images.
	 * DICOM data is stored in the named blob portion of the data type, and it is recommended that normalDICOM conventions are used for naming.An application may store XDS-i manifest information in XML format in the xds-i element.
	 */

	const ID = 'c75651c8-548e-449f-8942-9e6379b0b88a';
	const NAME = 'Medical Image Study';

	/**
	 * List of manually overridden properties that should not be re-generated automatically
	 * @var array
	 */
	protected $_overrides = array();


	/**
	 * @XmlElement	(type="\com\microsoft\wc\dates\DateTime", name="when")
	 */
	protected $when;

	/**
	 * @XmlElement	(type="\com\microsoft\wc\types\Stringnznw", name="patient-name")
	 */
	protected $patientName;

	/**
	 * @XmlElement	(type="\com\microsoft\wc\types\Stringnznw", name="description")
	 */
	protected $description;

	/**
	 * @XmlElement	(type="\com\microsoft\wc\thing\medical_images\MedicalImageStudySeries", collection="true", name="series")
	 */
	protected $series;

	/**
	 * @XmlElement	(type="\com\microsoft\wc\types\CodableValue", name="reason")
	 */
	protected $reason;

	/**
	 * @XmlElement	(type="\com\microsoft\wc\types\Stringnznw", name="preview-blob-name")
	 */
	protected $previewBlobName;

	/**
	 * @XmlElement	(type="\com\microsoft\wc\thing\medical_images\MedicalImageStudySeriesImage", collection="true", name="key-images")
	 */
	protected $keyImages;

	/**
	 * @XmlElement	(type="\com\microsoft\wc\types\Stringnznw", name="study-instance-uid")
	 */
	protected $studyInstanceUid;

	public function __construct($when = NULL, $patientName = NULL, $description = NULL, $series = NULL, $reason = NULL, $previewBlobName = NULL, $keyImages = NULL, $studyInstanceUid = NULL) {
		$this->when = ($when===NULL) ? NULL : $this->validateWhen($when);
		$this->patientName = ($patientName===NULL) ? NULL : $this->validatePatientName($patientName);
		$this->description = ($description===NULL) ? NULL : $this->validateDescription($description);
		$this->series = ($series===NULL) ? NULL : $this->validateSeries($series);
		$this->reason = ($reason===NULL) ? NULL : $this->validateReason($reason);
		$this->previewBlobName = ($previewBlobName===NULL) ? NULL : $this->validatePreviewBlobName($previewBlobName);
		$this->keyImages = ($keyImages===NULL) ? NULL : $this->validateKeyImages($keyImages);
		$this->studyInstanceUid = ($studyInstanceUid===NULL) ? NULL : $this->validateStudyInstanceUid($studyInstanceUid);
	}

	public function getWhen($autoCreate = TRUE) {
		if ($this->when===NULL && $autoCreate && ! isset($this->_overrides['when']) ) {
			$this->when = $this->createWhen();
		}
		return $this->when;
	}
	
	protected function createWhen() {
		return new \com\microsoft\wc\dates\DateTime();
	}

	public function setWhen($when) {
		$this->when = $this->validateWhen($when);
	}

	protected function validateWhen($when) {
		if ( ! $when instanceof \com\microsoft\wc\dates\DateTime ) {
			$when = new \com\microsoft\wc\dates\DateTime ($when);
		}
	
		return $when;
	}

	public function getPatientName($autoCreate = TRUE) {
		if ($this->patientName===NULL && $autoCreate && ! isset($this->_overrides['patientName']) ) {
			$this->patientName = $this->createPatientName();
		}
		return $this->patientName;
	}
	
	protected function createPatientName() {
		return new \com\microsoft\wc\types\Stringnznw();
	}

	public function setPatientName($patientName) {
		$this->patientName = $this->validatePatientName($patientName);
	}

	protected function validatePatientName($patientName) {
		if ( $patientName === FALSE ) {
			$this->_overrides['patientName'] = TRUE;
			return NULL;
		}

		if ( ! $patientName instanceof \com\microsoft\wc\types\Stringnznw  && ! is_null($patientName) ) {
			$patientName = new \com\microsoft\wc\types\Stringnznw ($patientName);
		}

		unset ($this->_overrides['patientName']);
	
		return $patientName;
	}

	public function getDescription($autoCreate = TRUE) {
		if ($this->description===NULL && $autoCreate && ! isset($this->_overrides['description']) ) {
			$this->description = $this->createDescription();
		}
		return $this->description;
	}
	
	protected function createDescription() {
		return new \com\microsoft\wc\types\Stringnznw();
	}

	public function setDescription($description) {
		$this->description = $this->validateDescription($description);
	}

	protected function validateDescription($description) {
		if ( $description === FALSE ) {
			$this->_overrides['description'] = TRUE;
			return NULL;
		}

		if ( ! $description instanceof \com\microsoft\wc\types\Stringnznw  && ! is_null($description) ) {
			$description = new \com\microsoft\wc\types\Stringnznw ($description);
		}

		unset ($this->_overrides['description']);
	
		return $description;
	}

	public function getSeries($autoCreate = TRUE) {
		if ($this->series===NULL && $autoCreate && ! isset($this->_overrides['series']) ) {
			$this->series = $this->createSeries();
		}
		return $this->series;
	}
	
	protected function createSeries() {
		return array();
	}

	public function setSeries($series) {
		$this->series = $this->validateSeries($series);
	}

	protected function validateSeries($series) {
		if ( ! is_array ($series) ) {
			$series = array($series);
		}
		$count = count($series);
		if ($count < 1) {
			throw new \Exception(sprintf('Supplied %s array has less than the required number (%d) of entries.', 'series', 1));
		}
		foreach ($series as $entry) {
			if (!($entry instanceof \com\microsoft\wc\thing\medical_images\MedicalImageStudySeries )) {
				throw new \Exception(sprintf('Supplied %s value was not %s', 'series', 'medical-image-study-series'));
			}
		}
	
		return $series;
	}

	public function addSeries($series) {
		$this->series[] = $series;
	}

	public function getReason($autoCreate = TRUE) {
		if ($this->reason===NULL && $autoCreate && ! isset($this->_overrides['reason']) ) {
			$this->reason = $this->createReason();
		}
		return $this->reason;
	}
	
	protected function createReason() {
		return new \com\microsoft\wc\types\CodableValue();
	}

	public function setReason($reason) {
		$this->reason = $this->validateReason($reason);
	}

	protected function validateReason($reason) {
		if ( $reason === FALSE ) {
			$this->_overrides['reason'] = TRUE;
			return NULL;
		}

		if ( ! $reason instanceof \com\microsoft\wc\types\CodableValue  && ! is_null($reason) ) {
			$reason = new \com\microsoft\wc\types\CodableValue ($reason);
		}

		unset ($this->_overrides['reason']);
	
		return $reason;
	}

	public function getPreviewBlobName($autoCreate = TRUE) {
		if ($this->previewBlobName===NULL && $autoCreate && ! isset($this->_overrides['previewBlobName']) ) {
			$this->previewBlobName = $this->createPreviewBlobName();
		}
		return $this->previewBlobName;
	}
	
	protected function createPreviewBlobName() {
		return new \com\microsoft\wc\types\Stringnznw();
	}

	public function setPreviewBlobName($previewBlobName) {
		$this->previewBlobName = $this->validatePreviewBlobName($previewBlobName);
	}

	protected function validatePreviewBlobName($previewBlobName) {
		if ( $previewBlobName === FALSE ) {
			$this->_overrides['previewBlobName'] = TRUE;
			return NULL;
		}

		if ( ! $previewBlobName instanceof \com\microsoft\wc\types\Stringnznw  && ! is_null($previewBlobName) ) {
			$previewBlobName = new \com\microsoft\wc\types\Stringnznw ($previewBlobName);
		}

		unset ($this->_overrides['previewBlobName']);
	
		return $previewBlobName;
	}

	public function getKeyImages($autoCreate = TRUE) {
		if ($this->keyImages===NULL && $autoCreate && ! isset($this->_overrides['keyImages']) ) {
			$this->keyImages = $this->createKeyImages();
		}
		return $this->keyImages;
	}
	
	protected function createKeyImages() {
		return array();
	}

	public function setKeyImages($keyImages) {
		$this->keyImages = $this->validateKeyImages($keyImages);
	}

	protected function validateKeyImages($keyImages) {
		if ( $keyImages === FALSE ) {
			$this->_overrides['keyImages'] = TRUE;
			return NULL;
		}

		if ( ! is_array ($keyImages) && ! is_null($keyImages) ) {
			$keyImages = array($keyImages);
		}

		unset ($this->_overrides['keyImages']);
		$count = count($keyImages);
		if ($count < 0) {
			throw new \Exception(sprintf('Supplied %s array has less than the required number (%d) of entries.', 'keyImages', 0));
		}
		if ( ! empty($keyImages) ) {
			foreach ($keyImages as $entry) {
				if (!($entry instanceof \com\microsoft\wc\thing\medical_images\MedicalImageStudySeriesImage )) {
					throw new \Exception(sprintf('Supplied %s value was not %s', 'keyImages', 'medical-image-study-series-image'));
				}
			}
		}
	
		return $keyImages;
	}

	public function addKeyImages($keyImages) {
		$this->keyImages[] = $keyImages;
	}

	public function getStudyInstanceUid($autoCreate = TRUE) {
		if ($this->studyInstanceUid===NULL && $autoCreate && ! isset($this->_overrides['studyInstanceUid']) ) {
			$this->studyInstanceUid = $this->createStudyInstanceUid();
		}
		return $this->studyInstanceUid;
	}
	
	protected function createStudyInstanceUid() {
		return new \com\microsoft\wc\types\Stringnznw();
	}

	public function setStudyInstanceUid($studyInstanceUid) {
		$this->studyInstanceUid = $this->validateStudyInstanceUid($studyInstanceUid);
	}

	protected function validateStudyInstanceUid($studyInstanceUid) {
		if ( $studyInstanceUid === FALSE ) {
			$this->_overrides['studyInstanceUid'] = TRUE;
			return NULL;
		}

		if ( ! $studyInstanceUid instanceof \com\microsoft\wc\types\Stringnznw  && ! is_null($studyInstanceUid) ) {
			$studyInstanceUid = new \com\microsoft\wc\types\Stringnznw ($studyInstanceUid);
		}

		unset ($this->_overrides['studyInstanceUid']);
	
		return $studyInstanceUid;
	}
} // end class MedicalImageStudy
