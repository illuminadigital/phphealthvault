<?php
namespace com\microsoft\wc\methods\SearchVocabulary;



/**
 * @XmlNamespaces ({
 *	@XmlNamespace(url="urn:com.microsoft.wc.methods.SearchVocabulary", prefix="")
 * })
 * @XmlEntity	(xml="info")
 */
class Info extends \com\microsoft\wc\request\Info {
	/**
	 * The element of the request that contains the method specific parameters.
	 */

	/**
	 * List of manually overridden properties that should not be re-generated automatically
	 * @var array
	 */
	protected $_overrides = array();


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

	public function getVocabularyKey($autoCreate = TRUE) {
		if ($this->vocabularyKey===NULL && $autoCreate && ! isset($this->_overrides['vocabularyKey']) ) {
			$this->vocabularyKey = $this->createVocabularyKey();
		}
		return $this->vocabularyKey;
	}
	
	protected function createVocabularyKey() {
		return new \com\microsoft\wc\vocab\VocabularyKey();
	}

	public function setVocabularyKey($vocabularyKey) {
		$this->vocabularyKey = $this->validateVocabularyKey($vocabularyKey);
	}

	protected function validateVocabularyKey($vocabularyKey) {
		if ( $vocabularyKey === FALSE ) {
			$this->_overrides['vocabularyKey'] = TRUE;
			return NULL;
		}

		if ( ! $vocabularyKey instanceof \com\microsoft\wc\vocab\VocabularyKey  && ! is_null($vocabularyKey) ) {
			$vocabularyKey = new \com\microsoft\wc\vocab\VocabularyKey ($vocabularyKey);
		}

		unset ($this->_overrides['vocabularyKey']);
	
		return $vocabularyKey;
	}

	public function getTextSearchParameters($autoCreate = TRUE) {
		if ($this->textSearchParameters===NULL && $autoCreate && ! isset($this->_overrides['textSearchParameters']) ) {
			$this->textSearchParameters = $this->createTextSearchParameters();
		}
		return $this->textSearchParameters;
	}
	
	protected function createTextSearchParameters() {
		return new \com\microsoft\wc\methods\SearchVocabulary\VocabularySearchParams();
	}

	public function setTextSearchParameters($textSearchParameters) {
		$this->textSearchParameters = $this->validateTextSearchParameters($textSearchParameters);
	}

	protected function validateTextSearchParameters($textSearchParameters) {
		if ( ! $textSearchParameters instanceof \com\microsoft\wc\methods\SearchVocabulary\VocabularySearchParams ) {
			$textSearchParameters = new \com\microsoft\wc\methods\SearchVocabulary\VocabularySearchParams ($textSearchParameters);
		}
	
		return $textSearchParameters;
	}
} // end class Info
