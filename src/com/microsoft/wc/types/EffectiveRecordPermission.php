<?php
namespace com\microsoft\wc\types;



/**
 * @XmlNamespaces ({
 *	@XmlNamespace(url="urn:com.microsoft.wc.types", prefix="t")
 * })
 * @XmlEntity	(xml="EffectiveRecordPermission")
 */
class EffectiveRecordPermission {
	/**
	 * A list of the permissions the calling application has to the specified record.
	 */

	/**
	 * List of manually overridden properties that should not be re-generated automatically
	 * @var array
	 */
	protected $_overrides = array();


	/**
	 * @XmlElement	(type="\com\microsoft\wc\types\Guid", name="record-id")
	 */
	protected $recordId;

	/**
	 * @XmlElement	(type="\com\microsoft\wc\types\ThingTypePermission", collection="true", name="thing-type-permission")
	 */
	protected $thingTypePermission;

	public function __construct($recordId = NULL, $thingTypePermission = NULL) {
		$this->recordId = ($recordId===NULL) ? NULL : $this->validateRecordId($recordId);
		$this->thingTypePermission = ($thingTypePermission===NULL) ? NULL : $this->validateThingTypePermission($thingTypePermission);
	}

	public function getRecordId($autoCreate = TRUE) {
		if ($this->recordId===NULL && $autoCreate && ! isset($this->_overrides['recordId']) ) {
			$this->recordId = $this->createRecordId();
		}
		return $this->recordId;
	}
	
	protected function createRecordId() {
		return new \com\microsoft\wc\types\Guid();
	}

	public function setRecordId($recordId) {
		$this->recordId = $this->validateRecordId($recordId);
	}

	protected function validateRecordId($recordId) {
		if ( ! $recordId instanceof \com\microsoft\wc\types\Guid ) {
			$recordId = new \com\microsoft\wc\types\Guid ($recordId);
		}
	
		return $recordId;
	}

	public function getThingTypePermission($autoCreate = TRUE) {
		if ($this->thingTypePermission===NULL && $autoCreate && ! isset($this->_overrides['thingTypePermission']) ) {
			$this->thingTypePermission = $this->createThingTypePermission();
		}
		return $this->thingTypePermission;
	}
	
	protected function createThingTypePermission() {
		return array();
	}

	public function setThingTypePermission($thingTypePermission) {
		$this->thingTypePermission = $this->validateThingTypePermission($thingTypePermission);
	}

	protected function validateThingTypePermission($thingTypePermission) {
		if ( $thingTypePermission === FALSE ) {
			$this->_overrides['thingTypePermission'] = TRUE;
			return NULL;
		}

		if ( ! is_array ($thingTypePermission) && ! is_null($thingTypePermission) ) {
			$thingTypePermission = array($thingTypePermission);
		}

		unset ($this->_overrides['thingTypePermission']);
		$count = count($thingTypePermission);
		if ($count < 0) {
			throw new \Exception(sprintf('Supplied %s array has less than the required number (%d) of entries.', 'thingTypePermission', 0));
		}
		if ( ! empty($thingTypePermission) ) {
			foreach ($thingTypePermission as $entry) {
				if (!($entry instanceof \com\microsoft\wc\types\ThingTypePermission )) {
					throw new \Exception(sprintf('Supplied %s value was not %s', 'thingTypePermission', 'ThingTypePermission'));
				}
			}
		}
	
		return $thingTypePermission;
	}

	public function addThingTypePermission($thingTypePermission) {
		$this->thingTypePermission[] = $thingTypePermission;
	}
} // end class EffectiveRecordPermission
