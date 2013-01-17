<?php
namespace com\microsoft\wc\methods\GetUpdatedRecordsForApplication;



/**
 * @XmlNamespaces ({
 *	@XmlNamespace(url="urn:com.microsoft.wc.methods.GetUpdatedRecordsForApplication", prefix="")
 * })
 * @XmlEntity	(xml="info")
 */
class Info extends \com\microsoft\wc\request\Info {
	/**
	 * The element of the request that contains the method specific parameters.
	 * All requests contain the info element to pass parameters that are specific to each method. If the method does not define an info element, the method does not take any parameters.
	 */

	/**
	 * @XmlText	(type="string", name="update-date")
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
		if ( ! is_string($updateDate) && ! is_null($updateDate) ) {
			throw new \Exception(sprintf('Supplied %s value was not %s', 'updateDate', 'string'));
		}
	
		return $updateDate;
	}
} // end class Info
