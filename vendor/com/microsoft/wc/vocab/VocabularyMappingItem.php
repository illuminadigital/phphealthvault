<?php
namespace com\microsoft\wc\vocab;

use com\microsoft\wc\types\CodedValue;

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
	 * @XmlElement	(type="\com\microsoft\wc\types\CodedValue", name="reference-id")
	 */
	protected $referenceId;

	public function __construct($referenceId = NULL) {
		$this->referenceId = ($referenceId===NULL) ? NULL : $this->validateReferenceId($referenceId);
	}

	public function getReferenceId() {
		if ($this->referenceId===NULL) {
			$this->referenceId = $this->createReferenceId();
		}
		return $this->referenceId;
	}
	
	protected function createReferenceId() {
		return new CodedValue();
	}

	public function setReferenceId($referenceId) {
		$this->referenceId = $this->validateReferenceId($referenceId);
	}

	protected function validateReferenceId($referenceId) {
		if ( ! $referenceId instanceof CodedValue ) {
			$referenceId = new CodedValue ($referenceId);
		}
	
		return $referenceId;
	}
} // end class VocabularyMappingItem
