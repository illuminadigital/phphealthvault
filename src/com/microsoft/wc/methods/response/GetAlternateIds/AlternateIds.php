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
	 * List of manually overridden properties that should not be re-generated automatically
	 * @var array
	 */
	protected $_overrides = array();


	/**
	 * @XmlElement	(type="\com\microsoft\wc\types\String255nw", collection="true", name="alternate-id")
	 */
	protected $alternateId;

	public function __construct($alternateId = NULL) {
		$this->alternateId = ($alternateId===NULL) ? NULL : $this->validateAlternateId($alternateId);
	}

	public function getAlternateId($autoCreate = TRUE) {
		if ($this->alternateId===NULL && $autoCreate && ! isset($this->_overrides['alternateId']) ) {
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
		if ( $alternateId === FALSE ) {
			$this->_overrides['alternateId'] = TRUE;
			return NULL;
		}

		if ( ! is_array ($alternateId) && ! is_null($alternateId) ) {
			$alternateId = array($alternateId);
		}

		unset ($this->_overrides['alternateId']);
		$count = count($alternateId);
		if ($count < 0) {
			throw new \Exception(sprintf('Supplied %s array has less than the required number (%d) of entries.', 'alternateId', 0));
		}
		if ( ! empty($alternateId) ) {
			foreach ($alternateId as $entry) {
				if (!($entry instanceof String255nw)) {
					throw new \Exception(sprintf('Supplied %s value was not %s', 'alternateId', 'string255nw'));
				}
			}
		}
	
		return $alternateId;
	}

	public function addAlternateId($alternateId) {
		$this->alternateId[] = $alternateId;
	}
} // end class AlternateIds
