<?php
namespace org\w3\www\_2000\_09\xmldsig;



/**
 * @XmlNamespaces ({
 *	@XmlNamespace(url="http://www.w3.org/2000/09/xmldsig#", prefix="ds")
 * })
 * @XmlEntity	(xml="SignatureMethodType")
 */
class SignatureMethodType {
	/**
	 */

	/**
	 * @XmlElement	(type="\org\w3\www\_2000\_09\xmldsig\HMACOutputLengthType", name="HMACOutputLength")
	 */
	protected $hMACOutputLength;

	/**
	 * @XmlAttribute	(type="string", name="Algorithm")
	 */
	protected $algorithm;

	public function __construct($hMACOutputLength = NULL, $algorithm = NULL) {
		$this->hMACOutputLength = ($hMACOutputLength===NULL) ? NULL : $this->validateHMACOutputLength($hMACOutputLength);
		$this->algorithm = ($algorithm===NULL) ? NULL : $this->validateAlgorithm($algorithm);
	}

	public function getHMACOutputLength() {
		if ($this->hMACOutputLength===NULL) {
			$this->hMACOutputLength = $this->createHMACOutputLength();
		}
		return $this->hMACOutputLength;
	}
	
	protected function createHMACOutputLength() {
		return new \org\w3\www\_2000\_09\xmldsig\HMACOutputLengthType();
	}

	public function setHMACOutputLength($hMACOutputLength) {
		$this->hMACOutputLength = $this->validateHMACOutputLength($hMACOutputLength);
	}

	protected function validateHMACOutputLength($hMACOutputLength) {
		if ( ! $hMACOutputLength instanceof \org\w3\www\_2000\_09\xmldsig\HMACOutputLengthType  && ! is_null($hMACOutputLength) ) {
			$hMACOutputLength = new \org\w3\www\_2000\_09\xmldsig\HMACOutputLengthType ($hMACOutputLength);
		}
	
		return $hMACOutputLength;
	}

	public function getAlgorithm() {
		if ($this->algorithm===NULL) {
			$this->algorithm = $this->createAlgorithm();
		}
		return $this->algorithm;
	}
	
	protected function createAlgorithm() {
		return NULL;
	}

	public function setAlgorithm($algorithm) {
		$this->algorithm = $this->validateAlgorithm($algorithm);
	}

	protected function validateAlgorithm($algorithm) {
		if (!is_string($algorithm)) {
			throw new \Exception(sprintf('Supplied %s value was not %s', 'algorithm', 'string'));
		}
	
		return $algorithm;
	}
} // end class SignatureMethodType
