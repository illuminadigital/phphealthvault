<?php
namespace com\microsoft\wc\thing\health_event;



/**
 * @XmlNamespaces ({
 *	@XmlNamespace(url="urn:com.microsoft.wc.thing.health-event", prefix="")
 * })
 * @XmlEntity	(xml="health-event")
 */
class HealthEvent extends \com\microsoft\wc\thing\AnyMixed {
	/**
	 * Represents a health event.
	 * A health event is a health-related occurence for the owner of the record.For children, it might be used to record the date that the child first crawls or talks.For adults, it might be used to record the date of an accident or progress through a rehabilitation.
	 */

	const ID = '1572af76-1653-4c39-9683-9f9ca6584ba3';
	const NAME = 'Health Event';

	/**
	 * List of manually overridden properties that should not be re-generated automatically
	 * @var array
	 */
	protected $_overrides = array();


	/**
	 * @XmlElement	(type="\com\microsoft\wc\dates\ApproxDateTime", name="when")
	 */
	protected $when;

	/**
	 * @XmlElement	(type="\com\microsoft\wc\types\CodableValue", name="event")
	 */
	protected $event;

	/**
	 * @XmlElement	(type="\com\microsoft\wc\types\CodableValue", name="category")
	 */
	protected $category;

	public function __construct($when = NULL, $event = NULL, $category = NULL) {
		$this->when = ($when===NULL) ? NULL : $this->validateWhen($when);
		$this->event = ($event===NULL) ? NULL : $this->validateEvent($event);
		$this->category = ($category===NULL) ? NULL : $this->validateCategory($category);
	}

	public function getWhen($autoCreate = TRUE) {
		if ($this->when===NULL && $autoCreate && ! isset($this->_overrides['when']) ) {
			$this->when = $this->createWhen();
		}
		return $this->when;
	}
	
	protected function createWhen() {
		return new \com\microsoft\wc\dates\ApproxDateTime();
	}

	public function setWhen($when) {
		$this->when = $this->validateWhen($when);
	}

	protected function validateWhen($when) {
		if ( ! $when instanceof \com\microsoft\wc\dates\ApproxDateTime ) {
			$when = new \com\microsoft\wc\dates\ApproxDateTime ($when);
		}
	
		return $when;
	}

	public function getEvent($autoCreate = TRUE) {
		if ($this->event===NULL && $autoCreate && ! isset($this->_overrides['event']) ) {
			$this->event = $this->createEvent();
		}
		return $this->event;
	}
	
	protected function createEvent() {
		return new \com\microsoft\wc\types\CodableValue();
	}

	public function setEvent($event) {
		$this->event = $this->validateEvent($event);
	}

	protected function validateEvent($event) {
		if ( ! $event instanceof \com\microsoft\wc\types\CodableValue ) {
			$event = new \com\microsoft\wc\types\CodableValue ($event);
		}
	
		return $event;
	}

	public function getCategory($autoCreate = TRUE) {
		if ($this->category===NULL && $autoCreate && ! isset($this->_overrides['category']) ) {
			$this->category = $this->createCategory();
		}
		return $this->category;
	}
	
	protected function createCategory() {
		return new \com\microsoft\wc\types\CodableValue();
	}

	public function setCategory($category) {
		$this->category = $this->validateCategory($category);
	}

	protected function validateCategory($category) {
		if ( $category === FALSE ) {
			$this->_overrides['category'] = TRUE;
			return NULL;
		}

		if ( ! $category instanceof \com\microsoft\wc\types\CodableValue  && ! is_null($category) ) {
			$category = new \com\microsoft\wc\types\CodableValue ($category);
		}

		unset ($this->_overrides['category']);
	
		return $category;
	}
} // end class HealthEvent
