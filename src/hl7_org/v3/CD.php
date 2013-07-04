<?php
namespace hl7_org\v3;



/**
 * @XmlNamespaces ({
 *	@XmlNamespace(url="urn:hl7-org:v3", prefix="")
 * })
 * @XmlEntity	(xml="CD")
 */
class CD extends \org\w3\www\_2001\XMLSchema\ANY {
	/**
	 * A concept descriptor represents any kind of concept usuallyby giving a code defined in a code system. A conceptdescriptor can contain the original text or phrase thatserved as the basis of the coding and one or moretranslations into different coding systems. A conceptdescriptor can also contain qualifiers to describe, e.g.,the concept of a "left foot" as a postcoordinated term builtfrom the primary code "FOOT" and the qualifier "LEFT".In exceptional cases, the concept descriptor need notcontain a code but only the original text describingthat concept.
	 */

	/**
	 * List of manually overridden properties that should not be re-generated automatically
	 * @var array
	 */
	protected $_overrides = array();


	/**
	 * @XmlElement	(type="\org\w3\www\_2001\XMLSchema\ED", name="originalText")
	 */
	protected $originalText;

	/**
	 * @XmlElement	(type="\org\w3\www\_2001\XMLSchema\CR", collection="true", name="qualifier")
	 */
	protected $qualifier;

	/**
	 * @XmlElement	(type="\org\w3\www\_2001\XMLSchema\CD", collection="true", name="translation")
	 */
	protected $translation;

	/**
	 * @XmlAttribute	(type="string", name="code")
	 */
	protected $code;

	/**
	 * @XmlAttribute	(type="string", name="codeSystem")
	 */
	protected $codeSystem;

	/**
	 * @XmlAttribute	(type="string", name="codeSystemName")
	 */
	protected $codeSystemName;

	/**
	 * @XmlAttribute	(type="string", name="codeSystemVersion")
	 */
	protected $codeSystemVersion;

	/**
	 * @XmlAttribute	(type="string", name="displayName")
	 */
	protected $displayName;

	public function __construct($originalText = NULL, $qualifier = NULL, $translation = NULL, $code = NULL, $codeSystem = NULL, $codeSystemName = NULL, $codeSystemVersion = NULL, $displayName = NULL) {
		$this->originalText = ($originalText===NULL) ? NULL : $this->validateOriginalText($originalText);
		$this->qualifier = ($qualifier===NULL) ? NULL : $this->validateQualifier($qualifier);
		$this->translation = ($translation===NULL) ? NULL : $this->validateTranslation($translation);
		$this->code = ($code===NULL) ? NULL : $this->validateCode($code);
		$this->codeSystem = ($codeSystem===NULL) ? NULL : $this->validateCodeSystem($codeSystem);
		$this->codeSystemName = ($codeSystemName===NULL) ? NULL : $this->validateCodeSystemName($codeSystemName);
		$this->codeSystemVersion = ($codeSystemVersion===NULL) ? NULL : $this->validateCodeSystemVersion($codeSystemVersion);
		$this->displayName = ($displayName===NULL) ? NULL : $this->validateDisplayName($displayName);
	}

	public function getOriginalText($autoCreate = TRUE) {
		if ($this->originalText===NULL && $autoCreate && ! isset($this->_overrides['originalText']) ) {
			$this->originalText = $this->createOriginalText();
		}
		return $this->originalText;
	}
	
	protected function createOriginalText() {
		return NULL;
	}

	public function setOriginalText($originalText) {
		$this->originalText = $this->validateOriginalText($originalText);
	}

	protected function validateOriginalText($originalText) {
	
		return $originalText;
	}

	public function getQualifier($autoCreate = TRUE) {
		if ($this->qualifier===NULL && $autoCreate && ! isset($this->_overrides['qualifier']) ) {
			$this->qualifier = $this->createQualifier();
		}
		return $this->qualifier;
	}
	
	protected function createQualifier() {
		return array();
	}

	public function setQualifier($qualifier) {
		$this->qualifier = $this->validateQualifier($qualifier);
	}

