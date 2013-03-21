<?php
namespace org\sifinfo\www\infrastructure\_2_x;



/**
 * @XmlNamespaces ({
 *	@XmlNamespace(url="http://www.sifinfo.org/infrastructure/2.x", prefix="")
 * })
 * @XmlRootEntity	(xml="NCES0067AssessmentTypeType")
 */
class NCES0067AssessmentTypeType {
	/**
	 */
	static protected $enumValue = array('0075' => 'Achievement test', '0076' => 'Advanced placement test', '3462' => 'Alternate assessment/ELL', '0077' => 'Alternate assessment/grade-level standards', '3461' => 'Alternatve assessment/modified standards', '3463' => 'Aptitude test', '0079' => 'Attitudinal test', '0081' => 'Cognitive and perceptual skills test', '0082' => 'Developmental observation', '0083' => 'Interest inventory', '0084' => 'Language proficiency test', '0087' => 'Manual dexterity test', '0088' => 'Mental ability (intelligence) test', '9999' => 'Other', '0089' => 'Performance assessment', '0090' => 'Personality test', '0092' => 'Portfolio assessment', '0093' => 'Psychological test', '0094' => 'Psychomotor test', '0095' => 'Reading readiness test');

	/**
	 * List of manually overridden properties that should not be re-generated automatically
	 * @var array
	 */
	protected $_overrides = array();


	/**
	 * @XmlValue	(type="string", name="NCES0067AssessmentTypeType")
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
			throw new \Exception(sprintf('Supplied %s value (%s) was not a valid enumerated value.', 'NCES0067AssessmentTypeType', $value));
		}
	
		return $value;
	}

	public function __toString() {
		return (string) $this->value;
	}
} // end class NCES0067AssessmentTypeType
