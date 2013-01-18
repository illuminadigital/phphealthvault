<?php
namespace com\microsoft\wc\thing\medical_images;



/**
 * @XmlNamespaces ({
 *	@XmlNamespace(url="urn:com.microsoft.wc.thing.medical-images", prefix="")
 * })
 * @XmlEntity	(xml="medical-image-study-series-image")
 */
class MedicalImageStudySeriesImage {
	/**
	 * Information about a single image in a series.
	 */

	/**
	 * @XmlElement	(type="\com\microsoft\wc\types\Stringnznw", name="image-blob-name")
	 */
	protected $imageBlobName;

	/**
	 * @XmlElement	(type="\com\microsoft\wc\types\Stringnznw", name="image-preview-blob-name")
	 */
	protected $imagePreviewBlobName;

	public function __construct($imageBlobName = NULL, $imagePreviewBlobName = NULL) {
		$this->imageBlobName = ($imageBlobName===NULL) ? NULL : $this->validateImageBlobName($imageBlobName);
		$this->imagePreviewBlobName = ($imagePreviewBlobName===NULL) ? NULL : $this->validateImagePreviewBlobName($imagePreviewBlobName);
	}

	public function getImageBlobName() {
		if ($this->imageBlobName===NULL) {
			$this->imageBlobName = $this->createImageBlobName();
		}
		return $this->imageBlobName;
	}
	
	protected function createImageBlobName() {
		return new \com\microsoft\wc\types\Stringnznw();
	}

	public function setImageBlobName($imageBlobName) {
		$this->imageBlobName = $this->validateImageBlobName($imageBlobName);
	}

	protected function validateImageBlobName($imageBlobName) {
		if ( ! $imageBlobName instanceof \com\microsoft\wc\types\Stringnznw ) {
			$imageBlobName = new \com\microsoft\wc\types\Stringnznw ($imageBlobName);
		}
	
		return $imageBlobName;
	}

	public function getImagePreviewBlobName() {
		if ($this->imagePreviewBlobName===NULL) {
			$this->imagePreviewBlobName = $this->createImagePreviewBlobName();
		}
		return $this->imagePreviewBlobName;
	}
	
	protected function createImagePreviewBlobName() {
		return new \com\microsoft\wc\types\Stringnznw();
	}

	public function setImagePreviewBlobName($imagePreviewBlobName) {
		$this->imagePreviewBlobName = $this->validateImagePreviewBlobName($imagePreviewBlobName);
	}

	protected function validateImagePreviewBlobName($imagePreviewBlobName) {
		if ( ! $imagePreviewBlobName instanceof \com\microsoft\wc\types\Stringnznw  && ! is_null($imagePreviewBlobName) ) {
			$imagePreviewBlobName = new \com\microsoft\wc\types\Stringnznw ($imagePreviewBlobName);
		}
	
		return $imagePreviewBlobName;
	}
} // end class MedicalImageStudySeriesImage
