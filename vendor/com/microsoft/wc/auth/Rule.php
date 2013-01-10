<?php
namespace com\microsoft\wc\auth;

use com\microsoft\wc\types\String16;
use com\microsoft\wc\types\CultureSpecificString1024;
use com\microsoft\wc\types\Permission;
use com\microsoft\wc\auth\Set;

/**
 * @XmlNamespaces ({
 *	@XmlNamespace(url="urn:com.microsoft.wc.auth", prefix="wc-auth")
 * })
 * @XmlEntity	(xml="Rule")
 */
class Rule {
	/**
	 */

	/**
	 * @XmlElement	(type="\com\microsoft\wc\types\CultureSpecificString1024", collection="true", name="reason")
	 */
	protected $reason;

	/**
	 * @XmlText	(type="integer", name="display-flags")
	 */
	protected $displayFlags;

	/**
	 * @XmlElement	(type="\com\microsoft\wc\types\Permission", collection="true", name="permission")
	 */
	protected $permission;

	/**
	 * @XmlElement	(type="\com\microsoft\wc\auth\Set", collection="true", name="target-set")
	 */
	protected $targetSet;

	/**
	 * @XmlElement	(type="\com\microsoft\wc\auth\Set", collection="true", name="exception-set")
	 */
	protected $exceptionSet;

	/**
	 * @XmlAttribute	(type="boolean", name="is-incr")
	 */
	protected $isIncr;

	/**
	 * @XmlAttribute	(type="boolean", name="is-optional")
	 */
	protected $isOptional;

	/**
	 * @XmlAttribute	(type="string", name="name")
	 */
	protected $name;

	public function __construct($reason = NULL, $displayFlags = NULL, $permission = NULL, $targetSet = NULL, $exceptionSet = NULL, $isIncr = NULL, $isOptional = NULL, $name = NULL) {
		$this->reason = ($reason===NULL) ? NULL : $this->validateReason($reason);
		$this->displayFlags = ($displayFlags===NULL) ? NULL : $this->validateDisplayFlags($displayFlags);
		$this->permission = ($permission===NULL) ? NULL : $this->validatePermission($permission);
		$this->targetSet = ($targetSet===NULL) ? NULL : $this->validateTargetSet($targetSet);
		$this->exceptionSet = ($exceptionSet===NULL) ? NULL : $this->validateExceptionSet($exceptionSet);
		$this->isIncr = ($isIncr===NULL) ? NULL : $this->validateIsIncr($isIncr);
		$this->isOptional = ($isOptional===NULL) ? NULL : $this->validateIsOptional($isOptional);
		$this->name = ($name===NULL) ? NULL : $this->validateName($name);
	}

	public function getReason() {
		if ($this->reason===NULL) {
			$this->reason = $this->createReason();
		}
		return $this->reason;
	}
	
	protected function createReason() {
		return array();
	}

	public function setReason($reason) {
		$this->reason = $this->validateReason($reason);
	}

	protected function validateReason($reason) {
		if ( ! $reason instanceof CultureSpecificString1024 ) {
			$reason = new CultureSpecificString1024 ($reason);
		}
		$count = count($reason);
		if ($count < 0) {
			throw new \Exception(sprintf('Supplied %s array has less than the required number (%d) of entries.', 'reason', 0));
		}
		foreach ($reason as $entry) {
			if (!($entry instanceof CultureSpecificString1024)) {
				throw new \Exception(sprintf('Supplied %s value was not %s', 'reason', 'CultureSpecificString1024'));
			}
		}
	
		return $reason;
	}

	public function addReason($reason) {
		$this->reason[] = $reason;
	}

	public function getDisplayFlags() {
		if ($this->displayFlags===NULL) {
			$this->displayFlags = $this->createDisplayFlags();
		}
		return $this->displayFlags;
	}
	
	protected function createDisplayFlags() {
		return NULL;
	}

	public function setDisplayFlags($displayFlags) {
		$this->displayFlags = $this->validateDisplayFlags($displayFlags);
	}

