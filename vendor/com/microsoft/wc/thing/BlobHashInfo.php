<?php
namespace com\microsoft\wc\thing;

use com\microsoft\wc\types\Stringz255;
use com\microsoft\wc\types\BlobHashAlgorithmParameters;
use com\microsoft\wc\types\Stringnz512;

/**
 * @XmlNamespaces ({
 *	@XmlNamespace(url="urn:com.microsoft.wc.thing", prefix="wc-thing")
 * })
 * @XmlEntity	(xml="BlobHashInfo")
 */
class BlobHashInfo {
	/**
	 */

	/**
	 * @XmlElement	(type="\com\microsoft\wc\types\Stringz255", name="algorithm")
	 */
	protected $algorithm;

	/**
	 * @XmlElement	(type="\com\microsoft\wc\types\BlobHashAlgorithmParameters", name="params")
	 */
	protected $params;

	/**
	 * @XmlElement	(type="\com\microsoft\wc\types\Stringnz512", name="hash")
	 */
	protected $hash;

	public function __construct($algorithm = NULL, $params = NULL, $hash = NULL) {
		$this->algorithm = ($algorithm===NULL) ? NULL : $this->validateAlgorithm($algorithm);
		$this->params = ($params===NULL) ? NULL : $this->validateParams($params);
		$this->hash = ($hash===NULL) ? NULL : $this->validateHash($hash);
	}

	public function getAlgorithm() {
		if ($this->algorithm===NULL) {
			$this->algorithm = $this->createAlgorithm();
		}
		return $this->algorithm;
	}
	
	protected function createAlgorithm() {
		return new Stringz255();
	}

	public function setAlgorithm($algorithm) {
		$this->algorithm = $this->validateAlgorithm($algorithm);
	}

	protected function validateAlgorithm($algorithm) {
		if ( ! $algorithm instanceof Stringz255 ) {
			$algorithm = new Stringz255 ($algorithm);
		}
	
		return $algorithm;
	}

	public function getParams() {
		if ($this->params===NULL) {
			$this->params = $this->createParams();
		}
		return $this->params;
	}
	
	protected function createParams() {
		return new BlobHashAlgorithmParameters();
	}

	public function setParams($params) {
		$this->params = $this->validateParams($params);
	}

	protected function validateParams($params) {
		if ( ! $params instanceof BlobHashAlgorithmParameters ) {
			$params = new BlobHashAlgorithmParameters ($params);
		}
	
		return $params;
	}

	public function getHash() {
		if ($this->hash===NULL) {
			$this->hash = $this->createHash();
		}
		return $this->hash;
	}
	
	protected function createHash() {
		return new Stringnz512();
	}

	public function setHash($hash) {
		$this->hash = $this->validateHash($hash);
	}

	protected function validateHash($hash) {
		if ( ! $hash instanceof Stringnz512 ) {
			$hash = new Stringnz512 ($hash);
		}
	
		return $hash;
	}
} // end class BlobHashInfo
