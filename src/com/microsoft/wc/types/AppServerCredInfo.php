<?php
namespace com\microsoft\wc\types;



/**
 * @XmlNamespaces ({
 *	@XmlNamespace(url="urn:com.microsoft.wc.types", prefix="wc-types")
 * })
 * @XmlEntity	(xml="AppServerCredInfo")
 */
class AppServerCredInfo {
	/**
	 * Application server credential information.
	 * Information provided by the requesting application that will be used by Microsoft HealthVault to determine if an authenticated session token will be issued to the caller.
	 */

	/**
	 * List of manually overridden properties that should not be re-generated automatically
	 * @var array
	 */
	protected $_overrides = array();


	/**
	 * @XmlElement	(type="\com\microsoft\wc\types\Guid", name="app-id")
	 */
	protected $appId;

	/**
	 * @XmlElement	(type="\com\microsoft\wc\types\HMACAlgorithm", name="shared-secret")
	 */
	protected $sharedSecret;

	public function __construct($appId = NULL, $sharedSecret = NULL) {
		$this->appId = ($appId===NULL) ? NULL : $this->validateAppId($appId);
		$this->sharedSecret = ($sharedSecret===NULL) ? NULL : $this->validateSharedSecret($sharedSecret);
	}

	public function getAppId($autoCreate = TRUE) {
		if ($this->appId===NULL && $autoCreate && ! isset($this->_overrides['appId']) ) {
			$this->appId = $this->createAppId();
		}
		return $this->appId;
	}
	
	protected function createAppId() {
		return new \com\microsoft\wc\types\Guid();
	}

	public function setAppId($appId) {
		$this->appId = $this->validateAppId($appId);
	}

	protected function validateAppId($appId) {
		if ( ! $appId instanceof \com\microsoft\wc\types\Guid ) {
			$appId = new \com\microsoft\wc\types\Guid ($appId);
		}
	
		return $appId;
	}

	public function getSharedSecret($autoCreate = TRUE) {
		if ($this->sharedSecret===NULL && $autoCreate && ! isset($this->_overrides['sharedSecret']) ) {
			$this->sharedSecret = $this->createSharedSecret();
		}
		return $this->sharedSecret;
	}
	
	protected function createSharedSecret() {
		return new \com\microsoft\wc\types\HMACAlgorithm();
	}

	public function setSharedSecret($sharedSecret) {
		$this->sharedSecret = $this->validateSharedSecret($sharedSecret);
	}

	protected function validateSharedSecret($sharedSecret) {
		if ( ! $sharedSecret instanceof \com\microsoft\wc\types\HMACAlgorithm ) {
			$sharedSecret = new \com\microsoft\wc\types\HMACAlgorithm ($sharedSecret);
		}
	
		return $sharedSecret;
	}
} // end class AppServerCredInfo
