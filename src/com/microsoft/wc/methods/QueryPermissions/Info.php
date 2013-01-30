<?php
namespace com\microsoft\wc\methods\QueryPermissions;



/**
 * @XmlNamespaces ({
 *	@XmlNamespace(url="urn:com.microsoft.wc.methods.QueryPermissions", prefix="")
 * })
 * @XmlEntity	(xml="info")
 */
class Info extends \com\microsoft\wc\request\Info {
	/**
	 * The element of the request that contains method specific parameters.
	 * All requests contain the info element to pass parameters that are specific to each method. If the method does not define an info element, the method does not take any parameters.
	 */

	/**
	 * @XmlElement	(type="\com\microsoft\wc\types\Guid", collection="true", name="thing-type-id")
	 */
	protected $thingTypeId;

	public function __construct($thingTypeId = NULL) {
		$this->thingTypeId = ($thingTypeId===NULL) ? NULL : $this->validateThingTypeId($thingTypeId);
	}

	public function getThingTypeId() {
		if ($this->thingTypeId===NULL) {
			$this->thingTypeId = $this->createThingTypeId();
		}
		return $this->thingTypeId;
	}
	
	protected function createThingTypeId() {
		return array();
	}

	public function setThingTypeId($thingTypeId) {
		$this->thingTypeId = $this->validateThingTypeId($thingTypeId);
	}

	protected function validateThingTypeId($thingTypeId) {
		if ( ! is_array ($thingTypeId) ) {
			$thingTypeId = array($thingTypeId);
		}
		$count = count($thingTypeId);
		if ($count < 1) {
			throw new \Exception(sprintf('Supplied %s array has less than the required number (%d) of entries.', 'thingTypeId', 1));
		}
		foreach ($thingTypeId as $entry) {
			if (!($entry instanceof Guid)) {
				throw new \Exception(sprintf('Supplied %s value was not %s', 'thingTypeId', 'guid'));
			}
		}
	
		return $thingTypeId;
	}

	public function addThingTypeId($thingTypeId) {
		$this->thingTypeId[] = $thingTypeId;
	}
} // end class Info
