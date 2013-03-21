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
	 * List of manually overridden properties that should not be re-generated automatically
	 * @var array
	 */
	protected $_overrides = array();


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

	public function getImageBlobName($autoCreate = TRUE) {
		if ($this->imageBlobName===NULL && $autoCreate && ! isset($this->_overrides['imageBlobName']) ) {
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

	public function getImagePreviewBlobName($autoCreate = TRUE) {
		if ($this->imagePreviewBlobName===NULL && $autoCreate && ! isset($this->_overrides['imagePreviewBlobName']) ) {
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
		if ( $imagePreviewBlobName === FALSE ) {
			$this->_overrides['imagePreviewBlobName'] = TRUE;
			return NULL;
		}

		if ( ! $imagePreviewBlobName instanceof \com\microsoft\wc\types\Stringnznw  && ! is_null($imagePreviewBlobName) ) {
			$imagePreviewBlobName = new \com\microsoft\wc\types\Stringnznw ($imagePreviewBlobName);
		}

		unset ($this->_overrides['imagePreviewBlobName']);
	
		return $imagePreviewBlobName;
	}
} // end class MedicalImageStudySeriesImage
