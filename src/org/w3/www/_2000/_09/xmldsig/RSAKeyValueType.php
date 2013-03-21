<?php
namespace org\w3\www\_2000\_09\xmldsig;



/**
 * @XmlNamespaces ({
 *	@XmlNamespace(url="http://www.w3.org/2000/09/xmldsig#", prefix="ds")
 * })
 * @XmlEntity	(xml="RSAKeyValueType")
 */
class RSAKeyValueType {
	/**
	 */

	/**
	 * List of manually overridden properties that should not be re-generated automatically
	 * @var array
	 */
	protected $_overrides = array();


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

	public function getModulus($autoCreate = TRUE) {
		if ($this->modulus===NULL && $autoCreate && ! isset($this->_overrides['modulus']) ) {
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

	public function getExponent($autoCreate = TRUE) {
		if ($this->exponent===NULL && $autoCreate && ! isset($this->_overrides['exponent']) ) {
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
