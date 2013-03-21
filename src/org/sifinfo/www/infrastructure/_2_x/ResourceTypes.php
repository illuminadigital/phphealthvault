<?php
namespace org\sifinfo\www\infrastructure\_2_x;



/**
 * @XmlNamespaces ({
 *	@XmlNamespace(url="http://www.sifinfo.org/infrastructure/2.x", prefix="")
 * })
 * @XmlEntity	(xml="ResourceTypes")
 */
class ResourceTypes {
	/**
	 */

	/**
	 * List of manually overridden properties that should not be re-generated automatically
	 * @var array
	 */
	protected $_overrides = array();


	/**
	 * @XmlElement	(type="\org\sifinfo\www\infrastructure\_2_x\ResourceType", collection="true", name="ResourceType")
	 */
	protected $resourceType;

	public function __construct($resourceType = NULL) {
		$this->resourceType = ($resourceType===NULL) ? NULL : $this->validateResourceType($resourceType);
	}

	public function getResourceType($autoCreate = TRUE) {
		if ($this->resourceType===NULL && $autoCreate && ! isset($this->_overrides['resourceType']) ) {
			$this->resourceType = $this->createResourceType();
		}
		return $this->resourceType;
	}
	
	protected function createResourceType() {
		return array();
	}

	public function setResourceType($resourceType) {
		$this->resourceType = $this->validateResourceType($resourceType);
	}

	protected function validateResourceType($resourceType) {
		if ( ! is_array ($resourceType) ) {
			$resourceType = array($resourceType);
		}
		$count = count($resourceType);
		if ($count < 1) {
			throw new \Exception(sprintf('Supplied %s array has less than the required number (%d) of entries.', 'resourceType', 1));
		}
		foreach ($resourceType as $entry) {
			if (!($entry instanceof ResourceType)) {
				throw new \Exception(sprintf('Supplied %s value was not %s', 'resourceType', 'ResourceType'));
			}
		}
	
		return $resourceType;
	}

	public function addResourceType($resourceType) {
		$this->resourceType[] = $resourceType;
	}
} // end class ResourceTypes
