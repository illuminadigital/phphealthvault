<?php
namespace hl7_org\v3;



/**
 * @XmlNamespaces ({
 *	@XmlNamespace(url="urn:hl7-org:v3", prefix="")
 * })
 * @XmlEntity	(xml="SC")
 */
class SC extends \ST\ST {
	/**
	 * A ST that optionally may have a code attached. The text must always be present if a code is present. The code is often a local code.
	 */

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
} // end class SC
