<?php
namespace com\microsoft\wc\methods\DeletePendingConnectPackage;



/**
 * @XmlNamespaces ({
 *	@XmlNamespace(url="urn:com.microsoft.wc.methods.DeletePendingConnectPackage", prefix="")
 * })
 * @XmlEntity	(xml="info")
 */
class Info extends \com\microsoft\wc\request\Info {
	/**
	 * The element of the request that contains the method specific parameters.
	 * All requests contain the info element to pass parameters that are specific to each method. If the method does not define an info element, the method does not take any parameters.
	 */

	/**
	 * List of manually overridden properties that should not be re-generated automatically
	 * @var array
	 */
	protected $_overrides = array();


	/**
	 * @XmlElement	(type="\com\microsoft\wc\types\Stringnz", name="identity-code")
	 */
	protected $identityCode;

	/**
	 * @XmlElement	(type="\com\microsoft\wc\types\Stringnz", name="external-id")
	 */
	protected $externalId;

	public function __construct($identityCode = NULL, $externalId = NULL) {
		$this->identityCode = ($identityCode===NULL) ? NULL : $this->validateIdentityCode($identityCode);
		$this->externalId = ($externalId===NULL) ? NULL : $this->validateExternalId($externalId);
	}

	public function getIdentityCode($autoCreate = TRUE) {
		if ($this->identityCode===NULL && $autoCreate && ! isset($this->_overrides['identityCode']) ) {
			$this->identityCode = $this->createIdentityCode();
		}
		return $this->identityCode;
	}
	
	protected function createIdentityCode() {
		return new \com\microsoft\wc\types\Stringnz();
	}

	public function setIdentityCode($identityCode) {
		$this->identityCode = $this->validateIdentityCode($identityCode);
	}

	protected function validateIdentityCode($identityCode) {
		if ( ! $identityCode instanceof \com\microsoft\wc\types\Stringnz ) {
			$identityCode = new \com\microsoft\wc\types\Stringnz ($identityCode);
		}
	
		return $identityCode;
	}

	public function getExternalId($autoCreate = TRUE) {
		if ($this->externalId===NULL && $autoCreate && ! isset($this->_overrides['externalId']) ) {
			$this->externalId = $this->createExternalId();
		}
		return $this->externalId;
	}
	
	protected function createExternalId() {
		return new \com\microsoft\wc\types\Stringnz();
	}

	public function setExternalId($externalId) {
		$this->externalId = $this->validateExternalId($externalId);
	}

	protected function validateExternalId($externalId) {
		if ( ! $externalId instanceof \com\microsoft\wc\types\Stringnz ) {
			$externalId = new \com\microsoft\wc\types\Stringnz ($externalId);
		}
	
		return $externalId;
	}
} // end class Info
