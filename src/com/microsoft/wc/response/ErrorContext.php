<?php
namespace com\microsoft\wc\response;

if (0):

/**
 * @XmlNamespaces ({
 *	@XmlNamespace(url="urn:com.microsoft.wc.response", prefix="")
 * })
 * @XmlEntity	(xml="ErrorContext")
 */
class ErrorContext {
	/**
	 */

	/**
	 * List of manually overridden properties that should not be re-generated automatically
	 * @var array
	 */
	protected $_overrides = array();


	/**
	 * @XmlText	(type="string", name="server-name")
	 */
	protected $serverName;

	/**
	 * @XmlText	(type="string", collection="true", name="server-ip")
	 */
	protected $serverIp;

	/**
	 * @XmlText	(type="string", name="exception")
	 */
	protected $exception;

	public function __construct($serverName = NULL, $serverIp = NULL, $exception = NULL) {
		$this->serverName = ($serverName===NULL) ? NULL : $this->validateServerName($serverName);
		$this->serverIp = ($serverIp===NULL) ? NULL : $this->validateServerIp($serverIp);
		$this->exception = ($exception===NULL) ? NULL : $this->validateException($exception);
	}

	public function getServerName($autoCreate = TRUE) {
		if ($this->serverName===NULL && $autoCreate && ! isset($this->_overrides['serverName']) ) {
			$this->serverName = $this->createServerName();
		}
		return $this->serverName;
	}
	
	protected function createServerName() {
		return '';
	}

	public function setServerName($serverName) {
		$this->serverName = $this->validateServerName($serverName);
	}

	protected function validateServerName($serverName) {
		if (!is_string($serverName)) {
			throw new \Exception(sprintf('Supplied %s value was not %s', 'serverName', 'string'));
		}
	
		return $serverName;
	}

	public function getServerIp($autoCreate = TRUE) {
		if ($this->serverIp===NULL && $autoCreate && ! isset($this->_overrides['serverIp']) ) {
			$this->serverIp = $this->createServerIp();
		}
		return $this->serverIp;
	}
	
	protected function createServerIp() {
		return array();
	}

	public function setServerIp($serverIp) {
		$this->serverIp = $this->validateServerIp($serverIp);
	}

	protected function validateServerIp($serverIp) {
		$count = count($serverIp);
		if ($count < 0) {
			throw new \Exception(sprintf('Supplied %s array has less than the required number (%d) of entries.', 'serverIp', 0));
		}
		foreach ($serverIp as $entry) {
			if ( ! is_string($entry) && ! is_null($entry) ) {
				throw new \Exception(sprintf('Supplied %s value was not %s', 'serverIp', 'string'));
			}
		}
	
		return $serverIp;
	}

	public function addServerIp($serverIp) {
		$this->serverIp[] = $this->validateServerIpType($serverIp);
	}

	protected function validateServerIpType($serverIp) {
		if ( ! is_string($serverIp) && ! is_null($serverIp) ) {
			throw new \Exception(sprintf('Supplied %s value was not %s', 'serverIp', 'string'));
		}
	
		return $serverIp;
	}

	public function getException($autoCreate = TRUE) {
		if ($this->exception===NULL && $autoCreate && ! isset($this->_overrides['exception']) ) {
			$this->exception = $this->createException();
		}
		return $this->exception;
	}
	
	protected function createException() {
		return '';
	}

	public function setException($exception) {
		$this->exception = $this->validateException($exception);
	}

	protected function validateException($exception) {
		if (!is_string($exception)) {
			throw new \Exception(sprintf('Supplied %s value was not %s', 'exception', 'string'));
		}
	
		return $exception;
	}
} // end class ErrorContext

endif;
