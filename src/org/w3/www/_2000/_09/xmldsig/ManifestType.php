<?php
namespace org\w3\www\_2000\_09\xmldsig;



/**
 * @XmlNamespaces ({
 *	@XmlNamespace(url="http://www.w3.org/2000/09/xmldsig#", prefix="ds")
 * })
 * @XmlEntity	(xml="ManifestType")
 */
class ManifestType {
	/**
	 */

	/**
	 * List of manually overridden properties that should not be re-generated automatically
	 * @var array
	 */
	protected $_overrides = array();


	/**
	 * @XmlElement	(type="\org\w3\www\_2000\_09\xmldsig\Reference", collection="true", name="Reference")
	 */
	protected $reference;

	/**
	 * @XmlAttribute	(type="string", name="Id")
	 */
	protected $id;

	public function __construct($reference = NULL, $id = NULL) {
		$this->reference = ($reference===NULL) ? NULL : $this->validateReference($reference);
		$this->id = ($id===NULL) ? NULL : $this->validateId($id);
	}

	public function getReference($autoCreate = TRUE) {
		if ($this->reference===NULL && $autoCreate && ! isset($this->_overrides['reference']) ) {
			$this->reference = $this->createReference();
		}
		return $this->reference;
	}
	
	protected function createReference() {
		return array();
	}

	public function setReference($reference) {
		$this->reference = $this->validateReference($reference);
	}

	protected function validateReference($reference) {
		if ( ! is_array ($reference) ) {
			$reference = array($reference);
		}
		$count = count($reference);
		if ($count < 1) {
			throw new \Exception(sprintf('Supplied %s array has less than the required number (%d) of entries.', 'reference', 1));
		}
		foreach ($reference as $entry) {
			if (!($entry instanceof Reference)) {
				throw new \Exception(sprintf('Supplied %s value was not %s', 'reference', 'Reference'));
			}
		}
	
		return $reference;
	}

	public function addReference($reference) {
		$this->reference[] = $reference;
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
} // end class ManifestType
