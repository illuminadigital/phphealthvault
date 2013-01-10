<?php
namespace com\microsoft\wc\record;



/**
 * @XmlEntity	(xml="FederatingCred")
 */
class FederatingCred {
	/**
	 * The federating credential that demonstrates a prior successful authentication.
	 * This credential represents a successful authentication to an application which is allowed to federate a logon to another application. The token is used to verify a prior successful authentication to the federating application. The application id associated with the token must match the application id in the federating request.
	 */

	/**
	 * @XmlText	(type="string", name="federating-auth-token")
	 */
	protected $federatingAuthToken;

	public function __construct($federatingAuthToken = NULL) {
		$this->federatingAuthToken = ($federatingAuthToken===NULL) ? NULL : $this->validateFederatingAuthToken($federatingAuthToken);
	}

	public function getFederatingAuthToken() {
		if ($this->federatingAuthToken===NULL) {
			$this->federatingAuthToken = $this->createFederatingAuthToken();
		}
		return $this->federatingAuthToken;
	}
	
	protected function createFederatingAuthToken() {
		return '';
	}

	public function setFederatingAuthToken($federatingAuthToken) {
		$this->federatingAuthToken = $this->validateFederatingAuthToken($federatingAuthToken);
	}

	protected function validateFederatingAuthToken($federatingAuthToken) {
		if (!is_string($federatingAuthToken)) {
			throw new \Exception(sprintf('Supplied %s value was not %s', 'federatingAuthToken', 'string'));
		}
	
		return $federatingAuthToken;
	}
} // end class FederatingCred
