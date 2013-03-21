<?php
namespace com\microsoft\wc\vocab;



/**
 * @XmlNamespaces ({
 *	@XmlNamespace(url="urn:com.microsoft.wc.vocab", prefix="wc-vocab")
 * })
 * @XmlEntity	(xml="vocabulary-synonym")
 */
class VocabularySynonym {
	/**
	 * Defines a single vocabulary synonym.
	 */

	/**
	 * List of manually overridden properties that should not be re-generated automatically
	 * @var array
	 */
	protected $_overrides = array();


	/**
	 * @XmlAttribute	(type="string", name="term")
	 */
	protected $term;

	public function __construct($term = NULL) {
		$this->term = ($term===NULL) ? NULL : $this->validateTerm($term);
	}

	public function getTerm($autoCreate = TRUE) {
		if ($this->term===NULL && $autoCreate && ! isset($this->_overrides['term']) ) {
			$this->term = $this->createTerm();
		}
		return $this->term;
	}
	
	protected function createTerm() {
		return '';
	}

	public function setTerm($term) {
		$this->term = $this->validateTerm($term);
	}

	protected function validateTerm($term) {
		if (!is_string($term)) {
			throw new \Exception(sprintf('Supplied %s value was not %s', 'term', 'string'));
		}
	
		return $term;
	}
} // end class VocabularySynonym
