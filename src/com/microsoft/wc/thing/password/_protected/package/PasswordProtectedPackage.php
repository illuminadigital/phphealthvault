<?php
namespace com\microsoft\wc\thing\password\_protected\package;



/**
 * @XmlNamespaces ({
 *	@XmlNamespace(url="urn:com.microsoft.wc.thing.password.protected.package", prefix="")
 * })
 * @XmlEntity	(xml="password-protected-package")
 */
class PasswordProtectedPackage extends \com\microsoft\wc\thing\AnyMixed {
	/**
	 * Defines the schema for a package that can contain a password encrypted blob.
	 */

	const ID = 'c9287326-bb43-4194-858c-8b60768f000f';
	const NAME = 'Password Protected Package';

	/**
	 * List of manually overridden properties that should not be re-generated automatically
	 * @var array
	 */
	protected $_overrides = array();


	/**
	 * @XmlElement	(type="\com\microsoft\wc\thing\password\_protected\package\PackageEncryptionType", name="encrypt-algorithm")
	 */
	protected $encryptAlgorithm;

	public function __construct($encryptAlgorithm = NULL) {
		$this->encryptAlgorithm = ($encryptAlgorithm===NULL) ? NULL : $this->validateEncryptAlgorithm($encryptAlgorithm);
	}

	public function getEncryptAlgorithm($autoCreate = TRUE) {
		if ($this->encryptAlgorithm===NULL && $autoCreate && ! isset($this->_overrides['encryptAlgorithm']) ) {
			$this->encryptAlgorithm = $this->createEncryptAlgorithm();
		}
		return $this->encryptAlgorithm;
	}
	
	protected function createEncryptAlgorithm() {
		return new \com\microsoft\wc\thing\password\_protected\package\PackageEncryptionType();
	}

	public function setEncryptAlgorithm($encryptAlgorithm) {
		$this->encryptAlgorithm = $this->validateEncryptAlgorithm($encryptAlgorithm);
	}

	protected function validateEncryptAlgorithm($encryptAlgorithm) {
		if ( ! $encryptAlgorithm instanceof \com\microsoft\wc\thing\password\_protected\package\PackageEncryptionType ) {
			$encryptAlgorithm = new \com\microsoft\wc\thing\password\_protected\package\PackageEncryptionType ($encryptAlgorithm);
		}
	
		return $encryptAlgorithm;
	}
} // end class PasswordProtectedPackage
