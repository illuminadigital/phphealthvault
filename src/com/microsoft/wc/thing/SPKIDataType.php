<?php
namespace com\microsoft\wc\thing;



/**
 * @XmlEntity	(xml="SPKIDataType")
 */
class SPKIDataType {
	/**
	 */

	/**
	 * @XmlText	(type="string", name="SPKISexp")
	 */
	protected $sPKISexp;

	public function __construct($sPKISexp = NULL) {
		$this->sPKISexp = ($sPKISexp===NULL) ? NULL : $this->validateSPKISexp($sPKISexp);
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
} // end class SPKIDataType
