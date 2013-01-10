<?php
namespace com\microsoft\wc\thing;

use com\microsoft\wc\thing\HMACOutputLengthType;

/**
 * @XmlNamespaces ({
 *	@XmlNamespace(url="urn:com.microsoft.wc.thing", prefix="wc-thing")
 * })
 * @XmlEntity	(xml="SignatureMethodType")
 */
class SignatureMethodType {
	/**
	 */

	/**
	 * @XmlElement	(type="\com\microsoft\wc\thing\HMACOutputLengthType", name="HMACOutputLength")
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
		return new HMACOutputLengthType();
	}

	public function setHMACOutputLength($hMACOutputLength) {
		$this->hMACOutputLength = $this->validateHMACOutputLength($hMACOutputLength);
	}

	protected function validateHMACOutputLength($hMACOutputLength) {
		if ( ! $hMACOutputLength instanceof HMACOutputLengthType ) {
			$hMACOutputLength = new HMACOutputLengthType ($hMACOutputLength);
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
