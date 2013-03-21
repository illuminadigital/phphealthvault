<?php
namespace com\microsoft\wc\auth;



/**
 * @XmlNamespaces ({
 *	@XmlNamespace(url="urn:com.microsoft.wc.auth", prefix="wc-auth")
 * })
 * @XmlEntity	(xml="UserPassCred")
 */
class UserPassCred {
	/**
	 * A username and password based credential.
	 * This credential type authenticates a user with a username and password.
	 */

	/**
	 * List of manually overridden properties that should not be re-generated automatically
	 * @var array
	 */
	protected $_overrides = array();


	/**
	 * @XmlElement	(type="\com\microsoft\wc\types\LoginName", name="username")
	 */
	protected $username;

	/**
	 * @XmlElement	(type="\com\microsoft\wc\types\String1024", name="password")
	 */
	protected $password;

	public function __construct($username = NULL, $password = NULL) {
		$this->username = ($username===NULL) ? NULL : $this->validateUsername($username);
		$this->password = ($password===NULL) ? NULL : $this->validatePassword($password);
	}

	public function getUsername($autoCreate = TRUE) {
		if ($this->username===NULL && $autoCreate && ! isset($this->_overrides['username']) ) {
			$this->username = $this->createUsername();
		}
		return $this->username;
	}
	
	protected function createUsername() {
		return new \com\microsoft\wc\types\LoginName();
	}

	public function setUsername($username) {
		$this->username = $this->validateUsername($username);
	}

	protected function validateUsername($username) {
		if ( ! $username instanceof \com\microsoft\wc\types\LoginName ) {
			$username = new \com\microsoft\wc\types\LoginName ($username);
		}
	
		return $username;
	}

	public function getPassword($autoCreate = TRUE) {
		if ($this->password===NULL && $autoCreate && ! isset($this->_overrides['password']) ) {
			$this->password = $this->createPassword();
		}
		return $this->password;
	}
	
	protected function createPassword() {
		return new \com\microsoft\wc\types\String1024();
	}

	public function setPassword($password) {
		$this->password = $this->validatePassword($password);
	}

	protected function validatePassword($password) {
		if ( ! $password instanceof \com\microsoft\wc\types\String1024 ) {
			$password = new \com\microsoft\wc\types\String1024 ($password);
		}
	
		return $password;
	}
} // end class UserPassCred
