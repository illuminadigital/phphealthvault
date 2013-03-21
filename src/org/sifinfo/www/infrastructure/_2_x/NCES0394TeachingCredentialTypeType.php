<?php
namespace org\sifinfo\www\infrastructure\_2_x;



/**
 * @XmlNamespaces ({
 *	@XmlNamespace(url="http://www.sifinfo.org/infrastructure/2.x", prefix="")
 * })
 * @XmlRootEntity	(xml="NCES0394TeachingCredentialTypeType")
 */
class NCES0394TeachingCredentialTypeType {
	/**
	 */
	static protected $enumValue = array('1222' => 'Regular/standard', '1223' => 'Probationary/initial', '1224' => 'Provisional', '1225' => 'Professional', '1226' => 'Master', '1227' => 'Specialist', '1228' => 'Temporary', '1229' => 'Emergency', '1230' => 'Nonrenewable', '1231' => 'Retired', '1232' => 'Substitute', '1233' => 'Teacher assistant', '1234' => 'Intern', '9999' => 'Other');

	/**
	 * List of manually overridden properties that should not be re-generated automatically
	 * @var array
	 */
	protected $_overrides = array();


	/**
	 * @XmlValue	(type="string", name="NCES0394TeachingCredentialTypeType")
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
			throw new \Exception(sprintf('Supplied %s value (%s) was not a valid enumerated value.', 'NCES0394TeachingCredentialTypeType', $value));
		}
	
		return $value;
	}

	public function __toString() {
		return (string) $this->value;
	}
} // end class NCES0394TeachingCredentialTypeType
