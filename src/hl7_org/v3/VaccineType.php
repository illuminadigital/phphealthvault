<?php
namespace hl7_org\v3;



/**
 * @XmlNamespaces ({
 *	@XmlNamespace(url="urn:hl7-org:v3", prefix="")
 * })
 * @XmlRootEntity	(xml="VaccineType")
 */
class VaccineType {
	/**
	 */
	static protected $enumValue = array('24' => '24', '19' => '19', '29' => '29', '26' => '26', '28' => '28', '1' => '1', '22' => '22', '20' => '20', '50' => '50', '30' => '30', '61' => '61', '62' => '62', '57' => '57', '85' => '85', '52' => '52', '83' => '83', '84' => '84', '31' => '31', '45' => '45', '8' => '8', '42' => '42', '43' => '43', '44' => '44', '58' => '58', '59' => '59', '47' => '47', '46' => '46', '49' => '49', '48' => '48', '17' => '17', '51' => '51', '86' => '86', '14' => '14', '87' => '87', '10' => '10', '39' => '39', '63' => '63', '66' => '66', '4' => '4', '3' => '3', '94' => '94', '2' => '2', '70' => '70', '34' => '34', '71' => '71', '93' => '93', '73' => '73', '76' => '76', '13' => '13', '98' => '98', '95' => '95', '96' => '96', '97' => '97', '9' => '9', '92' => '92', '81' => '81', '80' => '80', '36' => '36', '82' => '82', '54' => '54', '55' => '55', '27' => '27', '56' => '56', '12' => '12', '60' => '60', '88' => '88', '15' => '15', '16' => '16', '64' => '64', '65' => '65', '67' => '67', '5' => '5', '68' => '68', '32' => '32', '7' => '7', '69' => '69', '11' => '11', '23' => '23', '33' => '33', '100' => '100', '89' => '89', '90' => '90', '40' => '40', '18' => '18', '72' => '72', '74' => '74', '6' => '6', '38' => '38', '75' => '75', '35' => '35', '77' => '77', '78' => '78', '91' => '91', '101' => '101', '25' => '25', '41' => '41', '53' => '53', '79' => '79', '21' => '21', '37' => '37');

	/**
	 * List of manually overridden properties that should not be re-generated automatically
	 * @var array
	 */
	protected $_overrides = array();


	/**
	 * @XmlElement	(type="\hl7_org\v3\Cs", name="value")
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
		return new \hl7_org\v3\CS();
	}

	public function setValue($value) {
		$this->value = $this->validateValue($value);
	}

	protected function validateValue($value) {
		if ( ! $value instanceof \hl7_org\v3\CS ) {
			$value = new \hl7_org\v3\CS ($value);
		}

		if (empty(static::$enumValue[$value])) {
			throw new \Exception(sprintf('Supplied %s value (%s) was not a valid enumerated value.', 'VaccineType', $value));
		}
	
		return $value;
	}

	public function __toString() {
		return (string) $this->value;
	}
} // end class VaccineType
