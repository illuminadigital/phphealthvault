<?php
namespace com\microsoft\wc\application;



/**
 * @XmlNamespaces ({
 *	@XmlNamespace(url="urn:com.microsoft.wc.application", prefix="wc-app")
 * })
 * @XmlRootEntity	(xml="puid")
 */
class Puid {
	/**
	 */

	/**
	 * @XmlValue	(type="string", name="puid")
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

		if (!preg_match('/^[a-fA-F0-9]{16}$/', $value)) {
			throw new \Exception(sprintf('Supplied %s value did not match the right pattern.', 'puid', '[a-fA-F0-9]{16}'));
		}
	
		return $value;
	}

	public function __toString() {
		return (string) $this->value;
	}
} // end class Puid
