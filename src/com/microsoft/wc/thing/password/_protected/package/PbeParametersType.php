<?php
namespace com\microsoft\wc\thing\password\_protected\package;



/**
 * @XmlNamespaces ({
 *	@XmlNamespace(url="urn:com.microsoft.wc.thing.password.protected.package", prefix="")
 * })
 * @XmlEntity	(xml="PbeParametersType")
 */
class PbeParametersType {
	/**
	 */

	/**
	 * List of manually overridden properties that should not be re-generated automatically
	 * @var array
	 */
	protected $_overrides = array();


	/**
	 * @XmlText	(type="string", name="salt")
	 */
	protected $salt;

	/**
	 * @XmlText	(type="integer", name="iteration-count")
	 */
	protected $iterationCount;

	/**
	 * @XmlText	(type="integer", name="key-length")
	 */
	protected $keyLength;

	public function __construct($salt = NULL, $iterationCount = NULL, $keyLength = NULL) {
		$this->salt = ($salt===NULL) ? NULL : $this->validateSalt($salt);
		$this->iterationCount = ($iterationCount===NULL) ? NULL : $this->validateIterationCount($iterationCount);
		$this->keyLength = ($keyLength===NULL) ? NULL : $this->validateKeyLength($keyLength);
	}

	public function getSalt($autoCreate = TRUE) {
		if ($this->salt===NULL && $autoCreate && ! isset($this->_overrides['salt']) ) {
			$this->salt = $this->createSalt();
		}
		return $this->salt;
	}
	
	protected function createSalt() {
		return '';
	}

	public function setSalt($salt) {
		$this->salt = $this->validateSalt($salt);
	}

	protected function validateSalt($salt) {
		if (!is_string($salt)) {
			throw new \Exception(sprintf('Supplied %s value was not %s', 'salt', 'string'));
		}
	
		return $salt;
	}

	public function getIterationCount($autoCreate = TRUE) {
		if ($this->iterationCount===NULL && $autoCreate && ! isset($this->_overrides['iterationCount']) ) {
			$this->iterationCount = $this->createIterationCount();
		}
		return $this->iterationCount;
	}
	
	protected function createIterationCount() {
		return 0;
	}

	public function setIterationCount($iterationCount) {
		$this->iterationCount = $this->validateIterationCount($iterationCount);
	}

	protected function validateIterationCount($iterationCount) {
		$isValid = FALSE;
		if ( is_integer($iterationCount) ) {
			$isValid = TRUE;
		}
		else if ( $iterationCount == ($castVar = (integer) $iterationCount) ) {
			$isValid = TRUE;
			$iterationCount = $castVar;
		}
		if ( ! $isValid ) {
			throw new \Exception(sprintf('Supplied %s value was not %s', 'iterationCount', 'integer'));
		}
	
		return $iterationCount;
	}

	public function getKeyLength($autoCreate = TRUE) {
		if ($this->keyLength===NULL && $autoCreate && ! isset($this->_overrides['keyLength']) ) {
			$this->keyLength = $this->createKeyLength();
		}
		return $this->keyLength;
	}
	
	protected function createKeyLength() {
		return 0;
	}

	public function setKeyLength($keyLength) {
		$this->keyLength = $this->validateKeyLength($keyLength);
	}

	protected function validateKeyLength($keyLength) {
		$isValid = FALSE;
		if ( is_integer($keyLength) ) {
			$isValid = TRUE;
		}
		else if ( $keyLength == ($castVar = (integer) $keyLength) ) {
			$isValid = TRUE;
			$keyLength = $castVar;
		}
		if ( ! $isValid ) {
			throw new \Exception(sprintf('Supplied %s value was not %s', 'keyLength', 'integer'));
		}
	
		return $keyLength;
	}
} // end class PbeParametersType
