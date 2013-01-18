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
	 * @XmlAttribute	(type="string", name="Currency")
	 */
	protected $currency;

	public function __construct($currency = NULL) {
		$this->currency = ($currency===NULL) ? NULL : $this->validateCurrency($currency);
	}

	public function getCurrency() {
		if ($this->currency===NULL) {
			$this->currency = $this->createCurrency();
		}
		return $this->currency;
	}
	
	protected function createCurrency() {
		return new \org\sifinfo\www\infrastructure\_2_x\ISO4217CurrencyNamesAndCodeElementsType();
	}

	public function setCurrency($currency) {
		$this->currency = $this->validateCurrency($currency);
	}

	protected function validateCurrency($currency) {
		if ( ! $currency instanceof \org\sifinfo\www\infrastructure\_2_x\ISO4217CurrencyNamesAndCodeElementsType  && ! is_null($currency) ) {
			$currency = new \org\sifinfo\www\infrastructure\_2_x\ISO4217CurrencyNamesAndCodeElementsType ($currency);
		}
	
		return $currency;
	}
} // end class MonetaryAmountType
