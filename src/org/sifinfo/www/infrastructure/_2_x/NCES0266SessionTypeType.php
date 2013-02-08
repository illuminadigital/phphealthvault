<?php
namespace org\sifinfo\www\infrastructure\_2_x;



/**
 * @XmlNamespaces ({
 *	@XmlNamespace(url="http://www.sifinfo.org/infrastructure/2.x", prefix="")
 * })
 * @XmlRootEntity	(xml="NCES0266SessionTypeType")
 */
class NCES0266SessionTypeType {
	/**
	 */
	static protected $enumValue = array('0827' => 'Full school year', '0834' => 'Intersession', '0835' => 'Long session', '0832' => 'Mini-term', '9999' => 'Other', '0830' => 'Quarter', '0831' => 'Quinmester', '0828' => 'Semester', '0833' => 'Summer term', '0829' => 'Trimester', '0837' => 'Twelve month');

	/**
	 * @XmlValue	(type="string", name="NCES0266SessionTypeType")
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
			throw new \Exception(sprintf('Supplied %s value (%s) was not a valid enumerated value.', 'NCES0266SessionTypeType', $value));
		}
	
		return $value;
	}

	public function __toString() {
		return (string) $this->value;
	}
} // end class NCES0266SessionTypeType
