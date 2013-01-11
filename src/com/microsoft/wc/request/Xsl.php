<?php
namespace com\microsoft\wc\request;

use com\microsoft\wc\types\String128;

/**
 * @XmlEntity	(xml="Xsl")
 */
class Xsl {
	/**
	 */

	/**
	 * @XmlAttribute	(type="string", name="content-type")
	 */
	protected $contentType;

	public function __construct($contentType = NULL) {
		$this->contentType = ($contentType===NULL) ? NULL : $this->validateContentType($contentType);
	}

	public function getContentType() {
		if ($this->contentType===NULL) {
			$this->contentType = $this->createContentType();
		}
		return $this->contentType;
	}
	
	protected function createContentType() {
		return new String128();
	}

	public function setContentType($contentType) {
		$this->contentType = $this->validateContentType($contentType);
	}

	protected function validateContentType($contentType) {
		if ( ! $contentType instanceof String128  && ! is_null($contentType) ) {
			$contentType = new String128 ($contentType);
		}
	
		return $contentType;
	}
} // end class Xsl
