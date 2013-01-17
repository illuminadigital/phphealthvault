<?php
namespace com\microsoft\wc\methods\response\GetThings;



/**
 * @XmlNamespaces ({
 *	@XmlNamespace(url="urn:com.microsoft.wc.methods.response.GetThings", prefix="")
 * })
 * @XmlEntity	(xml="info")
 */
class Info extends \com\microsoft\wc\methods\response\Info {
	/**
	 * Contains the response of the GetThings method request.
	 */

	/**
	 * @XmlElement	(type="\com\microsoft\wc\methods\response\GetThings\ThingResponseGroup", name="group")
	 */
	protected $group;

	public function __construct($group = NULL) {
		$this->group = ($group===NULL) ? NULL : $this->validateGroup($group);
	}

	public function getGroup() {
		if ($this->group===NULL) {
			$this->group = $this->createGroup();
		}
		return $this->group;
	}
	
	protected function createGroup() {
		return new \com\microsoft\wc\methods\response\GetThings\ThingResponseGroup();
	}

	public function setGroup($group) {
		$this->group = $this->validateGroup($group);
	}

	protected function validateGroup($group) {
		if ( ! $group instanceof \com\microsoft\wc\methods\response\GetThings\ThingResponseGroup ) {
			$group = new \com\microsoft\wc\methods\response\GetThings\ThingResponseGroup ($group);
		}
	
		return $group;
	}
} // end class Info
