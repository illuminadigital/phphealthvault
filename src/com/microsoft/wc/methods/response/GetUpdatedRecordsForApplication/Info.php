<?php
namespace com\microsoft\wc\methods\response\GetUpdatedRecordsForApplication;



/**
 * @XmlNamespaces ({
 *	@XmlNamespace(url="urn:com.microsoft.wc.methods.response.GetUpdatedRecordsForApplication", prefix="")
 * })
 * @XmlEntity	(xml="info")
 */
class Info extends \com\microsoft\wc\response\AnyMixed {
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
	 * @XmlElement	(type="\com\microsoft\wc\methods\response\GetUpdatedRecordsForApplication\RecordId", collection="true", name="record-id")
	 */
	protected $recordId;

	public function __construct($recordId = NULL) {
		$this->recordId = ($recordId===NULL) ? NULL : $this->validateRecordId($recordId);
	}

	public function getRecordId($autoCreate = TRUE) {
		if ($this->recordId===NULL && $autoCreate && ! isset($this->_overrides['recordId']) ) {
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
		if ( $recordId === FALSE ) {
			$this->_overrides['recordId'] = TRUE;
			return NULL;
		}

		if ( ! is_array ($recordId) && ! is_null($recordId) ) {
			$recordId = array($recordId);
		}

		unset ($this->_overrides['recordId']);
		$count = count($recordId);
		if ($count < 0) {
			throw new \Exception(sprintf('Supplied %s array has less than the required number (%d) of entries.', 'recordId', 0));
		}
		if ( ! empty($recordId) ) {
			foreach ($recordId as $entry) {
				if (!($entry instanceof RecordId)) {
					throw new \Exception(sprintf('Supplied %s value was not %s', 'recordId', 'record-id'));
				}
			}
		}
	
		return $recordId;
	}

	public function addRecordId($recordId) {
		$this->recordId[] = $recordId;
	}
} // end class Info
