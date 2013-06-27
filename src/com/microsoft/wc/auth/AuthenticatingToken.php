<?php
namespace com\microsoft\wc\auth;



/**
 * @XmlNamespaces ({
 *	@XmlNamespace(url="urn:com.microsoft.wc.auth", prefix="wc-auth")
 * })
 * @XmlEntity	(xml="AuthenticatingToken")
 */
class AuthenticatingToken extends \com\microsoft\wc\types\Stringnz {
	/**
	 * An encrypted token representing the original credentials presented for authenticating to HealthVault.
	 * Two tokens are returned from CreateCredentialToken. This token represents the original credentials presented to HealthVault to authenticate a user. It will not authenticate the user in subsequent HealthVault requests.
	 */

	/**
	 * List of manually overridden properties that should not be re-generated automatically
	 * @var array
	 */
	protected $_overrides = array();


	/**
	 * @XmlAttribute	(type="string", name="supported-instances")
	 */
	protected $supportedInstances;

	public function __construct($supportedInstances = NULL) {
		$this->supportedInstances = ($supportedInstances===NULL) ? NULL : $this->validateSupportedInstances($supportedInstances);
	}

	public function getSupportedInstances($autoCreate = TRUE) {
		if ($this->supportedInstances===NULL && $autoCreate && ! isset($this->_overrides['supportedInstances']) ) {
			$this->supportedInstances = $this->createSupportedInstances();
		}
		return $this->supportedInstances;
	}
	
	protected function createSupportedInstances() {
		return new \com\microsoft\wc\types\Stringnz();
	}

	public function setSupportedInstances($supportedInstances) {
		$this->supportedInstances = $this->validateSupportedInstances($supportedInstances);
	}

	protected function validateSupportedInstances($supportedInstances) {
		if ( $supportedInstances === FALSE ) {
			$this->_overrides['supportedInstances'] = TRUE;
			return NULL;
		}

		if ( ! $supportedInstances instanceof \com\microsoft\wc\types\Stringnz  && ! is_null($supportedInstances) ) {
			$supportedInstances = new \com\microsoft\wc\types\Stringnz ($supportedInstances);
		}

		unset ($this->_overrides['supportedInstances']);
	
		return $supportedInstances;
	}
} // end class AuthenticatingToken
