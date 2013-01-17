<?php
namespace com\microsoft\wc\subscription;



/**
 * @XmlNamespaces ({
 *	@XmlNamespace(url="urn:com.microsoft.wc.subscription", prefix="wc-subscription")
 * })
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
		return new \com\microsoft\wc\subscription\HttpNotificationChannel();
	}

	public function setHttpNotificationChannel($httpNotificationChannel) {
		$this->httpNotificationChannel = $this->validateHttpNotificationChannel($httpNotificationChannel);
	}

	protected function validateHttpNotificationChannel($httpNotificationChannel) {
		if ( ! $httpNotificationChannel instanceof \com\microsoft\wc\subscription\HttpNotificationChannel ) {
			$httpNotificationChannel = new \com\microsoft\wc\subscription\HttpNotificationChannel ($httpNotificationChannel);
		}
	
		return $httpNotificationChannel;
	}
} // end class NotificationChannel
