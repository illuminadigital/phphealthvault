<?php
namespace org\w3\www\_2000\_09\xmldsig;



/**
 * @XmlNamespaces ({
 *	@XmlNamespace(url="http://www.w3.org/2000/09/xmldsig#", prefix="ds")
 * })
 * @XmlEntity	(xml="KeyInfoType")
 */
class KeyInfoType {
	/**
	 */

	/**
	 * @XmlElement	(type="\org\w3\www\_2000\_09\xmldsig\KeyName", name="KeyName")
	 */
	protected $keyName;

	/**
	 * @XmlElement	(type="\org\w3\www\_2000\_09\xmldsig\KeyValue", name="KeyValue")
	 */
	protected $keyValue;

	/**
	 * @XmlElement	(type="\org\w3\www\_2000\_09\xmldsig\RetrievalMethod", name="RetrievalMethod")
	 */
	protected $retrievalMethod;

	/**
	 * @XmlElement	(type="\org\w3\www\_2000\_09\xmldsig\X509Data", name="X509Data")
	 */
	protected $x509Data;

	/**
	 * @XmlElement	(type="\org\w3\www\_2000\_09\xmldsig\PGPData", name="PGPData")
	 */
	protected $pGPData;

	/**
	 * @XmlElement	(type="\org\w3\www\_2000\_09\xmldsig\SPKIData", name="SPKIData")
	 */
	protected $sPKIData;

	/**
	 * @XmlElement	(type="\org\w3\www\_2000\_09\xmldsig\MgmtData", name="MgmtData")
	 */
	protected $mgmtData;

	/**
	 * @XmlElement	(type="\org\w3\www\_2000\_09\xmldsig\AnyMixed", collection="true", name="*")
	 */
	protected $any;

	/**
	 * @XmlAttribute	(type="string", name="Id")
	 */
	protected $id;

	public function __construct($keyName = NULL, $keyValue = NULL, $retrievalMethod = NULL, $x509Data = NULL, $pGPData = NULL, $sPKIData = NULL, $mgmtData = NULL, $any = NULL, $id = NULL) {
		$this->keyName = ($keyName===NULL) ? NULL : $this->validateKeyName($keyName);
		$this->keyValue = ($keyValue===NULL) ? NULL : $this->validateKeyValue($keyValue);
		$this->retrievalMethod = ($retrievalMethod===NULL) ? NULL : $this->validateRetrievalMethod($retrievalMethod);
		$this->x509Data = ($x509Data===NULL) ? NULL : $this->validateX509Data($x509Data);
		$this->pGPData = ($pGPData===NULL) ? NULL : $this->validatePGPData($pGPData);
		$this->sPKIData = ($sPKIData===NULL) ? NULL : $this->validateSPKIData($sPKIData);
		$this->mgmtData = ($mgmtData===NULL) ? NULL : $this->validateMgmtData($mgmtData);
		$this->any = ($any===NULL) ? NULL : $this->validateAny($any);
		$this->id = ($id===NULL) ? NULL : $this->validateId($id);
	}

	public function getKeyName() {
		if ($this->keyName===NULL) {
			$this->keyName = $this->createKeyName();
		}
		return $this->keyName;
	}
	
	protected function createKeyName() {
		return new \org\w3\www\_2000\_09\xmldsig\KeyName();
	}

	public function setKeyName($keyName) {
		$this->keyName = $this->validateKeyName($keyName);
	}

	protected function validateKeyName($keyName) {
		if ( ! $keyName instanceof \org\w3\www\_2000\_09\xmldsig\KeyName ) {
			$keyName = new \org\w3\www\_2000\_09\xmldsig\KeyName ($keyName);
		}
	
		return $keyName;
	}

	public function getKeyValue() {
		if ($this->keyValue===NULL) {
			$this->keyValue = $this->createKeyValue();
		}
		return $this->keyValue;
	}
	
	protected function createKeyValue() {
		return new \org\w3\www\_2000\_09\xmldsig\KeyValue();
	}

	public function setKeyValue($keyValue) {
		$this->keyValue = $this->validateKeyValue($keyValue);
	}

	protected function validateKeyValue($keyValue) {
		if ( ! $keyValue instanceof \org\w3\www\_2000\_09\xmldsig\KeyValue ) {
			$keyValue = new \org\w3\www\_2000\_09\xmldsig\KeyValue ($keyValue);
		}
	
		return $keyValue;
	}

