<?php
namespace org\sifinfo\www\infrastructure\_2_x;



/**
 * @XmlNamespaces ({
 *	@XmlNamespace(url="http://www.sifinfo.org/infrastructure/2.x", prefix="")
 * })
 * @XmlRootEntity	(xml="NCES0222ProgramFundingSourceType")
 */
class NCES0222ProgramFundingSourceType {
	/**
	 */
	static protected $enumValue = array('0997' => 'Business', '0654' => 'College/University', '0698' => 'Community', '0797' => 'Federal government', '0749' => 'Foundations and other charitable organizations', '0219' => 'Fraternal organization', '0739' => 'Individuals (endowments)', '0786' => 'Insurance', '0622' => 'Local/community government', '9999' => 'Other', '0720' => 'Parent/guardian in tuition and/or fees', '1899' => 'Parent/guardian\'s employer', '0731' => 'Parent/teacher organizations', '0218' => 'Religious organization', '0675' => 'School', '0709' => 'Self in tuition and/or fees', '0617' => 'State government', '0772' => 'Unions');

	/**
	 * @XmlValue	(type="string", name="NCES0222ProgramFundingSourceType")
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
			throw new \Exception(sprintf('Supplied %s value (%s) was not a valid enumerated value.', 'NCES0222ProgramFundingSourceType', $value));
		}
	
		return $value;
	}

	public function __toString() {
		return (string) $this->value;
	}
} // end class NCES0222ProgramFundingSourceType
