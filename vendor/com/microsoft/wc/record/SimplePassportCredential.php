<?php
namespace com\microsoft\wc\record;

use com\microsoft\wc\types\Puid;

/**
 * @XmlEntity	(xml="SimplePassportCredential")
 */
class SimplePassportCredential {
	/**
	 * Represents the confirmed identification of a user who has been authenticated to the Passport service.
	 * Authentication to Passport is done through the Shell which extracts the user's PUID from the ticket and passes it to the platform for verification against a HealthVault account.
	 */

	/**
	 * @XmlElement	(type="\com\microsoft\wc\types\Puid", name="puid")
	 */
	protected $puid;

	public function __construct($puid = NULL) {
		$this->puid = ($puid===NULL) ? NULL : $this->validatePuid($puid);
	}

	public function getPuid() {
		if ($this->puid===NULL) {
			$this->puid = $this->createPuid();
		}
		return $this->puid;
	}
	
	protected function createPuid() {
		return new Puid();
	}

	public function setPuid($puid) {
		$this->puid = $this->validatePuid($puid);
	}

	protected function validatePuid($puid) {
		if ( ! $puid instanceof Puid ) {
			$puid = new Puid ($puid);
		}
	
		return $puid;
	}
} // end class SimplePassportCredential
