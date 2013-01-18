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
	 * @XmlElement	(type="\hl7_org\v3\EIVL.event", name="event")
	 */
	protected $event;

	/**
	 * @XmlElement	(type="\hl7_org\v3\IVLPQ", name="offset")
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
		return new \hl7_org\v3\EIVL.event();
	}

	public function setEvent($event) {
		$this->event = $this->validateEvent($event);
	}

	protected function validateEvent($event) {
		if ( ! $event instanceof \hl7_org\v3\EIVL.event  && ! is_null($event) ) {
			$event = new \hl7_org\v3\EIVL.event ($event);
		}
	
		return $event;
	}

	public function getOffset() {
		if ($this->offset===NULL) {
			$this->offset = $this->createOffset();
		}
		return $this->offset;
	}
	
	protected function createOffset() {
		return new \hl7_org\v3\IVLPQ();
	}

	public function setOffset($offset) {
		$this->offset = $this->validateOffset($offset);
	}

	protected function validateOffset($offset) {
		if ( ! $offset instanceof \hl7_org\v3\IVLPQ  && ! is_null($offset) ) {
			$offset = new \hl7_org\v3\IVLPQ ($offset);
		}
	
		return $offset;
	}
} // end class EIVLTS
