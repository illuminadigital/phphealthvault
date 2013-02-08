<?php
namespace org\sifinfo\www\infrastructure\_2_x;



/**
 * @XmlNamespaces ({
 *	@XmlNamespace(url="http://www.sifinfo.org/infrastructure/2.x", prefix="")
 * })
 * @XmlRootEntity	(xml="NCES0619EntryTypeType")
 */
class NCES0619EntryTypeType {
	/**
	 */
	static protected $enumValue = array('1838' => 'Original entry into a United States school', '1840' => 'Original entry into a United States school from a foreign country with an interruption in schooling', '1839' => 'Original entry into a United States school from a foreign country with no interruption in schooling', '9999' => 'Other', '1836' => 'Re-entry after a voluntary withdrawal', '1837' => 'Re-entry after an involuntary withdrawal', '1835' => 'Re-entry from the same school with no interruption of schooling', '1832' => 'Transfer from a charter school', '1825' => 'Transfer from a private, non-religiously-affiliated school in a different local education agency in the same state', '1826' => 'Transfer from a private, non-religiously-affiliated school in a different state', '1824' => 'Transfer from a private, non-religiously-affiliated school in the same local education agency', '1828' => 'Transfer from a private, religiously-affiliated school in a different local education agency in the same state', '1829' => 'Transfer from a private, religiously-affiliated school in a different state', '1827' => 'Transfer from a private, religiously-affiliated school in the same local education agency', '1822' => 'Transfer from a public school in a different local education agency in the same state', '1823' => 'Transfer from a public school in a different state', '1821' => 'Transfer from a public school in the same local education agency', '1830' => 'Transfer from a school outside of the country', '1831' => 'Transfer from an institution', '1833' => 'Transfer from home schooling');

	/**
	 * @XmlValue	(type="string", name="NCES0619EntryTypeType")
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
		if (!is_string($value)) {
			throw new \Exception(sprintf('Supplied %s value was not %s', 'value', 'string'));
		}

		if (empty(static::$enumValue[$value])) {
			throw new \Exception(sprintf('Supplied %s value (%s) was not a valid enumerated value.', 'NCES0619EntryTypeType', $value));
		}
	
		return $value;
	}

	public function __toString() {
		return (string) $this->value;
	}
} // end class NCES0619EntryTypeType
