<?php
namespace com\microsoft\wc\response;



/**
 * @XmlNamespaces ({
 *	@XmlNamespace(url="urn:com.microsoft.wc.response", prefix="")
 * })
 * @XmlEntity	(xml="Error")
 */
class Error {
	/**
	 */

	/**
	 * List of manually overridden properties that should not be re-generated automatically
	 * @var array
	 */
	protected $_overrides = array();


	/**
	 * @XmlText	(type="string", name="message")
	 */
	protected $message;

	/**
	 * @XmlElement	(type="\com\microsoft\wc\response\ErrorContext", name="context")
	 */
	protected $context;

	/**
	 * @XmlText	(type="string", name="error-info")
	 */
	protected $errorInfo;

	public function __construct($message = NULL, $context = NULL, $errorInfo = NULL) {
		$this->message = ($message===NULL) ? NULL : $this->validateMessage($message);
		$this->context = ($context===NULL) ? NULL : $this->validateContext($context);
		$this->errorInfo = ($errorInfo===NULL) ? NULL : $this->validateErrorInfo($errorInfo);
	}

	public function getMessage($autoCreate = TRUE) {
		if ($this->message===NULL && $autoCreate && ! isset($this->_overrides['message']) ) {
			$this->message = $this->createMessage();
		}
		return $this->message;
	}
	
	protected function createMessage() {
		return '';
	}

	public function setMessage($message) {
		$this->message = $this->validateMessage($message);
	}

	protected function validateMessage($message) {
		if (!is_string($message)) {
			throw new \Exception(sprintf('Supplied %s value was not %s', 'message', 'string'));
		}
	
		return $message;
	}

	public function getContext($autoCreate = TRUE) {
		if ($this->context===NULL && $autoCreate && ! isset($this->_overrides['context']) ) {
			$this->context = $this->createContext();
		}
		return $this->context;
	}
	
	protected function createContext() {
		return new \com\microsoft\wc\response\ErrorContext();
	}

	public function setContext($context) {
		$this->context = $this->validateContext($context);
	}

	protected function validateContext($context) {
		if ( $context === FALSE ) {
			$this->_overrides['context'] = TRUE;
			return NULL;
		}

		if ( ! $context instanceof \com\microsoft\wc\response\ErrorContext  && ! is_null($context) ) {
			$context = new \com\microsoft\wc\response\ErrorContext ($context);
		}

		unset ($this->_overrides['context']);
	
		return $context;
	}

	public function getErrorInfo($autoCreate = TRUE) {
		if ($this->errorInfo===NULL && $autoCreate && ! isset($this->_overrides['errorInfo']) ) {
			$this->errorInfo = $this->createErrorInfo();
		}
		return $this->errorInfo;
	}
	
	protected function createErrorInfo() {
		return '';
	}

	public function setErrorInfo($errorInfo) {
		$this->errorInfo = $this->validateErrorInfo($errorInfo);
	}

	protected function validateErrorInfo($errorInfo) {
		if ( ! is_string($errorInfo) && ! is_null($errorInfo) ) {
			throw new \Exception(sprintf('Supplied %s value was not %s', 'errorInfo', 'string'));
		}
	
		return $errorInfo;
	}
} // end class Error
