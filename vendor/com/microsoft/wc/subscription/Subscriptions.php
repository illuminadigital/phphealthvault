<?php
namespace com\microsoft\wc\subscription;

use com\microsoft\wc\subscription\Subscription;

/**
 * @XmlNamespaces ({
 *	@XmlNamespace(url="urn:com.microsoft.wc.subscription", prefix="wc-subscription")
 * })
 * @XmlEntity	(xml="Subscriptions")
 */
class Subscriptions {
	/**
	 * A container element for a list of subscriptions.
	 */

	/**
	 * @XmlElement	(type="\com\microsoft\wc\subscription\Subscription", collection="true", name="subscription")
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
		return array();
	}

	public function setSubscription($subscription) {
		$this->subscription = $this->validateSubscription($subscription);
	}

	protected function validateSubscription($subscription) {
		if ( ! $subscription instanceof Subscription ) {
			$subscription = new Subscription ($subscription);
		}
		$count = count($subscription);
		if ($count < 0) {
			throw new \Exception(sprintf('Supplied %s array has less than the required number (%d) of entries.', 'subscription', 0));
		}
		foreach ($subscription as $entry) {
			if (!($entry instanceof Subscription)) {
				throw new \Exception(sprintf('Supplied %s value was not %s', 'subscription', 'Subscription'));
			}
		}
	
		return $subscription;
	}

	public function addSubscription($subscription) {
		$this->subscription[] = $subscription;
	}
} // end class Subscriptions
