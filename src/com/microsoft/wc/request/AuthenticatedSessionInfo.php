<?php
namespace com\microsoft\wc\request;



/**
 * @XmlNamespaces ({
 *	@XmlNamespace(url="urn:com.microsoft.wc.request", prefix="")
 * })
 * @XmlEntity	(xml="AuthenticatedSessionInfo")
 */
class AuthenticatedSessionInfo {
	/**
	 * The tokens required to make an authenticated request to Microsoft HealthVault.
	 * All the tokens provided have been acquired via previous token requests to Microsoft HealthVault. All tokens have a limited lifespan, so if the token is expired the request will fail.
	 */

	/**
	 * List of manually overridden properties that should not be re-generated automatically
	 * @var array
	 */
	protected $_overrides = array();


	/**
	 * @XmlText	(type="string", name="auth-token")
	 */
	protected $authToken;

	/**
	 * @XmlText	(type="string", name="user-auth-token")
	 */
	protected $userAuthToken;

	/**
	 * @XmlElement	(type="\com\microsoft\wc\request\OfflinePersonInfo", name="offline-person-info")
	 */
	protected $offlinePersonInfo;

	public function __construct($authToken = NULL, $userAuthToken = NULL, $offlinePersonInfo = NULL) {
		$this->authToken = ($authToken===NULL) ? NULL : $this->validateAuthToken($authToken);
		$this->userAuthToken = ($userAuthToken===NULL) ? NULL : $this->validateUserAuthToken($userAuthToken);
		$this->offlinePersonInfo = ($offlinePersonInfo===NULL) ? NULL : $this->validateOfflinePersonInfo($offlinePersonInfo);
	}

	public function getAuthToken($autoCreate = TRUE) {
		if ($this->authToken===NULL && $autoCreate && ! isset($this->_overrides['authToken']) ) {
			$this->authToken = $this->createAuthToken();
		}
		return $this->authToken;
	}
	
	protected function createAuthToken() {
		return '';
	}

	public function setAuthToken($authToken) {
		$this->authToken = $this->validateAuthToken($authToken);
	}

	protected function validateAuthToken($authToken) {
		if (!is_string($authToken)) {
			throw new \Exception(sprintf('Supplied %s value was not %s', 'authToken', 'string'));
		}
	
		return $authToken;
	}

	public function getUserAuthToken($autoCreate = TRUE) {
		if ($this->userAuthToken===NULL && $autoCreate && ! isset($this->_overrides['userAuthToken']) ) {
			$this->userAuthToken = $this->createUserAuthToken();
		}
		return $this->userAuthToken;
	}
	
	protected function createUserAuthToken() {
		return '';
	}

	public function setUserAuthToken($userAuthToken) {
		$this->userAuthToken = $this->validateUserAuthToken($userAuthToken);
	}

	protected function validateUserAuthToken($userAuthToken) {
		if ( ! is_string($userAuthToken) && ! is_null($userAuthToken) ) {
			throw new \Exception(sprintf('Supplied %s value was not %s', 'userAuthToken', 'string'));
		}
	
		return $userAuthToken;
	}

	public function getOfflinePersonInfo($autoCreate = TRUE) {
		if ($this->offlinePersonInfo===NULL && $autoCreate && ! isset($this->_overrides['offlinePersonInfo']) ) {
			$this->offlinePersonInfo = $this->createOfflinePersonInfo();
		}
		return $this->offlinePersonInfo;
	}
	
	protected function createOfflinePersonInfo() {
		return new \com\microsoft\wc\request\OfflinePersonInfo();
	}

	public function setOfflinePersonInfo($offlinePersonInfo) {
		$this->offlinePersonInfo = $this->validateOfflinePersonInfo($offlinePersonInfo);
	}

	protected function validateOfflinePersonInfo($offlinePersonInfo) {
		if ( $offlinePersonInfo === FALSE ) {
			$this->_overrides['offlinePersonInfo'] = TRUE;
			return NULL;
		}

		if ( ! $offlinePersonInfo instanceof \com\microsoft\wc\request\OfflinePersonInfo  && ! is_null($offlinePersonInfo) ) {
			$offlinePersonInfo = new \com\microsoft\wc\request\OfflinePersonInfo ($offlinePersonInfo);
		}

		unset ($this->_overrides['offlinePersonInfo']);
	
		return $offlinePersonInfo;
	}
} // end class AuthenticatedSessionInfo
