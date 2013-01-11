<?php
namespace com\microsoft\wc\thing;



/**
 * @XmlRootEntity	(xml="iso3166")
 */
class Iso3166 {
	/**
	 */
	static protected $enumValue = array('AF' => 'AF', 'AX' => 'AX', 'AL' => 'AL', 'DZ' => 'DZ', 'AS' => 'AS', 'AD' => 'AD', 'AO' => 'AO', 'AI' => 'AI', 'AQ' => 'AQ', 'AG' => 'AG', 'AR' => 'AR', 'AM' => 'AM', 'AW' => 'AW', 'AU' => 'AU', 'AT' => 'AT', 'AZ' => 'AZ', 'BS' => 'BS', 'BH' => 'BH', 'BD' => 'BD', 'BB' => 'BB', 'BY' => 'BY', 'BE' => 'BE', 'BZ' => 'BZ', 'BJ' => 'BJ', 'BM' => 'BM', 'BT' => 'BT', 'BO' => 'BO', 'BA' => 'BA', 'BW' => 'BW', 'BV' => 'BV', 'BR' => 'BR', 'IO' => 'IO', 'BN' => 'BN', 'BG' => 'BG', 'BF' => 'BF', 'BI' => 'BI', 'KH' => 'KH', 'CM' => 'CM', 'CA' => 'CA', 'CV' => 'CV', 'KY' => 'KY', 'CF' => 'CF', 'TD' => 'TD', 'CL' => 'CL', 'CN' => 'CN', 'CX' => 'CX', 'CC' => 'CC', 'CO' => 'CO', 'KM' => 'KM', 'CG' => 'CG', 'CD' => 'CD', 'CK' => 'CK', 'CR' => 'CR', 'CI' => 'CI', 'HR' => 'HR', 'CU' => 'CU', 'CY' => 'CY', 'CZ' => 'CZ', 'DK' => 'DK', 'DJ' => 'DJ', 'DM' => 'DM', 'DO' => 'DO', 'EC' => 'EC', 'EG' => 'EG', 'SV' => 'SV', 'GQ' => 'GQ', 'ER' => 'ER', 'EE' => 'EE', 'ET' => 'ET', 'FK' => 'FK', 'FO' => 'FO', 'FJ' => 'FJ', 'FI' => 'FI', 'FR' => 'FR', 'GF' => 'GF', 'PF' => 'PF', 'TF' => 'TF', 'GA' => 'GA', 'GM' => 'GM', 'GE' => 'GE', 'DE' => 'DE', 'GH' => 'GH', 'GI' => 'GI', 'GR' => 'GR', 'GL' => 'GL', 'GD' => 'GD', 'GP' => 'GP', 'GU' => 'GU', 'GT' => 'GT', 'GN' => 'GN', 'GW' => 'GW', 'GY' => 'GY', 'HT' => 'HT', 'HM' => 'HM', 'VA' => 'VA', 'HN' => 'HN', 'HK' => 'HK', 'HU' => 'HU', 'IS' => 'IS', 'IN' => 'IN', 'ID' => 'ID', 'IR' => 'IR', 'IQ' => 'IQ', 'IE' => 'IE', 'IL' => 'IL', 'IT' => 'IT', 'JM' => 'JM', 'JP' => 'JP', 'JO' => 'JO', 'KZ' => 'KZ', 'KE' => 'KE', 'KI' => 'KI', 'KP' => 'KP', 'KR' => 'KR', 'KW' => 'KW', 'KG' => 'KG', 'LA' => 'LA', 'LV' => 'LV', 'LB' => 'LB', 'LS' => 'LS', 'LR' => 'LR', 'LY' => 'LY', 'LI' => 'LI', 'LT' => 'LT', 'LU' => 'LU', 'MO' => 'MO', 'MK' => 'MK', 'MG' => 'MG', 'MW' => 'MW', 'MY' => 'MY', 'MV' => 'MV', 'ML' => 'ML', 'MT' => 'MT', 'MH' => 'MH', 'MQ' => 'MQ', 'MR' => 'MR', 'MU' => 'MU', 'YT' => 'YT', 'MX' => 'MX', 'FM' => 'FM', 'MD' => 'MD', 'MC' => 'MC', 'MN' => 'MN', 'MS' => 'MS', 'MA' => 'MA', 'MZ' => 'MZ', 'MM' => 'MM', 'NA' => 'NA', 'NR' => 'NR', 'NP' => 'NP', 'NL' => 'NL', 'AN' => 'AN', 'NC' => 'NC', 'NZ' => 'NZ', 'NI' => 'NI', 'NE' => 'NE', 'NG' => 'NG', 'NU' => 'NU', 'NF' => 'NF', 'MP' => 'MP', 'NO' => 'NO', 'OM' => 'OM', 'PK' => 'PK', 'PW' => 'PW', 'PS' => 'PS', 'PA' => 'PA', 'PG' => 'PG', 'PY' => 'PY', 'PE' => 'PE', 'PH' => 'PH', 'PN' => 'PN', 'PL' => 'PL', 'PT' => 'PT', 'PR' => 'PR', 'QA' => 'QA', 'RE' => 'RE', 'RO' => 'RO', 'RU' => 'RU', 'RW' => 'RW', 'SH' => 'SH', 'KN' => 'KN', 'LC' => 'LC', 'PM' => 'PM', 'VC' => 'VC', 'WS' => 'WS', 'SM' => 'SM', 'ST' => 'ST', 'SA' => 'SA', 'SN' => 'SN', 'CS' => 'CS', 'SC' => 'SC', 'SL' => 'SL', 'SG' => 'SG', 'SK' => 'SK', 'SI' => 'SI', 'SB' => 'SB', 'SO' => 'SO', 'ZA' => 'ZA', 'GS' => 'GS', 'ES' => 'ES', 'LK' => 'LK', 'SD' => 'SD', 'SR' => 'SR', 'SJ' => 'SJ', 'SZ' => 'SZ', 'SE' => 'SE', 'CH' => 'CH', 'SY' => 'SY', 'TW' => 'TW', 'TJ' => 'TJ', 'TZ' => 'TZ', 'TH' => 'TH', 'TL' => 'TL', 'TG' => 'TG', 'TK' => 'TK', 'TO' => 'TO', 'TT' => 'TT', 'TN' => 'TN', 'TR' => 'TR', 'TM' => 'TM', 'TC' => 'TC', 'TV' => 'TV', 'UG' => 'UG', 'UA' => 'UA', 'AE' => 'AE', 'GB' => 'GB', 'US' => 'US', 'UM' => 'UM', 'UY' => 'UY', 'UZ' => 'UZ', 'VU' => 'VU', 'VE' => 'VE', 'VN' => 'VN', 'VG' => 'VG', 'VI' => 'VI', 'WF' => 'WF', 'EH' => 'EH', 'YE' => 'YE', 'ZM' => 'ZM', 'ZW' => 'ZW');

	/**
	 * @XmlValue	(type="string", name="iso3166")
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
		return '';
	}

	public function setValue($value) {
		$this->value = $this->validateValue($value);
	}

	protected function validateValue($value) {
		if (!is_string($value)) {
			throw new \Exception(sprintf('Supplied %s value was not %s', 'value', 'string'));
		}

		if (empty(static::$enumValue[$value])) {
			throw new \Exception(sprintf('Supplied %s value (%s) was not a valid enumerated value.', 'iso3166', $value));
		}
	
		return $value;
	}

	public function __toString() {
		return (string) $this->value;
	}
} // end class Iso3166
