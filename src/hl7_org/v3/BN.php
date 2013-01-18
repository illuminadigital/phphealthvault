<?php
namespace hl7_org\v3;



/**
 * @XmlNamespaces ({
 *	@XmlNamespace(url="urn:hl7-org:v3", prefix="")
 * })
 * @XmlEntity	(xml="BN")
 */
class BN extends \ANYNonNull\ANYNonNull {
	/**
	 * The BooleanNonNull type is used where a Boolean cannot have a null value. A Boolean value can be either true or false.
	 */

	/**
	 * @XmlAttribute	(type="string", name="value")
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
		return new \hl7_org\v3\Bn();
	}

	public function setValue($value) {
		$this->value = $this->validateValue($value);
	}

	protected function validateValue($value) {
		if ( ! $value instanceof \hl7_org\v3\Bn  && ! is_null($value) ) {
			$value = new \hl7_org\v3\Bn ($value);
		}
	
		return $value;
	}
} // end class BN
