<?php
namespace hl7_org\v3;



/**
 * @XmlNamespaces ({
 *	@XmlNamespace(url="urn:hl7-org:v3", prefix="")
 * })
 * @XmlEntity	(xml="ADXP")
 */
class ADXP extends \org\w3\www\_2001\XMLSchema\ST {
	/**
	 * A character string that may have a type-tag signifying its role in the address. Typical parts that exist in about every address are street, house number, or post box, postal code, city, country but other roles may be defined regionally, nationally, or on an enterprise level (e.g. in military addresses). Addresses are usually broken up into lines, which are indicated by special line-breaking delimiter elements (e.g., DEL).
	 */

	/**
	 * @XmlAttribute	(type="string", name="partType")
	 */
	protected $partType;

	public function __construct($partType = NULL) {
		$this->partType = ($partType===NULL) ? NULL : $this->validatePartType($partType);
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
} // end class ADXP
