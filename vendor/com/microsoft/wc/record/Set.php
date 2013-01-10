<?php
namespace com\microsoft\wc\record;

use com\microsoft\wc\types\DateRange;
use com\microsoft\wc\types\Guid;

/**
 * @XmlEntity	(xml="Set")
 */
class Set {
	/**
	 */

	/**
	 * @XmlElement	(type="\com\microsoft\wc\types\DateRange", collection="true", name="date-range")
	 */
	protected $dateRange;

	/**
	 * @XmlElement	(type="\com\microsoft\wc\types\Guid", collection="true", name="type-id")
	 */
	protected $typeId;

	public function __construct($dateRange = NULL, $typeId = NULL) {
		$this->dateRange = ($dateRange===NULL) ? NULL : $this->validateDateRange($dateRange);
		$this->typeId = ($typeId===NULL) ? NULL : $this->validateTypeId($typeId);
	}

	public function getDateRange() {
		if ($this->dateRange===NULL) {
			$this->dateRange = $this->createDateRange();
		}
		return $this->dateRange;
	}
	
	protected function createDateRange() {
		return array();
	}

	public function setDateRange($dateRange) {
		$this->dateRange = $this->validateDateRange($dateRange);
	}

	protected function validateDateRange($dateRange) {
		if ( ! $dateRange instanceof DateRange  && ! is_null($dateRange) ) {
			$dateRange = new DateRange ($dateRange);
		}
		$count = count($dateRange);
		if ($count < 0) {
			throw new \Exception(sprintf('Supplied %s array has less than the required number (%d) of entries.', 'dateRange', 0));
		}
		foreach ($dateRange as $entry) {
			if (!($entry instanceof DateRange)) {
				throw new \Exception(sprintf('Supplied %s value was not %s', 'dateRange', 'DateRange'));
			}
		}
	
		return $dateRange;
	}

	public function addDateRange($dateRange) {
		$this->dateRange[] = $dateRange;
	}

	public function getTypeId() {
		if ($this->typeId===NULL) {
			$this->typeId = $this->createTypeId();
		}
		return $this->typeId;
	}
	
	protected function createTypeId() {
		return array();
	}

	public function setTypeId($typeId) {
		$this->typeId = $this->validateTypeId($typeId);
	}

	protected function validateTypeId($typeId) {
		if ( ! $typeId instanceof Guid  && ! is_null($typeId) ) {
			$typeId = new Guid ($typeId);
		}
		$count = count($typeId);
		if ($count < 0) {
			throw new \Exception(sprintf('Supplied %s array has less than the required number (%d) of entries.', 'typeId', 0));
		}
		foreach ($typeId as $entry) {
			if (!($entry instanceof Guid)) {
				throw new \Exception(sprintf('Supplied %s value was not %s', 'typeId', 'guid'));
			}
		}
	
		return $typeId;
	}

	public function addTypeId($typeId) {
		$this->typeId[] = $typeId;
	}
} // end class Set
