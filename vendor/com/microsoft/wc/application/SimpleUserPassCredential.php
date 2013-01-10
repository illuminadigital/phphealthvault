<?php
namespace com\microsoft\wc\application;

use com\microsoft\wc\application\UserPassCred;

/**
 * @XmlNamespaces ({
 *	@XmlNamespace(url="urn:com.microsoft.wc.application", prefix="wc-app")
 * })
 * @XmlEntity	(xml="SimpleUserPassCredential")
 */
class SimpleUserPassCredential {
	/**
	 * A simple user credential that authenticates a user in Microsoft HealthVault.
	 * Each user has a unique username and associated password that identifies and authenticates a Microsoft HealthVault user.
	 */

	/**
	 * @XmlElement	(type="\com\microsoft\wc\application\UserPassCred", name="simple-userpass")
	 */
	protected $simpleUserpass;

	public function __construct($simpleUserpass = NULL) {
		$this->simpleUserpass = ($simpleUserpass===NULL) ? NULL : $this->validateSimpleUserpass($simpleUserpass);
	}

	public function getSimpleUserpass() {
		if ($this->simpleUserpass===NULL) {
			$this->simpleUserpass = $this->createSimpleUserpass();
		}
		return $this->simpleUserpass;
	}
	
	protected function createSimpleUserpass() {
		return new UserPassCred();
	}

	public function setSimpleUserpass($simpleUserpass) {
		$this->simpleUserpass = $this->validateSimpleUserpass($simpleUserpass);
	}

	protected function validateSimpleUserpass($simpleUserpass) {
		if ( ! $simpleUserpass instanceof UserPassCred ) {
			$simpleUserpass = new UserPassCred ($simpleUserpass);
		}
	
		return $simpleUserpass;
	}
} // end class SimpleUserPassCredential
