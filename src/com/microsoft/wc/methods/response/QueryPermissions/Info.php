<?php
namespace com\microsoft\wc\methods\response\QueryPermissions;

use com\microsoft\wc\methods\response\QueryPermissions\ThingTypePermission;

/**
 * @XmlEntity	(xml="info")
 */
class Info {
	/**
	 * The element of the response that contains the method specific return value(s).
	 * All response schemas contain the info element which contain the return value of the method. If the method does not define an info element, the method has no return value.
	 */

	/**
	 * @XmlElement	(type="\com\microsoft\wc\methods\response\QueryPermissions\ThingTypePermission", collection="true", name="thing-type-permission")
	 */
	protected $thingTypePermission;

	public function __construct($thingTypePermission = NULL) {
		$this->thingTypePermission = ($thingTypePermission===NULL) ? NULL : $this->validateThingTypePermission($thingTypePermission);
	}

	public function getThingTypePermission() {
		if ($this->thingTypePermission===NULL) {
			$this->thingTypePermission = $this->createThingTypePermission();
		}
		return $this->thingTypePermission;
	}
	
	protected function createThingTypePermission() {
		return array();
	}

	public function setThingTypePermission($thingTypePermission) {
		$this->thingTypePermission = $this->validateThingTypePermission($thingTypePermission);
	}

	protected function validateThingTypePermission($thingTypePermission) {
		if ( ! $thingTypePermission instanceof ThingTypePermission  && ! is_null($thingTypePermission) ) {
			$thingTypePermission = new ThingTypePermission ($thingTypePermission);
		}
		$count = count($thingTypePermission);
		if ($count < 0) {
			throw new \Exception(sprintf('Supplied %s array has less than the required number (%d) of entries.', 'thingTypePermission', 0));
		}
		foreach ($thingTypePermission as $entry) {
			if (!($entry instanceof ThingTypePermission)) {
				throw new \Exception(sprintf('Supplied %s value was not %s', 'thingTypePermission', 'ThingTypePermission'));
			}
		}
	
		return $thingTypePermission;
	}

	public function addThingTypePermission($thingTypePermission) {
		$this->thingTypePermission[] = $thingTypePermission;
	}
} // end class Info
