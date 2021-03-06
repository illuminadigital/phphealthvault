<?php
namespace com\microsoft\wc\types;



/**
 * @XmlNamespaces ({
 *	@XmlNamespace(url="urn:com.microsoft.wc.types", prefix="t")
 * })
 * @XmlEntity	(xml="HashFinalized")
 */
class HashFinalized {
	/**
	 * Digest from a hash operation that is used to provide data integrity verification for requests.
	 * This is the result of a hash operation, which is used to ensure the hashed data has not changed. Microsoft HealthVault will compute the corresponding hash over the same data and compare the resulting digests. If the digests are not equal, the request will fail.
	 */

	/**
	 * List of manually overridden properties that should not be re-generated automatically
	 * @var array
	 */
	protected $_overrides = array();


	/**
	 * @XmlElement	(type="\com\microsoft\wc\types\HashFinalizedData", name="hash-data")
	 */
	protected $hashData;

	public function __construct($hashData = NULL) {
		$this->hashData = ($hashData===NULL) ? NULL : $this->validateHashData($hashData);
	}

	public function getHashData($autoCreate = TRUE) {
		if ($this->hashData===NULL && $autoCreate && ! isset($this->_overrides['hashData']) ) {
			$this->hashData = $this->createHashData();
		}
		return $this->hashData;
	}
	
	protected function createHashData() {
		return new \com\microsoft\wc\types\HashFinalizedData();
	}

	public function setHashData($hashData) {
		$this->hashData = $this->validateHashData($hashData);
	}

	protected function validateHashData($hashData) {
		if ( ! $hashData instanceof \com\microsoft\wc\types\HashFinalizedData ) {
			$hashData = new \com\microsoft\wc\types\HashFinalizedData ($hashData);
		}
	
		return $hashData;
	}
} // end class HashFinalized
