<?php
namespace com\microsoft\wc\application;

use com\microsoft\wc\application\HMACAlgorithmData;

/**
 * @XmlNamespaces ({
 *	@XmlNamespace(url="urn:com.microsoft.wc.application", prefix="wc-app")
 * })
 * @XmlEntity	(xml="HMACAlgorithm")
 */
class HMACAlgorithm {
	/**
	 * A description of an HMAC that is used to establish the authentication and integrity checks for requests to Microsoft HealthVault.
	 * This describes the shared secret that the is created on the client side.
	 */

	/**
	 * @XmlElement	(type="\com\microsoft\wc\application\HMACAlgorithmData", name="hmac-alg")
	 */
	protected $hmacAlg;

	public function __construct($hmacAlg = NULL) {
		$this->hmacAlg = ($hmacAlg===NULL) ? NULL : $this->validateHmacAlg($hmacAlg);
	}

	public function getHmacAlg() {
		if ($this->hmacAlg===NULL) {
			$this->hmacAlg = $this->createHmacAlg();
		}
		return $this->hmacAlg;
	}
	
	protected function createHmacAlg() {
		return new HMACAlgorithmData();
	}

	public function setHmacAlg($hmacAlg) {
		$this->hmacAlg = $this->validateHmacAlg($hmacAlg);
	}

	protected function validateHmacAlg($hmacAlg) {
		if ( ! $hmacAlg instanceof HMACAlgorithmData ) {
			$hmacAlg = new HMACAlgorithmData ($hmacAlg);
		}
	
		return $hmacAlg;
	}
} // end class HMACAlgorithm
