<?php
namespace org\sifinfo\www\infrastructure\_2_x;



/**
 * @XmlNamespaces ({
 *	@XmlNamespace(url="http://www.sifinfo.org/infrastructure/2.x", prefix="")
 * })
 * @XmlEntity	(xml="MonetaryAmountType")
 */
class MonetaryAmountType {
	/**
	 * A monetary amount.
	 */

	/**
	 * @XmlValue	(type="float", name="MonetaryAmountType")
	 */
	protected $value;

	/**
	 * @XmlAttribute	(type="string", name="Currency")
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
		return NULL;
	}

	public function setValue($value) {
		$this->value = $this->validateValue($value);
	}

	protected function validateValue($value) {
		if (!is_float($value)) {
			throw new \Exception(sprintf('Supplied %s value was not %s', 'value', 'float'));
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
		return NULL;
	}

	public function setCurrency($currency) {
		$this->currency = $this->validateCurrency($currency);
	}

	protected function validateCurrency($currency) {
	
		return $currency;
	}
} // end class MonetaryAmountType
