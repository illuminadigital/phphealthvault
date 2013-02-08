<?php
namespace org\sifinfo\www\infrastructure\_2_x;



/**
 * @XmlNamespaces ({
 *	@XmlNamespace(url="http://www.sifinfo.org/infrastructure/2.x", prefix="")
 * })
 * @XmlRootEntity	(xml="NCES0720StateTransportationAidQualificationType")
 */
class NCES0720StateTransportationAidQualificationType {
	/**
	 */
	static protected $enumValue = array('2067' => 'Does not qualify', '9999' => 'Other', '2065' => 'Qualifies for regular aid', '2066' => 'Qualifies for special education aid');

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
			throw new \Exception(sprintf('Supplied %s value (%s) was not a valid enumerated value.', 'NCES0720StateTransportationAidQualificationType', $value));
		}
	
		return $value;
	}

	public function __toString() {
		return (string) $this->value;
	}
} // end class NCES0720StateTransportationAidQualificationType
