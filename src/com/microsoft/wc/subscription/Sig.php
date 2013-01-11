<?php
namespace com\microsoft\wc\subscription;

use com\microsoft\wc\subscription\String16;


/**
 * @XmlEntity	(xml="Sig")
 */
class Sig extends String1024 {
	/**
	 * A digital signature produced by an application to prove possession of a private key.
	 * Each application server has at least one public key associated to its application identifier. Microsoft HealthVault verifies the signature using the public key specified via the thumbprint.
	 */

	/**
	 * @XmlAttribute	(type="string", name="digestMethod")
	 */
	protected $digestMethod;

	/**
	 * @XmlAttribute	(type="string", name="sigMethod")
	 */
	protected $sigMethod;

	/**
	 * @XmlAttribute	(type="string", name="thumbprint")
	 */
	protected $thumbprint;

	public function __construct($digestMethod = NULL, $sigMethod = NULL, $thumbprint = NULL) {
		$this->digestMethod = ($digestMethod===NULL) ? NULL : $this->validateDigestMethod($digestMethod);
		$this->sigMethod = ($sigMethod===NULL) ? NULL : $this->validateSigMethod($sigMethod);
		$this->thumbprint = ($thumbprint===NULL) ? NULL : $this->validateThumbprint($thumbprint);
	}

	public function getDigestMethod() {
		if ($this->digestMethod===NULL) {
			$this->digestMethod = $this->createDigestMethod();
		}
		return $this->digestMethod;
	}
	
	protected function createDigestMethod() {
		return new String16();
	}

	public function setDigestMethod($digestMethod) {
		$this->digestMethod = $this->validateDigestMethod($digestMethod);
	}

	protected function validateDigestMethod($digestMethod) {
		if ( ! $digestMethod instanceof String16 ) {
			$digestMethod = new String16 ($digestMethod);
		}
	
		return $digestMethod;
	}

	public function getSigMethod() {
		if ($this->sigMethod===NULL) {
			$this->sigMethod = $this->createSigMethod();
		}
		return $this->sigMethod;
	}
	
	protected function createSigMethod() {
		return new String16();
	}

	public function setSigMethod($sigMethod) {
		$this->sigMethod = $this->validateSigMethod($sigMethod);
	}

	protected function validateSigMethod($sigMethod) {
		if ( ! $sigMethod instanceof String16 ) {
			$sigMethod = new String16 ($sigMethod);
		}
	
		return $sigMethod;
	}

	public function getThumbprint() {
		if ($this->thumbprint===NULL) {
			$this->thumbprint = $this->createThumbprint();
		}
		return $this->thumbprint;
	}
	
	protected function createThumbprint() {
		return '';
	}

	public function setThumbprint($thumbprint) {
		$this->thumbprint = $this->validateThumbprint($thumbprint);
	}

	protected function validateThumbprint($thumbprint) {
		if (!is_string($thumbprint)) {
			throw new \Exception(sprintf('Supplied %s value was not %s', 'thumbprint', 'string'));
		}
	
		return $thumbprint;
	}
} // end class Sig
