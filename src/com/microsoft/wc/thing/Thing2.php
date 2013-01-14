<?php
namespace com\microsoft\wc\thing;

use com\microsoft\wc\thing\ThingKey;
use com\microsoft\wc\thing\ThingType;
use com\microsoft\wc\thing\ThingState;
use com\microsoft\wc\thing\Audit2;
use com\microsoft\wc\thing\BlobPayload;
use com\microsoft\wc\thing\EffectivePermissions;
use com\microsoft\wc\types\Stringz512;
use com\microsoft\wc\thing\SignatureInfo;
use com\microsoft\wc\thing\DataXml;

/**
 * @XmlEntity	(xml="Thing2")
 */
class Thing2 {
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
	 * @XmlElement	(type="\com\microsoft\wc\thing\Audit2", name="created")
	 */
	protected $created;

	/**
	 * @XmlElement	(type="\com\microsoft\wc\thing\Audit2", name="updated")
	 */
	protected $updated;

	/**
	 * @XmlElement	(type="\com\microsoft\wc\thing\DataXml", collection="true", name="data-xml")
	 */
	protected $dataXml;

	/**
	 * @XmlElement	(type="\com\microsoft\wc\thing\BlobPayload", name="blob-payload")
	 */
	protected $blobPayload;

	/**
	 * @XmlElement	(type="\com\microsoft\wc\thing\EffectivePermissions", name="eff-permissions")
	 */
	protected $effPermissions;

	/**
	 * @XmlElement	(type="\com\microsoft\wc\types\Stringz512", name="tags")
	 */
	protected $tags;

	/**
	 * @XmlElement	(type="\com\microsoft\wc\thing\SignatureInfo", name="signature-info")
	 */
	protected $signatureInfo;

	public function __construct($thingId = NULL, $typeId = NULL, $thingState = NULL, $flags = NULL, $effDate = NULL, $created = NULL, $updated = NULL, $dataXml = NULL, $blobPayload = NULL, $effPermissions = NULL, $tags = NULL, $signatureInfo = NULL) {
		$this->thingId = ($thingId===NULL) ? NULL : $this->validateThingId($thingId);
		$this->typeId = ($typeId===NULL) ? NULL : $this->validateTypeId($typeId);
		$this->thingState = ($thingState===NULL) ? NULL : $this->validateThingState($thingState);
		$this->flags = ($flags===NULL) ? NULL : $this->validateFlags($flags);
		$this->effDate = ($effDate===NULL) ? NULL : $this->validateEffDate($effDate);
		$this->created = ($created===NULL) ? NULL : $this->validateCreated($created);
		$this->updated = ($updated===NULL) ? NULL : $this->validateUpdated($updated);
		$this->dataXml = ($dataXml===NULL) ? NULL : $this->validateDataXml($dataXml);
		$this->blobPayload = ($blobPayload===NULL) ? NULL : $this->validateBlobPayload($blobPayload);
		$this->effPermissions = ($effPermissions===NULL) ? NULL : $this->validateEffPermissions($effPermissions);
		$this->tags = ($tags===NULL) ? NULL : $this->validateTags($tags);
		$this->signatureInfo = ($signatureInfo===NULL) ? NULL : $this->validateSignatureInfo($signatureInfo);
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
		if ( ! $thingId instanceof ThingKey  && ! is_null($thingId) ) {
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
		if ( ! $typeId instanceof ThingType  && ! is_null($typeId) ) {
			$typeId = new ThingType ($typeId);
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
		return new ThingState();
	}

	public function setThingState($thingState) {
		$this->thingState = $this->validateThingState($thingState);
	}

	protected function validateThingState($thingState) {
		if ( ! $thingState instanceof ThingState  && ! is_null($thingState) ) {
			$thingState = new ThingState ($thingState);
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
		return new Audit2();
	}

	public function setCreated($created) {
		$this->created = $this->validateCreated($created);
	}

	protected function validateCreated($created) {
		if ( ! $created instanceof Audit2  && ! is_null($created) ) {
			$created = new Audit2 ($created);
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
		return new Audit2();
	}

	public function setUpdated($updated) {
		$this->updated = $this->validateUpdated($updated);
	}

	protected function validateUpdated($updated) {
		if ( ! $updated instanceof Audit2  && ! is_null($updated) ) {
			$updated = new Audit2 ($updated);
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
		if ( ! $dataXml instanceof DataXml  && ! is_null($dataXml) ) {
			$dataXml = new DataXml ($dataXml);
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

	public function getBlobPayload() {
		if ($this->blobPayload===NULL) {
			$this->blobPayload = $this->createBlobPayload();
		}
		return $this->blobPayload;
	}
	
	protected function createBlobPayload() {
		return new BlobPayload();
	}

	public function setBlobPayload($blobPayload) {
		$this->blobPayload = $this->validateBlobPayload($blobPayload);
	}

	protected function validateBlobPayload($blobPayload) {
		if ( ! $blobPayload instanceof BlobPayload  && ! is_null($blobPayload) ) {
			$blobPayload = new BlobPayload ($blobPayload);
		}
	
		return $blobPayload;
	}

	public function getEffPermissions() {
		if ($this->effPermissions===NULL) {
			$this->effPermissions = $this->createEffPermissions();
		}
		return $this->effPermissions;
	}
	
	protected function createEffPermissions() {
		return new EffectivePermissions();
	}

	public function setEffPermissions($effPermissions) {
		$this->effPermissions = $this->validateEffPermissions($effPermissions);
	}

	protected function validateEffPermissions($effPermissions) {
		if ( ! $effPermissions instanceof EffectivePermissions  && ! is_null($effPermissions) ) {
			$effPermissions = new EffectivePermissions ($effPermissions);
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
		return new Stringz512();
	}

	public function setTags($tags) {
		$this->tags = $this->validateTags($tags);
	}

	protected function validateTags($tags) {
		if ( ! $tags instanceof Stringz512  && ! is_null($tags) ) {
			$tags = new Stringz512 ($tags);
		}
	
		return $tags;
	}

	public function getSignatureInfo() {
		if ($this->signatureInfo===NULL) {
			$this->signatureInfo = $this->createSignatureInfo();
		}
		return $this->signatureInfo;
	}
	
	protected function createSignatureInfo() {
		return new SignatureInfo();
	}

	public function setSignatureInfo($signatureInfo) {
		$this->signatureInfo = $this->validateSignatureInfo($signatureInfo);
	}

	protected function validateSignatureInfo($signatureInfo) {
		if ( ! $signatureInfo instanceof SignatureInfo  && ! is_null($signatureInfo) ) {
			$signatureInfo = new SignatureInfo ($signatureInfo);
		}
	
		return $signatureInfo;
	}
} // end class Thing2