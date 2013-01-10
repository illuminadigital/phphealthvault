<?php
namespace com\microsoft\wc\auth;

use com\microsoft\wc\types\String128nw;

/**
 * @XmlNamespaces ({
 *	@XmlNamespace(url="urn:com.microsoft.wc.auth", prefix="wc-auth")
 * })
 * @XmlEntity	(xml="SimpleEmergencyAccessCredential")
 */
class SimpleEmergencyAccessCredential {
	/**
	 * Represents a code to access a record for emergency purposes.
	 */

	/**
	 * @XmlElement	(type="\com\microsoft\wc\types\String128nw", name="access-code")
	 */
	protected $accessCode;

	public function __construct($accessCode = NULL) {
		$this->accessCode = ($accessCode===NULL) ? NULL : $this->validateAccessCode($accessCode);
	}

	public function getAccessCode() {
		if ($this->accessCode===NULL) {
			$this->accessCode = $this->createAccessCode();
		}
		return $this->accessCode;
	}
	
	protected function createAccessCode() {
		return new String128nw();
	}

	public function setAccessCode($accessCode) {
		$this->accessCode = $this->validateAccessCode($accessCode);
	}

	protected function validateAccessCode($accessCode) {
		if ( ! $accessCode instanceof String128nw ) {
			$accessCode = new String128nw ($accessCode);
		}
	
		return $accessCode;
	}
} // end class SimpleEmergencyAccessCredential
