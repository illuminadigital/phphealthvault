<?php
namespace com\microsoft\wc\methods\response\GetEventSubscriptions;



/**
 * @XmlNamespaces ({
 *	@XmlNamespace(url="urn:com.microsoft.wc.methods.response.GetEventSubscriptions", prefix="")
 * })
 * @XmlEntity	(xml="info")
 */
class Info extends \com\microsoft\wc\response\AnyMixed {
	/**
	 */

	/**
	 * List of manually overridden properties that should not be re-generated automatically
	 * @var array
	 */
	protected $_overrides = array();


	/**
	 * @XmlElement	(type="\com\microsoft\wc\subscription\Subscriptions", name="subscriptions")
	 */
	protected $subscriptions;

	public function __construct($subscriptions = NULL) {
		$this->subscriptions = ($subscriptions===NULL) ? NULL : $this->validateSubscriptions($subscriptions);
	}

	public function getSubscriptions($autoCreate = TRUE) {
		if ($this->subscriptions===NULL && $autoCreate && ! isset($this->_overrides['subscriptions']) ) {
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
