<?php
namespace org\w3\www\_2000\_09\xmldsig;



/**
 * @XmlNamespaces ({
 *	@XmlNamespace(url="http://www.w3.org/2000/09/xmldsig#", prefix="ds")
 * })
 * @XmlEntity	(xml="ObjectType")
 */
class ObjectType {
	/**
	 */

	/**
	 * @XmlElement	(type="\org\w3\www\_2000\_09\xmldsig\AnyMixed", collection="true", name="*")
	 */
	protected $any;

	/**
	 * @XmlAttribute	(type="string", name="Id")
	 */
	protected $id;

	/**
	 * @XmlAttribute	(type="string", name="MimeType")
	 */
	protected $mimeType;

	/**
	 * @XmlAttribute	(type="string", name="Encoding")
	 */
	protected $encoding;

	public function __construct($any = NULL, $id = NULL, $mimeType = NULL, $encoding = NULL) {
		$this->any = ($any===NULL) ? NULL : $this->validateAny($any);
		$this->id = ($id===NULL) ? NULL : $this->validateId($id);
		$this->mimeType = ($mimeType===NULL) ? NULL : $this->validateMimeType($mimeType);
		$this->encoding = ($encoding===NULL) ? NULL : $this->validateEncoding($encoding);
	}

	public function getAny() {
		if ($this->any===NULL) {
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
		foreach ($any as $entry) {
			if ( ! is_AnyMixed($entry) && ! is_null($entry) ) {
				throw new \Exception(sprintf('Supplied %s value was not %s', 'any', 'AnyMixed'));
			}
		}
	
		return $any;
	}

	public function addAny($any) {
		$this->any[] = $this->validateAnyType($any);
	}

	protected function validateAnyType($any) {
		if ( ! is_AnyMixed($any) && ! is_null($any) ) {
			throw new \Exception(sprintf('Supplied %s value was not %s', 'any', 'AnyMixed'));
		}
	
		return $any;
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

	public function getMimeType() {
		if ($this->mimeType===NULL) {
			$this->mimeType = $this->createMimeType();
		}
		return $this->mimeType;
	}
	
	protected function createMimeType() {
		return '';
	}

	public function setMimeType($mimeType) {
		$this->mimeType = $this->validateMimeType($mimeType);
	}

	protected function validateMimeType($mimeType) {
		if ( ! is_string($mimeType) && ! is_null($mimeType) ) {
			throw new \Exception(sprintf('Supplied %s value was not %s', 'mimeType', 'string'));
		}
	
		return $mimeType;
	}

	public function getEncoding() {
		if ($this->encoding===NULL) {
			$this->encoding = $this->createEncoding();
		}
		return $this->encoding;
	}
	
	protected function createEncoding() {
		return NULL;
	}

	public function setEncoding($encoding) {
		$this->encoding = $this->validateEncoding($encoding);
	}

	protected function validateEncoding($encoding) {
		if ( ! is_string($encoding) && ! is_null($encoding) ) {
			throw new \Exception(sprintf('Supplied %s value was not %s', 'encoding', 'string'));
		}
	
		return $encoding;
	}
} // end class ObjectType
