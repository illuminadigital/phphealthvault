<?php
namespace hl7_org\v3;



/**
 * @XmlNamespaces ({
 *	@XmlNamespace(url="urn:hl7-org:v3", prefix="")
 * })
 * @XmlEntity	(xml="HXIT_PQ")
 */
class HXITPQ extends \PQ\PQ {
	/**
	 */

	/**
	 * @XmlElement	(type="\hl7_org\v3\IVLTS", name="validTime")
	 */
	protected $validTime;

	public function __construct($validTime = NULL) {
		$this->validTime = ($validTime===NULL) ? NULL : $this->validateValidTime($validTime);
	}

	public function getValidTime() {
		if ($this->validTime===NULL) {
			$this->validTime = $this->createValidTime();
		}
		return $this->validTime;
	}
	
	protected function createValidTime() {
		return new \hl7_org\v3\IVLTS();
	}

	public function setValidTime($validTime) {
		$this->validTime = $this->validateValidTime($validTime);
	}

	protected function validateValidTime($validTime) {
		if ( ! $validTime instanceof \hl7_org\v3\IVLTS  && ! is_null($validTime) ) {
			$validTime = new \hl7_org\v3\IVLTS ($validTime);
		}
	
		return $validTime;
	}
} // end class HXITPQ
