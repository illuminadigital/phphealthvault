<?php
namespace com\microsoft\wc\methods\response\SearchVocabulary;

use com\microsoft\wc\vocab\VocabularyCodeSet;
use com\microsoft\wc\vocab\VocabularyKeyInfo;

/**
 * @XmlEntity	(xml="info")
 */
class Info {
	/**
	 * Specifies the schema for the SearchVocabulary method response.
	 */

	/**
	 * @XmlElement	(type="\com\microsoft\wc\vocab\VocabularyKeyInfo", collection="true", name="vocabulary-key")
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
		return array();
	}

	public function setVocabularyKey($vocabularyKey) {
		$this->vocabularyKey = $this->validateVocabularyKey($vocabularyKey);
	}

	protected function validateVocabularyKey($vocabularyKey) {
		if ( ! $vocabularyKey instanceof VocabularyKeyInfo  && ! is_null($vocabularyKey) ) {
			$vocabularyKey = new VocabularyKeyInfo ($vocabularyKey);
		}
		$count = count($vocabularyKey);
		if ($count < 0) {
			throw new \Exception(sprintf('Supplied %s array has less than the required number (%d) of entries.', 'vocabularyKey', 0));
		}
		foreach ($vocabularyKey as $entry) {
			if (!($entry instanceof VocabularyKeyInfo)) {
				throw new \Exception(sprintf('Supplied %s value was not %s', 'vocabularyKey', 'VocabularyKeyInfo'));
			}
		}
	
		return $vocabularyKey;
	}

	public function addVocabularyKey($vocabularyKey) {
		$this->vocabularyKey[] = $vocabularyKey;
	}

	public function getCodeSetResult() {
		if ($this->codeSetResult===NULL) {
			$this->codeSetResult = $this->createCodeSetResult();
		}
		return $this->codeSetResult;
	}
	
	protected function createCodeSetResult() {
		return new VocabularyCodeSet();
	}

	public function setCodeSetResult($codeSetResult) {
		$this->codeSetResult = $this->validateCodeSetResult($codeSetResult);
	}

	protected function validateCodeSetResult($codeSetResult) {
		if ( ! $codeSetResult instanceof VocabularyCodeSet ) {
			$codeSetResult = new VocabularyCodeSet ($codeSetResult);
		}
	
		return $codeSetResult;
	}
} // end class Info