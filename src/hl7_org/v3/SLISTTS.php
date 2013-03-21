<?php
namespace hl7_org\v3;



/**
 * @XmlNamespaces ({
 *	@XmlNamespace(url="urn:hl7-org:v3", prefix="")
 * })
 * @XmlEntity	(xml="SLIST_TS")
 */
class SLISTTS extends \org\w3\www\_2001\XMLSchema\ANY {
	/**
	 */

	/**
	 * List of manually overridden properties that should not be re-generated automatically
	 * @var array
	 */
	protected $_overrides = array();


	/**
	 * @XmlElement	(type="\org\w3\www\_2001\XMLSchema\TS", name="origin")
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

	public function getOrigin($autoCreate = TRUE) {
		if ($this->origin===NULL && $autoCreate && ! isset($this->_overrides['origin']) ) {
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

	public function getScale($autoCreate = TRUE) {
		if ($this->scale===NULL && $autoCreate && ! isset($this->_overrides['scale']) ) {
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

	public function getDigits($autoCreate = TRUE) {
		if ($this->digits===NULL && $autoCreate && ! isset($this->_overrides['digits']) ) {
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
} // end class SLISTTS
