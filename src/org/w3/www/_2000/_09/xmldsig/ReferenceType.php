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

	public function getTransforms() {
		if ($this->transforms===NULL) {
			$this->transforms = $this->createTransforms();
		}
		return $this->transforms;
	}
	
	protected function createTransforms() {
		return new \org\w3\www\_2000\_09\xmldsig\Transforms();
	}

	public function setTransforms($transforms) {
		$this->transforms = $this->validateTransforms($transforms);
	}

	protected function validateTransforms($transforms) {
		if ( ! $transforms instanceof \org\w3\www\_2000\_09\xmldsig\Transforms  && ! is_null($transforms) ) {
			$transforms = new \org\w3\www\_2000\_09\xmldsig\Transforms ($transforms);
		}
	
		return $transforms;
	}

	public function getDigestMethod() {
		if ($this->digestMethod===NULL) {
			$this->digestMethod = $this->createDigestMethod();
		}
		return $this->digestMethod;
	}
	
	protected function createDigestMethod() {
		return new \org\w3\www\_2000\_09\xmldsig\DigestMethod();
	}

	public function setDigestMethod($digestMethod) {
		$this->digestMethod = $this->validateDigestMethod($digestMethod);
	}

	protected function validateDigestMethod($digestMethod) {
		if ( ! $digestMethod instanceof \org\w3\www\_2000\_09\xmldsig\DigestMethod ) {
			$digestMethod = new \org\w3\www\_2000\_09\xmldsig\DigestMethod ($digestMethod);
		}
	
		return $digestMethod;
	}

	public function getDigestValue() {
		if ($this->digestValue===NULL) {
			$this->digestValue = $this->createDigestValue();
		}
		return $this->digestValue;
	}
	
	protected function createDigestValue() {
		return new \org\w3\www\_2000\_09\xmldsig\DigestValue();
	}

	public function setDigestValue($digestValue) {
		$this->digestValue = $this->validateDigestValue($digestValue);
	}

	protected function validateDigestValue($digestValue) {
		if ( ! $digestValue instanceof \org\w3\www\_2000\_09\xmldsig\DigestValue ) {
			$digestValue = new \org\w3\www\_2000\_09\xmldsig\DigestValue ($digestValue);
		}
	
		return $digestValue;
	}

	public function getId() {
		if ($this->id===NULL) {
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

	public function getURI() {
		if ($this->uRI===NULL) {
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

	public function getType() {
		if ($this->type===NULL) {
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
