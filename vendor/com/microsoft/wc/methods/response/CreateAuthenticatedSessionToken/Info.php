<?php
namespace com\microsoft\wc\methods\response\CreateAuthenticatedSessionToken;

use com\microsoft\wc\auth\Token;
use com\microsoft\wc\methods\response\CreateAuthenticatedSessionToken\AppAuthTokenAbsenceReason;

/**
 * @XmlNamespaces ({
 *	@XmlNamespace(url="urn:com.microsoft.wc.methods.response.CreateAuthenticatedSessionToken", prefix="")
 * })
 * @XmlEntity	(xml="info")
 */
class Info {
	/**
	 * The response for the request to create an authenticated session token.
	 * When a token is requested, if the request is a success then there will be a token. Otherwise, there will be an absence reason.
	 */

	/**
	 * @XmlElement	(type="\com\microsoft\wc\auth\Token", name="token")
	 */
	protected $token;

	/**
	 * @XmlElement	(type="\com\microsoft\wc\methods\response\CreateAuthenticatedSessionToken\AppAuthTokenAbsenceReason", name="token-absence-reason")
	 */
	protected $tokenAbsenceReason;

	public function __construct($token = NULL, $tokenAbsenceReason = NULL) {
		$this->token = ($token===NULL) ? NULL : $this->validateToken($token);
		$this->tokenAbsenceReason = ($tokenAbsenceReason===NULL) ? NULL : $this->validateTokenAbsenceReason($tokenAbsenceReason);
	}

	public function getToken() {
		if ($this->token===NULL) {
			$this->token = $this->createToken();
		}
		return $this->token;
	}
	
	protected function createToken() {
		return new Token();
	}

	public function setToken($token) {
		$this->token = $this->validateToken($token);
	}

	protected function validateToken($token) {
		if ( ! $token instanceof Token ) {
			$token = new Token ($token);
		}
	
		return $token;
	}

	public function getTokenAbsenceReason() {
		if ($this->tokenAbsenceReason===NULL) {
			$this->tokenAbsenceReason = $this->createTokenAbsenceReason();
		}
		return $this->tokenAbsenceReason;
	}
	
	protected function createTokenAbsenceReason() {
		return new AppAuthTokenAbsenceReason();
	}

	public function setTokenAbsenceReason($tokenAbsenceReason) {
		$this->tokenAbsenceReason = $this->validateTokenAbsenceReason($tokenAbsenceReason);
	}

	protected function validateTokenAbsenceReason($tokenAbsenceReason) {
		if ( ! $tokenAbsenceReason instanceof AppAuthTokenAbsenceReason ) {
			$tokenAbsenceReason = new AppAuthTokenAbsenceReason ($tokenAbsenceReason);
		}
	
		return $tokenAbsenceReason;
	}
} // end class Info
