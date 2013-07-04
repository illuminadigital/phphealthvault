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
	 * List of manually overridden properties that should not be re-generated automatically
	 * @var array
	 */
	protected $_overrides = array();


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

	public function getKeyName($autoCreate = TRUE) {
		if ($this->keyName===NULL && $autoCreate && ! isset($this->_overrides['keyName']) ) {
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
		$count = count($keyName);
		if ($count < 1) {
			throw new \Exception(sprintf('Supplied %s array has less than the required number (%d) of entries.', 'keyName', 1));
		}
		foreach ($keyName as $entry) {
			if (!is_KeyName($entry)) {
				throw new \Exception(sprintf('Supplied %s value was not %s', 'keyName', 'KeyName'));
			}
		}
	
		return $keyName;
	}

	public function addKeyName($keyName) {
		$this->keyName[] = $this->validateKeyNameType($keyName);
	}

	protected function validateKeyNameType($keyName) {
		if (!is_KeyName($keyName)) {
			throw new \Exception(sprintf('Supplied %s value was not %s', 'keyName', 'KeyName'));
		}
	
		return $keyName;
	}

	public function getKeyValue($autoCreate = TRUE) {
		if ($this->keyValue===NULL && $autoCreate && ! isset($this->_overrides['keyValue']) ) {
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
		$count = count($keyValue);
		if ($count < 1) {
			throw new \Exception(sprintf('Supplied %s array has less than the required number (%d) of entries.', 'keyValue', 1));
		}
		foreach ($keyValue as $entry) {
			if (!is_KeyValue($entry)) {
				throw new \Exception(sprintf('Supplied %s value was not %s', 'keyValue', 'KeyValue'));
			}
		}
	
		return $keyValue;
	}

	public function addKeyValue($keyValue) {
		$this->keyValue[] = $this->validateKeyValueType($keyValue);
	}

	protected function validateKeyValueType($keyValue) {
		if (!is_KeyValue($keyValue)) {
			throw new \Exception(sprintf('Supplied %s value was not %s', 'keyValue', 'KeyValue'));
		}
	
		return $keyValue;
	}

	public function getRetrievalMethod($autoCreate = TRUE) {
		if ($this->retrievalMethod===NULL && $autoCreate && ! isset($this->_overrides['retrievalMethod']) ) {
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
		$count = count($retrievalMethod);
		if ($count < 1) {
			throw new \Exception(sprintf('Supplied %s array has less than the required number (%d) of entries.', 'retrievalMethod', 1));
		}
		foreach ($retrievalMethod as $entry) {
			if (!is_RetrievalMethod($entry)) {
				throw new \Exception(sprintf('Supplied %s value was not %s', 'retrievalMethod', 'RetrievalMethod'));
			}
		}
	
		return $retrievalMethod;
	}

	public function addRetrievalMethod($retrievalMethod) {
		$this->retrievalMethod[] = $this->validateRetrievalMethodType($retrievalMethod);
	}

	protected function validateRetrievalMethodType($retrievalMethod) {
		if (!is_RetrievalMethod($retrievalMethod)) {
			throw new \Exception(sprintf('Supplied %s value was not %s', 'retrievalMethod', 'RetrievalMethod'));
		}
	
		return $retrievalMethod;
	}

	public function getX509Data($autoCreate = TRUE) {
		if ($this->x509Data===NULL && $autoCreate && ! isset($this->_overrides['x509Data']) ) {
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
		$count = count($x509Data);
		if ($count < 1) {
			throw new \Exception(sprintf('Supplied %s array has less than the required number (%d) of entries.', 'x509Data', 1));
		}
		foreach ($x509Data as $entry) {
			if (!is_X509Data($entry)) {
				throw new \Exception(sprintf('Supplied %s value was not %s', 'x509Data', 'X509Data'));
			}
		}
	
		return $x509Data;
	}

	public function addX509Data($x509Data) {
		$this->x509Data[] = $this->validateX509DataType($x509Data);
	}

	protected function validateX509DataType($x509Data) {
		if (!is_X509Data($x509Data)) {
			throw new \Exception(sprintf('Supplied %s value was not %s', 'x509Data', 'X509Data'));
		}
	
		return $x509Data;
	}

	public function getPGPData($autoCreate = TRUE) {
		if ($this->pGPData===NULL && $autoCreate && ! isset($this->_overrides['pGPData']) ) {
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
		$count = count($pGPData);
		if ($count < 1) {
			throw new \Exception(sprintf('Supplied %s array has less than the required number (%d) of entries.', 'pGPData', 1));
		}
		foreach ($pGPData as $entry) {
			if (!is_PGPData($entry)) {
				throw new \Exception(sprintf('Supplied %s value was not %s', 'pGPData', 'PGPData'));
			}
		}
	
		return $pGPData;
	}

	public function addPGPData($pGPData) {
		$this->pGPData[] = $this->validatePGPDataType($pGPData);
	}

	protected function validatePGPDataType($pGPData) {
		if (!is_PGPData($pGPData)) {
			throw new \Exception(sprintf('Supplied %s value was not %s', 'pGPData', 'PGPData'));
		}
	
		return $pGPData;
	}

	public function getSPKIData($autoCreate = TRUE) {
		if ($this->sPKIData===NULL && $autoCreate && ! isset($this->_overrides['sPKIData']) ) {
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
		$count = count($sPKIData);
		if ($count < 1) {
			throw new \Exception(sprintf('Supplied %s array has less than the required number (%d) of entries.', 'sPKIData', 1));
		}
		foreach ($sPKIData as $entry) {
			if (!is_SPKIData($entry)) {
				throw new \Exception(sprintf('Supplied %s value was not %s', 'sPKIData', 'SPKIData'));
			}
		}
	
		return $sPKIData;
	}

	public function addSPKIData($sPKIData) {
		$this->sPKIData[] = $this->validateSPKIDataType($sPKIData);
	}

	protected function validateSPKIDataType($sPKIData) {
		if (!is_SPKIData($sPKIData)) {
			throw new \Exception(sprintf('Supplied %s value was not %s', 'sPKIData', 'SPKIData'));
		}
	
		return $sPKIData;
	}

	public function getMgmtData($autoCreate = TRUE) {
		if ($this->mgmtData===NULL && $autoCreate && ! isset($this->_overrides['mgmtData']) ) {
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
		$count = count($mgmtData);
		if ($count < 1) {
			throw new \Exception(sprintf('Supplied %s array has less than the required number (%d) of entries.', 'mgmtData', 1));
		}
		foreach ($mgmtData as $entry) {
			if (!is_MgmtData($entry)) {
				throw new \Exception(sprintf('Supplied %s value was not %s', 'mgmtData', 'MgmtData'));
			}
		}
	
		return $mgmtData;
	}

	public function addMgmtData($mgmtData) {
		$this->mgmtData[] = $this->validateMgmtDataType($mgmtData);
	}

	protected function validateMgmtDataType($mgmtData) {
		if (!is_MgmtData($mgmtData)) {
			throw new \Exception(sprintf('Supplied %s value was not %s', 'mgmtData', 'MgmtData'));
		}
	
		return $mgmtData;
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

	public function getId($autoCreate = TRUE) {
		if ($this->id===NULL && $autoCreate && ! isset($this->_overrides['id']) ) {
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
