<?php
namespace org\sifinfo\www\infrastructure\_2_x;



/**
 * @XmlNamespaces ({
 *	@XmlNamespace(url="http://www.sifinfo.org/infrastructure/2.x", prefix="")
 * })
 * @XmlRootEntity	(xml="NCES0307ServiceSettingType")
 */
class NCES0307ServiceSettingType {
	/**
	 */
	static protected $enumValue = array('0127' => 'Early intervention classroom/center', '0128' => 'Homebound placement instruction', '0129' => 'Hospital placement instruction', '0140' => 'Itinerant services outside the home', '0356' => 'Outpatient service facility', '0132' => 'Private residential placement', '0358' => 'Private separate day school placement', '0134' => 'Public residential placement', '0135' => 'Public separate day school placement', '0365' => 'Regular nursery school/child care center', '0130' => 'Regular school campus/regular class placement', '0756' => 'Residential facility', '0136' => 'Resource room placement (pullout program)', '0367' => 'Respite care', '0143' => 'Reverse mainstream setting', '0137' => 'Separate class placement', '0364' => 'Short-term detention facility');

	/**
	 * List of manually overridden properties that should not be re-generated automatically
	 * @var array
	 */
	protected $_overrides = array();


	/**
	 * @XmlValue	(type="string", name="NCES0307ServiceSettingType")
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
			throw new \Exception(sprintf('Supplied %s value (%s) was not a valid enumerated value.', 'NCES0307ServiceSettingType', $value));
		}
	
		return $value;
	}

	public function __toString() {
		return (string) $this->value;
	}
} // end class NCES0307ServiceSettingType
