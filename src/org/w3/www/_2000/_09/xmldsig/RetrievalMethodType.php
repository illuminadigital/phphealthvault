<?php
namespace org\w3\www\_2000\_09\xmldsig;



/**
 * @XmlNamespaces ({
 *	@XmlNamespace(url="http://www.w3.org/2000/09/xmldsig#", prefix="ds")
 * })
 * @XmlEntity	(xml="RetrievalMethodType")
 */
class RetrievalMethodType {
	/**
	 */

	/**
	 * List of manually overridden properties that should not be re-generated automatically
	 * @var array
	 */
	protected $_overrides = array();


	/**
	 * @XmlElement	(type="\org\w3\www\_2000\_09\xmldsig\Transforms", name="Transforms")
	 */
	protected $transforms;

	/**
	 * @XmlAttribute	(type="string", name="URI")
	 */
	protected $uRI;

	/**
	 * @XmlAttribute	(type="string", name="Type")
	 */
	protected $type;

	public function __construct($transforms = NULL, $uRI = NULL, $type = NULL) {
		$this->transforms = ($transforms===NULL) ? NULL : $this->validateTransforms($transforms);
		$this->uRI = ($uRI===NULL) ? NULL : $this->validateURI($uRI);
		$this->type = ($type===NULL) ? NULL : $this->validateType($type);
	}

	public function getTransforms($autoCreate = TRUE) {
		if ($this->transforms===NULL && $autoCreate && ! isset($this->_overrides['transforms']) ) {
			$this->transforms = $this->createTransforms();
		}
		return $this->transforms;
	}
	
	protected function createTransforms() {
		return NULL;
	}

	public function setTransforms($transforms) {
		$this->transforms = $this->validateTransforms($transforms);
	}

	protected function validateTransforms($transforms) {
		if ( ! is_Transforms($transforms) && ! is_null($transforms) ) {
			throw new \Exception(sprintf('Supplied %s value was not %s', 'transforms', 'Transforms'));
		}
	
		return $transforms;
	}

	public function getURI($autoCreate = TRUE) {
		if ($this->uRI===NULL && $autoCreate && ! isset($this->_overrides['uRI']) ) {
			$this->uRI = $this->createURI();
		}
		return $this->uRI;
	}
	
	protected function createURI() {
		return NULL;
	}

	public function setURI($uRI) {
		$this->uRI = $this->validateURI($uRI);
	}

	protected function validateURI($uRI) {
		if (!is_string($uRI)) {
			throw new \Exception(sprintf('Supplied %s value was not %s', 'uRI', 'string'));
		}
	
		return $uRI;
	}

	public function getType($autoCreate = TRUE) {
		if ($this->type===NULL && $autoCreate && ! isset($this->_overrides['type']) ) {
			$this->type = $this->createType();
		}
		return $this->type;
	}
	
	protected function createType() {
		return NULL;
	}

	public function setType($type) {
		$this->type = $this->validateType($type);
	}

	protected function validateType($type) {
		if ( ! is_string($type) && ! is_null($type) ) {
			throw new \Exception(sprintf('Supplied %s value was not %s', 'type', 'string'));
		}
	
		return $type;
	}
} // end class RetrievalMethodType
