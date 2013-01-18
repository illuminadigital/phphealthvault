<?php
namespace org\sifinfo\www\infrastructure\_2_x;



/**
 * @XmlNamespaces ({
 *	@XmlNamespace(url="http://www.sifinfo.org/infrastructure/2.x", prefix="")
 * })
 * @XmlRootEntity	(xml="NCES0108CreditTypeEarnedType")
 */
class NCES0108CreditTypeEarnedType {
	/**
	 */
	static protected $enumValue = array('0598' => 'Adult education credit', '0585' => 'Carnegie unit', '0601' => 'Converted occupational experience credit', '0600' => 'Correspondence credit', '0599' => 'Credit by examination', '0592' => 'Intersession hour credit', '0595' => 'Long session hour credit', '0590' => 'Mini-term hour credit', '9998' => 'None', '9999' => 'Other', '0588' => 'Quarter hour credit', '0589' => 'Quinmester hour credit', '0586' => 'Semester hour credit', '0591' => 'Summer term hour credit', '0587' => 'Trimester hour credit', '0596' => 'Twelve month hour credit', '0597' => 'Vocational credit');

	/**
	 * @XmlValue	(type="string", name="NCES0108CreditTypeEarnedType")
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
			throw new \Exception(sprintf('Supplied %s value (%s) was not a valid enumerated value.', 'NCES0108CreditTypeEarnedType', $value));
		}
	
		return $value;
	}

	public function __toString() {
		return (string) $this->value;
	}
} // end class NCES0108CreditTypeEarnedType
