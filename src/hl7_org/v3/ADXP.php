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
	 * A character string that may have a type-tag signifying itsrole in the address. Typical parts that exist in aboutevery address are street, house number, or post box,postal code, city, country but other roles may be definedregionally, nationally, or on an enterprise level (e.g. inmilitary addresses). Addresses are usually broken up intolines, which are indicated by special line-breakingdelimiter elements (e.g., DEL).
	 */

	/**
	 * List of manually overridden properties that should not be re-generated automatically
	 * @var array
	 */
	protected $_overrides = array();


	/**
	 * @XmlAttribute	(type="string", name="partType")
	 */
	protected $partType;

	public function __construct($partType = NULL) {
		$this->partType = ($partType===NULL) ? NULL : $this->validatePartType($partType);
	}

	public function getPartType($autoCreate = TRUE) {
		if ($this->partType===NULL && $autoCreate && ! isset($this->_overrides['partType']) ) {
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
