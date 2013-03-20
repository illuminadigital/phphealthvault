<?php
namespace com\microsoft\wc\methods\response\CreateAuthenticatedSessionToken;



/**
 * @XmlNamespaces ({
 *	@XmlNamespace(url="urn:com.microsoft.wc.methods.response.CreateAuthenticatedSessionToken", prefix="")
 * })
 * @XmlEntity	(xml="info")
 */
class Info extends \com\microsoft\wc\methods\response\Info {
	/**
	 * The response for the request to create an authenticated session token.
	 * When a token is requested, if the request is a success then there will be a token. Otherwise, there will be an absence reason.
	 */

	/**
	 * @XmlElement	(type="\com\microsoft\wc\auth\Token", collection="true", name="token")
	 */
	protected $token;

	/**
	 * @XmlElement	(type="\com\microsoft\wc\methods\response\CreateAuthenticatedSessionToken\AppAuthTokenAbsenceReason", collection="true", name="token-absence-reason")
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
		return array();
	}

	public function setToken($token) {
		$this->token = $this->validateToken($token);
	}

	protected function validateToken($token) {
		if ( ! is_array ($token) ) {
			$token = array($token);
		}
		$count = count($token);
		if ($count < 1) {
			throw new \Exception(sprintf('Supplied %s array has less than the required number (%d) of entries.', 'token', 1));
		}
		foreach ($token as $entry) {
			if (!($entry instanceof Token)) {
				throw new \Exception(sprintf('Supplied %s value was not %s', 'token', 'Token'));
			}
		}
	
		return $token;
	}

	public function addToken($token) {
		$this->token[] = $token;
	}

	public function getTokenAbsenceReason() {
		if ($this->tokenAbsenceReason===NULL) {
			$this->tokenAbsenceReason = $this->createTokenAbsenceReason();
		}
		return $this->tokenAbsenceReason;
	}
	
	protected function createTokenAbsenceReason() {
		return array();
	}

	public function setTokenAbsenceReason($tokenAbsenceReason) {
		$this->tokenAbsenceReason = $this->validateTokenAbsenceReason($tokenAbsenceReason);
	}

	protected function validateTokenAbsenceReason($tokenAbsenceReason) {
		if ( ! is_array ($tokenAbsenceReason) ) {
			$tokenAbsenceReason = array($tokenAbsenceReason);
		}
		$count = count($tokenAbsenceReason);
		if ($count < 1) {
			throw new \Exception(sprintf('Supplied %s array has less than the required number (%d) of entries.', 'tokenAbsenceReason', 1));
		}
		foreach ($tokenAbsenceReason as $entry) {
			if (!($entry instanceof AppAuthTokenAbsenceReason)) {
				throw new \Exception(sprintf('Supplied %s value was not %s', 'tokenAbsenceReason', 'AppAuthTokenAbsenceReason'));
			}
		}
	
		return $tokenAbsenceReason;
	}

	public function addTokenAbsenceReason($tokenAbsenceReason) {
		$this->tokenAbsenceReason[] = $tokenAbsenceReason;
	}
} // end class Info
