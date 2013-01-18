<?php
namespace com\microsoft\wc\thing\medical_images;



/**
 * @XmlNamespaces ({
 *	@XmlNamespace(url="urn:com.microsoft.wc.thing.medical-images", prefix="")
 * })
 * @XmlEntity	(xml="medical-image-study-series")
 */
class MedicalImageStudySeries {
	/**
	 * A specific series of images.
	 */

	/**
	 * @XmlElement	(type="\com\microsoft\wc\dates\DateTime", name="acquisition-datetime")
	 */
	protected $acquisitionDatetime;

	/**
	 * @XmlElement	(type="\com\microsoft\wc\types\Stringnznw", name="description")
	 */
	protected $description;

	/**
	 * @XmlElement	(type="\com\microsoft\wc\thing\medical_images\MedicalImageStudySeriesImage", collection="true", name="images")
	 */
	protected $images;

	/**
	 * @XmlElement	(type="\com\microsoft\wc\thing\types\Organization", name="institution-name")
	 */
	protected $institutionName;

	/**
	 * @XmlElement	(type="\com\microsoft\wc\thing\types\Person", name="referring-physician")
	 */
	protected $referringPhysician;

	/**
	 * @XmlElement	(type="\com\microsoft\wc\types\CodableValue", name="modality")
	 */
	protected $modality;

	/**
	 * @XmlElement	(type="\com\microsoft\wc\types\CodableValue", name="body-part")
	 */
	protected $bodyPart;

	/**
	 * @XmlElement	(type="\com\microsoft\wc\types\Stringnznw", name="preview-blob-name")
	 */
	protected $previewBlobName;

	/**
	 * @XmlElement	(type="\com\microsoft\wc\types\Stringnznw", name="series-instance-uid")
	 */
	protected $seriesInstanceUid;

	public function __construct($acquisitionDatetime = NULL, $description = NULL, $images = NULL, $institutionName = NULL, $referringPhysician = NULL, $modality = NULL, $bodyPart = NULL, $previewBlobName = NULL, $seriesInstanceUid = NULL) {
		$this->acquisitionDatetime = ($acquisitionDatetime===NULL) ? NULL : $this->validateAcquisitionDatetime($acquisitionDatetime);
		$this->description = ($description===NULL) ? NULL : $this->validateDescription($description);
		$this->images = ($images===NULL) ? NULL : $this->validateImages($images);
		$this->institutionName = ($institutionName===NULL) ? NULL : $this->validateInstitutionName($institutionName);
		$this->referringPhysician = ($referringPhysician===NULL) ? NULL : $this->validateReferringPhysician($referringPhysician);
		$this->modality = ($modality===NULL) ? NULL : $this->validateModality($modality);
		$this->bodyPart = ($bodyPart===NULL) ? NULL : $this->validateBodyPart($bodyPart);
		$this->previewBlobName = ($previewBlobName===NULL) ? NULL : $this->validatePreviewBlobName($previewBlobName);
		$this->seriesInstanceUid = ($seriesInstanceUid===NULL) ? NULL : $this->validateSeriesInstanceUid($seriesInstanceUid);
	}

	public function getAcquisitionDatetime() {
		if ($this->acquisitionDatetime===NULL) {
			$this->acquisitionDatetime = $this->createAcquisitionDatetime();
		}
		return $this->acquisitionDatetime;
	}
	
	protected function createAcquisitionDatetime() {
		return new \com\microsoft\wc\dates\DateTime();
	}

	public function setAcquisitionDatetime($acquisitionDatetime) {
		$this->acquisitionDatetime = $this->validateAcquisitionDatetime($acquisitionDatetime);
	}

