<?php
namespace hl7_org\v3;



/**
 * @XmlNamespaces ({
 *	@XmlNamespace(url="urn:hl7-org:v3", prefix="")
 * })
 * @XmlEntity	(xml="REAL")
 */
class REAL extends \QTY\QTY {
	/**
	 * Fractional numbers. Typically used whenever quantities are measured, estimated, or computed from other real numbers. The typical representation is decimal, where the number of significant decimal digits is known as the precision. Real numbers are needed beyond integers whenever quantities of the real world are measured, estimated, or computed from other real numbers. The term "Real number" in this specification is used to mean that fractional values are covered without necessarily implying the full set of the mathematical real numbers.
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
		return new \hl7_org\v3\Real();
	}

	public function setValue($value) {
		$this->value = $this->validateValue($value);
	}

	protected function validateValue($value) {
		if ( ! $value instanceof \hl7_org\v3\Real  && ! is_null($value) ) {
			$value = new \hl7_org\v3\Real ($value);
		}
	
		return $value;
	}
} // end class REAL
