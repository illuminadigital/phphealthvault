<?php
namespace com\microsoft\wc\auth;



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
	 * List of manually overridden properties that should not be re-generated automatically
	 * @var array
	 */
	protected $_overrides = array();


	/**
	 * @XmlElement	(type="\com\microsoft\wc\auth\Auth", name="auth")
	 */
	protected $auth;

	public function __construct($auth = NULL) {
		$this->auth = ($auth===NULL) ? NULL : $this->validateAuth($auth);
	}

	public function getAuth($autoCreate = TRUE) {
		if ($this->auth===NULL && $autoCreate && ! isset($this->_overrides['auth']) ) {
			$this->auth = $this->createAuth();
		}
		return $this->auth;
	}
	
	protected function createAuth() {
		return new \com\microsoft\wc\auth\Auth();
	}

	public function setAuth($auth) {
		$this->auth = $this->validateAuth($auth);
	}

	protected function validateAuth($auth) {
		if ( $auth === FALSE ) {
			$this->_overrides['auth'] = TRUE;
			return NULL;
		}

		if ( ! $auth instanceof \com\microsoft\wc\auth\Auth  && ! is_null($auth) ) {
			$auth = new \com\microsoft\wc\auth\Auth ($auth);
		}

		unset ($this->_overrides['auth']);
	
		return $auth;
	}
} // end class AuthXml
