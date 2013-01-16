<?php
namespace com\microsoft\wc\methods\CreateAuthenticatedSessionToken;



/**
 * @XmlEntity	(xml="info")
 */
class Info extends \com\microsoft\wc\request\Info {
	/**
	 * Creates an authenticated session token.
	 * The authenticated session is in the context of the provided credential and the application.
	 */

	/**
	 * @XmlElement	(type="\com\microsoft\wc\methods\CreateAuthenticatedSessionToken\AuthTokenInfo", name="auth-info")
	 */
	protected $authInfo;

	public function __construct($authInfo = NULL) {
		$this->authInfo = ($authInfo===NULL) ? NULL : $this->validateAuthInfo($authInfo);
	}

	public function getAuthInfo() {
		if ($this->authInfo===NULL) {
			$this->authInfo = $this->createAuthInfo();
		}
		return $this->authInfo;
	}
	
	protected function createAuthInfo() {
		return new \com\microsoft\wc\methods\CreateAuthenticatedSessionToken\AuthTokenInfo();
	}

	public function setAuthInfo($authInfo) {
		$this->authInfo = $this->validateAuthInfo($authInfo);
	}

	protected function validateAuthInfo($authInfo) {
		if ( ! $authInfo instanceof \com\microsoft\wc\methods\CreateAuthenticatedSessionToken\AuthTokenInfo ) {
			$authInfo = new \com\microsoft\wc\methods\CreateAuthenticatedSessionToken\AuthTokenInfo ($authInfo);
		}
	
		return $authInfo;
	}
} // end class Info
