<?php
namespace com\microsoft\wc\methods\response\QueryPermissions;



/**
 * @XmlEntity	(xml="ThingTypePermission")
 */
class ThingTypePermission {
	/**
	 * The permissions for online or offline access that the authenticated person has for the specified thing type in the specified record in the context of the current application.
	 */

	/**
	 * @XmlElement	(type="\com\microsoft\wc\types\Guid", name="thing-type-id")
	 */
	protected $thingTypeId;

	/**
	 * @XmlElement	(type="\com\microsoft\wc\methods\response\QueryPermissions\Permissions", name="online-access-permissions")
	 */
	protected $onlineAccessPermissions;

	/**
	 * @XmlElement	(type="\com\microsoft\wc\methods\response\QueryPermissions\Permissions", name="offline-access-permissions")
	 */
	protected $offlineAccessPermissions;

	public function __construct($thingTypeId = NULL, $onlineAccessPermissions = NULL, $offlineAccessPermissions = NULL) {
		$this->thingTypeId = ($thingTypeId===NULL) ? NULL : $this->validateThingTypeId($thingTypeId);
		$this->onlineAccessPermissions = ($onlineAccessPermissions===NULL) ? NULL : $this->validateOnlineAccessPermissions($onlineAccessPermissions);
		$this->offlineAccessPermissions = ($offlineAccessPermissions===NULL) ? NULL : $this->validateOfflineAccessPermissions($offlineAccessPermissions);
	}

	public function getThingTypeId() {
		if ($this->thingTypeId===NULL) {
			$this->thingTypeId = $this->createThingTypeId();
		}
		return $this->thingTypeId;
	}
	
	protected function createThingTypeId() {
		return new \com\microsoft\wc\types\Guid();
	}

	public function setThingTypeId($thingTypeId) {
		$this->thingTypeId = $this->validateThingTypeId($thingTypeId);
	}

	protected function validateThingTypeId($thingTypeId) {
		if ( ! $thingTypeId instanceof \com\microsoft\wc\types\Guid ) {
			$thingTypeId = new \com\microsoft\wc\types\Guid ($thingTypeId);
		}
	
		return $thingTypeId;
	}

	public function getOnlineAccessPermissions() {
		if ($this->onlineAccessPermissions===NULL) {
			$this->onlineAccessPermissions = $this->createOnlineAccessPermissions();
		}
		return $this->onlineAccessPermissions;
	}
	
	protected function createOnlineAccessPermissions() {
		return new \com\microsoft\wc\methods\response\QueryPermissions\Permissions();
	}

	public function setOnlineAccessPermissions($onlineAccessPermissions) {
		$this->onlineAccessPermissions = $this->validateOnlineAccessPermissions($onlineAccessPermissions);
	}

	protected function validateOnlineAccessPermissions($onlineAccessPermissions) {
		if ( ! $onlineAccessPermissions instanceof \com\microsoft\wc\methods\response\QueryPermissions\Permissions  && ! is_null($onlineAccessPermissions) ) {
			$onlineAccessPermissions = new \com\microsoft\wc\methods\response\QueryPermissions\Permissions ($onlineAccessPermissions);
		}
	
		return $onlineAccessPermissions;
	}

	public function getOfflineAccessPermissions() {
		if ($this->offlineAccessPermissions===NULL) {
			$this->offlineAccessPermissions = $this->createOfflineAccessPermissions();
		}
		return $this->offlineAccessPermissions;
	}
	
	protected function createOfflineAccessPermissions() {
		return new \com\microsoft\wc\methods\response\QueryPermissions\Permissions();
	}

	public function setOfflineAccessPermissions($offlineAccessPermissions) {
		$this->offlineAccessPermissions = $this->validateOfflineAccessPermissions($offlineAccessPermissions);
	}

	protected function validateOfflineAccessPermissions($offlineAccessPermissions) {
		if ( ! $offlineAccessPermissions instanceof \com\microsoft\wc\methods\response\QueryPermissions\Permissions  && ! is_null($offlineAccessPermissions) ) {
			$offlineAccessPermissions = new \com\microsoft\wc\methods\response\QueryPermissions\Permissions ($offlineAccessPermissions);
		}
	
		return $offlineAccessPermissions;
	}
} // end class ThingTypePermission
