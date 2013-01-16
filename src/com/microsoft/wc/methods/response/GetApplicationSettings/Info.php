<?php
namespace com\microsoft\wc\methods\response\GetApplicationSettings;



/**
 * @XmlEntity	(xml="info")
 */
class Info {
	/**
	 * The element of the response that contains the method specific return value(s).
	 * All response schemas contain the info element which contain the return value of the method. If the method does not define an info element, the method has no return value.
	 */

	/**
	 * @XmlElement	(type="\com\microsoft\wc\types\AppSettings", name="app-settings")
	 */
	protected $appSettings;

	/**
	 * @XmlElement	(type="\com\microsoft\wc\types\Guid", name="selected-record-id")
	 */
	protected $selectedRecordId;

	public function __construct($appSettings = NULL, $selectedRecordId = NULL) {
		$this->appSettings = ($appSettings===NULL) ? NULL : $this->validateAppSettings($appSettings);
		$this->selectedRecordId = ($selectedRecordId===NULL) ? NULL : $this->validateSelectedRecordId($selectedRecordId);
	}

	public function getAppSettings() {
		if ($this->appSettings===NULL) {
			$this->appSettings = $this->createAppSettings();
		}
		return $this->appSettings;
	}
	
	protected function createAppSettings() {
		return new \com\microsoft\wc\types\AppSettings();
	}

	public function setAppSettings($appSettings) {
		$this->appSettings = $this->validateAppSettings($appSettings);
	}

	protected function validateAppSettings($appSettings) {
		if ( ! $appSettings instanceof \com\microsoft\wc\types\AppSettings  && ! is_null($appSettings) ) {
			$appSettings = new \com\microsoft\wc\types\AppSettings ($appSettings);
		}
	
		return $appSettings;
	}

	public function getSelectedRecordId() {
		if ($this->selectedRecordId===NULL) {
			$this->selectedRecordId = $this->createSelectedRecordId();
		}
		return $this->selectedRecordId;
	}
	
	protected function createSelectedRecordId() {
		return new \com\microsoft\wc\types\Guid();
	}

	public function setSelectedRecordId($selectedRecordId) {
		$this->selectedRecordId = $this->validateSelectedRecordId($selectedRecordId);
	}

	protected function validateSelectedRecordId($selectedRecordId) {
		if ( ! $selectedRecordId instanceof \com\microsoft\wc\types\Guid  && ! is_null($selectedRecordId) ) {
			$selectedRecordId = new \com\microsoft\wc\types\Guid ($selectedRecordId);
		}
	
		return $selectedRecordId;
	}
} // end class Info
