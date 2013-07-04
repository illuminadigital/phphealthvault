<?php
namespace com\microsoft\wc\types;



/**
 * @XmlNamespaces ({
 *	@XmlNamespace(url="urn:com.microsoft.wc.types", prefix="t")
 * })
 * @XmlRootEntity	(xml="base64Sha1")
 */
class Base64Sha1 {
	/**
	 */

	/**
	 * List of manually overridden properties that should not be re-generated automatically
	 * @var array
	 */
	protected $_overrides = array();


	/**
	 * @XmlValue	(type="string", name="base64Sha1")
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
		return '';
	}

	public function setValue($value) {
		$this->value = $this->validateValue($value);
	}

	protected function validateValue($value) {
		if (!is_string($value)) {
			throw new \Exception(sprintf('Supplied %s value was not %s', 'value', 'string'));
		}

		if (strlen($value) < 28) {
			throw new \Exception(sprintf('Supplied %s value was shorter than the minimum (%d)', 'base64Sha1', 28));
		}

		if (strlen($value) > 28) {
			throw new \Exception(sprintf('Supplied %s value was longer than the maximum (%d)', 'base64Sha1', 28));
		}
	
		return $value;
	}

	public function __toString() {
		return (string) $this->value;
	}
} // end class Base64Sha1
