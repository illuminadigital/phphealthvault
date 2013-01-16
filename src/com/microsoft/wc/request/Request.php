<?php
namespace com\microsoft\wc\request;



/**
 * @XmlNamespaces ({
 *   @XmlNamespace(url="urn:com.microsoft.wc.request", prefix="wc-request")
 * })
 * @XmlEntity	(xml="wc-request:request")
 */
class Request {
	/**
	 */

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

	public function getAuth() {
		if ($this->auth===NULL) {
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
		if ( ! $auth instanceof \com\microsoft\wc\types\HMACFinalized  && ! is_null($auth) ) {
			$auth = new \com\microsoft\wc\types\HMACFinalized ($auth);
		}
	
		return $auth;
	}

	public function getHeader() {
		if ($this->header===NULL) {
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

	public function getInfo() {
		if ($this->info===NULL) {
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
