<?php
namespace org\sifinfo\www\infrastructure\_2_x;



/**
 * @XmlNamespaces ({
 *	@XmlNamespace(url="http://www.sifinfo.org/infrastructure/2.x", prefix="")
 * })
 * @XmlRootEntity	(xml="SCEDSecondaryCoursesType")
 */
class SCEDSecondaryCoursesType {
	/**
	 */
	static protected $enumValue = array('01' => 'English Language and Literature', '02' => 'Mathematics', '03' => 'Life and Physical Sciences', '04' => 'Social Sciences and History', '05' => 'Fine and Performing Arts', '06' => 'Foreign Language and Literature', '07' => 'Religious Education and Theology', '08' => 'Physical, Health, and Safety Education', '09' => 'Military Science', '10' => 'Computer and Information Sciences', '11' => 'Communication and Audio/Visual Technology', '12' => 'Business and Marketing', '13' => 'Manufacturing', '14' => 'Health Care Sciences', '15' => 'Public, Protective, and Government Service', '16' => 'Hospitality and Tourism', '17' => 'Architecture and Construction', '18' => 'Agriculture, Food, and Natural Resources', '19' => 'Human Services', '20' => 'Transportation, Distribution and Logistics', '21' => 'Engineering and Technology', '22' => 'Miscellaneous');

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
			throw new \Exception(sprintf('Supplied %s value (%s) was not a valid enumerated value.', 'SCEDSecondaryCoursesType', $value));
		}
	
		return $value;
	}

	public function __toString() {
		return (string) $this->value;
	}
} // end class SCEDSecondaryCoursesType
