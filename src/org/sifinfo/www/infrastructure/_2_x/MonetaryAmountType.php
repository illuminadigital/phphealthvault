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
		return NULL;
	}

	public function setCurrency($currency) {
		$this->currency = $this->validateCurrency($currency);
	}

	protected function validateCurrency($currency) {
	
		return $currency;
	}
} // end class MonetaryAmountType
