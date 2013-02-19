<?php
namespace hl7_org\v3;



/**
 * @XmlNamespaces ({
 *	@XmlNamespace(url="urn:hl7-org:v3", prefix="")
 * })
 * @XmlEntity	(xml="ENXP")
 */
class ENXP extends \org\w3\www\_2001\XMLSchema\ST {
	/**
	 * A character string token representing a part of a name. May have a type code signifying the role of the part in the whole entity name, and a qualifier code for more detail about the name part type. Typical name parts for person names are given names, and family names, titles, etc.
	 */

	/**
	 * @XmlAttribute	(type="string", name="partType")
	 */
	protected $partType;

	/**
	 * @XmlAttribute	(type="string", name="qualifier")
	 */
	protected $qualifier;

	public function __construct($partType = NULL, $qualifier = NULL) {
		$this->partType = ($partType===NULL) ? NULL : $this->validatePartType($partType);
		$this->qualifier = ($qualifier===NULL) ? NULL : $this->validateQualifier($qualifier);
	}

	public function getPartType() {
		if ($this->partType===NULL) {
			$this->partType = $this->createPartType();
		}
		return $this->partType;
	}
	
	protected function createPartType() {
		return NULL;
	}

	public function setPartType($partType) {
		$this->partType = $this->validatePartType($partType);
	}

	protected function validatePartType($partType) {
	
		return $partType;
	}

	public function getQualifier() {
		if ($this->qualifier===NULL) {
			$this->qualifier = $this->createQualifier();
		}
		return $this->qualifier;
	}
	
	protected function createQualifier() {
		return NULL;
	}

	public function setQualifier($qualifier) {
		$this->qualifier = $this->validateQualifier($qualifier);
	}

	protected function validateQualifier($qualifier) {
	
		return $qualifier;
	}
} // end class ENXP
