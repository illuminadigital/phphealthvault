<?php
namespace org\sifinfo\www\infrastructure\_2_x;



/**
 * @XmlNamespaces ({
 *	@XmlNamespace(url="http://www.sifinfo.org/infrastructure/2.x", prefix="")
 * })
 * @XmlEntity	(xml="OtherIdList")
 */
class OtherIdList {
	/**
	 */

	/**
	 * List of manually overridden properties that should not be re-generated automatically
	 * @var array
	 */
	protected $_overrides = array();


	/**
	 * @XmlElement	(type="\org\sifinfo\www\infrastructure\_2_x\OtherId", collection="true", name="OtherId")
	 */
	protected $otherId;

	public function __construct($otherId = NULL) {
		$this->otherId = ($otherId===NULL) ? NULL : $this->validateOtherId($otherId);
	}

	public function getOtherId($autoCreate = TRUE) {
		if ($this->otherId===NULL && $autoCreate && ! isset($this->_overrides['otherId']) ) {
			$this->otherId = $this->createOtherId();
		}
		return $this->otherId;
	}
	
	protected function createOtherId() {
		return array();
	}

	public function setOtherId($otherId) {
		$this->otherId = $this->validateOtherId($otherId);
	}

	protected function validateOtherId($otherId) {
		if ( ! is_array ($otherId) ) {
			$otherId = array($otherId);
		}
		$count = count($otherId);
		if ($count < 1) {
			throw new \Exception(sprintf('Supplied %s array has less than the required number (%d) of entries.', 'otherId', 1));
		}
		foreach ($otherId as $entry) {
			if (!($entry instanceof \org\sifinfo\www\infrastructure\_2_x\OtherId )) {
				throw new \Exception(sprintf('Supplied %s value was not %s', 'otherId', 'OtherId'));
			}
		}
	
		return $otherId;
	}

	public function addOtherId($otherId) {
		$this->otherId[] = $otherId;
	}
} // end class OtherIdList
