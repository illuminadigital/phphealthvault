<?php
namespace com\microsoft\wc\methods\response\DeleteOpenQuery;



/**
 * @XmlNamespaces ({
 *	@XmlNamespace(url="urn:com.microsoft.wc.methods.response.DeleteOpenQuery", prefix="")
 * })
 * @XmlEntity	(xml="info")
 */
class Info {
	/**
	 * The element of the response that contains the method specific return value(s).
	 * All response schemas contain the info element which contains the return value of the method. If the method does not define an info element, the method has no return value.
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
		return new \com\microsoft\wc\types\Guid();
	}

	public function setQueryId($queryId) {
		$this->queryId = $this->validateQueryId($queryId);
	}

	protected function validateQueryId($queryId) {
		if ( ! $queryId instanceof \com\microsoft\wc\types\Guid ) {
			$queryId = new \com\microsoft\wc\types\Guid ($queryId);
		}
	
		return $queryId;
	}
} // end class Info
