<?php
namespace com\microsoft\wc\methods\response\PutThings;



/**
 * @XmlNamespaces ({
 *	@XmlNamespace(url="urn:com.microsoft.wc.methods.response.PutThings", prefix="")
 * })
 * @XmlEntity	(xml="info")
 */
class Info extends \com\microsoft\wc\methods\response\Info {
	/**
	 */

	/**
	 * @XmlElement	(type="\com\microsoft\wc\thing\ThingKey", collection="true", name="thing-id")
	 */
	protected $thingId;

	public function __construct($thingId = NULL) {
		$this->thingId = ($thingId===NULL) ? NULL : $this->validateThingId($thingId);
	}

	public function getThingId() {
		if ($this->thingId===NULL) {
			$this->thingId = $this->createThingId();
		}
		return $this->thingId;
	}
	
	protected function createThingId() {
		return array();
	}

	public function setThingId($thingId) {
		$this->thingId = $this->validateThingId($thingId);
	}

	protected function validateThingId($thingId) {
		if ( ! is_array ($thingId) ) {
			$thingId = array($thingId);
		}
		$count = count($thingId);
		if ($count < 1) {
			throw new \Exception(sprintf('Supplied %s array has less than the required number (%d) of entries.', 'thingId', 1));
		}
		foreach ($thingId as $entry) {
			if (!($entry instanceof ThingKey)) {
				throw new \Exception(sprintf('Supplied %s value was not %s', 'thingId', 'ThingKey'));
			}
		}
	
		return $thingId;
	}

	public function addThingId($thingId) {
		$this->thingId[] = $thingId;
	}
} // end class Info
