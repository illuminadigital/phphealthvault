<?php
namespace com\microsoft\wc\thing;

use com\microsoft\wc\thing\CryptoBinary;

/**
 * @XmlEntity	(xml="RSAKeyValueType")
 */
class RSAKeyValueType {
	/**
	 */

	/**
	 * @XmlElement	(type="\com\microsoft\wc\thing\CryptoBinary", name="Modulus")
	 */
	protected $modulus;

	/**
	 * @XmlElement	(type="\com\microsoft\wc\thing\CryptoBinary", name="Exponent")
	 */
	protected $exponent;

	public function __construct($modulus = NULL, $exponent = NULL) {
		$this->modulus = ($modulus===NULL) ? NULL : $this->validateModulus($modulus);
		$this->exponent = ($exponent===NULL) ? NULL : $this->validateExponent($exponent);
	}

	public function getModulus() {
		if ($this->modulus===NULL) {
			$this->modulus = $this->createModulus();
		}
		return $this->modulus;
	}
	
	protected function createModulus() {
		return new CryptoBinary();
	}

	public function setModulus($modulus) {
		$this->modulus = $this->validateModulus($modulus);
	}

	protected function validateModulus($modulus) {
		if ( ! $modulus instanceof CryptoBinary ) {
			$modulus = new CryptoBinary ($modulus);
		}
	
		return $modulus;
	}

	public function getExponent() {
		if ($this->exponent===NULL) {
			$this->exponent = $this->createExponent();
		}
		return $this->exponent;
	}
	
	protected function createExponent() {
		return new CryptoBinary();
	}

	public function setExponent($exponent) {
		$this->exponent = $this->validateExponent($exponent);
	}

	protected function validateExponent($exponent) {
		if ( ! $exponent instanceof CryptoBinary ) {
			$exponent = new CryptoBinary ($exponent);
		}
	
		return $exponent;
	}
} // end class RSAKeyValueType
