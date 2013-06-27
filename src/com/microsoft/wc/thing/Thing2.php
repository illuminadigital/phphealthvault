<?php
namespace com\microsoft\wc\thing;



/**
 * @XmlNamespaces ({
 *	@XmlNamespace(url="urn:com.microsoft.wc.thing", prefix="wc-thing")
 * })
 * @XmlEntity	(xml="Thing2")
 */
class Thing2 {
	/**
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

	/**
	 * @XmlText	(type="string", name="updated-end-date")
	 */
	protected $updatedEndDate;

	public function __construct($thingId = NULL, $typeId = NULL, $thingState = NULL, $flags = NULL, $effDate = NULL, $created = NULL, $updated = NULL, $dataXml = NULL, $blobPayload = NULL, $effPermissions = NULL, $tags = NULL, $signatureInfo = NULL, $updatedEndDate = NULL) {
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
		if ( $thingId === FALSE ) {
			$this->_overrides['thingId'] = TRUE;
			return NULL;
		}

		if ( ! $thingId instanceof \com\microsoft\wc\thing\ThingKey  && ! is_null($thingId) ) {
			$thingId = new \com\microsoft\wc\thing\ThingKey ($thingId);
		}

		unset ($this->_overrides['thingId']);
	
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
		if ( $typeId === FALSE ) {
			$this->_overrides['typeId'] = TRUE;
			return NULL;
		}

		if ( ! $typeId instanceof \com\microsoft\wc\thing\ThingType  && ! is_null($typeId) ) {
			$typeId = new \com\microsoft\wc\thing\ThingType ($typeId);
		}

		unset ($this->_overrides['typeId']);
	
		return $typeId;
	}

