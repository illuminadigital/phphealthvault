<?php
namespace hl7_org\v3;



/**
 * @XmlNamespaces ({
 *	@XmlNamespace(url="urn:hl7-org:v3", prefix="")
 * })
 * @XmlEntity	(xml="HXIT_CE")
 */
class HXITCE extends \CE\CE {
	/**
	 */

	/**
	 * @XmlElement	(type="\org\w3\www\_2001\XMLSchema\IVLTS", name="validTime")
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
		return NULL;
	}

	public function setValidTime($validTime) {
		$this->validTime = $this->validateValidTime($validTime);
	}

	protected function validateValidTime($validTime) {
	
		return $validTime;
	}
} // end class HXITCE
