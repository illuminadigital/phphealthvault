<?php
namespace hl7_org\v3;



/**
 * @XmlNamespaces ({
 *	@XmlNamespace(url="urn:hl7-org:v3", prefix="")
 * })
 * @XmlEntity	(xml="SC")
 */
class SC extends \org\w3\www\_2001\XMLSchema\ST {
	/**
	 * A ST that optionally may have a code attached. The text must always be present if a code is present. The code is often a local code.
	 */

	/**
	 * List of manually overridden properties that should not be re-generated automatically
	 * @var array
	 */
	protected $_overrides = array();


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

	public function __construct($code = NULL, $codeSystem = NULL, $codeSystemName = NULL, $codeSystemVersion = NULL, $displayName = NULL) {
		$this->code = ($code===NULL) ? NULL : $this->validateCode($code);
		$this->codeSystem = ($codeSystem===NULL) ? NULL : $this->validateCodeSystem($codeSystem);
		$this->codeSystemName = ($codeSystemName===NULL) ? NULL : $this->validateCodeSystemName($codeSystemName);
		$this->codeSystemVersion = ($codeSystemVersion===NULL) ? NULL : $this->validateCodeSystemVersion($codeSystemVersion);
		$this->displayName = ($displayName===NULL) ? NULL : $this->validateDisplayName($displayName);
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
} // end class SC
