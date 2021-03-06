<?php
namespace com\microsoft\wc\thing;



/**
 * @XmlNamespaces ({
 *	@XmlNamespace(url="urn:com.microsoft.wc.thing", prefix="wc-thing")
 * })
 * @XmlEntity	(xml="BlobPayloadItem")
 */
class BlobPayloadItem {
	/**
	 */

	/**
	 * List of manually overridden properties that should not be re-generated automatically
	 * @var array
	 */
	protected $_overrides = array();


	/**
	 * @XmlElement	(type="\com\microsoft\wc\thing\BlobInfo", name="blob-info")
	 */
	protected $blobInfo;

	/**
	 * @XmlText	(type="integer", name="content-length")
	 */
	protected $contentLength;

	/**
	 * @XmlElement	(type="\com\microsoft\wc\types\Stringnz", name="base64data")
	 */
	protected $base64data;

	/**
	 * @XmlText	(type="string", name="blob-ref-url")
	 */
	protected $blobRefUrl;

	/**
	 * @XmlElement	(type="\com\microsoft\wc\types\Stringz1024", name="legacy-content-encoding")
	 */
	protected $legacyContentEncoding;

	/**
	 * @XmlElement	(type="\com\microsoft\wc\types\Stringz1024", name="current-content-encoding")
	 */
	protected $currentContentEncoding;

	public function __construct($blobInfo = NULL, $contentLength = NULL, $base64data = NULL, $blobRefUrl = NULL, $legacyContentEncoding = NULL, $currentContentEncoding = NULL) {
		$this->blobInfo = ($blobInfo===NULL) ? NULL : $this->validateBlobInfo($blobInfo);
		$this->contentLength = ($contentLength===NULL) ? NULL : $this->validateContentLength($contentLength);
		$this->base64data = ($base64data===NULL) ? NULL : $this->validateBase64data($base64data);
		$this->blobRefUrl = ($blobRefUrl===NULL) ? NULL : $this->validateBlobRefUrl($blobRefUrl);
		$this->legacyContentEncoding = ($legacyContentEncoding===NULL) ? NULL : $this->validateLegacyContentEncoding($legacyContentEncoding);
		$this->currentContentEncoding = ($currentContentEncoding===NULL) ? NULL : $this->validateCurrentContentEncoding($currentContentEncoding);
	}

	public function getBlobInfo($autoCreate = TRUE) {
		if ($this->blobInfo===NULL && $autoCreate && ! isset($this->_overrides['blobInfo']) ) {
			$this->blobInfo = $this->createBlobInfo();
		}
		return $this->blobInfo;
	}
	
	protected function createBlobInfo() {
		return new \com\microsoft\wc\thing\BlobInfo();
	}

	public function setBlobInfo($blobInfo) {
		$this->blobInfo = $this->validateBlobInfo($blobInfo);
	}

	protected function validateBlobInfo($blobInfo) {
		if ( ! $blobInfo instanceof \com\microsoft\wc\thing\BlobInfo ) {
			$blobInfo = new \com\microsoft\wc\thing\BlobInfo ($blobInfo);
		}
	
		return $blobInfo;
	}

	public function getContentLength($autoCreate = TRUE) {
		if ($this->contentLength===NULL && $autoCreate && ! isset($this->_overrides['contentLength']) ) {
			$this->contentLength = $this->createContentLength();
		}
		return $this->contentLength;
	}
	
	protected function createContentLength() {
		return NULL;
	}

	public function setContentLength($contentLength) {
		$this->contentLength = $this->validateContentLength($contentLength);
	}

	protected function validateContentLength($contentLength) {
		$isValid = FALSE;
		if ( is_integer($contentLength) ) {
			$isValid = TRUE;
		}
		else if ( is_null($contentLength) ) {
			$isValid = TRUE;
		}
		else if ( $contentLength == ($castVar = (integer) $contentLength) ) {
			$isValid = TRUE;
			$contentLength = $castVar;
		}
		if ( ! $isValid ) {
			throw new \Exception(sprintf('Supplied %s value was not %s', 'contentLength', 'integer'));
		}
	
		return $contentLength;
	}

