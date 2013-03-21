<?php
namespace com\microsoft\wc\methods\DeleteOpenQuery;



/**
 * @XmlNamespaces ({
 *	@XmlNamespace(url="urn:com.microsoft.wc.methods.DeleteOpenQuery", prefix="")
 * })
 * @XmlEntity	(xml="info")
 */
class Info extends \com\microsoft\wc\request\Info {
	/**
	 * The element of the request that contains the method specific parameters.
	 * All requests contain the info element to pass parameters that are specific to each method. If the method does not define an info element, the method does not take any parameters.
	 */

	/**
	 * List of manually overridden properties that should not be re-generated automatically
	 * @var array
	 */
	protected $_overrides = array();


	/**
	 * @XmlElement	(type="\com\microsoft\wc\types\Guid", name="query-id")
	 */
	protected $queryId;

	public function __construct($queryId = NULL) {
		$this->queryId = ($queryId===NULL) ? NULL : $this->validateQueryId($queryId);
	}

	public function getQueryId($autoCreate = TRUE) {
		if ($this->queryId===NULL && $autoCreate && ! isset($this->_overrides['queryId']) ) {
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
