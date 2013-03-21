<?php
namespace com\microsoft\wc\methods\SetApplicationSettings;



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
	 * List of manually overridden properties that should not be re-generated automatically
	 * @var array
	 */
	protected $_overrides = array();


	/**
	 * @XmlElement	(type="\com\microsoft\wc\types\AppSettings", name="app-settings")
	 */
	protected $appSettings;

	public function __construct($appSettings = NULL) {
		$this->appSettings = ($appSettings===NULL) ? NULL : $this->validateAppSettings($appSettings);
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
} // end class Info
