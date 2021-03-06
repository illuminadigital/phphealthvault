<?php
namespace com\microsoft\wc\auth;



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
	 * List of manually overridden properties that should not be re-generated automatically
	 * @var array
	 */
	protected $_overrides = array();


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

	public function getId($autoCreate = TRUE) {
		if ($this->id===NULL && $autoCreate && ! isset($this->_overrides['id']) ) {
			$this->id = $this->createId();
		}
		return $this->id;
	}
	
	protected function createId() {
		return new \com\microsoft\wc\types\String64();
	}

	public function setId($id) {
		$this->id = $this->validateId($id);
	}

	protected function validateId($id) {
		if ( ! $id instanceof \com\microsoft\wc\types\String64 ) {
			$id = new \com\microsoft\wc\types\String64 ($id);
		}
	
		return $id;
	}

	public function getPhoneNumber($autoCreate = TRUE) {
		if ($this->phoneNumber===NULL && $autoCreate && ! isset($this->_overrides['phoneNumber']) ) {
			$this->phoneNumber = $this->createPhoneNumber();
		}
		return $this->phoneNumber;
	}
	
	protected function createPhoneNumber() {
		return new \com\microsoft\wc\types\String32();
	}

	public function setPhoneNumber($phoneNumber) {
		$this->phoneNumber = $this->validatePhoneNumber($phoneNumber);
	}

	protected function validatePhoneNumber($phoneNumber) {
		if ( ! $phoneNumber instanceof \com\microsoft\wc\types\String32 ) {
			$phoneNumber = new \com\microsoft\wc\types\String32 ($phoneNumber);
		}
	
		return $phoneNumber;
	}
} // end class SimplePhoneFactorCredential
