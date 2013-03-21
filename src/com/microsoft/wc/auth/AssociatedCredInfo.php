<?php
namespace com\microsoft\wc\auth;



/**
 * @XmlNamespaces ({
 *	@XmlNamespace(url="urn:com.microsoft.wc.auth", prefix="wc-auth")
 * })
 * @XmlEntity	(xml="AssociatedCredInfo")
 */
class AssociatedCredInfo {
	/**
	 * Info used to describe the credential to associated with the account.
	 */

	/**
	 * List of manually overridden properties that should not be re-generated automatically
	 * @var array
	 */
	protected $_overrides = array();


	/**
	 * @XmlElement	(type="\com\microsoft\wc\types\Stringnz", name="simple-encrypted")
	 */
	protected $simpleEncrypted;

	/**
	 * @XmlElement	(type="\com\microsoft\wc\auth\UserPassCred", name="simple-userpass")
	 */
	protected $simpleUserpass;

	/**
	 * @XmlElement	(type="\com\microsoft\wc\auth\SimplePassportCredential", name="simple-passport")
	 */
	protected $simplePassport;

	/**
	 * @XmlElement	(type="\com\microsoft\wc\auth\SimpleOpenIdCredential", name="simple-openid")
	 */
	protected $simpleOpenid;

	/**
	 * @XmlElement	(type="\com\microsoft\wc\auth\SimpleFacebookCredential", name="simple-facebook")
	 */
	protected $simpleFacebook;

	/**
	 * @XmlElement	(type="\com\microsoft\wc\auth\SimpleEmergencyAccessCredential", name="simple-emergency-access")
	 */
	protected $simpleEmergencyAccess;

	/**
	 * @XmlElement	(type="\com\microsoft\wc\auth\SimplePhoneFactorCredential", name="simple-phone-factor")
	 */
	protected $simplePhoneFactor;

	/**
	 * @XmlElement	(type="\com\microsoft\wc\auth\IntegratedWindowsCredential", name="integrated-windows")
	 */
	protected $integratedWindows;

	/**
	 * @XmlElement	(type="\com\microsoft\wc\types\Stringnz", name="credential-metadata")
	 */
	protected $credentialMetadata;

	/**
	 * @XmlElement	(type="\com\microsoft\wc\types\String64", name="credential-name")
	 */
	protected $credentialName;

	/**
	 * @XmlText	(type="string", name="date-created")
	 */
	protected $dateCreated;

	/**
	 * @XmlText	(type="string", name="date-last-used")
	 */
	protected $dateLastUsed;

	public function __construct($simpleEncrypted = NULL, $simpleUserpass = NULL, $simplePassport = NULL, $simpleOpenid = NULL, $simpleFacebook = NULL, $simpleEmergencyAccess = NULL, $simplePhoneFactor = NULL, $integratedWindows = NULL, $credentialMetadata = NULL, $credentialName = NULL, $dateCreated = NULL, $dateLastUsed = NULL) {
		$this->simpleEncrypted = ($simpleEncrypted===NULL) ? NULL : $this->validateSimpleEncrypted($simpleEncrypted);
		$this->simpleUserpass = ($simpleUserpass===NULL) ? NULL : $this->validateSimpleUserpass($simpleUserpass);
		$this->simplePassport = ($simplePassport===NULL) ? NULL : $this->validateSimplePassport($simplePassport);
		$this->simpleOpenid = ($simpleOpenid===NULL) ? NULL : $this->validateSimpleOpenid($simpleOpenid);
		$this->simpleFacebook = ($simpleFacebook===NULL) ? NULL : $this->validateSimpleFacebook($simpleFacebook);
		$this->simpleEmergencyAccess = ($simpleEmergencyAccess===NULL) ? NULL : $this->validateSimpleEmergencyAccess($simpleEmergencyAccess);
		$this->simplePhoneFactor = ($simplePhoneFactor===NULL) ? NULL : $this->validateSimplePhoneFactor($simplePhoneFactor);
		$this->integratedWindows = ($integratedWindows===NULL) ? NULL : $this->validateIntegratedWindows($integratedWindows);
		$this->credentialMetadata = ($credentialMetadata===NULL) ? NULL : $this->validateCredentialMetadata($credentialMetadata);
		$this->credentialName = ($credentialName===NULL) ? NULL : $this->validateCredentialName($credentialName);
		$this->dateCreated = ($dateCreated===NULL) ? NULL : $this->validateDateCreated($dateCreated);
		$this->dateLastUsed = ($dateLastUsed===NULL) ? NULL : $this->validateDateLastUsed($dateLastUsed);
	}

