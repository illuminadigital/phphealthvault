<?php
namespace com\microsoft\wc\methods\response\GetAuthorizedConnectRequests;



/**
 * @XmlNamespaces ({
 *	@XmlNamespace(url="urn:com.microsoft.wc.methods.response.GetAuthorizedConnectRequests", prefix="")
 * })
 * @XmlEntity	(xml="record-id")
 */
class RecordId {
	/**
	 * The unique identifier for the record.
	 */

	/**
	 * List of manually overridden properties that should not be re-generated automatically
	 * @var array
	 */
	protected $_overrides = array();


	/**
	 * @XmlAttribute	(type="string", name="app-specific-record-id")
	 */
	protected $appSpecificRecordId;

	public function __construct($appSpecificRecordId = NULL) {
		$this->appSpecificRecordId = ($appSpecificRecordId===NULL) ? NULL : $this->validateAppSpecificRecordId($appSpecificRecordId);
	}

	public function getAppSpecificRecordId($autoCreate = TRUE) {
		if ($this->appSpecificRecordId===NULL && $autoCreate && ! isset($this->_overrides['appSpecificRecordId']) ) {
			$this->appSpecificRecordId = $this->createAppSpecificRecordId();
		}
		return $this->appSpecificRecordId;
	}
	
	protected function createAppSpecificRecordId() {
		return '';
	}

	public function setAppSpecificRecordId($appSpecificRecordId) {
		$this->appSpecificRecordId = $this->validateAppSpecificRecordId($appSpecificRecordId);
	}

	protected function validateAppSpecificRecordId($appSpecificRecordId) {
		if (!is_string($appSpecificRecordId)) {
			throw new \Exception(sprintf('Supplied %s value was not %s', 'appSpecificRecordId', 'string'));
		}
	
		return $appSpecificRecordId;
	}
} // end class RecordId
