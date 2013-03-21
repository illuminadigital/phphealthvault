<?php
namespace org\sifinfo\www\infrastructure\_2_x;



/**
 * @XmlNamespaces ({
 *	@XmlNamespace(url="http://www.sifinfo.org/infrastructure/2.x", prefix="")
 * })
 * @XmlRootEntity	(xml="NCES1049IncidentCodeType")
 */
class NCES1049IncidentCodeType {
	/**
	 */
	static protected $enumValue = array('1000' => 'Alcohol (liquor law violations: possession, use, sale)', '1010' => 'Sale of alcohol', '1020' => 'Distribution of alcohol', '1030' => 'Drinking alcohol', '1040' => 'Possession of alcohol', '1050' => 'Suspicion of alcohol use', '1097' => 'Other alcohol', '1100' => 'Arson (Setting a Fire)', '1200' => 'Attendance Policy Violation (Not Attending School or Classes as Required)', '1210' => 'Forging absence excuse', '1220' => 'Skipping class', '1230' => 'Tardiness', '1240' => 'Truancy', '1297' => 'Other attendance policy violation', '1300' => 'Battery (Physical Attack/Harm)', '1400' => 'Burglary/Breaking and Entering (Stealing Property/Unlawful Entry)', '1500' => 'Disorderly Conduct (Disruptive Behavior)', '1600' => 'Drugs Excluding Alcohol and Tobacco (Illegal Drug Possession, Sale, Use/Under the Influence)', '1610' => 'Sale of illegal drug', '1620' => 'Sale of substance represented as an illegal drug', '1630' => 'Distribution of illegal drug', '1640' => 'Distribution of substance represented as an illegal drug', '1650' => 'Use of illegal drug', '1660' => 'Possession of illegal drug', '1670' => 'Possession of drug paraphernalia', '1680' => 'Suspicion of use', '1697' => 'Other drug offense', '1700' => 'Fighting (Mutual Altercation)', '1800' => 'Harassment, Nonsexual (Physical, Verbal, or Psychological)', '1810' => 'Bullying', '1820' => 'Hazing', '1897' => 'Other nonsexual harassment', '1900' => 'Harassment, Sexual (Unwelcome Sexual Contact)', '2000' => 'Homicide (Murder or Manslaughter)', '2100' => 'Inappropriate Use of Medication (Prescription or over-the-counter)', '2110' => 'Sale of medication', '2120' => 'Distribution of medication', '2130' => 'Use of medication in violation of school rules', '2140' => 'Possession of medication in violation of school rules', '2150' => 'Suspicion of use of medication in violation of school rules', '2197' => 'Other inappropriate use of medication', '2200' => 'Insubordination (Disobedience)', '2300' => 'Kidnapping (Abduction)', '2400' => 'Obscene Behavior', '2410' => 'Displays of affection in violation of school policy', '2420' => 'Obscene written messages', '2430' => 'Drawing obscene pictures', '2440' => 'Obscene electronic communication', '2450' => 'Obscene gestures', '2460' => 'Obscene language/profanity', '2497' => 'Other obscene behavior', '2500' => 'Physical Altercation, Minor (Pushing, Shoving)', '2600' => 'Robbery (Taking of Things by Force)', '2700' => 'School Threat (Threat of Destruction or Harm)', '2710' => 'Bomb threat', '2720' => 'Fire alarm', '2730' => 'Chemical/biological threat', '2740' => 'Terroristic threat', '2797' => 'Other school threat', '2800' => 'Sexual Battery (Sexual Assault)', '2900' => 'Sexual Offenses, Other (Lewd Behavior, Indecent Exposure)', '3000' => 'Suicide', '3010' => 'Suicide', '3020' => 'Attempted suicide', '3097' => 'Other suicide offense', '3100' => 'Theft (Stealing Personal or Other Property)', '3110' => 'General theft, Person', '3120' => 'General theft, Other entity', '3197' => 'Other theft', '3200' => 'Threat/Intimidation (Causing Fear of Harm)', '3210' => 'Physical threat', '3220' => 'Verbal threat', '3230' => 'Written threat', '3240' => 'Electronic threat', '3297' => 'Other threat', '3300' => 'Tobacco (Possession or Use)', '3310' => 'Sale of tobacco', '3320' => 'Distribution of tobacco', '3330' => 'Use of tobacco', '3340' => 'Possession of tobacco', '3350' => 'Suspicion of use of tobacco', '3397' => 'Other tobacco offense', '3400' => 'Trespassing (Unlawful or Unauthorized Presence)', '3500' => 'Vandalism (Damage to School or Personal Property)', '3510' => 'Vandalism of school property', '3520' => 'Vandalism of personal property', '3597' => 'Other vandalism', '3600' => 'Violation of School Rules (Disobeying School Policy)', '3700' => 'Weapons Possession (Firearms and Other Weapons)', '9000' => 'Other Offenses (e.g., Forgery, Extortion)');

	/**
	 * List of manually overridden properties that should not be re-generated automatically
	 * @var array
	 */
	protected $_overrides = array();


	/**
	 * @XmlValue	(type="string", name="NCES1049IncidentCodeType")
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
			throw new \Exception(sprintf('Supplied %s value (%s) was not a valid enumerated value.', 'NCES1049IncidentCodeType', $value));
		}
	
		return $value;
	}

	public function __toString() {
		return (string) $this->value;
	}
} // end class NCES1049IncidentCodeType
