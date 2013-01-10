<?php
namespace com\microsoft\wc\methods\response\GetThings3;

use com\microsoft\wc\methods\response\GetThings3\ThingResponseGroup2;

/**
 * @XmlEntity	(xml="info")
 */
class Info {
	/**
	 * Contains the response of the GetThings method request.
	 */

	/**
	 * @XmlElement	(type="\com\microsoft\wc\methods\response\GetThings3\ThingResponseGroup2", name="group")
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
		return new ThingResponseGroup2();
	}

	public function setGroup($group) {
		$this->group = $this->validateGroup($group);
	}

	protected function validateGroup($group) {
		if ( ! $group instanceof ThingResponseGroup2 ) {
			$group = new ThingResponseGroup2 ($group);
		}
	
		return $group;
	}
} // end class Info