	public function getSimpleEncrypted($autoCreate = TRUE) {
		if ($this->simpleEncrypted===NULL && $autoCreate && ! isset($this->_overrides['simpleEncrypted']) ) {
			$this->simpleEncrypted = $this->createSimpleEncrypted();
		}
		return $this->simpleEncrypted;
	}
	
	protected function createSimpleEncrypted() {
		return new \com\microsoft\wc\types\Stringnz();
	}

	public function setSimpleEncrypted($simpleEncrypted) {
		$this->simpleEncrypted = $this->validateSimpleEncrypted($simpleEncrypted);
	}

	protected function validateSimpleEncrypted($simpleEncrypted) {
		if ( ! $simpleEncrypted instanceof \com\microsoft\wc\types\Stringnz ) {
			$simpleEncrypted = new \com\microsoft\wc\types\Stringnz ($simpleEncrypted);
		}
	
		return $simpleEncrypted;
	}

	public function getSimpleUserpass($autoCreate = TRUE) {
		if ($this->simpleUserpass===NULL && $autoCreate && ! isset($this->_overrides['simpleUserpass']) ) {
			$this->simpleUserpass = $this->createSimpleUserpass();
		}
		return $this->simpleUserpass;
	}
	
	protected function createSimpleUserpass() {
		return new \com\microsoft\wc\auth\UserPassCred();
	}

	public function setSimpleUserpass($simpleUserpass) {
		$this->simpleUserpass = $this->validateSimpleUserpass($simpleUserpass);
	}

	protected function validateSimpleUserpass($simpleUserpass) {
		if ( ! $simpleUserpass instanceof \com\microsoft\wc\auth\UserPassCred ) {
			$simpleUserpass = new \com\microsoft\wc\auth\UserPassCred ($simpleUserpass);
		}
	
		return $simpleUserpass;
	}

	public function getSimplePassport($autoCreate = TRUE) {
		if ($this->simplePassport===NULL && $autoCreate && ! isset($this->_overrides['simplePassport']) ) {
			$this->simplePassport = $this->createSimplePassport();
		}
		return $this->simplePassport;
	}
	
	protected function createSimplePassport() {
		return new \com\microsoft\wc\auth\SimplePassportCredential();
	}

	public function setSimplePassport($simplePassport) {
		$this->simplePassport = $this->validateSimplePassport($simplePassport);
	}

	protected function validateSimplePassport($simplePassport) {
		if ( ! $simplePassport instanceof \com\microsoft\wc\auth\SimplePassportCredential ) {
			$simplePassport = new \com\microsoft\wc\auth\SimplePassportCredential ($simplePassport);
		}
	
		return $simplePassport;
	}

	public function getSimpleOpenid($autoCreate = TRUE) {
		if ($this->simpleOpenid===NULL && $autoCreate && ! isset($this->_overrides['simpleOpenid']) ) {
			$this->simpleOpenid = $this->createSimpleOpenid();
		}
		return $this->simpleOpenid;
	}
	
	protected function createSimpleOpenid() {
		return new \com\microsoft\wc\auth\SimpleOpenIdCredential();
	}

	public function setSimpleOpenid($simpleOpenid) {
		$this->simpleOpenid = $this->validateSimpleOpenid($simpleOpenid);
	}

