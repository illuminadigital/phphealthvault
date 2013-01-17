<?php
namespace com\microsoft\wc\methods\response\GetApplicationInfo;



/**
 * @XmlNamespaces ({
 *	@XmlNamespace(url="urn:com.microsoft.wc.methods.response.GetApplicationInfo", prefix="")
 * })
 * @XmlEntity	(xml="info")
 */
class Info {
	/**
	 * GetApplicationInfo returns information about the calling application.
	 * Configuration and installation values are returned for the calling application.
	 */

	/**
	 * @XmlElement	(type="\com\microsoft\wc\application\AppWithLogos", name="application")
	 */
	protected $application;

	public function __construct($application = NULL) {
		$this->application = ($application===NULL) ? NULL : $this->validateApplication($application);
	}

	public function getApplication() {
		if ($this->application===NULL) {
			$this->application = $this->createApplication();
		}
		return $this->application;
	}
	
	protected function createApplication() {
		return new \com\microsoft\wc\application\AppWithLogos();
	}

	public function setApplication($application) {
		$this->application = $this->validateApplication($application);
	}

	protected function validateApplication($application) {
		if ( ! $application instanceof \com\microsoft\wc\application\AppWithLogos ) {
			$application = new \com\microsoft\wc\application\AppWithLogos ($application);
		}
	
		return $application;
	}
} // end class Info
