<?php
namespace com\microsoft\wc\methods\response\GetUpdatedRecordsForApplication2;



/**
 * @XmlNamespaces ({
 *	@XmlNamespace(url="urn:com.microsoft.wc.methods.response.GetUpdatedRecordsForApplication2", prefix="")
 * })
 * @XmlEntity	(xml="info")
 */
class Info extends \com\microsoft\wc\methods\response\Info {
	/**
	 * The element of the response that contains the method specific return value(s).
	 * All response schemas contain the info element which contain the return value of the method. If the method does not define an info element, the method has no return value.
	 */

	/**
	 * List of manually overridden properties that should not be re-generated automatically
	 * @var array
	 */
	protected $_overrides = array();


	/**
	 * @XmlElement	(type="\com\microsoft\wc\methods\response\GetUpdatedRecordsForApplication2\UpdatedRecords", name="updated-records")
	 */
	protected $updatedRecords;

	public function __construct($updatedRecords = NULL) {
		$this->updatedRecords = ($updatedRecords===NULL) ? NULL : $this->validateUpdatedRecords($updatedRecords);
	}

	public function getUpdatedRecords($autoCreate = TRUE) {
		if ($this->updatedRecords===NULL && $autoCreate && ! isset($this->_overrides['updatedRecords']) ) {
			$this->updatedRecords = $this->createUpdatedRecords();
		}
		return $this->updatedRecords;
	}
	
	protected function createUpdatedRecords() {
		return new \com\microsoft\wc\methods\response\GetUpdatedRecordsForApplication2\UpdatedRecords();
	}

	public function setUpdatedRecords($updatedRecords) {
		$this->updatedRecords = $this->validateUpdatedRecords($updatedRecords);
	}

	protected function validateUpdatedRecords($updatedRecords) {
		if ( ! $updatedRecords instanceof \com\microsoft\wc\methods\response\GetUpdatedRecordsForApplication2\UpdatedRecords ) {
			$updatedRecords = new \com\microsoft\wc\methods\response\GetUpdatedRecordsForApplication2\UpdatedRecords ($updatedRecords);
		}
	
		return $updatedRecords;
	}
} // end class Info
