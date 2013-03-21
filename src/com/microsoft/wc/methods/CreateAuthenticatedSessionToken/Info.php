<?php
namespace com\microsoft\wc\methods\CreateAuthenticatedSessionToken;



/**
 * @XmlNamespaces ({
 *	@XmlNamespace(url="urn:com.microsoft.wc.methods.CreateAuthenticatedSessionToken", prefix="")
 * })
 * @XmlEntity	(xml="info")
 */
class Info extends \com\microsoft\wc\request\Info {
	/**
	 * Creates an authenticated session token.
	 * The authenticated session is in the context of the provided credential and the application.
	 */

	/**
	 * List of manually overridden properties that should not be re-generated automatically
	 * @var array
	 */
	protected $_overrides = array();


	/**
	 * @XmlElement	(type="\com\microsoft\wc\methods\CreateAuthenticatedSessionToken\AuthTokenInfo", name="auth-info")
	 */
	protected $authInfo;

	public function __construct($authInfo = NULL) {
		$this->authInfo = ($authInfo===NULL) ? NULL : $this->validateAuthInfo($authInfo);
	}

	public function getAuthInfo($autoCreate = TRUE) {
		if ($this->authInfo===NULL && $autoCreate && ! isset($this->_overrides['authInfo']) ) {
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
