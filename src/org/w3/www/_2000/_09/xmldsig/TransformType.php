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
	 * List of manually overridden properties that should not be re-generated automatically
	 * @var array
	 */
	protected $_overrides = array();


	/**
	 * @XmlElement	(type="\org\w3\www\_2000\_09\xmldsig\AnyMixed", collection="true", name="*")
	 */
	protected $any;

	/**
	 * @XmlText	(type="string", collection="true", name="XPath")
	 */
	protected $xPath;

	/**
	 * @XmlAttribute	(type="string", name="Algorithm")
	 */
	protected $algorithm;

	public function __construct($any = NULL, $xPath = NULL, $algorithm = NULL) {
		$this->any = ($any===NULL) ? NULL : $this->validateAny($any);
		$this->xPath = ($xPath===NULL) ? NULL : $this->validateXPath($xPath);
		$this->algorithm = ($algorithm===NULL) ? NULL : $this->validateAlgorithm($algorithm);
	}

	public function getAny($autoCreate = TRUE) {
		if ($this->any===NULL && $autoCreate && ! isset($this->_overrides['any']) ) {
			$this->any = $this->createAny();
		}
		return $this->any;
	}
	
	protected function createAny() {
		return array();
	}

	public function setAny($any) {
		$this->any = $this->validateAny($any);
	}

	protected function validateAny($any) {
		$count = count($any);
		if ($count < 0) {
			throw new \Exception(sprintf('Supplied %s array has less than the required number (%d) of entries.', 'any', 0));
		}
		if ( ! empty($any) ) {
			foreach ($any as $entry) {
				if ( ! is_object($entry) && ! is_null($entry) ) {
					throw new \Exception(sprintf('Supplied %s value was not %s', 'any', 'AnyMixed'));
				}
			}
		}
	
		return $any;
	}

	public function addAny($any) {
		$this->any[] = $this->validateAnyType($any);
	}

	protected function validateAnyType($any) {
		if ( ! is_object($any) && ! is_null($any) ) {
			throw new \Exception(sprintf('Supplied %s value was not %s', 'any', 'AnyMixed'));
		}
	
		return $any;
	}

	public function getXPath($autoCreate = TRUE) {
		if ($this->xPath===NULL && $autoCreate && ! isset($this->_overrides['xPath']) ) {
			$this->xPath = $this->createXPath();
		}
		return $this->xPath;
	}
	
	protected function createXPath() {
		return array();
	}

	public function setXPath($xPath) {
		$this->xPath = $this->validateXPath($xPath);
	}

	protected function validateXPath($xPath) {
		$count = count($xPath);
		if ($count < 0) {
			throw new \Exception(sprintf('Supplied %s array has less than the required number (%d) of entries.', 'xPath', 0));
		}
		if ( ! empty($xPath) ) {
			foreach ($xPath as $entry) {
				if ( ! is_string($entry) && ! is_null($entry) ) {
					throw new \Exception(sprintf('Supplied %s value was not %s', 'xPath', 'string'));
				}
			}
		}
	
		return $xPath;
	}

	public function addXPath($xPath) {
		$this->xPath[] = $this->validateXPathType($xPath);
	}

	protected function validateXPathType($xPath) {
		if ( ! is_string($xPath) && ! is_null($xPath) ) {
			throw new \Exception(sprintf('Supplied %s value was not %s', 'xPath', 'string'));
		}
	
		return $xPath;
	}

	public function getAlgorithm($autoCreate = TRUE) {
		if ($this->algorithm===NULL && $autoCreate && ! isset($this->_overrides['algorithm']) ) {
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
