<?php
namespace com\microsoft\wc\types;



/**
 * @XmlEntity	(xml="AppInfo")
 */
class AppInfo extends \com\microsoft\wc\types\Guid {
	/**
	 * The applications to create credential tokens for.
	 * Each application will be issued a unique token that has a limited lifetime.
	 */

	/**
	 * @XmlAttribute	(type="boolean", name="is-multi-record-app")
	 */
	protected $isMultiRecordApp;

	public function __construct($isMultiRecordApp = NULL) {
		$this->isMultiRecordApp = ($isMultiRecordApp===NULL) ? NULL : $this->validateIsMultiRecordApp($isMultiRecordApp);
	}

	public function getIsMultiRecordApp() {
		if ($this->isMultiRecordApp===NULL) {
			$this->isMultiRecordApp = $this->createIsMultiRecordApp();
		}
		return $this->isMultiRecordApp;
	}
	
	protected function createIsMultiRecordApp() {
		return FALSE;
	}

	public function setIsMultiRecordApp($isMultiRecordApp) {
		$this->isMultiRecordApp = $this->validateIsMultiRecordApp($isMultiRecordApp);
	}

	protected function validateIsMultiRecordApp($isMultiRecordApp) {
		if ( ! is_bool($isMultiRecordApp) && ! is_null($isMultiRecordApp) ) {
			throw new \Exception(sprintf('Supplied %s value was not %s', 'isMultiRecordApp', 'boolean'));
		}
	
		return $isMultiRecordApp;
	}
} // end class AppInfo
