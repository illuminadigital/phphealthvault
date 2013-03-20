<?php
namespace com\microsoft\wc\methods\response\GetVocabulary;



/**
 * @XmlNamespaces ({
 *	@XmlNamespace(url="urn:com.microsoft.wc.methods.response.GetVocabulary", prefix="")
 * })
 * @XmlEntity	(xml="info")
 */
class Info extends \com\microsoft\wc\methods\response\Info {
	/**
	 * The element of the request that contains the method specific parameters.
	 * All requests contain the info element to pass parameters that are specific to each method. If the method does not define an info element, the method does not take any parameters.
	 */

	/**
	 * @XmlElement	(type="\com\microsoft\wc\vocab\VocabularyCodeSet", name="vocabulary")
	 */
	protected $vocabulary;

	/**
	 * @XmlElement	(type="\com\microsoft\wc\vocab\VocabularyKeyInfo", name="vocabulary-key")
	 */
	protected $vocabularyKey;

	public function __construct($vocabulary = NULL, $vocabularyKey = NULL) {
		$this->vocabulary = ($vocabulary===NULL) ? NULL : $this->validateVocabulary($vocabulary);
		$this->vocabularyKey = ($vocabularyKey===NULL) ? NULL : $this->validateVocabularyKey($vocabularyKey);
	}

	public function getVocabulary() {
		if ($this->vocabulary===NULL) {
			$this->vocabulary = $this->createVocabulary();
		}
		return $this->vocabulary;
	}
	
	protected function createVocabulary() {
		return new \com\microsoft\wc\vocab\VocabularyCodeSet();
	}

	public function setVocabulary($vocabulary) {
		$this->vocabulary = $this->validateVocabulary($vocabulary);
	}

	protected function validateVocabulary($vocabulary) {
		if ( ! $vocabulary instanceof \com\microsoft\wc\vocab\VocabularyCodeSet ) {
			$vocabulary = new \com\microsoft\wc\vocab\VocabularyCodeSet ($vocabulary);
		}
	
		return $vocabulary;
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
} // end class Info
