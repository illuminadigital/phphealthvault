<?php
namespace com\microsoft\wc\subscription;

use com\microsoft\wc\subscription\HttpNotificationChannel;

/**
 * @XmlEntity	(xml="NotificationChannel")
 */
class NotificationChannel {
	/**
	 */

	/**
	 * @XmlElement	(type="\com\microsoft\wc\subscription\HttpNotificationChannel", name="http-notification-channel")
	 */
	protected $httpNotificationChannel;

	public function __construct($httpNotificationChannel = NULL) {
		$this->httpNotificationChannel = ($httpNotificationChannel===NULL) ? NULL : $this->validateHttpNotificationChannel($httpNotificationChannel);
	}

	public function getHttpNotificationChannel() {
		if ($this->httpNotificationChannel===NULL) {
			$this->httpNotificationChannel = $this->createHttpNotificationChannel();
		}
		return $this->httpNotificationChannel;
	}
	
	protected function createHttpNotificationChannel() {
		return new HttpNotificationChannel();
	}

	public function setHttpNotificationChannel($httpNotificationChannel) {
		$this->httpNotificationChannel = $this->validateHttpNotificationChannel($httpNotificationChannel);
	}

	protected function validateHttpNotificationChannel($httpNotificationChannel) {
		if ( ! $httpNotificationChannel instanceof HttpNotificationChannel ) {
			$httpNotificationChannel = new HttpNotificationChannel ($httpNotificationChannel);
		}
	
		return $httpNotificationChannel;
	}
} // end class NotificationChannel
