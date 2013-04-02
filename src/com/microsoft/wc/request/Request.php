<?php
namespace com\microsoft\wc\request;



/**
 * @XmlNamespaces ({
 *	@XmlNamespace(url="urn:com.microsoft.wc.request", prefix="")
 * })
 * @XmlNamespaces ({
 *   @XmlNamespace(url="urn:com.microsoft.wc.request", prefix="wc-request")
 * })
 * @XmlNamespaces ({
 *   @XmlNamespace(url="urn:com.microsoft.wc.request", prefix="wc-request")
 * })
 * @XmlEntity	(xml="wc-request:wc-request:request")
 */
class Request {
	/**
	 */

	/**
	 * List of manually overridden properties that should not be re-generated automatically
	 * @var array
	 */
	protected $_overrides = array();


	/**
	 * @XmlElement	(type="\com\microsoft\wc\types\HMACFinalized", name="auth")
	 */
	protected $auth;

	/**
	 * @XmlElement	(type="\com\microsoft\wc\request\Header", name="header")
	 */
	protected $header;

	/**
	 * @XmlElement	(type="\com\microsoft\wc\request\Info", name="info")
	 */
	protected $info;

	public function __construct($auth = NULL, $header = NULL, $info = NULL) {
		$this->auth = ($auth===NULL) ? NULL : $this->validateAuth($auth);
		$this->header = ($header===NULL) ? NULL : $this->validateHeader($header);
		$this->info = ($info===NULL) ? NULL : $this->validateInfo($info);
	}

	public function getAuth($autoCreate = TRUE) {
		if ($this->auth===NULL && $autoCreate && ! isset($this->_overrides['auth']) ) {
			$this->auth = $this->createAuth();
		}
		return $this->auth;
	}
	
	protected function createAuth() {
		return new \com\microsoft\wc\types\HMACFinalized();
	}

	public function setAuth($auth) {
		$this->auth = $this->validateAuth($auth);
	}

	protected function validateAuth($auth) {
		if ( $auth === FALSE ) {
			$this->_overrides['auth'] = TRUE;
			return NULL;
		}

		if ( ! $auth instanceof \com\microsoft\wc\types\HMACFinalized  && ! is_null($auth) ) {
			$auth = new \com\microsoft\wc\types\HMACFinalized ($auth);
		}

		unset ($this->_overrides['auth']);
	
		return $auth;
	}

	public function getHeader($autoCreate = TRUE) {
		if ($this->header===NULL && $autoCreate && ! isset($this->_overrides['header']) ) {
			$this->header = $this->createHeader();
		}
		return $this->header;
	}
	
	protected function createHeader() {
		return new \com\microsoft\wc\request\Header();
	}

	public function setHeader($header) {
		$this->header = $this->validateHeader($header);
	}

	protected function validateHeader($header) {
		if ( ! $header instanceof \com\microsoft\wc\request\Header ) {
			$header = new \com\microsoft\wc\request\Header ($header);
		}
	
		return $header;
	}

	public function getInfo($autoCreate = TRUE) {
		if ($this->info===NULL && $autoCreate && ! isset($this->_overrides['info']) ) {
			$this->info = $this->createInfo();
		}
		return $this->info;
	}
	
	protected function createInfo() {
		return new \com\microsoft\wc\request\Info();
	}

	public function setInfo($info) {
		$this->info = $this->validateInfo($info);
	}

	protected function validateInfo($info) {
		if ( ! $info instanceof \com\microsoft\wc\request\Info ) {
			$info = new \com\microsoft\wc\request\Info ($info);
		}
	
		return $info;
	}
} // end class Request
