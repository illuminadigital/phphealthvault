<?php
namespace com\microsoft\wc\methods\response\QueryPermissions;

use com\microsoft\wc\types\Permission;

/**
 * @XmlEntity	(xml="Permissions")
 */
class Permissions {
	/**
	 */

	/**
	 * @XmlElement	(type="\com\microsoft\wc\types\Permission", collection="true", name="permission")
	 */
	protected $permission;

	public function __construct($permission = NULL) {
		$this->permission = ($permission===NULL) ? NULL : $this->validatePermission($permission);
	}

	public function getPermission() {
		if ($this->permission===NULL) {
			$this->permission = $this->createPermission();
		}
		return $this->permission;
	}
	
	protected function createPermission() {
		return array();
	}

	public function setPermission($permission) {
		$this->permission = $this->validatePermission($permission);
	}

	protected function validatePermission($permission) {
		if ( ! $permission instanceof Permission ) {
			$permission = new Permission ($permission);
		}
		$count = count($permission);
		if ($count < 1) {
			throw new \Exception(sprintf('Supplied %s array has less than the required number (%d) of entries.', 'permission', 1));
		}
		foreach ($permission as $entry) {
			if (!($entry instanceof Permission)) {
				throw new \Exception(sprintf('Supplied %s value was not %s', 'permission', 'Permission'));
			}
		}
	
		return $permission;
	}

	public function addPermission($permission) {
		$this->permission[] = $permission;
	}
} // end class Permissions
