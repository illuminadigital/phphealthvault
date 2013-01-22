<?php
namespace org\w3\www\_2000\_09\xmldsig;



/**
 * @XmlNamespaces ({
 *	@XmlNamespace(url="http://www.w3.org/2000/09/xmldsig#", prefix="ds")
 * })
 * @XmlEntity	(xml="SPKIDataType")
 */
class SPKIDataType {
	/**
	 */

	/**
	 * @XmlText	(type="string", name="SPKISexp")
	 */
	protected $sPKISexp;

	/**
	 * @XmlElement	(type="\org\w3\www\_2000\_09\xmldsig\AnyMixed", collection="true", name="*")
	 */
	protected $any;

	public function __construct($sPKISexp = NULL, $any = NULL) {
		$this->sPKISexp = ($sPKISexp===NULL) ? NULL : $this->validateSPKISexp($sPKISexp);
		$this->any = ($any===NULL) ? NULL : $this->validateAny($any);
	}

	public function getSPKISexp() {
		if ($this->sPKISexp===NULL) {
			$this->sPKISexp = $this->createSPKISexp();
		}
		return $this->sPKISexp;
	}
	
	protected function createSPKISexp() {
		return NULL;
	}

	public function setSPKISexp($sPKISexp) {
		$this->sPKISexp = $this->validateSPKISexp($sPKISexp);
	}

	protected function validateSPKISexp($sPKISexp) {
		if (!is_string($sPKISexp)) {
			throw new \Exception(sprintf('Supplied %s value was not %s', 'sPKISexp', 'string'));
		}
	
		return $sPKISexp;
	}

	public function getAny() {
		if ($this->any===NULL) {
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
		foreach ($any as $entry) {
			if ( ! is_AnyMixed($entry) && ! is_null($entry) ) {
				throw new \Exception(sprintf('Supplied %s value was not %s', 'any', 'AnyMixed'));
			}
		}
	
		return $any;
	}

	public function addAny($any) {
		$this->any[] = $this->validateAnyType($any);
	}

	protected function validateAnyType($any) {
		if ( ! is_AnyMixed($any) && ! is_null($any) ) {
			throw new \Exception(sprintf('Supplied %s value was not %s', 'any', 'AnyMixed'));
		}
	
		return $any;
	}
} // end class SPKIDataType
