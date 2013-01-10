<?php
namespace com\microsoft\wc\subscription;

use com\microsoft\wc\subscription\HVEventingSharedKey;

/**
 * @XmlEntity	(xml="NotificationAuthenticationInfo")
 */
class NotificationAuthenticationInfo {
	/**
	 */

	/**
	 * @XmlElement	(type="\com\microsoft\wc\subscription\HVEventingSharedKey", name="hv-eventing-shared-key")
	 */
	protected $hvEventingSharedKey;

	public function __construct($hvEventingSharedKey = NULL) {
		$this->hvEventingSharedKey = ($hvEventingSharedKey===NULL) ? NULL : $this->validateHvEventingSharedKey($hvEventingSharedKey);
	}

	public function getHvEventingSharedKey() {
		if ($this->hvEventingSharedKey===NULL) {
			$this->hvEventingSharedKey = $this->createHvEventingSharedKey();
		}
		return $this->hvEventingSharedKey;
	}
	
	protected function createHvEventingSharedKey() {
		return new HVEventingSharedKey();
	}

	public function setHvEventingSharedKey($hvEventingSharedKey) {
		$this->hvEventingSharedKey = $this->validateHvEventingSharedKey($hvEventingSharedKey);
	}

	protected function validateHvEventingSharedKey($hvEventingSharedKey) {
		if ( ! $hvEventingSharedKey instanceof HVEventingSharedKey ) {
			$hvEventingSharedKey = new HVEventingSharedKey ($hvEventingSharedKey);
		}
	
		return $hvEventingSharedKey;
	}
} // end class NotificationAuthenticationInfo
