<?php
namespace com\microsoft\wc\application;

use com\microsoft\wc\application\LoginName;
use com\microsoft\wc\application\String1024;

/**
 * @XmlNamespaces ({
 *	@XmlNamespace(url="urn:com.microsoft.wc.application", prefix="wc-app")
 * })
 * @XmlEntity	(xml="UserPassCred")
 */
class UserPassCred {
	/**
	 * A username and password based credential.
	 * This credential type authenticates a user with a username and password.
	 */

	/**
	 * @XmlElement	(type="\com\microsoft\wc\application\LoginName", name="username")
	 */
	protected $username;

	/**
	 * @XmlElement	(type="\com\microsoft\wc\application\String1024", name="password")
	 */
	protected $password;

	public function __construct($username = NULL, $password = NULL) {
		$this->username = ($username===NULL) ? NULL : $this->validateUsername($username);
		$this->password = ($password===NULL) ? NULL : $this->validatePassword($password);
	}

	public function getUsername() {
		if ($this->username===NULL) {
			$this->username = $this->createUsername();
		}
		return $this->username;
	}
	
	protected function createUsername() {
		return new LoginName();
	}

	public function setUsername($username) {
		$this->username = $this->validateUsername($username);
	}

	protected function validateUsername($username) {
		if ( ! $username instanceof LoginName ) {
			$username = new LoginName ($username);
		}
	
		return $username;
	}

	public function getPassword() {
		if ($this->password===NULL) {
			$this->password = $this->createPassword();
		}
		return $this->password;
	}
	
	protected function createPassword() {
		return new String1024();
	}

	public function setPassword($password) {
		$this->password = $this->validatePassword($password);
	}

	protected function validatePassword($password) {
		if ( ! $password instanceof String1024 ) {
			$password = new String1024 ($password);
		}
	
		return $password;
	}
} // end class UserPassCred
