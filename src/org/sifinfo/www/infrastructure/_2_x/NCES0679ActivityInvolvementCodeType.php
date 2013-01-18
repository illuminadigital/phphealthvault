<?php
namespace org\sifinfo\www\infrastructure\_2_x;



/**
 * @XmlNamespaces ({
 *	@XmlNamespace(url="http://www.sifinfo.org/infrastructure/2.x", prefix="")
 * })
 * @XmlRootEntity	(xml="NCES0679ActivityInvolvementCodeType")
 */
class NCES0679ActivityInvolvementCodeType {
	/**
	 */
	static protected $enumValue = array('0721' => '4 H', '0729' => 'Academic team/knowledge bowl', '0628' => 'Archery', '0683' => 'Art and graphic design', '0700' => 'Art club', '0629' => 'Badminton', '0677' => 'Band', '0630' => 'Baseball', '0631' => 'Basketball', '0633' => 'Bowling', '0634' => 'Boxing', '0718' => 'Boy Scouts', '0691' => 'Broadcasting', '0713' => 'Business Professionals of America', '0667' => 'Cheerleading', '0722' => 'Chess club', '0680' => 'Chorus', '0671' => 'Class officer', '0670' => 'Class president', '0701' => 'Computer club', '0635' => 'Crew', '0636' => 'Cross country', '0684' => 'Dance', '0685' => 'Dance team', '0707' => 'Distributive Education Clubs of America (DECA)', '0637' => 'Diving', '0696' => 'Drama club', '0688' => 'Drill team', '0694' => 'Family consumer science', '0705' => 'Family, Career and Community Leaders of America', '0639' => 'Fencing', '0638' => 'Field hockey', '0640' => 'Football', '0724' => 'Fraternity', '0702' => 'Future Business Leaders of America - Phi Beta Lambda (FBLA - PBL)', '0703' => 'Future Teachers of America', '0719' => 'Girl Scouts', '0641' => 'Golf', '0642' => 'Gymnastics', '0706' => 'Health Occupations Students of America', '0644' => 'Ice hockey', '0679' => 'Jazz ensemble', '0690' => 'Journalism', '0717' => 'Key Club', '0645' => 'Lacrosse', '0697' => 'Language club', '0693' => 'Literary magazine', '0646' => 'Martial arts', '0732' => 'Mu alpha theta', '0674' => 'Music - instrumental', '0676' => 'Music - theory and composition', '0673' => 'Music - vocal', '0730' => 'National Beta Club', '0726' => 'National Forensic League', '0704' => 'National Future Farmers of America (FFA)', '0727' => 'National Honor Society', '0678' => 'Orchestra', '9999' => 'Other', '0725' => 'Other club or organization', '0735' => 'Other honor society', '0681' => 'Other music', '0689' => 'Other performing arts', '0668' => 'Other sport', '0672' => 'Other student leadership and government', '0714' => 'Peer counseling', '0647' => 'Polo', '0733' => 'Psi Eta (Science Honorary)', '0648' => 'Racquetball', '0664' => 'Rodeo', '0649' => 'Rugby', '0650' => 'Sailing', '0699' => 'Science club', '0665' => 'Scuba diving', '0651' => 'Skiing', '0652' => 'Soccer', '0653' => 'Softball', '0723' => 'Sorority', '0695' => 'Speech/debate', '0655' => 'Squash', '0728' => 'State Honor Society', '0932' => 'Student body officer', '0669' => 'Student body president', '0716' => 'Students Against Drunk Driving (SADD)', '0656' => 'Swimming', '0657' => 'Synchronized swimming', '0658' => 'Team handball', '0666' => 'Team manager', '0708' => 'Technology Student Association (TSA)', '0659' => 'Tennis', '0682' => 'Theater/drama', '0734' => 'Thespian Society', '0660' => 'Track and field', '0715' => 'Tutoring', '0712' => 'Vocational Industrial Clubs of America', '0661' => 'Volleyball', '0662' => 'Water polo', '0663' => 'Wrestling', '0692' => 'Year book');

	/**
	 * @XmlValue	(type="string", name="NCES0679ActivityInvolvementCodeType")
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
			throw new \Exception(sprintf('Supplied %s value (%s) was not a valid enumerated value.', 'NCES0679ActivityInvolvementCodeType', $value));
		}
	
		return $value;
	}

	public function __toString() {
		return (string) $this->value;
	}
} // end class NCES0679ActivityInvolvementCodeType