	protected function validateAcquisitionDatetime($acquisitionDatetime) {
		if ( ! $acquisitionDatetime instanceof \com\microsoft\wc\dates\DateTime ) {
			$acquisitionDatetime = new \com\microsoft\wc\dates\DateTime ($acquisitionDatetime);
		}
	
		return $acquisitionDatetime;
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

	public function getImages() {
		if ($this->images===NULL) {
			$this->images = $this->createImages();
		}
		return $this->images;
	}
	
	protected function createImages() {
		return array();
	}

	public function setImages($images) {
		$this->images = $this->validateImages($images);
	}

	protected function validateImages($images) {
		if ( ! $images instanceof \com\microsoft\wc\thing\medical_images\MedicalImageStudySeriesImage ) {
			$images = new \com\microsoft\wc\thing\medical_images\MedicalImageStudySeriesImage ($images);
		}
		$count = count($images);
		if ($count < 1) {
			throw new \Exception(sprintf('Supplied %s array has less than the required number (%d) of entries.', 'images', 1));
		}
		foreach ($images as $entry) {
			if (!($entry instanceof MedicalImageStudySeriesImage)) {
				throw new \Exception(sprintf('Supplied %s value was not %s', 'images', 'medical-image-study-series-image'));
			}
		}
	
		return $images;
	}

	public function addImages($images) {
		$this->images[] = $images;
	}

	public function getInstitutionName() {
		if ($this->institutionName===NULL) {
			$this->institutionName = $this->createInstitutionName();
		}
		return $this->institutionName;
	}
	
	protected function createInstitutionName() {
		return new \com\microsoft\wc\thing\types\Organization();
	}

	public function setInstitutionName($institutionName) {
		$this->institutionName = $this->validateInstitutionName($institutionName);
	}

	protected function validateInstitutionName($institutionName) {
		if ( ! $institutionName instanceof \com\microsoft\wc\thing\types\Organization  && ! is_null($institutionName) ) {
			$institutionName = new \com\microsoft\wc\thing\types\Organization ($institutionName);
		}
	
		return $institutionName;
	}

	public function getReferringPhysician() {
		if ($this->referringPhysician===NULL) {
			$this->referringPhysician = $this->createReferringPhysician();
		}
		return $this->referringPhysician;
	}
	
	protected function createReferringPhysician() {
		return new \com\microsoft\wc\thing\types\Person();
	}

	public function setReferringPhysician($referringPhysician) {
		$this->referringPhysician = $this->validateReferringPhysician($referringPhysician);
	}

	protected function validateReferringPhysician($referringPhysician) {
		if ( ! $referringPhysician instanceof \com\microsoft\wc\thing\types\Person  && ! is_null($referringPhysician) ) {
			$referringPhysician = new \com\microsoft\wc\thing\types\Person ($referringPhysician);
		}
	
		return $referringPhysician;
	}

	public function getModality() {
		if ($this->modality===NULL) {
			$this->modality = $this->createModality();
		}
		return $this->modality;
	}
	
	protected function createModality() {
		return new \com\microsoft\wc\types\CodableValue();
	}

	public function setModality($modality) {
		$this->modality = $this->validateModality($modality);
	}

	protected function validateModality($modality) {
		if ( ! $modality instanceof \com\microsoft\wc\types\CodableValue  && ! is_null($modality) ) {
			$modality = new \com\microsoft\wc\types\CodableValue ($modality);
		}
	
		return $modality;
	}

	public function getBodyPart() {
		if ($this->bodyPart===NULL) {
			$this->bodyPart = $this->createBodyPart();
		}
		return $this->bodyPart;
	}
	
	protected function createBodyPart() {
		return new \com\microsoft\wc\types\CodableValue();
	}

	public function setBodyPart($bodyPart) {
		$this->bodyPart = $this->validateBodyPart($bodyPart);
	}

	protected function validateBodyPart($bodyPart) {
		if ( ! $bodyPart instanceof \com\microsoft\wc\types\CodableValue  && ! is_null($bodyPart) ) {
			$bodyPart = new \com\microsoft\wc\types\CodableValue ($bodyPart);
		}
	
		return $bodyPart;
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

	public function getSeriesInstanceUid() {
		if ($this->seriesInstanceUid===NULL) {
			$this->seriesInstanceUid = $this->createSeriesInstanceUid();
		}
		return $this->seriesInstanceUid;
	}
	
	protected function createSeriesInstanceUid() {
		return new \com\microsoft\wc\types\Stringnznw();
	}

	public function setSeriesInstanceUid($seriesInstanceUid) {
		$this->seriesInstanceUid = $this->validateSeriesInstanceUid($seriesInstanceUid);
	}

	protected function validateSeriesInstanceUid($seriesInstanceUid) {
		if ( ! $seriesInstanceUid instanceof \com\microsoft\wc\types\Stringnznw  && ! is_null($seriesInstanceUid) ) {
			$seriesInstanceUid = new \com\microsoft\wc\types\Stringnznw ($seriesInstanceUid);
		}
	
		return $seriesInstanceUid;
	}
} // end class MedicalImageStudySeries
