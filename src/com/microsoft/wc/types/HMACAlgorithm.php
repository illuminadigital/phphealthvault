<?php
namespace com\microsoft\wc\types;



/**
 * @XmlNamespaces ({
 *	@XmlNamespace(url="urn:com.microsoft.wc.types", prefix="wc-types")
 * })
 * @XmlEntity	(xml="HMACAlgorithm")
 */
class HMACAlgorithm {
	/**
	 * A description of an HMAC that is used to establish the authentication and integrity checks for requests to Microsoft HealthVault.
	 * This describes the shared secret that the is created on the client side.
	 */

	/**
	 * List of manually overridden properties that should not be re-generated automatically
	 * @var array
	 */
	protected $_overrides = array();


	/**
	 * @XmlElement	(type="\com\microsoft\wc\types\HMACAlgorithmData", name="hmac-alg")
	 */
	protected $hmacAlg;

	public function __construct($hmacAlg = NULL) {
		$this->hmacAlg = ($hmacAlg===NULL) ? NULL : $this->validateHmacAlg($hmacAlg);
	}

	public function getHmacAlg($autoCreate = TRUE) {
		if ($this->hmacAlg===NULL && $autoCreate && ! isset($this->_overrides['hmacAlg']) ) {
			$this->hmacAlg = $this->createHmacAlg();
		}
		return $this->hmacAlg;
	}
	
	protected function createHmacAlg() {
		return new \com\microsoft\wc\types\HMACAlgorithmData();
	}

	public function setHmacAlg($hmacAlg) {
		$this->hmacAlg = $this->validateHmacAlg($hmacAlg);
	}

	protected function validateHmacAlg($hmacAlg) {
		if ( ! $hmacAlg instanceof \com\microsoft\wc\types\HMACAlgorithmData ) {
			$hmacAlg = new \com\microsoft\wc\types\HMACAlgorithmData ($hmacAlg);
		}
	
		return $hmacAlg;
	}
} // end class HMACAlgorithm
