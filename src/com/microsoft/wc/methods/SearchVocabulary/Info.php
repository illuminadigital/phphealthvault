<?php
namespace com\microsoft\wc\methods\SearchVocabulary;

use com\microsoft\wc\vocab\VocabularyKey;
use com\microsoft\wc\methods\SearchVocabulary\VocabularySearchParams;

/**
 * @XmlEntity	(xml="info")
 */
class Info extends \com\microsoft\wc\request\Info {
	/**
	 * The element of the request that contains the method specific parameters.
	 */

	/**
	 * @XmlElement	(type="\com\microsoft\wc\vocab\VocabularyKey", name="vocabulary-key")
	 */
	protected $vocabularyKey;

	/**
	 * @XmlElement	(type="\com\microsoft\wc\methods\SearchVocabulary\VocabularySearchParams", name="text-search-parameters")
	 */
	protected $textSearchParameters;

	public function __construct($vocabularyKey = NULL, $textSearchParameters = NULL) {
		$this->vocabularyKey = ($vocabularyKey===NULL) ? NULL : $this->validateVocabularyKey($vocabularyKey);
		$this->textSearchParameters = ($textSearchParameters===NULL) ? NULL : $this->validateTextSearchParameters($textSearchParameters);
	}

	public function getVocabularyKey() {
		if ($this->vocabularyKey===NULL) {
			$this->vocabularyKey = $this->createVocabularyKey();
		}
		return $this->vocabularyKey;
	}
	
	protected function createVocabularyKey() {
		return new VocabularyKey();
	}

	public function setVocabularyKey($vocabularyKey) {
		$this->vocabularyKey = $this->validateVocabularyKey($vocabularyKey);
	}

	protected function validateVocabularyKey($vocabularyKey) {
		if ( ! $vocabularyKey instanceof VocabularyKey  && ! is_null($vocabularyKey) ) {
			$vocabularyKey = new VocabularyKey ($vocabularyKey);
		}
	
		return $vocabularyKey;
	}

	public function getTextSearchParameters() {
		if ($this->textSearchParameters===NULL) {
			$this->textSearchParameters = $this->createTextSearchParameters();
		}
		return $this->textSearchParameters;
	}
	
	protected function createTextSearchParameters() {
		return new VocabularySearchParams();
	}

	public function setTextSearchParameters($textSearchParameters) {
		$this->textSearchParameters = $this->validateTextSearchParameters($textSearchParameters);
	}

	protected function validateTextSearchParameters($textSearchParameters) {
		if ( ! $textSearchParameters instanceof VocabularySearchParams ) {
			$textSearchParameters = new VocabularySearchParams ($textSearchParameters);
		}
	
		return $textSearchParameters;
	}
} // end class Info