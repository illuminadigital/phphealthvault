<?php
namespace com\microsoft\wc\methods\response\GetUpdatedRecordsForApplication2;



/**
 * @XmlNamespaces ({
 *	@XmlNamespace(url="urn:com.microsoft.wc.methods.response.GetUpdatedRecordsForApplication2", prefix="")
 * })
 * @XmlEntity	(xml="UpdatedRecords")
 */
class UpdatedRecords {
	/**
	 * The list of records authorized for the application that have been updated.
	 */

	/**
	 * List of manually overridden properties that should not be re-generated automatically
	 * @var array
	 */
	protected $_overrides = array();


	/**
	 * @XmlElement	(type="\com\microsoft\wc\methods\response\GetUpdatedRecordsForApplication2\UpdatedRecord", collection="true", name="updated-record")
	 */
	protected $updatedRecord;

	public function __construct($updatedRecord = NULL) {
		$this->updatedRecord = ($updatedRecord===NULL) ? NULL : $this->validateUpdatedRecord($updatedRecord);
	}

	public function getUpdatedRecord($autoCreate = TRUE) {
		if ($this->updatedRecord===NULL && $autoCreate && ! isset($this->_overrides['updatedRecord']) ) {
			$this->updatedRecord = $this->createUpdatedRecord();
		}
		return $this->updatedRecord;
	}
	
	protected function createUpdatedRecord() {
		return array();
	}

	public function setUpdatedRecord($updatedRecord) {
		$this->updatedRecord = $this->validateUpdatedRecord($updatedRecord);
	}

	protected function validateUpdatedRecord($updatedRecord) {
		if ( $updatedRecord === FALSE ) {
			$this->_overrides['updatedRecord'] = TRUE;
			return NULL;
		}

		if ( ! is_array ($updatedRecord) && ! is_null($updatedRecord) ) {
			$updatedRecord = array($updatedRecord);
		}

		unset ($this->_overrides['updatedRecord']);
		$count = count($updatedRecord);
		if ($count < 0) {
			throw new \Exception(sprintf('Supplied %s array has less than the required number (%d) of entries.', 'updatedRecord', 0));
		}
		if ( ! empty($updatedRecord) ) {
			foreach ($updatedRecord as $entry) {
				if (!($entry instanceof \com\microsoft\wc\methods\response\GetUpdatedRecordsForApplication2\UpdatedRecord )) {
					throw new \Exception(sprintf('Supplied %s value was not %s', 'updatedRecord', 'UpdatedRecord'));
				}
			}
		}
	
		return $updatedRecord;
	}

	public function addUpdatedRecord($updatedRecord) {
		$this->updatedRecord[] = $updatedRecord;
	}
} // end class UpdatedRecords
