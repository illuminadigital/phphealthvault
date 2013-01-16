<?php
namespace org\w3\www\_2000\_09\xmldsig;



/**
 * @XmlEntity	(xml="SignaturePropertyType")
 */
class SignaturePropertyType {
	/**
	 */

	/**
	 * @XmlAttribute	(type="string", name="Target")
	 */
	protected $target;

	/**
	 * @XmlAttribute	(type="string", name="Id")
	 */
	protected $id;

	public function __construct($target = NULL, $id = NULL) {
		$this->target = ($target===NULL) ? NULL : $this->validateTarget($target);
		$this->id = ($id===NULL) ? NULL : $this->validateId($id);
	}

	public function getTarget() {
		if ($this->target===NULL) {
			$this->target = $this->createTarget();
		}
		return $this->target;
	}
	
	protected function createTarget() {
		return NULL;
	}

	public function setTarget($target) {
		$this->target = $this->validateTarget($target);
	}

	protected function validateTarget($target) {
		if (!is_string($target)) {
			throw new \Exception(sprintf('Supplied %s value was not %s', 'target', 'string'));
		}
	
		return $target;
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
} // end class SignaturePropertyType
