<?php
namespace com\microsoft\wc\thing\types;



/**
 * @XmlNamespaces ({
 *	@XmlNamespace(url="urn:com.microsoft.wc.thing.types", prefix="urn:com.microsoft.wc.thing.types")
 * })
 * @XmlEntity	(xml="codable-value")
 */
class CodableValue {
	/**
	 * CodableValue
	 * A value that may have codes from one or more MicrosoftHealth vocabularies associated with it.
	 * A codable value represents a value that may reference acoded value in one or more of the Microsoft Healthvocabularies. Though it does not require the value tobe in a vocabulary.For example, aerobic session data has a mode elementof type codable-value. Although many common forms ofaerobic session mode can be found in the MicrosoftHealth Lexicon using the 'aerobic-activities' vocabulary,not all possible activities can be found there. If theactivity does exist in the vocabulary it is recommendedthat applications add the coded-value for that code asa 'code' element and set the 'text' element to thedisplay value for that code. If the activity does notexist in the vocabulary the 'code' element should notbe specified and the 'text' element should contain thedata the user entered.By using the coded-value when available the data canbe easily localized by Microsoft HealthVault andcan also be utilized by applications that are mining thedata based on certain code values.
	 */

	/**
	 * List of manually overridden properties that should not be re-generated automatically
	 * @var array
	 */
	protected $_overrides = array();


	/**
	 * @XmlText	(type="string", name="text")
	 */
	protected $text;

	/**
	 * @XmlElement	(type="\com\microsoft\wc\types\CodedValue", collection="true", name="code")
	 */
	protected $code;

	public function __construct($text = NULL, $code = NULL) {
		$this->text = ($text===NULL) ? NULL : $this->validateText($text);
		$this->code = ($code===NULL) ? NULL : $this->validateCode($code);
	}

	public function getText($autoCreate = TRUE) {
		if ($this->text===NULL && $autoCreate && ! isset($this->_overrides['text']) ) {
			$this->text = $this->createText();
		}
		return $this->text;
	}
	
	protected function createText() {
		return '';
	}

	public function setText($text) {
		$this->text = $this->validateText($text);
	}

	protected function validateText($text) {
		if (!is_string($text)) {
			throw new \Exception(sprintf('Supplied %s value was not %s', 'text', 'string'));
		}
	
		return $text;
	}

	public function getCode($autoCreate = TRUE) {
		if ($this->code===NULL && $autoCreate && ! isset($this->_overrides['code']) ) {
			$this->code = $this->createCode();
		}
		return $this->code;
	}
	
	protected function createCode() {
		return array();
	}

	public function setCode($code) {
		$this->code = $this->validateCode($code);
	}

	protected function validateCode($code) {
		if ( $code === FALSE ) {
			$this->_overrides['code'] = TRUE;
			return NULL;
		}

		if ( ! is_array ($code) && ! is_null($code) ) {
			$code = array($code);
		}

		unset ($this->_overrides['code']);
		$count = count($code);
		if ($count < 0) {
			throw new \Exception(sprintf('Supplied %s array has less than the required number (%d) of entries.', 'code', 0));
		}
		foreach ($code as $entry) {
			if (!($entry instanceof CodedValue)) {
				throw new \Exception(sprintf('Supplied %s value was not %s', 'code', 'coded-value'));
			}
		}
	
		return $code;
	}

	public function addCode($code) {
		$this->code[] = $code;
	}
} // end class CodableValue
