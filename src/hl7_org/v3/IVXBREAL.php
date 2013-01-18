<?php
namespace hl7_org\v3;



/**
 * @XmlNamespaces ({
 *	@XmlNamespace(url="urn:hl7-org:v3", prefix="")
 * })
 * @XmlEntity	(xml="IVXB_REAL")
 */
class IVXBREAL extends \REAL\REAL {
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
		return new \hl7_org\v3\Bl();
	}

	public function setInclusive($inclusive) {
		$this->inclusive = $this->validateInclusive($inclusive);
	}

	protected function validateInclusive($inclusive) {
		if ( ! $inclusive instanceof \hl7_org\v3\Bl  && ! is_null($inclusive) ) {
			$inclusive = new \hl7_org\v3\Bl ($inclusive);
		}
	
		return $inclusive;
	}
} // end class IVXBREAL
