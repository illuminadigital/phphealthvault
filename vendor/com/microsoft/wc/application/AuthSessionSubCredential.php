<?php
namespace com\microsoft\wc\application;

use com\microsoft\wc\application\SimplePassportCredential;

/**
 * @XmlEntity	(xml="AuthSessionSubCredential")
 */
class AuthSessionSubCredential {
	/**
	 * Defines the possible subcredentials that can be used with an AuthSessionCredential.
	 * This credential envelopes other credentials. None of the contained credentials themselves contain other credentials, avoiding recursion.
	 */

	/**
	 * @XmlElement	(type="\com\microsoft\wc\application\SimplePassportCredential", name="simple-passport")
	 */
	protected $simplePassport;

	public function __construct($simplePassport = NULL) {
		$this->simplePassport = ($simplePassport===NULL) ? NULL : $this->validateSimplePassport($simplePassport);
	}

	public function getSimplePassport() {
		if ($this->simplePassport===NULL) {
			$this->simplePassport = $this->createSimplePassport();
		}
		return $this->simplePassport;
	}
	
	protected function createSimplePassport() {
		return new SimplePassportCredential();
	}

	public function setSimplePassport($simplePassport) {
		$this->simplePassport = $this->validateSimplePassport($simplePassport);
	}

	protected function validateSimplePassport($simplePassport) {
		if ( ! $simplePassport instanceof SimplePassportCredential ) {
			$simplePassport = new SimplePassportCredential ($simplePassport);
		}
	
		return $simplePassport;
	}
} // end class AuthSessionSubCredential
