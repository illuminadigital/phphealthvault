<?php
namespace com\microsoft\wc\methods\SetApplicationSettings;

use com\microsoft\wc\types\AppSettings;

/**
 * @XmlNamespaces ({
 *	@XmlNamespace(url="urn:com.microsoft.wc.methods.SetApplicationSettings", prefix="")
 * })
 * @XmlEntity	(xml="info")
 */
class Info extends \com\microsoft\wc\request\Info {
	/**
	 * The element of the request that contains the method specific parameters.
	 * All requests contain the info element to pass parameters that are specific to each method. If the method does not define an info element, the method does not take any parameters.
	 */

	/**
	 * @XmlElement	(type="\com\microsoft\wc\types\AppSettings", name="app-settings")
	 */
	protected $appSettings;

	public function __construct($appSettings = NULL) {
		$this->appSettings = ($appSettings===NULL) ? NULL : $this->validateAppSettings($appSettings);
	}

	public function getAppSettings() {
		if ($this->appSettings===NULL) {
			$this->appSettings = $this->createAppSettings();
		}
		return $this->appSettings;
	}
	
	protected function createAppSettings() {
		return new AppSettings();
	}

	public function setAppSettings($appSettings) {
		$this->appSettings = $this->validateAppSettings($appSettings);
	}

	protected function validateAppSettings($appSettings) {
		if ( ! $appSettings instanceof AppSettings ) {
			$appSettings = new AppSettings ($appSettings);
		}
	
		return $appSettings;
	}
} // end class Info
