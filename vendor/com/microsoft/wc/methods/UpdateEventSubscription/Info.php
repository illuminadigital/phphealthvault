<?php
namespace com\microsoft\wc\methods\UpdateEventSubscription;

use com\microsoft\wc\subscription\Subscription;

/**
 * @XmlEntity	(xml="info")
 */
class Info extends \com\microsoft\wc\request\Info {
	/**
	 */

	/**
	 * @XmlElement	(type="\com\microsoft\wc\subscription\Subscription", name="subscription")
	 */
	protected $subscription;

	public function __construct($subscription = NULL) {
		$this->subscription = ($subscription===NULL) ? NULL : $this->validateSubscription($subscription);
	}

	public function getSubscription() {
		if ($this->subscription===NULL) {
			$this->subscription = $this->createSubscription();
		}
		return $this->subscription;
	}
	
	protected function createSubscription() {
		return new Subscription();
	}

	public function setSubscription($subscription) {
		$this->subscription = $this->validateSubscription($subscription);
	}

	protected function validateSubscription($subscription) {
		if ( ! $subscription instanceof Subscription ) {
			$subscription = new Subscription ($subscription);
		}
	
		return $subscription;
	}
} // end class Info
