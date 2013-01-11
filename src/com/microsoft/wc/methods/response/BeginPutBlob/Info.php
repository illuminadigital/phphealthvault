<?php
namespace com\microsoft\wc\methods\response\BeginPutBlob;

use com\microsoft\wc\types\Stringz255;
use com\microsoft\wc\types\BlobHashAlgorithmParameters;

/**
 * @XmlEntity	(xml="info")
 */
class Info {
	/**
	 * The response for the request to indicate that the streaming put of a blob in to the Healthvault system is about to begin.
	 * When a token is requested, if the request is a success then there will be a token. Otherwise, there will be an absence reason.
	 */

	/**
	 * @XmlText	(type="string", name="blob-ref-url")
	 */
	protected $blobRefUrl;

	/**
	 * @XmlText	(type="integer", name="blob-chunk-size")
	 */
	protected $blobChunkSize;

	/**
	 * @XmlText	(type="integer", name="max-blob-size")
	 */
	protected $maxBlobSize;

	/**
	 * @XmlElement	(type="\com\microsoft\wc\types\Stringz255", name="blob-hash-algorithm")
	 */
	protected $blobHashAlgorithm;

	/**
	 * @XmlElement	(type="\com\microsoft\wc\types\BlobHashAlgorithmParameters", name="blob-hash-parameters")
	 */
	protected $blobHashParameters;

	public function __construct($blobRefUrl = NULL, $blobChunkSize = NULL, $maxBlobSize = NULL, $blobHashAlgorithm = NULL, $blobHashParameters = NULL) {
		$this->blobRefUrl = ($blobRefUrl===NULL) ? NULL : $this->validateBlobRefUrl($blobRefUrl);
		$this->blobChunkSize = ($blobChunkSize===NULL) ? NULL : $this->validateBlobChunkSize($blobChunkSize);
		$this->maxBlobSize = ($maxBlobSize===NULL) ? NULL : $this->validateMaxBlobSize($maxBlobSize);
		$this->blobHashAlgorithm = ($blobHashAlgorithm===NULL) ? NULL : $this->validateBlobHashAlgorithm($blobHashAlgorithm);
		$this->blobHashParameters = ($blobHashParameters===NULL) ? NULL : $this->validateBlobHashParameters($blobHashParameters);
	}

	public function getBlobRefUrl() {
		if ($this->blobRefUrl===NULL) {
			$this->blobRefUrl = $this->createBlobRefUrl();
		}
		return $this->blobRefUrl;
	}
	
	protected function createBlobRefUrl() {
		return NULL;
	}

	public function setBlobRefUrl($blobRefUrl) {
		$this->blobRefUrl = $this->validateBlobRefUrl($blobRefUrl);
	}

	protected function validateBlobRefUrl($blobRefUrl) {
		if (!is_string($blobRefUrl)) {
			throw new \Exception(sprintf('Supplied %s value was not %s', 'blobRefUrl', 'string'));
		}
	
		return $blobRefUrl;
	}

	public function getBlobChunkSize() {
		if ($this->blobChunkSize===NULL) {
			$this->blobChunkSize = $this->createBlobChunkSize();
		}
		return $this->blobChunkSize;
	}
	
	protected function createBlobChunkSize() {
		return 0;
	}

	public function setBlobChunkSize($blobChunkSize) {
		$this->blobChunkSize = $this->validateBlobChunkSize($blobChunkSize);
	}

	protected function validateBlobChunkSize($blobChunkSize) {
		if (!is_integer($blobChunkSize)) {
			throw new \Exception(sprintf('Supplied %s value was not %s', 'blobChunkSize', 'integer'));
		}
	
		return $blobChunkSize;
	}

	public function getMaxBlobSize() {
		if ($this->maxBlobSize===NULL) {
			$this->maxBlobSize = $this->createMaxBlobSize();
		}
		return $this->maxBlobSize;
	}
	
	protected function createMaxBlobSize() {
		return NULL;
	}

	public function setMaxBlobSize($maxBlobSize) {
		$this->maxBlobSize = $this->validateMaxBlobSize($maxBlobSize);
	}

	protected function validateMaxBlobSize($maxBlobSize) {
		if (!is_integer($maxBlobSize)) {
			throw new \Exception(sprintf('Supplied %s value was not %s', 'maxBlobSize', 'integer'));
		}
	
		return $maxBlobSize;
	}

	public function getBlobHashAlgorithm() {
		if ($this->blobHashAlgorithm===NULL) {
			$this->blobHashAlgorithm = $this->createBlobHashAlgorithm();
		}
		return $this->blobHashAlgorithm;
	}
	
	protected function createBlobHashAlgorithm() {
		return new Stringz255();
	}

	public function setBlobHashAlgorithm($blobHashAlgorithm) {
		$this->blobHashAlgorithm = $this->validateBlobHashAlgorithm($blobHashAlgorithm);
	}

	protected function validateBlobHashAlgorithm($blobHashAlgorithm) {
		if ( ! $blobHashAlgorithm instanceof Stringz255 ) {
			$blobHashAlgorithm = new Stringz255 ($blobHashAlgorithm);
		}
	
		return $blobHashAlgorithm;
	}

	public function getBlobHashParameters() {
		if ($this->blobHashParameters===NULL) {
			$this->blobHashParameters = $this->createBlobHashParameters();
		}
		return $this->blobHashParameters;
	}
	
	protected function createBlobHashParameters() {
		return new BlobHashAlgorithmParameters();
	}

	public function setBlobHashParameters($blobHashParameters) {
		$this->blobHashParameters = $this->validateBlobHashParameters($blobHashParameters);
	}

	protected function validateBlobHashParameters($blobHashParameters) {
		if ( ! $blobHashParameters instanceof BlobHashAlgorithmParameters ) {
			$blobHashParameters = new BlobHashAlgorithmParameters ($blobHashParameters);
		}
	
		return $blobHashParameters;
	}
} // end class Info
