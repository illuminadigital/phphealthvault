<?php
namespace com\microsoft\wc\auth;



/**
 * @XmlNamespaces ({
 *	@XmlNamespace(url="urn:com.microsoft.wc.auth", prefix="wc-auth")
 * })
 * @XmlEntity	(xml="AuthSessionCredential")
 */
class AuthSessionCredential {
	/**
	 * A credential for authenticating a session with a sub-credential.
	 * This credential envelopes other credentials. None of the contained credentials themselves contain other credentials, avoiding recursion.
	 */

	/**
	 * List of manually overridden properties that should not be re-generated automatically
	 * @var array
	 */
	protected $_overrides = array();


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

	public function getSubCredential($autoCreate = TRUE) {
		if ($this->subCredential===NULL && $autoCreate && ! isset($this->_overrides['subCredential']) ) {
			$this->subCredential = $this->createSubCredential();
		}
		return $this->subCredential;
	}
	
	protected function createSubCredential() {
		return new \com\microsoft\wc\auth\AuthSessionSubCredential();
	}

	public function setSubCredential($subCredential) {
		$this->subCredential = $this->validateSubCredential($subCredential);
	}

	protected function validateSubCredential($subCredential) {
		if ( ! $subCredential instanceof \com\microsoft\wc\auth\AuthSessionSubCredential ) {
			$subCredential = new \com\microsoft\wc\auth\AuthSessionSubCredential ($subCredential);
		}
	
		return $subCredential;
	}

	public function getSharedSecret($autoCreate = TRUE) {
		if ($this->sharedSecret===NULL && $autoCreate && ! isset($this->_overrides['sharedSecret']) ) {
			$this->sharedSecret = $this->createSharedSecret();
		}
		return $this->sharedSecret;
	}
	
	protected function createSharedSecret() {
		return new \com\microsoft\wc\types\HMACAlgorithm();
	}

	public function setSharedSecret($sharedSecret) {
		$this->sharedSecret = $this->validateSharedSecret($sharedSecret);
	}

	protected function validateSharedSecret($sharedSecret) {
		if ( ! $sharedSecret instanceof \com\microsoft\wc\types\HMACAlgorithm ) {
			$sharedSecret = new \com\microsoft\wc\types\HMACAlgorithm ($sharedSecret);
		}
	
		return $sharedSecret;
	}
} // end class AuthSessionCredential
