<?php
namespace com\microsoft\wc\request;

use com\microsoft\wc\types\Guid;

/**
 * @XmlEntity	(xml="OfflinePersonInfo")
 */
class OfflinePersonInfo {
	/**
	 */

	/**
	 * @XmlElement	(type="\com\microsoft\wc\types\Guid", name="offline-person-id")
	 */
	protected $offlinePersonId;

	public function __construct($offlinePersonId = NULL) {
		$this->offlinePersonId = ($offlinePersonId===NULL) ? NULL : $this->validateOfflinePersonId($offlinePersonId);
	}

	public function getOfflinePersonId() {
		if ($this->offlinePersonId===NULL) {
			$this->offlinePersonId = $this->createOfflinePersonId();
		}
		return $this->offlinePersonId;
	}
	
	protected function createOfflinePersonId() {
		return new Guid();
	}

	public function setOfflinePersonId($offlinePersonId) {
		$this->offlinePersonId = $this->validateOfflinePersonId($offlinePersonId);
	}

	protected function validateOfflinePersonId($offlinePersonId) {
		if ( ! $offlinePersonId instanceof Guid ) {
			$offlinePersonId = new Guid ($offlinePersonId);
		}
	
		return $offlinePersonId;
	}
} // end class OfflinePersonInfo
