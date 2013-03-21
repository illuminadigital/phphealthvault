<?php
namespace com\microsoft\wc\vocab;



/**
 * @XmlNamespaces ({
 *	@XmlNamespace(url="urn:com.microsoft.wc.vocab", prefix="wc-vocab")
 * })
 * @XmlEntity	(xml="vocabulary-mapping-item")
 */
class VocabularyMappingItem {
	/**
	 * Defines a single mapping from one vocabulary to another.
	 */

	/**
	 * List of manually overridden properties that should not be re-generated automatically
	 * @var array
	 */
	protected $_overrides = array();


	/**
	 * @XmlElement	(type="\com\microsoft\wc\types\CodedValue", name="reference-id")
	 */
	protected $referenceId;

	public function __construct($referenceId = NULL) {
		$this->referenceId = ($referenceId===NULL) ? NULL : $this->validateReferenceId($referenceId);
	}

	public function getReferenceId($autoCreate = TRUE) {
		if ($this->referenceId===NULL && $autoCreate && ! isset($this->_overrides['referenceId']) ) {
			$this->referenceId = $this->createReferenceId();
		}
		return $this->referenceId;
	}
	
	protected function createReferenceId() {
		return new \com\microsoft\wc\types\CodedValue();
	}

	public function setReferenceId($referenceId) {
		$this->referenceId = $this->validateReferenceId($referenceId);
	}

	protected function validateReferenceId($referenceId) {
		if ( ! $referenceId instanceof \com\microsoft\wc\types\CodedValue ) {
			$referenceId = new \com\microsoft\wc\types\CodedValue ($referenceId);
		}
	
		return $referenceId;
	}
} // end class VocabularyMappingItem
