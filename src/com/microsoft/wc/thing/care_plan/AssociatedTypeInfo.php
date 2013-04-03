<?php
namespace com\microsoft\wc\thing\care_plan;



/**
 * @XmlNamespaces ({
 *	@XmlNamespace(url="urn:com.microsoft.wc.thing.care-plan", prefix="")
 * })
 * @XmlEntity	(xml="associated-type-info")
 */
class AssociatedTypeInfo {
	/**
	 * The HealthVault thing type associated with the goal or task.
	 */

	/**
	 * List of manually overridden properties that should not be re-generated automatically
	 * @var array
	 */
	protected $_overrides = array();


	/**
	 * @XmlElement	(type="\com\microsoft\wc\types\Guid", name="thing-type-version-id")
	 */
	protected $thingTypeVersionId;

	/**
	 * @XmlElement	(type="\com\microsoft\wc\types\Stringnznw", name="thing-type-value-xpath")
	 */
	protected $thingTypeValueXpath;

	/**
	 * @XmlElement	(type="\com\microsoft\wc\types\Stringnznw", name="thing-type-display-xpath")
	 */
	protected $thingTypeDisplayXpath;

	public function __construct($thingTypeVersionId = NULL, $thingTypeValueXpath = NULL, $thingTypeDisplayXpath = NULL) {
		$this->thingTypeVersionId = ($thingTypeVersionId===NULL) ? NULL : $this->validateThingTypeVersionId($thingTypeVersionId);
		$this->thingTypeValueXpath = ($thingTypeValueXpath===NULL) ? NULL : $this->validateThingTypeValueXpath($thingTypeValueXpath);
		$this->thingTypeDisplayXpath = ($thingTypeDisplayXpath===NULL) ? NULL : $this->validateThingTypeDisplayXpath($thingTypeDisplayXpath);
	}

	public function getThingTypeVersionId($autoCreate = TRUE) {
		if ($this->thingTypeVersionId===NULL && $autoCreate && ! isset($this->_overrides['thingTypeVersionId']) ) {
			$this->thingTypeVersionId = $this->createThingTypeVersionId();
		}
		return $this->thingTypeVersionId;
	}
	
	protected function createThingTypeVersionId() {
		return new \com\microsoft\wc\types\Guid();
	}

	public function setThingTypeVersionId($thingTypeVersionId) {
		$this->thingTypeVersionId = $this->validateThingTypeVersionId($thingTypeVersionId);
	}

	protected function validateThingTypeVersionId($thingTypeVersionId) {
		if ( ! $thingTypeVersionId instanceof \com\microsoft\wc\types\Guid ) {
			$thingTypeVersionId = new \com\microsoft\wc\types\Guid ($thingTypeVersionId);
		}
	
		return $thingTypeVersionId;
	}

	public function getThingTypeValueXpath($autoCreate = TRUE) {
		if ($this->thingTypeValueXpath===NULL && $autoCreate && ! isset($this->_overrides['thingTypeValueXpath']) ) {
			$this->thingTypeValueXpath = $this->createThingTypeValueXpath();
		}
		return $this->thingTypeValueXpath;
	}
	
	protected function createThingTypeValueXpath() {
		return new \com\microsoft\wc\types\Stringnznw();
	}

	public function setThingTypeValueXpath($thingTypeValueXpath) {
		$this->thingTypeValueXpath = $this->validateThingTypeValueXpath($thingTypeValueXpath);
	}

	protected function validateThingTypeValueXpath($thingTypeValueXpath) {
		if ( $thingTypeValueXpath === FALSE ) {
			$this->_overrides['thingTypeValueXpath'] = TRUE;
			return NULL;
		}

		if ( ! $thingTypeValueXpath instanceof \com\microsoft\wc\types\Stringnznw  && ! is_null($thingTypeValueXpath) ) {
			$thingTypeValueXpath = new \com\microsoft\wc\types\Stringnznw ($thingTypeValueXpath);
		}

		unset ($this->_overrides['thingTypeValueXpath']);
	
		return $thingTypeValueXpath;
	}

	public function getThingTypeDisplayXpath($autoCreate = TRUE) {
		if ($this->thingTypeDisplayXpath===NULL && $autoCreate && ! isset($this->_overrides['thingTypeDisplayXpath']) ) {
			$this->thingTypeDisplayXpath = $this->createThingTypeDisplayXpath();
		}
		return $this->thingTypeDisplayXpath;
	}
	
	protected function createThingTypeDisplayXpath() {
		return new \com\microsoft\wc\types\Stringnznw();
	}

	public function setThingTypeDisplayXpath($thingTypeDisplayXpath) {
		$this->thingTypeDisplayXpath = $this->validateThingTypeDisplayXpath($thingTypeDisplayXpath);
	}

	protected function validateThingTypeDisplayXpath($thingTypeDisplayXpath) {
		if ( $thingTypeDisplayXpath === FALSE ) {
			$this->_overrides['thingTypeDisplayXpath'] = TRUE;
			return NULL;
		}

		if ( ! $thingTypeDisplayXpath instanceof \com\microsoft\wc\types\Stringnznw  && ! is_null($thingTypeDisplayXpath) ) {
			$thingTypeDisplayXpath = new \com\microsoft\wc\types\Stringnznw ($thingTypeDisplayXpath);
		}

		unset ($this->_overrides['thingTypeDisplayXpath']);
	
		return $thingTypeDisplayXpath;
	}
} // end class AssociatedTypeInfo
