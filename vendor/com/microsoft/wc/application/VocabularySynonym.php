<?php
namespace com\microsoft\wc\application;



/**
 * @XmlNamespaces ({
 *	@XmlNamespace(url="urn:com.microsoft.wc.application", prefix="wc-app")
 * })
 * @XmlEntity	(xml="vocabulary-synonym")
 */
class VocabularySynonym {
	/**
	 * Defines a single vocabulary synonym.
	 */

	/**
	 * @XmlAttribute	(type="string", name="term")
	 */
	protected $term;

	public function __construct($term = NULL) {
		$this->term = ($term===NULL) ? NULL : $this->validateTerm($term);
	}

	public function getTerm() {
		if ($this->term===NULL) {
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
