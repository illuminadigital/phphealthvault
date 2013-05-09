<?php
namespace com\microsoft\wc\methods\GetThings;



/**
 * @XmlNamespaces ({
 *	@XmlNamespace(url="urn:com.microsoft.wc.methods.GetThings", prefix="wc-method-getthings")
 * })
 * @XmlEntity	(xml="ThingFilterSpec")
 */
class ThingFilterSpec {
	/**
	 * Schema for specifying filters on things.
	 */

	/**
	 * List of manually overridden properties that should not be re-generated automatically
	 * @var array
	 */
	protected $_overrides = array();


	/**
	 * @XmlElement	(type="\com\microsoft\wc\types\Guid", collection="true", name="type-id")
	 */
	protected $typeId;

	/**
	 * @XmlElement	(type="\com\microsoft\wc\thing\ThingState", collection="true", name="thing-state")
	 */
	protected $thingState;

	/**
	 * @XmlText	(type="string", name="eff-date-min")
	 */
	protected $effDateMin;

	/**
	 * @XmlText	(type="string", name="eff-date-max")
	 */
	protected $effDateMax;

	/**
	 * @XmlElement	(type="\com\microsoft\wc\types\Guid", name="created-app-id")
	 */
	protected $createdAppId;

	/**
	 * @XmlElement	(type="\com\microsoft\wc\types\Guid", name="created-person-id")
	 */
	protected $createdPersonId;

	/**
	 * @XmlElement	(type="\com\microsoft\wc\types\Guid", name="updated-app-id")
	 */
	protected $updatedAppId;

	/**
	 * @XmlElement	(type="\com\microsoft\wc\types\Guid", name="updated-person-id")
	 */
	protected $updatedPersonId;

	/**
	 * @XmlText	(type="string", name="created-date-min")
	 */
	protected $createdDateMin;

	/**
	 * @XmlText	(type="string", name="created-date-max")
	 */
	protected $createdDateMax;

	/**
	 * @XmlText	(type="string", name="updated-date-min")
	 */
	protected $updatedDateMin;

	/**
	 * @XmlText	(type="string", name="updated-date-max")
	 */
	protected $updatedDateMax;

	/**
	 * @XmlText	(type="string", name="xpath")
	 */
	protected $xpath;

	public function __construct($typeId = NULL, $thingState = NULL, $effDateMin = NULL, $effDateMax = NULL, $createdAppId = NULL, $createdPersonId = NULL, $updatedAppId = NULL, $updatedPersonId = NULL, $createdDateMin = NULL, $createdDateMax = NULL, $updatedDateMin = NULL, $updatedDateMax = NULL, $xpath = NULL) {
		$this->typeId = ($typeId===NULL) ? NULL : $this->validateTypeId($typeId);
		$this->thingState = ($thingState===NULL) ? NULL : $this->validateThingState($thingState);
		$this->effDateMin = ($effDateMin===NULL) ? NULL : $this->validateEffDateMin($effDateMin);
		$this->effDateMax = ($effDateMax===NULL) ? NULL : $this->validateEffDateMax($effDateMax);
		$this->createdAppId = ($createdAppId===NULL) ? NULL : $this->validateCreatedAppId($createdAppId);
		$this->createdPersonId = ($createdPersonId===NULL) ? NULL : $this->validateCreatedPersonId($createdPersonId);
		$this->updatedAppId = ($updatedAppId===NULL) ? NULL : $this->validateUpdatedAppId($updatedAppId);
		$this->updatedPersonId = ($updatedPersonId===NULL) ? NULL : $this->validateUpdatedPersonId($updatedPersonId);
		$this->createdDateMin = ($createdDateMin===NULL) ? NULL : $this->validateCreatedDateMin($createdDateMin);
		$this->createdDateMax = ($createdDateMax===NULL) ? NULL : $this->validateCreatedDateMax($createdDateMax);
		$this->updatedDateMin = ($updatedDateMin===NULL) ? NULL : $this->validateUpdatedDateMin($updatedDateMin);
		$this->updatedDateMax = ($updatedDateMax===NULL) ? NULL : $this->validateUpdatedDateMax($updatedDateMax);
		$this->xpath = ($xpath===NULL) ? NULL : $this->validateXpath($xpath);
	}

