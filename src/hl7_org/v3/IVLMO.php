<?php
namespace hl7_org\v3;



/**
 * @XmlNamespaces ({
 *	@XmlNamespace(url="urn:hl7-org:v3", prefix="")
 * })
 * @XmlEntity	(xml="IVL_MO")
 */
class IVLMO extends \org\w3\www\_2001\XMLSchema\SXCMMO {
	/**
	 */

	/**
	 * List of manually overridden properties that should not be re-generated automatically
	 * @var array
	 */
	protected $_overrides = array();


	/**
	 * @XmlElement	(type="\org\w3\www\_2001\XMLSchema\IVXBMO", name="low")
	 */
	protected $low;

	/**
	 * @XmlElement	(type="\org\w3\www\_2001\XMLSchema\MO", name="width")
	 */
	protected $width;

	/**
	 * @XmlElement	(type="\org\w3\www\_2001\XMLSchema\IVXBMO", name="high")
	 */
	protected $high;

	/**
	 * @XmlElement	(type="\org\w3\www\_2001\XMLSchema\MO", name="center")
	 */
	protected $center;

	public function __construct($low = NULL, $width = NULL, $high = NULL, $center = NULL) {
		$this->low = ($low===NULL) ? NULL : $this->validateLow($low);
		$this->width = ($width===NULL) ? NULL : $this->validateWidth($width);
		$this->high = ($high===NULL) ? NULL : $this->validateHigh($high);
		$this->center = ($center===NULL) ? NULL : $this->validateCenter($center);
	}

	public function getLow($autoCreate = TRUE) {
		if ($this->low===NULL && $autoCreate && ! isset($this->_overrides['low']) ) {
			$this->low = $this->createLow();
		}
		return $this->low;
	}
	
	protected function createLow() {
		return NULL;
	}

	public function setLow($low) {
		$this->low = $this->validateLow($low);
	}

	protected function validateLow($low) {
	
		return $low;
	}

	public function getWidth($autoCreate = TRUE) {
		if ($this->width===NULL && $autoCreate && ! isset($this->_overrides['width']) ) {
			$this->width = $this->createWidth();
		}
		return $this->width;
	}
	
	protected function createWidth() {
		return NULL;
	}

	public function setWidth($width) {
		$this->width = $this->validateWidth($width);
	}

	protected function validateWidth($width) {
	
		return $width;
	}

	public function getHigh($autoCreate = TRUE) {
		if ($this->high===NULL && $autoCreate && ! isset($this->_overrides['high']) ) {
			$this->high = $this->createHigh();
		}
		return $this->high;
	}
	
	protected function createHigh() {
		return NULL;
	}

	public function setHigh($high) {
		$this->high = $this->validateHigh($high);
	}

	protected function validateHigh($high) {
	
		return $high;
	}

	public function getCenter($autoCreate = TRUE) {
		if ($this->center===NULL && $autoCreate && ! isset($this->_overrides['center']) ) {
			$this->center = $this->createCenter();
		}
		return $this->center;
	}
	
	protected function createCenter() {
		return NULL;
	}

	public function setCenter($center) {
		$this->center = $this->validateCenter($center);
	}

	protected function validateCenter($center) {
	
		return $center;
	}
} // end class IVLMO
