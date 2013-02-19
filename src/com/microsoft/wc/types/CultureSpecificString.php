<?php
namespace com\microsoft\wc\types;



/**
 * @XmlNamespaces ({
 *	@XmlNamespace(url="urn:com.microsoft.wc.types", prefix="wc-types")
 * })
 * @XmlEntity	(xml="CultureSpecificString")
 */
class CultureSpecificString {
	/**
	 * The CultureSpecific... classes are intended for use with data that can be localized for one or more languages and cultures.
	 * The CultureSpecific... classes should be upward compatibile with the base types.
	 */

	/**
	 * @XmlText	(type="string", name="value")
	 */
	protected $value;

	/**
	 * @XmlAttribute	(type="string", name="xml:lang")
	 */
	protected $xmlLang;

	public function __construct($value = NULL, $xmlLang = NULL) {
		$this->value = ($value===NULL) ? NULL : $this->validateValue($value);
		$this->xmlLang = ($xmlLang===NULL) ? NULL : $this->validateXmlLang($xmlLang);
	}

	public function getValue() {
		if ($this->value===NULL) {
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

	public function getXmlLang() {
		if ($this->xmlLang===NULL) {
			$this->xmlLang = $this->createXmlLang();
		}
		return $this->xmlLang;
	}
	
	protected function createXmlLang() {
		return NULL;
	}

	public function setXmlLang($xmlLang) {
		$this->xmlLang = $this->validateXmlLang($xmlLang);
	}

	protected function validateXmlLang($xmlLang) {
		if ( ! is_string($xmlLang) && ! is_null($xmlLang) ) {
			throw new \Exception(sprintf('Supplied %s value was not %s', 'xmlLang', 'string'));
		}
	
		return $xmlLang;
	}
} // end class CultureSpecificString
