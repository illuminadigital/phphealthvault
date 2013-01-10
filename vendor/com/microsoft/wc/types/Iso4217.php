<?php
namespace com\microsoft\wc\types;



/**
 * @XmlNamespaces ({
 *	@XmlNamespace(url="urn:com.microsoft.wc.types", prefix="wc-types")
 * })
 * @XmlRootEntity	(xml="iso4217")
 */
class Iso4217 {
	/**
	 */
	static protected $enumValue = array('aed' => 'aed', 'afa' => 'afa', 'all' => 'all', 'amd' => 'amd', 'ang' => 'ang', 'aoa' => 'aoa', 'ars' => 'ars', 'aud' => 'aud', 'awg' => 'awg', 'azm' => 'azm', 'bam' => 'bam', 'bbd' => 'bbd', 'bdt' => 'bdt', 'bgn' => 'bgn', 'bhd' => 'bhd', 'bif' => 'bif', 'bmd' => 'bmd', 'bnd' => 'bnd', 'bob' => 'bob', 'brl' => 'brl', 'bsd' => 'bsd', 'btn' => 'btn', 'bwp' => 'bwp', 'byr' => 'byr', 'bzd' => 'bzd', 'cad' => 'cad', 'cdf' => 'cdf', 'chf' => 'chf', 'clp' => 'clp', 'cny' => 'cny', 'cop' => 'cop', 'crc' => 'crc', 'csd' => 'csd', 'cup' => 'cup', 'cve' => 'cve', 'cyp' => 'cyp', 'czk' => 'czk', 'djf' => 'djf', 'dkk' => 'dkk', 'dop' => 'dop', 'dzd' => 'dzd', 'eek' => 'eek', 'egp' => 'egp', 'ern' => 'ern', 'etb' => 'etb', 'eur' => 'eur', 'fjd' => 'fjd', 'fkp' => 'fkp', 'gbp' => 'gbp', 'gel' => 'gel', 'ggp' => 'ggp', 'ghc' => 'ghc', 'gip' => 'gip', 'gmd' => 'gmd', 'gnf' => 'gnf', 'gtq' => 'gtq', 'gyd' => 'gyd', 'hkd' => 'hkd', 'hnl' => 'hnl', 'hrk' => 'hrk', 'htg' => 'htg', 'huf' => 'huf', 'idr' => 'idr', 'ils' => 'ils', 'imp' => 'imp', 'inr' => 'inr', 'iqd' => 'iqd', 'irr' => 'irr', 'isk' => 'isk', 'jep' => 'jep', 'jmd' => 'jmd', 'jod' => 'jod', 'jpy' => 'jpy', 'kes' => 'kes', 'kgs' => 'kgs', 'khr' => 'khr', 'kmf' => 'kmf', 'kpw' => 'kpw', 'krw' => 'krw', 'kwd' => 'kwd', 'kyd' => 'kyd', 'kzt' => 'kzt', 'lak' => 'lak', 'lbp' => 'lbp', 'lkr' => 'lkr', 'lrd' => 'lrd', 'lsl' => 'lsl', 'ltl' => 'ltl', 'lvl' => 'lvl', 'lyd' => 'lyd', 'mad' => 'mad', 'mdl' => 'mdl', 'mga' => 'mga', 'mkd' => 'mkd', 'mmk' => 'mmk', 'mnt' => 'mnt', 'mop' => 'mop', 'mro' => 'mro', 'mtl' => 'mtl', 'mur' => 'mur', 'mvr' => 'mvr', 'mwk' => 'mwk', 'mxn' => 'mxn', 'myr' => 'myr', 'mzm' => 'mzm', 'nad' => 'nad', 'ngn' => 'ngn', 'nio' => 'nio', 'nok' => 'nok', 'npr' => 'npr', 'nzd' => 'nzd', 'omr' => 'omr', 'pab' => 'pab', 'pen' => 'pen', 'pgk' => 'pgk', 'php' => 'php', 'pkr' => 'pkr', 'pln' => 'pln', 'pyg' => 'pyg', 'qar' => 'qar', 'rol' => 'rol', 'rub' => 'rub', 'rwf' => 'rwf', 'sar' => 'sar', 'sbd' => 'sbd', 'scr' => 'scr', 'sdd' => 'sdd', 'sek' => 'sek', 'sgd' => 'sgd', 'shp' => 'shp', 'sit' => 'sit', 'skk' => 'skk', 'sll' => 'sll', 'sos' => 'sos', 'spl' => 'spl', 'srd' => 'srd', 'std' => 'std', 'svc' => 'svc', 'syp' => 'syp', 'szl' => 'szl', 'thb' => 'thb', 'tjs' => 'tjs', 'tmm' => 'tmm', 'tnd' => 'tnd', 'top' => 'top', 'trl' => 'trl', 'try' => 'try', 'ttd' => 'ttd', 'tvd' => 'tvd', 'twd' => 'twd', 'tzs' => 'tzs', 'uah' => 'uah', 'ugx' => 'ugx', 'usd' => 'usd', 'uyu' => 'uyu', 'uzs' => 'uzs', 'veb' => 'veb', 'vnd' => 'vnd', 'vuv' => 'vuv', 'wst' => 'wst', 'xaf' => 'xaf', 'xag' => 'xag', 'xau' => 'xau', 'xcd' => 'xcd', 'xdr' => 'xdr', 'xof' => 'xof', 'xpd' => 'xpd', 'xpf' => 'xpf', 'xpt' => 'xpt', 'yer' => 'yer', 'zar' => 'zar', 'zmk' => 'zmk', 'zwd' => 'zwd');

	/**
	 * @XmlValue	(type="string", name="iso4217")
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
			throw new \Exception(sprintf('Supplied %s value (%s) was not a valid enumerated value.', 'iso4217', $value));
		}
	
		return $value;
	}

	public function __toString() {
		return (string) $this->value;
	}
} // end class Iso4217
