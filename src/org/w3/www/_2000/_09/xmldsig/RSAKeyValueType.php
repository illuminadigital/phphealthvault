<?php
namespace org\w3\www\_2000\_09\xmldsig;



/**
 * @XmlEntity	(xml="RSAKeyValueType")
 */
class RSAKeyValueType {
	/**
	 */

	/**
	 * @XmlElement	(type="\org\w3\www\_2000\_09\xmldsig\CryptoBinary", name="Modulus")
	 */
	protected $modulus;

	/**
	 * @XmlElement	(type="\org\w3\www\_2000\_09\xmldsig\CryptoBinary", name="Exponent")
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
		return new \org\w3\www\_2000\_09\xmldsig\CryptoBinary();
	}

	public function setModulus($modulus) {
		$this->modulus = $this->validateModulus($modulus);
	}

	protected function validateModulus($modulus) {
		if ( ! $modulus instanceof \org\w3\www\_2000\_09\xmldsig\CryptoBinary ) {
			$modulus = new \org\w3\www\_2000\_09\xmldsig\CryptoBinary ($modulus);
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
		return new \org\w3\www\_2000\_09\xmldsig\CryptoBinary();
	}

	public function setExponent($exponent) {
		$this->exponent = $this->validateExponent($exponent);
	}

	protected function validateExponent($exponent) {
		if ( ! $exponent instanceof \org\w3\www\_2000\_09\xmldsig\CryptoBinary ) {
			$exponent = new \org\w3\www\_2000\_09\xmldsig\CryptoBinary ($exponent);
		}
	
		return $exponent;
	}
} // end class RSAKeyValueType
