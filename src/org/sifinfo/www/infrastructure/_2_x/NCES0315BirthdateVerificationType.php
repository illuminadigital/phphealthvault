<?php
namespace org\sifinfo\www\infrastructure\_2_x;



/**
 * @XmlNamespaces ({
 *	@XmlNamespace(url="http://www.sifinfo.org/infrastructure/2.x", prefix="")
 * })
 * @XmlRootEntity	(xml="NCES0315BirthdateVerificationType")
 */
class NCES0315BirthdateVerificationType {
	/**
	 */
	static protected $enumValue = array('1003' => 'Baptismal or church certificate', '1004' => 'Birth certificate', '1012' => 'Driver\'s license', '1005' => 'Entry in family Bible', '1006' => 'Hospital certificate', '1013' => 'Immigration document/visa', '2382' => 'Life insurance policy', '9999' => 'Other', '3424' => 'Other non-official document', '3423' => 'Other official document', '1007' => 'Parent\'s affidavit', '1008' => 'Passport', '1009' => 'Physician\'s certificate', '1010' => 'Previously verified school records', '1011' => 'State-issued Id');

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
			throw new \Exception(sprintf('Supplied %s value (%s) was not a valid enumerated value.', 'NCES0315BirthdateVerificationType', $value));
		}
	
		return $value;
	}

	public function __toString() {
		return (string) $this->value;
	}
} // end class NCES0315BirthdateVerificationType
