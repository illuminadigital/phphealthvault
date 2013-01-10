<?php
namespace com\microsoft\wc\application;

use com\microsoft\wc\types\Guid;
use com\microsoft\wc\types\String255;
use com\microsoft\wc\application\PublicKeys;

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

	public function getId() {
		if ($this->id===NULL) {
			$this->id = $this->createId();
		}
		return $this->id;
	}
	
	protected function createId() {
		return new Guid();
	}

	public function setId($id) {
		$this->id = $this->validateId($id);
	}

	protected function validateId($id) {
		if ( ! $id instanceof Guid ) {
			$id = new Guid ($id);
		}
	
		return $id;
	}

	public function getParentId() {
		if ($this->parentId===NULL) {
			$this->parentId = $this->createParentId();
		}
		return $this->parentId;
	}
	
	protected function createParentId() {
		return new Guid();
	}

	public function setParentId($parentId) {
		$this->parentId = $this->validateParentId($parentId);
	}

	protected function validateParentId($parentId) {
		if ( ! $parentId instanceof Guid ) {
			$parentId = new Guid ($parentId);
		}
	
		return $parentId;
	}

	public function getName() {
		if ($this->name===NULL) {
			$this->name = $this->createName();
		}
		return $this->name;
	}
	
	protected function createName() {
		return new String255();
	}

	public function setName($name) {
		$this->name = $this->validateName($name);
	}

	protected function validateName($name) {
		if ( ! $name instanceof String255 ) {
			$name = new String255 ($name);
		}
	
		return $name;
	}

	public function getPublicKeys() {
		if ($this->publicKeys===NULL) {
			$this->publicKeys = $this->createPublicKeys();
		}
		return $this->publicKeys;
	}
	
	protected function createPublicKeys() {
		return new PublicKeys();
	}

	public function setPublicKeys($publicKeys) {
		$this->publicKeys = $this->validatePublicKeys($publicKeys);
	}

	protected function validatePublicKeys($publicKeys) {
		if ( ! $publicKeys instanceof PublicKeys ) {
			$publicKeys = new PublicKeys ($publicKeys);
		}
	
		return $publicKeys;
	}
} // end class SodaAppConfig
