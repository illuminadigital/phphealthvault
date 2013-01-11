<?php
namespace com\microsoft\wc\record;

use com\microsoft\wc\types\String128;

/**
 * @XmlEntity	(xml="SimpleOpenIdCredential")
 */
class SimpleOpenIdCredential {
	/**
	 * Represents the confirmed claimed id of a user who has been authenticated to an Open Id Provider.
	 * Authentication is performed to an Open Id Provider through Shell which passes it to platform for verification against a HealthVault account.
	 */

	/**
	 * @XmlElement	(type="\com\microsoft\wc\types\String128", name="claimed-id")
	 */
	protected $claimedId;

	public function __construct($claimedId = NULL) {
		$this->claimedId = ($claimedId===NULL) ? NULL : $this->validateClaimedId($claimedId);
	}

	public function getClaimedId() {
		if ($this->claimedId===NULL) {
			$this->claimedId = $this->createClaimedId();
		}
		return $this->claimedId;
	}
	
	protected function createClaimedId() {
		return new String128();
	}

	public function setClaimedId($claimedId) {
		$this->claimedId = $this->validateClaimedId($claimedId);
	}

	protected function validateClaimedId($claimedId) {
		if ( ! $claimedId instanceof String128 ) {
			$claimedId = new String128 ($claimedId);
		}
	
		return $claimedId;
	}
} // end class SimpleOpenIdCredential
