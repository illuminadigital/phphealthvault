<?php
namespace org\sifinfo\www\infrastructure\_2_x;



/**
 * @XmlNamespaces ({
 *	@XmlNamespace(url="http://www.sifinfo.org/infrastructure/2.x", prefix="")
 * })
 * @XmlRootEntity	(xml="ISO31663CodeForFormerlyUsedNamesOfCountriesType")
 */
class ISO31663CodeForFormerlyUsedNamesOfCountriesType {
	/**
	 */
	static protected $enumValue = array('AIDJ' => 'French Territory of the Afars and the Issas', 'BQAQ' => 'British Antarctic Territory', 'BUMM' => 'Burma', 'CSHH' => 'Czechoslovakia', 'CTKI' => 'Canton and Enderbury Islands', 'DDDE' => 'East Germany', 'DYBJ' => 'Dahomey', 'FQHH' => 'French Southern and Antarctic Territories', 'FXFR' => 'Metropolitan France', 'GEHH' => 'Gilbert and Ellice Islands', 'HVBF' => 'Upper Volta (Haute-Volta)', 'JTUM' => 'Johnston Island', 'MIUM' => 'Midway Atoll', 'NHVU' => 'New Hebrides', 'NQAQ' => 'Queen Maud Land', 'NTHH' => 'Neutral Zone', 'PCHH' => 'Trust Territory of the Pacific Islands', 'PUUM' => 'U.S. Miscellaneous Pacific Islands', 'PZPA' => 'Panama Canal Zone', 'RHZW' => 'Rhodesia', 'SKIN' => 'Sikkim', 'SUHH' => 'Soviet Union', 'TPTL' => 'East Timor', 'VDVN' => 'Democratic Republic of Vietnam', 'WKUM' => 'Wake Island', 'YDYE' => 'South Yemen', 'YUCS' => 'Yugoslavia', 'ZRCD' => 'Zaire');

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
			throw new \Exception(sprintf('Supplied %s value (%s) was not a valid enumerated value.', 'ISO31663CodeForFormerlyUsedNamesOfCountriesType', $value));
		}
	
		return $value;
	}

	public function __toString() {
		return (string) $this->value;
	}
} // end class ISO31663CodeForFormerlyUsedNamesOfCountriesType
