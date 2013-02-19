<?php
namespace hl7_org\v3;



/**
 * @XmlNamespaces ({
 *	@XmlNamespace(url="urn:hl7-org:v3", prefix="")
 * })
 * @XmlEntity	(xml="IVXB_PPD_TS")
 */
class IVXBPPDTS extends \org\w3\www\_2001\XMLSchema\PPDTS {
	/**
	 */

	/**
	 * @XmlAttribute	(type="string", name="inclusive")
	 */
	protected $inclusive;

	public function __construct($inclusive = NULL) {
		$this->inclusive = ($inclusive===NULL) ? NULL : $this->validateInclusive($inclusive);
	}

	public function getInclusive() {
		if ($this->inclusive===NULL) {
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
} // end class IVXBPPDTS
