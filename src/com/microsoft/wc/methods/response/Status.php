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

	public function __construct($code = NULL) {
		$this->code = ($code===NULL) ? NULL : $this->validateCode($code);
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
} // end class Status
