<?php
namespace hl7_org\v3;



/**
 * @XmlNamespaces ({
 *	@XmlNamespace(url="urn:hl7-org:v3", prefix="")
 * })
 * @XmlEntity	(xml="EIVL_TS")
 */
class EIVLTS extends \SXCM_TS\SXCMTS {
	/**
	 * Note: because this type is defined as an extension of SXCM_T, all of the attributes and elements accepted for T are also accepted by this definition. However, they are NOT allowed by the normative description of this type. Unfortunately, we cannot write a general purpose schematron contraints to provide that extra validation, thus applications must be aware that instance (fragments) that pass validation with this might might still not be legal.
	 */

	/**
	 * @XmlElement	(type="\org\w3\www\_2001\XMLSchema\EIVL.event", name="event")
	 */
	protected $event;

	/**
	 * @XmlElement	(type="\org\w3\www\_2001\XMLSchema\IVLPQ", name="offset")
	 */
	protected $offset;

	public function __construct($event = NULL, $offset = NULL) {
		$this->event = ($event===NULL) ? NULL : $this->validateEvent($event);
		$this->offset = ($offset===NULL) ? NULL : $this->validateOffset($offset);
	}

	public function getEvent() {
		if ($this->event===NULL) {
			$this->event = $this->createEvent();
		}
		return $this->event;
	}
	
	protected function createEvent() {
		return NULL;
	}

	public function setEvent($event) {
		$this->event = $this->validateEvent($event);
	}

	protected function validateEvent($event) {
	
		return $event;
	}

	public function getOffset() {
		if ($this->offset===NULL) {
			$this->offset = $this->createOffset();
		}
		return $this->offset;
	}
	
	protected function createOffset() {
		return NULL;
	}

	public function setOffset($offset) {
		$this->offset = $this->validateOffset($offset);
	}

	protected function validateOffset($offset) {
	
		return $offset;
	}
} // end class EIVLTS
