<?php
namespace com\microsoft\wc\methods\response\GetAlternateIds;



/**
 * @XmlNamespaces ({
 *	@XmlNamespace(url="urn:com.microsoft.wc.methods.response.GetAlternateIds", prefix="")
 * })
 * @XmlEntity	(xml="alternate-ids")
 */
class AlternateIds {
	/**
	 */

	/**
	 * @XmlElement	(type="\com\microsoft\wc\types\String255nw", collection="true", name="alternate-id")
	 */
	protected $alternateId;

	public function __construct($alternateId = NULL) {
		$this->alternateId = ($alternateId===NULL) ? NULL : $this->validateAlternateId($alternateId);
	}

	public function getAlternateId() {
		if ($this->alternateId===NULL) {
			$this->alternateId = $this->createAlternateId();
		}
		return $this->alternateId;
	}
	
	protected function createAlternateId() {
		return array();
	}

	public function setAlternateId($alternateId) {
		$this->alternateId = $this->validateAlternateId($alternateId);
	}

	protected function validateAlternateId($alternateId) {
		if ( ! is_array ($alternateId) && ! is_null($alternateId) ) {
			$alternateId = array($alternateId);
		}
		$count = count($alternateId);
		if ($count < 0) {
			throw new \Exception(sprintf('Supplied %s array has less than the required number (%d) of entries.', 'alternateId', 0));
		}
		foreach ($alternateId as $entry) {
			if (!($entry instanceof String255nw)) {
				throw new \Exception(sprintf('Supplied %s value was not %s', 'alternateId', 'string255nw'));
			}
		}
	
		return $alternateId;
	}

	public function addAlternateId($alternateId) {
		$this->alternateId[] = $alternateId;
	}
} // end class AlternateIds
