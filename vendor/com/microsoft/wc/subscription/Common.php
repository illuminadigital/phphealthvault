<?php
namespace com\microsoft\wc\subscription;

use com\microsoft\wc\subscription\Guid;
use com\microsoft\wc\subscription\NotificationAuthenticationInfo;
use com\microsoft\wc\subscription\NotificationChannel;

/**
 * @XmlNamespaces ({
 *	@XmlNamespace(url="urn:com.microsoft.wc.subscription", prefix="wc-subscription")
 * })
 * @XmlEntity	(xml="Common")
 */
class Common {
	/**
	 * Information that is common to all subscriptions.
	 */

	/**
	 * @XmlElement	(type="\com\microsoft\wc\subscription\Guid", name="id")
	 */
	protected $id;

	/**
	 * @XmlElement	(type="\com\microsoft\wc\subscription\NotificationAuthenticationInfo", name="notification-authentication-info")
	 */
	protected $notificationAuthenticationInfo;

	/**
	 * @XmlElement	(type="\com\microsoft\wc\subscription\NotificationChannel", name="notification-channel")
	 */
	protected $notificationChannel;

	public function __construct($id = NULL, $notificationAuthenticationInfo = NULL, $notificationChannel = NULL) {
		$this->id = ($id===NULL) ? NULL : $this->validateId($id);
		$this->notificationAuthenticationInfo = ($notificationAuthenticationInfo===NULL) ? NULL : $this->validateNotificationAuthenticationInfo($notificationAuthenticationInfo);
		$this->notificationChannel = ($notificationChannel===NULL) ? NULL : $this->validateNotificationChannel($notificationChannel);
	}

	public function getId() {
		if ($this->id===NULL) {
			$this->id = $this->createId();
		}
		return $this->id;
	}
	
	protected function createId() {
		return new Guid();
	}

	public function setId($id) {
		$this->id = $this->validateId($id);
	}

	protected function validateId($id) {
		if ( ! $id instanceof Guid ) {
			$id = new Guid ($id);
		}
	
		return $id;
	}

	public function getNotificationAuthenticationInfo() {
		if ($this->notificationAuthenticationInfo===NULL) {
			$this->notificationAuthenticationInfo = $this->createNotificationAuthenticationInfo();
		}
		return $this->notificationAuthenticationInfo;
	}
	
	protected function createNotificationAuthenticationInfo() {
		return new NotificationAuthenticationInfo();
	}

	public function setNotificationAuthenticationInfo($notificationAuthenticationInfo) {
		$this->notificationAuthenticationInfo = $this->validateNotificationAuthenticationInfo($notificationAuthenticationInfo);
	}

	protected function validateNotificationAuthenticationInfo($notificationAuthenticationInfo) {
		if ( ! $notificationAuthenticationInfo instanceof NotificationAuthenticationInfo ) {
			$notificationAuthenticationInfo = new NotificationAuthenticationInfo ($notificationAuthenticationInfo);
		}
	
		return $notificationAuthenticationInfo;
	}

	public function getNotificationChannel() {
		if ($this->notificationChannel===NULL) {
			$this->notificationChannel = $this->createNotificationChannel();
		}
		return $this->notificationChannel;
	}
	
	protected function createNotificationChannel() {
		return new NotificationChannel();
	}

	public function setNotificationChannel($notificationChannel) {
		$this->notificationChannel = $this->validateNotificationChannel($notificationChannel);
	}

	protected function validateNotificationChannel($notificationChannel) {
		if ( ! $notificationChannel instanceof NotificationChannel ) {
			$notificationChannel = new NotificationChannel ($notificationChannel);
		}
	
		return $notificationChannel;
	}
} // end class Common
