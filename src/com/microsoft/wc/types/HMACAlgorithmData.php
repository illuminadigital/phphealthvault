<?php
namespace com\microsoft\wc\types;



/**
 * @XmlEntity	(xml="HMACAlgorithmData")
 */
class HMACAlgorithmData extends \com\microsoft\wc\types\String512 {
	/**
	 * The shared secret used in HMAC operations.
	 * The shared secret is used in HMAC operations to authenticate all requests which includes an authenticated session token. In order for a client to establish an authenticated session with Microsoft HealthVault, it must provide a shared secret. The client uses the secret as the secret key when HMAC'ing over the header section of the request. The resulting HMAC digest forms the content of the request auth section. The same algorithm specified in the initial token request must be used for all subsequent HMAC operations applied when using the same authenticated session token.
	 */

	/**
	 * @XmlAttribute	(type="string", name="algName")
	 */
	protected $algName;

	public function __construct($algName = NULL) {
		$this->algName = ($algName===NULL) ? NULL : $this->validateAlgName($algName);
	}

	public function getAlgName() {
		if ($this->algName===NULL) {
			$this->algName = $this->createAlgName();
		}
		return $this->algName;
	}
	
	protected function createAlgName() {
		return new \com\microsoft\wc\types\Stringnz();
	}

	public function setAlgName($algName) {
		$this->algName = $this->validateAlgName($algName);
	}

	protected function validateAlgName($algName) {
		if ( ! $algName instanceof \com\microsoft\wc\types\Stringnz ) {
			$algName = new \com\microsoft\wc\types\Stringnz ($algName);
		}
	
		return $algName;
	}
} // end class HMACAlgorithmData
