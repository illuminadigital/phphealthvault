<?php
namespace hl7_org\v3;



/**
 * @XmlNamespaces ({
 *	@XmlNamespace(url="urn:hl7-org:v3", prefix="")
 * })
 * @XmlEntity	(xml="EIVL_PPD_TS")
 */
class EIVLPPDTS extends \org\w3\www\_2001\XMLSchema\SXCMPPDTS {
	/**
	 * Note: because this type is defined as an extension of SXCM_T, all of the attributes and elements accepted for T are also accepted by this definition. However, they are NOT allowed by the normative description of this type. Unfortunately, we cannot write a general purpose schematron contraints to provide that extra validation, thus applications must be aware that instance (fragments) that pass validation with this might might still not be legal.
	 */

	/**
	 * List of manually overridden properties that should not be re-generated automatically
	 * @var array
	 */
	protected $_overrides = array();


	/**
	 * @XmlElement	(type="\org\w3\www\_2001\XMLSchema\EIVL.event", name="event")
	 */
	protected $event;

	/**
	 * @XmlElement	(type="\org\w3\www\_2001\XMLSchema\IVLPPDPQ", name="offset")
	 */
	protected $offset;

	public function __construct($event = NULL, $offset = NULL) {
		$this->event = ($event===NULL) ? NULL : $this->validateEvent($event);
		$this->offset = ($offset===NULL) ? NULL : $this->validateOffset($offset);
	}

	public function getEvent($autoCreate = TRUE) {
		if ($this->event===NULL && $autoCreate && ! isset($this->_overrides['event']) ) {
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

	public function getOffset($autoCreate = TRUE) {
		if ($this->offset===NULL && $autoCreate && ! isset($this->_overrides['offset']) ) {
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
} // end class EIVLPPDTS
