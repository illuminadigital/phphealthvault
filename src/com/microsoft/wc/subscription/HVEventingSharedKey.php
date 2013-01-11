<?php
namespace com\microsoft\wc\subscription;

use com\microsoft\wc\subscription\String128nw;
use com\microsoft\wc\subscription\EventingKeyVersionId;

/**
 * @XmlEntity	(xml="HVEventingSharedKey")
 */
class HVEventingSharedKey {
	/**
	 * Authentication of notification using a shared key
	 * The notification authorization information is sent in the Authorization header of the notification http request, in the format: HVEventingSharedKey [subscription-id]:[key-version]:[hmac] To verify the notification, compute the hmac using the key that was specified in the subscription and compare it to the hmac passed in the request.
	 */

	/**
	 * @XmlElement	(type="\com\microsoft\wc\subscription\String128nw", name="notification-key")
	 */
	protected $notificationKey;

	/**
	 * @XmlElement	(type="\com\microsoft\wc\subscription\EventingKeyVersionId", name="notification-key-version-id")
	 */
	protected $notificationKeyVersionId;

	public function __construct($notificationKey = NULL, $notificationKeyVersionId = NULL) {
		$this->notificationKey = ($notificationKey===NULL) ? NULL : $this->validateNotificationKey($notificationKey);
		$this->notificationKeyVersionId = ($notificationKeyVersionId===NULL) ? NULL : $this->validateNotificationKeyVersionId($notificationKeyVersionId);
	}

	public function getNotificationKey() {
		if ($this->notificationKey===NULL) {
			$this->notificationKey = $this->createNotificationKey();
		}
		return $this->notificationKey;
	}
	
	protected function createNotificationKey() {
		return new String128nw();
	}

	public function setNotificationKey($notificationKey) {
		$this->notificationKey = $this->validateNotificationKey($notificationKey);
	}

	protected function validateNotificationKey($notificationKey) {
		if ( ! $notificationKey instanceof String128nw ) {
			$notificationKey = new String128nw ($notificationKey);
		}
	
		return $notificationKey;
	}

	public function getNotificationKeyVersionId() {
		if ($this->notificationKeyVersionId===NULL) {
			$this->notificationKeyVersionId = $this->createNotificationKeyVersionId();
		}
		return $this->notificationKeyVersionId;
	}
	
	protected function createNotificationKeyVersionId() {
		return new EventingKeyVersionId();
	}

	public function setNotificationKeyVersionId($notificationKeyVersionId) {
		$this->notificationKeyVersionId = $this->validateNotificationKeyVersionId($notificationKeyVersionId);
	}

	protected function validateNotificationKeyVersionId($notificationKeyVersionId) {
		if ( ! $notificationKeyVersionId instanceof EventingKeyVersionId ) {
			$notificationKeyVersionId = new EventingKeyVersionId ($notificationKeyVersionId);
		}
	
		return $notificationKeyVersionId;
	}
} // end class HVEventingSharedKey
