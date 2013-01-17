<?php
namespace com\microsoft\wc\types;



/**
 * @XmlNamespaces ({
 *	@XmlNamespace(url="urn:com.microsoft.wc.types", prefix="wc-types")
 * })
 * @XmlEntity	(xml="CultureSpecificUrl")
 */
class CultureSpecificUrl extends \com\microsoft\wc\types\Url {
	/**
	 * The CultureSpecific... classes are intended for use with data that can be localized for one or more languages and cultures.
	 * The CultureSpecific... classes should be upward compatibile with the base types.
	 */

	/**
	 * @XmlAttribute	(type="string", name="xml:lang")
	 */
	protected $xmlLang;

	public function __construct($xmlLang = NULL) {
		$this->xmlLang = ($xmlLang===NULL) ? NULL : $this->validateXmlLang($xmlLang);
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
} // end class CultureSpecificUrl