	protected function validateQualifier($qualifier) {
		$count = count($qualifier);
		if ($count < 0) {
			throw new \Exception(sprintf('Supplied %s array has less than the required number (%d) of entries.', 'qualifier', 0));
		}
		if ( ! empty($qualifier) ) {
			foreach ($qualifier as $entry) {
			}
		}
	
		return $qualifier;
	}

	public function addQualifier($qualifier) {
		$this->qualifier[] = $this->validateQualifierType($qualifier);
	}

	protected function validateQualifierType($qualifier) {
	
		return $qualifier;
	}

	public function getTranslation($autoCreate = TRUE) {
		if ($this->translation===NULL && $autoCreate && ! isset($this->_overrides['translation']) ) {
			$this->translation = $this->createTranslation();
		}
		return $this->translation;
	}
	
	protected function createTranslation() {
		return array();
	}

	public function setTranslation($translation) {
		$this->translation = $this->validateTranslation($translation);
	}

	protected function validateTranslation($translation) {
		$count = count($translation);
		if ($count < 0) {
			throw new \Exception(sprintf('Supplied %s array has less than the required number (%d) of entries.', 'translation', 0));
		}
		if ( ! empty($translation) ) {
			foreach ($translation as $entry) {
			}
		}
	
		return $translation;
	}

	public function addTranslation($translation) {
		$this->translation[] = $this->validateTranslationType($translation);
	}

	protected function validateTranslationType($translation) {
	
		return $translation;
	}

	public function getCode($autoCreate = TRUE) {
		if ($this->code===NULL && $autoCreate && ! isset($this->_overrides['code']) ) {
			$this->code = $this->createCode();
		}
		return $this->code;
	}
	
	protected function createCode() {
		return NULL;
	}

	public function setCode($code) {
		$this->code = $this->validateCode($code);
	}

	protected function validateCode($code) {
	
		return $code;
	}

	public function getCodeSystem($autoCreate = TRUE) {
		if ($this->codeSystem===NULL && $autoCreate && ! isset($this->_overrides['codeSystem']) ) {
			$this->codeSystem = $this->createCodeSystem();
		}
		return $this->codeSystem;
	}
	
	protected function createCodeSystem() {
		return NULL;
	}

	public function setCodeSystem($codeSystem) {
		$this->codeSystem = $this->validateCodeSystem($codeSystem);
	}

	protected function validateCodeSystem($codeSystem) {
	
		return $codeSystem;
	}

	public function getCodeSystemName($autoCreate = TRUE) {
		if ($this->codeSystemName===NULL && $autoCreate && ! isset($this->_overrides['codeSystemName']) ) {
			$this->codeSystemName = $this->createCodeSystemName();
		}
		return $this->codeSystemName;
	}
	
	protected function createCodeSystemName() {
		return NULL;
	}

	public function setCodeSystemName($codeSystemName) {
		$this->codeSystemName = $this->validateCodeSystemName($codeSystemName);
	}

	protected function validateCodeSystemName($codeSystemName) {
	
		return $codeSystemName;
	}

	public function getCodeSystemVersion($autoCreate = TRUE) {
		if ($this->codeSystemVersion===NULL && $autoCreate && ! isset($this->_overrides['codeSystemVersion']) ) {
			$this->codeSystemVersion = $this->createCodeSystemVersion();
		}
		return $this->codeSystemVersion;
	}
	
	protected function createCodeSystemVersion() {
		return NULL;
	}

	public function setCodeSystemVersion($codeSystemVersion) {
		$this->codeSystemVersion = $this->validateCodeSystemVersion($codeSystemVersion);
	}

	protected function validateCodeSystemVersion($codeSystemVersion) {
	
		return $codeSystemVersion;
	}

	public function getDisplayName($autoCreate = TRUE) {
		if ($this->displayName===NULL && $autoCreate && ! isset($this->_overrides['displayName']) ) {
			$this->displayName = $this->createDisplayName();
		}
		return $this->displayName;
	}
	
	protected function createDisplayName() {
		return NULL;
	}

	public function setDisplayName($displayName) {
		$this->displayName = $this->validateDisplayName($displayName);
	}

	protected function validateDisplayName($displayName) {
	
		return $displayName;
	}
} // end class CD
