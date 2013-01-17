<?php
namespace com\microsoft\wc\thing;



/**
 * @XmlNamespaces ({
 *	@XmlNamespace(url="urn:com.microsoft.wc.thing", prefix="wc-thing")
 * })
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
		return new \com\microsoft\wc\types\Guid();
	}

	public function setMasterAppId($masterAppId) {
		$this->masterAppId = $this->validateMasterAppId($masterAppId);
	}

	protected function validateMasterAppId($masterAppId) {
		if ( ! $masterAppId instanceof \com\microsoft\wc\types\Guid  && ! is_null($masterAppId) ) {
			$masterAppId = new \com\microsoft\wc\types\Guid ($masterAppId);
		}
	
		return $masterAppId;
	}
} // end class Audit2
