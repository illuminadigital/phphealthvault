<?php
namespace org\sifinfo\www\infrastructure\_2_x;



/**
 * @XmlNamespaces ({
 *	@XmlNamespace(url="http://www.sifinfo.org/infrastructure/2.x", prefix="")
 * })
 * @XmlRootEntity	(xml="NCES1048SecondaryIncidentBehaviorType")
 */
class NCES1048SecondaryIncidentBehaviorType {
	/**
	 */
	static protected $enumValue = array('3066' => 'Alcohol-related', '3067' => 'Drug-related', '3068' => 'Gang-related', '3069' => 'Hate-related', '3070' => 'Weapon-related', '04645' => 'Fighting');

	/**
	 * @XmlValue	(type="string", name="NCES1048SecondaryIncidentBehaviorType")
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
			throw new \Exception(sprintf('Supplied %s value (%s) was not a valid enumerated value.', 'NCES1048SecondaryIncidentBehaviorType', $value));
		}
	
		return $value;
	}

	public function __toString() {
		return (string) $this->value;
	}
} // end class NCES1048SecondaryIncidentBehaviorType
