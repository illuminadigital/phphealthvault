<?php
namespace com\microsoft\wc\thing;

use com\microsoft\wc\thing\SignatureData;
use com\microsoft\wc\thing\Signature;

/**
 * @XmlEntity	(xml="SignatureInfo")
 */
class SignatureInfo {
	/**
	 */

	/**
	 * @XmlElement	(type="\com\microsoft\wc\thing\SignatureData", name="sig-data")
	 */
	protected $sigData;

	/**
	 * @XmlElement	(type="\org\w3\www\_2000\_09\xmldsig#\Signature", name="Signature")
	 */
	protected $signature;

	public function __construct($sigData = NULL, $signature = NULL) {
		$this->sigData = ($sigData===NULL) ? NULL : $this->validateSigData($sigData);
		$this->signature = ($signature===NULL) ? NULL : $this->validateSignature($signature);
	}

	public function getSigData() {
		if ($this->sigData===NULL) {
			$this->sigData = $this->createSigData();
		}
		return $this->sigData;
	}
	
	protected function createSigData() {
		return new SignatureData();
	}

	public function setSigData($sigData) {
		$this->sigData = $this->validateSigData($sigData);
	}

	protected function validateSigData($sigData) {
		if ( ! $sigData instanceof SignatureData ) {
			$sigData = new SignatureData ($sigData);
		}
	
		return $sigData;
	}

	public function getSignature() {
		if ($this->signature===NULL) {
			$this->signature = $this->createSignature();
		}
		return $this->signature;
	}
	
	protected function createSignature() {
		return new Signature();
	}

	public function setSignature($signature) {
		$this->signature = $this->validateSignature($signature);
	}

	protected function validateSignature($signature) {
		if ( ! $signature instanceof Signature  && ! is_null($signature) ) {
			$signature = new Signature ($signature);
		}
	
		return $signature;
	}
} // end class SignatureInfo
