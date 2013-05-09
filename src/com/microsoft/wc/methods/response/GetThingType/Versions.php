<?php
namespace com\microsoft\wc\methods\response\GetThingType;



/**
 * @XmlNamespaces ({
 *	@XmlNamespace(url="urn:com.microsoft.wc.methods.response.GetThingType", prefix="")
 * })
 * @XmlEntity	(xml="Versions")
 */
class Versions {
	/**
	 * The collection of all versions for a thing type.
	 */

	/**
	 * List of manually overridden properties that should not be re-generated automatically
	 * @var array
	 */
	protected $_overrides = array();


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

	public function getVersionInfo($autoCreate = TRUE) {
		if ($this->versionInfo===NULL && $autoCreate && ! isset($this->_overrides['versionInfo']) ) {
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
		if ( ! is_array ($versionInfo) ) {
			$versionInfo = array($versionInfo);
		}
		$count = count($versionInfo);
		if ($count < 1) {
			throw new \Exception(sprintf('Supplied %s array has less than the required number (%d) of entries.', 'versionInfo', 1));
		}
		foreach ($versionInfo as $entry) {
			if (!($entry instanceof \com\microsoft\wc\methods\response\GetThingType\VersionInfo )) {
				throw new \Exception(sprintf('Supplied %s value was not %s', 'versionInfo', 'VersionInfo'));
			}
		}
	
		return $versionInfo;
	}

	public function addVersionInfo($versionInfo) {
		$this->versionInfo[] = $versionInfo;
	}

	public function getThingTypeId($autoCreate = TRUE) {
		if ($this->thingTypeId===NULL && $autoCreate && ! isset($this->_overrides['thingTypeId']) ) {
			$this->thingTypeId = $this->createThingTypeId();
		}
		return $this->thingTypeId;
	}
	
	protected function createThingTypeId() {
		return new \com\microsoft\wc\types\Guid();
	}

	public function setThingTypeId($thingTypeId) {
		$this->thingTypeId = $this->validateThingTypeId($thingTypeId);
	}

	protected function validateThingTypeId($thingTypeId) {
		if ( ! $thingTypeId instanceof \com\microsoft\wc\types\Guid ) {
			$thingTypeId = new \com\microsoft\wc\types\Guid ($thingTypeId);
		}
	
		return $thingTypeId;
	}
} // end class Versions
