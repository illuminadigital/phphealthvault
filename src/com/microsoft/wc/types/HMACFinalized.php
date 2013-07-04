<?php
namespace com\microsoft\wc\types;



/**
 * @XmlNamespaces ({
 *	@XmlNamespace(url="urn:com.microsoft.wc.types", prefix="t")
 * })
 * @XmlEntity	(xml="HMACFinalized")
 */
class HMACFinalized {
	/**
	 * Digest from a HMAC operation that is used to provide both authentication and integrity verification for requests.
	 * This is the result of an HMAC operation, as opposed to HMAC algorithm which specifies the properties of the operation. The HMAC key is the shared secret provided in the original application request to create an authenticated session token.
	 */

	/**
	 * List of manually overridden properties that should not be re-generated automatically
	 * @var array
	 */
	protected $_overrides = array();


	/**
	 * @XmlElement	(type="\com\microsoft\wc\types\HMACFinalizedData", name="hmac-data")
	 */
	protected $hmacData;

	public function __construct($hmacData = NULL) {
		$this->hmacData = ($hmacData===NULL) ? NULL : $this->validateHmacData($hmacData);
	}

	public function getHmacData($autoCreate = TRUE) {
		if ($this->hmacData===NULL && $autoCreate && ! isset($this->_overrides['hmacData']) ) {
			$this->hmacData = $this->createHmacData();
		}
		return $this->hmacData;
	}
	
	protected function createHmacData() {
		return new \com\microsoft\wc\types\HMACFinalizedData();
	}

	public function setHmacData($hmacData) {
		$this->hmacData = $this->validateHmacData($hmacData);
	}

	protected function validateHmacData($hmacData) {
		if ( ! $hmacData instanceof \com\microsoft\wc\types\HMACFinalizedData ) {
			$hmacData = new \com\microsoft\wc\types\HMACFinalizedData ($hmacData);
		}
	
		return $hmacData;
	}
} // end class HMACFinalized
