<?php
namespace com\microsoft\wc\methods\response\GetUpdatedRecordsForApplication;



/**
 * @XmlEntity	(xml="info")
 */
class Info {
	/**
	 * The element of the response that contains the method specific return value(s).
	 * All response schemas contain the info element which contain the return value of the method. If the method does not define an info element, the method has no return value.
	 */

	/**
	 * @XmlElement	(type="\com\microsoft\wc\methods\response\GetUpdatedRecordsForApplication\RecordId", collection="true", name="record-id")
	 */
	protected $recordId;

	public function __construct($recordId = NULL) {
		$this->recordId = ($recordId===NULL) ? NULL : $this->validateRecordId($recordId);
	}

	public function getRecordId() {
		if ($this->recordId===NULL) {
			$this->recordId = $this->createRecordId();
		}
		return $this->recordId;
	}
	
	protected function createRecordId() {
		return array();
	}

	public function setRecordId($recordId) {
		$this->recordId = $this->validateRecordId($recordId);
	}

	protected function validateRecordId($recordId) {
		$count = count($recordId);
		if ($count < 0) {
			throw new \Exception(sprintf('Supplied %s array has less than the required number (%d) of entries.', 'recordId', 0));
		}
		foreach ($recordId as $entry) {
			if ( ! is_record-id($entry) && ! is_null($entry) ) {
				throw new \Exception(sprintf('Supplied %s value was not %s', 'recordId', 'record-id'));
			}
		}
	
		return $recordId;
	}

	public function addRecordId($recordId) {
		$this->recordId[] = $this->validateRecordIdType($recordId);
	}

	protected function validateRecordIdType($recordId) {
		if ( ! is_record-id($recordId) && ! is_null($recordId) ) {
			throw new \Exception(sprintf('Supplied %s value was not %s', 'recordId', 'record-id'));
		}
	
		return $recordId;
	}
} // end class Info
