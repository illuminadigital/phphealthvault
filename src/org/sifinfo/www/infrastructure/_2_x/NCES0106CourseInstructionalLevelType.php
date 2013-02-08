<?php
namespace org\sifinfo\www\infrastructure\_2_x;



/**
 * @XmlNamespaces ({
 *	@XmlNamespace(url="http://www.sifinfo.org/infrastructure/2.x", prefix="")
 * })
 * @XmlRootEntity	(xml="NCES0106CourseInstructionalLevelType")
 */
class NCES0106CourseInstructionalLevelType {
	/**
	 */
	static protected $enumValue = array('0579' => 'Accepted as a high school equivalent', '0575' => 'Advanced placement', '0570' => 'Basic', '0576' => 'College level', '0578' => 'English Language Learner (ELL)', '0571' => 'General', '0573' => 'Gifted and talented level', '0572' => 'Honors level', '0574' => 'International Baccalaureate program', '9999' => 'Other', '0568' => 'Remedial', '0569' => 'Special education course', '0577' => 'Untracked');

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
			throw new \Exception(sprintf('Supplied %s value (%s) was not a valid enumerated value.', 'NCES0106CourseInstructionalLevelType', $value));
		}
	
		return $value;
	}

	public function __toString() {
		return (string) $this->value;
	}
} // end class NCES0106CourseInstructionalLevelType
