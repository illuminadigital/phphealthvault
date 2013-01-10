<?php
namespace com\microsoft\wc\thing;

use com\microsoft\wc\thing\ThingKey;
use com\microsoft\wc\thing\ThingType;

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

	public function __construct($thingId = NULL, $typeId = NULL, $effDate = NULL) {
		$this->thingId = ($thingId===NULL) ? NULL : $this->validateThingId($thingId);
		$this->typeId = ($typeId===NULL) ? NULL : $this->validateTypeId($typeId);
		$this->effDate = ($effDate===NULL) ? NULL : $this->validateEffDate($effDate);
	}

	public function getThingId() {
		if ($this->thingId===NULL) {
			$this->thingId = $this->createThingId();
		}
		return $this->thingId;
	}
	
	protected function createThingId() {
		return new ThingKey();
	}

	public function setThingId($thingId) {
		$this->thingId = $this->validateThingId($thingId);
	}

	protected function validateThingId($thingId) {
		if ( ! $thingId instanceof ThingKey ) {
			$thingId = new ThingKey ($thingId);
		}
	
		return $thingId;
	}

	public function getTypeId() {
		if ($this->typeId===NULL) {
			$this->typeId = $this->createTypeId();
		}
		return $this->typeId;
	}
	
	protected function createTypeId() {
		return new ThingType();
	}

	public function setTypeId($typeId) {
		$this->typeId = $this->validateTypeId($typeId);
	}

	protected function validateTypeId($typeId) {
		if ( ! $typeId instanceof ThingType ) {
			$typeId = new ThingType ($typeId);
		}
	
		return $typeId;
	}

	public function getEffDate() {
		if ($this->effDate===NULL) {
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
} // end class UnprocessedThingKeyInfo
