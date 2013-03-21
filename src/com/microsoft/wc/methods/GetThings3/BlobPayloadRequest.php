<?php
namespace com\microsoft\wc\methods\GetThings3;



/**
 * @XmlNamespaces ({
 *	@XmlNamespace(url="urn:com.microsoft.wc.methods.GetThings3", prefix="")
 * })
 * @XmlEntity	(xml="BlobPayloadRequest")
 */
class BlobPayloadRequest {
	/**
	 */

	/**
	 * List of manually overridden properties that should not be re-generated automatically
	 * @var array
	 */
	protected $_overrides = array();


	/**
	 * @XmlElement	(type="\com\microsoft\wc\methods\GetThings3\BlobFilters", name="blob-filters")
	 */
	protected $blobFilters;

	/**
	 * @XmlElement	(type="\com\microsoft\wc\methods\GetThings3\BlobFormat", name="blob-format")
	 */
	protected $blobFormat;

	public function __construct($blobFilters = NULL, $blobFormat = NULL) {
		$this->blobFilters = ($blobFilters===NULL) ? NULL : $this->validateBlobFilters($blobFilters);
		$this->blobFormat = ($blobFormat===NULL) ? NULL : $this->validateBlobFormat($blobFormat);
	}

	public function getBlobFilters($autoCreate = TRUE) {
		if ($this->blobFilters===NULL && $autoCreate && ! isset($this->_overrides['blobFilters']) ) {
			$this->blobFilters = $this->createBlobFilters();
		}
		return $this->blobFilters;
	}
	
	protected function createBlobFilters() {
		return new \com\microsoft\wc\methods\GetThings3\BlobFilters();
	}

	public function setBlobFilters($blobFilters) {
		$this->blobFilters = $this->validateBlobFilters($blobFilters);
	}

	protected function validateBlobFilters($blobFilters) {
		if ( $blobFilters === FALSE ) {
			$this->_overrides['blobFilters'] = TRUE;
			return NULL;
		}

		if ( ! $blobFilters instanceof \com\microsoft\wc\methods\GetThings3\BlobFilters  && ! is_null($blobFilters) ) {
			$blobFilters = new \com\microsoft\wc\methods\GetThings3\BlobFilters ($blobFilters);
		}

		unset ($this->_overrides['blobFilters']);
	
		return $blobFilters;
	}

	public function getBlobFormat($autoCreate = TRUE) {
		if ($this->blobFormat===NULL && $autoCreate && ! isset($this->_overrides['blobFormat']) ) {
			$this->blobFormat = $this->createBlobFormat();
		}
		return $this->blobFormat;
	}
	
	protected function createBlobFormat() {
		return new \com\microsoft\wc\methods\GetThings3\BlobFormat();
	}

	public function setBlobFormat($blobFormat) {
		$this->blobFormat = $this->validateBlobFormat($blobFormat);
	}

	protected function validateBlobFormat($blobFormat) {
		if ( ! $blobFormat instanceof \com\microsoft\wc\methods\GetThings3\BlobFormat ) {
			$blobFormat = new \com\microsoft\wc\methods\GetThings3\BlobFormat ($blobFormat);
		}
	
		return $blobFormat;
	}
} // end class BlobPayloadRequest
