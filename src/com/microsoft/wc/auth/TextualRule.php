<?php
namespace com\microsoft\wc\auth;



/**
 * @XmlNamespaces ({
 *	@XmlNamespace(url="urn:com.microsoft.wc.auth", prefix="wc-auth")
 * })
 * @XmlEntity	(xml="TextualRule")
 */
class TextualRule {
	/**
	 */

	/**
	 * List of manually overridden properties that should not be re-generated automatically
	 * @var array
	 */
	protected $_overrides = array();


	/**
	 * @XmlText	(type="string", name="permission")
	 */
	protected $permission;

	/**
	 * @XmlText	(type="string", name="target-thing-types")
	 */
	protected $targetThingTypes;

	/**
	 * @XmlText	(type="string", name="target-sets")
	 */
	protected $targetSets;

	/**
	 * @XmlText	(type="string", name="target-dates")
	 */
	protected $targetDates;

	/**
	 * @XmlText	(type="string", name="except-thing-types")
	 */
	protected $exceptThingTypes;

	/**
	 * @XmlText	(type="string", name="except-sets")
	 */
	protected $exceptSets;

	/**
	 * @XmlText	(type="string", name="except-dates")
	 */
	protected $exceptDates;

	public function __construct($permission = NULL, $targetThingTypes = NULL, $targetSets = NULL, $targetDates = NULL, $exceptThingTypes = NULL, $exceptSets = NULL, $exceptDates = NULL) {
		$this->permission = ($permission===NULL) ? NULL : $this->validatePermission($permission);
		$this->targetThingTypes = ($targetThingTypes===NULL) ? NULL : $this->validateTargetThingTypes($targetThingTypes);
		$this->targetSets = ($targetSets===NULL) ? NULL : $this->validateTargetSets($targetSets);
		$this->targetDates = ($targetDates===NULL) ? NULL : $this->validateTargetDates($targetDates);
		$this->exceptThingTypes = ($exceptThingTypes===NULL) ? NULL : $this->validateExceptThingTypes($exceptThingTypes);
		$this->exceptSets = ($exceptSets===NULL) ? NULL : $this->validateExceptSets($exceptSets);
		$this->exceptDates = ($exceptDates===NULL) ? NULL : $this->validateExceptDates($exceptDates);
	}

	public function getPermission($autoCreate = TRUE) {
		if ($this->permission===NULL && $autoCreate && ! isset($this->_overrides['permission']) ) {
			$this->permission = $this->createPermission();
		}
		return $this->permission;
	}
	
	protected function createPermission() {
		return '';
	}

	public function setPermission($permission) {
		$this->permission = $this->validatePermission($permission);
	}

	protected function validatePermission($permission) {
		if (!is_string($permission)) {
			throw new \Exception(sprintf('Supplied %s value was not %s', 'permission', 'string'));
		}
	
		return $permission;
	}

	public function getTargetThingTypes($autoCreate = TRUE) {
		if ($this->targetThingTypes===NULL && $autoCreate && ! isset($this->_overrides['targetThingTypes']) ) {
			$this->targetThingTypes = $this->createTargetThingTypes();
		}
		return $this->targetThingTypes;
	}
	
	protected function createTargetThingTypes() {
		return '';
	}

	public function setTargetThingTypes($targetThingTypes) {
		$this->targetThingTypes = $this->validateTargetThingTypes($targetThingTypes);
	}

	protected function validateTargetThingTypes($targetThingTypes) {
		if ( ! is_string($targetThingTypes) && ! is_null($targetThingTypes) ) {
			throw new \Exception(sprintf('Supplied %s value was not %s', 'targetThingTypes', 'string'));
		}
	
		return $targetThingTypes;
	}

	public function getTargetSets($autoCreate = TRUE) {
		if ($this->targetSets===NULL && $autoCreate && ! isset($this->_overrides['targetSets']) ) {
			$this->targetSets = $this->createTargetSets();
		}
		return $this->targetSets;
	}
	
	protected function createTargetSets() {
		return '';
	}

	public function setTargetSets($targetSets) {
		$this->targetSets = $this->validateTargetSets($targetSets);
	}

	protected function validateTargetSets($targetSets) {
		if ( ! is_string($targetSets) && ! is_null($targetSets) ) {
			throw new \Exception(sprintf('Supplied %s value was not %s', 'targetSets', 'string'));
		}
	
		return $targetSets;
	}

	public function getTargetDates($autoCreate = TRUE) {
		if ($this->targetDates===NULL && $autoCreate && ! isset($this->_overrides['targetDates']) ) {
			$this->targetDates = $this->createTargetDates();
		}
		return $this->targetDates;
	}
	
	protected function createTargetDates() {
		return '';
	}

	public function setTargetDates($targetDates) {
		$this->targetDates = $this->validateTargetDates($targetDates);
	}

	protected function validateTargetDates($targetDates) {
		if ( ! is_string($targetDates) && ! is_null($targetDates) ) {
			throw new \Exception(sprintf('Supplied %s value was not %s', 'targetDates', 'string'));
		}
	
		return $targetDates;
	}

	public function getExceptThingTypes($autoCreate = TRUE) {
		if ($this->exceptThingTypes===NULL && $autoCreate && ! isset($this->_overrides['exceptThingTypes']) ) {
			$this->exceptThingTypes = $this->createExceptThingTypes();
		}
		return $this->exceptThingTypes;
	}
	
	protected function createExceptThingTypes() {
		return '';
	}

	public function setExceptThingTypes($exceptThingTypes) {
		$this->exceptThingTypes = $this->validateExceptThingTypes($exceptThingTypes);
	}

	protected function validateExceptThingTypes($exceptThingTypes) {
		if ( ! is_string($exceptThingTypes) && ! is_null($exceptThingTypes) ) {
			throw new \Exception(sprintf('Supplied %s value was not %s', 'exceptThingTypes', 'string'));
		}
	
		return $exceptThingTypes;
	}

	public function getExceptSets($autoCreate = TRUE) {
		if ($this->exceptSets===NULL && $autoCreate && ! isset($this->_overrides['exceptSets']) ) {
			$this->exceptSets = $this->createExceptSets();
		}
		return $this->exceptSets;
	}
	
	protected function createExceptSets() {
		return '';
	}

	public function setExceptSets($exceptSets) {
		$this->exceptSets = $this->validateExceptSets($exceptSets);
	}

	protected function validateExceptSets($exceptSets) {
		if ( ! is_string($exceptSets) && ! is_null($exceptSets) ) {
			throw new \Exception(sprintf('Supplied %s value was not %s', 'exceptSets', 'string'));
		}
	
		return $exceptSets;
	}

	public function getExceptDates($autoCreate = TRUE) {
		if ($this->exceptDates===NULL && $autoCreate && ! isset($this->_overrides['exceptDates']) ) {
			$this->exceptDates = $this->createExceptDates();
		}
		return $this->exceptDates;
	}
	
	protected function createExceptDates() {
		return '';
	}

	public function setExceptDates($exceptDates) {
		$this->exceptDates = $this->validateExceptDates($exceptDates);
	}

	protected function validateExceptDates($exceptDates) {
		if ( ! is_string($exceptDates) && ! is_null($exceptDates) ) {
			throw new \Exception(sprintf('Supplied %s value was not %s', 'exceptDates', 'string'));
		}
	
		return $exceptDates;
	}
} // end class TextualRule
