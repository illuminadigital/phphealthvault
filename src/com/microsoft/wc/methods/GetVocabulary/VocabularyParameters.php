<?php
namespace com\microsoft\wc\methods\GetVocabulary;



/**
 * @XmlNamespaces ({
 *	@XmlNamespace(url="urn:com.microsoft.wc.methods.GetVocabulary", prefix="")
 * })
 * @XmlEntity	(xml="VocabularyParameters")
 */
class VocabularyParameters {
	/**
	 * The parameters necessary to request for a particular vocabulary.
	 */

	/**
	 * List of manually overridden properties that should not be re-generated automatically
	 * @var array
	 */
	protected $_overrides = array();


	/**
	 * @XmlElement	(type="\com\microsoft\wc\vocab\VocabularyKey", collection="true", name="vocabulary-key")
	 */
	protected $vocabularyKey;

	/**
	 * @XmlText	(type="boolean", name="fixed-culture")
	 */
	protected $fixedCulture;

	public function __construct($vocabularyKey = NULL, $fixedCulture = NULL) {
		$this->vocabularyKey = ($vocabularyKey===NULL) ? NULL : $this->validateVocabularyKey($vocabularyKey);
		$this->fixedCulture = ($fixedCulture===NULL) ? NULL : $this->validateFixedCulture($fixedCulture);
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
		if ( ! is_array ($vocabularyKey) ) {
			$vocabularyKey = array($vocabularyKey);
		}
		$count = count($vocabularyKey);
		if ($count < 1) {
			throw new \Exception(sprintf('Supplied %s array has less than the required number (%d) of entries.', 'vocabularyKey', 1));
		}
		foreach ($vocabularyKey as $entry) {
			if (!($entry instanceof VocabularyKey)) {
				throw new \Exception(sprintf('Supplied %s value was not %s', 'vocabularyKey', 'VocabularyKey'));
			}
		}
	
		return $vocabularyKey;
	}

	public function addVocabularyKey($vocabularyKey) {
		$this->vocabularyKey[] = $vocabularyKey;
	}

	public function getFixedCulture($autoCreate = TRUE) {
		if ($this->fixedCulture===NULL && $autoCreate && ! isset($this->_overrides['fixedCulture']) ) {
			$this->fixedCulture = $this->createFixedCulture();
		}
		return $this->fixedCulture;
	}
	
	protected function createFixedCulture() {
		return FALSE;
	}

	public function setFixedCulture($fixedCulture) {
		$this->fixedCulture = $this->validateFixedCulture($fixedCulture);
	}

	protected function validateFixedCulture($fixedCulture) {
		if (!is_bool($fixedCulture)) {
			throw new \Exception(sprintf('Supplied %s value was not %s', 'fixedCulture', 'boolean'));
		}
	
		return $fixedCulture;
	}
} // end class VocabularyParameters
