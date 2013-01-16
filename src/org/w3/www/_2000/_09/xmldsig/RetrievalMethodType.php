<?php
namespace org\w3\www\_2000\_09\xmldsig;



/**
 * @XmlEntity	(xml="RetrievalMethodType")
 */
class RetrievalMethodType {
	/**
	 */

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
		if (!is_string($uRI)) {
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
} // end class RetrievalMethodType
