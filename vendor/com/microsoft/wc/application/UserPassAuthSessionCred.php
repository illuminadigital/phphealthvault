<?php
namespace com\microsoft\wc\application;

use com\microsoft\wc\application\String128;
use com\microsoft\wc\application\String1024;
use com\microsoft\wc\application\HMACAlgorithm;

/**
 * @XmlEntity	(xml="UserPassAuthSessionCred")
 */
class UserPassAuthSessionCred {
	/**
	 * A credential which establishes an authenticated session using a username and password based credential.
	 * A username and password based credential in conjunction with a shared secret so that an authenticated session can be established with Microsoft HealthVault.
	 */

	/**
	 * @XmlElement	(type="\com\microsoft\wc\application\String128", name="username")
	 */
	protected $username;

	/**
	 * @XmlElement	(type="\com\microsoft\wc\application\String1024", name="password")
	 */
	protected $password;

	/**
	 * @XmlElement	(type="\com\microsoft\wc\application\HMACAlgorithm", name="shared-secret")
	 */
	protected $sharedSecret;

	public function __construct($username = NULL, $password = NULL, $sharedSecret = NULL) {
		$this->username = ($username===NULL) ? NULL : $this->validateUsername($username);
		$this->password = ($password===NULL) ? NULL : $this->validatePassword($password);
		$this->sharedSecret = ($sharedSecret===NULL) ? NULL : $this->validateSharedSecret($sharedSecret);
	}

	public function getUsername() {
		if ($this->username===NULL) {
			$this->username = $this->createUsername();
		}
		return $this->username;
	}
	
	protected function createUsername() {
		return new String128();
	}

	public function setUsername($username) {
		$this->username = $this->validateUsername($username);
	}

	protected function validateUsername($username) {
		if ( ! $username instanceof String128 ) {
			$username = new String128 ($username);
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

	public function getSharedSecret() {
		if ($this->sharedSecret===NULL) {
			$this->sharedSecret = $this->createSharedSecret();
		}
		return $this->sharedSecret;
	}
	
	protected function createSharedSecret() {
		return new HMACAlgorithm();
	}

	public function setSharedSecret($sharedSecret) {
		$this->sharedSecret = $this->validateSharedSecret($sharedSecret);
	}

	protected function validateSharedSecret($sharedSecret) {
		if ( ! $sharedSecret instanceof HMACAlgorithm ) {
			$sharedSecret = new HMACAlgorithm ($sharedSecret);
		}
	
		return $sharedSecret;
	}
} // end class UserPassAuthSessionCred
