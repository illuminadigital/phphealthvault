<?php
namespace com\microsoft\wc\vocab;



/**
 * @XmlEntity	(xml="VocabularyKeyInfo")
 */
class VocabularyKeyInfo extends \com\microsoft\wc\vocab\VocabularyKey {
	/**
	 * Summary information about a vocabulary in the system.
	 * This information is made up of the key and a description of the vocabulary. The key is made up of the name, family, and version.
	 */

	/**
	 * @XmlText	(type="string", name="description")
	 */
	protected $description;

	public function __construct($description = NULL) {
		$this->description = ($description===NULL) ? NULL : $this->validateDescription($description);
	}

	public function getDescription() {
		if ($this->description===NULL) {
			$this->description = $this->createDescription();
		}
		return $this->description;
	}
	
	protected function createDescription() {
		return '';
	}

	public function setDescription($description) {
		$this->description = $this->validateDescription($description);
	}

	protected function validateDescription($description) {
		if ( ! is_string($description) && ! is_null($description) ) {
			throw new \Exception(sprintf('Supplied %s value was not %s', 'description', 'string'));
		}
	
		return $description;
	}
} // end class VocabularyKeyInfo
