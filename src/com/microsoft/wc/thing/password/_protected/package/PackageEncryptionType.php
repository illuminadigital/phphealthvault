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

	public function getAlgorithmName() {
		if ($this->algorithmName===NULL) {
			$this->algorithmName = $this->createAlgorithmName();
		}
		return $this->algorithmName;
	}
	
	protected function createAlgorithmName() {
		return new \com\microsoft\wc\thing\password\_protected\package\AlgorithmName();
	}

	public function setAlgorithmName($algorithmName) {
		$this->algorithmName = $this->validateAlgorithmName($algorithmName);
	}

	protected function validateAlgorithmName($algorithmName) {
		if ( ! $algorithmName instanceof \com\microsoft\wc\thing\password\_protected\package\AlgorithmName ) {
			$algorithmName = new \com\microsoft\wc\thing\password\_protected\package\AlgorithmName ($algorithmName);
		}
	
		return $algorithmName;
	}

	public function getParameters() {
		if ($this->parameters===NULL) {
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
		if ( ! $parameters instanceof \com\microsoft\wc\thing\password\_protected\package\PbeParametersType  && ! is_null($parameters) ) {
			$parameters = new \com\microsoft\wc\thing\password\_protected\package\PbeParametersType ($parameters);
		}
	
		return $parameters;
	}
} // end class PackageEncryptionType
