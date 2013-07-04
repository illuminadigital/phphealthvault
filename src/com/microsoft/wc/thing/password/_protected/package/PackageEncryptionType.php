<?php
namespace com\microsoft\wc\thing\password\_protected\package;



/**
 * @XmlNamespaces ({
 *	@XmlNamespace(url="urn:com.microsoft.wc.thing.password.protected.package", prefix="")
 * })
 * @XmlEntity	(xml="PackageEncryptionType")
 */
class PackageEncryptionType {
	/**
	 */

	/**
	 * List of manually overridden properties that should not be re-generated automatically
	 * @var array
	 */
	protected $_overrides = array();


	/**
	 * @XmlElement	(type="\com\microsoft\wc\thing\password\_protected\package\AlgorithmName", name="algorithm-name")
	 */
	protected $algorithmName;

	/**
	 * @XmlElement	(type="\com\microsoft\wc\thing\password\_protected\package\PbeParametersType", name="parameters")
	 */
	protected $parameters;

	public function __construct($algorithmName = NULL, $parameters = NULL) {
		$this->algorithmName = ($algorithmName===NULL) ? NULL : $this->validateAlgorithmName($algorithmName);
		$this->parameters = ($parameters===NULL) ? NULL : $this->validateParameters($parameters);
	}

	public function getAlgorithmName($autoCreate = TRUE) {
		if ($this->algorithmName===NULL && $autoCreate && ! isset($this->_overrides['algorithmName']) ) {
			$this->algorithmName = $this->createAlgorithmName();
		}
		return $this->algorithmName;
	}
	
	protected function createAlgorithmName() {
		return NULL;
	}

	public function setAlgorithmName($algorithmName) {
		$this->algorithmName = $this->validateAlgorithmName($algorithmName);
	}

	protected function validateAlgorithmName($algorithmName) {
	
		return $algorithmName;
	}

	public function getParameters($autoCreate = TRUE) {
		if ($this->parameters===NULL && $autoCreate && ! isset($this->_overrides['parameters']) ) {
			$this->parameters = $this->createParameters();
		}
		return $this->parameters;
	}
	
	protected function createParameters() {
		return new \com\microsoft\wc\thing\password\_protected\package\PbeParametersType();
	}

	public function setParameters($parameters) {
		$this->parameters = $this->validateParameters($parameters);
	}

	protected function validateParameters($parameters) {
		if ( $parameters === FALSE ) {
			$this->_overrides['parameters'] = TRUE;
			return NULL;
		}

		if ( ! $parameters instanceof \com\microsoft\wc\thing\password\_protected\package\PbeParametersType  && ! is_null($parameters) ) {
			$parameters = new \com\microsoft\wc\thing\password\_protected\package\PbeParametersType ($parameters);
		}

		unset ($this->_overrides['parameters']);
	
		return $parameters;
	}
} // end class PackageEncryptionType
