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
	 * List of manually overridden properties that should not be re-generated automatically
	 * @var array
	 */
	protected $_overrides = array();


	/**
	 * @XmlElement	(type="\com\microsoft\wc\vocab\VocabularySynonym", collection="true", name="vocabulary-synonym")
	 */
	protected $vocabularySynonym;

	public function __construct($vocabularySynonym = NULL) {
		$this->vocabularySynonym = ($vocabularySynonym===NULL) ? NULL : $this->validateVocabularySynonym($vocabularySynonym);
	}

	public function getVocabularySynonym($autoCreate = TRUE) {
		if ($this->vocabularySynonym===NULL && $autoCreate && ! isset($this->_overrides['vocabularySynonym']) ) {
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
		if ( $vocabularySynonym === FALSE ) {
			$this->_overrides['vocabularySynonym'] = TRUE;
			return NULL;
		}

		if ( ! is_array ($vocabularySynonym) && ! is_null($vocabularySynonym) ) {
			$vocabularySynonym = array($vocabularySynonym);
		}

		unset ($this->_overrides['vocabularySynonym']);
		$count = count($vocabularySynonym);
		if ($count < 0) {
			throw new \Exception(sprintf('Supplied %s array has less than the required number (%d) of entries.', 'vocabularySynonym', 0));
		}
		if ( ! empty($vocabularySynonym) ) {
			foreach ($vocabularySynonym as $entry) {
				if (!($entry instanceof \com\microsoft\wc\vocab\VocabularySynonym )) {
					throw new \Exception(sprintf('Supplied %s value was not %s', 'vocabularySynonym', 'vocabulary-synonym'));
				}
			}
		}
	
		return $vocabularySynonym;
	}

	public function addVocabularySynonym($vocabularySynonym) {
		$this->vocabularySynonym[] = $vocabularySynonym;
	}
} // end class VocabularySynonyms
