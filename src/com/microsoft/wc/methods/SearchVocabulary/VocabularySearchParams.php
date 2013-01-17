<?php
namespace com\microsoft\wc\methods\SearchVocabulary;



/**
 * @XmlNamespaces ({
 *	@XmlNamespace(url="urn:com.microsoft.wc.methods.SearchVocabulary", prefix="")
 * })
 * @XmlEntity	(xml="VocabularySearchParams")
 */
class VocabularySearchParams {
	/**
	 * Specifies the text search parameters for the vocabulary search request.
	 * The text search parameters apply to the culture specifed in the request header by language and country. If the country is absent, items for the language are searched. If language is absent, items for the default culture of the system are searched.
	 */

	/**
	 * @XmlElement	(type="\com\microsoft\wc\methods\SearchVocabulary\VocabularySearchString", name="search-string")
	 */
	protected $searchString;

	/**
	 * @XmlText	(type="integer", name="max-results")
	 */
	protected $maxResults;

	public function __construct($searchString = NULL, $maxResults = NULL) {
		$this->searchString = ($searchString===NULL) ? NULL : $this->validateSearchString($searchString);
		$this->maxResults = ($maxResults===NULL) ? NULL : $this->validateMaxResults($maxResults);
	}

	public function getSearchString() {
		if ($this->searchString===NULL) {
			$this->searchString = $this->createSearchString();
		}
		return $this->searchString;
	}
	
	protected function createSearchString() {
		return new \com\microsoft\wc\methods\SearchVocabulary\VocabularySearchString();
	}

	public function setSearchString($searchString) {
		$this->searchString = $this->validateSearchString($searchString);
	}

	protected function validateSearchString($searchString) {
		if ( ! $searchString instanceof \com\microsoft\wc\methods\SearchVocabulary\VocabularySearchString ) {
			$searchString = new \com\microsoft\wc\methods\SearchVocabulary\VocabularySearchString ($searchString);
		}
	
		return $searchString;
	}

	public function getMaxResults() {
		if ($this->maxResults===NULL) {
			$this->maxResults = $this->createMaxResults();
		}
		return $this->maxResults;
	}
	
	protected function createMaxResults() {
		return NULL;
	}

	public function setMaxResults($maxResults) {
		$this->maxResults = $this->validateMaxResults($maxResults);
	}

	protected function validateMaxResults($maxResults) {
		if ( ! is_integer($maxResults) && ! is_null($maxResults) ) {
			throw new \Exception(sprintf('Supplied %s value was not %s', 'maxResults', 'integer'));
		}
	
		return $maxResults;
	}
} // end class VocabularySearchParams
