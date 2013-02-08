<?php
namespace org\sifinfo\www\infrastructure\_2_x;



/**
 * @XmlNamespaces ({
 *	@XmlNamespace(url="http://www.sifinfo.org/infrastructure/2.x", prefix="")
 * })
 * @XmlRootEntity	(xml="NCES0031SchoolLevelType")
 */
class NCES0031SchoolLevelType {
	/**
	 */
	static protected $enumValue = array('0013' => 'Adult', '1302' => 'All levels', '1304' => 'Elementary', '2402' => 'High school', '0787' => 'Infant/toddler', '2399' => 'Intermediate', '2602' => 'Junior high school', '2400' => 'Middle', '0789' => 'Pre-kindergarten', '1981' => 'Preschool/early childhood', '2397' => 'Primary', '2403' => 'Secondary');

	/**
	 * @XmlElement	(type="\org\sifinfo\www\infrastructure\_2_x\Token", name="value")
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
		if (!is_token($value)) {
			throw new \Exception(sprintf('Supplied %s value was not %s', 'value', 'token'));
		}

		if (empty(static::$enumValue[$value])) {
			throw new \Exception(sprintf('Supplied %s value (%s) was not a valid enumerated value.', 'NCES0031SchoolLevelType', $value));
		}
	
		return $value;
	}

	public function __toString() {
		return (string) $this->value;
	}
} // end class NCES0031SchoolLevelType
