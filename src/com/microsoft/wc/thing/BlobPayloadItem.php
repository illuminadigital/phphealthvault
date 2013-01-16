<?php
namespace com\microsoft\wc\thing;



/**
 * @XmlEntity	(xml="BlobPayloadItem")
 */
class BlobPayloadItem {
	/**
	 */

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

	public function getBlobInfo() {
		if ($this->blobInfo===NULL) {
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

	public function getContentLength() {
		if ($this->contentLength===NULL) {
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
		if ( ! is_integer($contentLength) && ! is_null($contentLength) ) {
			throw new \Exception(sprintf('Supplied %s value was not %s', 'contentLength', 'integer'));
		}
	
		return $contentLength;
	}

	public function getBase64data() {
		if ($this->base64data===NULL) {
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
		if ( ! $base64data instanceof \com\microsoft\wc\types\Stringnz ) {
			$base64data = new \com\microsoft\wc\types\Stringnz ($base64data);
		}
	
		return $base64data;
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

	public function getLegacyContentEncoding() {
		if ($this->legacyContentEncoding===NULL) {
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
		if ( ! $legacyContentEncoding instanceof \com\microsoft\wc\types\Stringz1024  && ! is_null($legacyContentEncoding) ) {
			$legacyContentEncoding = new \com\microsoft\wc\types\Stringz1024 ($legacyContentEncoding);
		}
	
		return $legacyContentEncoding;
	}

	public function getCurrentContentEncoding() {
		if ($this->currentContentEncoding===NULL) {
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
		if ( ! $currentContentEncoding instanceof \com\microsoft\wc\types\Stringz1024  && ! is_null($currentContentEncoding) ) {
			$currentContentEncoding = new \com\microsoft\wc\types\Stringz1024 ($currentContentEncoding);
		}
	
		return $currentContentEncoding;
	}
} // end class BlobPayloadItem
