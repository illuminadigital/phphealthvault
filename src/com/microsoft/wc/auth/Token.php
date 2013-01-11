<?php
namespace com\microsoft\wc\auth;

use com\microsoft\wc\types\Guid;
use com\microsoft\wc\types\AppRecordAuthAction;


/**
 * @XmlEntity	(xml="Token")
 */
class Token extends Stringz1024 {
	/**
	 * The authenticated session token.
	 * If the request succeeded, then an authenticated session token is returned.
	 */

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

	public function getAppId() {
		if ($this->appId===NULL) {
			$this->appId = $this->createAppId();
		}
		return $this->appId;
	}
	
	protected function createAppId() {
		return new Guid();
	}

	public function setAppId($appId) {
		$this->appId = $this->validateAppId($appId);
	}

	protected function validateAppId($appId) {
		if ( ! $appId instanceof Guid ) {
			$appId = new Guid ($appId);
		}
	
		return $appId;
	}

	public function getAppRecordAuthAction() {
		if ($this->appRecordAuthAction===NULL) {
			$this->appRecordAuthAction = $this->createAppRecordAuthAction();
		}
		return $this->appRecordAuthAction;
	}
	
	protected function createAppRecordAuthAction() {
		return new AppRecordAuthAction();
	}

	public function setAppRecordAuthAction($appRecordAuthAction) {
		$this->appRecordAuthAction = $this->validateAppRecordAuthAction($appRecordAuthAction);
	}

	protected function validateAppRecordAuthAction($appRecordAuthAction) {
		if ( ! $appRecordAuthAction instanceof AppRecordAuthAction ) {
			$appRecordAuthAction = new AppRecordAuthAction ($appRecordAuthAction);
		}
	
		return $appRecordAuthAction;
	}
} // end class Token
