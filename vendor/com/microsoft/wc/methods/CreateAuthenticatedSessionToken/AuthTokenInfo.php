<?php
namespace com\microsoft\wc\methods\CreateAuthenticatedSessionToken;

use com\microsoft\wc\types\AppInfo;
use com\microsoft\wc\methods\CreateAuthenticatedSessionToken\Credential;

/**
 * @XmlEntity	(xml="AuthTokenInfo")
 */
class AuthTokenInfo {
	/**
	 * Parameters for creating an authenticated session token.
	 * The caller must provide the application information as well as the user credential for which the session will be in the context of.
	 */

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

	public function getAppId() {
		if ($this->appId===NULL) {
			$this->appId = $this->createAppId();
		}
		return $this->appId;
	}
	
	protected function createAppId() {
		return new AppInfo();
	}

	public function setAppId($appId) {
		$this->appId = $this->validateAppId($appId);
	}

	protected function validateAppId($appId) {
		if ( ! $appId instanceof AppInfo ) {
			$appId = new AppInfo ($appId);
		}
	
		return $appId;
	}

	public function getCredential() {
		if ($this->credential===NULL) {
			$this->credential = $this->createCredential();
		}
		return $this->credential;
	}
	
	protected function createCredential() {
		return new Credential();
	}

	public function setCredential($credential) {
		$this->credential = $this->validateCredential($credential);
	}

	protected function validateCredential($credential) {
		if ( ! $credential instanceof Credential ) {
			$credential = new Credential ($credential);
		}
	
		return $credential;
	}
} // end class AuthTokenInfo
