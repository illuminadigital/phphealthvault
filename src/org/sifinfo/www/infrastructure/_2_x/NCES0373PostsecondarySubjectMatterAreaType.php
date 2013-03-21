<?php
namespace org\sifinfo\www\infrastructure\_2_x;



/**
 * @XmlNamespaces ({
 *	@XmlNamespace(url="http://www.sifinfo.org/infrastructure/2.x", prefix="")
 * })
 * @XmlRootEntity	(xml="NCES0373PostsecondarySubjectMatterAreaType")
 */
class NCES0373PostsecondarySubjectMatterAreaType {
	/**
	 */
	static protected $enumValue = array('1146' => 'Agricultural business and production', '1147' => 'Agricultural sciences', '1149' => 'Architecture and related programs', '1150' => 'Area, ethnic and cultural studies', '1170' => 'Basic skills', '1165' => 'Biological sciences/life sciences', '1191' => 'Business management and administrative services', '1171' => 'Citizenship activities', '1152' => 'Communications', '1153' => 'Communications technologies', '1154' => 'Computer and information sciences', '1148' => 'Conservation and renewable natural resources', '1185' => 'Construction trades', '1156' => 'Education', '1157' => 'Engineering', '1158' => 'Engineering-related technologies', '1162' => 'English language and literature/letters', '2371' => 'Foreign language and literature', '1190' => 'Health professions and related sciences', '1172' => 'Health-related knowledge and skills', '0551' => 'Home economics', '1173' => 'Interpersonal and social skills', '1161' => 'Law and legal studies', '1174' => 'Leisure and recreational activities', '1163' => 'Liberal arts and sciences, general studies and humanities', '1164' => 'Library science', '1151' => 'Marketing operations/marketing and distributing', '1166' => 'Mathematics', '1186' => 'Mechanics and repairers', '1168' => 'Military technologies', '0558' => 'Multi/Interdisciplinary studies', '9999' => 'Other', '1176' => 'Parks, recreation, leisure and fitness studies', '1155' => 'Personal and miscellaneous services', '1175' => 'Personal awareness and self-improvement', '1177' => 'Philosophy and religion', '1179' => 'Physical sciences', '1187' => 'Precision production trades', '1182' => 'Protective services', '1181' => 'Psychology', '1183' => 'Public administration and services', '1167' => 'Reserve Officers\' Training Corp (ROTC)', '1180' => 'Science technologies', '1184' => 'Social sciences and history', '1160' => 'Technology education/industrial arts', '1178' => 'Theological studies and religious vocations', '1188' => 'Transportation and materials moving workers', '1189' => 'Visual and performing arts', '1159' => 'Vocational home economics');

	/**
	 * List of manually overridden properties that should not be re-generated automatically
	 * @var array
	 */
	protected $_overrides = array();


	/**
	 * @XmlValue	(type="string", name="NCES0373PostsecondarySubjectMatterAreaType")
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
			throw new \Exception(sprintf('Supplied %s value (%s) was not a valid enumerated value.', 'NCES0373PostsecondarySubjectMatterAreaType', $value));
		}
	
		return $value;
	}

	public function __toString() {
		return (string) $this->value;
	}
} // end class NCES0373PostsecondarySubjectMatterAreaType
