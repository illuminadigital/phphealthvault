<?php
namespace com\microsoft\wc\methods\response;



/**
 * @XmlNamespaces ({
 *	@XmlNamespace(url="urn:com.microsoft.wc.methods.response", prefix="")
 * })
 * @XmlEntity	(xml="Error")
 */
class Error {
	/**
	 * Details of the error
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

	public function __construct($message = NULL) {
		$this->message = ($message===NULL) ? NULL : $this->validateMessage($message);
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
} // end class Error
