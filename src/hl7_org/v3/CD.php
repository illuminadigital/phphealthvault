<?php
namespace hl7_org\v3;



/**
 * @XmlNamespaces ({
 *	@XmlNamespace(url="urn:hl7-org:v3", prefix="")
 * })
 * @XmlEntity	(xml="CD")
 */
class CD extends \ANY\ANY {
	/**
	 * A concept descriptor represents any kind of concept usually by giving a code defined in a code system. A concept descriptor can contain the original text or phrase that served as the basis of the coding and one or more translations into different coding systems. A concept descriptor can also contain qualifiers to describe, e.g., the concept of a "left foot" as a postcoordinated term built from the primary code "FOOT" and the qualifier "LEFT". In exceptional cases, the concept descriptor need not contain a code but only the original text describing that concept.
	 */

	/**
	 * @XmlElement	(type="\hl7_org\v3\ED", name="originalText")
	 */
	protected $originalText;

	/**
	 * @XmlElement	(type="\hl7_org\v3\CR", collection="true", name="qualifier")
	 */
	protected $qualifier;

	/**
	 * @XmlElement	(type="\hl7_org\v3\CD", collection="true", name="translation")
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

	public function getOriginalText() {
		if ($this->originalText===NULL) {
			$this->originalText = $this->createOriginalText();
		}
		return $this->originalText;
	}
	
	protected function createOriginalText() {
		return new \hl7_org\v3\ED();
	}

	public function setOriginalText($originalText) {
		$this->originalText = $this->validateOriginalText($originalText);
	}

	protected function validateOriginalText($originalText) {
		if ( ! $originalText instanceof \hl7_org\v3\ED  && ! is_null($originalText) ) {
			$originalText = new \hl7_org\v3\ED ($originalText);
		}
	
		return $originalText;
	}

	public function getQualifier() {
		if ($this->qualifier===NULL) {
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
		if ( ! $qualifier instanceof \hl7_org\v3\CR  && ! is_null($qualifier) ) {
			$qualifier = new \hl7_org\v3\CR ($qualifier);
		}
		$count = count($qualifier);
		if ($count < 0) {
			throw new \Exception(sprintf('Supplied %s array has less than the required number (%d) of entries.', 'qualifier', 0));
		}
		foreach ($qualifier as $entry) {
			if (!($entry instanceof CR)) {
				throw new \Exception(sprintf('Supplied %s value was not %s', 'qualifier', 'CR'));
			}
		}
	
		return $qualifier;
	}

	public function addQualifier($qualifier) {
		$this->qualifier[] = $qualifier;
	}

	public function getTranslation() {
		if ($this->translation===NULL) {
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
		if ( ! $translation instanceof \hl7_org\v3\CD  && ! is_null($translation) ) {
			$translation = new \hl7_org\v3\CD ($translation);
		}
		$count = count($translation);
		if ($count < 0) {
			throw new \Exception(sprintf('Supplied %s array has less than the required number (%d) of entries.', 'translation', 0));
		}
		foreach ($translation as $entry) {
			if (!($entry instanceof CD)) {
				throw new \Exception(sprintf('Supplied %s value was not %s', 'translation', 'CD'));
			}
		}
	
		return $translation;
	}

	public function addTranslation($translation) {
		$this->translation[] = $translation;
	}

	public function getCode() {
		if ($this->code===NULL) {
			$this->code = $this->createCode();
		}
		return $this->code;
	}
	
	protected function createCode() {
		return new \hl7_org\v3\Cs();
	}

	public function setCode($code) {
		$this->code = $this->validateCode($code);
	}

	protected function validateCode($code) {
		if ( ! $code instanceof \hl7_org\v3\Cs  && ! is_null($code) ) {
			$code = new \hl7_org\v3\Cs ($code);
		}
	
		return $code;
	}

	public function getCodeSystem() {
		if ($this->codeSystem===NULL) {
			$this->codeSystem = $this->createCodeSystem();
		}
		return $this->codeSystem;
	}
	
	protected function createCodeSystem() {
		return new \hl7_org\v3\Uid();
	}

	public function setCodeSystem($codeSystem) {
		$this->codeSystem = $this->validateCodeSystem($codeSystem);
	}

	protected function validateCodeSystem($codeSystem) {
		if ( ! $codeSystem instanceof \hl7_org\v3\Uid  && ! is_null($codeSystem) ) {
			$codeSystem = new \hl7_org\v3\Uid ($codeSystem);
		}
	
		return $codeSystem;
	}

	public function getCodeSystemName() {
		if ($this->codeSystemName===NULL) {
			$this->codeSystemName = $this->createCodeSystemName();
		}
		return $this->codeSystemName;
	}
	
	protected function createCodeSystemName() {
		return new \hl7_org\v3\St();
	}

	public function setCodeSystemName($codeSystemName) {
		$this->codeSystemName = $this->validateCodeSystemName($codeSystemName);
	}

	protected function validateCodeSystemName($codeSystemName) {
		if ( ! $codeSystemName instanceof \hl7_org\v3\St  && ! is_null($codeSystemName) ) {
			$codeSystemName = new \hl7_org\v3\St ($codeSystemName);
		}
	
		return $codeSystemName;
	}

	public function getCodeSystemVersion() {
		if ($this->codeSystemVersion===NULL) {
			$this->codeSystemVersion = $this->createCodeSystemVersion();
		}
		return $this->codeSystemVersion;
	}
	
	protected function createCodeSystemVersion() {
		return new \hl7_org\v3\St();
	}

	public function setCodeSystemVersion($codeSystemVersion) {
		$this->codeSystemVersion = $this->validateCodeSystemVersion($codeSystemVersion);
	}

	protected function validateCodeSystemVersion($codeSystemVersion) {
		if ( ! $codeSystemVersion instanceof \hl7_org\v3\St  && ! is_null($codeSystemVersion) ) {
			$codeSystemVersion = new \hl7_org\v3\St ($codeSystemVersion);
		}
	
		return $codeSystemVersion;
	}

	public function getDisplayName() {
		if ($this->displayName===NULL) {
			$this->displayName = $this->createDisplayName();
		}
		return $this->displayName;
	}
	
	protected function createDisplayName() {
		return new \hl7_org\v3\St();
	}

	public function setDisplayName($displayName) {
		$this->displayName = $this->validateDisplayName($displayName);
	}

	protected function validateDisplayName($displayName) {
		if ( ! $displayName instanceof \hl7_org\v3\St  && ! is_null($displayName) ) {
			$displayName = new \hl7_org\v3\St ($displayName);
		}
	
		return $displayName;
	}
} // end class CD
