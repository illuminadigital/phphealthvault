<?php
namespace com\microsoft\wc\methods\CreateAuthenticatedSessionToken;



/**
 * @XmlNamespaces ({
 *	@XmlNamespace(url="urn:com.microsoft.wc.methods.CreateAuthenticatedSessionToken", prefix="")
 * })
 * @XmlEntity	(xml="AuthTokenInfo")
 */
class AuthTokenInfo {
	/**
	 * Parameters for creating an authenticated session token.
	 * The caller must provide the application information as well as the user credential for which the session will be in the context of.
	 */

	/**
	 * List of manually overridden properties that should not be re-generated automatically
	 * @var array
	 */
	protected $_overrides = array();


	/**
	 * @XmlElement	(type="\com\microsoft\wc\types\AppInfo", name="app-id")
	 */
	protected $appId;

	/**
	 * @XmlElement	(type="\com\microsoft\wc\methods\CreateAuthenticatedSessionToken\Credential", name="credential")
	 */
	protected $credential;

	public function __construct($appId = NULL, $credential = NULL) {
		$this->appId = ($appId===NULL) ? NULL : $this->validateAppId($appId);
		$this->credential = ($credential===NULL) ? NULL : $this->validateCredential($credential);
	}

	public function getAppId($autoCreate = TRUE) {
		if ($this->appId===NULL && $autoCreate && ! isset($this->_overrides['appId']) ) {
			$this->appId = $this->createAppId();
		}
		return $this->appId;
	}
	
	protected function createAppId() {
		return new \com\microsoft\wc\types\AppInfo();
	}

	public function setAppId($appId) {
		$this->appId = $this->validateAppId($appId);
	}

	protected function validateAppId($appId) {
		if ( ! $appId instanceof \com\microsoft\wc\types\AppInfo ) {
			$appId = new \com\microsoft\wc\types\AppInfo ($appId);
		}
	
		return $appId;
	}

	public function getCredential($autoCreate = TRUE) {
		if ($this->credential===NULL && $autoCreate && ! isset($this->_overrides['credential']) ) {
			$this->credential = $this->createCredential();
		}
		return $this->credential;
	}
	
	protected function createCredential() {
		return new \com\microsoft\wc\methods\CreateAuthenticatedSessionToken\Credential();
	}

	public function setCredential($credential) {
		$this->credential = $this->validateCredential($credential);
	}

	protected function validateCredential($credential) {
		if ( ! $credential instanceof \com\microsoft\wc\methods\CreateAuthenticatedSessionToken\Credential ) {
			$credential = new \com\microsoft\wc\methods\CreateAuthenticatedSessionToken\Credential ($credential);
		}
	
		return $credential;
	}
} // end class AuthTokenInfo
