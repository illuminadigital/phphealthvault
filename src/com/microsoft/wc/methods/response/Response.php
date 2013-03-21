<?php
namespace com\microsoft\wc\methods\response;



/**
 * @XmlNamespaces ({
 *	@XmlNamespace(url="urn:com.microsoft.wc.methods.response", prefix="")
 * })
 * @XmlEntity	(xml="response")
 */
class Response {
	/**
	 * The standard response wrapper from HealthVault
	 */

	/**
	 * List of manually overridden properties that should not be re-generated automatically
	 * @var array
	 */
	protected $_overrides = array();


	/**
	 * @XmlElement	(type="\com\microsoft\wc\methods\response\Status", name="status")
	 */
	protected $status;

	/**
	 * @XmlElement	(type="\com\microsoft\wc\methods\response\Info", name="info")
	 */
	protected $info;

	public function __construct($status = NULL, $info = NULL) {
		$this->status = ($status===NULL) ? NULL : $this->validateStatus($status);
		$this->info = ($info===NULL) ? NULL : $this->validateInfo($info);
	}

	public function getStatus($autoCreate = TRUE) {
		if ($this->status===NULL && $autoCreate && ! isset($this->_overrides['status']) ) {
			$this->status = $this->createStatus();
		}
		return $this->status;
	}
	
	protected function createStatus() {
		return new \com\microsoft\wc\methods\response\Status();
	}

	public function setStatus($status) {
		$this->status = $this->validateStatus($status);
	}

	protected function validateStatus($status) {
		if ( ! $status instanceof \com\microsoft\wc\methods\response\Status ) {
			$status = new \com\microsoft\wc\methods\response\Status ($status);
		}
	
		return $status;
	}

	public function getInfo($autoCreate = TRUE) {
		if ($this->info===NULL && $autoCreate && ! isset($this->_overrides['info']) ) {
			$this->info = $this->createInfo();
		}
		return $this->info;
	}
	
	protected function createInfo() {
		return new \com\microsoft\wc\methods\response\Info();
	}

	public function setInfo($info) {
		$this->info = $this->validateInfo($info);
	}

	protected function validateInfo($info) {
		if ( ! $info instanceof \com\microsoft\wc\methods\response\Info ) {
			$info = new \com\microsoft\wc\methods\response\Info ($info);
		}
	
		return $info;
	}
} // end class Response
