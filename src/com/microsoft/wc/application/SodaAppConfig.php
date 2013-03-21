<?php
namespace com\microsoft\wc\application;



/**
 * @XmlNamespaces ({
 *	@XmlNamespace(url="urn:com.microsoft.wc.application", prefix="wc-app")
 * })
 * @XmlEntity	(xml="SodaAppConfig")
 */
class SodaAppConfig {
	/**
	 * SodaAppConfig encapsulates the attributes required to create a Soda application.
	 */

	/**
	 * List of manually overridden properties that should not be re-generated automatically
	 * @var array
	 */
	protected $_overrides = array();


	/**
	 * @XmlElement	(type="\com\microsoft\wc\types\Guid", name="id")
	 */
	protected $id;

	/**
	 * @XmlElement	(type="\com\microsoft\wc\types\Guid", name="parent-id")
	 */
	protected $parentId;

	/**
	 * @XmlElement	(type="\com\microsoft\wc\types\String255", name="name")
	 */
	protected $name;

	/**
	 * @XmlElement	(type="\com\microsoft\wc\application\PublicKeys", name="public-keys")
	 */
	protected $publicKeys;

	public function __construct($id = NULL, $parentId = NULL, $name = NULL, $publicKeys = NULL) {
		$this->id = ($id===NULL) ? NULL : $this->validateId($id);
		$this->parentId = ($parentId===NULL) ? NULL : $this->validateParentId($parentId);
		$this->name = ($name===NULL) ? NULL : $this->validateName($name);
		$this->publicKeys = ($publicKeys===NULL) ? NULL : $this->validatePublicKeys($publicKeys);
	}

	public function getId($autoCreate = TRUE) {
		if ($this->id===NULL && $autoCreate && ! isset($this->_overrides['id']) ) {
			$this->id = $this->createId();
		}
		return $this->id;
	}
	
	protected function createId() {
		return new \com\microsoft\wc\types\Guid();
	}

	public function setId($id) {
		$this->id = $this->validateId($id);
	}

	protected function validateId($id) {
		if ( ! $id instanceof \com\microsoft\wc\types\Guid ) {
			$id = new \com\microsoft\wc\types\Guid ($id);
		}
	
		return $id;
	}

	public function getParentId($autoCreate = TRUE) {
		if ($this->parentId===NULL && $autoCreate && ! isset($this->_overrides['parentId']) ) {
			$this->parentId = $this->createParentId();
		}
		return $this->parentId;
	}
	
	protected function createParentId() {
		return new \com\microsoft\wc\types\Guid();
	}

	public function setParentId($parentId) {
		$this->parentId = $this->validateParentId($parentId);
	}

	protected function validateParentId($parentId) {
		if ( ! $parentId instanceof \com\microsoft\wc\types\Guid ) {
			$parentId = new \com\microsoft\wc\types\Guid ($parentId);
		}
	
		return $parentId;
	}

	public function getName($autoCreate = TRUE) {
		if ($this->name===NULL && $autoCreate && ! isset($this->_overrides['name']) ) {
			$this->name = $this->createName();
		}
		return $this->name;
	}
	
	protected function createName() {
		return new \com\microsoft\wc\types\String255();
	}

	public function setName($name) {
		$this->name = $this->validateName($name);
	}

	protected function validateName($name) {
		if ( ! $name instanceof \com\microsoft\wc\types\String255 ) {
			$name = new \com\microsoft\wc\types\String255 ($name);
		}
	
		return $name;
	}

	public function getPublicKeys($autoCreate = TRUE) {
		if ($this->publicKeys===NULL && $autoCreate && ! isset($this->_overrides['publicKeys']) ) {
			$this->publicKeys = $this->createPublicKeys();
		}
		return $this->publicKeys;
	}
	
	protected function createPublicKeys() {
		return new \com\microsoft\wc\application\PublicKeys();
	}

	public function setPublicKeys($publicKeys) {
		$this->publicKeys = $this->validatePublicKeys($publicKeys);
	}

	protected function validatePublicKeys($publicKeys) {
		if ( ! $publicKeys instanceof \com\microsoft\wc\application\PublicKeys ) {
			$publicKeys = new \com\microsoft\wc\application\PublicKeys ($publicKeys);
		}
	
		return $publicKeys;
	}
} // end class SodaAppConfig
