<?php
namespace com\microsoft\wc\subscription;



/**
 * @XmlNamespaces ({
 *	@XmlNamespace(url="urn:com.microsoft.wc.subscription", prefix="wc-subscription")
 * })
 * @XmlEntity	(xml="RecordItemChangedEventFilters")
 */
class RecordItemChangedEventFilters {
	/**
	 * A container element for a list of filters.
	 */

	/**
	 * @XmlElement	(type="\com\microsoft\wc\subscription\RecordItemChangedEventFilter", collection="true", name="filter")
	 */
	protected $filter;

	public function __construct($filter = NULL) {
		$this->filter = ($filter===NULL) ? NULL : $this->validateFilter($filter);
	}

	public function getFilter() {
		if ($this->filter===NULL) {
			$this->filter = $this->createFilter();
		}
		return $this->filter;
	}
	
	protected function createFilter() {
		return array();
	}

	public function setFilter($filter) {
		$this->filter = $this->validateFilter($filter);
	}

	protected function validateFilter($filter) {
		if ( ! is_array ($filter) ) {
			$filter = array($filter);
		}
		$count = count($filter);
		if ($count < 1) {
			throw new \Exception(sprintf('Supplied %s array has less than the required number (%d) of entries.', 'filter', 1));
		}
		foreach ($filter as $entry) {
			if (!($entry instanceof RecordItemChangedEventFilter)) {
				throw new \Exception(sprintf('Supplied %s value was not %s', 'filter', 'RecordItemChangedEventFilter'));
			}
		}
	
		return $filter;
	}

	public function addFilter($filter) {
		$this->filter[] = $filter;
	}
} // end class RecordItemChangedEventFilters
