<?php
namespace com\microsoft\wc\methods\response\SubscribeToEvent;



/**
 * @XmlNamespaces ({
 *	@XmlNamespace(url="urn:com.microsoft.wc.methods.response.SubscribeToEvent", prefix="")
 * })
 * @XmlEntity	(xml="info")
 */
class Info extends \com\microsoft\wc\methods\response\Info {
	/**
	 */

	/**
	 * List of manually overridden properties that should not be re-generated automatically
	 * @var array
	 */
	protected $_overrides = array();


	/**
	 * @XmlElement	(type="\com\microsoft\wc\types\Guid", name="subscription-id")
	 */
	protected $subscriptionId;

	public function __construct($subscriptionId = NULL) {
		$this->subscriptionId = ($subscriptionId===NULL) ? NULL : $this->validateSubscriptionId($subscriptionId);
	}

	public function getSubscriptionId($autoCreate = TRUE) {
		if ($this->subscriptionId===NULL && $autoCreate && ! isset($this->_overrides['subscriptionId']) ) {
			$this->subscriptionId = $this->createSubscriptionId();
		}
		return $this->subscriptionId;
	}
	
	protected function createSubscriptionId() {
		return new \com\microsoft\wc\types\Guid();
	}

	public function setSubscriptionId($subscriptionId) {
		$this->subscriptionId = $this->validateSubscriptionId($subscriptionId);
	}

	protected function validateSubscriptionId($subscriptionId) {
		if ( ! $subscriptionId instanceof \com\microsoft\wc\types\Guid ) {
			$subscriptionId = new \com\microsoft\wc\types\Guid ($subscriptionId);
		}
	
		return $subscriptionId;
	}
} // end class Info
