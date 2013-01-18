<?php
namespace hl7_org\v3;



/**
 * @XmlNamespaces ({
 *	@XmlNamespace(url="urn:hl7-org:v3", prefix="")
 * })
 * @XmlEntity	(xml="BL")
 */
class BL extends \ANY\ANY {
	/**
	 * The Boolean type stands for the values of two-valued logic. A Boolean value can be either true or false, or, as any other value may be NULL.
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
		return new \hl7_org\v3\Bl();
	}

	public function setValue($value) {
		$this->value = $this->validateValue($value);
	}

	protected function validateValue($value) {
		if ( ! $value instanceof \hl7_org\v3\Bl  && ! is_null($value) ) {
			$value = new \hl7_org\v3\Bl ($value);
		}
	
		return $value;
	}
} // end class BL
