<?php
namespace com\microsoft\wc\application;

use com\microsoft\wc\application\PublicKey;

/**
 * @XmlEntity	(xml="PublicKeys")
 */
class PublicKeys {
	/**
	 */

	/**
	 * @XmlElement	(type="\com\microsoft\wc\application\PublicKey", collection="true", name="public-key")
	 */
	protected $publicKey;

	public function __construct($publicKey = NULL) {
		$this->publicKey = ($publicKey===NULL) ? NULL : $this->validatePublicKey($publicKey);
	}

	public function getPublicKey() {
		if ($this->publicKey===NULL) {
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
		if ( ! $publicKey instanceof PublicKey ) {
			$publicKey = new PublicKey ($publicKey);
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
