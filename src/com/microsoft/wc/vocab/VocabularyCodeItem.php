<?php
namespace com\microsoft\wc\vocab;



/**
 * @XmlNamespaces ({
 *	@XmlNamespace(url="urn:com.microsoft.wc.vocab", prefix="wc-vocab")
 * })
 * @XmlEntity	(xml="VocabularyCodeItem")
 */
class VocabularyCodeItem {
	/**
	 * Describes an indivdual code item.
	 * A code item is a unit member of a vocabulary.
	 */

	/**
	 * List of manually overridden properties that should not be re-generated automatically
	 * @var array
	 */
	protected $_overrides = array();


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
	 * @XmlElement	(type="\com\microsoft\wc\vocab\InfoXml", name="info-xml")
	 */
	protected $infoXml;

	public function __construct($codeValue = NULL, $displayText = NULL, $abbreviationText = NULL, $infoXml = NULL) {
		$this->codeValue = ($codeValue===NULL) ? NULL : $this->validateCodeValue($codeValue);
		$this->displayText = ($displayText===NULL) ? NULL : $this->validateDisplayText($displayText);
		$this->abbreviationText = ($abbreviationText===NULL) ? NULL : $this->validateAbbreviationText($abbreviationText);
		$this->infoXml = ($infoXml===NULL) ? NULL : $this->validateInfoXml($infoXml);
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
		if (!is_string($codeValue)) {
			throw new \Exception(sprintf('Supplied %s value was not %s', 'codeValue', 'string'));
		}
	
		return $codeValue;
	}

	public function getDisplayText($autoCreate = TRUE) {
		if ($this->displayText===NULL && $autoCreate && ! isset($this->_overrides['displayText']) ) {
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
		if ( ! is_string($displayText) && ! is_null($displayText) ) {
			throw new \Exception(sprintf('Supplied %s value was not %s', 'displayText', 'string'));
		}
	
		return $displayText;
	}

	public function getAbbreviationText($autoCreate = TRUE) {
		if ($this->abbreviationText===NULL && $autoCreate && ! isset($this->_overrides['abbreviationText']) ) {
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
		if ( ! is_string($abbreviationText) && ! is_null($abbreviationText) ) {
			throw new \Exception(sprintf('Supplied %s value was not %s', 'abbreviationText', 'string'));
		}
	
		return $abbreviationText;
	}

	public function getInfoXml($autoCreate = TRUE) {
		if ($this->infoXml===NULL && $autoCreate && ! isset($this->_overrides['infoXml']) ) {
			$this->infoXml = $this->createInfoXml();
		}
		return $this->infoXml;
	}
	
	protected function createInfoXml() {
		return new \com\microsoft\wc\vocab\InfoXml();
	}

	public function setInfoXml($infoXml) {
		$this->infoXml = $this->validateInfoXml($infoXml);
	}

	protected function validateInfoXml($infoXml) {
		if ( $infoXml === FALSE ) {
			$this->_overrides['infoXml'] = TRUE;
			return NULL;
		}

		if ( ! $infoXml instanceof \com\microsoft\wc\vocab\InfoXml  && ! is_null($infoXml) ) {
			$infoXml = new \com\microsoft\wc\vocab\InfoXml ($infoXml);
		}

		unset ($this->_overrides['infoXml']);
	
		return $infoXml;
	}
} // end class VocabularyCodeItem
