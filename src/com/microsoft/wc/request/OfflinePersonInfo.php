<?php
namespace com\microsoft\wc\request;



/**
 * @XmlNamespaces ({
 *	@XmlNamespace(url="urn:com.microsoft.wc.request", prefix="")
 * })
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
		return new \com\microsoft\wc\types\Guid();
	}

	public function setOfflinePersonId($offlinePersonId) {
		$this->offlinePersonId = $this->validateOfflinePersonId($offlinePersonId);
	}

	protected function validateOfflinePersonId($offlinePersonId) {
		if ( ! $offlinePersonId instanceof \com\microsoft\wc\types\Guid ) {
			$offlinePersonId = new \com\microsoft\wc\types\Guid ($offlinePersonId);
		}
	
		return $offlinePersonId;
	}
} // end class OfflinePersonInfo
