<?php
namespace com\microsoft\wc\methods\response\GetEventSubscriptions;



/**
 * @XmlNamespaces ({
 *	@XmlNamespace(url="urn:com.microsoft.wc.methods.response.GetEventSubscriptions", prefix="")
 * })
 * @XmlEntity	(xml="info")
 */
class Info {
	/**
	 */

	/**
	 * @XmlElement	(type="\com\microsoft\wc\subscription\Subscriptions", name="subscriptions")
	 */
	protected $subscriptions;

	public function __construct($subscriptions = NULL) {
		$this->subscriptions = ($subscriptions===NULL) ? NULL : $this->validateSubscriptions($subscriptions);
	}

	public function getSubscriptions() {
		if ($this->subscriptions===NULL) {
			$this->subscriptions = $this->createSubscriptions();
		}
		return $this->subscriptions;
	}
	
	protected function createSubscriptions() {
		return new \com\microsoft\wc\subscription\Subscriptions();
	}

	public function setSubscriptions($subscriptions) {
		$this->subscriptions = $this->validateSubscriptions($subscriptions);
	}

	protected function validateSubscriptions($subscriptions) {
		if ( ! $subscriptions instanceof \com\microsoft\wc\subscription\Subscriptions ) {
			$subscriptions = new \com\microsoft\wc\subscription\Subscriptions ($subscriptions);
		}
	
		return $subscriptions;
	}
} // end class Info