	protected function validateSimpleOpenid($simpleOpenid) {
		if ( ! $simpleOpenid instanceof \com\microsoft\wc\auth\SimpleOpenIdCredential ) {
			$simpleOpenid = new \com\microsoft\wc\auth\SimpleOpenIdCredential ($simpleOpenid);
		}
	
		return $simpleOpenid;
	}

	public function getSimpleFacebook($autoCreate = TRUE) {
		if ($this->simpleFacebook===NULL && $autoCreate && ! isset($this->_overrides['simpleFacebook']) ) {
			$this->simpleFacebook = $this->createSimpleFacebook();
		}
		return $this->simpleFacebook;
	}
	
	protected function createSimpleFacebook() {
		return new \com\microsoft\wc\auth\SimpleFacebookCredential();
	}

	public function setSimpleFacebook($simpleFacebook) {
		$this->simpleFacebook = $this->validateSimpleFacebook($simpleFacebook);
	}

	protected function validateSimpleFacebook($simpleFacebook) {
		if ( ! $simpleFacebook instanceof \com\microsoft\wc\auth\SimpleFacebookCredential ) {
			$simpleFacebook = new \com\microsoft\wc\auth\SimpleFacebookCredential ($simpleFacebook);
		}
	
		return $simpleFacebook;
	}

	public function getSimpleEmergencyAccess($autoCreate = TRUE) {
		if ($this->simpleEmergencyAccess===NULL && $autoCreate && ! isset($this->_overrides['simpleEmergencyAccess']) ) {
			$this->simpleEmergencyAccess = $this->createSimpleEmergencyAccess();
		}
		return $this->simpleEmergencyAccess;
	}
	
	protected function createSimpleEmergencyAccess() {
		return new \com\microsoft\wc\auth\SimpleEmergencyAccessCredential();
	}

	public function setSimpleEmergencyAccess($simpleEmergencyAccess) {
		$this->simpleEmergencyAccess = $this->validateSimpleEmergencyAccess($simpleEmergencyAccess);
	}

	protected function validateSimpleEmergencyAccess($simpleEmergencyAccess) {
		if ( ! $simpleEmergencyAccess instanceof \com\microsoft\wc\auth\SimpleEmergencyAccessCredential ) {
			$simpleEmergencyAccess = new \com\microsoft\wc\auth\SimpleEmergencyAccessCredential ($simpleEmergencyAccess);
		}
	
		return $simpleEmergencyAccess;
	}

	public function getSimplePhoneFactor($autoCreate = TRUE) {
		if ($this->simplePhoneFactor===NULL && $autoCreate && ! isset($this->_overrides['simplePhoneFactor']) ) {
			$this->simplePhoneFactor = $this->createSimplePhoneFactor();
		}
		return $this->simplePhoneFactor;
	}
	
	protected function createSimplePhoneFactor() {
		return new \com\microsoft\wc\auth\SimplePhoneFactorCredential();
	}

	public function setSimplePhoneFactor($simplePhoneFactor) {
		$this->simplePhoneFactor = $this->validateSimplePhoneFactor($simplePhoneFactor);
	}

	protected function validateSimplePhoneFactor($simplePhoneFactor) {
		if ( ! $simplePhoneFactor instanceof \com\microsoft\wc\auth\SimplePhoneFactorCredential ) {
			$simplePhoneFactor = new \com\microsoft\wc\auth\SimplePhoneFactorCredential ($simplePhoneFactor);
		}
	
		return $simplePhoneFactor;
	}

	public function getIntegratedWindows($autoCreate = TRUE) {
		if ($this->integratedWindows===NULL && $autoCreate && ! isset($this->_overrides['integratedWindows']) ) {
			$this->integratedWindows = $this->createIntegratedWindows();
		}
		return $this->integratedWindows;
	}
	
	protected function createIntegratedWindows() {
		return new \com\microsoft\wc\auth\IntegratedWindowsCredential();
	}

	public function setIntegratedWindows($integratedWindows) {
		$this->integratedWindows = $this->validateIntegratedWindows($integratedWindows);
	}

