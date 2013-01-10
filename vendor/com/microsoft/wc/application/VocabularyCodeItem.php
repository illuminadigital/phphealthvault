<?php
namespace com\microsoft\wc\application;

use com\microsoft\wc\application\InfoXml;

/**
 * @XmlNamespaces ({
 *	@XmlNamespace(url="urn:com.microsoft.wc.application", prefix="wc-app")
 * })
 * @XmlEntity	(xml="VocabularyCodeItem")
 */
class VocabularyCodeItem {
	/**
	 * Describes an indivdual code item.
	 * A code item is a unit member of a vocabulary.
	 */

	/**
	 * @XmlText	(type="string", name="code-value")
	 */
	protected $codeValue;

	/**
	 * @XmlText	(type="string", name="display-text")
	 */
	protected $displayText;

	/**
	 * @XmlText	(type="string", name="abbreviation-text")
	 */
	protected $abbreviationText;

	/**
	 * @XmlElement	(type="\com\microsoft\wc\application\InfoXml", name="info-xml")
	 */
	protected $infoXml;

	public function __construct($codeValue = NULL, $displayText = NULL, $abbreviationText = NULL, $infoXml = NULL) {
		$this->codeValue = ($codeValue===NULL) ? NULL : $this->validateCodeValue($codeValue);
		$this->displayText = ($displayText===NULL) ? NULL : $this->validateDisplayText($displayText);
		$this->abbreviationText = ($abbreviationText===NULL) ? NULL : $this->validateAbbreviationText($abbreviationText);
		$this->infoXml = ($infoXml===NULL) ? NULL : $this->validateInfoXml($infoXml);
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
		if (!is_string($codeValue)) {
			throw new \Exception(sprintf('Supplied %s value was not %s', 'codeValue', 'string'));
		}
	
		return $codeValue;
	}

	public function getDisplayText() {
		if ($this->displayText===NULL) {
			$this->displayText = $this->createDisplayText();
		}
		return $this->displayText;
	}
	
	protected function createDisplayText() {
		return '';
	}

	public function setDisplayText($displayText) {
		$this->displayText = $this->validateDisplayText($displayText);
	}

	protected function validateDisplayText($displayText) {
		if (!is_string($displayText)) {
			throw new \Exception(sprintf('Supplied %s value was not %s', 'displayText', 'string'));
		}
	
		return $displayText;
	}

	public function getAbbreviationText() {
		if ($this->abbreviationText===NULL) {
			$this->abbreviationText = $this->createAbbreviationText();
		}
		return $this->abbreviationText;
	}
	
	protected function createAbbreviationText() {
		return '';
	}

	public function setAbbreviationText($abbreviationText) {
		$this->abbreviationText = $this->validateAbbreviationText($abbreviationText);
	}

	protected function validateAbbreviationText($abbreviationText) {
		if (!is_string($abbreviationText)) {
			throw new \Exception(sprintf('Supplied %s value was not %s', 'abbreviationText', 'string'));
		}
	
		return $abbreviationText;
	}

	public function getInfoXml() {
		if ($this->infoXml===NULL) {
			$this->infoXml = $this->createInfoXml();
		}
		return $this->infoXml;
	}
	
	protected function createInfoXml() {
		return new InfoXml();
	}

	public function setInfoXml($infoXml) {
		$this->infoXml = $this->validateInfoXml($infoXml);
	}

	protected function validateInfoXml($infoXml) {
		if ( ! $infoXml instanceof InfoXml ) {
			$infoXml = new InfoXml ($infoXml);
		}
	
		return $infoXml;
	}
} // end class VocabularyCodeItem
