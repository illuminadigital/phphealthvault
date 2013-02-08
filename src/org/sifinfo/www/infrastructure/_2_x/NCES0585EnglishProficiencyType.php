<?php
namespace org\sifinfo\www\infrastructure\_2_x;



/**
 * @XmlNamespaces ({
 *	@XmlNamespace(url="http://www.sifinfo.org/infrastructure/2.x", prefix="")
 * })
 * @XmlRootEntity	(xml="NCES0585EnglishProficiencyType")
 */
class NCES0585EnglishProficiencyType {
	/**
	 */
	static protected $enumValue = array('1634' => 'Fluent English speaker', '2349' => 'Limited English proficient/English language learner', '1633' => 'Native English speaker', '1635' => 'Non-English speaking', '1636' => 'Redesignated as fluent English proficient', '9997' => 'Unknown');

	/**
	 * @XmlValue	(type="string", name="NCES0585EnglishProficiencyType")
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
			throw new \Exception(sprintf('Supplied %s value (%s) was not a valid enumerated value.', 'NCES0585EnglishProficiencyType', $value));
		}
	
		return $value;
	}

	public function __toString() {
		return (string) $this->value;
	}
} // end class NCES0585EnglishProficiencyType
