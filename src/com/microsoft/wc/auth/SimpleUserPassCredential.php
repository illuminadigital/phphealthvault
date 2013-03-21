<?php
namespace com\microsoft\wc\auth;



/**
 * @XmlNamespaces ({
 *	@XmlNamespace(url="urn:com.microsoft.wc.auth", prefix="wc-auth")
 * })
 * @XmlEntity	(xml="SimpleUserPassCredential")
 */
class SimpleUserPassCredential {
	/**
	 * A simple user credential that authenticates a user in Microsoft HealthVault.
	 * Each user has a unique username and associated password that identifies and authenticates a Microsoft HealthVault user.
	 */

	/**
	 * List of manually overridden properties that should not be re-generated automatically
	 * @var array
	 */
	protected $_overrides = array();


	/**
	 * @XmlElement	(type="\com\microsoft\wc\auth\UserPassCred", name="simple-userpass")
	 */
	protected $simpleUserpass;

	public function __construct($simpleUserpass = NULL) {
		$this->simpleUserpass = ($simpleUserpass===NULL) ? NULL : $this->validateSimpleUserpass($simpleUserpass);
	}

	public function getSimpleUserpass($autoCreate = TRUE) {
		if ($this->simpleUserpass===NULL && $autoCreate && ! isset($this->_overrides['simpleUserpass']) ) {
			$this->simpleUserpass = $this->createSimpleUserpass();
		}
		return $this->simpleUserpass;
	}
	
	protected function createSimpleUserpass() {
		return new \com\microsoft\wc\auth\UserPassCred();
	}

	public function setSimpleUserpass($simpleUserpass) {
		$this->simpleUserpass = $this->validateSimpleUserpass($simpleUserpass);
	}

	protected function validateSimpleUserpass($simpleUserpass) {
		if ( ! $simpleUserpass instanceof \com\microsoft\wc\auth\UserPassCred ) {
			$simpleUserpass = new \com\microsoft\wc\auth\UserPassCred ($simpleUserpass);
		}
	
		return $simpleUserpass;
	}
} // end class SimpleUserPassCredential