	public function getThingState($autoCreate = TRUE) {
		if ($this->thingState===NULL && $autoCreate && ! isset($this->_overrides['thingState']) ) {
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
		if ( $thingState === FALSE ) {
			$this->_overrides['thingState'] = TRUE;
			return NULL;
		}

		if ( ! $thingState instanceof \com\microsoft\wc\thing\ThingState  && ! is_null($thingState) ) {
			$thingState = new \com\microsoft\wc\thing\ThingState ($thingState);
		}

		unset ($this->_overrides['thingState']);
	
		return $thingState;
	}

	public function getFlags($autoCreate = TRUE) {
		if ($this->flags===NULL && $autoCreate && ! isset($this->_overrides['flags']) ) {
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
		$isValid = FALSE;
		if ( is_integer($flags) ) {
			$isValid = TRUE;
		}
		else if ( is_null($flags) ) {
			$isValid = TRUE;
		}
		else if ( $flags == ($castVar = (integer) $flags) ) {
			$isValid = TRUE;
			$flags = $castVar;
		}
		if ( ! $isValid ) {
			throw new \Exception(sprintf('Supplied %s value was not %s', 'flags', 'integer'));
		}
	
		return $flags;
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
		if ( ! is_string($effDate) && ! is_null($effDate) ) {
			throw new \Exception(sprintf('Supplied %s value was not %s', 'effDate', 'string'));
		}
	
		return $effDate;
	}

	public function getCreated($autoCreate = TRUE) {
		if ($this->created===NULL && $autoCreate && ! isset($this->_overrides['created']) ) {
			$this->created = $this->createCreated();
		}
		return $this->created;
	}
	
	protected function createCreated() {
		return new \com\microsoft\wc\thing\Audit2();
	}

	public function setCreated($created) {
		$this->created = $this->validateCreated($created);
	}

	protected function validateCreated($created) {
		if ( $created === FALSE ) {
			$this->_overrides['created'] = TRUE;
			return NULL;
		}

		if ( ! $created instanceof \com\microsoft\wc\thing\Audit2  && ! is_null($created) ) {
			$created = new \com\microsoft\wc\thing\Audit2 ($created);
		}

		unset ($this->_overrides['created']);
	
		return $created;
	}

	public function getUpdated($autoCreate = TRUE) {
		if ($this->updated===NULL && $autoCreate && ! isset($this->_overrides['updated']) ) {
			$this->updated = $this->createUpdated();
		}
		return $this->updated;
	}
	
	protected function createUpdated() {
		return new \com\microsoft\wc\thing\Audit2();
	}

	public function setUpdated($updated) {
		$this->updated = $this->validateUpdated($updated);
	}

	protected function validateUpdated($updated) {
		if ( $updated === FALSE ) {
			$this->_overrides['updated'] = TRUE;
			return NULL;
		}

		if ( ! $updated instanceof \com\microsoft\wc\thing\Audit2  && ! is_null($updated) ) {
			$updated = new \com\microsoft\wc\thing\Audit2 ($updated);
		}

		unset ($this->_overrides['updated']);
	
		return $updated;
	}

	public function getDataXml($autoCreate = TRUE) {
		if ($this->dataXml===NULL && $autoCreate && ! isset($this->_overrides['dataXml']) ) {
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
		if ( $dataXml === FALSE ) {
			$this->_overrides['dataXml'] = TRUE;
			return NULL;
		}

		if ( ! is_array ($dataXml) && ! is_null($dataXml) ) {
			$dataXml = array($dataXml);
		}

		unset ($this->_overrides['dataXml']);
		$count = count($dataXml);
		if ($count < 0) {
			throw new \Exception(sprintf('Supplied %s array has less than the required number (%d) of entries.', 'dataXml', 0));
		}
		if ( ! empty($dataXml) ) {
			foreach ($dataXml as $entry) {
				if (!($entry instanceof \com\microsoft\wc\thing\DataXml )) {
					throw new \Exception(sprintf('Supplied %s value was not %s', 'dataXml', 'DataXml'));
				}
			}
		}
	
		return $dataXml;
	}

	public function addDataXml($dataXml) {
		$this->dataXml[] = $dataXml;
	}

	public function getBlobPayload($autoCreate = TRUE) {
		if ($this->blobPayload===NULL && $autoCreate && ! isset($this->_overrides['blobPayload']) ) {
			$this->blobPayload = $this->createBlobPayload();
		}
		return $this->blobPayload;
	}
	
	protected function createBlobPayload() {
		return new \com\microsoft\wc\thing\BlobPayload();
	}

	public function setBlobPayload($blobPayload) {
		$this->blobPayload = $this->validateBlobPayload($blobPayload);
	}

	protected function validateBlobPayload($blobPayload) {
		if ( $blobPayload === FALSE ) {
			$this->_overrides['blobPayload'] = TRUE;
			return NULL;
		}

		if ( ! $blobPayload instanceof \com\microsoft\wc\thing\BlobPayload  && ! is_null($blobPayload) ) {
			$blobPayload = new \com\microsoft\wc\thing\BlobPayload ($blobPayload);
		}

		unset ($this->_overrides['blobPayload']);
	
		return $blobPayload;
	}

	public function getEffPermissions($autoCreate = TRUE) {
		if ($this->effPermissions===NULL && $autoCreate && ! isset($this->_overrides['effPermissions']) ) {
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
		if ( $effPermissions === FALSE ) {
			$this->_overrides['effPermissions'] = TRUE;
			return NULL;
		}

		if ( ! $effPermissions instanceof \com\microsoft\wc\thing\EffectivePermissions  && ! is_null($effPermissions) ) {
			$effPermissions = new \com\microsoft\wc\thing\EffectivePermissions ($effPermissions);
		}

		unset ($this->_overrides['effPermissions']);
	
		return $effPermissions;
	}

	public function getTags($autoCreate = TRUE) {
		if ($this->tags===NULL && $autoCreate && ! isset($this->_overrides['tags']) ) {
			$this->tags = $this->createTags();
		}
		return $this->tags;
	}
	
	protected function createTags() {
		return new \com\microsoft\wc\types\Stringz512();
	}

	public function setTags($tags) {
		$this->tags = $this->validateTags($tags);
	}

	protected function validateTags($tags) {
		if ( $tags === FALSE ) {
			$this->_overrides['tags'] = TRUE;
			return NULL;
		}

		if ( ! $tags instanceof \com\microsoft\wc\types\Stringz512  && ! is_null($tags) ) {
			$tags = new \com\microsoft\wc\types\Stringz512 ($tags);
		}

		unset ($this->_overrides['tags']);
	
		return $tags;
	}

	public function getSignatureInfo($autoCreate = TRUE) {
		if ($this->signatureInfo===NULL && $autoCreate && ! isset($this->_overrides['signatureInfo']) ) {
			$this->signatureInfo = $this->createSignatureInfo();
		}
		return $this->signatureInfo;
	}
	
	protected function createSignatureInfo() {
		return new \com\microsoft\wc\thing\SignatureInfo();
	}

	public function setSignatureInfo($signatureInfo) {
		$this->signatureInfo = $this->validateSignatureInfo($signatureInfo);
	}

	protected function validateSignatureInfo($signatureInfo) {
		if ( $signatureInfo === FALSE ) {
			$this->_overrides['signatureInfo'] = TRUE;
			return NULL;
		}

		if ( ! $signatureInfo instanceof \com\microsoft\wc\thing\SignatureInfo  && ! is_null($signatureInfo) ) {
			$signatureInfo = new \com\microsoft\wc\thing\SignatureInfo ($signatureInfo);
		}

		unset ($this->_overrides['signatureInfo']);
	
		return $signatureInfo;
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
} // end class Thing2
