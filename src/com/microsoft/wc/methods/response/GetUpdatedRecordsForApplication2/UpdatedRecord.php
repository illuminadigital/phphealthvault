<?php
namespace com\microsoft\wc\methods\response\GetUpdatedRecordsForApplication2;



/**
 * @XmlNamespaces ({
 *	@XmlNamespace(url="urn:com.microsoft.wc.methods.response.GetUpdatedRecordsForApplication2", prefix="")
 * })
 * @XmlEntity	(xml="UpdatedRecord")
 */
class UpdatedRecord {
	/**
	 * Record identifier for the record authorized for the application that has been updated and its corresponding person identifier.
	 */

	/**
	 * List of manually overridden properties that should not be re-generated automatically
	 * @var array
	 */
	protected $_overrides = array();


	/**
	 * @XmlElement	(type="\com\microsoft\wc\types\Guid", name="record-id")
	 */
	protected $recordId;

	/**
	 * @XmlText	(type="string", name="update-date")
	 */
	protected $updateDate;

	/**
	 * @XmlElement	(type="\com\microsoft\wc\types\Guid", name="person-id")
	 */
	protected $personId;

	public function __construct($recordId = NULL, $updateDate = NULL, $personId = NULL) {
		$this->recordId = ($recordId===NULL) ? NULL : $this->validateRecordId($recordId);
		$this->updateDate = ($updateDate===NULL) ? NULL : $this->validateUpdateDate($updateDate);
		$this->personId = ($personId===NULL) ? NULL : $this->validatePersonId($personId);
	}

	public function getRecordId($autoCreate = TRUE) {
		if ($this->recordId===NULL && $autoCreate && ! isset($this->_overrides['recordId']) ) {
			$this->recordId = $this->createRecordId();
		}
		return $this->recordId;
	}
	
	protected function createRecordId() {
		return new \com\microsoft\wc\types\Guid();
	}

	public function setRecordId($recordId) {
		$this->recordId = $this->validateRecordId($recordId);
	}

	protected function validateRecordId($recordId) {
		if ( ! $recordId instanceof \com\microsoft\wc\types\Guid ) {
			$recordId = new \com\microsoft\wc\types\Guid ($recordId);
		}
	
		return $recordId;
	}

	public function getUpdateDate($autoCreate = TRUE) {
		if ($this->updateDate===NULL && $autoCreate && ! isset($this->_overrides['updateDate']) ) {
			$this->updateDate = $this->createUpdateDate();
		}
		return $this->updateDate;
	}
	
	protected function createUpdateDate() {
		return NULL;
	}

	public function setUpdateDate($updateDate) {
		$this->updateDate = $this->validateUpdateDate($updateDate);
	}

	protected function validateUpdateDate($updateDate) {
		if (!is_string($updateDate)) {
			throw new \Exception(sprintf('Supplied %s value was not %s', 'updateDate', 'string'));
		}
	
		return $updateDate;
	}

	public function getPersonId($autoCreate = TRUE) {
		if ($this->personId===NULL && $autoCreate && ! isset($this->_overrides['personId']) ) {
			$this->personId = $this->createPersonId();
		}
		return $this->personId;
	}
	
	protected function createPersonId() {
		return new \com\microsoft\wc\types\Guid();
	}

	public function setPersonId($personId) {
		$this->personId = $this->validatePersonId($personId);
	}

	protected function validatePersonId($personId) {
		if ( ! $personId instanceof \com\microsoft\wc\types\Guid ) {
			$personId = new \com\microsoft\wc\types\Guid ($personId);
		}
	
		return $personId;
	}
} // end class UpdatedRecord
