<?php
namespace com\microsoft\wc\auth;



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
	 * List of manually overridden properties that should not be re-generated automatically
	 * @var array
	 */
	protected $_overrides = array();


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

	public function getReason($autoCreate = TRUE) {
		if ($this->reason===NULL && $autoCreate && ! isset($this->_overrides['reason']) ) {
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
		if ( $reason === FALSE ) {
			$this->_overrides['reason'] = TRUE;
			return NULL;
		}

		if ( ! is_array ($reason) && ! is_null($reason) ) {
			$reason = array($reason);
		}

		unset ($this->_overrides['reason']);
		$count = count($reason);
		if ($count < 0) {
			throw new \Exception(sprintf('Supplied %s array has less than the required number (%d) of entries.', 'reason', 0));
		}
		if ( ! empty($reason) ) {
			foreach ($reason as $entry) {
				if (!($entry instanceof CultureSpecificString1024)) {
					throw new \Exception(sprintf('Supplied %s value was not %s', 'reason', 'CultureSpecificString1024'));
				}
			}
		}
	
		return $reason;
	}

	public function addReason($reason) {
		$this->reason[] = $reason;
	}

	public function getDisplayFlags($autoCreate = TRUE) {
		if ($this->displayFlags===NULL && $autoCreate && ! isset($this->_overrides['displayFlags']) ) {
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
		$isValid = FALSE;
		if ( is_integer($displayFlags) ) {
			$isValid = TRUE;
		}
		else if ( is_null($displayFlags) ) {
			$isValid = TRUE;
		}
		else if ( $displayFlags == ($castVar = (integer) $displayFlags) ) {
			$isValid = TRUE;
			$displayFlags = $castVar;
		}
		if ( ! $isValid ) {
			throw new \Exception(sprintf('Supplied %s value was not %s', 'displayFlags', 'integer'));
		}
	
		return $displayFlags;
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
			if (!($entry instanceof Permission)) {
				throw new \Exception(sprintf('Supplied %s value was not %s', 'permission', 'Permission'));
			}
		}
	
		return $permission;
	}

	public function addPermission($permission) {
		$this->permission[] = $permission;
	}

	public function getTargetSet($autoCreate = TRUE) {
		if ($this->targetSet===NULL && $autoCreate && ! isset($this->_overrides['targetSet']) ) {
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
		if ( $targetSet === FALSE ) {
			$this->_overrides['targetSet'] = TRUE;
			return NULL;
		}

		if ( ! is_array ($targetSet) && ! is_null($targetSet) ) {
			$targetSet = array($targetSet);
		}

		unset ($this->_overrides['targetSet']);
		$count = count($targetSet);
		if ($count < 0) {
			throw new \Exception(sprintf('Supplied %s array has less than the required number (%d) of entries.', 'targetSet', 0));
		}
		if ( ! empty($targetSet) ) {
			foreach ($targetSet as $entry) {
				if (!($entry instanceof Set)) {
					throw new \Exception(sprintf('Supplied %s value was not %s', 'targetSet', 'Set'));
				}
			}
		}
	
		return $targetSet;
	}

	public function addTargetSet($targetSet) {
		$this->targetSet[] = $targetSet;
	}

	public function getExceptionSet($autoCreate = TRUE) {
		if ($this->exceptionSet===NULL && $autoCreate && ! isset($this->_overrides['exceptionSet']) ) {
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
		if ( $exceptionSet === FALSE ) {
			$this->_overrides['exceptionSet'] = TRUE;
			return NULL;
		}

		if ( ! is_array ($exceptionSet) && ! is_null($exceptionSet) ) {
			$exceptionSet = array($exceptionSet);
		}

		unset ($this->_overrides['exceptionSet']);
		$count = count($exceptionSet);
		if ($count < 0) {
			throw new \Exception(sprintf('Supplied %s array has less than the required number (%d) of entries.', 'exceptionSet', 0));
		}
		if ( ! empty($exceptionSet) ) {
			foreach ($exceptionSet as $entry) {
				if (!($entry instanceof Set)) {
					throw new \Exception(sprintf('Supplied %s value was not %s', 'exceptionSet', 'Set'));
				}
			}
		}
	
		return $exceptionSet;
	}

	public function addExceptionSet($exceptionSet) {
		$this->exceptionSet[] = $exceptionSet;
	}

	public function getIsIncr($autoCreate = TRUE) {
		if ($this->isIncr===NULL && $autoCreate && ! isset($this->_overrides['isIncr']) ) {
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
		if ( ! is_bool($isIncr) && ! is_null($isIncr) ) {
			throw new \Exception(sprintf('Supplied %s value was not %s', 'isIncr', 'boolean'));
		}
	
		return $isIncr;
	}

	public function getIsOptional($autoCreate = TRUE) {
		if ($this->isOptional===NULL && $autoCreate && ! isset($this->_overrides['isOptional']) ) {
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
		if ( ! is_bool($isOptional) && ! is_null($isOptional) ) {
			throw new \Exception(sprintf('Supplied %s value was not %s', 'isOptional', 'boolean'));
		}
	
		return $isOptional;
	}

	public function getName($autoCreate = TRUE) {
		if ($this->name===NULL && $autoCreate && ! isset($this->_overrides['name']) ) {
			$this->name = $this->createName();
		}
		return $this->name;
	}
	
	protected function createName() {
		return new \com\microsoft\wc\types\String16();
	}

	public function setName($name) {
		$this->name = $this->validateName($name);
	}

	protected function validateName($name) {
		if ( $name === FALSE ) {
			$this->_overrides['name'] = TRUE;
			return NULL;
		}

		if ( ! $name instanceof \com\microsoft\wc\types\String16  && ! is_null($name) ) {
			$name = new \com\microsoft\wc\types\String16 ($name);
		}

		unset ($this->_overrides['name']);
	
		return $name;
	}
} // end class Rule
