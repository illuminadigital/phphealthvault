<?php
namespace com\microsoft\wc\methods\response\GetAuthorizedConnectRequests;



/**
 * @XmlNamespaces ({
 *	@XmlNamespace(url="urn:com.microsoft.wc.methods.response.GetAuthorizedConnectRequests", prefix="")
 * })
 * @XmlEntity	(xml="info")
 */
class Info extends \com\microsoft\wc\response\AnyMixed {
	/**
	 * Contains the list of ConnectRequests returned by GetAuthorizedConnectRequests.
	 */

	/**
	 * List of manually overridden properties that should not be re-generated automatically
	 * @var array
	 */
	protected $_overrides = array();


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

	public function getResumeKey($autoCreate = TRUE) {
		if ($this->resumeKey===NULL && $autoCreate && ! isset($this->_overrides['resumeKey']) ) {
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
		if ( ! is_string($resumeKey) && ! is_null($resumeKey) ) {
			throw new \Exception(sprintf('Supplied %s value was not %s', 'resumeKey', 'string'));
		}
	
		return $resumeKey;
	}

	public function getConnectRequest($autoCreate = TRUE) {
		if ($this->connectRequest===NULL && $autoCreate && ! isset($this->_overrides['connectRequest']) ) {
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
		if ( $connectRequest === FALSE ) {
			$this->_overrides['connectRequest'] = TRUE;
			return NULL;
		}

		if ( ! is_array ($connectRequest) && ! is_null($connectRequest) ) {
			$connectRequest = array($connectRequest);
		}

		unset ($this->_overrides['connectRequest']);
		$count = count($connectRequest);
		if ($count < 0) {
			throw new \Exception(sprintf('Supplied %s array has less than the required number (%d) of entries.', 'connectRequest', 0));
		}
		if ( ! empty($connectRequest) ) {
			foreach ($connectRequest as $entry) {
				if (!($entry instanceof \com\microsoft\wc\methods\response\GetAuthorizedConnectRequests\ConnectRequest )) {
					throw new \Exception(sprintf('Supplied %s value was not %s', 'connectRequest', 'ConnectRequest'));
				}
			}
		}
	
		return $connectRequest;
	}

	public function addConnectRequest($connectRequest) {
		$this->connectRequest[] = $connectRequest;
	}
} // end class Info
