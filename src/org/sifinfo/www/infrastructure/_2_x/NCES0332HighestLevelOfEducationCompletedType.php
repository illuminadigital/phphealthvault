<?php
namespace org\sifinfo\www\infrastructure\_2_x;



/**
 * @XmlNamespaces ({
 *	@XmlNamespace(url="http://www.sifinfo.org/infrastructure/2.x", prefix="")
 * })
 * @XmlRootEntity	(xml="NCES0332HighestLevelOfEducationCompletedType")
 */
class NCES0332HighestLevelOfEducationCompletedType {
	/**
	 */
	static protected $enumValue = array('1809' => '12th grade, no diploma', '1046' => 'Adult basic education diploma', '1050' => 'Associate\'s degree (two years or more)', '1051' => 'Bachelor\'s (Baccalaureate) degree', '1057' => 'Doctoral (Doctor\'s) degree', '0798' => 'Eighth grade', '0801' => 'Eleventh Grade', '0794' => 'Fifth grade', '0790' => 'First grade', '1053' => 'First-professional degree', '1047' => 'Formal award, certificate or diploma (less than one year)', '1048' => 'Formal award, certificate or diploma (more than or equal to one year)', '0793' => 'Fourth grade', '1052' => 'Graduate certificate', '2408' => 'High school completers (e.g., certificate of attendance)', '1044' => 'High school diploma', '2409' => 'High school equivalency (e.g., GED)', '0805' => 'Kindergarten', '1054' => 'Master\'s degree (e.g., M.A., M.S., M. Eng., M.Ed., M.S.W., M.B.A., M.L.S.)', '0799' => 'Ninth grade', '1043' => 'No school completed', '9999' => 'Other', '1056' => 'Post-professional degree', '0788' => 'Preschool/Prekindergarten', '0791' => 'Second grade', '0796' => 'Seventh grade', '0795' => 'Sixth grade', '1049' => 'Some college but no degree', '1055' => 'Specialist\'s degree (e.g., Ed.S.)', '0800' => 'Tenth grade', '0792' => 'Third grade', '0819' => 'Vocational certificate');

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
			throw new \Exception(sprintf('Supplied %s value (%s) was not a valid enumerated value.', 'NCES0332HighestLevelOfEducationCompletedType', $value));
		}
	
		return $value;
	}

	public function __toString() {
		return (string) $this->value;
	}
} // end class NCES0332HighestLevelOfEducationCompletedType
