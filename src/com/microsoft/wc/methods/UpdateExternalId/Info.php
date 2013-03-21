<?php
namespace com\microsoft\wc\methods\UpdateExternalId;



/**
 * @XmlNamespaces ({
 *	@XmlNamespace(url="urn:com.microsoft.wc.methods.UpdateExternalId", prefix="")
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
	 * @XmlElement	(type="\com\microsoft\wc\types\Stringnz", name="old-external-id")
	 */
	protected $oldExternalId;

	/**
	 * @XmlElement	(type="\com\microsoft\wc\types\Stringnz", name="new-external-id")
	 */
	protected $newExternalId;

	public function __construct($identityCode = NULL, $oldExternalId = NULL, $newExternalId = NULL) {
		$this->identityCode = ($identityCode===NULL) ? NULL : $this->validateIdentityCode($identityCode);
		$this->oldExternalId = ($oldExternalId===NULL) ? NULL : $this->validateOldExternalId($oldExternalId);
		$this->newExternalId = ($newExternalId===NULL) ? NULL : $this->validateNewExternalId($newExternalId);
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

	public function getOldExternalId($autoCreate = TRUE) {
		if ($this->oldExternalId===NULL && $autoCreate && ! isset($this->_overrides['oldExternalId']) ) {
			$this->oldExternalId = $this->createOldExternalId();
		}
		return $this->oldExternalId;
	}
	
	protected function createOldExternalId() {
		return new \com\microsoft\wc\types\Stringnz();
	}

	public function setOldExternalId($oldExternalId) {
		$this->oldExternalId = $this->validateOldExternalId($oldExternalId);
	}

	protected function validateOldExternalId($oldExternalId) {
		if ( ! $oldExternalId instanceof \com\microsoft\wc\types\Stringnz ) {
			$oldExternalId = new \com\microsoft\wc\types\Stringnz ($oldExternalId);
		}
	
		return $oldExternalId;
	}

	public function getNewExternalId($autoCreate = TRUE) {
		if ($this->newExternalId===NULL && $autoCreate && ! isset($this->_overrides['newExternalId']) ) {
			$this->newExternalId = $this->createNewExternalId();
		}
		return $this->newExternalId;
	}
	
	protected function createNewExternalId() {
		return new \com\microsoft\wc\types\Stringnz();
	}

	public function setNewExternalId($newExternalId) {
		$this->newExternalId = $this->validateNewExternalId($newExternalId);
	}

	protected function validateNewExternalId($newExternalId) {
		if ( ! $newExternalId instanceof \com\microsoft\wc\types\Stringnz ) {
			$newExternalId = new \com\microsoft\wc\types\Stringnz ($newExternalId);
		}
	
		return $newExternalId;
	}
} // end class Info
