<?php
namespace org\sifinfo\www\infrastructure\_2_x;



/**
 * @XmlNamespaces ({
 *	@XmlNamespace(url="http://www.sifinfo.org/infrastructure/2.x", prefix="")
 * })
 * @XmlRootEntity	(xml="NCES0436TeachingAssignmentType")
 */
class NCES0436TeachingAssignmentType {
	/**
	 */
	static protected $enumValue = array('1296' => 'Early childhood', '0805' => 'Kindergarten', '1304' => 'Elementary', '1305' => 'Accounting', '1306' => 'Business and management', '1307' => 'Other business', '1308' => 'English or language arts', '1309' => 'Journalism/communications', '0560' => 'Reading', '1310' => 'Speech', '1311' => 'Architecture or environmental design', '0684' => 'Dance', '1312' => 'Drama/Theater', '1313' => 'Music', '1314' => 'Visual Arts', '1315' => 'Chinese', '1316' => 'French', '1317' => 'German', '1318' => 'Italian', '1319' => 'Japanese', '1320' => 'Latin', '1321' => 'Russian', '1322' => 'Spanish', '1323' => 'Other languages', '1324' => 'Computer Science', '1166' => 'Mathematics', '1325' => 'Biology or life science', '1326' => 'Chemistry', '1327' => 'Earth/space science/geology', '1328' => 'General science', '1329' => 'Health education', '1330' => 'Physical science', '1331' => 'Physics', '1332' => 'Other natural sciences', '1333' => 'American Indian/Native American studies', '1334' => 'Anthropology', '1335' => 'Civics', '1336' => 'Economics', '0547' => 'Geography', '0550' => 'History', '1337' => 'Humanities', '1338' => 'Law', '1339' => 'Philosophy', '1340' => 'Political science and government', '1181' => 'Psychology', '1342' => 'Religion', '0563' => 'Social studies', '1343' => 'Sociology', '1344' => 'Other area or ethnic studies', '1345' => 'Other social studies/social sciences', '1346' => 'Basic skills or remedial education', '0251' => 'Bilingual education', '0256' => 'English as a Second Language', '2381' => 'Gifted and talented', '0557' => 'Military science', '0559' => 'Physical education', '2043' => 'Special education', '1348' => 'Autism', '1349' => 'Deaf and hard-of-hearing', '1350' => 'Developmentally delayed', '1351' => 'Early childhood special education', '1352' => 'Emotionally disturbed or behavior disorders', '1353' => 'Learning disabilities', '1354' => 'Mentally disabled', '1355' => 'Mildly/moderately disabled', '1356' => 'Orthopedically impaired', '1358' => 'Speech/language impaired', '1359' => 'Traumatically brain-injured', '1360' => 'Visually impaired', '1361' => 'Other special education', '1362' => 'Agriculture or natural resources', '1363' => 'Business/office', '1364' => 'Career education', '1153' => 'Communications/technologies', '1366' => 'Cosmetology', '1367' => 'Family and consumer science (home economics)', '1368' => 'Food services', '1369' => 'Health professions and occupations', '1370' => 'Trades and industry (e.g., CADD, electronics repair, mechanics, precision production)', '1371' => 'Other vocational/technical education', '9999' => 'Other');

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
			throw new \Exception(sprintf('Supplied %s value (%s) was not a valid enumerated value.', 'NCES0436TeachingAssignmentType', $value));
		}
	
		return $value;
	}

	public function __toString() {
		return (string) $this->value;
	}
} // end class NCES0436TeachingAssignmentType
