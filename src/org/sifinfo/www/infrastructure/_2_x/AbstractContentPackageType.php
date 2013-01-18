<?php
namespace org\sifinfo\www\infrastructure\_2_x;



/**
 * @XmlNamespaces ({
 *	@XmlNamespace(url="http://www.sifinfo.org/infrastructure/2.x", prefix="")
 * })
 * @XmlEntity	(xml="AbstractContentPackageType")
 */
class AbstractContentPackageType {
	/**
	 * An abstract type for derived content package types, elements and objects. This structure may be used verbatim, optionally extendingwith additional attributes, or may be redefined to include only a subset of child elements and/or to add validation to XMLcontained in XMLData. Only one instance of XMLData, TextData, BinaryData orReference can occur in a single instance.
	 */

	/**
	 * @XmlElement	(type="\org\sifinfo\www\infrastructure\_2_x\XMLData", name="XMLData")
	 */
	protected $xMLData;

	/**
	 * @XmlElement	(type="\org\sifinfo\www\infrastructure\_2_x\TextData", name="TextData")
	 */
	protected $textData;

	/**
	 * @XmlElement	(type="\org\sifinfo\www\infrastructure\_2_x\BinaryData", name="BinaryData")
	 */
	protected $binaryData;

	/**
	 * @XmlElement	(type="\org\sifinfo\www\infrastructure\_2_x\Reference", name="Reference")
	 */
	protected $reference;

	/**
	 * @XmlAttribute	(type="string", name="RefId")
	 */
	protected $refId;

	public function __construct($xMLData = NULL, $textData = NULL, $binaryData = NULL, $reference = NULL, $refId = NULL) {
		$this->xMLData = ($xMLData===NULL) ? NULL : $this->validateXMLData($xMLData);
		$this->textData = ($textData===NULL) ? NULL : $this->validateTextData($textData);
		$this->binaryData = ($binaryData===NULL) ? NULL : $this->validateBinaryData($binaryData);
		$this->reference = ($reference===NULL) ? NULL : $this->validateReference($reference);
		$this->refId = ($refId===NULL) ? NULL : $this->validateRefId($refId);
	}

	public function getXMLData() {
		if ($this->xMLData===NULL) {
			$this->xMLData = $this->createXMLData();
		}
		return $this->xMLData;
	}
	
	protected function createXMLData() {
		return new \org\sifinfo\www\infrastructure\_2_x\XMLData();
	}

	public function setXMLData($xMLData) {
		$this->xMLData = $this->validateXMLData($xMLData);
	}

	protected function validateXMLData($xMLData) {
		if ( ! $xMLData instanceof \org\sifinfo\www\infrastructure\_2_x\XMLData ) {
			$xMLData = new \org\sifinfo\www\infrastructure\_2_x\XMLData ($xMLData);
		}
	
		return $xMLData;
	}

	public function getTextData() {
		if ($this->textData===NULL) {
			$this->textData = $this->createTextData();
		}
		return $this->textData;
	}
	
	protected function createTextData() {
		return new \org\sifinfo\www\infrastructure\_2_x\TextData();
	}

	public function setTextData($textData) {
		$this->textData = $this->validateTextData($textData);
	}

	protected function validateTextData($textData) {
		if ( ! $textData instanceof \org\sifinfo\www\infrastructure\_2_x\TextData ) {
			$textData = new \org\sifinfo\www\infrastructure\_2_x\TextData ($textData);
		}
	
		return $textData;
	}

	public function getBinaryData() {
		if ($this->binaryData===NULL) {
			$this->binaryData = $this->createBinaryData();
		}
		return $this->binaryData;
	}
	
	protected function createBinaryData() {
		return new \org\sifinfo\www\infrastructure\_2_x\BinaryData();
	}

	public function setBinaryData($binaryData) {
		$this->binaryData = $this->validateBinaryData($binaryData);
	}

	protected function validateBinaryData($binaryData) {
		if ( ! $binaryData instanceof \org\sifinfo\www\infrastructure\_2_x\BinaryData ) {
			$binaryData = new \org\sifinfo\www\infrastructure\_2_x\BinaryData ($binaryData);
		}
	
		return $binaryData;
	}

	public function getReference() {
		if ($this->reference===NULL) {
			$this->reference = $this->createReference();
		}
		return $this->reference;
	}
	
	protected function createReference() {
		return new \org\sifinfo\www\infrastructure\_2_x\Reference();
	}

	public function setReference($reference) {
		$this->reference = $this->validateReference($reference);
	}

	protected function validateReference($reference) {
		if ( ! $reference instanceof \org\sifinfo\www\infrastructure\_2_x\Reference ) {
			$reference = new \org\sifinfo\www\infrastructure\_2_x\Reference ($reference);
		}
	
		return $reference;
	}

	public function getRefId() {
		if ($this->refId===NULL) {
			$this->refId = $this->createRefId();
		}
		return $this->refId;
	}
	
	protected function createRefId() {
		return new \org\sifinfo\www\infrastructure\_2_x\RefIdType();
	}

	public function setRefId($refId) {
		$this->refId = $this->validateRefId($refId);
	}

	protected function validateRefId($refId) {
		if ( ! $refId instanceof \org\sifinfo\www\infrastructure\_2_x\RefIdType ) {
			$refId = new \org\sifinfo\www\infrastructure\_2_x\RefIdType ($refId);
		}
	
		return $refId;
	}
} // end class AbstractContentPackageType
