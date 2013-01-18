<?php
namespace hl7_org\v3;



/**
 * @XmlNamespaces ({
 *	@XmlNamespace(url="urn:hl7-org:v3", prefix="")
 * })
 * @XmlRootEntity	(xml="TopicalApplication")
 */
class TopicalApplication {
	/**
	 */
	static protected $enumValue = array('OCDRESTA' => 'OCDRESTA', 'SUBCONJTA' => 'SUBCONJTA', 'TOPICAL' => 'TOPICAL', 'BUC' => 'BUC', 'CERV' => 'CERV', 'DEN' => 'DEN', 'GIN' => 'GIN', 'HAIR' => 'HAIR', 'ICORNTA' => 'ICORNTA', 'ICORONTA' => 'ICORONTA', 'IESOPHTA' => 'IESOPHTA', 'IILEALTA' => 'IILEALTA', 'ILTOP' => 'ILTOP', 'ILUMTA' => 'ILUMTA', 'IOTOP' => 'IOTOP', 'IONTO' => 'IONTO', 'LARYNGTA' => 'LARYNGTA', 'MUC' => 'MUC', 'NAIL' => 'NAIL', 'NASAL' => 'NASAL', 'OPTHALTA' => 'OPTHALTA', 'ORALTA' => 'ORALTA', 'ORMUC' => 'ORMUC', 'OROPHARTA' => 'OROPHARTA', 'PERIANAL' => 'PERIANAL', 'PERINEAL' => 'PERINEAL', 'PDONTTA' => 'PDONTTA', 'RECTAL' => 'RECTAL', 'SCALP' => 'SCALP', 'SKIN' => 'SKIN', 'DRESS' => 'DRESS', 'SWAB' => 'SWAB', 'TMUCTA' => 'TMUCTA', 'VAGINS' => 'VAGINS');

	/**
	 * @XmlElement	(type="\hl7_org\v3\Cs", name="value")
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
		return new \hl7_org\v3\Cs();
	}

	public function setValue($value) {
		$this->value = $this->validateValue($value);
	}

	protected function validateValue($value) {
		if ( ! $value instanceof \hl7_org\v3\Cs ) {
			$value = new \hl7_org\v3\Cs ($value);
		}

		if (empty(static::$enumValue[$value])) {
			throw new \Exception(sprintf('Supplied %s value (%s) was not a valid enumerated value.', 'TopicalApplication', $value));
		}
	
		return $value;
	}

	public function __toString() {
		return (string) $this->value;
	}
} // end class TopicalApplication
