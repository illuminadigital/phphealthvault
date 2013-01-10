<?php
namespace com\microsoft\wc\thing;

use com\microsoft\wc\types\Stringz255;
use com\microsoft\wc\types\Stringz1024;
use com\microsoft\wc\thing\BlobHashInfo;

/**
 * @XmlNamespaces ({
 *	@XmlNamespace(url="urn:com.microsoft.wc.thing", prefix="wc-thing")
 * })
 * @XmlEntity	(xml="BlobInfo")
 */
class BlobInfo {
	/**
	 */

	/**
	 * @XmlElement	(type="\com\microsoft\wc\types\Stringz255", name="name")
	 */
	protected $name;

	/**
	 * @XmlElement	(type="\com\microsoft\wc\types\Stringz1024", name="content-type")
	 */
	protected $contentType;

	/**
	 * @XmlElement	(type="\com\microsoft\wc\thing\BlobHashInfo", name="hash-info")
	 */
	protected $hashInfo;

	public function __construct($name = NULL, $contentType = NULL, $hashInfo = NULL) {
		$this->name = ($name===NULL) ? NULL : $this->validateName($name);
		$this->contentType = ($contentType===NULL) ? NULL : $this->validateContentType($contentType);
		$this->hashInfo = ($hashInfo===NULL) ? NULL : $this->validateHashInfo($hashInfo);
	}

	public function getName() {
		if ($this->name===NULL) {
			$this->name = $this->createName();
		}
		return $this->name;
	}
	
	protected function createName() {
		return new Stringz255();
	}

	public function setName($name) {
		$this->name = $this->validateName($name);
	}

	protected function validateName($name) {
		if ( ! $name instanceof Stringz255 ) {
			$name = new Stringz255 ($name);
		}
	
		return $name;
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
		if ( ! $contentType instanceof Stringz1024 ) {
			$contentType = new Stringz1024 ($contentType);
		}
	
		return $contentType;
	}

	public function getHashInfo() {
		if ($this->hashInfo===NULL) {
			$this->hashInfo = $this->createHashInfo();
		}
		return $this->hashInfo;
	}
	
	protected function createHashInfo() {
		return new BlobHashInfo();
	}

	public function setHashInfo($hashInfo) {
		$this->hashInfo = $this->validateHashInfo($hashInfo);
	}

	protected function validateHashInfo($hashInfo) {
		if ( ! $hashInfo instanceof BlobHashInfo ) {
			$hashInfo = new BlobHashInfo ($hashInfo);
		}
	
		return $hashInfo;
	}
} // end class BlobInfo
