<?php
namespace com\microsoft\wc\thing;



/**
 * @XmlNamespaces ({
 *	@XmlNamespace(url="urn:com.microsoft.wc.thing", prefix="wc-thing")
 * })
 * @XmlRootEntity	(xml="stringz1024")
 */
class Stringz1024 {
	/**
	 */

	/**
	 * @XmlValue	(type="string", name="stringz1024")
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
			throw new \Exception(sprintf('Supplied %s value was shorter than the minimum (%d)', 'stringz1024', 0));
		}

		if (strlen($value) > 1024) {
			throw new \Exception(sprintf('Supplied %s value was longer than the maximum (%d)', 'stringz1024', 1024));
		}
	
		return $value;
	}

	public function __toString() {
		return (string) $this->value;
	}
} // end class Stringz1024