	public function getTypeId($autoCreate = TRUE) {
		if ($this->typeId===NULL && $autoCreate && ! isset($this->_overrides['typeId']) ) {
			$this->typeId = $this->createTypeId();
		}
		return $this->typeId;
	}
	
	protected function createTypeId() {
		return array();
	}

	public function setTypeId($typeId) {
		$this->typeId = $this->validateTypeId($typeId);
	}

	protected function validateTypeId($typeId) {
		if ( $typeId === FALSE ) {
			$this->_overrides['typeId'] = TRUE;
			return NULL;
		}

		if ( ! is_array ($typeId) && ! is_null($typeId) ) {
			$typeId = array($typeId);
		}

		unset ($this->_overrides['typeId']);
		$count = count($typeId);
		if ($count < 0) {
			throw new \Exception(sprintf('Supplied %s array has less than the required number (%d) of entries.', 'typeId', 0));
		}
		if ( ! empty($typeId) ) {
			foreach ($typeId as $entry) {
				if (!($entry instanceof \com\microsoft\wc\types\Guid )) {
					throw new \Exception(sprintf('Supplied %s value was not %s', 'typeId', 'guid'));
				}
			}
		}
	
		return $typeId;
	}

	public function addTypeId($typeId) {
		$this->typeId[] = $typeId;
	}

	public function getThingState($autoCreate = TRUE) {
		if ($this->thingState===NULL && $autoCreate && ! isset($this->_overrides['thingState']) ) {
			$this->thingState = $this->createThingState();
		}
		return $this->thingState;
	}
	
	protected function createThingState() {
		return array();
	}

	public function setThingState($thingState) {
		$this->thingState = $this->validateThingState($thingState);
	}

	protected function validateThingState($thingState) {
		if ( $thingState === FALSE ) {
			$this->_overrides['thingState'] = TRUE;
			return NULL;
		}

		if ( ! is_array ($thingState) && ! is_null($thingState) ) {
			$thingState = array($thingState);
		}

		unset ($this->_overrides['thingState']);
		$count = count($thingState);
		if ($count < 0) {
			throw new \Exception(sprintf('Supplied %s array has less than the required number (%d) of entries.', 'thingState', 0));
		}
		if ($count > 2) {
			throw new \Exception(sprintf('Supplied %s array has more than the required number (%d) of entries.', 'thingState', 2));
		}
		if ( ! empty($thingState) ) {
			foreach ($thingState as $entry) {
				if (!($entry instanceof \com\microsoft\wc\thing\ThingState )) {
					throw new \Exception(sprintf('Supplied %s value was not %s', 'thingState', 'ThingState'));
				}
			}
		}
	
		return $thingState;
	}

	public function addThingState($thingState) {
		$this->thingState[] = $thingState;
	}

	public function getEffDateMin($autoCreate = TRUE) {
		if ($this->effDateMin===NULL && $autoCreate && ! isset($this->_overrides['effDateMin']) ) {
			$this->effDateMin = $this->createEffDateMin();
		}
		return $this->effDateMin;
	}
	
	protected function createEffDateMin() {
		return NULL;
	}

	public function setEffDateMin($effDateMin) {
		$this->effDateMin = $this->validateEffDateMin($effDateMin);
	}

	protected function validateEffDateMin($effDateMin) {
		if ( ! is_string($effDateMin) && ! is_null($effDateMin) ) {
			throw new \Exception(sprintf('Supplied %s value was not %s', 'effDateMin', 'string'));
		}
	
		return $effDateMin;
	}

	public function getEffDateMax($autoCreate = TRUE) {
		if ($this->effDateMax===NULL && $autoCreate && ! isset($this->_overrides['effDateMax']) ) {
			$this->effDateMax = $this->createEffDateMax();
		}
		return $this->effDateMax;
	}
	
	protected function createEffDateMax() {
		return NULL;
	}

	public function setEffDateMax($effDateMax) {
		$this->effDateMax = $this->validateEffDateMax($effDateMax);
	}

	protected function validateEffDateMax($effDateMax) {
		if ( ! is_string($effDateMax) && ! is_null($effDateMax) ) {
			throw new \Exception(sprintf('Supplied %s value was not %s', 'effDateMax', 'string'));
		}
	
		return $effDateMax;
	}

