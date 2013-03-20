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
	 * @XmlElement	(type="\org\w3\www\_2000\_09\xmldsig\KeyName", collection="true", name="KeyName")
	 */
	protected $keyName;

	/**
	 * @XmlElement	(type="\org\w3\www\_2000\_09\xmldsig\KeyValue", collection="true", name="KeyValue")
	 */
	protected $keyValue;

	/**
	 * @XmlElement	(type="\org\w3\www\_2000\_09\xmldsig\RetrievalMethod", collection="true", name="RetrievalMethod")
	 */
	protected $retrievalMethod;

	/**
	 * @XmlElement	(type="\org\w3\www\_2000\_09\xmldsig\X509Data", collection="true", name="X509Data")
	 */
	protected $x509Data;

	/**
	 * @XmlElement	(type="\org\w3\www\_2000\_09\xmldsig\PGPData", collection="true", name="PGPData")
	 */
	protected $pGPData;

	/**
	 * @XmlElement	(type="\org\w3\www\_2000\_09\xmldsig\SPKIData", collection="true", name="SPKIData")
	 */
	protected $sPKIData;

	/**
	 * @XmlElement	(type="\org\w3\www\_2000\_09\xmldsig\MgmtData", collection="true", name="MgmtData")
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
		return array();
	}

	public function setKeyName($keyName) {
		$this->keyName = $this->validateKeyName($keyName);
	}

	protected function validateKeyName($keyName) {
		if ( ! is_array ($keyName) ) {
			$keyName = array($keyName);
		}
		$count = count($keyName);
		if ($count < 1) {
			throw new \Exception(sprintf('Supplied %s array has less than the required number (%d) of entries.', 'keyName', 1));
		}
		foreach ($keyName as $entry) {
			if (!($entry instanceof KeyName)) {
				throw new \Exception(sprintf('Supplied %s value was not %s', 'keyName', 'KeyName'));
			}
		}
	
		return $keyName;
	}

	public function addKeyName($keyName) {
		$this->keyName[] = $keyName;
	}

	public function getKeyValue() {
		if ($this->keyValue===NULL) {
			$this->keyValue = $this->createKeyValue();
		}
		return $this->keyValue;
	}
	
	protected function createKeyValue() {
		return array();
	}

	public function setKeyValue($keyValue) {
		$this->keyValue = $this->validateKeyValue($keyValue);
	}

	protected function validateKeyValue($keyValue) {
		if ( ! is_array ($keyValue) ) {
			$keyValue = array($keyValue);
		}
		$count = count($keyValue);
		if ($count < 1) {
			throw new \Exception(sprintf('Supplied %s array has less than the required number (%d) of entries.', 'keyValue', 1));
		}
		foreach ($keyValue as $entry) {
			if (!($entry instanceof KeyValue)) {
				throw new \Exception(sprintf('Supplied %s value was not %s', 'keyValue', 'KeyValue'));
			}
		}
	
		return $keyValue;
	}

	public function addKeyValue($keyValue) {
		$this->keyValue[] = $keyValue;
	}

	public function getRetrievalMethod() {
		if ($this->retrievalMethod===NULL) {
			$this->retrievalMethod = $this->createRetrievalMethod();
		}
		return $this->retrievalMethod;
	}
	
	protected function createRetrievalMethod() {
		return array();
	}

	public function setRetrievalMethod($retrievalMethod) {
		$this->retrievalMethod = $this->validateRetrievalMethod($retrievalMethod);
	}

	protected function validateRetrievalMethod($retrievalMethod) {
		if ( ! is_array ($retrievalMethod) ) {
			$retrievalMethod = array($retrievalMethod);
		}
		$count = count($retrievalMethod);
		if ($count < 1) {
			throw new \Exception(sprintf('Supplied %s array has less than the required number (%d) of entries.', 'retrievalMethod', 1));
		}
		foreach ($retrievalMethod as $entry) {
			if (!($entry instanceof RetrievalMethod)) {
				throw new \Exception(sprintf('Supplied %s value was not %s', 'retrievalMethod', 'RetrievalMethod'));
			}
		}
	
		return $retrievalMethod;
	}

	public function addRetrievalMethod($retrievalMethod) {
		$this->retrievalMethod[] = $retrievalMethod;
	}

	public function getX509Data() {
		if ($this->x509Data===NULL) {
			$this->x509Data = $this->createX509Data();
		}
		return $this->x509Data;
	}
	
	protected function createX509Data() {
		return array();
	}

	public function setX509Data($x509Data) {
		$this->x509Data = $this->validateX509Data($x509Data);
	}

	protected function validateX509Data($x509Data) {
		if ( ! is_array ($x509Data) ) {
			$x509Data = array($x509Data);
		}
		$count = count($x509Data);
		if ($count < 1) {
			throw new \Exception(sprintf('Supplied %s array has less than the required number (%d) of entries.', 'x509Data', 1));
		}
		foreach ($x509Data as $entry) {
			if (!($entry instanceof X509Data)) {
				throw new \Exception(sprintf('Supplied %s value was not %s', 'x509Data', 'X509Data'));
			}
		}
	
		return $x509Data;
	}

	public function addX509Data($x509Data) {
		$this->x509Data[] = $x509Data;
	}

	public function getPGPData() {
		if ($this->pGPData===NULL) {
			$this->pGPData = $this->createPGPData();
		}
		return $this->pGPData;
	}
	
	protected function createPGPData() {
		return array();
	}

	public function setPGPData($pGPData) {
		$this->pGPData = $this->validatePGPData($pGPData);
	}

	protected function validatePGPData($pGPData) {
		if ( ! is_array ($pGPData) ) {
			$pGPData = array($pGPData);
		}
		$count = count($pGPData);
		if ($count < 1) {
			throw new \Exception(sprintf('Supplied %s array has less than the required number (%d) of entries.', 'pGPData', 1));
		}
		foreach ($pGPData as $entry) {
			if (!($entry instanceof PGPData)) {
				throw new \Exception(sprintf('Supplied %s value was not %s', 'pGPData', 'PGPData'));
			}
		}
	
		return $pGPData;
	}

	public function addPGPData($pGPData) {
		$this->pGPData[] = $pGPData;
	}

	public function getSPKIData() {
		if ($this->sPKIData===NULL) {
			$this->sPKIData = $this->createSPKIData();
		}
		return $this->sPKIData;
	}
	
	protected function createSPKIData() {
		return array();
	}

	public function setSPKIData($sPKIData) {
		$this->sPKIData = $this->validateSPKIData($sPKIData);
	}

	protected function validateSPKIData($sPKIData) {
		if ( ! is_array ($sPKIData) ) {
			$sPKIData = array($sPKIData);
		}
		$count = count($sPKIData);
		if ($count < 1) {
			throw new \Exception(sprintf('Supplied %s array has less than the required number (%d) of entries.', 'sPKIData', 1));
		}
		foreach ($sPKIData as $entry) {
			if (!($entry instanceof SPKIData)) {
				throw new \Exception(sprintf('Supplied %s value was not %s', 'sPKIData', 'SPKIData'));
			}
		}
	
		return $sPKIData;
	}

	public function addSPKIData($sPKIData) {
		$this->sPKIData[] = $sPKIData;
	}

	public function getMgmtData() {
		if ($this->mgmtData===NULL) {
			$this->mgmtData = $this->createMgmtData();
		}
		return $this->mgmtData;
	}
	
	protected function createMgmtData() {
		return array();
	}

	public function setMgmtData($mgmtData) {
		$this->mgmtData = $this->validateMgmtData($mgmtData);
	}

	protected function validateMgmtData($mgmtData) {
		if ( ! is_array ($mgmtData) ) {
			$mgmtData = array($mgmtData);
		}
		$count = count($mgmtData);
		if ($count < 1) {
			throw new \Exception(sprintf('Supplied %s array has less than the required number (%d) of entries.', 'mgmtData', 1));
		}
		foreach ($mgmtData as $entry) {
			if (!($entry instanceof MgmtData)) {
				throw new \Exception(sprintf('Supplied %s value was not %s', 'mgmtData', 'MgmtData'));
			}
		}
	
		return $mgmtData;
	}

	public function addMgmtData($mgmtData) {
		$this->mgmtData[] = $mgmtData;
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
