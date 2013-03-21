<?php
namespace org\sifinfo\www\infrastructure\_2_x;



/**
 * @XmlNamespaces ({
 *	@XmlNamespace(url="http://www.sifinfo.org/infrastructure/2.x", prefix="")
 * })
 * @XmlRootEntity	(xml="NCES0229ProgramTypeType")
 */
class NCES0229ProgramTypeType {
	/**
	 */
	static protected $enumValue = array('0100' => 'Regular education', '0200' => 'Special Education Services', '0201' => 'Early identification', '0202' => 'Early intervention', '0203' => 'Service for individuals with autism', '0204' => 'Service for individuals with deaf-blindness', '0205' => 'Service for individuals with mental retardation', '0206' => 'Service for individuals with hearing impairment', '0207' => 'Service for individuals with visual impairment', '0208' => 'Service for individuals with orthopedic impairment', '0209' => 'Service for individuals with speech or language impairment', '0210' => 'Service for individuals with serious emotional disturbance', '0211' => 'Service for individuals with specific learning disabilities', '0212' => 'Service for individuals with multiple disabilities', '0213' => 'Service for individuals with traumatic brain injury', '0214' => 'Psychological service', '0215' => 'Cross categorical', '0216' => 'Service for individuals with developmental delay', '0299' => 'Other special education services', '0300' => 'Vocational education', '0301' => 'Agriculture', '0302' => 'Consumer and home-making', '0303' => 'Marketing', '0304' => 'Health', '0305' => 'Technology/industrial arts', '0306' => 'Occupational home economics', '0307' => 'Business', '0308' => 'Technical', '0309' => 'Trade and industrial', '0399' => 'Other vocational education', '0400' => 'Technical preparatory', '0500' => 'Head Start', '0600' => 'Even Start', '0700' => 'Migrant education', '0800' => 'Indian education', '0900' => 'Compensatory services for disadvantaged students', '1000' => 'Bilingual education program', '1001' => 'Curriculum content in native language', '1002' => 'Developmental bilingual education', '1003' => 'Native language support', '1004' => 'Two-way bilingual education', '1100' => 'English as a second language (ESL) program', '1101' => 'Content ESL', '1200' => 'Gifted and talented', '1300' => 'Cocurricular programs', '1400' => 'Athletics', '1500' => 'Adult/continuing education', '1501' => 'Adult basic education', '1502' => 'Adult English as a second language', '1503' => 'Advanced adult basic education', '1504' => 'Life enrichment', '1505' => 'Occupational', '1506' => 'Retraining for new occupation', '1507' => 'Special interest', '1508' => 'Upgrading in current occupation', '1509' => 'General Educational Development (GED) preparation', '1599' => 'Other adult/continuing education', '1600' => 'Community/junior college education program', '1700' => 'Community services program', '1701' => 'Civic services', '1702' => 'Community recreation', '1703' => 'Coordination of casework', '1704' => 'Custody and child care services', '1705' => 'Public library services', '1706' => 'Welfare activities', '1799' => 'Other community services', '1800' => 'Substance abuse education/prevention', '1900' => 'Student retention/Dropout prevention', '2000' => 'Extended day/child care services', '2100' => 'Counseling services', '2200' => 'Immigrant education', '2300' => 'College preparatory', '2400' => 'International Baccalaureate', '2500' => 'Magnet/Special Program Emphasis', '2600' => 'Alternative education', '2700' => 'Library/media services', '2800' => 'Health services', '2900' => 'Remedial education', '3000' => 'School-To-Work Opportunities', '3100' => 'Service learning', '3200' => 'Section 504 Placement', '3300' => 'Teacher professional development/Mentoring', '9999' => 'Other');

	/**
	 * List of manually overridden properties that should not be re-generated automatically
	 * @var array
	 */
	protected $_overrides = array();


	/**
	 * @XmlValue	(type="string", name="NCES0229ProgramTypeType")
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
			throw new \Exception(sprintf('Supplied %s value (%s) was not a valid enumerated value.', 'NCES0229ProgramTypeType', $value));
		}
	
		return $value;
	}

	public function __toString() {
		return (string) $this->value;
	}
} // end class NCES0229ProgramTypeType