	public function getCreatedAppId($autoCreate = TRUE) {
		if ($this->createdAppId===NULL && $autoCreate && ! isset($this->_overrides['createdAppId']) ) {
			$this->createdAppId = $this->createCreatedAppId();
		}
		return $this->createdAppId;
	}
	
	protected function createCreatedAppId() {
		return new \com\microsoft\wc\types\Guid();
	}

	public function setCreatedAppId($createdAppId) {
		$this->createdAppId = $this->validateCreatedAppId($createdAppId);
	}

	protected function validateCreatedAppId($createdAppId) {
		if ( $createdAppId === FALSE ) {
			$this->_overrides['createdAppId'] = TRUE;
			return NULL;
		}

		if ( ! $createdAppId instanceof \com\microsoft\wc\types\Guid  && ! is_null($createdAppId) ) {
			$createdAppId = new \com\microsoft\wc\types\Guid ($createdAppId);
		}

		unset ($this->_overrides['createdAppId']);
	
		return $createdAppId;
	}

	public function getCreatedPersonId($autoCreate = TRUE) {
		if ($this->createdPersonId===NULL && $autoCreate && ! isset($this->_overrides['createdPersonId']) ) {
			$this->createdPersonId = $this->createCreatedPersonId();
		}
		return $this->createdPersonId;
	}
	
	protected function createCreatedPersonId() {
		return new \com\microsoft\wc\types\Guid();
	}

	public function setCreatedPersonId($createdPersonId) {
		$this->createdPersonId = $this->validateCreatedPersonId($createdPersonId);
	}

	protected function validateCreatedPersonId($createdPersonId) {
		if ( $createdPersonId === FALSE ) {
			$this->_overrides['createdPersonId'] = TRUE;
			return NULL;
		}

		if ( ! $createdPersonId instanceof \com\microsoft\wc\types\Guid  && ! is_null($createdPersonId) ) {
			$createdPersonId = new \com\microsoft\wc\types\Guid ($createdPersonId);
		}

		unset ($this->_overrides['createdPersonId']);
	
		return $createdPersonId;
	}

	public function getUpdatedAppId($autoCreate = TRUE) {
		if ($this->updatedAppId===NULL && $autoCreate && ! isset($this->_overrides['updatedAppId']) ) {
			$this->updatedAppId = $this->createUpdatedAppId();
		}
		return $this->updatedAppId;
	}
	
	protected function createUpdatedAppId() {
		return new \com\microsoft\wc\types\Guid();
	}

	public function setUpdatedAppId($updatedAppId) {
		$this->updatedAppId = $this->validateUpdatedAppId($updatedAppId);
	}

	protected function validateUpdatedAppId($updatedAppId) {
		if ( $updatedAppId === FALSE ) {
			$this->_overrides['updatedAppId'] = TRUE;
			return NULL;
		}

		if ( ! $updatedAppId instanceof \com\microsoft\wc\types\Guid  && ! is_null($updatedAppId) ) {
			$updatedAppId = new \com\microsoft\wc\types\Guid ($updatedAppId);
		}

		unset ($this->_overrides['updatedAppId']);
	
		return $updatedAppId;
	}

	public function getUpdatedPersonId($autoCreate = TRUE) {
		if ($this->updatedPersonId===NULL && $autoCreate && ! isset($this->_overrides['updatedPersonId']) ) {
			$this->updatedPersonId = $this->createUpdatedPersonId();
		}
		return $this->updatedPersonId;
	}
	
	protected function createUpdatedPersonId() {
		return new \com\microsoft\wc\types\Guid();
	}

	public function setUpdatedPersonId($updatedPersonId) {
		$this->updatedPersonId = $this->validateUpdatedPersonId($updatedPersonId);
	}

	protected function validateUpdatedPersonId($updatedPersonId) {
		if ( $updatedPersonId === FALSE ) {
			$this->_overrides['updatedPersonId'] = TRUE;
			return NULL;
		}

		if ( ! $updatedPersonId instanceof \com\microsoft\wc\types\Guid  && ! is_null($updatedPersonId) ) {
			$updatedPersonId = new \com\microsoft\wc\types\Guid ($updatedPersonId);
		}

		unset ($this->_overrides['updatedPersonId']);
	
		return $updatedPersonId;
	}

