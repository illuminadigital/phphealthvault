<?php
namespace org\sifinfo\www\infrastructure\_2_x;



/**
 * @XmlNamespaces ({
 *	@XmlNamespace(url="http://www.sifinfo.org/infrastructure/2.x", prefix="")
 * })
 * @XmlRootEntity	(xml="NCES0274StudentFamilyProgramTypeType")
 */
class NCES0274StudentFamilyProgramTypeType {
	/**
	 */
	static protected $enumValue = array('0279' => 'Academic/instructional program in regular education', '0280' => 'Adult basic education/remedial instruction', '0248' => 'After school child care', '0875' => 'After school enrichment', '0249' => 'Alternative education program', '0250' => 'Before school child care', '0876' => 'Before school enrichment', '0251' => 'Bilingual education', '0281' => 'Child care so that parents can attend school meetings', '0252' => 'Community service projects', '0253' => 'Compensatory education', '0282' => 'Continuing professional education', '0255' => 'Counseling', '0247' => 'Day care', '0256' => 'English as a second language', '2389' => 'Even Start', '0257' => 'Free and reduced price school meals programs', '2381' => 'Gifted and talented', '0246' => 'Head Start', '0283' => 'Health or social services', '0260' => 'Hearing or vision screening', '0261' => 'Higher order thinking skills', '0241' => 'Infant and toddlers program', '0284' => 'Literacy', '2393' => 'Magnet program', '0262' => 'Medical services', '0245' => 'Migrant early childhood program', '0285' => 'Occupational education', '0286' => 'Orientation to school setting for new families', '9999' => 'Other', '0287' => 'Parent training/involvement', '0288' => 'Parenting education', '0263' => 'Programs for migrants during the school year', '0265' => 'Programs for migrants during the summer', '0267' => 'Reading/literacy', '0289' => 'Recreational/advocational program', '0240' => 'Regular prekindergarten program', '0268' => 'School supplies', '0269' => 'Services for out-of-school youth', '0271' => 'Special (one-time) events', '0270' => 'Special education program', '0242' => 'Special education services for Birth-Age 2', '0244' => 'Special education services for preschoolers', '0272' => 'Student assistance programs such as counseling, mentoring, identification and referral', '0273' => 'Summer child care', '0342' => 'Technology', '0277' => 'Transportation', '0278' => 'Tutoring/remedial instruction');

	/**
	 * @XmlValue	(type="string", name="NCES0274StudentFamilyProgramTypeType")
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
			throw new \Exception(sprintf('Supplied %s value (%s) was not a valid enumerated value.', 'NCES0274StudentFamilyProgramTypeType', $value));
		}
	
		return $value;
	}

	public function __toString() {
		return (string) $this->value;
	}
} // end class NCES0274StudentFamilyProgramTypeType
