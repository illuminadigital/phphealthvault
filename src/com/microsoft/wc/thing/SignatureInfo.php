<?php
namespace com\microsoft\wc\thing;



/**
 * @XmlNamespaces ({
 *	@XmlNamespace(url="urn:com.microsoft.wc.thing", prefix="wc-thing")
 * })
 * @XmlEntity	(xml="SignatureInfo")
 */
class SignatureInfo {
	/**
	 */

	/**
	 * List of manually overridden properties that should not be re-generated automatically
	 * @var array
	 */
	protected $_overrides = array();


	/**
	 * @XmlElement	(type="\com\microsoft\wc\thing\SignatureData", name="sig-data")
	 */
	protected $sigData;

	/**
	 * @XmlElement	(type="\org\w3\www\_2000\_09\xmldsig\Signature", name="Signature")
	 */
	protected $signature;

	public function __construct($sigData = NULL, $signature = NULL) {
		$this->sigData = ($sigData===NULL) ? NULL : $this->validateSigData($sigData);
		$this->signature = ($signature===NULL) ? NULL : $this->validateSignature($signature);
	}

	public function getSigData($autoCreate = TRUE) {
		if ($this->sigData===NULL && $autoCreate && ! isset($this->_overrides['sigData']) ) {
			$this->sigData = $this->createSigData();
		}
		return $this->sigData;
	}
	
	protected function createSigData() {
		return new \com\microsoft\wc\thing\SignatureData();
	}

	public function setSigData($sigData) {
		$this->sigData = $this->validateSigData($sigData);
	}

	protected function validateSigData($sigData) {
		if ( ! $sigData instanceof \com\microsoft\wc\thing\SignatureData ) {
			$sigData = new \com\microsoft\wc\thing\SignatureData ($sigData);
		}
	
		return $sigData;
	}

	public function getSignature($autoCreate = TRUE) {
		if ($this->signature===NULL && $autoCreate && ! isset($this->_overrides['signature']) ) {
			$this->signature = $this->createSignature();
		}
		return $this->signature;
	}
	
	protected function createSignature() {
		return NULL;
	}

	public function setSignature($signature) {
		$this->signature = $this->validateSignature($signature);
	}

	protected function validateSignature($signature) {
		if ( ! is_Signature($signature) && ! is_null($signature) ) {
			throw new \Exception(sprintf('Supplied %s value was not %s', 'signature', 'Signature'));
		}
	
		return $signature;
	}
} // end class SignatureInfo