	public function getCreatedDateMin($autoCreate = TRUE) {
		if ($this->createdDateMin===NULL && $autoCreate && ! isset($this->_overrides['createdDateMin']) ) {
			$this->createdDateMin = $this->createCreatedDateMin();
		}
		return $this->createdDateMin;
	}
	
	protected function createCreatedDateMin() {
		return NULL;
	}

	public function setCreatedDateMin($createdDateMin) {
		$this->createdDateMin = $this->validateCreatedDateMin($createdDateMin);
	}

	protected function validateCreatedDateMin($createdDateMin) {
		if ( ! is_string($createdDateMin) && ! is_null($createdDateMin) ) {
			throw new \Exception(sprintf('Supplied %s value was not %s', 'createdDateMin', 'string'));
		}
	
		return $createdDateMin;
	}

	public function getCreatedDateMax($autoCreate = TRUE) {
		if ($this->createdDateMax===NULL && $autoCreate && ! isset($this->_overrides['createdDateMax']) ) {
			$this->createdDateMax = $this->createCreatedDateMax();
		}
		return $this->createdDateMax;
	}
	
	protected function createCreatedDateMax() {
		return NULL;
	}

	public function setCreatedDateMax($createdDateMax) {
		$this->createdDateMax = $this->validateCreatedDateMax($createdDateMax);
	}

	protected function validateCreatedDateMax($createdDateMax) {
		if ( ! is_string($createdDateMax) && ! is_null($createdDateMax) ) {
			throw new \Exception(sprintf('Supplied %s value was not %s', 'createdDateMax', 'string'));
		}
	
		return $createdDateMax;
	}

	public function getUpdatedDateMin($autoCreate = TRUE) {
		if ($this->updatedDateMin===NULL && $autoCreate && ! isset($this->_overrides['updatedDateMin']) ) {
			$this->updatedDateMin = $this->createUpdatedDateMin();
		}
		return $this->updatedDateMin;
	}
	
	protected function createUpdatedDateMin() {
		return NULL;
	}

	public function setUpdatedDateMin($updatedDateMin) {
		$this->updatedDateMin = $this->validateUpdatedDateMin($updatedDateMin);
	}

	protected function validateUpdatedDateMin($updatedDateMin) {
		if ( ! is_string($updatedDateMin) && ! is_null($updatedDateMin) ) {
			throw new \Exception(sprintf('Supplied %s value was not %s', 'updatedDateMin', 'string'));
		}
	
		return $updatedDateMin;
	}

	public function getUpdatedDateMax($autoCreate = TRUE) {
		if ($this->updatedDateMax===NULL && $autoCreate && ! isset($this->_overrides['updatedDateMax']) ) {
			$this->updatedDateMax = $this->createUpdatedDateMax();
		}
		return $this->updatedDateMax;
	}
	
	protected function createUpdatedDateMax() {
		return NULL;
	}

	public function setUpdatedDateMax($updatedDateMax) {
		$this->updatedDateMax = $this->validateUpdatedDateMax($updatedDateMax);
	}

	protected function validateUpdatedDateMax($updatedDateMax) {
		if ( ! is_string($updatedDateMax) && ! is_null($updatedDateMax) ) {
			throw new \Exception(sprintf('Supplied %s value was not %s', 'updatedDateMax', 'string'));
		}
	
		return $updatedDateMax;
	}

	public function getXpath($autoCreate = TRUE) {
		if ($this->xpath===NULL && $autoCreate && ! isset($this->_overrides['xpath']) ) {
			$this->xpath = $this->createXpath();
		}
		return $this->xpath;
	}
	
	protected function createXpath() {
		return '';
	}

	public function setXpath($xpath) {
		$this->xpath = $this->validateXpath($xpath);
	}

	protected function validateXpath($xpath) {
		if ( ! is_string($xpath) && ! is_null($xpath) ) {
			throw new \Exception(sprintf('Supplied %s value was not %s', 'xpath', 'string'));
		}
	
		return $xpath;
	}
} // end class ThingFilterSpec
