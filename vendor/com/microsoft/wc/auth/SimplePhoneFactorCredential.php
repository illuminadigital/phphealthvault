<?php
namespace com\microsoft\wc\auth;

use com\microsoft\wc\types\String64;
use com\microsoft\wc\types\String32;

/**
 * @XmlNamespaces ({
 *	@XmlNamespace(url="urn:com.microsoft.wc.auth", prefix="wc-auth")
 * })
 * @XmlEntity	(xml="SimplePhoneFactorCredential")
 */
class SimplePhoneFactorCredential {
	/**
	 * A phone factor credential.
	 * This credential type is used for two factor authentication.
	 */

	/**
	 * @XmlElement	(type="\com\microsoft\wc\types\String64", name="id")
	 */
	protected $id;

	/**
	 * @XmlElement	(type="\com\microsoft\wc\types\String32", name="phone-number")
	 */
	protected $phoneNumber;

	public function __construct($id = NULL, $phoneNumber = NULL) {
		$this->id = ($id===NULL) ? NULL : $this->validateId($id);
		$this->phoneNumber = ($phoneNumber===NULL) ? NULL : $this->validatePhoneNumber($phoneNumber);
	}

	public function getId() {
		if ($this->id===NULL) {
			$this->id = $this->createId();
		}
		return $this->id;
	}
	
	protected function createId() {
		return new String64();
	}

	public function setId($id) {
		$this->id = $this->validateId($id);
	}

	protected function validateId($id) {
		if ( ! $id instanceof String64 ) {
			$id = new String64 ($id);
		}
	
		return $id;
	}

	public function getPhoneNumber() {
		if ($this->phoneNumber===NULL) {
			$this->phoneNumber = $this->createPhoneNumber();
		}
		return $this->phoneNumber;
	}
	
	protected function createPhoneNumber() {
		return new String32();
	}

	public function setPhoneNumber($phoneNumber) {
		$this->phoneNumber = $this->validatePhoneNumber($phoneNumber);
	}

	protected function validatePhoneNumber($phoneNumber) {
		if ( ! $phoneNumber instanceof String32 ) {
			$phoneNumber = new String32 ($phoneNumber);
		}
	
		return $phoneNumber;
	}
} // end class SimplePhoneFactorCredential
