<?php
namespace com\microsoft\wc\auth;

use com\microsoft\wc\auth\AuthSessionSubCredential;
use com\microsoft\wc\types\HMACAlgorithm;

/**
 * @XmlEntity	(xml="AuthSessionCredential")
 */
class AuthSessionCredential {
	/**
	 * A credential for authenticating a session with a sub-credential.
	 * This credential envelopes other credentials. None of the contained credentials themselves contain other credentials, avoiding recursion.
	 */

	/**
	 * @XmlElement	(type="\com\microsoft\wc\auth\AuthSessionSubCredential", name="sub-credential")
	 */
	protected $subCredential;

	/**
	 * @XmlElement	(type="\com\microsoft\wc\types\HMACAlgorithm", name="shared-secret")
	 */
	protected $sharedSecret;

	public function __construct($subCredential = NULL, $sharedSecret = NULL) {
		$this->subCredential = ($subCredential===NULL) ? NULL : $this->validateSubCredential($subCredential);
		$this->sharedSecret = ($sharedSecret===NULL) ? NULL : $this->validateSharedSecret($sharedSecret);
	}

	public function getSubCredential() {
		if ($this->subCredential===NULL) {
			$this->subCredential = $this->createSubCredential();
		}
		return $this->subCredential;
	}
	
	protected function createSubCredential() {
		return new AuthSessionSubCredential();
	}

	public function setSubCredential($subCredential) {
		$this->subCredential = $this->validateSubCredential($subCredential);
	}

	protected function validateSubCredential($subCredential) {
		if ( ! $subCredential instanceof AuthSessionSubCredential ) {
			$subCredential = new AuthSessionSubCredential ($subCredential);
		}
	
		return $subCredential;
	}

	public function getSharedSecret() {
		if ($this->sharedSecret===NULL) {
			$this->sharedSecret = $this->createSharedSecret();
		}
		return $this->sharedSecret;
	}
	
	protected function createSharedSecret() {
		return new HMACAlgorithm();
	}

	public function setSharedSecret($sharedSecret) {
		$this->sharedSecret = $this->validateSharedSecret($sharedSecret);
	}

	protected function validateSharedSecret($sharedSecret) {
		if ( ! $sharedSecret instanceof HMACAlgorithm ) {
			$sharedSecret = new HMACAlgorithm ($sharedSecret);
		}
	
		return $sharedSecret;
	}
} // end class AuthSessionCredential
