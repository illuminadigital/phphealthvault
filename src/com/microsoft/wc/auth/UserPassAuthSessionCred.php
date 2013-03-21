<?php
namespace com\microsoft\wc\auth;



/**
 * @XmlNamespaces ({
 *	@XmlNamespace(url="urn:com.microsoft.wc.auth", prefix="wc-auth")
 * })
 * @XmlEntity	(xml="UserPassAuthSessionCred")
 */
class UserPassAuthSessionCred {
	/**
	 * A credential which establishes an authenticated session using a username and password based credential.
	 * A username and password based credential in conjunction with a shared secret so that an authenticated session can be established with Microsoft HealthVault.
	 */

	/**
	 * List of manually overridden properties that should not be re-generated automatically
	 * @var array
	 */
	protected $_overrides = array();


	/**
	 * @XmlElement	(type="\com\microsoft\wc\types\String128", name="username")
	 */
	protected $username;

	/**
	 * @XmlElement	(type="\com\microsoft\wc\types\String1024", name="password")
	 */
	protected $password;

	/**
	 * @XmlElement	(type="\com\microsoft\wc\types\HMACAlgorithm", name="shared-secret")
	 */
	protected $sharedSecret;

	public function __construct($username = NULL, $password = NULL, $sharedSecret = NULL) {
		$this->username = ($username===NULL) ? NULL : $this->validateUsername($username);
		$this->password = ($password===NULL) ? NULL : $this->validatePassword($password);
		$this->sharedSecret = ($sharedSecret===NULL) ? NULL : $this->validateSharedSecret($sharedSecret);
	}

	public function getUsername($autoCreate = TRUE) {
		if ($this->username===NULL && $autoCreate && ! isset($this->_overrides['username']) ) {
			$this->username = $this->createUsername();
		}
		return $this->username;
	}
	
	protected function createUsername() {
		return new \com\microsoft\wc\types\String128();
	}

	public function setUsername($username) {
		$this->username = $this->validateUsername($username);
	}

	protected function validateUsername($username) {
		if ( ! $username instanceof \com\microsoft\wc\types\String128 ) {
			$username = new \com\microsoft\wc\types\String128 ($username);
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

	public function getSharedSecret($autoCreate = TRUE) {
		if ($this->sharedSecret===NULL && $autoCreate && ! isset($this->_overrides['sharedSecret']) ) {
			$this->sharedSecret = $this->createSharedSecret();
		}
		return $this->sharedSecret;
	}
	
	protected function createSharedSecret() {
		return new \com\microsoft\wc\types\HMACAlgorithm();
	}

	public function setSharedSecret($sharedSecret) {
		$this->sharedSecret = $this->validateSharedSecret($sharedSecret);
	}

	protected function validateSharedSecret($sharedSecret) {
		if ( ! $sharedSecret instanceof \com\microsoft\wc\types\HMACAlgorithm ) {
			$sharedSecret = new \com\microsoft\wc\types\HMACAlgorithm ($sharedSecret);
		}
	
		return $sharedSecret;
	}
} // end class UserPassAuthSessionCred
