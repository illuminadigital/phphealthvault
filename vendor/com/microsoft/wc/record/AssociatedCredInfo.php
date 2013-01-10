<?php
namespace com\microsoft\wc\record;

use com\microsoft\wc\types\Stringnz;
use com\microsoft\wc\record\UserPassCred;
use com\microsoft\wc\record\SimplePassportCredential;
use com\microsoft\wc\record\SimpleOpenIdCredential;
use com\microsoft\wc\record\SimpleFacebookCredential;
use com\microsoft\wc\record\SimpleEmergencyAccessCredential;
use com\microsoft\wc\record\SimplePhoneFactorCredential;
use com\microsoft\wc\record\IntegratedWindowsCredential;
use com\microsoft\wc\types\String64;

/**
 * @XmlNamespaces ({
 *	@XmlNamespace(url="urn:com.microsoft.wc.record", prefix="wc-record")
 * })
 * @XmlEntity	(xml="AssociatedCredInfo")
 */
class AssociatedCredInfo {
	/**
	 * Info used to describe the credential to associated with the account.
	 */

	/**
	 * @XmlElement	(type="\com\microsoft\wc\types\Stringnz", name="simple-encrypted")
	 */
	protected $simpleEncrypted;

	/**
	 * @XmlElement	(type="\com\microsoft\wc\record\UserPassCred", name="simple-userpass")
	 */
	protected $simpleUserpass;

	/**
	 * @XmlElement	(type="\com\microsoft\wc\record\SimplePassportCredential", name="simple-passport")
	 */
	protected $simplePassport;

	/**
	 * @XmlElement	(type="\com\microsoft\wc\record\SimpleOpenIdCredential", name="simple-openid")
	 */
	protected $simpleOpenid;

	/**
	 * @XmlElement	(type="\com\microsoft\wc\record\SimpleFacebookCredential", name="simple-facebook")
	 */
	protected $simpleFacebook;

	/**
	 * @XmlElement	(type="\com\microsoft\wc\record\SimpleEmergencyAccessCredential", name="simple-emergency-access")
	 */
	protected $simpleEmergencyAccess;

	/**
	 * @XmlElement	(type="\com\microsoft\wc\record\SimplePhoneFactorCredential", name="simple-phone-factor")
	 */
	protected $simplePhoneFactor;

