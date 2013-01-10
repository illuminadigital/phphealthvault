<?php
namespace com\microsoft\wc\application;

use com\microsoft\wc\application\VocabularyCodeItem;

/**
 * @XmlEntity	(xml="VocabularyCodeSet")
 */
class VocabularyCodeSet {
	/**
	 * Contains information about a vocabulary along with items belonging to that vocabulary.
	 */

	/**
	 * @XmlText	(type="string", name="name")
	 */
	protected $name;

	/**
	 * @XmlText	(type="string", name="family")
	 */
	protected $family;

	/**
	 * @XmlText	(type="string", name="version")
	 */
	protected $version;

	/**
	 * @XmlElement	(type="\com\microsoft\wc\application\VocabularyCodeItem", collection="true", name="code-item")
	 */
	protected $codeItem;

	/**
	 * @XmlText	(type="boolean", name="is-vocab-truncated")
	 */
	protected $isVocabTruncated;

	/**
	 * @XmlAttribute	(type="string", name="xml:lang")
	 */
	protected $xmlLang;

	public function __construct($name = NULL, $family = NULL, $version = NULL, $codeItem = NULL, $isVocabTruncated = NULL, $xmlLang = NULL) {
		$this->name = ($name===NULL) ? NULL : $this->validateName($name);
		$this->family = ($family===NULL) ? NULL : $this->validateFamily($family);
		$this->version = ($version===NULL) ? NULL : $this->validateVersion($version);
		$this->codeItem = ($codeItem===NULL) ? NULL : $this->validateCodeItem($codeItem);
		$this->isVocabTruncated = ($isVocabTruncated===NULL) ? NULL : $this->validateIsVocabTruncated($isVocabTruncated);
		$this->xmlLang = ($xmlLang===NULL) ? NULL : $this->validateXmlLang($xmlLang);
	}

	public function getName() {
		if ($this->name===NULL) {
			$this->name = $this->createName();
		}
		return $this->name;
	}
	
	protected function createName() {
		return '';
	}

	public function setName($name) {
		$this->name = $this->validateName($name);
	}

	protected function validateName($name) {
		if (!is_string($name)) {
			throw new \Exception(sprintf('Supplied %s value was not %s', 'name', 'string'));
		}
	
		return $name;
	}

	public function getFamily() {
		if ($this->family===NULL) {
			$this->family = $this->createFamily();
		}
		return $this->family;
	}
	
	protected function createFamily() {
		return '';
	}

	public function setFamily($family) {
		$this->family = $this->validateFamily($family);
	}

	protected function validateFamily($family) {
		if (!is_string($family)) {
			throw new \Exception(sprintf('Supplied %s value was not %s', 'family', 'string'));
		}
	
		return $family;
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

	public function getCodeItem() {
		if ($this->codeItem===NULL) {
			$this->codeItem = $this->createCodeItem();
		}
		return $this->codeItem;
	}
	
	protected function createCodeItem() {
		return array();
	}

	public function setCodeItem($codeItem) {
		$this->codeItem = $this->validateCodeItem($codeItem);
	}

	protected function validateCodeItem($codeItem) {
		if ( ! $codeItem instanceof VocabularyCodeItem  && ! is_null($codeItem) ) {
			$codeItem = new VocabularyCodeItem ($codeItem);
		}
		$count = count($codeItem);
		if ($count < 0) {
			throw new \Exception(sprintf('Supplied %s array has less than the required number (%d) of entries.', 'codeItem', 0));
		}
		foreach ($codeItem as $entry) {
			if (!($entry instanceof VocabularyCodeItem)) {
				throw new \Exception(sprintf('Supplied %s value was not %s', 'codeItem', 'VocabularyCodeItem'));
			}
		}
	
		return $codeItem;
	}

	public function addCodeItem($codeItem) {
		$this->codeItem[] = $codeItem;
	}

	public function getIsVocabTruncated() {
		if ($this->isVocabTruncated===NULL) {
			$this->isVocabTruncated = $this->createIsVocabTruncated();
		}
		return $this->isVocabTruncated;
	}
	
	protected function createIsVocabTruncated() {
		return FALSE;
	}

	public function setIsVocabTruncated($isVocabTruncated) {
		$this->isVocabTruncated = $this->validateIsVocabTruncated($isVocabTruncated);
	}

	protected function validateIsVocabTruncated($isVocabTruncated) {
		if ( ! is_bool($isVocabTruncated) && ! is_null($isVocabTruncated) ) {
			throw new \Exception(sprintf('Supplied %s value was not %s', 'isVocabTruncated', 'boolean'));
		}
	
		return $isVocabTruncated;
	}

	public function getXmlLang() {
		if ($this->xmlLang===NULL) {
			$this->xmlLang = $this->createXmlLang();
		}
		return $this->xmlLang;
	}
	
	protected function createXmlLang() {
		return NULL;
	}

	public function setXmlLang($xmlLang) {
		$this->xmlLang = $this->validateXmlLang($xmlLang);
	}

	protected function validateXmlLang($xmlLang) {
		if ( ! is_string($xmlLang) && ! is_null($xmlLang) ) {
			throw new \Exception(sprintf('Supplied %s value was not %s', 'xmlLang', 'string'));
		}
	
		return $xmlLang;
	}
} // end class VocabularyCodeSet
