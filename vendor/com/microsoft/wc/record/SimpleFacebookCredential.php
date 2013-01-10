<?php
namespace com\microsoft\wc\record;

use com\microsoft\wc\types\PositiveLong;

/**
 * @XmlEntity	(xml="SimpleFacebookCredential")
 */
class SimpleFacebookCredential {
	/**
	 * Represents the confirmed user id of a user who has been authenticated to the facebook service.
	 * Authentication to Facebook is done through the Shell which extracts the user's user-id from the ticket and passes it to the platform for verification against a HealthVault account.
	 */

	/**
	 * @XmlElement	(type="\com\microsoft\wc\types\PositiveLong", name="user-id")
	 */
	protected $userId;

	public function __construct($userId = NULL) {
		$this->userId = ($userId===NULL) ? NULL : $this->validateUserId($userId);
	}

	public function getUserId() {
		if ($this->userId===NULL) {
			$this->userId = $this->createUserId();
		}
		return $this->userId;
	}
	
	protected function createUserId() {
		return new PositiveLong();
	}

	public function setUserId($userId) {
		$this->userId = $this->validateUserId($userId);
	}

	protected function validateUserId($userId) {
		if ( ! $userId instanceof PositiveLong ) {
			$userId = new PositiveLong ($userId);
		}
	
		return $userId;
	}
} // end class SimpleFacebookCredential
