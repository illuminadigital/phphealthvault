<?php
namespace org\sifinfo\www\infrastructure\_2_x;



/**
 * @XmlNamespaces ({
 *	@XmlNamespace(url="http://www.sifinfo.org/infrastructure/2.x", prefix="")
 * })
 * @XmlRootEntity	(xml="NCES0280TelephoneNumberTypeType")
 */
class NCES0280TelephoneNumberTypeType {
	/**
	 */
	static protected $enumValue = array('0350' => 'Alternate telephone number', '0359' => 'Answering service', '0400' => 'Appointment telephone number', '0370' => 'Beeper number', '2364' => 'Facsimile number', '0478' => 'Instant messaging number', '0096' => 'Main telephone number', '0486' => 'Media conferencing number', '0437' => 'Telemail', '0426' => 'Telex number', '0448' => 'Voice mail');

	/**
	 * @XmlValue	(type="string", name="NCES0280TelephoneNumberTypeType")
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
			throw new \Exception(sprintf('Supplied %s value (%s) was not a valid enumerated value.', 'NCES0280TelephoneNumberTypeType', $value));
		}
	
		return $value;
	}

	public function __toString() {
		return (string) $this->value;
	}
} // end class NCES0280TelephoneNumberTypeType
