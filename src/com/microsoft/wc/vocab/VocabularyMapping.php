<?php
namespace com\microsoft\wc\vocab;



/**
 * @XmlNamespaces ({
 *	@XmlNamespace(url="urn:com.microsoft.wc.vocab", prefix="wc-vocab")
 * })
 * @XmlEntity	(xml="vocabulary-mapping")
 */
class VocabularyMapping {
	/**
	 * Defines a collection of mappings from one vocabulary to another.
	 */

	/**
	 * List of manually overridden properties that should not be re-generated automatically
	 * @var array
	 */
	protected $_overrides = array();


	/**
	 * @XmlElement	(type="\com\microsoft\wc\vocab\VocabularyMappingItem", collection="true", name="vocabulary-mapping-item")
	 */
	protected $vocabularyMappingItem;

	public function __construct($vocabularyMappingItem = NULL) {
		$this->vocabularyMappingItem = ($vocabularyMappingItem===NULL) ? NULL : $this->validateVocabularyMappingItem($vocabularyMappingItem);
	}

	public function getVocabularyMappingItem($autoCreate = TRUE) {
		if ($this->vocabularyMappingItem===NULL && $autoCreate && ! isset($this->_overrides['vocabularyMappingItem']) ) {
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
		if ( $vocabularyMappingItem === FALSE ) {
			$this->_overrides['vocabularyMappingItem'] = TRUE;
			return NULL;
		}

		if ( ! is_array ($vocabularyMappingItem) && ! is_null($vocabularyMappingItem) ) {
			$vocabularyMappingItem = array($vocabularyMappingItem);
		}

		unset ($this->_overrides['vocabularyMappingItem']);
		$count = count($vocabularyMappingItem);
		if ($count < 0) {
			throw new \Exception(sprintf('Supplied %s array has less than the required number (%d) of entries.', 'vocabularyMappingItem', 0));
		}
		if ( ! empty($vocabularyMappingItem) ) {
			foreach ($vocabularyMappingItem as $entry) {
				if (!($entry instanceof VocabularyMappingItem)) {
					throw new \Exception(sprintf('Supplied %s value was not %s', 'vocabularyMappingItem', 'vocabulary-mapping-item'));
				}
			}
		}
	
		return $vocabularyMappingItem;
	}

	public function addVocabularyMappingItem($vocabularyMappingItem) {
		$this->vocabularyMappingItem[] = $vocabularyMappingItem;
	}
} // end class VocabularyMapping
