<?php
namespace com\microsoft\wc\response;

if(0):

/**
 * @XmlNamespaces ({
 *	@XmlNamespace(url="urn:com.microsoft.wc.response", prefix="")
 * })
 * @XmlEntity	(xml="Status")
 */
class Status {
	/**
	 */

	/**
	 * List of manually overridden properties that should not be re-generated automatically
	 * @var array
	 */
	protected $_overrides = array();


	/**
	 * @XmlText	(type="integer", name="code")
	 */
	protected $code;

	/**
	 * @XmlElement	(type="\com\microsoft\wc\response\Error", name="error")
	 */
	protected $error;

	public function __construct($code = NULL, $error = NULL) {
		$this->code = ($code===NULL) ? NULL : $this->validateCode($code);
		$this->error = ($error===NULL) ? NULL : $this->validateError($error);
	}

	public function getCode($autoCreate = TRUE) {
		if ($this->code===NULL && $autoCreate && ! isset($this->_overrides['code']) ) {
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
		$isValid = FALSE;
		if ( is_integer($code) ) {
			$isValid = TRUE;
		}
		else if ( $code == ($castVar = (integer) $code) ) {
			$isValid = TRUE;
			$code = $castVar;
		}
		if ( ! $isValid ) {
			throw new \Exception(sprintf('Supplied %s value was not %s', 'code', 'integer'));
		}
	
		return $code;
	}

	public function getError($autoCreate = TRUE) {
		if ($this->error===NULL && $autoCreate && ! isset($this->_overrides['error']) ) {
			$this->error = $this->createError();
		}
		return $this->error;
	}
	
	protected function createError() {
		return new \com\microsoft\wc\response\Error();
	}

	public function setError($error) {
		$this->error = $this->validateError($error);
	}

	protected function validateError($error) {
		if ( $error === FALSE ) {
			$this->_overrides['error'] = TRUE;
			return NULL;
		}

		if ( ! $error instanceof \com\microsoft\wc\response\Error  && ! is_null($error) ) {
			$error = new \com\microsoft\wc\response\Error ($error);
		}

		unset ($this->_overrides['error']);
	
		return $error;
	}
} // end class Status

endif;