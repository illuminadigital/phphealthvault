<?php
namespace hl7_org\v3;



/**
 * @XmlNamespaces ({
 *	@XmlNamespace(url="urn:hl7-org:v3", prefix="")
 * })
 * @XmlRootEntity	(xml="BinaryDataEncoding")
 */
class BinaryDataEncoding {
	/**
	 */
	static protected $enumValue = array('B64' => 'B64', 'TXT' => 'TXT');

	/**
	 * @XmlElement	(type="\hl7_org\v3\NMTOKEN", name="value")
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
		if (!is_NMTOKEN($value)) {
			throw new \Exception(sprintf('Supplied %s value was not %s', 'value', 'NMTOKEN'));
		}

		if (empty(static::$enumValue[$value])) {
			throw new \Exception(sprintf('Supplied %s value (%s) was not a valid enumerated value.', 'BinaryDataEncoding', $value));
		}
	
		return $value;
	}

	public function __toString() {
		return (string) $this->value;
	}
} // end class BinaryDataEncoding
