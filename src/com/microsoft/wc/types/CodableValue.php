<?php
namespace com\microsoft\wc\types;



/**
 * @XmlNamespaces ({
 *	@XmlNamespace(url="urn:com.microsoft.wc.types", prefix="t")
 * })
 * @XmlEntity	(xml="codable-value")
 */
class CodableValue {
	/**
	 * A value that may have codes from one or more Microsoft Health vocabularies associated with it.
	 * A codable value represents a value that may reference a coded value in one or more of the Microsoft Health vocabularies. Though it does not require the value to be in a vocabulary. For example, aerobic session data has a mode element of type codable-value. Although many common forms of aerobic session mode can be found in the Microsoft Health Lexicon using the 'aerobic-activities' vocabulary, not all possible activities can be found there. If the activity does exist in the vocabulary it is recommended that applications add the coded-value for that code as a 'code' element and set the 'text' element to the display value for that code. If the activity does not exist in the vocabulary the 'code' element should not be specified and the 'text' element should contain the data the user entered. By using the coded-value when available the data can be easily localized by Microsoft HealthVault and can also be utilized by applications that are mining the data based on certain code values.
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
		if ( ! empty($code) ) {
			foreach ($code as $entry) {
				if (!($entry instanceof \com\microsoft\wc\types\CodedValue )) {
					throw new \Exception(sprintf('Supplied %s value was not %s', 'code', 'coded-value'));
				}
			}
		}
	
		return $code;
	}

	public function addCode($code) {
		$this->code[] = $code;
	}
} // end class CodableValue
