<?php
namespace com\microsoft\wc\thing\goal;



/**
 * @XmlNamespaces ({
 *	@XmlNamespace(url="urn:com.microsoft.wc.thing.goal", prefix="")
 * })
 * @XmlEntity	(xml="goal-associated-type-info")
 */
class GoalAssociatedTypeInfo {
	/**
	 * The HealthVault thing type associated with the goal.
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
	 * @XmlText	(type="string", name="thing-type-value-xpath")
	 */
	protected $thingTypeValueXpath;

	/**
	 * @XmlText	(type="string", name="thing-type-display-xpath")
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
		return '';
	}

	public function setThingTypeValueXpath($thingTypeValueXpath) {
		$this->thingTypeValueXpath = $this->validateThingTypeValueXpath($thingTypeValueXpath);
	}

	protected function validateThingTypeValueXpath($thingTypeValueXpath) {
		if ( ! is_string($thingTypeValueXpath) && ! is_null($thingTypeValueXpath) ) {
			throw new \Exception(sprintf('Supplied %s value was not %s', 'thingTypeValueXpath', 'string'));
		}
	
		return $thingTypeValueXpath;
	}

	public function getThingTypeDisplayXpath($autoCreate = TRUE) {
		if ($this->thingTypeDisplayXpath===NULL && $autoCreate && ! isset($this->_overrides['thingTypeDisplayXpath']) ) {
			$this->thingTypeDisplayXpath = $this->createThingTypeDisplayXpath();
		}
		return $this->thingTypeDisplayXpath;
	}
	
	protected function createThingTypeDisplayXpath() {
		return '';
	}

	public function setThingTypeDisplayXpath($thingTypeDisplayXpath) {
		$this->thingTypeDisplayXpath = $this->validateThingTypeDisplayXpath($thingTypeDisplayXpath);
	}

	protected function validateThingTypeDisplayXpath($thingTypeDisplayXpath) {
		if ( ! is_string($thingTypeDisplayXpath) && ! is_null($thingTypeDisplayXpath) ) {
			throw new \Exception(sprintf('Supplied %s value was not %s', 'thingTypeDisplayXpath', 'string'));
		}
	
		return $thingTypeDisplayXpath;
	}
} // end class GoalAssociatedTypeInfo
