<?php
namespace com\microsoft\wc\auth;



/**
 * @XmlNamespaces ({
 *	@XmlNamespace(url="urn:com.microsoft.wc.auth", prefix="wc-auth")
 * })
 * @XmlEntity	(xml="Token")
 */
class Token extends \com\microsoft\wc\types\Stringz1024 {
	/**
	 * The authenticated session token.
	 * If the request succeeded, then an authenticated session token is returned.
	 */

	/**
	 * List of manually overridden properties that should not be re-generated automatically
	 * @var array
	 */
	protected $_overrides = array();


	/**
	 * @XmlAttribute	(type="string", name="app-id")
	 */
	protected $appId;

	/**
	 * @XmlAttribute	(type="string", name="app-record-auth-action")
	 */
	protected $appRecordAuthAction;

	public function __construct($appId = NULL, $appRecordAuthAction = NULL) {
		$this->appId = ($appId===NULL) ? NULL : $this->validateAppId($appId);
		$this->appRecordAuthAction = ($appRecordAuthAction===NULL) ? NULL : $this->validateAppRecordAuthAction($appRecordAuthAction);
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

	public function getAppRecordAuthAction($autoCreate = TRUE) {
		if ($this->appRecordAuthAction===NULL && $autoCreate && ! isset($this->_overrides['appRecordAuthAction']) ) {
			$this->appRecordAuthAction = $this->createAppRecordAuthAction();
		}
		return $this->appRecordAuthAction;
	}
	
	protected function createAppRecordAuthAction() {
		return new \com\microsoft\wc\types\AppRecordAuthAction();
	}

	public function setAppRecordAuthAction($appRecordAuthAction) {
		$this->appRecordAuthAction = $this->validateAppRecordAuthAction($appRecordAuthAction);
	}

	protected function validateAppRecordAuthAction($appRecordAuthAction) {
		if ( ! $appRecordAuthAction instanceof \com\microsoft\wc\types\AppRecordAuthAction ) {
			$appRecordAuthAction = new \com\microsoft\wc\types\AppRecordAuthAction ($appRecordAuthAction);
		}
	
		return $appRecordAuthAction;
	}
} // end class Token
