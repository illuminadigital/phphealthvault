<?php
namespace org\sifinfo\www\infrastructure\_2_x;



/**
 * @XmlNamespaces ({
 *	@XmlNamespace(url="http://www.sifinfo.org/infrastructure/2.x", prefix="")
 * })
 * @XmlRootEntity	(xml="StudentPlacementTitleIServicesType")
 */
class StudentPlacementTitleIServicesType {
	/**
	 */
	static protected $enumValue = array('S001' => 'Reading / language program', 'S002' => 'Mathematics program', 'S003' => 'Science program', 'S004' => 'Social studies program', 'S005' => 'Economics program', 'S006' => 'Computers program', 'S007' => 'Vocational / career program', 'S008' => 'Support guidance / advocacy program', 'S009' => 'Study skills program', 'S010' => 'After-school tutoring program', 'S011' => 'Summer school program', 'S012' => '4-year-old program', 'S013' => '3-year-old program', 'S014' => 'Extended kindergarten program (beyond half day)', 'S015' => 'Health / dental / eye care service', 'S016' => 'Extended instruction time program', 'S017' => 'Supplemental outside provider instructional services');

	/**
	 * @XmlValue	(type="string", name="StudentPlacementTitleIServicesType")
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
			throw new \Exception(sprintf('Supplied %s value (%s) was not a valid enumerated value.', 'StudentPlacementTitleIServicesType', $value));
		}
	
		return $value;
	}

	public function __toString() {
		return (string) $this->value;
	}
} // end class StudentPlacementTitleIServicesType
