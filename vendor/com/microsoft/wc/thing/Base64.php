<?php
namespace com\microsoft\wc\thing;



/**
 * @XmlNamespaces ({
 *	@XmlNamespace(url="urn:com.microsoft.wc.thing", prefix="wc-thing")
 * })
 * @XmlRootEntity	(xml="base64")
 */
class Base64 {
	/**
	 */

	/**
	 * @XmlValue	(type="string", name="base64")
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

		if (!preg_match('/^^[a-zA-Z0-9/+]*={0,2}$$/', $value)) {
			throw new \Exception(sprintf('Supplied %s value did not match the right pattern.', 'base64', '^[a-zA-Z0-9/+]*={0,2}$'));
		}
	
		return $value;
	}

	public function __toString() {
		return (string) $this->value;
	}
} // end class Base64
