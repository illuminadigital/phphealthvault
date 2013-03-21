<?php
namespace com\microsoft\wc\auth;



/**
 * @XmlNamespaces ({
 *	@XmlNamespace(url="urn:com.microsoft.wc.auth", prefix="wc-auth")
 * })
 * @XmlEntity	(xml="SimpleFacebookCredential")
 */
class SimpleFacebookCredential {
	/**
	 * Represents the confirmed user id of a user who has been authenticated to the facebook service.
	 * Authentication to Facebook is done through the Shell which extracts the user's user-id from the ticket and passes it to the platform for verification against a HealthVault account.
	 */

	/**
	 * List of manually overridden properties that should not be re-generated automatically
	 * @var array
	 */
	protected $_overrides = array();


	/**
	 * @XmlElement	(type="\com\microsoft\wc\types\PositiveLong", name="user-id")
	 */
	protected $userId;

	public function __construct($userId = NULL) {
		$this->userId = ($userId===NULL) ? NULL : $this->validateUserId($userId);
	}

	public function getUserId($autoCreate = TRUE) {
		if ($this->userId===NULL && $autoCreate && ! isset($this->_overrides['userId']) ) {
			$this->userId = $this->createUserId();
		}
		return $this->userId;
	}
	
	protected function createUserId() {
		return new \com\microsoft\wc\types\PositiveLong();
	}

	public function setUserId($userId) {
		$this->userId = $this->validateUserId($userId);
	}

	protected function validateUserId($userId) {
		if ( ! $userId instanceof \com\microsoft\wc\types\PositiveLong ) {
			$userId = new \com\microsoft\wc\types\PositiveLong ($userId);
		}
	
		return $userId;
	}
} // end class SimpleFacebookCredential
