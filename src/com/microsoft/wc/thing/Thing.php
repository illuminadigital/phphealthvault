<?php
namespace com\microsoft\wc\thing;



/**
 * @XmlNamespaces ({
 *	@XmlNamespace(url="urn:com.microsoft.wc.thing", prefix="wc-thing")
 * })
 * @XmlEntity	(xml="Thing")
 */
class Thing {
	/**
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
	 * @XmlElement	(type="\com\microsoft\wc\thing\ThingState", name="thing-state")
	 */
	protected $thingState;

	/**
	 * @XmlText	(type="integer", name="flags")
	 */
	protected $flags;

	/**
	 * @XmlText	(type="string", name="eff-date")
	 */
	protected $effDate;

	/**
	 * @XmlElement	(type="\com\microsoft\wc\thing\Audit", name="created")
	 */
	protected $created;

	/**
	 * @XmlElement	(type="\com\microsoft\wc\thing\Audit", name="updated")
	 */
	protected $updated;

	/**
	 * @XmlElement	(type="\com\microsoft\wc\thing\DataXml", collection="true", name="data-xml")
	 */
	protected $dataXml;

	/**
	 * @XmlElement	(type="\com\microsoft\wc\thing\DataOther", name="data-other")
	 */
	protected $dataOther;

	/**
	 * @XmlElement	(type="\com\microsoft\wc\thing\EffectivePermissions", name="eff-permissions")
	 */
	protected $effPermissions;

	/**
	 * @XmlElement	(type="\com\microsoft\wc\types\String512", name="tags")
	 */
	protected $tags;

	/**
	 * @XmlElement	(type="\org\w3\www\_2000\_09\xmldsig\Signature", name="Signature")
	 */
	protected $signature;

	public function __construct($thingId = NULL, $typeId = NULL, $thingState = NULL, $flags = NULL, $effDate = NULL, $created = NULL, $updated = NULL, $dataXml = NULL, $dataOther = NULL, $effPermissions = NULL, $tags = NULL, $signature = NULL) {
		$this->thingId = ($thingId===NULL) ? NULL : $this->validateThingId($thingId);
		$this->typeId = ($typeId===NULL) ? NULL : $this->validateTypeId($typeId);
		$this->thingState = ($thingState===NULL) ? NULL : $this->validateThingState($thingState);
		$this->flags = ($flags===NULL) ? NULL : $this->validateFlags($flags);
		$this->effDate = ($effDate===NULL) ? NULL : $this->validateEffDate($effDate);
		$this->created = ($created===NULL) ? NULL : $this->validateCreated($created);
		$this->updated = ($updated===NULL) ? NULL : $this->validateUpdated($updated);
		$this->dataXml = ($dataXml===NULL) ? NULL : $this->validateDataXml($dataXml);
		$this->dataOther = ($dataOther===NULL) ? NULL : $this->validateDataOther($dataOther);
		$this->effPermissions = ($effPermissions===NULL) ? NULL : $this->validateEffPermissions($effPermissions);
		$this->tags = ($tags===NULL) ? NULL : $this->validateTags($tags);
		$this->signature = ($signature===NULL) ? NULL : $this->validateSignature($signature);
	}

