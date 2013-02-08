<?php
namespace org\sifinfo\www\infrastructure\_2_x;



/**
 * @XmlNamespaces ({
 *	@XmlNamespace(url="http://www.sifinfo.org/infrastructure/2.x", prefix="")
 * })
 * @XmlRootEntity	(xml="NCES0289TransitionalSupportServiceTypeType")
 */
class NCES0289TransitionalSupportServiceTypeType {
	/**
	 */
	static protected $enumValue = array('0878' => 'Case management services', '0881' => 'Communication services', '0882' => 'Community recreational services', '0883' => 'Independent living', '0884' => 'Mental health services', '9999' => 'Other', '0885' => 'Residential services', '0886' => 'Supported employment services', '0887' => 'Technological aids', '0888' => 'Transportation services', '0889' => 'Vocational rehabilitation training and job placement');

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
			throw new \Exception(sprintf('Supplied %s value (%s) was not a valid enumerated value.', 'NCES0289TransitionalSupportServiceTypeType', $value));
		}
	
		return $value;
	}

	public function __toString() {
		return (string) $this->value;
	}
} // end class NCES0289TransitionalSupportServiceTypeType
