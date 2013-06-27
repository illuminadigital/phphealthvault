<?php
namespace com\microsoft\wc\location;



/**
 * @XmlNamespaces ({
 *	@XmlNamespace(url="urn:com.microsoft.wc.location", prefix="wc-location")
 * })
 * @XmlEntity	(xml="AppSupportedRecordLocations")
 */
class AppSupportedRecordLocations {
	/**
	 * The list of application supported record locations.
	 */

	/**
	 * List of manually overridden properties that should not be re-generated automatically
	 * @var array
	 */
	protected $_overrides = array();


	/**
	 * @XmlElement	(type="\com\microsoft\wc\location\AppSupportedRecordLocation", collection="true", name="app-supported-record-location")
	 */
	protected $appSupportedRecordLocation;

	public function __construct($appSupportedRecordLocation = NULL) {
		$this->appSupportedRecordLocation = ($appSupportedRecordLocation===NULL) ? NULL : $this->validateAppSupportedRecordLocation($appSupportedRecordLocation);
	}

	public function getAppSupportedRecordLocation($autoCreate = TRUE) {
		if ($this->appSupportedRecordLocation===NULL && $autoCreate && ! isset($this->_overrides['appSupportedRecordLocation']) ) {
			$this->appSupportedRecordLocation = $this->createAppSupportedRecordLocation();
		}
		return $this->appSupportedRecordLocation;
	}
	
	protected function createAppSupportedRecordLocation() {
		return array();
	}

	public function setAppSupportedRecordLocation($appSupportedRecordLocation) {
		$this->appSupportedRecordLocation = $this->validateAppSupportedRecordLocation($appSupportedRecordLocation);
	}

	protected function validateAppSupportedRecordLocation($appSupportedRecordLocation) {
		if ( $appSupportedRecordLocation === FALSE ) {
			$this->_overrides['appSupportedRecordLocation'] = TRUE;
			return NULL;
		}

		if ( ! is_array ($appSupportedRecordLocation) && ! is_null($appSupportedRecordLocation) ) {
			$appSupportedRecordLocation = array($appSupportedRecordLocation);
		}

		unset ($this->_overrides['appSupportedRecordLocation']);
		$count = count($appSupportedRecordLocation);
		if ($count < 0) {
			throw new \Exception(sprintf('Supplied %s array has less than the required number (%d) of entries.', 'appSupportedRecordLocation', 0));
		}
		if ( ! empty($appSupportedRecordLocation) ) {
			foreach ($appSupportedRecordLocation as $entry) {
				if (!($entry instanceof \com\microsoft\wc\location\AppSupportedRecordLocation )) {
					throw new \Exception(sprintf('Supplied %s value was not %s', 'appSupportedRecordLocation', 'AppSupportedRecordLocation'));
				}
			}
		}
	
		return $appSupportedRecordLocation;
	}

	public function addAppSupportedRecordLocation($appSupportedRecordLocation) {
		$this->appSupportedRecordLocation[] = $appSupportedRecordLocation;
	}
} // end class AppSupportedRecordLocations
