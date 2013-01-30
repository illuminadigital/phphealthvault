<?php
namespace com\microsoft\wc\methods\response\GetThingType;



/**
 * @XmlNamespaces ({
 *	@XmlNamespace(url="urn:com.microsoft.wc.methods.response.GetThingType", prefix="")
 * })
 * @XmlEntity	(xml="info")
 */
class Info extends \com\microsoft\wc\methods\response\Info {
	/**
	 * The element of the request that contains the method specific parameters.
	 * All requests contain the info element to pass parameters that are specific to each method. If the method does not define an info element, the method does not take any parameters.
	 */

	/**
	 * @XmlElement	(type="\com\microsoft\wc\methods\response\GetThingType\ThingTypeInfo", collection="true", name="thing-type")
	 */
	protected $thingType;

	public function __construct($thingType = NULL) {
		$this->thingType = ($thingType===NULL) ? NULL : $this->validateThingType($thingType);
	}

	public function getThingType() {
		if ($this->thingType===NULL) {
			$this->thingType = $this->createThingType();
		}
		return $this->thingType;
	}
	
	protected function createThingType() {
		return array();
	}

	public function setThingType($thingType) {
		$this->thingType = $this->validateThingType($thingType);
	}

	protected function validateThingType($thingType) {
		if ( ! is_array ($thingType) && ! is_null($thingType) ) {
			$thingType = array($thingType);
		}
		$count = count($thingType);
		if ($count < 0) {
			throw new \Exception(sprintf('Supplied %s array has less than the required number (%d) of entries.', 'thingType', 0));
		}
		foreach ($thingType as $entry) {
			if (!($entry instanceof ThingTypeInfo)) {
				throw new \Exception(sprintf('Supplied %s value was not %s', 'thingType', 'ThingTypeInfo'));
			}
		}
	
		return $thingType;
	}

	public function addThingType($thingType) {
		$this->thingType[] = $thingType;
	}
} // end class Info
