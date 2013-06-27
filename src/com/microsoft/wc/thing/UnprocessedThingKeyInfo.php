<?php
namespace com\microsoft\wc\thing;



/**
 * @XmlNamespaces ({
 *	@XmlNamespace(url="urn:com.microsoft.wc.thing", prefix="wc-thing")
 * })
 * @XmlEntity	(xml="UnprocessedThingKeyInfo")
 */
class UnprocessedThingKeyInfo {
	/**
	 * Specifies the things returned with partial information.
	 * Things will be returned with partial information if the maximum limit for full things have been reached. To retrieve the things in full form, the thing ids can be specified in the filter group of additional GetThing methods requests.
	 */

	/**
	 * List of manually overridden properties that should not be re-generated automatically
	 * @var array
	 */
	protected $_overrides = array();


	/**
	 * @XmlElement	(type="\com\microsoft\wc\thing\ThingKey", name="thing-id")
	 */
	protected $thingId;

	/**
	 * @XmlElement	(type="\com\microsoft\wc\thing\ThingType", name="type-id")
	 */
	protected $typeId;

	/**
	 * @XmlText	(type="string", name="eff-date")
	 */
	protected $effDate;

	/**
	 * @XmlText	(type="string", name="updated-end-date")
	 */
	protected $updatedEndDate;

	public function __construct($thingId = NULL, $typeId = NULL, $effDate = NULL, $updatedEndDate = NULL) {
		$this->thingId = ($thingId===NULL) ? NULL : $this->validateThingId($thingId);
		$this->typeId = ($typeId===NULL) ? NULL : $this->validateTypeId($typeId);
		$this->effDate = ($effDate===NULL) ? NULL : $this->validateEffDate($effDate);
		$this->updatedEndDate = ($updatedEndDate===NULL) ? NULL : $this->validateUpdatedEndDate($updatedEndDate);
	}

	public function getThingId($autoCreate = TRUE) {
		if ($this->thingId===NULL && $autoCreate && ! isset($this->_overrides['thingId']) ) {
			$this->thingId = $this->createThingId();
		}
		return $this->thingId;
	}
	
	protected function createThingId() {
		return new \com\microsoft\wc\thing\ThingKey();
	}

	public function setThingId($thingId) {
		$this->thingId = $this->validateThingId($thingId);
	}

	protected function validateThingId($thingId) {
		if ( ! $thingId instanceof \com\microsoft\wc\thing\ThingKey ) {
			$thingId = new \com\microsoft\wc\thing\ThingKey ($thingId);
		}
	
		return $thingId;
	}

	public function getTypeId($autoCreate = TRUE) {
		if ($this->typeId===NULL && $autoCreate && ! isset($this->_overrides['typeId']) ) {
			$this->typeId = $this->createTypeId();
		}
		return $this->typeId;
	}
	
	protected function createTypeId() {
		return new \com\microsoft\wc\thing\ThingType();
	}

	public function setTypeId($typeId) {
		$this->typeId = $this->validateTypeId($typeId);
	}

	protected function validateTypeId($typeId) {
		if ( ! $typeId instanceof \com\microsoft\wc\thing\ThingType ) {
			$typeId = new \com\microsoft\wc\thing\ThingType ($typeId);
		}
	
		return $typeId;
	}

	public function getEffDate($autoCreate = TRUE) {
		if ($this->effDate===NULL && $autoCreate && ! isset($this->_overrides['effDate']) ) {
			$this->effDate = $this->createEffDate();
		}
		return $this->effDate;
	}
	
	protected function createEffDate() {
		return NULL;
	}

	public function setEffDate($effDate) {
		$this->effDate = $this->validateEffDate($effDate);
	}

	protected function validateEffDate($effDate) {
		if (!is_string($effDate)) {
			throw new \Exception(sprintf('Supplied %s value was not %s', 'effDate', 'string'));
		}
	
		return $effDate;
	}

	public function getUpdatedEndDate($autoCreate = TRUE) {
		if ($this->updatedEndDate===NULL && $autoCreate && ! isset($this->_overrides['updatedEndDate']) ) {
			$this->updatedEndDate = $this->createUpdatedEndDate();
		}
		return $this->updatedEndDate;
	}
	
	protected function createUpdatedEndDate() {
		return NULL;
	}

	public function setUpdatedEndDate($updatedEndDate) {
		$this->updatedEndDate = $this->validateUpdatedEndDate($updatedEndDate);
	}

	protected function validateUpdatedEndDate($updatedEndDate) {
		if ( ! is_string($updatedEndDate) && ! is_null($updatedEndDate) ) {
			throw new \Exception(sprintf('Supplied %s value was not %s', 'updatedEndDate', 'string'));
		}
	
		return $updatedEndDate;
	}
} // end class UnprocessedThingKeyInfo