	protected function validateIntegratedWindows($integratedWindows) {
		if ( ! $integratedWindows instanceof \com\microsoft\wc\auth\IntegratedWindowsCredential ) {
			$integratedWindows = new \com\microsoft\wc\auth\IntegratedWindowsCredential ($integratedWindows);
		}
	
		return $integratedWindows;
	}

	public function getCredentialMetadata($autoCreate = TRUE) {
		if ($this->credentialMetadata===NULL && $autoCreate && ! isset($this->_overrides['credentialMetadata']) ) {
			$this->credentialMetadata = $this->createCredentialMetadata();
		}
		return $this->credentialMetadata;
	}
	
	protected function createCredentialMetadata() {
		return new \com\microsoft\wc\types\Stringnz();
	}

	public function setCredentialMetadata($credentialMetadata) {
		$this->credentialMetadata = $this->validateCredentialMetadata($credentialMetadata);
	}

	protected function validateCredentialMetadata($credentialMetadata) {
		if ( $credentialMetadata === FALSE ) {
			$this->_overrides['credentialMetadata'] = TRUE;
			return NULL;
		}

		if ( ! $credentialMetadata instanceof \com\microsoft\wc\types\Stringnz  && ! is_null($credentialMetadata) ) {
			$credentialMetadata = new \com\microsoft\wc\types\Stringnz ($credentialMetadata);
		}

		unset ($this->_overrides['credentialMetadata']);
	
		return $credentialMetadata;
	}

	public function getCredentialName($autoCreate = TRUE) {
		if ($this->credentialName===NULL && $autoCreate && ! isset($this->_overrides['credentialName']) ) {
			$this->credentialName = $this->createCredentialName();
		}
		return $this->credentialName;
	}
	
	protected function createCredentialName() {
		return new \com\microsoft\wc\types\String64();
	}

	public function setCredentialName($credentialName) {
		$this->credentialName = $this->validateCredentialName($credentialName);
	}

	protected function validateCredentialName($credentialName) {
		if ( $credentialName === FALSE ) {
			$this->_overrides['credentialName'] = TRUE;
			return NULL;
		}

		if ( ! $credentialName instanceof \com\microsoft\wc\types\String64  && ! is_null($credentialName) ) {
			$credentialName = new \com\microsoft\wc\types\String64 ($credentialName);
		}

		unset ($this->_overrides['credentialName']);
	
		return $credentialName;
	}

	public function getDateCreated($autoCreate = TRUE) {
		if ($this->dateCreated===NULL && $autoCreate && ! isset($this->_overrides['dateCreated']) ) {
			$this->dateCreated = $this->createDateCreated();
		}
		return $this->dateCreated;
	}
	
	protected function createDateCreated() {
		return NULL;
	}

	public function setDateCreated($dateCreated) {
		$this->dateCreated = $this->validateDateCreated($dateCreated);
	}

	protected function validateDateCreated($dateCreated) {
		if ( ! is_string($dateCreated) && ! is_null($dateCreated) ) {
			throw new \Exception(sprintf('Supplied %s value was not %s', 'dateCreated', 'string'));
		}
	
		return $dateCreated;
	}

	public function getDateLastUsed($autoCreate = TRUE) {
		if ($this->dateLastUsed===NULL && $autoCreate && ! isset($this->_overrides['dateLastUsed']) ) {
			$this->dateLastUsed = $this->createDateLastUsed();
		}
		return $this->dateLastUsed;
	}
	
	protected function createDateLastUsed() {
		return NULL;
	}

	public function setDateLastUsed($dateLastUsed) {
		$this->dateLastUsed = $this->validateDateLastUsed($dateLastUsed);
	}

	protected function validateDateLastUsed($dateLastUsed) {
		if ( ! is_string($dateLastUsed) && ! is_null($dateLastUsed) ) {
			throw new \Exception(sprintf('Supplied %s value was not %s', 'dateLastUsed', 'string'));
		}
	
		return $dateLastUsed;
	}
} // end class AssociatedCredInfo
