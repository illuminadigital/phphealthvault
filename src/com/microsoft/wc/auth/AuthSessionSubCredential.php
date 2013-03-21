<?php
namespace com\microsoft\wc\auth;



/**
 * @XmlNamespaces ({
 *	@XmlNamespace(url="urn:com.microsoft.wc.auth", prefix="wc-auth")
 * })
 * @XmlEntity	(xml="AuthSessionSubCredential")
 */
class AuthSessionSubCredential {
	/**
	 * Defines the possible subcredentials that can be used with an AuthSessionCredential.
	 * This credential envelopes other credentials. None of the contained credentials themselves contain other credentials, avoiding recursion.
	 */

	/**
	 * List of manually overridden properties that should not be re-generated automatically
	 * @var array
	 */
	protected $_overrides = array();


	/**
	 * @XmlElement	(type="\com\microsoft\wc\auth\SimplePassportCredential", name="simple-passport")
	 */
	protected $simplePassport;

	public function __construct($simplePassport = NULL) {
		$this->simplePassport = ($simplePassport===NULL) ? NULL : $this->validateSimplePassport($simplePassport);
	}

	public function getSimplePassport($autoCreate = TRUE) {
		if ($this->simplePassport===NULL && $autoCreate && ! isset($this->_overrides['simplePassport']) ) {
			$this->simplePassport = $this->createSimplePassport();
		}
		return $this->simplePassport;
	}
	
	protected function createSimplePassport() {
		return new \com\microsoft\wc\auth\SimplePassportCredential();
	}

	public function setSimplePassport($simplePassport) {
		$this->simplePassport = $this->validateSimplePassport($simplePassport);
	}

	protected function validateSimplePassport($simplePassport) {
		if ( ! $simplePassport instanceof \com\microsoft\wc\auth\SimplePassportCredential ) {
			$simplePassport = new \com\microsoft\wc\auth\SimplePassportCredential ($simplePassport);
		}
	
		return $simplePassport;
	}
} // end class AuthSessionSubCredential
