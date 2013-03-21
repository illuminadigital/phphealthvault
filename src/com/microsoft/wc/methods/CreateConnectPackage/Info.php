<?php
namespace com\microsoft\wc\methods\CreateConnectPackage;



/**
 * @XmlNamespaces ({
 *	@XmlNamespace(url="urn:com.microsoft.wc.methods.CreateConnectPackage", prefix="")
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
	 * @XmlElement	(type="\com\microsoft\wc\thing\Thing", name="package")
	 */
	protected $package;

	public function __construct($identityCode = NULL, $friendlyName = NULL, $question = NULL, $externalId = NULL, $package = NULL) {
		$this->identityCode = ($identityCode===NULL) ? NULL : $this->validateIdentityCode($identityCode);
		$this->friendlyName = ($friendlyName===NULL) ? NULL : $this->validateFriendlyName($friendlyName);
		$this->question = ($question===NULL) ? NULL : $this->validateQuestion($question);
		$this->externalId = ($externalId===NULL) ? NULL : $this->validateExternalId($externalId);
		$this->package = ($package===NULL) ? NULL : $this->validatePackage($package);
	}

	public function getIdentityCode($autoCreate = TRUE) {
		if ($this->identityCode===NULL && $autoCreate && ! isset($this->_overrides['identityCode']) ) {
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

	public function getFriendlyName($autoCreate = TRUE) {
		if ($this->friendlyName===NULL && $autoCreate && ! isset($this->_overrides['friendlyName']) ) {
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

	public function getQuestion($autoCreate = TRUE) {
		if ($this->question===NULL && $autoCreate && ! isset($this->_overrides['question']) ) {
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

	public function getPackage($autoCreate = TRUE) {
		if ($this->package===NULL && $autoCreate && ! isset($this->_overrides['package']) ) {
			$this->package = $this->createPackage();
		}
		return $this->package;
	}
	
	protected function createPackage() {
		return new \com\microsoft\wc\thing\Thing();
	}

	public function setPackage($package) {
		$this->package = $this->validatePackage($package);
	}

	protected function validatePackage($package) {
		if ( ! $package instanceof \com\microsoft\wc\thing\Thing ) {
			$package = new \com\microsoft\wc\thing\Thing ($package);
		}
	
		return $package;
	}
} // end class Info
