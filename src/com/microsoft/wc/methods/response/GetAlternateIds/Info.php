<?php
namespace com\microsoft\wc\methods\response\GetAlternateIds;



/**
 * @XmlEntity	(xml="info")
 */
class Info {
	/**
	 * The element of the response that contains the method specific return value(s).
	 * All response schemas contain the info element which contain the return value of the method. If the method does not define an info element, the method has no return value.
	 */

	/**
	 * @XmlElement	(type="\com\microsoft\wc\methods\response\GetAlternateIds\AlternateIds", name="alternate-ids")
	 */
	protected $alternateIds;

	public function __construct($alternateIds = NULL) {
		$this->alternateIds = ($alternateIds===NULL) ? NULL : $this->validateAlternateIds($alternateIds);
	}

	public function getAlternateIds() {
		if ($this->alternateIds===NULL) {
			$this->alternateIds = $this->createAlternateIds();
		}
		return $this->alternateIds;
	}
	
	protected function createAlternateIds() {
		return NULL;
	}

	public function setAlternateIds($alternateIds) {
		$this->alternateIds = $this->validateAlternateIds($alternateIds);
	}

	protected function validateAlternateIds($alternateIds) {
		if (!is_alternate-ids($alternateIds)) {
			throw new \Exception(sprintf('Supplied %s value was not %s', 'alternateIds', 'alternate-ids'));
		}
	
		return $alternateIds;
	}
} // end class Info
