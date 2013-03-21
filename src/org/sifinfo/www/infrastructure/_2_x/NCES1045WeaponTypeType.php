<?php
namespace org\sifinfo\www\infrastructure\_2_x;



/**
 * @XmlNamespaces ({
 *	@XmlNamespace(url="http://www.sifinfo.org/infrastructure/2.x", prefix="")
 * })
 * @XmlRootEntity	(xml="NCES1045WeaponTypeType")
 */
class NCES1045WeaponTypeType {
	/**
	 */
	static protected $enumValue = array('0010' => 'Firearm', '0011' => 'Handgun', '0012' => 'Shotgun/rifle', '0013' => 'Other type of firearm', '0020' => 'Knife', '0021' => 'Knife with blade less than 2.5 inches', '0023' => 'Knife with blade greater than or equal to 2.5 inches', '0029' => 'Other knife', '0030' => 'Other Sharp Objects', '0040' => 'Other Object', '0050' => 'Substance Used as Weapon', '0097' => 'Other', '0098' => 'No Weapon', '0099' => 'Unknown Weapon');

	/**
	 * List of manually overridden properties that should not be re-generated automatically
	 * @var array
	 */
	protected $_overrides = array();


	/**
	 * @XmlValue	(type="string", name="NCES1045WeaponTypeType")
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
			throw new \Exception(sprintf('Supplied %s value (%s) was not a valid enumerated value.', 'NCES1045WeaponTypeType', $value));
		}
	
		return $value;
	}

	public function __toString() {
		return (string) $this->value;
	}
} // end class NCES1045WeaponTypeType
