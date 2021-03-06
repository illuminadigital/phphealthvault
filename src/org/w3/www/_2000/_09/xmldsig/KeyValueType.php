<?php
namespace org\w3\www\_2000\_09\xmldsig;



/**
 * @XmlNamespaces ({
 *	@XmlNamespace(url="http://www.w3.org/2000/09/xmldsig#", prefix="ds")
 * })
 * @XmlEntity	(xml="KeyValueType")
 */
class KeyValueType {
	/**
	 */

	/**
	 * List of manually overridden properties that should not be re-generated automatically
	 * @var array
	 */
	protected $_overrides = array();


	/**
	 * @XmlElement	(type="\org\w3\www\_2000\_09\xmldsig\DSAKeyValue", name="DSAKeyValue")
	 */
	protected $dSAKeyValue;

	/**
	 * @XmlElement	(type="\org\w3\www\_2000\_09\xmldsig\RSAKeyValue", name="RSAKeyValue")
	 */
	protected $rSAKeyValue;

	/**
	 * @XmlElement	(type="\org\w3\www\_2000\_09\xmldsig\AnyMixed", collection="true", name="*")
	 */
	protected $any;

	public function __construct($dSAKeyValue = NULL, $rSAKeyValue = NULL, $any = NULL) {
		$this->dSAKeyValue = ($dSAKeyValue===NULL) ? NULL : $this->validateDSAKeyValue($dSAKeyValue);
		$this->rSAKeyValue = ($rSAKeyValue===NULL) ? NULL : $this->validateRSAKeyValue($rSAKeyValue);
		$this->any = ($any===NULL) ? NULL : $this->validateAny($any);
	}

	public function getDSAKeyValue($autoCreate = TRUE) {
		if ($this->dSAKeyValue===NULL && $autoCreate && ! isset($this->_overrides['dSAKeyValue']) ) {
			$this->dSAKeyValue = $this->createDSAKeyValue();
		}
		return $this->dSAKeyValue;
	}
	
	protected function createDSAKeyValue() {
		return NULL;
	}

	public function setDSAKeyValue($dSAKeyValue) {
		$this->dSAKeyValue = $this->validateDSAKeyValue($dSAKeyValue);
	}

	protected function validateDSAKeyValue($dSAKeyValue) {
		if (!is_DSAKeyValue($dSAKeyValue)) {
			throw new \Exception(sprintf('Supplied %s value was not %s', 'dSAKeyValue', 'DSAKeyValue'));
		}
	
		return $dSAKeyValue;
	}

	public function getRSAKeyValue($autoCreate = TRUE) {
		if ($this->rSAKeyValue===NULL && $autoCreate && ! isset($this->_overrides['rSAKeyValue']) ) {
			$this->rSAKeyValue = $this->createRSAKeyValue();
		}
		return $this->rSAKeyValue;
	}
	
	protected function createRSAKeyValue() {
		return NULL;
	}

	public function setRSAKeyValue($rSAKeyValue) {
		$this->rSAKeyValue = $this->validateRSAKeyValue($rSAKeyValue);
	}

	protected function validateRSAKeyValue($rSAKeyValue) {
		if (!is_RSAKeyValue($rSAKeyValue)) {
			throw new \Exception(sprintf('Supplied %s value was not %s', 'rSAKeyValue', 'RSAKeyValue'));
		}
	
		return $rSAKeyValue;
	}

	public function getAny($autoCreate = TRUE) {
		if ($this->any===NULL && $autoCreate && ! isset($this->_overrides['any']) ) {
			$this->any = $this->createAny();
		}
		return $this->any;
	}
	
	protected function createAny() {
		return array();
	}

	public function setAny($any) {
		$this->any = $this->validateAny($any);
	}

	protected function validateAny($any) {
		$count = count($any);
		if ($count < 0) {
			throw new \Exception(sprintf('Supplied %s array has less than the required number (%d) of entries.', 'any', 0));
		}
		if ( ! empty($any) ) {
			foreach ($any as $entry) {
				if ( ! is_object($entry) && ! is_null($entry) ) {
					throw new \Exception(sprintf('Supplied %s value was not %s', 'any', 'AnyMixed'));
				}
			}
		}
	
		return $any;
	}

	public function addAny($any) {
		$this->any[] = $this->validateAnyType($any);
	}

	protected function validateAnyType($any) {
		if ( ! is_object($any) && ! is_null($any) ) {
			throw new \Exception(sprintf('Supplied %s value was not %s', 'any', 'AnyMixed'));
		}
	
		return $any;
	}
} // end class KeyValueType
