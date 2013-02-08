<?php
namespace org\sifinfo\www\infrastructure\_2_x;



/**
 * @XmlNamespaces ({
 *	@XmlNamespace(url="http://www.sifinfo.org/infrastructure/2.x", prefix="")
 * })
 * @XmlRootEntity	(xml="NCES0798EarlyChildhoodProgramSettingType")
 */
class NCES0798EarlyChildhoodProgramSettingType {
	/**
	 */
	static protected $enumValue = array('2170' => 'Business/workplace', '2164' => 'Child\'s home', '2167' => 'Childcare facility', '2190' => 'Facility sponsored by a state agency', '2168' => 'Head Start center (no matter where offered)', '2165' => 'Home other than the child\'s', '2187' => 'Hospital facility', '9999' => 'Other', '2191' => 'Other childcare facility', '2188' => 'Other community-based setting', '0776' => 'Private school', '2166' => 'Public school facility', '2169' => 'Religion-affiliated institution', '2174' => 'Shelter or orphanage', '3497' => 'Special education classroom in a private school', '3496' => 'Special education classroom in a public school facility', '2184' => 'Special education classroom in child care facility', '2172' => 'University/postsecondary institution');

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
			throw new \Exception(sprintf('Supplied %s value (%s) was not a valid enumerated value.', 'NCES0798EarlyChildhoodProgramSettingType', $value));
		}
	
		return $value;
	}

	public function __toString() {
		return (string) $this->value;
	}
} // end class NCES0798EarlyChildhoodProgramSettingType
