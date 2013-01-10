<?php
namespace com\microsoft\wc\methods\GetAuthorizedConnectRequests;



/**
 * @XmlEntity	(xml="info")
 */
class Info extends \com\microsoft\wc\request\Info {
	/**
	 * The element of the request that contains the method specific parameters.
	 * All requests contain the info element to pass parameters that are specific to each method. If the method does not define an info element, the method does not take any parameters.
	 */

	/**
	 * @XmlText	(type="string", name="authorized-connect-requests-since")
	 */
	protected $authorizedConnectRequestsSince;

	public function __construct($authorizedConnectRequestsSince = NULL) {
		$this->authorizedConnectRequestsSince = ($authorizedConnectRequestsSince===NULL) ? NULL : $this->validateAuthorizedConnectRequestsSince($authorizedConnectRequestsSince);
	}

	public function getAuthorizedConnectRequestsSince() {
		if ($this->authorizedConnectRequestsSince===NULL) {
			$this->authorizedConnectRequestsSince = $this->createAuthorizedConnectRequestsSince();
		}
		return $this->authorizedConnectRequestsSince;
	}
	
	protected function createAuthorizedConnectRequestsSince() {
		return NULL;
	}

	public function setAuthorizedConnectRequestsSince($authorizedConnectRequestsSince) {
		$this->authorizedConnectRequestsSince = $this->validateAuthorizedConnectRequestsSince($authorizedConnectRequestsSince);
	}

	protected function validateAuthorizedConnectRequestsSince($authorizedConnectRequestsSince) {
		if ( ! is_string($authorizedConnectRequestsSince) && ! is_null($authorizedConnectRequestsSince) ) {
			throw new \Exception(sprintf('Supplied %s value was not %s', 'authorizedConnectRequestsSince', 'string'));
		}
	
		return $authorizedConnectRequestsSince;
	}
} // end class Info
