<?php
namespace com\microsoft\wc\thing;

use com\microsoft\wc\thing\Iso6391;

/**
 * @XmlEntity	(xml="LocalizedString")
 */
class LocalizedString {
	/**
	 */

	/**
	 * @XmlAttribute	(type="string", name="language")
	 */
	protected $language;

	public function __construct($language = NULL) {
		$this->language = ($language===NULL) ? NULL : $this->validateLanguage($language);
	}

	public function getLanguage() {
		if ($this->language===NULL) {
			$this->language = $this->createLanguage();
		}
		return $this->language;
	}
	
	protected function createLanguage() {
		return new Iso6391();
	}

	public function setLanguage($language) {
		$this->language = $this->validateLanguage($language);
	}

	protected function validateLanguage($language) {
		if ( ! $language instanceof Iso6391  && ! is_null($language) ) {
			$language = new Iso6391 ($language);
		}
	
		return $language;
	}
} // end class LocalizedString
