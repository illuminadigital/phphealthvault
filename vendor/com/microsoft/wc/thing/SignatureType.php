<?php
namespace com\microsoft\wc\thing;

use com\microsoft\wc\thing\SignedInfo;
use com\microsoft\wc\thing\SignatureValue;
use com\microsoft\wc\thing\KeyInfo;
use com\microsoft\wc\thing\Object;

/**
 * @XmlEntity	(xml="SignatureType")
 */
class SignatureType {
	/**
	 */

	/**
	 * @XmlElement	(type="\org\w3\www\_2000\_09\xmldsig#\SignedInfo", name="SignedInfo")
	 */
	protected $signedInfo;

	/**
	 * @XmlElement	(type="\org\w3\www\_2000\_09\xmldsig#\SignatureValue", name="SignatureValue")
	 */
	protected $signatureValue;

	/**
	 * @XmlElement	(type="\org\w3\www\_2000\_09\xmldsig#\KeyInfo", name="KeyInfo")
	 */
	protected $keyInfo;

	/**
	 * @XmlElement	(type="\org\w3\www\_2000\_09\xmldsig#\Object", collection="true", name="Object")
	 */
	protected $object;

	/**
	 * @XmlAttribute	(type="string", name="Id")
	 */
	protected $id;

	public function __construct($signedInfo = NULL, $signatureValue = NULL, $keyInfo = NULL, $object = NULL, $id = NULL) {
		$this->signedInfo = ($signedInfo===NULL) ? NULL : $this->validateSignedInfo($signedInfo);
		$this->signatureValue = ($signatureValue===NULL) ? NULL : $this->validateSignatureValue($signatureValue);
		$this->keyInfo = ($keyInfo===NULL) ? NULL : $this->validateKeyInfo($keyInfo);
		$this->object = ($object===NULL) ? NULL : $this->validateObject($object);
		$this->id = ($id===NULL) ? NULL : $this->validateId($id);
	}

	public function getSignedInfo() {
		if ($this->signedInfo===NULL) {
			$this->signedInfo = $this->createSignedInfo();
		}
		return $this->signedInfo;
	}
	
	protected function createSignedInfo() {
		return new SignedInfo();
	}

	public function setSignedInfo($signedInfo) {
		$this->signedInfo = $this->validateSignedInfo($signedInfo);
	}

	protected function validateSignedInfo($signedInfo) {
		if ( ! $signedInfo instanceof SignedInfo ) {
			$signedInfo = new SignedInfo ($signedInfo);
		}
	
		return $signedInfo;
	}

	public function getSignatureValue() {
		if ($this->signatureValue===NULL) {
			$this->signatureValue = $this->createSignatureValue();
		}
		return $this->signatureValue;
	}
	
	protected function createSignatureValue() {
		return new SignatureValue();
	}

	public function setSignatureValue($signatureValue) {
		$this->signatureValue = $this->validateSignatureValue($signatureValue);
	}

	protected function validateSignatureValue($signatureValue) {
		if ( ! $signatureValue instanceof SignatureValue ) {
			$signatureValue = new SignatureValue ($signatureValue);
		}
	
		return $signatureValue;
	}

	public function getKeyInfo() {
		if ($this->keyInfo===NULL) {
			$this->keyInfo = $this->createKeyInfo();
		}
		return $this->keyInfo;
	}
	
	protected function createKeyInfo() {
		return new KeyInfo();
	}

	public function setKeyInfo($keyInfo) {
		$this->keyInfo = $this->validateKeyInfo($keyInfo);
	}

	protected function validateKeyInfo($keyInfo) {
		if ( ! $keyInfo instanceof KeyInfo  && ! is_null($keyInfo) ) {
			$keyInfo = new KeyInfo ($keyInfo);
		}
	
		return $keyInfo;
	}

	public function getObject() {
		if ($this->object===NULL) {
			$this->object = $this->createObject();
		}
		return $this->object;
	}
	
	protected function createObject() {
		return array();
	}

	public function setObject($object) {
		$this->object = $this->validateObject($object);
	}

	protected function validateObject($object) {
		if ( ! $object instanceof Object  && ! is_null($object) ) {
			$object = new Object ($object);
		}
		$count = count($object);
		if ($count < 0) {
			throw new \Exception(sprintf('Supplied %s array has less than the required number (%d) of entries.', 'object', 0));
		}
		foreach ($object as $entry) {
			if (!($entry instanceof Object)) {
				throw new \Exception(sprintf('Supplied %s value was not %s', 'object', 'Object'));
			}
		}
	
		return $object;
	}

	public function addObject($object) {
		$this->object[] = $object;
	}

	public function getId() {
		if ($this->id===NULL) {
			$this->id = $this->createId();
		}
		return $this->id;
	}
	
	protected function createId() {
		return NULL;
	}

	public function setId($id) {
		$this->id = $this->validateId($id);
	}

	protected function validateId($id) {
		if ( ! is_string($id) && ! is_null($id) ) {
			throw new \Exception(sprintf('Supplied %s value was not %s', 'id', 'string'));
		}
	
		return $id;
	}
} // end class SignatureType
