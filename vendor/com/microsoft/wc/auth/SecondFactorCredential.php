<?php
namespace com\microsoft\wc\auth;

use com\microsoft\wc\auth\SimplePhoneFactorCredential;

/**
 * @XmlEntity	(xml="SecondFactorCredential")
 */
class SecondFactorCredential {
	/**
	 * Credential used for two factor authentication.
	 */

	/**
	 * @XmlElement	(type="\com\microsoft\wc\auth\SimplePhoneFactorCredential", name="simple-phone-factor")
	 */
	protected $simplePhoneFactor;

	public function __construct($simplePhoneFactor = NULL) {
		$this->simplePhoneFactor = ($simplePhoneFactor===NULL) ? NULL : $this->validateSimplePhoneFactor($simplePhoneFactor);
	}

	public function getSimplePhoneFactor() {
		if ($this->simplePhoneFactor===NULL) {
			$this->simplePhoneFactor = $this->createSimplePhoneFactor();
		}
		return $this->simplePhoneFactor;
	}
	
	protected function createSimplePhoneFactor() {
		return new SimplePhoneFactorCredential();
	}

	public function setSimplePhoneFactor($simplePhoneFactor) {
		$this->simplePhoneFactor = $this->validateSimplePhoneFactor($simplePhoneFactor);
	}

	protected function validateSimplePhoneFactor($simplePhoneFactor) {
		if ( ! $simplePhoneFactor instanceof SimplePhoneFactorCredential ) {
			$simplePhoneFactor = new SimplePhoneFactorCredential ($simplePhoneFactor);
		}
	
		return $simplePhoneFactor;
	}
} // end class SecondFactorCredential
