<?php
namespace com\microsoft\wc\vocab;



/**
 * @XmlNamespaces ({
 *	@XmlNamespace(url="urn:com.microsoft.wc.vocab", prefix="wc-vocab")
 * })
 * @XmlEntity	(xml="vocabulary-synonyms")
 */
class VocabularySynonyms {
	/**
	 * Defines a collection of vocabulary synonyms.
	 */

	/**
	 * @XmlElement	(type="\com\microsoft\wc\vocab\VocabularySynonym", collection="true", name="vocabulary-synonym")
	 */
	protected $vocabularySynonym;

	public function __construct($vocabularySynonym = NULL) {
		$this->vocabularySynonym = ($vocabularySynonym===NULL) ? NULL : $this->validateVocabularySynonym($vocabularySynonym);
	}

	public function getVocabularySynonym() {
		if ($this->vocabularySynonym===NULL) {
			$this->vocabularySynonym = $this->createVocabularySynonym();
		}
		return $this->vocabularySynonym;
	}
	
	protected function createVocabularySynonym() {
		return array();
	}

	public function setVocabularySynonym($vocabularySynonym) {
		$this->vocabularySynonym = $this->validateVocabularySynonym($vocabularySynonym);
	}

	protected function validateVocabularySynonym($vocabularySynonym) {
		if ( ! $vocabularySynonym instanceof \com\microsoft\wc\vocab\VocabularySynonym  && ! is_null($vocabularySynonym) ) {
			$vocabularySynonym = new \com\microsoft\wc\vocab\VocabularySynonym ($vocabularySynonym);
		}
		$count = count($vocabularySynonym);
		if ($count < 0) {
			throw new \Exception(sprintf('Supplied %s array has less than the required number (%d) of entries.', 'vocabularySynonym', 0));
		}
		foreach ($vocabularySynonym as $entry) {
			if (!($entry instanceof VocabularySynonym)) {
				throw new \Exception(sprintf('Supplied %s value was not %s', 'vocabularySynonym', 'vocabulary-synonym'));
			}
		}
	
		return $vocabularySynonym;
	}

	public function addVocabularySynonym($vocabularySynonym) {
		$this->vocabularySynonym[] = $vocabularySynonym;
	}
} // end class VocabularySynonyms
