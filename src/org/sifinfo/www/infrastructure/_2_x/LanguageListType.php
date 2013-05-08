<?php
namespace org\sifinfo\www\infrastructure\_2_x;



/**
 * @XmlNamespaces ({
 *	@XmlNamespace(url="http://www.sifinfo.org/infrastructure/2.x", prefix="")
 * })
 * @XmlEntity	(xml="LanguageListType")
 */
class LanguageListType {
	/**
	 */

	/**
	 * List of manually overridden properties that should not be re-generated automatically
	 * @var array
	 */
	protected $_overrides = array();


	/**
	 * @XmlElement	(type="\org\sifinfo\www\infrastructure\_2_x\Language", collection="true", name="Language")
	 */
	protected $language;

	public function __construct($language = NULL) {
		$this->language = ($language===NULL) ? NULL : $this->validateLanguage($language);
	}

	public function getLanguage($autoCreate = TRUE) {
		if ($this->language===NULL && $autoCreate && ! isset($this->_overrides['language']) ) {
			$this->language = $this->createLanguage();
		}
		return $this->language;
	}
	
	protected function createLanguage() {
		return array();
	}

	public function setLanguage($language) {
		$this->language = $this->validateLanguage($language);
	}

	protected function validateLanguage($language) {
		if ( ! is_array ($language) ) {
			$language = array($language);
		}
		$count = count($language);
		if ($count < 1) {
			throw new \Exception(sprintf('Supplied %s array has less than the required number (%d) of entries.', 'language', 1));
		}
		foreach ($language as $entry) {
			if (!($entry instanceof \org\sifinfo\www\infrastructure\_2_x\Language )) {
				throw new \Exception(sprintf('Supplied %s value was not %s', 'language', 'Language'));
			}
		}
	
		return $language;
	}

	public function addLanguage($language) {
		$this->language[] = $language;
	}
} // end class LanguageListType
