<?php
namespace com\microsoft\wc\application;

use com\microsoft\wc\application\VocabularyMappingItem;

/**
 * @XmlEntity	(xml="vocabulary-mapping")
 */
class VocabularyMapping {
	/**
	 * Defines a collection of mappings from one vocabulary to another.
	 */

	/**
	 * @XmlElement	(type="\com\microsoft\wc\application\VocabularyMappingItem", collection="true", name="vocabulary-mapping-item")
	 */
	protected $vocabularyMappingItem;

	public function __construct($vocabularyMappingItem = NULL) {
		$this->vocabularyMappingItem = ($vocabularyMappingItem===NULL) ? NULL : $this->validateVocabularyMappingItem($vocabularyMappingItem);
	}

	public function getVocabularyMappingItem() {
		if ($this->vocabularyMappingItem===NULL) {
			$this->vocabularyMappingItem = $this->createVocabularyMappingItem();
		}
		return $this->vocabularyMappingItem;
	}
	
	protected function createVocabularyMappingItem() {
		return array();
	}

	public function setVocabularyMappingItem($vocabularyMappingItem) {
		$this->vocabularyMappingItem = $this->validateVocabularyMappingItem($vocabularyMappingItem);
	}

	protected function validateVocabularyMappingItem($vocabularyMappingItem) {
		if ( ! $vocabularyMappingItem instanceof VocabularyMappingItem  && ! is_null($vocabularyMappingItem) ) {
			$vocabularyMappingItem = new VocabularyMappingItem ($vocabularyMappingItem);
		}
		$count = count($vocabularyMappingItem);
		if ($count < 0) {
			throw new \Exception(sprintf('Supplied %s array has less than the required number (%d) of entries.', 'vocabularyMappingItem', 0));
		}
		foreach ($vocabularyMappingItem as $entry) {
			if (!($entry instanceof VocabularyMappingItem)) {
				throw new \Exception(sprintf('Supplied %s value was not %s', 'vocabularyMappingItem', 'vocabulary-mapping-item'));
			}
		}
	
		return $vocabularyMappingItem;
	}

	public function addVocabularyMappingItem($vocabularyMappingItem) {
		$this->vocabularyMappingItem[] = $vocabularyMappingItem;
	}
} // end class VocabularyMapping
