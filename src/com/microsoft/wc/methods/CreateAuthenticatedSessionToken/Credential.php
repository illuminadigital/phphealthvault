<?php
namespace com\microsoft\wc\methods\CreateAuthenticatedSessionToken;



/**
 * @XmlNamespaces ({
 *	@XmlNamespace(url="urn:com.microsoft.wc.methods.CreateAuthenticatedSessionToken", prefix="")
 * })
 * @XmlEntity	(xml="Credential")
 */
class Credential {
	/**
	 * Credential in which the authenticated session will be in the context of.
	 * The credential serves two purposes. First, it must be verified as valid. Once verified, the credential provides the authentication context for the session.
	 */

	/**
	 * List of manually overridden properties that should not be re-generated automatically
	 * @var array
	 */
	protected $_overrides = array();


	/**
	 * @XmlElement	(type="\com\microsoft\wc\types\AppServerCred", name="appserver")
	 */
	protected $appserver;

	/**
	 * @XmlElement	(type="\com\microsoft\wc\auth\UserPassAuthSessionCred", name="userpassauthsession")
	 */
	protected $userpassauthsession;

	public function __construct($appserver = NULL, $userpassauthsession = NULL) {
		$this->appserver = ($appserver===NULL) ? NULL : $this->validateAppserver($appserver);
		$this->userpassauthsession = ($userpassauthsession===NULL) ? NULL : $this->validateUserpassauthsession($userpassauthsession);
	}

	public function getAppserver($autoCreate = TRUE) {
		if ($this->appserver===NULL && $autoCreate && ! isset($this->_overrides['appserver']) ) {
			$this->appserver = $this->createAppserver();
		}
		return $this->appserver;
	}
	
	protected function createAppserver() {
		return new \com\microsoft\wc\types\AppServerCred();
	}

	public function setAppserver($appserver) {
		$this->appserver = $this->validateAppserver($appserver);
	}

	protected function validateAppserver($appserver) {
		if ( ! $appserver instanceof \com\microsoft\wc\types\AppServerCred ) {
			$appserver = new \com\microsoft\wc\types\AppServerCred ($appserver);
		}
	
		return $appserver;
	}

	public function getUserpassauthsession($autoCreate = TRUE) {
		if ($this->userpassauthsession===NULL && $autoCreate && ! isset($this->_overrides['userpassauthsession']) ) {
			$this->userpassauthsession = $this->createUserpassauthsession();
		}
		return $this->userpassauthsession;
	}
	
	protected function createUserpassauthsession() {
		return new \com\microsoft\wc\auth\UserPassAuthSessionCred();
	}

	public function setUserpassauthsession($userpassauthsession) {
		$this->userpassauthsession = $this->validateUserpassauthsession($userpassauthsession);
	}

	protected function validateUserpassauthsession($userpassauthsession) {
		if ( ! $userpassauthsession instanceof \com\microsoft\wc\auth\UserPassAuthSessionCred ) {
			$userpassauthsession = new \com\microsoft\wc\auth\UserPassAuthSessionCred ($userpassauthsession);
		}
	
		return $userpassauthsession;
	}
} // end class Credential
