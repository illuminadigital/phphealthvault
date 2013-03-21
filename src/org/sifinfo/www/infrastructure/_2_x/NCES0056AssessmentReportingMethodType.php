<?php
namespace org\sifinfo\www\infrastructure\_2_x;



/**
 * @XmlNamespaces ({
 *	@XmlNamespace(url="http://www.sifinfo.org/infrastructure/2.x", prefix="")
 * })
 * @XmlRootEntity	(xml="NCES0056AssessmentReportingMethodType")
 */
class NCES0056AssessmentReportingMethodType {
	/**
	 */
	static protected $enumValue = array('0512' => 'Achievement/proficiency level', '0494' => 'ACT score', '0490' => 'Age score', '0491' => 'C-scaled scores', '0492' => 'College Board examination scores', '0493' => 'Grade equivalent or grade-level indicator', '3473' => 'Graduation score', '3474' => 'Growth/value-added/indexing', '3475' => 'International Baccalaureate score', '0144' => 'Letter grade/mark', '0513' => 'Mastery level', '0497' => 'Normal curve equivalent', '0498' => 'Normalized standard score', '0499' => 'Number score', '9999' => 'Other', '0500' => 'Pass-fail', '3476' => 'Percentile', '0502' => 'Percentile rank', '0503' => 'Proficiency level', '0504' => 'Ranking', '0505' => 'Ratio IQ\'s', '3478' => 'Raw score', '3479' => 'Scale score', '0506' => 'Standard age score', '0508' => 'Stanine score', '0509' => 'Sten score', '0510' => 'T-score', '3480' => 'Workplace readiness score', '0511' => 'Z-score');

	/**
	 * List of manually overridden properties that should not be re-generated automatically
	 * @var array
	 */
	protected $_overrides = array();


	/**
	 * @XmlValue	(type="string", name="NCES0056AssessmentReportingMethodType")
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
			throw new \Exception(sprintf('Supplied %s value (%s) was not a valid enumerated value.', 'NCES0056AssessmentReportingMethodType', $value));
		}
	
		return $value;
	}

	public function __toString() {
		return (string) $this->value;
	}
} // end class NCES0056AssessmentReportingMethodType
