<?php
namespace com\microsoft\wc\methods\response\GetUpdatedRecordsForApplication;



/**
 * @XmlNamespaces ({
 *	@XmlNamespace(url="urn:com.microsoft.wc.methods.response.GetUpdatedRecordsForApplication", prefix="")
 * })
 * @XmlEntity	(xml="record-id")
 */
class RecordId {
	/**
	 * The list of record identifiers for the records authorized for the application that have been updated.
	 */

	/**
	 * @XmlAttribute	(type="string", name="update-date")
	 */
	protected $updateDate;

	public function __construct($updateDate = NULL) {
		$this->updateDate = ($updateDate===NULL) ? NULL : $this->validateUpdateDate($updateDate);
	}

	public function getUpdateDate() {
		if ($this->updateDate===NULL) {
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
} // end class RecordId
