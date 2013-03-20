<?php
namespace com\microsoft\wc\methods\response\SearchVocabulary;



/**
 * @XmlNamespaces ({
 *	@XmlNamespace(url="urn:com.microsoft.wc.methods.response.SearchVocabulary", prefix="")
 * })
 * @XmlEntity	(xml="info")
 */
class Info extends \com\microsoft\wc\methods\response\Info {
	/**
	 * Specifies the schema for the SearchVocabulary method response.
	 */

	/**
	 * @XmlElement	(type="\com\microsoft\wc\vocab\VocabularyKeyInfo", name="vocabulary-key")
	 */
	protected $vocabularyKey;

	/**
	 * @XmlElement	(type="\com\microsoft\wc\vocab\VocabularyCodeSet", name="code-set-result")
	 */
	protected $codeSetResult;

	public function __construct($vocabularyKey = NULL, $codeSetResult = NULL) {
		$this->vocabularyKey = ($vocabularyKey===NULL) ? NULL : $this->validateVocabularyKey($vocabularyKey);
		$this->codeSetResult = ($codeSetResult===NULL) ? NULL : $this->validateCodeSetResult($codeSetResult);
	}

	public function getVocabularyKey() {
		if ($this->vocabularyKey===NULL) {
			$this->vocabularyKey = $this->createVocabularyKey();
		}
		return $this->vocabularyKey;
	}
	
	protected function createVocabularyKey() {
		return new \com\microsoft\wc\vocab\VocabularyKeyInfo();
	}

	public function setVocabularyKey($vocabularyKey) {
		$this->vocabularyKey = $this->validateVocabularyKey($vocabularyKey);
	}

	protected function validateVocabularyKey($vocabularyKey) {
		if ( ! $vocabularyKey instanceof \com\microsoft\wc\vocab\VocabularyKeyInfo ) {
			$vocabularyKey = new \com\microsoft\wc\vocab\VocabularyKeyInfo ($vocabularyKey);
		}
	
		return $vocabularyKey;
	}

	public function getCodeSetResult() {
		if ($this->codeSetResult===NULL) {
			$this->codeSetResult = $this->createCodeSetResult();
		}
		return $this->codeSetResult;
	}
	
	protected function createCodeSetResult() {
		return new \com\microsoft\wc\vocab\VocabularyCodeSet();
	}

	public function setCodeSetResult($codeSetResult) {
		$this->codeSetResult = $this->validateCodeSetResult($codeSetResult);
	}

	protected function validateCodeSetResult($codeSetResult) {
		if ( ! $codeSetResult instanceof \com\microsoft\wc\vocab\VocabularyCodeSet ) {
			$codeSetResult = new \com\microsoft\wc\vocab\VocabularyCodeSet ($codeSetResult);
		}
	
		return $codeSetResult;
	}
} // end class Info
