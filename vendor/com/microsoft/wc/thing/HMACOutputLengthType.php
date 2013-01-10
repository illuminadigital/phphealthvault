<?php
namespace com\microsoft\wc\thing;



/**
 * @XmlNamespaces ({
 *	@XmlNamespace(url="urn:com.microsoft.wc.thing", prefix="wc-thing")
 * })
 * @XmlRootEntity	(xml="HMACOutputLengthType")
 */
class HMACOutputLengthType {
	/**
	 */

	/**
	 * @XmlValue	(type="integer", name="HMACOutputLengthType")
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
		return 0;
	}

	public function setValue($value) {
		$this->value = $this->validateValue($value);
	}

	protected function validateValue($value) {
		if (!is_integer($value)) {
			throw new \Exception(sprintf('Supplied %s value was not %s', 'value', 'integer'));
		}
	
		return $value;
	}

	public function __toString() {
		return (string) $this->value;
	}
} // end class HMACOutputLengthType
