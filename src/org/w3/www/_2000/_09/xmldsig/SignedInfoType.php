<?php
namespace org\w3\www\_2000\_09\xmldsig;



/**
 * @XmlNamespaces ({
 *	@XmlNamespace(url="http://www.w3.org/2000/09/xmldsig#", prefix="ds")
 * })
 * @XmlEntity	(xml="SignedInfoType")
 */
class SignedInfoType {
	/**
	 */

	/**
	 * @XmlElement	(type="\org\w3\www\_2000\_09\xmldsig\CanonicalizationMethod", name="CanonicalizationMethod")
	 */
	protected $canonicalizationMethod;

	/**
	 * @XmlElement	(type="\org\w3\www\_2000\_09\xmldsig\SignatureMethod", name="SignatureMethod")
	 */
	protected $signatureMethod;

	/**
	 * @XmlElement	(type="\org\w3\www\_2000\_09\xmldsig\Reference", collection="true", name="Reference")
	 */
	protected $reference;

	/**
	 * @XmlAttribute	(type="string", name="Id")
	 */
	protected $id;

	public function __construct($canonicalizationMethod = NULL, $signatureMethod = NULL, $reference = NULL, $id = NULL) {
		$this->canonicalizationMethod = ($canonicalizationMethod===NULL) ? NULL : $this->validateCanonicalizationMethod($canonicalizationMethod);
		$this->signatureMethod = ($signatureMethod===NULL) ? NULL : $this->validateSignatureMethod($signatureMethod);
		$this->reference = ($reference===NULL) ? NULL : $this->validateReference($reference);
		$this->id = ($id===NULL) ? NULL : $this->validateId($id);
	}

	public function getCanonicalizationMethod() {
		if ($this->canonicalizationMethod===NULL) {
			$this->canonicalizationMethod = $this->createCanonicalizationMethod();
		}
		return $this->canonicalizationMethod;
	}
	
	protected function createCanonicalizationMethod() {
		return new \org\w3\www\_2000\_09\xmldsig\CanonicalizationMethod();
	}

	public function setCanonicalizationMethod($canonicalizationMethod) {
		$this->canonicalizationMethod = $this->validateCanonicalizationMethod($canonicalizationMethod);
	}

	protected function validateCanonicalizationMethod($canonicalizationMethod) {
		if ( ! $canonicalizationMethod instanceof \org\w3\www\_2000\_09\xmldsig\CanonicalizationMethod ) {
			$canonicalizationMethod = new \org\w3\www\_2000\_09\xmldsig\CanonicalizationMethod ($canonicalizationMethod);
		}
	
		return $canonicalizationMethod;
	}

	public function getSignatureMethod() {
		if ($this->signatureMethod===NULL) {
			$this->signatureMethod = $this->createSignatureMethod();
		}
		return $this->signatureMethod;
	}
	
	protected function createSignatureMethod() {
		return new \org\w3\www\_2000\_09\xmldsig\SignatureMethod();
	}

	public function setSignatureMethod($signatureMethod) {
		$this->signatureMethod = $this->validateSignatureMethod($signatureMethod);
	}

	protected function validateSignatureMethod($signatureMethod) {
		if ( ! $signatureMethod instanceof \org\w3\www\_2000\_09\xmldsig\SignatureMethod ) {
			$signatureMethod = new \org\w3\www\_2000\_09\xmldsig\SignatureMethod ($signatureMethod);
		}
	
		return $signatureMethod;
	}

	public function getReference() {
		if ($this->reference===NULL) {
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
} // end class SignedInfoType
