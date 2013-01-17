<?php
namespace com\microsoft\wc\methods\response\GetAuthorizedConnectRequests;



/**
 * @XmlNamespaces ({
 *	@XmlNamespace(url="urn:com.microsoft.wc.methods.response.GetAuthorizedConnectRequests", prefix="")
 * })
 * @XmlEntity	(xml="ConnectRequest")
 */
class ConnectRequest {
	/**
	 * Specifies the person id, record id, application id, and external id that make up the connect request.
	 */

	/**
	 * @XmlElement	(type="\com\microsoft\wc\types\Guid", name="person-id")
	 */
	protected $personId;

	/**
	 * @XmlElement	(type="\com\microsoft\wc\methods\response\GetAuthorizedConnectRequests\RecordId", name="record-id")
	 */
	protected $recordId;

	/**
	 * @XmlElement	(type="\com\microsoft\wc\types\Guid", name="app-id")
	 */
	protected $appId;

	/**
	 * @XmlText	(type="string", name="external-id")
	 */
	protected $externalId;

	public function __construct($personId = NULL, $recordId = NULL, $appId = NULL, $externalId = NULL) {
		$this->personId = ($personId===NULL) ? NULL : $this->validatePersonId($personId);
		$this->recordId = ($recordId===NULL) ? NULL : $this->validateRecordId($recordId);
		$this->appId = ($appId===NULL) ? NULL : $this->validateAppId($appId);
		$this->externalId = ($externalId===NULL) ? NULL : $this->validateExternalId($externalId);
	}

	public function getPersonId() {
		if ($this->personId===NULL) {
			$this->personId = $this->createPersonId();
		}
		return $this->personId;
	}
	
	protected function createPersonId() {
		return new \com\microsoft\wc\types\Guid();
	}

	public function setPersonId($personId) {
		$this->personId = $this->validatePersonId($personId);
	}

	protected function validatePersonId($personId) {
		if ( ! $personId instanceof \com\microsoft\wc\types\Guid ) {
			$personId = new \com\microsoft\wc\types\Guid ($personId);
		}
	
		return $personId;
	}

	public function getRecordId() {
		if ($this->recordId===NULL) {
			$this->recordId = $this->createRecordId();
		}
		return $this->recordId;
	}
	
	protected function createRecordId() {
		return new \com\microsoft\wc\methods\response\GetAuthorizedConnectRequests\RecordId();
	}

	public function setRecordId($recordId) {
		$this->recordId = $this->validateRecordId($recordId);
	}

	protected function validateRecordId($recordId) {
		if ( ! $recordId instanceof \com\microsoft\wc\methods\response\GetAuthorizedConnectRequests\RecordId ) {
			$recordId = new \com\microsoft\wc\methods\response\GetAuthorizedConnectRequests\RecordId ($recordId);
		}
	
		return $recordId;
	}

	public function getAppId() {
		if ($this->appId===NULL) {
			$this->appId = $this->createAppId();
		}
		return $this->appId;
	}
	
	protected function createAppId() {
		return new \com\microsoft\wc\types\Guid();
	}

	public function setAppId($appId) {
		$this->appId = $this->validateAppId($appId);
	}

	protected function validateAppId($appId) {
		if ( ! $appId instanceof \com\microsoft\wc\types\Guid ) {
			$appId = new \com\microsoft\wc\types\Guid ($appId);
		}
	
		return $appId;
	}

	public function getExternalId() {
		if ($this->externalId===NULL) {
			$this->externalId = $this->createExternalId();
		}
		return $this->externalId;
	}
	
	protected function createExternalId() {
		return '';
	}

	public function setExternalId($externalId) {
		$this->externalId = $this->validateExternalId($externalId);
	}

	protected function validateExternalId($externalId) {
		if (!is_string($externalId)) {
			throw new \Exception(sprintf('Supplied %s value was not %s', 'externalId', 'string'));
		}
	
		return $externalId;
	}
} // end class ConnectRequest
