<?php
namespace com\microsoft\wc\auth;



/**
 * @XmlNamespaces ({
 *	@XmlNamespace(url="urn:com.microsoft.wc.auth", prefix="wc-auth")
 * })
 * @XmlEntity	(xml="IntegratedWindowsCredential")
 */
class IntegratedWindowsCredential {
	/**
	 * Represents the confirmed identification of a user who has been authenticated to integrated windows service.
	 * Authentication is done through any gating application which extracts the user's windows account security identifier and passes it to platform for verification against a HealthVault account.
	 */

	/**
	 * List of manually overridden properties that should not be re-generated automatically
	 * @var array
	 */
	protected $_overrides = array();


	/**
	 * @XmlElement	(type="\com\microsoft\wc\types\String255nw", name="sid")
	 */
	protected $sid;

	public function __construct($sid = NULL) {
		$this->sid = ($sid===NULL) ? NULL : $this->validateSid($sid);
	}

	public function getSid($autoCreate = TRUE) {
		if ($this->sid===NULL && $autoCreate && ! isset($this->_overrides['sid']) ) {
			$this->sid = $this->createSid();
		}
		return $this->sid;
	}
	
	protected function createSid() {
		return new \com\microsoft\wc\types\String255nw();
	}

	public function setSid($sid) {
		$this->sid = $this->validateSid($sid);
	}

	protected function validateSid($sid) {
		if ( ! $sid instanceof \com\microsoft\wc\types\String255nw ) {
			$sid = new \com\microsoft\wc\types\String255nw ($sid);
		}
	
		return $sid;
	}
} // end class IntegratedWindowsCredential
