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
	 * List of manually overridden properties that should not be re-generated automatically
	 * @var array
	 */
	protected $_overrides = array();


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

	public function getVocabularyKey($autoCreate = TRUE) {
		if ($this->vocabularyKey===NULL && $autoCreate && ! isset($this->_overrides['vocabularyKey']) ) {
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
		if ( $vocabularyKey === FALSE ) {
			$this->_overrides['vocabularyKey'] = TRUE;
			return NULL;
		}

		if ( ! is_array ($vocabularyKey) && ! is_null($vocabularyKey) ) {
			$vocabularyKey = array($vocabularyKey);
		}

		unset ($this->_overrides['vocabularyKey']);
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

	public function getCodeSetResult($autoCreate = TRUE) {
		if ($this->codeSetResult===NULL && $autoCreate && ! isset($this->_overrides['codeSetResult']) ) {
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
