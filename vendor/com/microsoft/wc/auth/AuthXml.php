<?php
namespace com\microsoft\wc\auth;

use com\microsoft\wc\auth\Auth;

/**
 * @XmlNamespaces ({
 *	@XmlNamespace(url="urn:com.microsoft.wc.auth", prefix="wc-auth")
 * })
 * @XmlEntity	(xml="AuthXml")
 */
class AuthXml {
	/**
	 */

	/**
	 * @XmlElement	(type="\com\microsoft\wc\auth\Auth", name="auth")
	 */
	protected $auth;

	public function __construct($auth = NULL) {
		$this->auth = ($auth===NULL) ? NULL : $this->validateAuth($auth);
	}

	public function getAuth() {
		if ($this->auth===NULL) {
			$this->auth = $this->createAuth();
		}
		return $this->auth;
	}
	
	protected function createAuth() {
		return new Auth();
	}

	public function setAuth($auth) {
		$this->auth = $this->validateAuth($auth);
	}

	protected function validateAuth($auth) {
		if ( ! $auth instanceof Auth ) {
			$auth = new Auth ($auth);
		}
	
		return $auth;
	}
} // end class AuthXml
