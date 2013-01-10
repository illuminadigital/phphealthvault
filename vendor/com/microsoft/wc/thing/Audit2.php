<?php
namespace com\microsoft\wc\thing;

use com\microsoft\wc\types\Guid;

/**
 * @XmlEntity	(xml="Audit2")
 */
class Audit2 {
	/**
	 * Represents an audit trail of creations or updates or deletes to information in the Health service.
	 * The audit records when the operation happened, by which application, and by which person.
	 */

	/**
	 * @XmlElement	(type="\com\microsoft\wc\types\Guid", name="master-app-id")
	 */
	protected $masterAppId;

	public function __construct($masterAppId = NULL) {
		$this->masterAppId = ($masterAppId===NULL) ? NULL : $this->validateMasterAppId($masterAppId);
	}

	public function getMasterAppId() {
		if ($this->masterAppId===NULL) {
			$this->masterAppId = $this->createMasterAppId();
		}
		return $this->masterAppId;
	}
	
	protected function createMasterAppId() {
		return new Guid();
	}

	public function setMasterAppId($masterAppId) {
		$this->masterAppId = $this->validateMasterAppId($masterAppId);
	}

	protected function validateMasterAppId($masterAppId) {
		if ( ! $masterAppId instanceof Guid  && ! is_null($masterAppId) ) {
			$masterAppId = new Guid ($masterAppId);
		}
	
		return $masterAppId;
	}
} // end class Audit2
