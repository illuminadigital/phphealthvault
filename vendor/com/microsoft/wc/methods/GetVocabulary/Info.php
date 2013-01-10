<?php
namespace com\microsoft\wc\methods\GetVocabulary;

use com\microsoft\wc\methods\GetVocabulary\VocabularyParameters;

/**
 * @XmlNamespaces ({
 *	@XmlNamespace(url="urn:com.microsoft.wc.methods.GetVocabulary", prefix="")
 * })
 * @XmlEntity	(xml="info")
 */
class Info extends \com\microsoft\wc\request\Info {
	/**
	 * The element of the request that contains the method specific parameters.
	 * All requests contain the info element to pass parameters that are specific to each method. If the method does not define an info element, the method does not take any parameters.
	 */

	/**
	 * @XmlElement	(type="\com\microsoft\wc\methods\GetVocabulary\VocabularyParameters", name="vocabulary-parameters")
	 */
	protected $vocabularyParameters;

	public function __construct($vocabularyParameters = NULL) {
		$this->vocabularyParameters = ($vocabularyParameters===NULL) ? NULL : $this->validateVocabularyParameters($vocabularyParameters);
	}

	public function getVocabularyParameters() {
		if ($this->vocabularyParameters===NULL) {
			$this->vocabularyParameters = $this->createVocabularyParameters();
		}
		return $this->vocabularyParameters;
	}
	
	protected function createVocabularyParameters() {
		return new VocabularyParameters();
	}

	public function setVocabularyParameters($vocabularyParameters) {
		$this->vocabularyParameters = $this->validateVocabularyParameters($vocabularyParameters);
	}

	protected function validateVocabularyParameters($vocabularyParameters) {
		if ( ! $vocabularyParameters instanceof VocabularyParameters ) {
			$vocabularyParameters = new VocabularyParameters ($vocabularyParameters);
		}
	
		return $vocabularyParameters;
	}
} // end class Info
