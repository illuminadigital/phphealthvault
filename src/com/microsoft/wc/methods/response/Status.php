<?php
namespace com\microsoft\wc\methods\response;



/**
 * @XmlNamespaces ({
 *	@XmlNamespace(url="urn:com.microsoft.wc.methods.response", prefix="")
 * })
 * @XmlEntity	(xml="Status")
 */
class Status {
	/**
	 * The status of the request
	 */

	/**
	 * @XmlText	(type="integer", name="code")
	 */
	protected $code;

	/**
	 * @XmlElement	(type="\com\microsoft\wc\methods\response\Error", name="error")
	 */
	protected $error;

	public function __construct($code = NULL, $error = NULL) {
		$this->code = ($code===NULL) ? NULL : $this->validateCode($code);
		$this->error = ($error===NULL) ? NULL : $this->validateError($error);
	}

	public function getCode() {
		if ($this->code===NULL) {
			$this->code = $this->createCode();
		}
		return $this->code;
	}
	
	protected function createCode() {
		return 0;
	}

	public function setCode($code) {
		$this->code = $this->validateCode($code);
	}

	protected function validateCode($code) {
		if (!is_integer($code)) {
			throw new \Exception(sprintf('Supplied %s value was not %s', 'code', 'integer'));
		}
	
		return $code;
	}

	public function getError() {
		if ($this->error===NULL) {
			$this->error = $this->createError();
		}
		return $this->error;
	}
	
	protected function createError() {
		return new \com\microsoft\wc\methods\response\Error();
	}

	public function setError($error) {
		$this->error = $this->validateError($error);
	}

	protected function validateError($error) {
		if ( ! $error instanceof \com\microsoft\wc\methods\response\Error  && ! is_null($error) ) {
			$error = new \com\microsoft\wc\methods\response\Error ($error);
		}
	
		return $error;
	}
} // end class Status
