<?php
namespace com\microsoft\wc\subscription;



/**
 * @XmlNamespaces ({
 *	@XmlNamespace(url="urn:com.microsoft.wc.subscription", prefix="wc-subscription")
 * })
 * @XmlEntity	(xml="Subscription")
 */
class Subscription {
	/**
	 * Defines an event subscription.
	 * A HealthVault application can subscribe to be notified when specific events take place. For example, a notification could be sent whenever a record the application is authorized to see has a new Medication item placed into it. This subscription is persistent until the application removes it.
	 */

	/**
	 * @XmlElement	(type="\com\microsoft\wc\subscription\Common", name="common")
	 */
	protected $common;

	/**
	 * @XmlElement	(type="\com\microsoft\wc\subscription\RecordItemChangedEvent", name="record-item-changed-event")
	 */
	protected $recordItemChangedEvent;

	public function __construct($common = NULL, $recordItemChangedEvent = NULL) {
		$this->common = ($common===NULL) ? NULL : $this->validateCommon($common);
		$this->recordItemChangedEvent = ($recordItemChangedEvent===NULL) ? NULL : $this->validateRecordItemChangedEvent($recordItemChangedEvent);
	}

	public function getCommon() {
		if ($this->common===NULL) {
			$this->common = $this->createCommon();
		}
		return $this->common;
	}
	
	protected function createCommon() {
		return new \com\microsoft\wc\subscription\Common();
	}

	public function setCommon($common) {
		$this->common = $this->validateCommon($common);
	}

	protected function validateCommon($common) {
		if ( ! $common instanceof \com\microsoft\wc\subscription\Common ) {
			$common = new \com\microsoft\wc\subscription\Common ($common);
		}
	
		return $common;
	}

	public function getRecordItemChangedEvent() {
		if ($this->recordItemChangedEvent===NULL) {
			$this->recordItemChangedEvent = $this->createRecordItemChangedEvent();
		}
		return $this->recordItemChangedEvent;
	}
	
	protected function createRecordItemChangedEvent() {
		return new \com\microsoft\wc\subscription\RecordItemChangedEvent();
	}

	public function setRecordItemChangedEvent($recordItemChangedEvent) {
		$this->recordItemChangedEvent = $this->validateRecordItemChangedEvent($recordItemChangedEvent);
	}

	protected function validateRecordItemChangedEvent($recordItemChangedEvent) {
		if ( ! $recordItemChangedEvent instanceof \com\microsoft\wc\subscription\RecordItemChangedEvent ) {
			$recordItemChangedEvent = new \com\microsoft\wc\subscription\RecordItemChangedEvent ($recordItemChangedEvent);
		}
	
		return $recordItemChangedEvent;
	}
} // end class Subscription