	/**
	 * @XmlElement	(type="\com\microsoft\wc\record\IntegratedWindowsCredential", name="integrated-windows")
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

	public function getSimpleEncrypted() {
		if ($this->simpleEncrypted===NULL) {
			$this->simpleEncrypted = $this->createSimpleEncrypted();
		}
		return $this->simpleEncrypted;
	}
	
	protected function createSimpleEncrypted() {
		return new Stringnz();
	}

	public function setSimpleEncrypted($simpleEncrypted) {
		$this->simpleEncrypted = $this->validateSimpleEncrypted($simpleEncrypted);
	}

	protected function validateSimpleEncrypted($simpleEncrypted) {
		if ( ! $simpleEncrypted instanceof Stringnz ) {
			$simpleEncrypted = new Stringnz ($simpleEncrypted);
		}
	
		return $simpleEncrypted;
	}

	public function getSimpleUserpass() {
		if ($this->simpleUserpass===NULL) {
			$this->simpleUserpass = $this->createSimpleUserpass();
		}
		return $this->simpleUserpass;
	}
	
	protected function createSimpleUserpass() {
		return new UserPassCred();
	}

	public function setSimpleUserpass($simpleUserpass) {
		$this->simpleUserpass = $this->validateSimpleUserpass($simpleUserpass);
	}

	protected function validateSimpleUserpass($simpleUserpass) {
		if ( ! $simpleUserpass instanceof UserPassCred ) {
			$simpleUserpass = new UserPassCred ($simpleUserpass);
		}
	
		return $simpleUserpass;
	}

	public function getSimplePassport() {
		if ($this->simplePassport===NULL) {
			$this->simplePassport = $this->createSimplePassport();
		}
		return $this->simplePassport;
	}
	
	protected function createSimplePassport() {
		return new SimplePassportCredential();
	}

	public function setSimplePassport($simplePassport) {
		$this->simplePassport = $this->validateSimplePassport($simplePassport);
	}

	protected function validateSimplePassport($simplePassport) {
		if ( ! $simplePassport instanceof SimplePassportCredential ) {
			$simplePassport = new SimplePassportCredential ($simplePassport);
		}
	
		return $simplePassport;
	}

	public function getSimpleOpenid() {
		if ($this->simpleOpenid===NULL) {
			$this->simpleOpenid = $this->createSimpleOpenid();
		}
		return $this->simpleOpenid;
	}
	
	protected function createSimpleOpenid() {
		return new SimpleOpenIdCredential();
	}

	public function setSimpleOpenid($simpleOpenid) {
		$this->simpleOpenid = $this->validateSimpleOpenid($simpleOpenid);
	}

	protected function validateSimpleOpenid($simpleOpenid) {
		if ( ! $simpleOpenid instanceof SimpleOpenIdCredential ) {
			$simpleOpenid = new SimpleOpenIdCredential ($simpleOpenid);
		}
	
		return $simpleOpenid;
	}

	public function getSimpleFacebook() {
		if ($this->simpleFacebook===NULL) {
			$this->simpleFacebook = $this->createSimpleFacebook();
		}
		return $this->simpleFacebook;
	}
	
	protected function createSimpleFacebook() {
		return new SimpleFacebookCredential();
	}

	public function setSimpleFacebook($simpleFacebook) {
		$this->simpleFacebook = $this->validateSimpleFacebook($simpleFacebook);
	}

	protected function validateSimpleFacebook($simpleFacebook) {
		if ( ! $simpleFacebook instanceof SimpleFacebookCredential ) {
			$simpleFacebook = new SimpleFacebookCredential ($simpleFacebook);
		}
	
		return $simpleFacebook;
	}

	public function getSimpleEmergencyAccess() {
		if ($this->simpleEmergencyAccess===NULL) {
			$this->simpleEmergencyAccess = $this->createSimpleEmergencyAccess();
		}
		return $this->simpleEmergencyAccess;
	}
	
	protected function createSimpleEmergencyAccess() {
		return new SimpleEmergencyAccessCredential();
	}

	public function setSimpleEmergencyAccess($simpleEmergencyAccess) {
		$this->simpleEmergencyAccess = $this->validateSimpleEmergencyAccess($simpleEmergencyAccess);
	}

	protected function validateSimpleEmergencyAccess($simpleEmergencyAccess) {
		if ( ! $simpleEmergencyAccess instanceof SimpleEmergencyAccessCredential ) {
			$simpleEmergencyAccess = new SimpleEmergencyAccessCredential ($simpleEmergencyAccess);
		}
	
		return $simpleEmergencyAccess;
	}

	public function getSimplePhoneFactor() {
		if ($this->simplePhoneFactor===NULL) {
			$this->simplePhoneFactor = $this->createSimplePhoneFactor();
		}
		return $this->simplePhoneFactor;
	}
	
	protected function createSimplePhoneFactor() {
		return new SimplePhoneFactorCredential();
	}

	public function setSimplePhoneFactor($simplePhoneFactor) {
		$this->simplePhoneFactor = $this->validateSimplePhoneFactor($simplePhoneFactor);
	}

	protected function validateSimplePhoneFactor($simplePhoneFactor) {
		if ( ! $simplePhoneFactor instanceof SimplePhoneFactorCredential ) {
			$simplePhoneFactor = new SimplePhoneFactorCredential ($simplePhoneFactor);
		}
	
		return $simplePhoneFactor;
	}

	public function getIntegratedWindows() {
		if ($this->integratedWindows===NULL) {
			$this->integratedWindows = $this->createIntegratedWindows();
		}
		return $this->integratedWindows;
	}
	
	protected function createIntegratedWindows() {
		return new IntegratedWindowsCredential();
	}

	public function setIntegratedWindows($integratedWindows) {
		$this->integratedWindows = $this->validateIntegratedWindows($integratedWindows);
	}

	protected function validateIntegratedWindows($integratedWindows) {
		if ( ! $integratedWindows instanceof IntegratedWindowsCredential ) {
			$integratedWindows = new IntegratedWindowsCredential ($integratedWindows);
		}
	
		return $integratedWindows;
	}

	public function getCredentialMetadata() {
		if ($this->credentialMetadata===NULL) {
			$this->credentialMetadata = $this->createCredentialMetadata();
		}
		return $this->credentialMetadata;
	}
	
	protected function createCredentialMetadata() {
		return new Stringnz();
	}

	public function setCredentialMetadata($credentialMetadata) {
		$this->credentialMetadata = $this->validateCredentialMetadata($credentialMetadata);
	}

	protected function validateCredentialMetadata($credentialMetadata) {
		if ( ! $credentialMetadata instanceof Stringnz ) {
			$credentialMetadata = new Stringnz ($credentialMetadata);
		}
	
		return $credentialMetadata;
	}

	public function getCredentialName() {
		if ($this->credentialName===NULL) {
			$this->credentialName = $this->createCredentialName();
		}
		return $this->credentialName;
	}
	
	protected function createCredentialName() {
		return new String64();
	}

	public function setCredentialName($credentialName) {
		$this->credentialName = $this->validateCredentialName($credentialName);
	}

	protected function validateCredentialName($credentialName) {
		if ( ! $credentialName instanceof String64 ) {
			$credentialName = new String64 ($credentialName);
		}
	
		return $credentialName;
	}

	public function getDateCreated() {
		if ($this->dateCreated===NULL) {
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
		if (!is_string($dateCreated)) {
			throw new \Exception(sprintf('Supplied %s value was not %s', 'dateCreated', 'string'));
		}
	
		return $dateCreated;
	}

	public function getDateLastUsed() {
		if ($this->dateLastUsed===NULL) {
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
		if (!is_string($dateLastUsed)) {
			throw new \Exception(sprintf('Supplied %s value was not %s', 'dateLastUsed', 'string'));
		}
	
		return $dateLastUsed;
	}
} // end class AssociatedCredInfo
