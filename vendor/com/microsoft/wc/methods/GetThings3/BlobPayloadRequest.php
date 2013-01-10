<?php
namespace com\microsoft\wc\methods\GetThings3;

use com\microsoft\wc\methods\GetThings3\BlobFilters;

/**
 * @XmlEntity	(xml="BlobPayloadRequest")
 */
class BlobPayloadRequest {
	/**
	 */

	/**
	 * @XmlElement	(type="\com\microsoft\wc\methods\GetThings3\BlobFilters", name="blob-filters")
	 */
	protected $blobFilters;

	/**
	 * @XmlElement	(type="\com\microsoft\wc\methods\GetThings3\", name="blob-format")
	 */
	protected $blobFormat;

	public function __construct($blobFilters = NULL, $blobFormat = NULL) {
		$this->blobFilters = ($blobFilters===NULL) ? NULL : $this->validateBlobFilters($blobFilters);
		$this->blobFormat = ($blobFormat===NULL) ? NULL : $this->validateBlobFormat($blobFormat);
	}

	public function getBlobFilters() {
		if ($this->blobFilters===NULL) {
			$this->blobFilters = $this->createBlobFilters();
		}
		return $this->blobFilters;
	}
	
	protected function createBlobFilters() {
		return new BlobFilters();
	}

	public function setBlobFilters($blobFilters) {
		$this->blobFilters = $this->validateBlobFilters($blobFilters);
	}

	protected function validateBlobFilters($blobFilters) {
		if ( ! $blobFilters instanceof BlobFilters  && ! is_null($blobFilters) ) {
			$blobFilters = new BlobFilters ($blobFilters);
		}
	
		return $blobFilters;
	}

	public function getBlobFormat() {
		if ($this->blobFormat===NULL) {
			$this->blobFormat = $this->createBlobFormat();
		}
		return $this->blobFormat;
	}
	
	protected function createBlobFormat() {
		return NULL;
	}

	public function setBlobFormat($blobFormat) {
		$this->blobFormat = $this->validateBlobFormat($blobFormat);
	}

	protected function validateBlobFormat($blobFormat) {
		if (!is_($blobFormat)) {
			throw new \Exception(sprintf('Supplied %s value was not %s', 'blobFormat', ''));
		}
	
		return $blobFormat;
	}
} // end class BlobPayloadRequest
