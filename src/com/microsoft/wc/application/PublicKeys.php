<?php
namespace com\microsoft\wc\application;



/**
 * @XmlNamespaces ({
 *	@XmlNamespace(url="urn:com.microsoft.wc.application", prefix="wc-app")
 * })
 * @XmlEntity	(xml="PublicKeys")
 */
class PublicKeys {
	/**
	 */

	/**
	 * List of manually overridden properties that should not be re-generated automatically
	 * @var array
	 */
	protected $_overrides = array();


	/**
	 * @XmlElement	(type="\com\microsoft\wc\application\PublicKey", collection="true", name="public-key")
	 */
	protected $publicKey;

	public function __construct($publicKey = NULL) {
		$this->publicKey = ($publicKey===NULL) ? NULL : $this->validatePublicKey($publicKey);
	}

	public function getPublicKey($autoCreate = TRUE) {
		if ($this->publicKey===NULL && $autoCreate && ! isset($this->_overrides['publicKey']) ) {
			$this->publicKey = $this->createPublicKey();
		}
		return $this->publicKey;
	}
	
	protected function createPublicKey() {
		return array();
	}

	public function setPublicKey($publicKey) {
		$this->publicKey = $this->validatePublicKey($publicKey);
	}

	protected function validatePublicKey($publicKey) {
		if ( ! is_array ($publicKey) ) {
			$publicKey = array($publicKey);
		}
		$count = count($publicKey);
		if ($count < 1) {
			throw new \Exception(sprintf('Supplied %s array has less than the required number (%d) of entries.', 'publicKey', 1));
		}
		foreach ($publicKey as $entry) {
			if (!($entry instanceof PublicKey)) {
				throw new \Exception(sprintf('Supplied %s value was not %s', 'publicKey', 'PublicKey'));
			}
		}
	
		return $publicKey;
	}

	public function addPublicKey($publicKey) {
		$this->publicKey[] = $publicKey;
	}
} // end class PublicKeys
