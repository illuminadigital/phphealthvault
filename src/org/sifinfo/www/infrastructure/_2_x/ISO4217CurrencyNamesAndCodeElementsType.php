<?php
namespace org\sifinfo\www\infrastructure\_2_x;



/**
 * @XmlNamespaces ({
 *	@XmlNamespace(url="http://www.sifinfo.org/infrastructure/2.x", prefix="")
 * })
 * @XmlRootEntity	(xml="ISO4217CurrencyNamesAndCodeElementsType")
 */
class ISO4217CurrencyNamesAndCodeElementsType {
	/**
	 */
	static protected $enumValue = array('AED' => 'UAE Dirham', 'AFN' => 'Afghani', 'ALL' => 'Lek', 'AMD' => 'Armenian Dram', 'ANG' => 'Netherlands Antillian Guikder', 'AOA' => 'Kwanza', 'ARS' => 'Argentine Peso', 'AUD' => 'Australian Dollar', 'AWG' => 'Aruban Guilder', 'AZN' => 'Azerbaijanian Manat', 'BAM' => 'Convertible Marks', 'BBD' => 'Barbados Dollar', 'BDT' => 'Taka', 'BGN' => 'Bulgarian Lev', 'BHD' => 'Bahraini Dinar', 'BIF' => 'Burundi Franc', 'BMD' => 'Bermudian Dollar (customarily known as Bermuda Dollar)', 'BND' => 'Brunei Dollar', 'BOB' => 'Boliviano', 'BOV' => 'Mvdol', 'BRL' => 'Brazilian Real', 'BSD' => 'Bahamian Dollar', 'BTN' => 'Ngultrum', 'BWP' => 'Pula', 'BYR' => 'Belarussian Ruble', 'BZD' => 'Belize Dollar', 'CAD' => 'Canadian Dollar', 'CDF' => 'Franc Congolais', 'CHE' => 'WIR Euro', 'CHF' => 'Swiss Franc', 'CHW' => 'WIR Franc', 'CLF' => 'Unidades de formento', 'CLP' => 'Chilean Peso', 'CNY' => 'Yuan Renminbi', 'COP' => 'Colombian Peso', 'COU' => 'Unidad de Valor Real', 'CRC' => 'Costa Rican Colon', 'CSD' => 'Serbian Dinar', 'CUP' => 'Cuban Peso', 'CVE' => 'Cape Verde Escudo', 'CYP' => 'Cyprus Pound', 'CZK' => 'Czech Koruna', 'DJF' => 'Djibouti Franc', 'DKK' => 'Danish Krone', 'DOP' => 'Dominican Peso', 'DZD' => 'Algerian Dinar', 'EEK' => 'Kroon', 'EGP' => 'Egyptian Pound', 'ERN' => 'Nakfa', 'ETB' => 'Ethiopian Birr', 'EUR' => 'Euro', 'FJD' => 'Fiji Dollar', 'FKP' => 'Falkland Islands Pound', 'GBP' => 'Pound Sterling', 'GEL' => 'Lari', 'GHC' => 'Cedi', 'GIP' => 'Gibraltar Pound', 'GMD' => 'Dalasi', 'GNF' => 'Guinea Franc', 'GTQ' => 'Quetzal', 'GWP' => 'Guinea-Bissau Peso', 'GYD' => 'Guyana Dollar', 'HKD' => 'Hong Kong Dollar', 'HNL' => 'Lempira', 'HRK' => 'Croatian Kuna', 'HTG' => 'Gourde', 'HUF' => 'Forint', 'IDR' => 'Rupiah', 'ILS' => 'New Israeli Sheqel', 'INR' => 'Indian Rupee', 'IQD' => 'Iraqi Dinar', 'IRR' => 'Iranian Rial', 'ISK' => 'Iceland Krona', 'JMD' => 'Jamaican Dollar', 'JOD' => 'Jordanian Dinar', 'JPY' => 'Yen', 'KES' => 'Kenyan Shilling', 'KGS' => 'Som', 'KHR' => 'Riel', 'KMF' => 'Comoro Franc', 'KPW' => 'North Korean Won', 'KRW' => 'Won', 'KWD' => 'Kuwaiti Dinar', 'KYD' => 'Cayman Islands Dollar', 'KZT' => 'Tenge', 'LAK' => 'Kip', 'LBP' => 'Lebanese Pound', 'LKR' => 'Sri Lanka Rupee', 'LRD' => 'Liberian Dollar', 'LSL' => 'Loti', 'LTL' => 'Lithuanian Litas', 'LVL' => 'Latvian Lats', 'LYD' => 'Libyan Dinar', 'MAD' => 'Moroccan Dirham', 'MDL' => 'Moldovan Leu', 'MGA' => 'Malagascy Ariary', 'MKD' => 'Denar', 'MMK' => 'Kyat', 'MNT' => 'Tugrik', 'MOP' => 'Pataca', 'MRO' => 'Ouguiya', 'MTL' => 'Maltese Lira', 'MUR' => 'Mauritius Rupee', 'MVR' => 'Rufiyaa', 'MWK' => 'Kwacha', 'MXN' => 'Mexican Peso', 'MXV' => 'Mexican Unidad de Inversion (UID)', 'MYR' => 'Malaysian Ringgit', 'MZN' => 'Metical', 'NAD' => 'Namibian Dollar', 'NGN' => 'Naira', 'NIO' => 'Cordoba Oro', 'NOK' => 'Norwegian Krone', 'NPR' => 'Nepalese Rupee', 'NZD' => 'New Zealand Dollar', 'OMR' => 'Rial Omani', 'PAB' => 'Balboa', 'PEN' => 'Nuevo Sol', 'PGK' => 'Kina', 'PHP' => 'Philippine Peso', 'PKR' => 'Pakistan Rupee', 'PLN' => 'Zloty', 'PYG' => 'Guarani', 'QAR' => 'Qatari Rial', 'ROL' => 'Old Leu', 'RON' => 'New Leu', 'RUB' => 'Russian Ruble', 'RWF' => 'Rwanda Franc', 'SAR' => 'Saudi Riyal', 'SBD' => 'Solomon Islands Dollar', 'SCR' => 'Seychelles Rupee', 'SDD' => 'Sudanese Dinar', 'SEK' => 'Swedish Krona', 'SGD' => 'Singapore Dollar', 'SHP' => 'Saint Helena Pound', 'SIT' => 'Tolar', 'SKK' => 'Slovak Koruna', 'SLL' => 'Leone', 'SOS' => 'Somali Shilling', 'SRD' => 'Surinam Dollar', 'STD' => 'Dobra', 'SVC' => 'El Salvador Colon', 'SYP' => 'Syrian Pound', 'SZL' => 'Lilangeni', 'THB' => 'Baht', 'TJS' => 'Somoni', 'TMM' => 'Manat', 'TND' => 'Tunisian Dinar', 'TOP' => 'Pa\'anga', 'TRY' => 'New Turkish Lira', 'TTD' => 'Trinidad and Tobago Dollar', 'TWD' => 'New Taiwan Dollar', 'TZS' => 'Tanzanian Shilling', 'UAH' => 'Hryvnia', 'UGX' => 'Uganda Shilling', 'USD' => 'US Dollar', 'USN' => 'US Dollar (Next day)', 'USS' => 'US Dollar (Same day)', 'UYU' => 'Peso Uruguayo', 'UZS' => 'Uzbekistan Sum', 'VEB' => 'Bolivar', 'VND' => 'Dong', 'VUV' => 'Vatu', 'WST' => 'Tala', 'XAF' => 'CFA Franc BEAC', 'XAG' => 'Silver', 'XAU' => 'Gold', 'XBA' => 'Bond Markets Units European Composite Unit (EURCO)', 'XBB' => 'European Monetary Unit (E.M.U.-6)', 'XBC' => 'European Unit of Account 9 (E.U.A.-9)', 'XBD' => 'European Unit of Account 17 (E.U.A.-17)', 'XCD' => 'East Caribbean Dollar', 'XDR' => 'SDR', 'XFO' => 'Gold-Franc', 'XFU' => 'UIC-Franc', 'XOF' => 'CFA Franc BCEAO', 'XPD' => 'Palladium', 'XPF' => 'CFP Franc', 'XPT' => 'Platinum', 'XTS' => 'Code specifically reserved for testing purposes', 'XXX' => 'Code assigned for transactions where no currency is involved', 'YER' => 'Yemeni Rial', 'ZAR' => 'Rand', 'ZMK' => 'Kwacha', 'ZWN' => 'Zimbabwe Dollar');

	/**
	 * @XmlElement	(type="\org\sifinfo\www\infrastructure\_2_x\Token", name="value")
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
		if (!is_token($value)) {
			throw new \Exception(sprintf('Supplied %s value was not %s', 'value', 'token'));
		}

		if (empty(static::$enumValue[$value])) {
			throw new \Exception(sprintf('Supplied %s value (%s) was not a valid enumerated value.', 'ISO4217CurrencyNamesAndCodeElementsType', $value));
		}
	
		return $value;
	}

	public function __toString() {
		return (string) $this->value;
	}
} // end class ISO4217CurrencyNamesAndCodeElementsType
