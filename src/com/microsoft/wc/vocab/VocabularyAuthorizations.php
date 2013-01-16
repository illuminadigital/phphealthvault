<?php
namespace com\microsoft\wc\vocab;



/**
 * @XmlEntity	(xml="VocabularyAuthorizations")
 */
class VocabularyAuthorizations {
	/**
	 * A representation of a group of vocabularies, that an application is authorized to use.
	 */

	/**
	 * @XmlElement	(type="\com\microsoft\wc\vocab\VocabularyAuthorization", collection="true", name="vocabulary-authorization")
	 */
	protected $vocabularyAuthorization;

	public function __construct($vocabularyAuthorization = NULL) {
		$this->vocabularyAuthorization = ($vocabularyAuthorization===NULL) ? NULL : $this->validateVocabularyAuthorization($vocabularyAuthorization);
	}

	public function getVocabularyAuthorization() {
		if ($this->vocabularyAuthorization===NULL) {
			$this->vocabularyAuthorization = $this->createVocabularyAuthorization();
		}
		return $this->vocabularyAuthorization;
	}
	
	protected function createVocabularyAuthorization() {
		return array();
	}

	public function setVocabularyAuthorization($vocabularyAuthorization) {
		$this->vocabularyAuthorization = $this->validateVocabularyAuthorization($vocabularyAuthorization);
	}

	protected function validateVocabularyAuthorization($vocabularyAuthorization) {
		if ( ! $vocabularyAuthorization instanceof \com\microsoft\wc\vocab\VocabularyAuthorization ) {
			$vocabularyAuthorization = new \com\microsoft\wc\vocab\VocabularyAuthorization ($vocabularyAuthorization);
		}
		$count = count($vocabularyAuthorization);
		if ($count < 1) {
			throw new \Exception(sprintf('Supplied %s array has less than the required number (%d) of entries.', 'vocabularyAuthorization', 1));
		}
		foreach ($vocabularyAuthorization as $entry) {
			if (!($entry instanceof VocabularyAuthorization)) {
				throw new \Exception(sprintf('Supplied %s value was not %s', 'vocabularyAuthorization', 'VocabularyAuthorization'));
			}
		}
	
		return $vocabularyAuthorization;
	}

	public function addVocabularyAuthorization($vocabularyAuthorization) {
		$this->vocabularyAuthorization[] = $vocabularyAuthorization;
	}
} // end class VocabularyAuthorizations
