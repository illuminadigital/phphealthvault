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
	 * @XmlAttribute	(type="string", name="app-specific-record-id")
	 */
	protected $appSpecificRecordId;

	public function __construct($appSpecificRecordId = NULL) {
		$this->appSpecificRecordId = ($appSpecificRecordId===NULL) ? NULL : $this->validateAppSpecificRecordId($appSpecificRecordId);
	}

	public function getAppSpecificRecordId() {
		if ($this->appSpecificRecordId===NULL) {
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
