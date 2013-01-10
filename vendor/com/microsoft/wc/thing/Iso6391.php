<?php
namespace com\microsoft\wc\thing;



/**
 * @XmlRootEntity	(xml="iso639-1")
 */
class Iso6391 {
	/**
	 */
	static protected $enumValue = array('aa' => 'aa', 'ab' => 'ab', 'af' => 'af', 'am' => 'am', 'ar' => 'ar', 'as' => 'as', 'ay' => 'ay', 'az' => 'az', 'ba' => 'ba', 'be' => 'be', 'bg' => 'bg', 'bh' => 'bh', 'bi' => 'bi', 'bn' => 'bn', 'bo' => 'bo', 'br' => 'br', 'ca' => 'ca', 'co' => 'co', 'cs' => 'cs', 'cy' => 'cy', 'da' => 'da', 'de' => 'de', 'dz' => 'dz', 'el' => 'el', 'en' => 'en', 'eo' => 'eo', 'es' => 'es', 'et' => 'et', 'eu' => 'eu', 'fa' => 'fa', 'fi' => 'fi', 'fj' => 'fj', 'fo' => 'fo', 'fr' => 'fr', 'fy' => 'fy', 'ga' => 'ga', 'gd' => 'gd', 'gl' => 'gl', 'gn' => 'gn', 'gu' => 'gu', 'ha' => 'ha', 'hi' => 'hi', 'hr' => 'hr', 'hu' => 'hu', 'hy' => 'hy', 'ia' => 'ia', 'ie' => 'ie', 'ik' => 'ik', 'in' => 'in', 'is' => 'is', 'it' => 'it', 'iw' => 'iw', 'ja' => 'ja', 'ji' => 'ji', 'jw' => 'jw', 'ka' => 'ka', 'kk' => 'kk', 'kl' => 'kl', 'km' => 'km', 'kn' => 'kn', 'ko' => 'ko', 'ks' => 'ks', 'ku' => 'ku', 'ky' => 'ky', 'la' => 'la', 'ln' => 'ln', 'lo' => 'lo', 'lt' => 'lt', 'lv' => 'lv', 'mg' => 'mg', 'mi' => 'mi', 'mk' => 'mk', 'ml' => 'ml', 'mn' => 'mn', 'mo' => 'mo', 'mr' => 'mr', 'ms' => 'ms', 'mt' => 'mt', 'my' => 'my', 'na' => 'na', 'ne' => 'ne', 'nl' => 'nl', 'no' => 'no', 'oc' => 'oc', 'om' => 'om', 'or' => 'or', 'pa' => 'pa', 'pl' => 'pl', 'ps' => 'ps', 'pt' => 'pt', 'qu' => 'qu', 'rm' => 'rm', 'rn' => 'rn', 'ro' => 'ro', 'ru' => 'ru', 'rw' => 'rw', 'sa' => 'sa', 'sd' => 'sd', 'sg' => 'sg', 'sh' => 'sh', 'si' => 'si', 'sk' => 'sk', 'sl' => 'sl', 'sm' => 'sm', 'sn' => 'sn', 'so' => 'so', 'sq' => 'sq', 'sr' => 'sr', 'ss' => 'ss', 'st' => 'st', 'su' => 'su', 'sv' => 'sv', 'sw' => 'sw', 'ta' => 'ta', 'te' => 'te', 'tg' => 'tg', 'th' => 'th', 'ti' => 'ti', 'tk' => 'tk', 'tl' => 'tl', 'tn' => 'tn', 'to' => 'to', 'tr' => 'tr', 'ts' => 'ts', 'tt' => 'tt', 'tw' => 'tw', 'uk' => 'uk', 'ur' => 'ur', 'uz' => 'uz', 'vi' => 'vi', 'vo' => 'vo', 'wo' => 'wo', 'xh' => 'xh', 'yo' => 'yo', 'zh' => 'zh', 'zu' => 'zu');

	/**
	 * @XmlValue	(type="string", name="iso639-1")
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
			throw new \Exception(sprintf('Supplied %s value (%s) was not a valid enumerated value.', 'iso639-1', $value));
		}
	
		return $value;
	}

	public function __toString() {
		return (string) $this->value;
	}
} // end class Iso6391
