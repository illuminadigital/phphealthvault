<?php
namespace com\microsoft\wc\methods\response\QueryPermissions;



/**
 * @XmlNamespaces ({
 *	@XmlNamespace(url="urn:com.microsoft.wc.methods.response.QueryPermissions", prefix="")
 * })
 * @XmlEntity	(xml="info")
 */
class Info extends \com\microsoft\wc\response\AnyMixed {
	/**
	 * The element of the response that contains the method specific return value(s).
	 * All response schemas contain the info element which contain the return value of the method. If the method does not define an info element, the method has no return value.
	 */

	/**
	 * List of manually overridden properties that should not be re-generated automatically
	 * @var array
	 */
	protected $_overrides = array();


	/**
	 * @XmlElement	(type="\com\microsoft\wc\types\ThingTypePermission", collection="true", name="thing-type-permission")
	 */
	protected $thingTypePermission;

	public function __construct($thingTypePermission = NULL) {
		$this->thingTypePermission = ($thingTypePermission===NULL) ? NULL : $this->validateThingTypePermission($thingTypePermission);
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
} // end class Info
