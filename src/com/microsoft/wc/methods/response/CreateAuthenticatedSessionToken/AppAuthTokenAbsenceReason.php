<?php
namespace com\microsoft\wc\methods\response\CreateAuthenticatedSessionToken;



/**
 * @XmlNamespaces ({
 *	@XmlNamespace(url="urn:com.microsoft.wc.methods.response.CreateAuthenticatedSessionToken", prefix="")
 * })
 * @XmlEntity	(xml="AppAuthTokenAbsenceReason")
 */
class AppAuthTokenAbsenceReason extends AuthTokenAbsenceReason {
	/**
	 * Reasons why an authenticated session token was not returned.
	 * Depending upon the reason, there may be user-actionable events that would enable the request to succeed.
	 */

	/**
	 * @XmlAttribute	(type="string", name="app-id")
	 */
	protected $appId;

	public function __construct($appId = NULL) {
		$this->appId = ($appId===NULL) ? NULL : $this->validateAppId($appId);
	}

	public function getAppId() {
		if ($this->appId===NULL) {
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
} // end class AppAuthTokenAbsenceReason
