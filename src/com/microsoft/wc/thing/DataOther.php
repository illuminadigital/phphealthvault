<?php
namespace com\microsoft\wc\thing;

use com\microsoft\wc\types\Stringz1024;

/**
 * @XmlEntity	(xml="DataOther")
 */
class DataOther {
	/**
	 */

	/**
	 * @XmlAttribute	(type="string", name="content-type")
	 */
	protected $contentType;

	/**
	 * @XmlAttribute	(type="string", name="content-encoding")
	 */
	protected $contentEncoding;

	public function __construct($contentType = NULL, $contentEncoding = NULL) {
		$this->contentType = ($contentType===NULL) ? NULL : $this->validateContentType($contentType);
		$this->contentEncoding = ($contentEncoding===NULL) ? NULL : $this->validateContentEncoding($contentEncoding);
	}

	public function getContentType() {
		if ($this->contentType===NULL) {
			$this->contentType = $this->createContentType();
		}
		return $this->contentType;
	}
	
	protected function createContentType() {
		return new Stringz1024();
	}

	public function setContentType($contentType) {
		$this->contentType = $this->validateContentType($contentType);
	}

	protected function validateContentType($contentType) {
		if ( ! $contentType instanceof Stringz1024  && ! is_null($contentType) ) {
			$contentType = new Stringz1024 ($contentType);
		}
	
		return $contentType;
	}

	public function getContentEncoding() {
		if ($this->contentEncoding===NULL) {
			$this->contentEncoding = $this->createContentEncoding();
		}
		return $this->contentEncoding;
	}
	
	protected function createContentEncoding() {
		return new Stringz1024();
	}

	public function setContentEncoding($contentEncoding) {
		$this->contentEncoding = $this->validateContentEncoding($contentEncoding);
	}

	protected function validateContentEncoding($contentEncoding) {
		if ( ! $contentEncoding instanceof Stringz1024  && ! is_null($contentEncoding) ) {
			$contentEncoding = new Stringz1024 ($contentEncoding);
		}
	
		return $contentEncoding;
	}
} // end class DataOther
