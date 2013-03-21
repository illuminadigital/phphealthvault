<?php
namespace com\microsoft\wc\application;



/**
 * @XmlNamespaces ({
 *	@XmlNamespace(url="urn:com.microsoft.wc.application", prefix="wc-app")
 * })
 * @XmlRootEntity	(xml="AppSmallLogo")
 */
class AppSmallLogo {
	/**
	 */

	/**
	 * List of manually overridden properties that should not be re-generated automatically
	 * @var array
	 */
	protected $_overrides = array();


	/**
	 * @XmlValue	(type="string", name="AppSmallLogo")
	 */
	protected $value;

	public function __construct($value = NULL) {
		$this->value = ($value===NULL) ? NULL : $this->validateValue($value);
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
		if (!is_string($value)) {
			throw new \Exception(sprintf('Supplied %s value was not %s', 'value', 'string'));
		}

		if (strlen($value) < 3) {
			throw new \Exception(sprintf('Supplied %s value was shorter than the minimum (%d)', 'AppSmallLogo', 3));
		}

		if (strlen($value) > 40960) {
			throw new \Exception(sprintf('Supplied %s value was longer than the maximum (%d)', 'AppSmallLogo', 40960));
		}
	
		return $value;
	}

	public function __toString() {
		return (string) $this->value;
	}
} // end class AppSmallLogo
