<?php
namespace com\microsoft\wc\methods\response\GetThingType;

use com\microsoft\wc\types\Guid;
use com\microsoft\wc\methods\response\GetThingType\VersionInfo;

/**
 * @XmlEntity	(xml="Versions")
 */
class Versions {
	/**
	 * The collection of all versions for a thing type.
	 */

	/**
	 * @XmlElement	(type="\com\microsoft\wc\methods\response\GetThingType\VersionInfo", collection="true", name="version-info")
	 */
	protected $versionInfo;

	/**
	 * @XmlAttribute	(type="string", name="thing-type-id")
	 */
	protected $thingTypeId;

	public function __construct($versionInfo = NULL, $thingTypeId = NULL) {
		$this->versionInfo = ($versionInfo===NULL) ? NULL : $this->validateVersionInfo($versionInfo);
		$this->thingTypeId = ($thingTypeId===NULL) ? NULL : $this->validateThingTypeId($thingTypeId);
	}

	public function getVersionInfo() {
		if ($this->versionInfo===NULL) {
			$this->versionInfo = $this->createVersionInfo();
		}
		return $this->versionInfo;
	}
	
	protected function createVersionInfo() {
		return array();
	}

	public function setVersionInfo($versionInfo) {
		$this->versionInfo = $this->validateVersionInfo($versionInfo);
	}

	protected function validateVersionInfo($versionInfo) {
		if ( ! $versionInfo instanceof VersionInfo ) {
			$versionInfo = new VersionInfo ($versionInfo);
		}
		$count = count($versionInfo);
		if ($count < 1) {
			throw new \Exception(sprintf('Supplied %s array has less than the required number (%d) of entries.', 'versionInfo', 1));
		}
		foreach ($versionInfo as $entry) {
			if (!($entry instanceof VersionInfo)) {
				throw new \Exception(sprintf('Supplied %s value was not %s', 'versionInfo', 'VersionInfo'));
			}
		}
	
		return $versionInfo;
	}

	public function addVersionInfo($versionInfo) {
		$this->versionInfo[] = $versionInfo;
	}

	public function getThingTypeId() {
		if ($this->thingTypeId===NULL) {
			$this->thingTypeId = $this->createThingTypeId();
		}
		return $this->thingTypeId;
	}
	
	protected function createThingTypeId() {
		return new Guid();
	}

	public function setThingTypeId($thingTypeId) {
		$this->thingTypeId = $this->validateThingTypeId($thingTypeId);
	}

	protected function validateThingTypeId($thingTypeId) {
		if ( ! $thingTypeId instanceof Guid ) {
			$thingTypeId = new Guid ($thingTypeId);
		}
	
		return $thingTypeId;
	}
} // end class Versions
