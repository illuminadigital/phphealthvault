<?php
namespace com\microsoft\wc\methods\response\SubscribeToEvent;

use com\microsoft\wc\types\Guid;

/**
 * @XmlNamespaces ({
 *	@XmlNamespace(url="urn:com.microsoft.wc.methods.response.SubscribeToEvent", prefix="")
 * })
 * @XmlEntity	(xml="info")
 */
class Info {
	/**
	 */

	/**
	 * @XmlElement	(type="\com\microsoft\wc\types\Guid", name="subscription-id")
	 */
	protected $subscriptionId;

	public function __construct($subscriptionId = NULL) {
		$this->subscriptionId = ($subscriptionId===NULL) ? NULL : $this->validateSubscriptionId($subscriptionId);
	}

	public function getSubscriptionId() {
		if ($this->subscriptionId===NULL) {
			$this->subscriptionId = $this->createSubscriptionId();
		}
		return $this->subscriptionId;
	}
	
	protected function createSubscriptionId() {
		return new Guid();
	}

	public function setSubscriptionId($subscriptionId) {
		$this->subscriptionId = $this->validateSubscriptionId($subscriptionId);
	}

	protected function validateSubscriptionId($subscriptionId) {
		if ( ! $subscriptionId instanceof Guid ) {
			$subscriptionId = new Guid ($subscriptionId);
		}
	
		return $subscriptionId;
	}
} // end class Info
