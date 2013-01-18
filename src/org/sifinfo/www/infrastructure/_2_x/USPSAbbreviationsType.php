<?php
namespace org\sifinfo\www\infrastructure\_2_x;



/**
 * @XmlNamespaces ({
 *	@XmlNamespace(url="http://www.sifinfo.org/infrastructure/2.x", prefix="")
 * })
 * @XmlRootEntity	(xml="USPSAbbreviationsType")
 */
class USPSAbbreviationsType {
	/**
	 */
	static protected $enumValue = array('AL' => 'ALABAMA', 'AK' => 'ALASKA', 'AS' => 'AMERICAN SAMOA', 'AZ' => 'ARIZONA', 'AR' => 'ARKANSAS', 'CA' => 'CALIFORNIA', 'CO' => 'COLORADO', 'CT' => 'CONNECTICUT', 'DE' => 'DELAWARE', 'DC' => 'DISTRICT OF COLUMBIA', 'FM' => 'FEDERATED STATES OF MICRONESIA', 'FL' => 'FLORIDA', 'GA' => 'GEORGIA', 'GU' => 'GUAM', 'HI' => 'HAWAII', 'ID' => 'IDAHO', 'IL' => 'ILLINOIS', 'IN' => 'INDIANA', 'IA' => 'IOWA', 'KS' => 'KANSAS', 'KY' => 'KENTUCKY', 'LA' => 'LOUISIANA', 'ME' => 'MAINE', 'MH' => 'MARSHALL ISLANDS', 'MD' => 'MARYLAND', 'MA' => 'MASSACHUSETTS', 'MI' => 'MICHIGAN', 'MN' => 'MINNESOTA', 'MS' => 'MISSISSIPPI', 'MO' => 'MISSOURI', 'MT' => 'MONTANA', 'NE' => 'NEBRASKA', 'NV' => 'NEVADA', 'NH' => 'NEW HAMPSHIRE', 'NJ' => 'NEW JERSEY', 'NM' => 'NEW MEXICO', 'NY' => 'NEW YORK', 'NC' => 'NORTH CAROLINA', 'ND' => 'NORTH DAKOTA', 'MP' => 'NORTHERN MARIANA ISLANDS', 'OH' => 'OHIO', 'OK' => 'OKLAHOMA', 'OR' => 'OREGON', 'PW' => 'PALAU', 'PA' => 'PENNSYLVANIA', 'PR' => 'PUERTO RICO', 'RI' => 'RHODE ISLAND', 'SC' => 'SOUTH CAROLINA', 'SD' => 'SOUTH DAKOTA', 'TN' => 'TENNESSEE', 'TX' => 'TEXAS', 'UT' => 'UTAH', 'VT' => 'VERMONT', 'VI' => 'VIRGIN ISLANDS', 'VA' => 'VIRGINIA', 'WA' => 'WASHINGTON', 'WV' => 'WEST VIRGINIA', 'WI' => 'WISCONSIN', 'WY' => 'WYOMING', 'AE' => 'Armed Forces Africa, Canada, Europe and Middle East', 'AA' => 'Armed Forces Americas (except Canada)', 'AP' => 'Armed Forces Pacific');

	/**
	 * @XmlValue	(type="string", name="USPSAbbreviationsType")
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
		if (!is_string($value)) {
			throw new \Exception(sprintf('Supplied %s value was not %s', 'value', 'string'));
		}

		if (empty(static::$enumValue[$value])) {
			throw new \Exception(sprintf('Supplied %s value (%s) was not a valid enumerated value.', 'USPSAbbreviationsType', $value));
		}
	
		return $value;
	}

	public function __toString() {
		return (string) $this->value;
	}
} // end class USPSAbbreviationsType
