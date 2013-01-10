<?php
namespace com\microsoft\wc\request;

use com\microsoft\wc\types\HMACFinalized;
use com\microsoft\wc\request\Header;
use com\microsoft\wc\request\Info;

/**
 * @XmlNamespaces ({
 *	@XmlNamespace(url="urn:com.microsoft.wc.request", prefix="wc-request")
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
		return new HMACFinalized();
	}

	public function setAuth($auth) {
		$this->auth = $this->validateAuth($auth);
	}

	protected function validateAuth($auth) {
		if ( ! $auth instanceof HMACFinalized ) {
			$auth = new HMACFinalized ($auth);
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
		return new Header();
	}

	public function setHeader($header) {
		$this->header = $this->validateHeader($header);
	}

	protected function validateHeader($header) {
		if ( ! $header instanceof Header ) {
			$header = new Header ($header);
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
		return new Info();
	}

	public function setInfo($info) {
		$this->info = $this->validateInfo($info);
	}

	protected function validateInfo($info) {
		if ( ! $info instanceof Info ) {
			$info = new Info ($info);
		}
	
		return $info;
	}
} // end class Request
