<?php
namespace com\microsoft\wc\types;

use com\microsoft\wc\types\HMACFinalizedData;

/**
 * @XmlNamespaces ({
 *	@XmlNamespace(url="urn:com.microsoft.wc.types", prefix="wc-types")
 * })
 * @XmlEntity	(xml="HMACFinalized")
 */
class HMACFinalized {
	/**
	 * Digest from a HMAC operation that is used to provide both authentication and integrity verification for requests.
	 * This is the result of an HMAC operation, as opposed to HMAC algorithm which specifies the properties of the operation. The HMAC key is the shared secret provided in the original application request to create an authenticated session token.
	 */

	/**
	 * @XmlElement	(type="\com\microsoft\wc\types\HMACFinalizedData", name="hmac-data")
	 */
	protected $hmacData;

	public function __construct($hmacData = NULL) {
		$this->hmacData = ($hmacData===NULL) ? NULL : $this->validateHmacData($hmacData);
	}

	public function getHmacData() {
		if ($this->hmacData===NULL) {
			$this->hmacData = $this->createHmacData();
		}
		return $this->hmacData;
	}
	
	protected function createHmacData() {
		return new HMACFinalizedData();
	}

	public function setHmacData($hmacData) {
		$this->hmacData = $this->validateHmacData($hmacData);
	}

	protected function validateHmacData($hmacData) {
		if ( ! $hmacData instanceof HMACFinalizedData ) {
			$hmacData = new HMACFinalizedData ($hmacData);
		}
	
		return $hmacData;
	}
} // end class HMACFinalized