	public function getBase64data($autoCreate = TRUE) {
		if ($this->base64data===NULL && $autoCreate && ! isset($this->_overrides['base64data']) ) {
			$this->base64data = $this->createBase64data();
		}
		return $this->base64data;
	}
	
	protected function createBase64data() {
		return new \com\microsoft\wc\types\Stringnz();
	}

	public function setBase64data($base64data) {
		$this->base64data = $this->validateBase64data($base64data);
	}

	protected function validateBase64data($base64data) {
		if ( $base64data === FALSE ) {
			$this->_overrides['base64data'] = TRUE;
			return NULL;
		}

		if ( ! $base64data instanceof \com\microsoft\wc\types\Stringnz  && ! is_null($base64data) ) {
			$base64data = new \com\microsoft\wc\types\Stringnz ($base64data);
		}

		unset ($this->_overrides['base64data']);
	
		return $base64data;
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
		if ( ! is_string($blobRefUrl) && ! is_null($blobRefUrl) ) {
			throw new \Exception(sprintf('Supplied %s value was not %s', 'blobRefUrl', 'string'));
		}
	
		return $blobRefUrl;
	}

	public function getLegacyContentEncoding($autoCreate = TRUE) {
		if ($this->legacyContentEncoding===NULL && $autoCreate && ! isset($this->_overrides['legacyContentEncoding']) ) {
			$this->legacyContentEncoding = $this->createLegacyContentEncoding();
		}
		return $this->legacyContentEncoding;
	}
	
	protected function createLegacyContentEncoding() {
		return new \com\microsoft\wc\types\Stringz1024();
	}

	public function setLegacyContentEncoding($legacyContentEncoding) {
		$this->legacyContentEncoding = $this->validateLegacyContentEncoding($legacyContentEncoding);
	}

	protected function validateLegacyContentEncoding($legacyContentEncoding) {
		if ( $legacyContentEncoding === FALSE ) {
			$this->_overrides['legacyContentEncoding'] = TRUE;
			return NULL;
		}

		if ( ! $legacyContentEncoding instanceof \com\microsoft\wc\types\Stringz1024  && ! is_null($legacyContentEncoding) ) {
			$legacyContentEncoding = new \com\microsoft\wc\types\Stringz1024 ($legacyContentEncoding);
		}

		unset ($this->_overrides['legacyContentEncoding']);
	
		return $legacyContentEncoding;
	}

	public function getCurrentContentEncoding($autoCreate = TRUE) {
		if ($this->currentContentEncoding===NULL && $autoCreate && ! isset($this->_overrides['currentContentEncoding']) ) {
			$this->currentContentEncoding = $this->createCurrentContentEncoding();
		}
		return $this->currentContentEncoding;
	}
	
	protected function createCurrentContentEncoding() {
		return new \com\microsoft\wc\types\Stringz1024();
	}

	public function setCurrentContentEncoding($currentContentEncoding) {
		$this->currentContentEncoding = $this->validateCurrentContentEncoding($currentContentEncoding);
	}

	protected function validateCurrentContentEncoding($currentContentEncoding) {
		if ( $currentContentEncoding === FALSE ) {
			$this->_overrides['currentContentEncoding'] = TRUE;
			return NULL;
		}

		if ( ! $currentContentEncoding instanceof \com\microsoft\wc\types\Stringz1024  && ! is_null($currentContentEncoding) ) {
			$currentContentEncoding = new \com\microsoft\wc\types\Stringz1024 ($currentContentEncoding);
		}

		unset ($this->_overrides['currentContentEncoding']);
	
		return $currentContentEncoding;
	}
} // end class BlobPayloadItem