	public function getThingId() {
		if ($this->thingId===NULL) {
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
		if ( ! $thingId instanceof \com\microsoft\wc\thing\ThingKey  && ! is_null($thingId) ) {
			$thingId = new \com\microsoft\wc\thing\ThingKey ($thingId);
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
		return new \com\microsoft\wc\thing\ThingType();
	}

	public function setTypeId($typeId) {
		$this->typeId = $this->validateTypeId($typeId);
	}

	protected function validateTypeId($typeId) {
		if ( ! $typeId instanceof \com\microsoft\wc\thing\ThingType  && ! is_null($typeId) ) {
			$typeId = new \com\microsoft\wc\thing\ThingType ($typeId);
		}
	
		return $typeId;
	}

	public function getThingState() {
		if ($this->thingState===NULL) {
			$this->thingState = $this->createThingState();
		}
		return $this->thingState;
	}
	
	protected function createThingState() {
		return new \com\microsoft\wc\thing\ThingState();
	}

	public function setThingState($thingState) {
		$this->thingState = $this->validateThingState($thingState);
	}

	protected function validateThingState($thingState) {
		if ( ! $thingState instanceof \com\microsoft\wc\thing\ThingState  && ! is_null($thingState) ) {
			$thingState = new \com\microsoft\wc\thing\ThingState ($thingState);
		}
	
		return $thingState;
	}

	public function getFlags() {
		if ($this->flags===NULL) {
			$this->flags = $this->createFlags();
		}
		return $this->flags;
	}
	
	protected function createFlags() {
		return NULL;
	}

	public function setFlags($flags) {
		$this->flags = $this->validateFlags($flags);
	}

	protected function validateFlags($flags) {
		if ( ! is_integer($flags) && ! is_null($flags) ) {
			throw new \Exception(sprintf('Supplied %s value was not %s', 'flags', 'integer'));
		}
	
		return $flags;
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
		if ( ! is_string($effDate) && ! is_null($effDate) ) {
			throw new \Exception(sprintf('Supplied %s value was not %s', 'effDate', 'string'));
		}
	
		return $effDate;
	}

	public function getCreated() {
		if ($this->created===NULL) {
			$this->created = $this->createCreated();
		}
		return $this->created;
	}
	
	protected function createCreated() {
		return new \com\microsoft\wc\thing\Audit();
	}

	public function setCreated($created) {
		$this->created = $this->validateCreated($created);
	}

	protected function validateCreated($created) {
		if ( ! $created instanceof \com\microsoft\wc\thing\Audit  && ! is_null($created) ) {
			$created = new \com\microsoft\wc\thing\Audit ($created);
		}
	
		return $created;
	}

	public function getUpdated() {
		if ($this->updated===NULL) {
			$this->updated = $this->createUpdated();
		}
		return $this->updated;
	}
	
	protected function createUpdated() {
		return new \com\microsoft\wc\thing\Audit();
	}

	public function setUpdated($updated) {
		$this->updated = $this->validateUpdated($updated);
	}

	protected function validateUpdated($updated) {
		if ( ! $updated instanceof \com\microsoft\wc\thing\Audit  && ! is_null($updated) ) {
			$updated = new \com\microsoft\wc\thing\Audit ($updated);
		}
	
		return $updated;
	}

	public function getDataXml() {
		if ($this->dataXml===NULL) {
			$this->dataXml = $this->createDataXml();
		}
		return $this->dataXml;
	}
	
	protected function createDataXml() {
		return array();
	}

	public function setDataXml($dataXml) {
		$this->dataXml = $this->validateDataXml($dataXml);
	}

	protected function validateDataXml($dataXml) {
		if ( ! is_array ($dataXml) && ! is_null($dataXml) ) {
			$dataXml = array($dataXml);
		}
		$count = count($dataXml);
		if ($count < 0) {
			throw new \Exception(sprintf('Supplied %s array has less than the required number (%d) of entries.', 'dataXml', 0));
		}
		foreach ($dataXml as $entry) {
			if (!($entry instanceof DataXml)) {
				throw new \Exception(sprintf('Supplied %s value was not %s', 'dataXml', 'DataXml'));
			}
		}
	
		return $dataXml;
	}

	public function addDataXml($dataXml) {
		$this->dataXml[] = $dataXml;
	}

	public function getDataOther() {
		if ($this->dataOther===NULL) {
			$this->dataOther = $this->createDataOther();
		}
		return $this->dataOther;
	}
	
	protected function createDataOther() {
		return new \com\microsoft\wc\thing\DataOther();
	}

	public function setDataOther($dataOther) {
		$this->dataOther = $this->validateDataOther($dataOther);
	}

	protected function validateDataOther($dataOther) {
		if ( ! $dataOther instanceof \com\microsoft\wc\thing\DataOther  && ! is_null($dataOther) ) {
			$dataOther = new \com\microsoft\wc\thing\DataOther ($dataOther);
		}
	
		return $dataOther;
	}

	public function getEffPermissions() {
		if ($this->effPermissions===NULL) {
			$this->effPermissions = $this->createEffPermissions();
		}
		return $this->effPermissions;
	}
	
	protected function createEffPermissions() {
		return new \com\microsoft\wc\thing\EffectivePermissions();
	}

	public function setEffPermissions($effPermissions) {
		$this->effPermissions = $this->validateEffPermissions($effPermissions);
	}

	protected function validateEffPermissions($effPermissions) {
		if ( ! $effPermissions instanceof \com\microsoft\wc\thing\EffectivePermissions  && ! is_null($effPermissions) ) {
			$effPermissions = new \com\microsoft\wc\thing\EffectivePermissions ($effPermissions);
		}
	
		return $effPermissions;
	}

	public function getTags() {
		if ($this->tags===NULL) {
			$this->tags = $this->createTags();
		}
		return $this->tags;
	}
	
	protected function createTags() {
		return new \com\microsoft\wc\types\String512();
	}

	public function setTags($tags) {
		$this->tags = $this->validateTags($tags);
	}

	protected function validateTags($tags) {
		if ( ! $tags instanceof \com\microsoft\wc\types\String512  && ! is_null($tags) ) {
			$tags = new \com\microsoft\wc\types\String512 ($tags);
		}
	
		return $tags;
	}

	public function getSignature() {
		if ($this->signature===NULL) {
			$this->signature = $this->createSignature();
		}
		return $this->signature;
	}
	
	protected function createSignature() {
		return new \org\w3\www\_2000\_09\xmldsig\Signature();
	}

	public function setSignature($signature) {
		$this->signature = $this->validateSignature($signature);
	}

	protected function validateSignature($signature) {
		if ( ! $signature instanceof \org\w3\www\_2000\_09\xmldsig\Signature  && ! is_null($signature) ) {
			$signature = new \org\w3\www\_2000\_09\xmldsig\Signature ($signature);
		}
	
		return $signature;
	}
} // end class Thing
