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
	 * @XmlElement	(type="\com\microsoft\wc\vocab\VocabularyCodeSet", collection="true", name="vocabulary")
	 */
	protected $vocabulary;

	/**
	 * @XmlElement	(type="\com\microsoft\wc\vocab\VocabularyKeyInfo", collection="true", name="vocabulary-key")
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
		return array();
	}

	public function setVocabulary($vocabulary) {
		$this->vocabulary = $this->validateVocabulary($vocabulary);
	}

	protected function validateVocabulary($vocabulary) {
		if ( ! is_array ($vocabulary) ) {
			$vocabulary = array($vocabulary);
		}
		$count = count($vocabulary);
		if ($count < 1) {
			throw new \Exception(sprintf('Supplied %s array has less than the required number (%d) of entries.', 'vocabulary', 1));
		}
		foreach ($vocabulary as $entry) {
			if (!($entry instanceof VocabularyCodeSet)) {
				throw new \Exception(sprintf('Supplied %s value was not %s', 'vocabulary', 'VocabularyCodeSet'));
			}
		}
	
		return $vocabulary;
	}

	public function addVocabulary($vocabulary) {
		$this->vocabulary[] = $vocabulary;
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
		if ( ! is_array ($vocabularyKey) ) {
			$vocabularyKey = array($vocabularyKey);
		}
		$count = count($vocabularyKey);
		if ($count < 1) {
			throw new \Exception(sprintf('Supplied %s array has less than the required number (%d) of entries.', 'vocabularyKey', 1));
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
} // end class Info
