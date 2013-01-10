<?php
namespace com\microsoft\wc\subscription;

use com\microsoft\wc\subscription\TypeIds;

/**
 * @XmlEntity	(xml="RecordItemChangedEventFilter")
 */
class RecordItemChangedEventFilter {
	/**
	 * Defines the criteria when the event will fire.
	 */

	/**
	 * @XmlElement	(type="\com\microsoft\wc\subscription\TypeIds", name="type-ids")
	 */
	protected $typeIds;

	public function __construct($typeIds = NULL) {
		$this->typeIds = ($typeIds===NULL) ? NULL : $this->validateTypeIds($typeIds);
	}

	public function getTypeIds() {
		if ($this->typeIds===NULL) {
			$this->typeIds = $this->createTypeIds();
		}
		return $this->typeIds;
	}
	
	protected function createTypeIds() {
		return new TypeIds();
	}

	public function setTypeIds($typeIds) {
		$this->typeIds = $this->validateTypeIds($typeIds);
	}

	protected function validateTypeIds($typeIds) {
		if ( ! $typeIds instanceof TypeIds ) {
			$typeIds = new TypeIds ($typeIds);
		}
	
		return $typeIds;
	}
} // end class RecordItemChangedEventFilter
