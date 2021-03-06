<?php
namespace com\microsoft\wc\auth;



/**
 * @XmlNamespaces ({
 *	@XmlNamespace(url="urn:com.microsoft.wc.auth", prefix="wc-auth")
 * })
 * @XmlEntity	(xml="FederatingCred")
 */
class FederatingCred {
	/**
	 * The federating credential that demonstrates a prior successful authentication.
	 * This credential represents a successful authentication to an application which is allowed to federate a logon to another application. The token is used to verify a prior successful authentication to the federating application. The application id associated with the token must match the application id in the federating request.
	 */

	/**
	 * List of manually overridden properties that should not be re-generated automatically
	 * @var array
	 */
	protected $_overrides = array();


	/**
	 * @XmlText	(type="string", name="federating-auth-token")
	 */
	protected $federatingAuthToken;

	public function __construct($federatingAuthToken = NULL) {
		$this->federatingAuthToken = ($federatingAuthToken===NULL) ? NULL : $this->validateFederatingAuthToken($federatingAuthToken);
	}

	public function getFederatingAuthToken($autoCreate = TRUE) {
		if ($this->federatingAuthToken===NULL && $autoCreate && ! isset($this->_overrides['federatingAuthToken']) ) {
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
