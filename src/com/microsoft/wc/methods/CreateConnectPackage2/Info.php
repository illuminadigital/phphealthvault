<?php
namespace com\microsoft\wc\methods\CreateConnectPackage2;



/**
 * @XmlEntity	(xml="info")
 */
class Info extends \com\microsoft\wc\request\Info {
	/**
	 * The element of the request that contains the method specific parameters.
	 * All requests contain the info element to pass parameters that are specific to each method. If the method does not define an info element, the method does not take any parameters.
	 */

	/**
	 * @XmlText	(type="string", name="identity-code")
	 */
	protected $identityCode;

	/**
	 * @XmlElement	(type="\com\microsoft\wc\types\Stringnz", name="friendly-name")
	 */
	protected $friendlyName;

	/**
	 * @XmlElement	(type="\com\microsoft\wc\types\Stringnz", name="question")
	 */
	protected $question;

	/**
	 * @XmlElement	(type="\com\microsoft\wc\types\Stringnz", name="external-id")
	 */
	protected $externalId;

	/**
	 * @XmlElement	(type="\com\microsoft\wc\thing\Thing2", name="package")
	 */
	protected $package;

	/**
	 * @XmlElement	(type="\com\microsoft\wc\methods\CreateConnectPackage2\StreamedPackageBlobs", name="streamed-package-blobs")
	 */
	protected $streamedPackageBlobs;

	public function __construct($identityCode = NULL, $friendlyName = NULL, $question = NULL, $externalId = NULL, $package = NULL, $streamedPackageBlobs = NULL) {
		$this->identityCode = ($identityCode===NULL) ? NULL : $this->validateIdentityCode($identityCode);
		$this->friendlyName = ($friendlyName===NULL) ? NULL : $this->validateFriendlyName($friendlyName);
		$this->question = ($question===NULL) ? NULL : $this->validateQuestion($question);
		$this->externalId = ($externalId===NULL) ? NULL : $this->validateExternalId($externalId);
		$this->package = ($package===NULL) ? NULL : $this->validatePackage($package);
		$this->streamedPackageBlobs = ($streamedPackageBlobs===NULL) ? NULL : $this->validateStreamedPackageBlobs($streamedPackageBlobs);
	}

	public function getIdentityCode() {
		if ($this->identityCode===NULL) {
			$this->identityCode = $this->createIdentityCode();
		}
		return $this->identityCode;
	}
	
	protected function createIdentityCode() {
		return '';
	}

	public function setIdentityCode($identityCode) {
		$this->identityCode = $this->validateIdentityCode($identityCode);
	}

	protected function validateIdentityCode($identityCode) {
		if ( ! is_string($identityCode) && ! is_null($identityCode) ) {
			throw new \Exception(sprintf('Supplied %s value was not %s', 'identityCode', 'string'));
		}
	
		return $identityCode;
	}

	public function getFriendlyName() {
		if ($this->friendlyName===NULL) {
			$this->friendlyName = $this->createFriendlyName();
		}
		return $this->friendlyName;
	}
	
	protected function createFriendlyName() {
		return new \com\microsoft\wc\types\Stringnz();
	}

	public function setFriendlyName($friendlyName) {
		$this->friendlyName = $this->validateFriendlyName($friendlyName);
	}

	protected function validateFriendlyName($friendlyName) {
		if ( ! $friendlyName instanceof \com\microsoft\wc\types\Stringnz ) {
			$friendlyName = new \com\microsoft\wc\types\Stringnz ($friendlyName);
		}
	
		return $friendlyName;
	}

	public function getQuestion() {
		if ($this->question===NULL) {
			$this->question = $this->createQuestion();
		}
		return $this->question;
	}
	
	protected function createQuestion() {
		return new \com\microsoft\wc\types\Stringnz();
	}

	public function setQuestion($question) {
		$this->question = $this->validateQuestion($question);
	}

	protected function validateQuestion($question) {
		if ( ! $question instanceof \com\microsoft\wc\types\Stringnz ) {
			$question = new \com\microsoft\wc\types\Stringnz ($question);
		}
	
		return $question;
	}

	public function getExternalId() {
		if ($this->externalId===NULL) {
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

	public function getPackage() {
		if ($this->package===NULL) {
			$this->package = $this->createPackage();
		}
		return $this->package;
	}
	
	protected function createPackage() {
		return new \com\microsoft\wc\thing\Thing2();
	}

	public function setPackage($package) {
		$this->package = $this->validatePackage($package);
	}

	protected function validatePackage($package) {
		if ( ! $package instanceof \com\microsoft\wc\thing\Thing2 ) {
			$package = new \com\microsoft\wc\thing\Thing2 ($package);
		}
	
		return $package;
	}

	public function getStreamedPackageBlobs() {
		if ($this->streamedPackageBlobs===NULL) {
			$this->streamedPackageBlobs = $this->createStreamedPackageBlobs();
		}
		return $this->streamedPackageBlobs;
	}
	
	protected function createStreamedPackageBlobs() {
		return new \com\microsoft\wc\methods\CreateConnectPackage2\StreamedPackageBlobs();
	}

	public function setStreamedPackageBlobs($streamedPackageBlobs) {
		$this->streamedPackageBlobs = $this->validateStreamedPackageBlobs($streamedPackageBlobs);
	}

	protected function validateStreamedPackageBlobs($streamedPackageBlobs) {
		if ( ! $streamedPackageBlobs instanceof \com\microsoft\wc\methods\CreateConnectPackage2\StreamedPackageBlobs  && ! is_null($streamedPackageBlobs) ) {
			$streamedPackageBlobs = new \com\microsoft\wc\methods\CreateConnectPackage2\StreamedPackageBlobs ($streamedPackageBlobs);
		}
	
		return $streamedPackageBlobs;
	}
} // end class Info
