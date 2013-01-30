<?php
namespace com\microsoft\wc\methods\response\GetPeopleForRecord;



/**
 * @XmlNamespaces ({
 *	@XmlNamespace(url="urn:com.microsoft.wc.methods.response.GetPeopleForRecord", prefix="")
 * })
 * @XmlEntity	(xml="info")
 */
class Info extends \com\microsoft\wc\methods\response\Info {
	/**
	 * The element that contains the method specific response.
	 * All responses contain the info element to return data that are specific to each method. If the method does not define an info element, the method does not expect any data for the response.
	 */

	/**
	 * @XmlElement	(type="\com\microsoft\wc\record\ActivePersonAuthorizationNoIds", collection="true", name="active-person-authorization")
	 */
	protected $activePersonAuthorization;

	/**
	 * @XmlElement	(type="\com\microsoft\wc\record\NonActiveAuthorizationNoIds", collection="true", name="non-active-authorization")
	 */
	protected $nonActiveAuthorization;

	public function __construct($activePersonAuthorization = NULL, $nonActiveAuthorization = NULL) {
		$this->activePersonAuthorization = ($activePersonAuthorization===NULL) ? NULL : $this->validateActivePersonAuthorization($activePersonAuthorization);
		$this->nonActiveAuthorization = ($nonActiveAuthorization===NULL) ? NULL : $this->validateNonActiveAuthorization($nonActiveAuthorization);
	}

	public function getActivePersonAuthorization() {
		if ($this->activePersonAuthorization===NULL) {
			$this->activePersonAuthorization = $this->createActivePersonAuthorization();
		}
		return $this->activePersonAuthorization;
	}
	
	protected function createActivePersonAuthorization() {
		return array();
	}

	public function setActivePersonAuthorization($activePersonAuthorization) {
		$this->activePersonAuthorization = $this->validateActivePersonAuthorization($activePersonAuthorization);
	}

	protected function validateActivePersonAuthorization($activePersonAuthorization) {
		if ( ! is_array ($activePersonAuthorization) ) {
			$activePersonAuthorization = array($activePersonAuthorization);
		}
		$count = count($activePersonAuthorization);
		if ($count < 1) {
			throw new \Exception(sprintf('Supplied %s array has less than the required number (%d) of entries.', 'activePersonAuthorization', 1));
		}
		foreach ($activePersonAuthorization as $entry) {
			if (!($entry instanceof ActivePersonAuthorizationNoIds)) {
				throw new \Exception(sprintf('Supplied %s value was not %s', 'activePersonAuthorization', 'ActivePersonAuthorizationNoIds'));
			}
		}
	
		return $activePersonAuthorization;
	}

	public function addActivePersonAuthorization($activePersonAuthorization) {
		$this->activePersonAuthorization[] = $activePersonAuthorization;
	}

	public function getNonActiveAuthorization() {
		if ($this->nonActiveAuthorization===NULL) {
			$this->nonActiveAuthorization = $this->createNonActiveAuthorization();
		}
		return $this->nonActiveAuthorization;
	}
	
	protected function createNonActiveAuthorization() {
		return array();
	}

	public function setNonActiveAuthorization($nonActiveAuthorization) {
		$this->nonActiveAuthorization = $this->validateNonActiveAuthorization($nonActiveAuthorization);
	}

	protected function validateNonActiveAuthorization($nonActiveAuthorization) {
		if ( ! is_array ($nonActiveAuthorization) && ! is_null($nonActiveAuthorization) ) {
			$nonActiveAuthorization = array($nonActiveAuthorization);
		}
		$count = count($nonActiveAuthorization);
		if ($count < 0) {
			throw new \Exception(sprintf('Supplied %s array has less than the required number (%d) of entries.', 'nonActiveAuthorization', 0));
		}
		foreach ($nonActiveAuthorization as $entry) {
			if (!($entry instanceof NonActiveAuthorizationNoIds)) {
				throw new \Exception(sprintf('Supplied %s value was not %s', 'nonActiveAuthorization', 'NonActiveAuthorizationNoIds'));
			}
		}
	
		return $nonActiveAuthorization;
	}

	public function addNonActiveAuthorization($nonActiveAuthorization) {
		$this->nonActiveAuthorization[] = $nonActiveAuthorization;
	}
} // end class Info
