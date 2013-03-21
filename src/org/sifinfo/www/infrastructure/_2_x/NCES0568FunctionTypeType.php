<?php
namespace org\sifinfo\www\infrastructure\_2_x;



/**
 * @XmlNamespaces ({
 *	@XmlNamespace(url="http://www.sifinfo.org/infrastructure/2.x", prefix="")
 * })
 * @XmlRootEntity	(xml="NCES0568FunctionTypeType")
 */
class NCES0568FunctionTypeType {
	/**
	 */
	static protected $enumValue = array('1000' => 'Instruction', '2000' => 'Support Services', '2100' => 'Support Services-Students', '2110' => 'Attendance and Social Work Services', '2120' => 'Guidance Services', '2130' => 'Health Services', '2140' => 'Psychological Services', '2150' => 'Speech Pathology and Audiology Services', '2160' => 'Occupational Therapy-Related Services', '2190' => 'Other Support Services-Student', '2200' => 'Support Services-Instruction', '2210' => 'Improvement of Instruction', '2212' => 'Instruction and Curriculum Development', '2213' => 'Instructional Staff Training', '2219' => 'Other Improvement of Instruction Services', '2220' => 'Library/Media Services', '2230' => 'Instruction-Related Technology', '2240' => 'Academic Student Assessment', '2290' => 'Other Support Services', '2300' => 'Support Services-General Administration', '2310' => 'Board of Education', '2320' => 'Executive Administration', '2400' => 'Support Services-School Administration', '2410' => 'Office of the Principal', '2490' => 'Other Support Services-School Administration', '2500' => 'Central Services', '2510' => 'Fiscal Services', '2520' => 'Purchasing, Warehousing, and Distributing Services', '2530' => 'Printing, Publishing, and Duplicating Services', '2540' => 'Planning, Research, Development, and Evaluation Services', '2560' => 'Public Information Services', '2570' => 'Personnel Services', '2580' => 'Administrative Technology Services', '2590' => 'Other Support Services-Central Services', '2600' => 'Operation and Maintenance of Plant', '2610' => 'Operation of Buildings', '2620' => 'Maintenance of Buildings', '2630' => 'Care and Upkeep of Grounds', '2640' => 'Care and Upkeep of Equipment', '2650' => 'Vehicle Operation and Maintenance (Other Than Student Transportation Vehicles)', '2660' => 'Security', '2670' => 'Safety', '2680' => 'Other Operation and Maintenance of Plant', '2700' => 'Student Transportation', '2710' => 'Vehicle Operation', '2720' => 'Monitoring services', '2730' => 'Vehicle Servicing and Maintenance', '2790' => 'Other Student Transportation Services', '2900' => 'Other Support Services', '3000' => 'Operation of Non-Instructional Services', '3100' => 'Food Services Operations', '3200' => 'Enterprise Operations', '3300' => 'Community Services Operation', '4000' => 'Facilities Acquisition and Construction', '4100' => 'Land Acquisition', '4200' => 'Land Improvement', '4300' => 'Architecture and Engineering', '4400' => 'Educational Specifications Development', '4500' => 'Building Acquisition and Construction', '4600' => 'Site Improvement', '4700' => 'Building Improvements', '4900' => 'Other Facilities Acquisition and Construction', '9999' => 'Other');

	/**
	 * List of manually overridden properties that should not be re-generated automatically
	 * @var array
	 */
	protected $_overrides = array();


	/**
	 * @XmlValue	(type="string", name="NCES0568FunctionTypeType")
	 */
	protected $value;

	public function __construct($value = NULL) {
		$this->value = ($value===NULL) ? NULL : $this->validateValue($value);
	}

	public function getValue($autoCreate = TRUE) {
		if ($this->value===NULL && $autoCreate && ! isset($this->_overrides['value']) ) {
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
			throw new \Exception(sprintf('Supplied %s value (%s) was not a valid enumerated value.', 'NCES0568FunctionTypeType', $value));
		}
	
		return $value;
	}

	public function __toString() {
		return (string) $this->value;
	}
} // end class NCES0568FunctionTypeType
