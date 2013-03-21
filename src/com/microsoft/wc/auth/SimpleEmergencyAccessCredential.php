<?php
namespace com\microsoft\wc\auth;



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
	 * List of manually overridden properties that should not be re-generated automatically
	 * @var array
	 */
	protected $_overrides = array();


	/**
	 * @XmlElement	(type="\com\microsoft\wc\types\String128nw", name="access-code")
	 */
	protected $accessCode;

	public function __construct($accessCode = NULL) {
		$this->accessCode = ($accessCode===NULL) ? NULL : $this->validateAccessCode($accessCode);
	}

	public function getAccessCode($autoCreate = TRUE) {
		if ($this->accessCode===NULL && $autoCreate && ! isset($this->_overrides['accessCode']) ) {
			$this->accessCode = $this->createAccessCode();
		}
		return $this->accessCode;
	}
	
	protected function createAccessCode() {
		return new \com\microsoft\wc\types\String128nw();
	}

	public function setAccessCode($accessCode) {
		$this->accessCode = $this->validateAccessCode($accessCode);
	}

	protected function validateAccessCode($accessCode) {
		if ( ! $accessCode instanceof \com\microsoft\wc\types\String128nw ) {
			$accessCode = new \com\microsoft\wc\types\String128nw ($accessCode);
		}
	
		return $accessCode;
	}
} // end class SimpleEmergencyAccessCredential
