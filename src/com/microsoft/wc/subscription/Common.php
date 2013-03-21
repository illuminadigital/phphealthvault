<?php
namespace com\microsoft\wc\subscription;



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
	 * List of manually overridden properties that should not be re-generated automatically
	 * @var array
	 */
	protected $_overrides = array();


	/**
	 * @XmlElement	(type="\com\microsoft\wc\types\Guid", name="id")
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

	public function getId($autoCreate = TRUE) {
		if ($this->id===NULL && $autoCreate && ! isset($this->_overrides['id']) ) {
			$this->id = $this->createId();
		}
		return $this->id;
	}
	
	protected function createId() {
		return new \com\microsoft\wc\types\Guid();
	}

	public function setId($id) {
		$this->id = $this->validateId($id);
	}

	protected function validateId($id) {
		if ( $id === FALSE ) {
			$this->_overrides['id'] = TRUE;
			return NULL;
		}

		if ( ! $id instanceof \com\microsoft\wc\types\Guid  && ! is_null($id) ) {
			$id = new \com\microsoft\wc\types\Guid ($id);
		}

		unset ($this->_overrides['id']);
	
		return $id;
	}

	public function getNotificationAuthenticationInfo($autoCreate = TRUE) {
		if ($this->notificationAuthenticationInfo===NULL && $autoCreate && ! isset($this->_overrides['notificationAuthenticationInfo']) ) {
			$this->notificationAuthenticationInfo = $this->createNotificationAuthenticationInfo();
		}
		return $this->notificationAuthenticationInfo;
	}
	
	protected function createNotificationAuthenticationInfo() {
		return new \com\microsoft\wc\subscription\NotificationAuthenticationInfo();
	}

	public function setNotificationAuthenticationInfo($notificationAuthenticationInfo) {
		$this->notificationAuthenticationInfo = $this->validateNotificationAuthenticationInfo($notificationAuthenticationInfo);
	}

	protected function validateNotificationAuthenticationInfo($notificationAuthenticationInfo) {
		if ( ! $notificationAuthenticationInfo instanceof \com\microsoft\wc\subscription\NotificationAuthenticationInfo ) {
			$notificationAuthenticationInfo = new \com\microsoft\wc\subscription\NotificationAuthenticationInfo ($notificationAuthenticationInfo);
		}
	
		return $notificationAuthenticationInfo;
	}

	public function getNotificationChannel($autoCreate = TRUE) {
		if ($this->notificationChannel===NULL && $autoCreate && ! isset($this->_overrides['notificationChannel']) ) {
			$this->notificationChannel = $this->createNotificationChannel();
		}
		return $this->notificationChannel;
	}
	
	protected function createNotificationChannel() {
		return new \com\microsoft\wc\subscription\NotificationChannel();
	}

	public function setNotificationChannel($notificationChannel) {
		$this->notificationChannel = $this->validateNotificationChannel($notificationChannel);
	}

	protected function validateNotificationChannel($notificationChannel) {
		if ( ! $notificationChannel instanceof \com\microsoft\wc\subscription\NotificationChannel ) {
			$notificationChannel = new \com\microsoft\wc\subscription\NotificationChannel ($notificationChannel);
		}
	
		return $notificationChannel;
	}
} // end class Common
