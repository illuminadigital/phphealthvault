<?php
namespace hl7_org\v3;



/**
 * @XmlNamespaces ({
 *	@XmlNamespace(url="urn:hl7-org:v3", prefix="")
 * })
 * @XmlEntity	(xml="URL")
 */
class URL extends \org\w3\www\_2001\XMLSchema\ANY {
	/**
	 * A telecommunications address specified according toInternet standard RFC 1738[http://www.ietf.org/rfc/rfc1738.txt]. TheURL specifies the protocol and the contact point definedby that protocol for the resource. Notable uses of thetelecommunication address data type are for telephone andtelefax numbers, e-mail addresses, Hypertext references,FTP references, etc.
	 */

	/**
	 * List of manually overridden properties that should not be re-generated automatically
	 * @var array
	 */
	protected $_overrides = array();


	/**
	 * @XmlAttribute	(type="string", name="value")
	 */
	protected $value;

	public function __construct($value = NULL) {
		$this->value = ($value===NULL) ? NULL : $this->validateValue($value);
	}

	public function getValue($autoCreate = TRUE) {
		if ($this->value===NULL && $autoCreate && ! isset($this->_overrides['value']) ) {
			$this->value = $this->createValue();
		}
		return $this->value;
	}
	
	protected function createValue() {
		return NULL;
	}

	public function setValue($value) {
		$this->value = $this->validateValue($value);
	}

	protected function validateValue($value) {
	
		return $value;
	}
} // end class URL
