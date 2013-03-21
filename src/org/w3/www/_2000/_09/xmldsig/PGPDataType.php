<?php
namespace org\w3\www\_2000\_09\xmldsig;



/**
 * @XmlNamespaces ({
 *	@XmlNamespace(url="http://www.w3.org/2000/09/xmldsig#", prefix="ds")
 * })
 * @XmlEntity	(xml="PGPDataType")
 */
class PGPDataType {
	/**
	 */

	/**
	 * List of manually overridden properties that should not be re-generated automatically
	 * @var array
	 */
	protected $_overrides = array();


	/**
	 * @XmlText	(type="string", name="PGPKeyID")
	 */
	protected $pGPKeyID;

	/**
	 * @XmlText	(type="string", name="PGPKeyPacket")
	 */
	protected $pGPKeyPacket;

	/**
	 * @XmlElement	(type="\org\w3\www\_2000\_09\xmldsig\AnyMixed", collection="true", name="*")
	 */
	protected $any;

	public function __construct($pGPKeyID = NULL, $pGPKeyPacket = NULL, $any = NULL) {
		$this->pGPKeyID = ($pGPKeyID===NULL) ? NULL : $this->validatePGPKeyID($pGPKeyID);
		$this->pGPKeyPacket = ($pGPKeyPacket===NULL) ? NULL : $this->validatePGPKeyPacket($pGPKeyPacket);
		$this->any = ($any===NULL) ? NULL : $this->validateAny($any);
	}

	public function getPGPKeyID($autoCreate = TRUE) {
		if ($this->pGPKeyID===NULL && $autoCreate && ! isset($this->_overrides['pGPKeyID']) ) {
			$this->pGPKeyID = $this->createPGPKeyID();
		}
		return $this->pGPKeyID;
	}
	
	protected function createPGPKeyID() {
		return NULL;
	}

	public function setPGPKeyID($pGPKeyID) {
		$this->pGPKeyID = $this->validatePGPKeyID($pGPKeyID);
	}

	protected function validatePGPKeyID($pGPKeyID) {
		if (!is_string($pGPKeyID)) {
			throw new \Exception(sprintf('Supplied %s value was not %s', 'pGPKeyID', 'string'));
		}
	
		return $pGPKeyID;
	}

	public function getPGPKeyPacket($autoCreate = TRUE) {
		if ($this->pGPKeyPacket===NULL && $autoCreate && ! isset($this->_overrides['pGPKeyPacket']) ) {
			$this->pGPKeyPacket = $this->createPGPKeyPacket();
		}
		return $this->pGPKeyPacket;
	}
	
	protected function createPGPKeyPacket() {
		return NULL;
	}

	public function setPGPKeyPacket($pGPKeyPacket) {
		$this->pGPKeyPacket = $this->validatePGPKeyPacket($pGPKeyPacket);
	}

	protected function validatePGPKeyPacket($pGPKeyPacket) {
		if (!is_string($pGPKeyPacket)) {
			throw new \Exception(sprintf('Supplied %s value was not %s', 'pGPKeyPacket', 'string'));
		}
	
		return $pGPKeyPacket;
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
		foreach ($any as $entry) {
			if ( ! is_object($entry) && ! is_null($entry) ) {
				throw new \Exception(sprintf('Supplied %s value was not %s', 'any', 'AnyMixed'));
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
} // end class PGPDataType
