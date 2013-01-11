<?php
namespace com\microsoft\wc\application;

use com\microsoft\wc\application\TextualPermissionsType;
use com\microsoft\wc\application\TextualRule;

/**
 * @XmlEntity	(xml="TextualPermissions")
 */
class TextualPermissions {
	/**
	 */

	/**
	 * @XmlElement	(type="\com\microsoft\wc\application\TextualPermissionsType", name="textual-permissions-type")
	 */
	protected $textualPermissionsType;

	/**
	 * @XmlElement	(type="\com\microsoft\wc\application\TextualRule", name="textual-rule")
	 */
	protected $textualRule;

	public function __construct($textualPermissionsType = NULL, $textualRule = NULL) {
		$this->textualPermissionsType = ($textualPermissionsType===NULL) ? NULL : $this->validateTextualPermissionsType($textualPermissionsType);
		$this->textualRule = ($textualRule===NULL) ? NULL : $this->validateTextualRule($textualRule);
	}

	public function getTextualPermissionsType() {
		if ($this->textualPermissionsType===NULL) {
			$this->textualPermissionsType = $this->createTextualPermissionsType();
		}
		return $this->textualPermissionsType;
	}
	
	protected function createTextualPermissionsType() {
		return new TextualPermissionsType();
	}

	public function setTextualPermissionsType($textualPermissionsType) {
		$this->textualPermissionsType = $this->validateTextualPermissionsType($textualPermissionsType);
	}

	protected function validateTextualPermissionsType($textualPermissionsType) {
		if ( ! $textualPermissionsType instanceof TextualPermissionsType ) {
			$textualPermissionsType = new TextualPermissionsType ($textualPermissionsType);
		}
	
		return $textualPermissionsType;
	}

	public function getTextualRule() {
		if ($this->textualRule===NULL) {
			$this->textualRule = $this->createTextualRule();
		}
		return $this->textualRule;
	}
	
	protected function createTextualRule() {
		return new TextualRule();
	}

	public function setTextualRule($textualRule) {
		$this->textualRule = $this->validateTextualRule($textualRule);
	}

	protected function validateTextualRule($textualRule) {
		if ( ! $textualRule instanceof TextualRule ) {
			$textualRule = new TextualRule ($textualRule);
		}
	
		return $textualRule;
	}
} // end class TextualPermissions
