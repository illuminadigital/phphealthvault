<?php
namespace org\sifinfo\www\infrastructure\_2_x;



/**
 * @XmlNamespaces ({
 *	@XmlNamespace(url="http://www.sifinfo.org/infrastructure/2.x", prefix="")
 * })
 * @XmlRootEntity	(xml="SCEDNonSecondaryCoursesType")
 */
class SCEDNonSecondaryCoursesType {
	/**
	 */
	static protected $enumValue = array('51' => 'English Language and Literature', '52' => 'Mathematics', '53' => 'Life and Physical Sciences', '54' => 'Social Sciences and History', '55' => 'Fine and Performing Arts', '56' => 'Foreign Language and Literature', '57' => 'Religious Education and Theology', '58' => 'Physical, Health, and Safety Education', '59' => 'Military Science', '60' => 'Computer and Information Sciences', '61' => 'Communication and Audio/Visual Technology', '62' => 'Business and Marketing', '63' => 'Manufacturing', '64' => 'Health Care Sciences', '65' => 'Public, Protective, and Government Service', '66' => 'Hospitality and Tourism', '67' => 'Architecture and Construction', '68' => 'Agriculture, Food, and Natural Resources', '69' => 'Human Services', '70' => 'Transportation, Distribution and Logistics', '71' => 'Engineering and Technology', '72' => 'Miscellaneous');

	/**
	 * @XmlValue	(type="string", name="SCEDNonSecondaryCoursesType")
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
			throw new \Exception(sprintf('Supplied %s value (%s) was not a valid enumerated value.', 'SCEDNonSecondaryCoursesType', $value));
		}
	
		return $value;
	}

	public function __toString() {
		return (string) $this->value;
	}
} // end class SCEDNonSecondaryCoursesType
