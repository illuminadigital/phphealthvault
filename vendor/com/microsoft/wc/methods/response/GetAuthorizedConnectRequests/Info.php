<?php
namespace com\microsoft\wc\methods\response\GetAuthorizedConnectRequests;

use com\microsoft\wc\methods\response\GetAuthorizedConnectRequests\ConnectRequest;

/**
 * @XmlNamespaces ({
 *	@XmlNamespace(url="urn:com.microsoft.wc.methods.response.GetAuthorizedConnectRequests", prefix="")
 * })
 * @XmlEntity	(xml="info")
 */
class Info {
	/**
	 * Contains the list of ConnectRequests returned by GetAuthorizedConnectRequests.
	 */

	/**
	 * @XmlText	(type="string", name="resume-key")
	 */
	protected $resumeKey;

	/**
	 * @XmlElement	(type="\com\microsoft\wc\methods\response\GetAuthorizedConnectRequests\ConnectRequest", collection="true", name="connect-request")
	 */
	protected $connectRequest;

	public function __construct($resumeKey = NULL, $connectRequest = NULL) {
		$this->resumeKey = ($resumeKey===NULL) ? NULL : $this->validateResumeKey($resumeKey);
		$this->connectRequest = ($connectRequest===NULL) ? NULL : $this->validateConnectRequest($connectRequest);
	}

	public function getResumeKey() {
		if ($this->resumeKey===NULL) {
			$this->resumeKey = $this->createResumeKey();
		}
		return $this->resumeKey;
	}
	
	protected function createResumeKey() {
		return NULL;
	}

	public function setResumeKey($resumeKey) {
		$this->resumeKey = $this->validateResumeKey($resumeKey);
	}

	protected function validateResumeKey($resumeKey) {
		if (!is_string($resumeKey)) {
			throw new \Exception(sprintf('Supplied %s value was not %s', 'resumeKey', 'string'));
		}
	
		return $resumeKey;
	}

	public function getConnectRequest() {
		if ($this->connectRequest===NULL) {
			$this->connectRequest = $this->createConnectRequest();
		}
		return $this->connectRequest;
	}
	
	protected function createConnectRequest() {
		return array();
	}

	public function setConnectRequest($connectRequest) {
		$this->connectRequest = $this->validateConnectRequest($connectRequest);
	}

	protected function validateConnectRequest($connectRequest) {
		if ( ! $connectRequest instanceof ConnectRequest ) {
			$connectRequest = new ConnectRequest ($connectRequest);
		}
		$count = count($connectRequest);
		if ($count < 0) {
			throw new \Exception(sprintf('Supplied %s array has less than the required number (%d) of entries.', 'connectRequest', 0));
		}
		foreach ($connectRequest as $entry) {
			if (!($entry instanceof ConnectRequest)) {
				throw new \Exception(sprintf('Supplied %s value was not %s', 'connectRequest', 'ConnectRequest'));
			}
		}
	
		return $connectRequest;
	}

	public function addConnectRequest($connectRequest) {
		$this->connectRequest[] = $connectRequest;
	}
} // end class Info
