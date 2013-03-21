<?php
namespace com\microsoft\wc\thing;



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
	 * List of manually overridden properties that should not be re-generated automatically
	 * @var array
	 */
	protected $_overrides = array();


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

	public function getAlgorithm($autoCreate = TRUE) {
		if ($this->algorithm===NULL && $autoCreate && ! isset($this->_overrides['algorithm']) ) {
			$this->algorithm = $this->createAlgorithm();
		}
		return $this->algorithm;
	}
	
	protected function createAlgorithm() {
		return new \com\microsoft\wc\types\Stringz255();
	}

	public function setAlgorithm($algorithm) {
		$this->algorithm = $this->validateAlgorithm($algorithm);
	}

	protected function validateAlgorithm($algorithm) {
		if ( ! $algorithm instanceof \com\microsoft\wc\types\Stringz255 ) {
			$algorithm = new \com\microsoft\wc\types\Stringz255 ($algorithm);
		}
	
		return $algorithm;
	}

	public function getParams($autoCreate = TRUE) {
		if ($this->params===NULL && $autoCreate && ! isset($this->_overrides['params']) ) {
			$this->params = $this->createParams();
		}
		return $this->params;
	}
	
	protected function createParams() {
		return new \com\microsoft\wc\types\BlobHashAlgorithmParameters();
	}

	public function setParams($params) {
		$this->params = $this->validateParams($params);
	}

	protected function validateParams($params) {
		if ( $params === FALSE ) {
			$this->_overrides['params'] = TRUE;
			return NULL;
		}

		if ( ! $params instanceof \com\microsoft\wc\types\BlobHashAlgorithmParameters  && ! is_null($params) ) {
			$params = new \com\microsoft\wc\types\BlobHashAlgorithmParameters ($params);
		}

		unset ($this->_overrides['params']);
	
		return $params;
	}

	public function getHash($autoCreate = TRUE) {
		if ($this->hash===NULL && $autoCreate && ! isset($this->_overrides['hash']) ) {
			$this->hash = $this->createHash();
		}
		return $this->hash;
	}
	
	protected function createHash() {
		return new \com\microsoft\wc\types\Stringnz512();
	}

	public function setHash($hash) {
		$this->hash = $this->validateHash($hash);
	}

	protected function validateHash($hash) {
		if ( ! $hash instanceof \com\microsoft\wc\types\Stringnz512 ) {
			$hash = new \com\microsoft\wc\types\Stringnz512 ($hash);
		}
	
		return $hash;
	}
} // end class BlobHashInfo
