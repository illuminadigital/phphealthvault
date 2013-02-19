<?php
namespace hl7_org\v3;



/**
 * @XmlNamespaces ({
 *	@XmlNamespace(url="urn:hl7-org:v3", prefix="")
 * })
 * @XmlEntity	(xml="IVL_PPD_TS")
 */
class IVLPPDTS extends \org\w3\www\_2001\XMLSchema\SXCMPPDTS {
	/**
	 */

	/**
	 * @XmlElement	(type="\org\w3\www\_2001\XMLSchema\IVXBPPDTS", name="low")
	 */
	protected $low;

	/**
	 * @XmlElement	(type="\org\w3\www\_2001\XMLSchema\PPDPQ", name="width")
	 */
	protected $width;

	/**
	 * @XmlElement	(type="\org\w3\www\_2001\XMLSchema\IVXBPPDTS", name="high")
	 */
	protected $high;

	/**
	 * @XmlElement	(type="\org\w3\www\_2001\XMLSchema\PPDTS", name="center")
	 */
	protected $center;

	public function __construct($low = NULL, $width = NULL, $high = NULL, $center = NULL) {
		$this->low = ($low===NULL) ? NULL : $this->validateLow($low);
		$this->width = ($width===NULL) ? NULL : $this->validateWidth($width);
		$this->high = ($high===NULL) ? NULL : $this->validateHigh($high);
		$this->center = ($center===NULL) ? NULL : $this->validateCenter($center);
	}

	public function getLow() {
		if ($this->low===NULL) {
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

	public function getWidth() {
		if ($this->width===NULL) {
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

	public function getHigh() {
		if ($this->high===NULL) {
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

	public function getCenter() {
		if ($this->center===NULL) {
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
} // end class IVLPPDTS
