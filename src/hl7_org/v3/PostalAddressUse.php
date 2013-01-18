<?php
namespace hl7_org\v3;



/**
 * @XmlNamespaces ({
 *	@XmlNamespace(url="urn:hl7-org:v3", prefix="")
 * })
 * @XmlRootEntity	(xml="PostalAddressUse")
 */
class PostalAddressUse {
	/**
	 */

	/**
	 * @XmlElement	(type="\hl7_org\v3\", name="value")
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
		return NULL;
	}

	public function setValue($value) {
		$this->value = $this->validateValue($value);
	}

	protected function validateValue($value) {
		if (!is_($value)) {
			throw new \Exception(sprintf('Supplied %s value was not %s', 'value', ''));
		}
	
		return $value;
	}

	public function __toString() {
		return (string) $this->value;
	}
} // end class PostalAddressUse
