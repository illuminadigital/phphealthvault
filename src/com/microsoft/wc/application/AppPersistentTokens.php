<?php
namespace com\microsoft\wc\application;



/**
 * @XmlNamespaces ({
 *	@XmlNamespace(url="urn:com.microsoft.wc.application", prefix="wc-app")
 * })
 * @XmlEntity	(xml="AppPersistentTokens")
 */
class AppPersistentTokens {
	/**
	 */

	/**
	 * List of manually overridden properties that should not be re-generated automatically
	 * @var array
	 */
	protected $_overrides = array();


	/**
	 * @XmlText	(type="boolean", name="enabled")
	 */
	protected $enabled;

	/**
	 * @XmlText	(type="integer", name="token-ttl-seconds")
	 */
	protected $tokenTtlSeconds;

	public function __construct($enabled = NULL, $tokenTtlSeconds = NULL) {
		$this->enabled = ($enabled===NULL) ? NULL : $this->validateEnabled($enabled);
		$this->tokenTtlSeconds = ($tokenTtlSeconds===NULL) ? NULL : $this->validateTokenTtlSeconds($tokenTtlSeconds);
	}

	public function getEnabled($autoCreate = TRUE) {
		if ($this->enabled===NULL && $autoCreate && ! isset($this->_overrides['enabled']) ) {
			$this->enabled = $this->createEnabled();
		}
		return $this->enabled;
	}
	
	protected function createEnabled() {
		return FALSE;
	}

	public function setEnabled($enabled) {
		$this->enabled = $this->validateEnabled($enabled);
	}

	protected function validateEnabled($enabled) {
		if (!is_bool($enabled)) {
			throw new \Exception(sprintf('Supplied %s value was not %s', 'enabled', 'boolean'));
		}
	
		return $enabled;
	}

	public function getTokenTtlSeconds($autoCreate = TRUE) {
		if ($this->tokenTtlSeconds===NULL && $autoCreate && ! isset($this->_overrides['tokenTtlSeconds']) ) {
			$this->tokenTtlSeconds = $this->createTokenTtlSeconds();
		}
		return $this->tokenTtlSeconds;
	}
	
	protected function createTokenTtlSeconds() {
		return NULL;
	}

	public function setTokenTtlSeconds($tokenTtlSeconds) {
		$this->tokenTtlSeconds = $this->validateTokenTtlSeconds($tokenTtlSeconds);
	}

	protected function validateTokenTtlSeconds($tokenTtlSeconds) {
		$isValid = FALSE;
		if ( is_integer($tokenTtlSeconds) ) {
			$isValid = TRUE;
		}
		else if ( is_null($tokenTtlSeconds) ) {
			$isValid = TRUE;
		}
		else if ( $tokenTtlSeconds == ($castVar = (integer) $tokenTtlSeconds) ) {
			$isValid = TRUE;
			$tokenTtlSeconds = $castVar;
		}
		if ( ! $isValid ) {
			throw new \Exception(sprintf('Supplied %s value was not %s', 'tokenTtlSeconds', 'integer'));
		}
	
		return $tokenTtlSeconds;
	}
} // end class AppPersistentTokens
