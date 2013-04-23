<?php
namespace com\microsoft\wc\methods\response\GetApplicationSettings;



/**
 * @XmlNamespaces ({
 *	@XmlNamespace(url="urn:com.microsoft.wc.methods.response.GetApplicationSettings", prefix="")
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

	public function getAppSettings($autoCreate = TRUE) {
		if ($this->appSettings===NULL && $autoCreate && ! isset($this->_overrides['appSettings']) ) {
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
		if ( $appSettings === FALSE ) {
			$this->_overrides['appSettings'] = TRUE;
			return NULL;
		}

		if ( ! $appSettings instanceof \com\microsoft\wc\types\AppSettings  && ! is_null($appSettings) ) {
			$appSettings = new \com\microsoft\wc\types\AppSettings ($appSettings);
		}

		unset ($this->_overrides['appSettings']);
	
		return $appSettings;
	}

	public function getSelectedRecordId($autoCreate = TRUE) {
		if ($this->selectedRecordId===NULL && $autoCreate && ! isset($this->_overrides['selectedRecordId']) ) {
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
		if ( $selectedRecordId === FALSE ) {
			$this->_overrides['selectedRecordId'] = TRUE;
			return NULL;
		}

		if ( ! $selectedRecordId instanceof \com\microsoft\wc\types\Guid  && ! is_null($selectedRecordId) ) {
			$selectedRecordId = new \com\microsoft\wc\types\Guid ($selectedRecordId);
		}

		unset ($this->_overrides['selectedRecordId']);
	
		return $selectedRecordId;
	}
} // end class Info
