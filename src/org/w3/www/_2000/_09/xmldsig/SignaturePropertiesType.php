<?php
namespace org\w3\www\_2000\_09\xmldsig;



/**
 * @XmlNamespaces ({
 *	@XmlNamespace(url="http://www.w3.org/2000/09/xmldsig#", prefix="ds")
 * })
 * @XmlEntity	(xml="SignaturePropertiesType")
 */
class SignaturePropertiesType {
	/**
	 */

	/**
	 * List of manually overridden properties that should not be re-generated automatically
	 * @var array
	 */
	protected $_overrides = array();


	/**
	 * @XmlElement	(type="\org\w3\www\_2000\_09\xmldsig\SignatureProperty", collection="true", name="SignatureProperty")
	 */
	protected $signatureProperty;

	/**
	 * @XmlAttribute	(type="string", name="Id")
	 */
	protected $id;

	public function __construct($signatureProperty = NULL, $id = NULL) {
		$this->signatureProperty = ($signatureProperty===NULL) ? NULL : $this->validateSignatureProperty($signatureProperty);
		$this->id = ($id===NULL) ? NULL : $this->validateId($id);
	}

	public function getSignatureProperty($autoCreate = TRUE) {
		if ($this->signatureProperty===NULL && $autoCreate && ! isset($this->_overrides['signatureProperty']) ) {
			$this->signatureProperty = $this->createSignatureProperty();
		}
		return $this->signatureProperty;
	}
	
	protected function createSignatureProperty() {
		return array();
	}

	public function setSignatureProperty($signatureProperty) {
		$this->signatureProperty = $this->validateSignatureProperty($signatureProperty);
	}

	protected function validateSignatureProperty($signatureProperty) {
		if ( ! is_array ($signatureProperty) ) {
			$signatureProperty = array($signatureProperty);
		}
		$count = count($signatureProperty);
		if ($count < 1) {
			throw new \Exception(sprintf('Supplied %s array has less than the required number (%d) of entries.', 'signatureProperty', 1));
		}
		foreach ($signatureProperty as $entry) {
			if (!($entry instanceof \org\w3\www\_2000\_09\xmldsig\SignatureProperty )) {
				throw new \Exception(sprintf('Supplied %s value was not %s', 'signatureProperty', 'SignatureProperty'));
			}
		}
	
		return $signatureProperty;
	}

	public function addSignatureProperty($signatureProperty) {
		$this->signatureProperty[] = $signatureProperty;
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
} // end class SignaturePropertiesType
