<?php
namespace org\w3\www\_2000\_09\xmldsig;



/**
 * @XmlNamespaces ({
 *	@XmlNamespace(url="http://www.w3.org/2000/09/xmldsig#", prefix="ds")
 * })
 * @XmlEntity	(xml="ReferenceType")
 */
class ReferenceType {
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
	 * @XmlElement	(type="\org\w3\www\_2000\_09\xmldsig\DigestMethod", name="DigestMethod")
	 */
	protected $digestMethod;

	/**
	 * @XmlElement	(type="\org\w3\www\_2000\_09\xmldsig\DigestValue", name="DigestValue")
	 */
	protected $digestValue;

	/**
	 * @XmlAttribute	(type="string", name="Id")
	 */
	protected $id;

	/**
	 * @XmlAttribute	(type="string", name="URI")
	 */
	protected $uRI;

	/**
	 * @XmlAttribute	(type="string", name="Type")
	 */
	protected $type;

	public function __construct($transforms = NULL, $digestMethod = NULL, $digestValue = NULL, $id = NULL, $uRI = NULL, $type = NULL) {
		$this->transforms = ($transforms===NULL) ? NULL : $this->validateTransforms($transforms);
		$this->digestMethod = ($digestMethod===NULL) ? NULL : $this->validateDigestMethod($digestMethod);
		$this->digestValue = ($digestValue===NULL) ? NULL : $this->validateDigestValue($digestValue);
		$this->id = ($id===NULL) ? NULL : $this->validateId($id);
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

	public function getDigestMethod($autoCreate = TRUE) {
		if ($this->digestMethod===NULL && $autoCreate && ! isset($this->_overrides['digestMethod']) ) {
			$this->digestMethod = $this->createDigestMethod();
		}
		return $this->digestMethod;
	}
	
	protected function createDigestMethod() {
		return NULL;
	}

	public function setDigestMethod($digestMethod) {
		$this->digestMethod = $this->validateDigestMethod($digestMethod);
	}

	protected function validateDigestMethod($digestMethod) {
		if (!is_DigestMethod($digestMethod)) {
			throw new \Exception(sprintf('Supplied %s value was not %s', 'digestMethod', 'DigestMethod'));
		}
	
		return $digestMethod;
	}

	public function getDigestValue($autoCreate = TRUE) {
		if ($this->digestValue===NULL && $autoCreate && ! isset($this->_overrides['digestValue']) ) {
			$this->digestValue = $this->createDigestValue();
		}
		return $this->digestValue;
	}
	
	protected function createDigestValue() {
		return NULL;
	}

	public function setDigestValue($digestValue) {
		$this->digestValue = $this->validateDigestValue($digestValue);
	}

	protected function validateDigestValue($digestValue) {
		if (!is_DigestValue($digestValue)) {
			throw new \Exception(sprintf('Supplied %s value was not %s', 'digestValue', 'DigestValue'));
		}
	
		return $digestValue;
	}

	public function getId($autoCreate = TRUE) {
		if ($this->id===NULL && $autoCreate && ! isset($this->_overrides['id']) ) {
			$this->id = $this->createId();
		}
		return $this->id;
	}
	
	protected function createId() {
		return NULL;
	}

	public function setId($id) {
		$this->id = $this->validateId($id);
	}

	protected function validateId($id) {
		if ( ! is_string($id) && ! is_null($id) ) {
			throw new \Exception(sprintf('Supplied %s value was not %s', 'id', 'string'));
		}
	
		return $id;
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
		if ( ! is_string($uRI) && ! is_null($uRI) ) {
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
} // end class ReferenceType