	public function getRetrievalMethod() {
		if ($this->retrievalMethod===NULL) {
			$this->retrievalMethod = $this->createRetrievalMethod();
		}
		return $this->retrievalMethod;
	}
	
	protected function createRetrievalMethod() {
		return new \org\w3\www\_2000\_09\xmldsig\RetrievalMethod();
	}

	public function setRetrievalMethod($retrievalMethod) {
		$this->retrievalMethod = $this->validateRetrievalMethod($retrievalMethod);
	}

	protected function validateRetrievalMethod($retrievalMethod) {
		if ( ! $retrievalMethod instanceof \org\w3\www\_2000\_09\xmldsig\RetrievalMethod ) {
			$retrievalMethod = new \org\w3\www\_2000\_09\xmldsig\RetrievalMethod ($retrievalMethod);
		}
	
		return $retrievalMethod;
	}

	public function getX509Data() {
		if ($this->x509Data===NULL) {
			$this->x509Data = $this->createX509Data();
		}
		return $this->x509Data;
	}
	
	protected function createX509Data() {
		return new \org\w3\www\_2000\_09\xmldsig\X509Data();
	}

	public function setX509Data($x509Data) {
		$this->x509Data = $this->validateX509Data($x509Data);
	}

	protected function validateX509Data($x509Data) {
		if ( ! $x509Data instanceof \org\w3\www\_2000\_09\xmldsig\X509Data ) {
			$x509Data = new \org\w3\www\_2000\_09\xmldsig\X509Data ($x509Data);
		}
	
		return $x509Data;
	}

	public function getPGPData() {
		if ($this->pGPData===NULL) {
			$this->pGPData = $this->createPGPData();
		}
		return $this->pGPData;
	}
	
	protected function createPGPData() {
		return new \org\w3\www\_2000\_09\xmldsig\PGPData();
	}

	public function setPGPData($pGPData) {
		$this->pGPData = $this->validatePGPData($pGPData);
	}

	protected function validatePGPData($pGPData) {
		if ( ! $pGPData instanceof \org\w3\www\_2000\_09\xmldsig\PGPData ) {
			$pGPData = new \org\w3\www\_2000\_09\xmldsig\PGPData ($pGPData);
		}
	
		return $pGPData;
	}

	public function getSPKIData() {
		if ($this->sPKIData===NULL) {
			$this->sPKIData = $this->createSPKIData();
		}
		return $this->sPKIData;
	}
	
	protected function createSPKIData() {
		return new \org\w3\www\_2000\_09\xmldsig\SPKIData();
	}

	public function setSPKIData($sPKIData) {
		$this->sPKIData = $this->validateSPKIData($sPKIData);
	}

	protected function validateSPKIData($sPKIData) {
		if ( ! $sPKIData instanceof \org\w3\www\_2000\_09\xmldsig\SPKIData ) {
			$sPKIData = new \org\w3\www\_2000\_09\xmldsig\SPKIData ($sPKIData);
		}
	
		return $sPKIData;
	}

	public function getMgmtData() {
		if ($this->mgmtData===NULL) {
			$this->mgmtData = $this->createMgmtData();
		}
		return $this->mgmtData;
	}
	
	protected function createMgmtData() {
		return new \org\w3\www\_2000\_09\xmldsig\MgmtData();
	}

	public function setMgmtData($mgmtData) {
		$this->mgmtData = $this->validateMgmtData($mgmtData);
	}

	protected function validateMgmtData($mgmtData) {
		if ( ! $mgmtData instanceof \org\w3\www\_2000\_09\xmldsig\MgmtData ) {
			$mgmtData = new \org\w3\www\_2000\_09\xmldsig\MgmtData ($mgmtData);
		}
	
		return $mgmtData;
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

	public function getId() {
		if ($this->id===NULL) {
			$this->id = $this->createId();
		}
		return $this->id;
	}
	
	protected function createId() {
		return NULL;
	}

	public function setId($id) {
		$this->id = $this->validateId($id);
	}

	protected function validateId($id) {
		if ( ! is_string($id) && ! is_null($id) ) {
			throw new \Exception(sprintf('Supplied %s value was not %s', 'id', 'string'));
		}
	
		return $id;
	}
} // end class KeyInfoType
