<?php
namespace hl7_org\v3;



/**
 * @XmlNamespaces ({
 *	@XmlNamespace(url="urn:hl7-org:v3", prefix="")
 * })
 * @XmlEntity	(xml="IVXB_PPD_PQ")
 */
class IVXBPPDPQ extends \org\w3\www\_2001\XMLSchema\PPDPQ {
	/**
	 */

	/**
	 * List of manually overridden properties that should not be re-generated automatically
	 * @var array
	 */
	protected $_overrides = array();


	/**
	 * @XmlAttribute	(type="string", name="inclusive")
	 */
	protected $inclusive;

	public function __construct($inclusive = NULL) {
		$this->inclusive = ($inclusive===NULL) ? NULL : $this->validateInclusive($inclusive);
	}

	public function getInclusive($autoCreate = TRUE) {
		if ($this->inclusive===NULL && $autoCreate && ! isset($this->_overrides['inclusive']) ) {
			$this->inclusive = $this->createInclusive();
		}
		return $this->inclusive;
	}
	
	protected function createInclusive() {
		return NULL;
	}

	public function setInclusive($inclusive) {
		$this->inclusive = $this->validateInclusive($inclusive);
	}

	protected function validateInclusive($inclusive) {
	
		return $inclusive;
	}
} // end class IVXBPPDPQ
