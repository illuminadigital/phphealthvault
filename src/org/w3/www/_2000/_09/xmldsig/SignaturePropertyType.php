<?php
namespace org\w3\www\_2000\_09\xmldsig;



/**
 * @XmlNamespaces ({
 *	@XmlNamespace(url="http://www.w3.org/2000/09/xmldsig#", prefix="ds")
 * })
 * @XmlEntity	(xml="SignaturePropertyType")
 */
class SignaturePropertyType {
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
	 * @XmlAttribute	(type="string", name="Target")
	 */
	protected $target;

	/**
	 * @XmlAttribute	(type="string", name="Id")
	 */
	protected $id;

	public function __construct($any = NULL, $target = NULL, $id = NULL) {
		$this->any = ($any===NULL) ? NULL : $this->validateAny($any);
		$this->target = ($target===NULL) ? NULL : $this->validateTarget($target);
		$this->id = ($id===NULL) ? NULL : $this->validateId($id);
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

	public function getTarget($autoCreate = TRUE) {
		if ($this->target===NULL && $autoCreate && ! isset($this->_overrides['target']) ) {
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
} // end class SignaturePropertyType
