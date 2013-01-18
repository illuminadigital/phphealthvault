<?php
namespace hl7_org\v3;



/**
 * @XmlNamespaces ({
 *	@XmlNamespace(url="urn:hl7-org:v3", prefix="")
 * })
 * @XmlEntity	(xml="MO")
 */
class MO extends \QTY\QTY {
	/**
	 * A monetary amount is a quantity expressing the amount of money in some currency. Currencies are the units in which monetary amounts are denominated in different economic regions. While the monetary amount is a single kind of quantity (money) the exchange rates between the different units are variable. This is the principle difference between physical quantity and monetary amounts, and the reason why currency units are not physical units.
	 */

	/**
	 * @XmlAttribute	(type="string", name="value")
	 */
	protected $value;

	/**
	 * @XmlAttribute	(type="string", name="currency")
	 */
	protected $currency;

	public function __construct($value = NULL, $currency = NULL) {
		$this->value = ($value===NULL) ? NULL : $this->validateValue($value);
		$this->currency = ($currency===NULL) ? NULL : $this->validateCurrency($currency);
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

	public function getCurrency() {
		if ($this->currency===NULL) {
			$this->currency = $this->createCurrency();
		}
		return $this->currency;
	}
	
	protected function createCurrency() {
		return new \hl7_org\v3\Cs();
	}

	public function setCurrency($currency) {
		$this->currency = $this->validateCurrency($currency);
	}

	protected function validateCurrency($currency) {
		if ( ! $currency instanceof \hl7_org\v3\Cs  && ! is_null($currency) ) {
			$currency = new \hl7_org\v3\Cs ($currency);
		}
	
		return $currency;
	}
} // end class MO
