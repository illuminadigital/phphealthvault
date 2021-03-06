<?php
namespace com\microsoft\wc\methods\response\BeginPutBlob;



/**
 * @XmlNamespaces ({
 *	@XmlNamespace(url="urn:com.microsoft.wc.methods.response.BeginPutBlob", prefix="")
 * })
 * @XmlEntity	(xml="info")
 */
class Info extends \com\microsoft\wc\response\AnyMixed {
	/**
	 * The response for the request to indicate that the streaming put of a blob in to the Healthvault system is about to begin.
	 * When a token is requested, if the request is a success then there will be a token. Otherwise, there will be an absence reason.
	 */

	/**
	 * List of manually overridden properties that should not be re-generated automatically
	 * @var array
	 */
	protected $_overrides = array();


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

	public function getBlobRefUrl($autoCreate = TRUE) {
		if ($this->blobRefUrl===NULL && $autoCreate && ! isset($this->_overrides['blobRefUrl']) ) {
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

	public function getBlobChunkSize($autoCreate = TRUE) {
		if ($this->blobChunkSize===NULL && $autoCreate && ! isset($this->_overrides['blobChunkSize']) ) {
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
		$isValid = FALSE;
		if ( is_integer($blobChunkSize) ) {
			$isValid = TRUE;
		}
		else if ( $blobChunkSize == ($castVar = (integer) $blobChunkSize) ) {
			$isValid = TRUE;
			$blobChunkSize = $castVar;
		}
		if ( ! $isValid ) {
			throw new \Exception(sprintf('Supplied %s value was not %s', 'blobChunkSize', 'integer'));
		}
	
		return $blobChunkSize;
	}

	public function getMaxBlobSize($autoCreate = TRUE) {
		if ($this->maxBlobSize===NULL && $autoCreate && ! isset($this->_overrides['maxBlobSize']) ) {
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
		$isValid = FALSE;
		if ( is_integer($maxBlobSize) ) {
			$isValid = TRUE;
		}
		else if ( $maxBlobSize == ($castVar = (integer) $maxBlobSize) ) {
			$isValid = TRUE;
			$maxBlobSize = $castVar;
		}
		if ( ! $isValid ) {
			throw new \Exception(sprintf('Supplied %s value was not %s', 'maxBlobSize', 'integer'));
		}
	
		return $maxBlobSize;
	}

	public function getBlobHashAlgorithm($autoCreate = TRUE) {
		if ($this->blobHashAlgorithm===NULL && $autoCreate && ! isset($this->_overrides['blobHashAlgorithm']) ) {
			$this->blobHashAlgorithm = $this->createBlobHashAlgorithm();
		}
		return $this->blobHashAlgorithm;
	}
	
	protected function createBlobHashAlgorithm() {
		return new \com\microsoft\wc\types\Stringz255();
	}

	public function setBlobHashAlgorithm($blobHashAlgorithm) {
		$this->blobHashAlgorithm = $this->validateBlobHashAlgorithm($blobHashAlgorithm);
	}

	protected function validateBlobHashAlgorithm($blobHashAlgorithm) {
		if ( ! $blobHashAlgorithm instanceof \com\microsoft\wc\types\Stringz255 ) {
			$blobHashAlgorithm = new \com\microsoft\wc\types\Stringz255 ($blobHashAlgorithm);
		}
	
		return $blobHashAlgorithm;
	}

	public function getBlobHashParameters($autoCreate = TRUE) {
		if ($this->blobHashParameters===NULL && $autoCreate && ! isset($this->_overrides['blobHashParameters']) ) {
			$this->blobHashParameters = $this->createBlobHashParameters();
		}
		return $this->blobHashParameters;
	}
	
	protected function createBlobHashParameters() {
		return new \com\microsoft\wc\types\BlobHashAlgorithmParameters();
	}

	public function setBlobHashParameters($blobHashParameters) {
		$this->blobHashParameters = $this->validateBlobHashParameters($blobHashParameters);
	}

	protected function validateBlobHashParameters($blobHashParameters) {
		if ( ! $blobHashParameters instanceof \com\microsoft\wc\types\BlobHashAlgorithmParameters ) {
			$blobHashParameters = new \com\microsoft\wc\types\BlobHashAlgorithmParameters ($blobHashParameters);
		}
	
		return $blobHashParameters;
	}
} // end class Info
