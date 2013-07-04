<?php
namespace hl7_org\v3;



/**
 * @XmlNamespaces ({
 *	@XmlNamespace(url="urn:hl7-org:v3", prefix="")
 * })
 * @XmlEntity	(xml="MO")
 */
class MO extends \org\w3\www\_2001\XMLSchema\QTY {
	/**
	 * A monetary amount is a quantity expressing the amount ofmoney in some currency. Currencies are the units in whichmonetary amounts are denominated in different economicregions. While the monetary amount is a single kind ofquantity (money) the exchange rates between the differentunits are variable. This is the principle differencebetween physical quantity and monetary amounts, and thereason why currency units are not physical units.
	 */

	/**
	 * List of manually overridden properties that should not be re-generated automatically
	 * @var array
	 */
	protected $_overrides = array();


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

	public function getValue($autoCreate = TRUE) {
		if ($this->value===NULL && $autoCreate && ! isset($this->_overrides['value']) ) {
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
	
		return $value;
	}

	public function getCurrency($autoCreate = TRUE) {
		if ($this->currency===NULL && $autoCreate && ! isset($this->_overrides['currency']) ) {
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
} // end class MO
