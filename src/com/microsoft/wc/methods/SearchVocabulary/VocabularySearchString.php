<?php
namespace com\microsoft\wc\methods\SearchVocabulary;



/**
 * @XmlNamespaces ({
 *	@XmlNamespace(url="urn:com.microsoft.wc.methods.SearchVocabulary", prefix="")
 * })
 * @XmlEntity	(xml="VocabularySearchString")
 */
class VocabularySearchString extends \com\microsoft\wc\types\String255 {
	/**
	 * Type defining a vocabulary search string.
	 * The search string is a culture specific string of characters against which vocabulary items are compared using the specified search mode.
	 */

	/**
	 * List of manually overridden properties that should not be re-generated automatically
	 * @var array
	 */
	protected $_overrides = array();


	/**
	 * @XmlAttribute	(type="string", name="search-mode")
	 */
	protected $searchMode;

	public function __construct($searchMode = NULL) {
		$this->searchMode = ($searchMode===NULL) ? NULL : $this->validateSearchMode($searchMode);
	}

	public function getSearchMode($autoCreate = TRUE) {
		if ($this->searchMode===NULL && $autoCreate && ! isset($this->_overrides['searchMode']) ) {
			$this->searchMode = $this->createSearchMode();
		}
		return $this->searchMode;
	}
	
	protected function createSearchMode() {
		return new \com\microsoft\wc\types\String64();
	}

	public function setSearchMode($searchMode) {
		$this->searchMode = $this->validateSearchMode($searchMode);
	}

	protected function validateSearchMode($searchMode) {
		if ( $searchMode === FALSE ) {
			$this->_overrides['searchMode'] = TRUE;
			return NULL;
		}

		if ( ! $searchMode instanceof \com\microsoft\wc\types\String64  && ! is_null($searchMode) ) {
			$searchMode = new \com\microsoft\wc\types\String64 ($searchMode);
		}

		unset ($this->_overrides['searchMode']);
	
		return $searchMode;
	}
} // end class VocabularySearchString
