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

	public function getWhen() {
		if ($this->when===NULL) {
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

	public function getPatientName() {
		if ($this->patientName===NULL) {
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
		if ( ! $patientName instanceof \com\microsoft\wc\types\Stringnznw  && ! is_null($patientName) ) {
			$patientName = new \com\microsoft\wc\types\Stringnznw ($patientName);
		}
	
		return $patientName;
	}

	public function getDescription() {
		if ($this->description===NULL) {
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
		if ( ! $description instanceof \com\microsoft\wc\types\Stringnznw  && ! is_null($description) ) {
			$description = new \com\microsoft\wc\types\Stringnznw ($description);
		}
	
		return $description;
	}

	public function getSeries() {
		if ($this->series===NULL) {
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
			if (!($entry instanceof MedicalImageStudySeries)) {
				throw new \Exception(sprintf('Supplied %s value was not %s', 'series', 'medical-image-study-series'));
			}
		}
	
		return $series;
	}

	public function addSeries($series) {
		$this->series[] = $series;
	}

	public function getReason() {
		if ($this->reason===NULL) {
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
		if ( ! $reason instanceof \com\microsoft\wc\types\CodableValue  && ! is_null($reason) ) {
			$reason = new \com\microsoft\wc\types\CodableValue ($reason);
		}
	
		return $reason;
	}

	public function getPreviewBlobName() {
		if ($this->previewBlobName===NULL) {
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
		if ( ! $previewBlobName instanceof \com\microsoft\wc\types\Stringnznw  && ! is_null($previewBlobName) ) {
			$previewBlobName = new \com\microsoft\wc\types\Stringnznw ($previewBlobName);
		}
	
		return $previewBlobName;
	}

	public function getKeyImages() {
		if ($this->keyImages===NULL) {
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
		if ( ! is_array ($keyImages) && ! is_null($keyImages) ) {
			$keyImages = array($keyImages);
		}
		$count = count($keyImages);
		if ($count < 0) {
			throw new \Exception(sprintf('Supplied %s array has less than the required number (%d) of entries.', 'keyImages', 0));
		}
		foreach ($keyImages as $entry) {
			if (!($entry instanceof MedicalImageStudySeriesImage)) {
				throw new \Exception(sprintf('Supplied %s value was not %s', 'keyImages', 'medical-image-study-series-image'));
			}
		}
	
		return $keyImages;
	}

	public function addKeyImages($keyImages) {
		$this->keyImages[] = $keyImages;
	}

	public function getStudyInstanceUid() {
		if ($this->studyInstanceUid===NULL) {
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
		if ( ! $studyInstanceUid instanceof \com\microsoft\wc\types\Stringnznw  && ! is_null($studyInstanceUid) ) {
			$studyInstanceUid = new \com\microsoft\wc\types\Stringnznw ($studyInstanceUid);
		}
	
		return $studyInstanceUid;
	}
} // end class MedicalImageStudy
