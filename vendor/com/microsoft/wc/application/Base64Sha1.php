<?php
namespace com\microsoft\wc\application;



/**
 * @XmlNamespaces ({
 *	@XmlNamespace(url="urn:com.microsoft.wc.application", prefix="wc-app")
 * })
 * @XmlRootEntity	(xml="base64Sha1")
 */
class Base64Sha1 {
	/**
	 */

	/**
	 * @XmlValue	(type="string", name="base64Sha1")
	 */
	protected $value;

	public function __construct($value = NULL) {
		$this->value = ($value===NULL) ? NULL : $this->validateValue($value);
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
