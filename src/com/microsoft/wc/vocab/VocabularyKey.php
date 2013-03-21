<?php
namespace com\microsoft\wc\vocab;



/**
 * @XmlNamespaces ({
 *	@XmlNamespace(url="urn:com.microsoft.wc.vocab", prefix="wc-vocab")
 * })
 * @XmlEntity	(xml="VocabularyKey")
 */
class VocabularyKey {
	/**
	 * Used to uniquely identify a specific vocabulary in the system.
	 * Information about supported vocabularies can be obtained though the partner labs site.
	 */

	/**
	 * List of manually overridden properties that should not be re-generated automatically
	 * @var array
	 */
	protected $_overrides = array();


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

	public function getName($autoCreate = TRUE) {
		if ($this->name===NULL && $autoCreate && ! isset($this->_overrides['name']) ) {
			$this->name = $this->createName();
		}
		return $this->name;
	}
	
	protected function createName() {
		return new \com\microsoft\wc\types\Stringnz();
	}

	public function setName($name) {
		$this->name = $this->validateName($name);
	}

	protected function validateName($name) {
		if ( ! $name instanceof \com\microsoft\wc\types\Stringnz ) {
			$name = new \com\microsoft\wc\types\Stringnz ($name);
		}
	
		return $name;
	}

	public function getFamily($autoCreate = TRUE) {
		if ($this->family===NULL && $autoCreate && ! isset($this->_overrides['family']) ) {
			$this->family = $this->createFamily();
		}
		return $this->family;
	}
	
	protected function createFamily() {
		return new \com\microsoft\wc\types\Stringnz();
	}

	public function setFamily($family) {
		$this->family = $this->validateFamily($family);
	}

	protected function validateFamily($family) {
		if ( $family === FALSE ) {
			$this->_overrides['family'] = TRUE;
			return NULL;
		}

		if ( ! $family instanceof \com\microsoft\wc\types\Stringnz  && ! is_null($family) ) {
			$family = new \com\microsoft\wc\types\Stringnz ($family);
		}

		unset ($this->_overrides['family']);
	
		return $family;
	}

	public function getVersion($autoCreate = TRUE) {
		if ($this->version===NULL && $autoCreate && ! isset($this->_overrides['version']) ) {
			$this->version = $this->createVersion();
		}
		return $this->version;
	}
	
	protected function createVersion() {
		return new \com\microsoft\wc\types\Stringnz();
	}

	public function setVersion($version) {
		$this->version = $this->validateVersion($version);
	}

	protected function validateVersion($version) {
		if ( $version === FALSE ) {
			$this->_overrides['version'] = TRUE;
			return NULL;
		}

		if ( ! $version instanceof \com\microsoft\wc\types\Stringnz  && ! is_null($version) ) {
			$version = new \com\microsoft\wc\types\Stringnz ($version);
		}

		unset ($this->_overrides['version']);
	
		return $version;
	}

	public function getCodeValue($autoCreate = TRUE) {
		if ($this->codeValue===NULL && $autoCreate && ! isset($this->_overrides['codeValue']) ) {
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

	public function getXmlLang($autoCreate = TRUE) {
		if ($this->xmlLang===NULL && $autoCreate && ! isset($this->_overrides['xmlLang']) ) {
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
