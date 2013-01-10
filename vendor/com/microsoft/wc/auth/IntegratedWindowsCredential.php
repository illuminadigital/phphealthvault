<?php
namespace com\microsoft\wc\auth;

use com\microsoft\wc\types\String255nw;

/**
 * @XmlEntity	(xml="IntegratedWindowsCredential")
 */
class IntegratedWindowsCredential {
	/**
	 * Represents the confirmed identification of a user who has been authenticated to integrated windows service.
	 * Authentication is done through any gating application which extracts the user's windows account security identifier and passes it to platform for verification against a HealthVault account.
	 */

	/**
	 * @XmlElement	(type="\com\microsoft\wc\types\String255nw", name="sid")
	 */
	protected $sid;

	public function __construct($sid = NULL) {
		$this->sid = ($sid===NULL) ? NULL : $this->validateSid($sid);
	}

	public function getSid() {
		if ($this->sid===NULL) {
			$this->sid = $this->createSid();
		}
		return $this->sid;
	}
	
	protected function createSid() {
		return new String255nw();
	}

	public function setSid($sid) {
		$this->sid = $this->validateSid($sid);
	}

	protected function validateSid($sid) {
		if ( ! $sid instanceof String255nw ) {
			$sid = new String255nw ($sid);
		}
	
		return $sid;
	}
} // end class IntegratedWindowsCredential
