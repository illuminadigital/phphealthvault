<?php
namespace com\microsoft\wc\methods\SearchVocabulary;

use com\microsoft\wc\types\String64;


/**
 * @XmlEntity	(xml="VocabularySearchString")
 */
class VocabularySearchString extends String255 {
	/**
	 * Type defining a vocabulary search string.
	 * The search string is a culture specific string of characters against which vocabulary items are compared using the specified search mode.
	 */

	/**
	 * @XmlAttribute	(type="string", name="search-mode")
	 */
	protected $searchMode;

	public function __construct($searchMode = NULL) {
		$this->searchMode = ($searchMode===NULL) ? NULL : $this->validateSearchMode($searchMode);
	}

	public function getSearchMode() {
		if ($this->searchMode===NULL) {
			$this->searchMode = $this->createSearchMode();
		}
		return $this->searchMode;
	}
	
	protected function createSearchMode() {
		return new String64();
	}

	public function setSearchMode($searchMode) {
		$this->searchMode = $this->validateSearchMode($searchMode);
	}

	protected function validateSearchMode($searchMode) {
		if ( ! $searchMode instanceof String64  && ! is_null($searchMode) ) {
			$searchMode = new String64 ($searchMode);
		}
	
		return $searchMode;
	}
} // end class VocabularySearchString
