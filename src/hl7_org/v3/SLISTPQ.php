<?php
namespace hl7_org\v3;



/**
 * @XmlNamespaces ({
 *	@XmlNamespace(url="urn:hl7-org:v3", prefix="")
 * })
 * @XmlEntity	(xml="SLIST_PQ")
 */
class SLISTPQ extends \org\w3\www\_2001\XMLSchema\ANY {
	/**
	 */

	/**
	 * @XmlElement	(type="\org\w3\www\_2001\XMLSchema\PQ", name="origin")
	 */
	protected $origin;

	/**
	 * @XmlElement	(type="\org\w3\www\_2001\XMLSchema\PQ", name="scale")
	 */
	protected $scale;

	/**
	 * @XmlElement	(type="\org\w3\www\_2001\XMLSchema\ListInt", name="digits")
	 */
	protected $digits;

	public function __construct($origin = NULL, $scale = NULL, $digits = NULL) {
		$this->origin = ($origin===NULL) ? NULL : $this->validateOrigin($origin);
		$this->scale = ($scale===NULL) ? NULL : $this->validateScale($scale);
		$this->digits = ($digits===NULL) ? NULL : $this->validateDigits($digits);
	}

	public function getOrigin() {
		if ($this->origin===NULL) {
			$this->origin = $this->createOrigin();
		}
		return $this->origin;
	}
	
	protected function createOrigin() {
		return NULL;
	}

	public function setOrigin($origin) {
		$this->origin = $this->validateOrigin($origin);
	}

	protected function validateOrigin($origin) {
	
		return $origin;
	}

	public function getScale() {
		if ($this->scale===NULL) {
			$this->scale = $this->createScale();
		}
		return $this->scale;
	}
	
	protected function createScale() {
		return NULL;
	}

	public function setScale($scale) {
		$this->scale = $this->validateScale($scale);
	}

	protected function validateScale($scale) {
	
		return $scale;
	}

	public function getDigits() {
		if ($this->digits===NULL) {
			$this->digits = $this->createDigits();
		}
		return $this->digits;
	}
	
	protected function createDigits() {
		return NULL;
	}

	public function setDigits($digits) {
		$this->digits = $this->validateDigits($digits);
	}

	protected function validateDigits($digits) {
	
		return $digits;
	}
} // end class SLISTPQ
