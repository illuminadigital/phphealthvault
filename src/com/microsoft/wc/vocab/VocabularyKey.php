<?php
namespace com\microsoft\wc\vocab;

use com\microsoft\wc\types\Stringnz;

/**
 * @XmlEntity	(xml="VocabularyKey")
 */
class VocabularyKey {
	/**
	 * Used to uniquely identify a specific vocabulary in the system.
	 * Information about supported vocabularies can be obtained though the partner labs site.
	 */

	/**
	 * @XmlElement	(type="\com\microsoft\wc\types\Stringnz", name="name")
	 */
	protected $name;

	/**
	 * @XmlElement	(type="\com\microsoft\wc\types\Stringnz", name="family")
	 */
	protected $family;

	/**
	 * @XmlElement	(type="\com\microsoft\wc\types\Stringnz", name="version")
	 */
	protected $version;

	/**
	 * @XmlText	(type="string", name="code-value")
	 */
	protected $codeValue;

	/**
	 * @XmlAttribute	(type="string", name="xml:lang")
	 */
	protected $xmlLang;

	public function __construct($name = NULL, $family = NULL, $version = NULL, $codeValue = NULL, $xmlLang = NULL) {
		$this->name = ($name===NULL) ? NULL : $this->validateName($name);
		$this->family = ($family===NULL) ? NULL : $this->validateFamily($family);
		$this->version = ($version===NULL) ? NULL : $this->validateVersion($version);
		$this->codeValue = ($codeValue===NULL) ? NULL : $this->validateCodeValue($codeValue);
		$this->xmlLang = ($xmlLang===NULL) ? NULL : $this->validateXmlLang($xmlLang);
	}

	public function getName() {
		if ($this->name===NULL) {
			$this->name = $this->createName();
		}
		return $this->name;
	}
	
	protected function createName() {
		return new Stringnz();
	}

	public function setName($name) {
		$this->name = $this->validateName($name);
	}

	protected function validateName($name) {
		if ( ! $name instanceof Stringnz ) {
			$name = new Stringnz ($name);
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
		return new Stringnz();
	}

	public function setFamily($family) {
		$this->family = $this->validateFamily($family);
	}

	protected function validateFamily($family) {
		if ( ! $family instanceof Stringnz  && ! is_null($family) ) {
			$family = new Stringnz ($family);
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
		return new Stringnz();
	}

	public function setVersion($version) {
		$this->version = $this->validateVersion($version);
	}

	protected function validateVersion($version) {
		if ( ! $version instanceof Stringnz  && ! is_null($version) ) {
			$version = new Stringnz ($version);
		}
	
		return $version;
	}

	public function getCodeValue() {
		if ($this->codeValue===NULL) {
			$this->codeValue = $this->createCodeValue();
		}
		return $this->codeValue;
	}
	
	protected function createCodeValue() {
		return '';
	}

	public function setCodeValue($codeValue) {
		$this->codeValue = $this->validateCodeValue($codeValue);
	}

	protected function validateCodeValue($codeValue) {
		if ( ! is_string($codeValue) && ! is_null($codeValue) ) {
			throw new \Exception(sprintf('Supplied %s value was not %s', 'codeValue', 'string'));
		}
	
		return $codeValue;
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
} // end class VocabularyKey
