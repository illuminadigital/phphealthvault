<?php
namespace org\w3\www\_2000\_09\xmldsig;



/**
 * @XmlNamespaces ({
 *	@XmlNamespace(url="http://www.w3.org/2000/09/xmldsig#", prefix="ds")
 * })
 * @XmlEntity	(xml="TransformType")
 */
class TransformType {
	/**
	 */

	/**
	 * @XmlText	(type="string", name="XPath")
	 */
	protected $xPath;

	/**
	 * @XmlAttribute	(type="string", name="Algorithm")
	 */
	protected $algorithm;

	public function __construct($xPath = NULL, $algorithm = NULL) {
		$this->xPath = ($xPath===NULL) ? NULL : $this->validateXPath($xPath);
		$this->algorithm = ($algorithm===NULL) ? NULL : $this->validateAlgorithm($algorithm);
	}

	public function getXPath() {
		if ($this->xPath===NULL) {
			$this->xPath = $this->createXPath();
		}
		return $this->xPath;
	}
	
	protected function createXPath() {
		return '';
	}

	public function setXPath($xPath) {
		$this->xPath = $this->validateXPath($xPath);
	}

	protected function validateXPath($xPath) {
		if (!is_string($xPath)) {
			throw new \Exception(sprintf('Supplied %s value was not %s', 'xPath', 'string'));
		}
	
		return $xPath;
	}

	public function getAlgorithm() {
		if ($this->algorithm===NULL) {
			$this->algorithm = $this->createAlgorithm();
		}
		return $this->algorithm;
	}
	
	protected function createAlgorithm() {
		return NULL;
	}

	public function setAlgorithm($algorithm) {
		$this->algorithm = $this->validateAlgorithm($algorithm);
	}

	protected function validateAlgorithm($algorithm) {
		if (!is_string($algorithm)) {
			throw new \Exception(sprintf('Supplied %s value was not %s', 'algorithm', 'string'));
		}
	
		return $algorithm;
	}
} // end class TransformType
