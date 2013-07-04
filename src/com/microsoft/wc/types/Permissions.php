<?php
namespace com\microsoft\wc\types;



/**
 * @XmlNamespaces ({
 *	@XmlNamespace(url="urn:com.microsoft.wc.types", prefix="t")
 * })
 * @XmlEntity	(xml="Permissions")
 */
class Permissions {
	/**
	 */

	/**
	 * List of manually overridden properties that should not be re-generated automatically
	 * @var array
	 */
	protected $_overrides = array();


	/**
	 * @XmlElement	(type="\com\microsoft\wc\types\Permission", collection="true", name="permission")
	 */
	protected $permission;

	public function __construct($permission = NULL) {
		$this->permission = ($permission===NULL) ? NULL : $this->validatePermission($permission);
	}

	public function getPermission($autoCreate = TRUE) {
		if ($this->permission===NULL && $autoCreate && ! isset($this->_overrides['permission']) ) {
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
		if ( ! is_array ($permission) ) {
			$permission = array($permission);
		}
		$count = count($permission);
		if ($count < 1) {
			throw new \Exception(sprintf('Supplied %s array has less than the required number (%d) of entries.', 'permission', 1));
		}
		foreach ($permission as $entry) {
			if (!($entry instanceof \com\microsoft\wc\types\Permission )) {
				throw new \Exception(sprintf('Supplied %s value was not %s', 'permission', 'Permission'));
			}
		}
	
		return $permission;
	}

	public function addPermission($permission) {
		$this->permission[] = $permission;
	}
} // end class Permissions
