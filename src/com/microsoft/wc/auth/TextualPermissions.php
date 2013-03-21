<?php
namespace com\microsoft\wc\auth;



/**
 * @XmlNamespaces ({
 *	@XmlNamespace(url="urn:com.microsoft.wc.auth", prefix="wc-auth")
 * })
 * @XmlEntity	(xml="TextualPermissions")
 */
class TextualPermissions {
	/**
	 */

	/**
	 * List of manually overridden properties that should not be re-generated automatically
	 * @var array
	 */
	protected $_overrides = array();


	/**
	 * @XmlElement	(type="\com\microsoft\wc\auth\TextualPermissionsType", name="textual-permissions-type")
	 */
	protected $textualPermissionsType;

	/**
	 * @XmlElement	(type="\com\microsoft\wc\auth\TextualRule", name="textual-rule")
	 */
	protected $textualRule;

	public function __construct($textualPermissionsType = NULL, $textualRule = NULL) {
		$this->textualPermissionsType = ($textualPermissionsType===NULL) ? NULL : $this->validateTextualPermissionsType($textualPermissionsType);
		$this->textualRule = ($textualRule===NULL) ? NULL : $this->validateTextualRule($textualRule);
	}

	public function getTextualPermissionsType($autoCreate = TRUE) {
		if ($this->textualPermissionsType===NULL && $autoCreate && ! isset($this->_overrides['textualPermissionsType']) ) {
			$this->textualPermissionsType = $this->createTextualPermissionsType();
		}
		return $this->textualPermissionsType;
	}
	
	protected function createTextualPermissionsType() {
		return new \com\microsoft\wc\auth\TextualPermissionsType();
	}

	public function setTextualPermissionsType($textualPermissionsType) {
		$this->textualPermissionsType = $this->validateTextualPermissionsType($textualPermissionsType);
	}

	protected function validateTextualPermissionsType($textualPermissionsType) {
		if ( ! $textualPermissionsType instanceof \com\microsoft\wc\auth\TextualPermissionsType ) {
			$textualPermissionsType = new \com\microsoft\wc\auth\TextualPermissionsType ($textualPermissionsType);
		}
	
		return $textualPermissionsType;
	}

	public function getTextualRule($autoCreate = TRUE) {
		if ($this->textualRule===NULL && $autoCreate && ! isset($this->_overrides['textualRule']) ) {
			$this->textualRule = $this->createTextualRule();
		}
		return $this->textualRule;
	}
	
	protected function createTextualRule() {
		return new \com\microsoft\wc\auth\TextualRule();
	}

	public function setTextualRule($textualRule) {
		$this->textualRule = $this->validateTextualRule($textualRule);
	}

	protected function validateTextualRule($textualRule) {
		if ( ! $textualRule instanceof \com\microsoft\wc\auth\TextualRule ) {
			$textualRule = new \com\microsoft\wc\auth\TextualRule ($textualRule);
		}
	
		return $textualRule;
	}
} // end class TextualPermissions
