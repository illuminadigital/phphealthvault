<?php
namespace com\microsoft\wc\methods\UpdateExternalId;

use com\microsoft\wc\types\Stringnz;

/**
 * @XmlEntity	(xml="info")
 */
class Info extends \com\microsoft\wc\request\Info {
	/**
	 * The element of the request that contains the method specific parameters.
	 * All requests contain the info element to pass parameters that are specific to each method. If the method does not define an info element, the method does not take any parameters.
	 */

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

	public function getIdentityCode() {
		if ($this->identityCode===NULL) {
			$this->identityCode = $this->createIdentityCode();
		}
		return $this->identityCode;
	}
	
	protected function createIdentityCode() {
		return new Stringnz();
	}

	public function setIdentityCode($identityCode) {
		$this->identityCode = $this->validateIdentityCode($identityCode);
	}

	protected function validateIdentityCode($identityCode) {
		if ( ! $identityCode instanceof Stringnz ) {
			$identityCode = new Stringnz ($identityCode);
		}
	
		return $identityCode;
	}

	public function getOldExternalId() {
		if ($this->oldExternalId===NULL) {
			$this->oldExternalId = $this->createOldExternalId();
		}
		return $this->oldExternalId;
	}
	
	protected function createOldExternalId() {
		return new Stringnz();
	}

	public function setOldExternalId($oldExternalId) {
		$this->oldExternalId = $this->validateOldExternalId($oldExternalId);
	}

	protected function validateOldExternalId($oldExternalId) {
		if ( ! $oldExternalId instanceof Stringnz ) {
			$oldExternalId = new Stringnz ($oldExternalId);
		}
	
		return $oldExternalId;
	}

	public function getNewExternalId() {
		if ($this->newExternalId===NULL) {
			$this->newExternalId = $this->createNewExternalId();
		}
		return $this->newExternalId;
	}
	
	protected function createNewExternalId() {
		return new Stringnz();
	}

	public function setNewExternalId($newExternalId) {
		$this->newExternalId = $this->validateNewExternalId($newExternalId);
	}

	protected function validateNewExternalId($newExternalId) {
		if ( ! $newExternalId instanceof Stringnz ) {
			$newExternalId = new Stringnz ($newExternalId);
		}
	
		return $newExternalId;
	}
} // end class Info
