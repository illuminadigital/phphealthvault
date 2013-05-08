<?php
namespace com\microsoft\wc\thing;



/**
 * @XmlNamespaces ({
 *	@XmlNamespace(url="urn:com.microsoft.wc.thing", prefix="wc-thing")
 * })
 * @XmlEntity	(xml="EffectivePermissions")
 */
class EffectivePermissions {
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

	/**
	 * @XmlAttribute	(type="boolean", name="immutable")
	 */
	protected $immutable;

	public function __construct($permission = NULL, $immutable = NULL) {
		$this->permission = ($permission===NULL) ? NULL : $this->validatePermission($permission);
		$this->immutable = ($immutable===NULL) ? NULL : $this->validateImmutable($immutable);
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
		if ($count > 5) {
			throw new \Exception(sprintf('Supplied %s array has more than the required number (%d) of entries.', 'permission', 5));
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

	public function getImmutable($autoCreate = TRUE) {
		if ($this->immutable===NULL && $autoCreate && ! isset($this->_overrides['immutable']) ) {
			$this->immutable = $this->createImmutable();
		}
		return $this->immutable;
	}
	
	protected function createImmutable() {
		return FALSE;
	}

	public function setImmutable($immutable) {
		$this->immutable = $this->validateImmutable($immutable);
	}

	protected function validateImmutable($immutable) {
		if ( ! is_bool($immutable) && ! is_null($immutable) ) {
			throw new \Exception(sprintf('Supplied %s value was not %s', 'immutable', 'boolean'));
		}
	
		return $immutable;
	}
} // end class EffectivePermissions
