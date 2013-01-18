<?php
namespace org\sifinfo\www\infrastructure\_2_x;



/**
 * @XmlNamespaces ({
 *	@XmlNamespace(url="http://www.sifinfo.org/infrastructure/2.x", prefix="")
 * })
 * @XmlRootEntity	(xml="NCES0437InstructionalLevelType")
 */
class NCES0437InstructionalLevelType {
	/**
	 */
	static protected $enumValue = array('0568' => 'Remedial', '0569' => 'Special education course', '0570' => 'Basic', '0571' => 'General', '0572' => 'Honors level', '0573' => 'Gifted and talented level', '0574' => 'International Baccalaureate program', '0575' => 'Advanced placement', '0576' => 'College level', '0577' => 'Untracked', '0578' => 'English Language Learner (ELL)', '0579' => 'Accepted as a high school equivalent', '9999' => 'Other');

	/**
	 * @XmlValue	(type="string", name="NCES0437InstructionalLevelType")
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
			throw new \Exception(sprintf('Supplied %s value (%s) was not a valid enumerated value.', 'NCES0437InstructionalLevelType', $value));
		}
	
		return $value;
	}

	public function __toString() {
		return (string) $this->value;
	}
} // end class NCES0437InstructionalLevelType
