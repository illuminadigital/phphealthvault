<?php
namespace org\sifinfo\www\infrastructure\_2_x;



/**
 * @XmlNamespaces ({
 *	@XmlNamespace(url="http://www.sifinfo.org/infrastructure/2.x", prefix="")
 * })
 * @XmlRootEntity	(xml="NCES0673NonpromotionReasonType")
 */
class NCES0673NonpromotionReasonType {
	/**
	 */
	static protected $enumValue = array('1979' => 'Failed to meet testing requirements', '1980' => 'Illness', '1981' => 'Immaturity', '1982' => 'Inadequate performance', '1983' => 'Insufficient credits', '9999' => 'Other', '1984' => 'Prolonged absence');

	/**
	 * @XmlValue	(type="string", name="NCES0673NonpromotionReasonType")
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
			throw new \Exception(sprintf('Supplied %s value (%s) was not a valid enumerated value.', 'NCES0673NonpromotionReasonType', $value));
		}
	
		return $value;
	}

	public function __toString() {
		return (string) $this->value;
	}
} // end class NCES0673NonpromotionReasonType
