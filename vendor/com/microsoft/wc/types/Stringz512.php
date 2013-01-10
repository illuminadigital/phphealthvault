<?php
namespace com\microsoft\wc\types;



/**
 * @XmlNamespaces ({
 *	@XmlNamespace(url="urn:com.microsoft.wc.types", prefix="wc-types")
 * })
 * @XmlRootEntity	(xml="stringz512")
 */
class Stringz512 {
	/**
	 */

	/**
	 * @XmlValue	(type="string", name="stringz512")
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

		if (strlen($value) < 0) {
			throw new \Exception(sprintf('Supplied %s value was shorter than the minimum (%d)', 'stringz512', 0));
		}

		if (strlen($value) > 512) {
			throw new \Exception(sprintf('Supplied %s value was longer than the maximum (%d)', 'stringz512', 512));
		}
	
		return $value;
	}

	public function __toString() {
		return (string) $this->value;
	}
} // end class Stringz512