	protected function validateDisplayFlags($displayFlags) {
		if (!is_integer($displayFlags)) {
			throw new \Exception(sprintf('Supplied %s value was not %s', 'displayFlags', 'integer'));
		}
	
		return $displayFlags;
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
		if ($count > 5) {
			throw new \Exception(sprintf('Supplied %s array has more than the required number (%d) of entries.', 'permission', 5));
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

	public function getTargetSet() {
		if ($this->targetSet===NULL) {
			$this->targetSet = $this->createTargetSet();
		}
		return $this->targetSet;
	}
	
	protected function createTargetSet() {
		return array();
	}

	public function setTargetSet($targetSet) {
		$this->targetSet = $this->validateTargetSet($targetSet);
	}

	protected function validateTargetSet($targetSet) {
		if ( ! $targetSet instanceof Set ) {
			$targetSet = new Set ($targetSet);
		}
		$count = count($targetSet);
		if ($count < 0) {
			throw new \Exception(sprintf('Supplied %s array has less than the required number (%d) of entries.', 'targetSet', 0));
		}
		foreach ($targetSet as $entry) {
			if (!($entry instanceof Set)) {
				throw new \Exception(sprintf('Supplied %s value was not %s', 'targetSet', 'Set'));
			}
		}
	
		return $targetSet;
	}

	public function addTargetSet($targetSet) {
		$this->targetSet[] = $targetSet;
	}

	public function getExceptionSet() {
		if ($this->exceptionSet===NULL) {
			$this->exceptionSet = $this->createExceptionSet();
		}
		return $this->exceptionSet;
	}
	
	protected function createExceptionSet() {
		return array();
	}

	public function setExceptionSet($exceptionSet) {
		$this->exceptionSet = $this->validateExceptionSet($exceptionSet);
	}

	protected function validateExceptionSet($exceptionSet) {
		if ( ! $exceptionSet instanceof Set ) {
			$exceptionSet = new Set ($exceptionSet);
		}
		$count = count($exceptionSet);
		if ($count < 0) {
			throw new \Exception(sprintf('Supplied %s array has less than the required number (%d) of entries.', 'exceptionSet', 0));
		}
		foreach ($exceptionSet as $entry) {
			if (!($entry instanceof Set)) {
				throw new \Exception(sprintf('Supplied %s value was not %s', 'exceptionSet', 'Set'));
			}
		}
	
		return $exceptionSet;
	}

	public function addExceptionSet($exceptionSet) {
		$this->exceptionSet[] = $exceptionSet;
	}

	public function getIsIncr() {
		if ($this->isIncr===NULL) {
			$this->isIncr = $this->createIsIncr();
		}
		return $this->isIncr;
	}
	
	protected function createIsIncr() {
		return FALSE;
	}

	public function setIsIncr($isIncr) {
		$this->isIncr = $this->validateIsIncr($isIncr);
	}

	protected function validateIsIncr($isIncr) {
		if (!is_bool($isIncr)) {
			throw new \Exception(sprintf('Supplied %s value was not %s', 'isIncr', 'boolean'));
		}
	
		return $isIncr;
	}

	public function getIsOptional() {
		if ($this->isOptional===NULL) {
			$this->isOptional = $this->createIsOptional();
		}
		return $this->isOptional;
	}
	
	protected function createIsOptional() {
		return FALSE;
	}

	public function setIsOptional($isOptional) {
		$this->isOptional = $this->validateIsOptional($isOptional);
	}

	protected function validateIsOptional($isOptional) {
		if (!is_bool($isOptional)) {
			throw new \Exception(sprintf('Supplied %s value was not %s', 'isOptional', 'boolean'));
		}
	
		return $isOptional;
	}

	public function getName() {
		if ($this->name===NULL) {
			$this->name = $this->createName();
		}
		return $this->name;
	}
	
	protected function createName() {
		return new String16();
	}

	public function setName($name) {
		$this->name = $this->validateName($name);
	}

	protected function validateName($name) {
		if ( ! $name instanceof String16 ) {
			$name = new String16 ($name);
		}
	
		return $name;
	}
} // end class Rule
