<?php
namespace com\microsoft\wc\methods\GetOpenQueryInfo;

use com\microsoft\wc\types\Guid;

/**
 * @XmlEntity	(xml="info")
 */
class Info extends \com\microsoft\wc\request\Info {
	/**
	 * The element of the request that contains the method specific parameters.
	 * All requests contain the info element to pass parameters that are specific to each method. If the method does not define an info element, the method does not take any parameters.
	 */

	/**
	 * @XmlElement	(type="\com\microsoft\wc\types\Guid", name="query-id")
	 */
	protected $queryId;

	public function __construct($queryId = NULL) {
		$this->queryId = ($queryId===NULL) ? NULL : $this->validateQueryId($queryId);
	}

	public function getQueryId() {
		if ($this->queryId===NULL) {
			$this->queryId = $this->createQueryId();
		}
		return $this->queryId;
	}
	
	protected function createQueryId() {
		return new Guid();
	}

	public function setQueryId($queryId) {
		$this->queryId = $this->validateQueryId($queryId);
	}

	protected function validateQueryId($queryId) {
		if ( ! $queryId instanceof Guid ) {
			$queryId = new Guid ($queryId);
		}
	
		return $queryId;
	}
} // end class Info
