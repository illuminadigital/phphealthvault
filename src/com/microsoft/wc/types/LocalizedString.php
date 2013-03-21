<?php
namespace com\microsoft\wc\types;



/**
 * @XmlNamespaces ({
 *	@XmlNamespace(url="urn:com.microsoft.wc.types", prefix="wc-types")
 * })
 * @XmlEntity	(xml="LocalizedString")
 */
class LocalizedString {
	/**
	 */

	/**
	 * List of manually overridden properties that should not be re-generated automatically
	 * @var array
	 */
	protected $_overrides = array();


	/**
	 * @XmlValue	(type="string", name="LocalizedString")
	 */
	protected $value;

	/**
	 * @XmlAttribute	(type="string", name="language")
	 */
	protected $language;

	public function __construct($value = NULL, $language = NULL) {
		$this->value = ($value===NULL) ? NULL : $this->validateValue($value);
		$this->language = ($language===NULL) ? NULL : $this->validateLanguage($language);
	}

	public function getValue($autoCreate = TRUE) {
		if ($this->value===NULL && $autoCreate && ! isset($this->_overrides['value']) ) {
			$this->value = $this->createValue();
		}
		return $this->value;
	}
	
	protected function createValue() {
		return '';
	}

	public function setValue($value) {
		$this->value = $this->validateValue($value);
	}

	protected function validateValue($value) {
		if (!is_string($value)) {
			throw new \Exception(sprintf('Supplied %s value was not %s', 'value', 'string'));
		}
	
		return $value;
	}

	public function getLanguage($autoCreate = TRUE) {
		if ($this->language===NULL && $autoCreate && ! isset($this->_overrides['language']) ) {
			$this->language = $this->createLanguage();
		}
		return $this->language;
	}
	
	protected function createLanguage() {
		return new \com\microsoft\wc\types\Iso6391();
	}

	public function setLanguage($language) {
		$this->language = $this->validateLanguage($language);
	}

	protected function validateLanguage($language) {
		if ( $language === FALSE ) {
			$this->_overrides['language'] = TRUE;
			return NULL;
		}

		if ( ! $language instanceof \com\microsoft\wc\types\Iso6391  && ! is_null($language) ) {
			$language = new \com\microsoft\wc\types\Iso6391 ($language);
		}

		unset ($this->_overrides['language']);
	
		return $language;
	}
} // end class LocalizedString
