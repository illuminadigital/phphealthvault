<?php
namespace com\microsoft\wc\subscription;

use com\microsoft\wc\subscription\RecordItemChangedEventFilters;

/**
 * @XmlEntity	(xml="RecordItemChangedEvent")
 */
class RecordItemChangedEvent {
	/**
	 * A notification when an item in a user's record changes.
	 * The subscription defines the thing types that an application is interested in, and any change to one of those types (creation/update/deletion) in an authorized user's record will result in a notification being sent. HealthVault does not send notifications for items already in a user's record when the application is authorized.
	 */

	/**
	 * @XmlElement	(type="\com\microsoft\wc\subscription\RecordItemChangedEventFilters", name="filters")
	 */
	protected $filters;

	public function __construct($filters = NULL) {
		$this->filters = ($filters===NULL) ? NULL : $this->validateFilters($filters);
	}

	public function getFilters() {
		if ($this->filters===NULL) {
			$this->filters = $this->createFilters();
		}
		return $this->filters;
	}
	
	protected function createFilters() {
		return new RecordItemChangedEventFilters();
	}

	public function setFilters($filters) {
		$this->filters = $this->validateFilters($filters);
	}

	protected function validateFilters($filters) {
		if ( ! $filters instanceof RecordItemChangedEventFilters ) {
			$filters = new RecordItemChangedEventFilters ($filters);
		}
	
		return $filters;
	}
} // end class RecordItemChangedEvent
