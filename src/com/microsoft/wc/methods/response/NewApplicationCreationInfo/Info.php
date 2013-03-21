<?php
namespace com\microsoft\wc\methods\response\NewApplicationCreationInfo;



/**
 * @XmlNamespaces ({
 *	@XmlNamespace(url="urn:com.microsoft.wc.methods.response.NewApplicationCreationInfo", prefix="")
 * })
 * @XmlEntity	(xml="info")
 */
class Info extends \com\microsoft\wc\methods\response\Info {
	/**
	 * Contains the response to the NewApplicationCreationInfo method call.
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
	 * @XmlElement	(type="\com\microsoft\wc\types\String64", name="shared-secret")
	 */
	protected $sharedSecret;

	/**
	 * @XmlElement	(type="\com\microsoft\wc\types\String512", name="app-token")
	 */
	protected $appToken;

	public function __construct($appId = NULL, $sharedSecret = NULL, $appToken = NULL) {
		$this->appId = ($appId===NULL) ? NULL : $this->validateAppId($appId);
		$this->sharedSecret = ($sharedSecret===NULL) ? NULL : $this->validateSharedSecret($sharedSecret);
		$this->appToken = ($appToken===NULL) ? NULL : $this->validateAppToken($appToken);
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
		return new \com\microsoft\wc\types\String64();
	}

	public function setSharedSecret($sharedSecret) {
		$this->sharedSecret = $this->validateSharedSecret($sharedSecret);
	}

	protected function validateSharedSecret($sharedSecret) {
		if ( ! $sharedSecret instanceof \com\microsoft\wc\types\String64 ) {
			$sharedSecret = new \com\microsoft\wc\types\String64 ($sharedSecret);
		}
	
		return $sharedSecret;
	}

	public function getAppToken($autoCreate = TRUE) {
		if ($this->appToken===NULL && $autoCreate && ! isset($this->_overrides['appToken']) ) {
			$this->appToken = $this->createAppToken();
		}
		return $this->appToken;
	}
	
	protected function createAppToken() {
		return new \com\microsoft\wc\types\String512();
	}

	public function setAppToken($appToken) {
		$this->appToken = $this->validateAppToken($appToken);
	}

	protected function validateAppToken($appToken) {
		if ( ! $appToken instanceof \com\microsoft\wc\types\String512 ) {
			$appToken = new \com\microsoft\wc\types\String512 ($appToken);
		}
	
		return $appToken;
	}
} // end class Info
