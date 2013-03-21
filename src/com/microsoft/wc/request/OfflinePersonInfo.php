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
	 * List of manually overridden properties that should not be re-generated automatically
	 * @var array
	 */
	protected $_overrides = array();


	/**
	 * @XmlElement	(type="\com\microsoft\wc\types\Guid", name="offline-person-id")
	 */
	protected $offlinePersonId;

	public function __construct($offlinePersonId = NULL) {
		$this->offlinePersonId = ($offlinePersonId===NULL) ? NULL : $this->validateOfflinePersonId($offlinePersonId);
	}

	public function getOfflinePersonId($autoCreate = TRUE) {
		if ($this->offlinePersonId===NULL && $autoCreate && ! isset($this->_overrides['offlinePersonId']) ) {
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
