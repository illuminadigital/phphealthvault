<?php
namespace com\microsoft\wc\thing\types;



/**
 * @XmlNamespaces ({
 *	@XmlNamespace(url="urn:com.microsoft.wc.thing.types", prefix="urn:com.microsoft.wc.thing.types")
 * })
 * @XmlEntity	(xml="document-reference-type")
 */
class DocumentReferenceType {
	/**
	 * Defines a document reference.
	 * This type is used to define a specific document reference, includingclassification, index and version.
	 */

	/**
	 * @XmlText	(type="string", name="title")
	 */
	protected $title;

	/**
	 * @XmlText	(type="string", name="url")
	 */
	protected $url;

	/**
	 * @XmlText	(type="string", name="document-index")
	 */
	protected $documentIndex;

	/**
	 * @XmlText	(type="string", name="version")
	 */
	protected $version;

	public function __construct($title = NULL, $url = NULL, $documentIndex = NULL, $version = NULL) {
		$this->title = ($title===NULL) ? NULL : $this->validateTitle($title);
		$this->url = ($url===NULL) ? NULL : $this->validateUrl($url);
		$this->documentIndex = ($documentIndex===NULL) ? NULL : $this->validateDocumentIndex($documentIndex);
		$this->version = ($version===NULL) ? NULL : $this->validateVersion($version);
	}

	public function getTitle() {
		if ($this->title===NULL) {
			$this->title = $this->createTitle();
		}
		return $this->title;
	}
	
	protected function createTitle() {
		return '';
	}

	public function setTitle($title) {
		$this->title = $this->validateTitle($title);
	}

	protected function validateTitle($title) {
		if (!is_string($title)) {
			throw new \Exception(sprintf('Supplied %s value was not %s', 'title', 'string'));
		}
	
		return $title;
	}

	public function getUrl() {
		if ($this->url===NULL) {
			$this->url = $this->createUrl();
		}
		return $this->url;
	}
	
	protected function createUrl() {
		return '';
	}

	public function setUrl($url) {
		$this->url = $this->validateUrl($url);
	}

	protected function validateUrl($url) {
		if (!is_string($url)) {
			throw new \Exception(sprintf('Supplied %s value was not %s', 'url', 'string'));
		}
	
		return $url;
	}

	public function getDocumentIndex() {
		if ($this->documentIndex===NULL) {
			$this->documentIndex = $this->createDocumentIndex();
		}
		return $this->documentIndex;
	}
	
	protected function createDocumentIndex() {
		return '';
	}

	public function setDocumentIndex($documentIndex) {
		$this->documentIndex = $this->validateDocumentIndex($documentIndex);
	}

	protected function validateDocumentIndex($documentIndex) {
		if (!is_string($documentIndex)) {
			throw new \Exception(sprintf('Supplied %s value was not %s', 'documentIndex', 'string'));
		}
	
		return $documentIndex;
	}

	public function getVersion() {
		if ($this->version===NULL) {
			$this->version = $this->createVersion();
		}
		return $this->version;
	}
	
	protected function createVersion() {
		return '';
	}

	public function setVersion($version) {
		$this->version = $this->validateVersion($version);
	}

	protected function validateVersion($version) {
		if (!is_string($version)) {
			throw new \Exception(sprintf('Supplied %s value was not %s', 'version', 'string'));
		}
	
		return $version;
	}
} // end class DocumentReferenceType
